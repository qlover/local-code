<?php
namespace Model;
use \Think\Model;

class UserModel extends Model {

	/**
	 * 判断该用户是否存在
	 * 存在返回 true
	 * 不存在返回 false
	 */
	// 校验
	public function checkByName($uname){
		$result = $this->where("uname='$uname'")->select();
		return empty($result) ? false : true;
	}

	// 注册时添加一条信息
	public function regDefault($uname){
	
		$list = $this->where("uname='$uname'")->select();
		if( empty($list) ){
			return 0;
		}
		$cfg = array(
			'uid' => $list[0]['uid'],
			'uname' => $list[0]['uname'],
			'text' => 'Hello,I am '.$list[0]['uname'],
			'time' => date("Y-m-d H:i:s"),
		);
		// 添加
		$model = new \Model\ContentModel();
		$re = $model->add($cfg);
	}

	// 获取 UID 
	public function getUidByName($uname){
		$re = $this->field('uid')->where("uname='$uname'")->select();
		if( !empty($re[0]) ){
			return $re[0]['uid'];
		}else{
			echo -1;
		}
	}
}
