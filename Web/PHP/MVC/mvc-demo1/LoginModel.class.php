<?php
/*
* 数据模型
*/
// 载入 Sql 类
require './Sql.class.php';
class LoginModel{

	function getAllUser(){
		$config = array(			// 控制器里面不要有属性！！！！！
			'host' => 'localhost',
			'user' => 'root',
			'prot' => '3306',
			'pass' => '123',
			'char' => 'utf8',
			'dbname' => 'pratice'
		);

		$sql = "select * from login";
		$sqlo = Sql::getInstance($config);
		$data = $sqlo->getRows( $sql );  // 获取所有数据 
		return $data;
	}
	function getUserCount(){
		$config = array(
			'host' => 'localhost',
			'user' => 'root',
			'prot' => '3306',
			'pass' => '123',
			'char' => 'utf8',
			'dbname' => 'pratice'
		);
		$sql = "select count(*) as cnt from login";
		$sqlo = Sql::getInstance($config);
		$data = $sqlo->getOneData( $sql );  // 获取一条数据 		
		return $data;
	}
}


