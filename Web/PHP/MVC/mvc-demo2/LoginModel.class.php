<?php
/*
* 基础模型类
*
*	在 demo1 中有这样一段注释，模型文件中不能有属性，那如果出现重复该怎么办
*/
require './BaseModel.class.php'; 

class LoginModel extends BaseModel{

	function getAllUser(){
		$sql = "select * from user";
		// $sqlo = Sql::getInstance($config);
		$data = $this->db->getRows( $sql ); 
		// $this->db 获取的是 BaseModel 这个继承的父类中的 $bd 实例属性
		// 而父类中的该实例属性是存放 Sql 类的对象，也就等于父类中的 $this->db
		// $thips->db->getRows() 获取父类中 Sql 对象的 getRows() 方法
		return $data;
	}
	function getUserCount(){
		$sql = "select count(*) as cnt from user";
		// $sqlo = Sql::getInstance($config);
		$data = $this->db->getOneData( $sql );  // 获取一条数据 		
		return $data;
	}

	// 扩展更多方法

	// 以用户 id 获取该用户一条数据
	function getUserById( $id ){
		$sql = "select * from user where Id = $id";
		$data = $this->db->getOneRow( $sql );
		return $data;
	}
	function getUserByName( $name ){
		$sql = "select * from user where user = '{$name}' ";
		$data = $this->db->getOneRow( $sql );
		return $data;
	}
}

// 到此该类已经更简单明了了
