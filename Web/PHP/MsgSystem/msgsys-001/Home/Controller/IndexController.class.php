<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	// 本地存储的用户信息
		if( !empty($_COOKIE['msgsys'])){
			define('UID', $_COOKIE['msgsys']['uid']);
			define('UNAME', $_COOKIE['msgsys']['uname']);
	        $this->display();
		}else {
			echo '拉取用户信息失败，需要重新登录';
			$this->display();
		}

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

    // 注册
    public function register(){

    	// 校验用户名
      	$model = D('user');
    	$uname = $_POST['uname'];
    	$result = $model->where("uname='$uname'")->select();
    	if( !empty($result) ){
    		echo '用户已存在';
    		return false;
    	}else{
    		// echo '用户已可以用';
    		$model = D('user');

    		// 配置需要添加用户的信息
	    	$msgUser = array(
	    		'uname' => $_POST['uname'], 
	    		'upassword' => $_POST['upass'], 
	    		'ureg_time' => date("Y-m-d H:i:s"), 
	    	);
	    	// 添加
	    	$model->add($msgUser);

	    	// 查询添加后该用户 id 值
	    	$uname = $msgUser['uname'];
	    	$uid = $model->field('uid')->where("uname='$uname'")->select();
	    	$uid = $uid[0]['uid'];


	    	/* 默认添加一条数据 */
	    	// 配置添加内容信息 
	    	$msgContent = array(
	    		'uid' => $uid,
	    		'text' => 'Hello,I am '.$msgUser['uname'],
	    		'uname' => $msgUser['uname'],
	    		'time' => date("Y-m-d H:i:s"),
	    	);
	    	$model = D('content');
	    	$model->add($msgContent);
	    	echo '注册成功';

	    	// 注册自动登录
	     	$model = D('user');

			$msgUser = array(
				'uname' => $_POST['uname'], 
				'upassword' => $_POST['upass'], 
			);

			$result = $model->where($msgUser)->select();
			if (empty($result)) {
				echo '登录失败，可能是密码错误';
			}else{
				echo $result[0]['uname'].'登录成功';
				setcookie('msgsys[uname]', $result[0]['uname'], time() + 600, '/msgsys-001');
				setcookie('msgsys[uid]', $result[0]['uid'], time() + 600, '/msgsys-001' );

			}   	
    		return true;
    	}  	

    }

    // 登录
    public function login() {
    	$model = D('user');

    	$msgUser = array(
    		'uname' => $_POST['uname'], 
    		'upassword' => $_POST['upass'], 
    	);

    	$result = $model->where($msgUser)->select();
    	if (empty($result)) {
    		echo '登录失败，可能是密码错误';
    	}else{
    		echo $result[0]['uname'].'登录成功';
    		// 登录成功后有个很重要的事，就是怎么可以在提交留言的时候获取当前的用户
    		// 这里就需要用上 本地存储信息了，Session 或者是 Cookies
    		
    		/**
    		 * 为本地设置 Cookie
    		 */
    		// 并且有效期在 10 分钟后
    		setcookie('msgsys[uname]', $result[0]['uname'], time() + 600, '/msgsys-001');
    		setcookie('msgsys[uid]', $result[0]['uid'], time() + 600, '/msgsys-001' );
    		// echo 'Cookie 设置成功';
    	}
	}


	// 退出
	public function loginOut(){
		// setcookie('msgsys[uname]');
		// setcookie('msgsys[uid]');
		setcookie('msgsys[uname]', '', time() - 11600, '/msgsys-001');
		setcookie('msgsys[uid]', '', time() - 11600, '/msgsys-001' );
		echo '已退出!';
	}


	/**
	 * 留言部分
	 */

	// 留言
	public function msg(){
		$model = new \Model\ContentModel();
		$msg = $_POST['text'];
		$model->setMsg($msg);
		// echo $msg;
	}





}