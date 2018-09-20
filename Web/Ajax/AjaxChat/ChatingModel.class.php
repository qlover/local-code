<?php
class ChatingModel extends BaseModel {

	// 将 ajax 提交信息插入数据库
	function insertUser( $id, $name, $text ){
		$sql = "insert into chat_info(user_id,username,text,over_time)values(";
		$sql .= "'$id','$name','$text',now())";
		$data = $this->_dao->exec( $sql );
		return $data;
	}

	// 获取传入时间后的所有信息
	function getInfoByTime( $time ){
		$sql = "select * from chat_info where over_time > '$time' ";
		$result = $this->_dao->getRows( $sql );
		// 因为是降序查询，所以要升序返回
		sort($result);
		return $result;
	}


	// 获取数据总共条数
	function getUserCount(){
		$sql = "select count(*) from chat_info";
		$result = $this->_dao->getOneDate( $sql );
		return $result;	
	}


	// 追加信息条数
	function initMsg(){
		// 写法有不同，因为要获取最后的信息，所以要降序
		// 又因为这个是 Ajax 提交后追加，所以取一条
		$sql = "select * from chat_info order by id desc limit 0,1";
		$result = $this->_dao->getRows( $sql );
		return $result;
	}


}
