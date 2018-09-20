<?php


class ChatModel extends BaseModel {

	function getUsers(){
		$sql = "select * from chat_info";
		$result = $this->_dao->getRows( $sql );
		return $result;
	}

	function getUserById( $id ){
		// 注意要修改这里在的 id ，因为在 chat_info 表中，user_id 才表示的是用户的 id
		$sql = "select * from chat_info where user_id=$id";
		$result = $this->_dao->getOneRow( $sql );
		return $result;
	}


	function getUserByName( $name ){
		$sql = "select * from chat_info where username='$name'";
		$result = $this->_dao->getOneRow( $sql );
		return $result;	
	}

	function getUserCount(){
		$sql = "select count(*) from chat_info";
		$result = $this->_dao->getOneDate( $sql );
		return $result;	
	}

	function getIdByName( $name ){
		$result = $this->getUserByName( $name );
		$date = $result['id'] ? $result['id'] : null;
		return $date ;	
	}


	function checkUser( $name, $pass ){
		$sql = "select * from chat_info where username='$name' and password='$pass'";
		return $this->_dao->getOneRow( $sql )? true : false;
	}


	// 追加信息条数
	function initMsg( $line ){
		// 写法有不同，因为要获取最后的信息，所以要降序
		$sql = "select * from chat_info order by id desc limit 0,$line";
		$result = $this->_dao->getRows( $sql);
		// 因为是反起获取的，所以要重新排个序，不然，信息展示时时间是反的
		array_multisort($result);
		return $result;
	}


	// 将这个对象转换成字符串时
	function __toString(){
		return 'ChatModel 不直接输出哦！因为我是一个对象';
	}
}



