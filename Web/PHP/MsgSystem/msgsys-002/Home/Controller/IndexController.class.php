<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

	// 倒置元素
	private function rev($array){
		$arr = $array;
		$cnt = count($arr);
		for($i = 0; $i < floor($cnt /2); $i++){
			$t = $arr[$i];
			$arr[$i] = $arr[$cnt-$i-1];
			$arr[$cnt-$i-1] = $t;
		}
		return $arr;
	}
    public function index(){
      
      $this->display();
    }

    // 主要
    public function main(){
		define('UID', $_COOKIE['msgsys_uid']);
		define('UNAME',$_COOKIE['msgsys_uname']);
    	if (!UID || !UNAME) {
    		$this->success('当前没有用户登录,可以去登录','login.html',2);
    	}else{
    		// 本地存放有用户信息,直接操作留言板
    		$model = new \Model\ContentModel();
    		// $result = $model->getOneMsg(UNAME);
    		$result = $model->getAllMsgs();
    		// 将获取数据排序
    		// 可以解决在静态页面中将数据添加到第一条
    		// $result = array_reverse($result);
    		$result = $this->rev($result);
    		$this->assign('result',$result);
    		$this->assign('is_login',true);
	    	$this->display();
    	}
    }


    // 注册
	public function register(){

		$this->display();
    }


    // 登录 
    public function login(){
        // 这样判断更准确
    	if ( !empty( $_COOKIE['msgsys_pass'])  ||
            !empty($_COOKIE['msgsys_uname']) ) {
    		$this->success('你已经登录过了','main.html', 3);
    		die ;
    	}
    	$this->display();
    }

    // 校验用户名
    public function checkName(){
    	$model = D('user');
    	$uname = $_POST['uname'];
    	$result = $model->where("uname='$uname'")->select();
    	if( !empty($result) ){
    		echo '用户已存在';
    		return false;
    	}else{
    		// echo '用户已可以用';
    		return true;
    	}
    }


    // 校验
    public function check(){
    	if ( empty($_POST['uname']) || empty($_POST['upass']) ) {
    		$this->error('非法访问','index.html', 3);
    		die;
    	}
    	$uname = $_POST['uname'];
    	$model = D('user');
    	$re = $model->where("uname='$uname'")->select();
    	if ( !empty($re) ) {
    		echo '该用户已存在';
    	}
    }

    // 注册
    public function toRegister() {
   		$uname = $_POST['uname'];
    	$model = D('user');
    	$re = $model->where("uname='$uname'")->select();
    	if ( empty($_POST['uname']) || empty($_POST['upass']) || !empty($re) ) {
    		$this->error('操作失败','register.html', 3);
    		die;
    	}else{
    		$cfg = array(
    			'uname' => $uname,
    			'upassword' => $_POST['upass'],
    			'ureg_time' => date('Y-m-d H:i:s'),
    		);
    		$model->add($cfg);
    		$model = new \Model\UserModel();
    		$model->regDefault($uname);

    		// 注册成功后，自动登录，用COOKIE
    		$uid = $model->getUidByName($cfg['uname']);
    		cookie('uid', $uid,'expire=300&prefix=msgsys_');
    		cookie('uname', $cfg['uname'],'expire=300&prefix=msgsys_');
    		cookie('upass', $cfg['upass'],'expire=300&prefix=msgsys_');
			$this->success('注册成功','main.html',3);
    	}

    }
    // 登录
    public function toLogin() {
    	if ( empty($_POST) ) {
    		$this->error('操作失败','login.html', 3);
    		die;
    	}
    	$model = D('user');
    	$arr = $_POST;
    	$result = $model->where($arr)->select();
    	if ($result) {
			$model = new \Model\UserModel();
			$uid = $model->getUidByName($_POST['uname']);

    		// 如果记住密码
    		if ( $_POST['remember'] == 'on') {
	    		cookie('uid', $uid,'expire=300&prefix=msgsys_');
	    		cookie('uname', $_POST['uname'],'expire=300&prefix=msgsys_');
	    		cookie('upass', $_POST['upass'],'expire=300&prefix=msgsys_');
	    		// echo 'cookie 设置完成';
    		}
    		// 自动登录
    		else{
	    		cookie('uid', $uid,'expire=100&prefix=msgsys_');
	    		cookie('uname', $_POST['uname'],'expire=100&prefix=msgsys_');
	    		cookie('upass', $_POST['upass'],'expire=100&prefix=msgsys_');
    		}
	    	// dump($arr);
	    	if ( empty($_POST) ) {
	    		$this->error('操作失败,先去登录吧','login.html', 3);
	    		die;
	    	}
    		$this->success('登录成功','main.html', 3);
    	}else{
    		$this->error('登录失败','login.html', 3);
    	}
    }

    // 登出
    public function quit(){
    	cookie(null,'msgsys');
    	if ( !$_COOKIE['msgsys_upass'] || !$_COOKIE['msgsys_uname'] ) {
    		echo 'true';
    	}else{
    		echo 'false';
    	}
    }

    // 留言
    public function message() {
    	$args = array(
    		'uid' => $_POST['uid'],
    		'text' => $_POST['text'],
    		'time' => date('Y-m-d H:i:s'),
    		'uname' => $_POST['uname'],
    	);

    	$model = new \Model\ContentModel();
    	$re = $model->setOneData($args);
    	if( $re ){
    		// echo '留言成功';
	   		$re = $model->getUserLast($args['uname']);
	   		// 给客户端返回 JSON 格式
	   		$str = json_encode($re);
	   		echo $str;
    	}else{
    		echo 'false';
    	}

    	
    }

}
