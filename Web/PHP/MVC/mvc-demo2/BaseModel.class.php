<?php
// 载入 Sql 类
require './Sql.class.php';
class BaseModel{
	// 用于存放数据库的实例对象
	protected $db = null;

	function __construct(){
		$config = array(
			'host' => 'localhost',
			'user' => 'root',
			'prot' => '3306',
			'pass' => '123',
			'char' => 'utf8',
			'dbname' => 'pratice'
		);
		$this->db = Sql::getInstance( $config ); // 
	}




}
