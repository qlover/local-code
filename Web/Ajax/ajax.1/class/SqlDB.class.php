<?php

class SqlDB{

	private $sqlInfo = array();
	private $link = null;

	public function __construct( $conf ){

		$this->sqlInfo['host'] = !empty( $conf['host'] ) ? $conf['host'] : 'localhost';
		$this->sqlInfo['port'] = !empty( $conf['port'] ) ? $conf['port'] : '3306' ;
		$this->sqlInfo['user'] = !empty( $conf['user'] ) ? $conf['user'] : 'root' ;
		$this->sqlInfo['password'] = !empty( $conf['password'] ) ? $conf['password'] : '' ;
		$this->sqlInfo['charset'] = !empty( $conf['charset'] ) ? $conf['charset'] : 'utf8' ;
		$this->sqlInfo['dbname'] = !empty( $conf['dbname'] ) ? $conf['dbname'] : 'test' ;

		$this->link = mysql_connect("{$this->sqlInfo['host']}:{$this->sqlInfo['port']}",
				"$this->sqlInfo['user']","$this->sqlInfo['password']") or
				 die('数据库连接失败');
		$this->setChar( $this->sqlInfo['charset']);
		$this->useDB( $this->sqlInfo['dbname']);

	}


	public function getRows( $sql ) {
		$result = $this->query( $sql );
		$rerr = array();
		while( $rec = mysql_fetch_array( $result, MYSQL_ASSOC)){
			$rerr[] = $rec;
		}
		mysql_free_result($result);
		return $rerr;
	}
	public	function getOneData( $sql ){
		$result = $this->query( $sql );
		$rec = mysql_fetch_row( $result );  
		$data = $rec[0];
		mysql_free_result( $result ); 
		return $data;
	}
	public function setChar( $charset ) {
		mysql_query("set names $charset");
	}

	public function useDB( $dbname ) {
		mysql_query("use $dbname");
	}

	public function closeDB( ){
		mysql_close( $this->link );
	}
	

	public function exec( $sql) {
		$result = $this->query( $sql );
		return $result ? true : false;
	}

	public function query( $sql ){
		$result = mysql_query($sql);
		if( !$result ){
			echo "<h3>语句执行错误</h3>";
			echo "错误代号：" . mysql_errno() ."<br />";
			echo "错误信息：" . mysql_error() ."<br />";
			echo "错误语句：" . $sql ."<br />";
			die();
		}
		return $result;
	}
	
}