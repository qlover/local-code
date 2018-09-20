<?php
namespace Model;
use \Think\Model;

/**
 * 为 msg_content 提供的类
 */
class ContentModel extends Model {


	// 插入一条数据
	public function setOneData($val){
		$re = $this->add($val);
		return $re;
	}


	// 获取当前用户的一条留言
	public function getOneMsg($uname){
		$re = $this->field('uid,uname,text,time')
				->where("uname='$uname'")
				->select();
		return $re;
	}

	// 获取当前用户的最后近一条信息
	public function getUserLast	($uname){
		$re = $this->where("uname='$uname'")
				->order('id desc')
				->limit(1)
				->select();
		return $re;
	}


	// 获取当前用户所有留言
	public function getMsgs($uname){
		$re = $this->field('uid,uname,text,time')
				->where("uname='$uname'")->order('id desc')->select();
		return $re;
	}

	// 获取留言库中所有数据
	public function getAllMsgs(){
		$re = $this->select();
		return $re;
	}
}