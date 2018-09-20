<?php
class BaseModel {
	protected $_dao = null;
	function __construct(){
		$config = array(
			'host' => 'localhost',
			'user' => 'root',
			'prot' => '3306',
			'password' => 'root123',
			'charset' => 'utf8',
			'dbname' => 'chat_ajax'
		);
		$this->_dao = SqlDB::getInstance( $config ); 
	}
}
