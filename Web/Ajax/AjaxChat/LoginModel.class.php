<?php


class LoginModel extends BaseModel {

	function getUsers(){
		$sql = "select * from user_info";
		$result = $this->_dao->getRows( $sql );
		return $result;
	}

	function getUserById( $id ){
		$sql = "select * from user_info where id=$id";
		$result = $this->_dao->getOneRow( $sql );
		return $result;
	}


	function getUserByName( $name ){
		$sql = "select * from user_info where username='$name'";
		$result = $this->_dao->getOneRow( $sql );
		return $result;	
	}

	function getUserCount(){
		$sql = "select count(*) from user_info";
		$result = $this->_dao->getOndeDate( $sql );
		return $result;	
	}

	function getIdByName( $name ){
		$result = $this->getUserByName( $name );
		$date = $result['id'] ? $result['id'] : null;
		return $date ;	
	}


	function checkUser( $name, $pass ){
		$sql = "select * from user_info where username='$name' and password='$pass'";
		return $this->_dao->getOneRow( $sql )? true : false;
	}

	// 将这个对象转换成字符串时
	function __toString(){
		return 'LoginModel 不直接输出哦！因为我是一个对象';
	}


}

