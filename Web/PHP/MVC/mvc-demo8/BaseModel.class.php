<?php
require './Sql.class.php';
class BaseModel{
	protected $_dao = null;
	function __construct(){
		$config = array(
			'host' => 'localhost',
			'user' => 'root',
			'prot' => '3306',
			'pass' => '123',
			'char' => 'utf8',
			'dbname' => 'test'
		);
		$this->_dao = Sql::getInstance( $config ); 
	}
}
