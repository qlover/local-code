<?php


class SqlDB {


	private $link = null;
	private static $_instance = null;
	private $conf = array();


	public static function getInstance( $conf ){
		if( !isset( self::$_instance )){
			self::$_instance = new self( $conf );
		}
		return self::$_instance;
	}

	private function __construct( $conf ){
		// 保证数据有效性
		$this->conf['host'] = empty($conf['host']) ? 'localhost' : $conf['host'];
		$this->conf['prot'] = empty($conf['prot']) ? '3306' : $conf['prot'];
		$this->conf['user'] = empty($conf['user']) ? 'root' : $conf['user'];
		$this->conf['password'] = empty($conf['password']) ? '' : $conf['password'];
		$this->conf['charset'] = empty($conf['charset']) ? 'utf-8' : $conf['charset'];
		$this->conf['dbname'] = empty($conf['dbname']) ? 'chat_ajax' : $conf['dbname'];

		$this->link = mysql_connect(
				"{$this->conf['host']}:{$this->conf['prot']}",
				"{$this->conf['user']}",
				"{$this->conf['password']}"
			) or die('数据库连接失败');
		$this->setChar($this->conf['charset']);
		$this->useDB($this->conf['dbname']);
	}

	public function useDB( $dbname ){
		mysql_query("use $dbname");
	}

	public function setChar( $char ){
		mysql_query("set names $char");
	}
	public function closeDB(){
		mysql_close($this->link);
	}

	// 执行语句
	public function exec( $sql ){
		$result = mysql_query( $sql, $this->link );
		return $result ? true : false;
	}

	// 检查语句
	public function query( $sql ){
		$result = mysql_query( $sql, $this->link);
		if( !$result ){
			echo "<h3>语句执行错误</h3>";
			echo "错误代号：" . mysql_errno() .'<br />';
			echo "错误信息：" . mysql_error() . '<br />';
			echo "错误语句：" . $sql ;
			die;
		}
		return $result;
	}

	// 获取一条数据
	public function getOneRow( $sql ){
		$result = $this->query( $sql );
		$rec = mysql_fetch_assoc( $result );
		if($rec === false){
			echo '<span class="tip">没有你要的信息</span>';
		}else{
			mysql_free_result( $result ); 
			return $rec;
		}
	}

	// 获取多条信息
	public function getRows( $sql ){
		$result = $this->query( $sql );
		$rearr = array();
		while ( $rec = mysql_fetch_array($result, MYSQL_ASSOC)) {
			$rearr[] = $rec;
		}
		return $rearr;
	}



	// 获取一个数据
	public function getOneDate( $sql ){
		$result = $this->query( $sql );
		$rec = mysql_fetch_row( $result );
		$data = $rec[0];
		mysql_free_result( $result ); 
		return $data;
	}


	// 不能克隆该对象
	private function __clone(){

	}

}

