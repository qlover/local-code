<script src="js/main.js"></script>
<link rel="stylesheet" href="css/css.css">
<?php
header("Content-Type;text/html;charset=utf-8");
// echo "<h1>面向对象总结</h1>";


// crate a object
class Sql{
	const Info = 'MySql';
	// 普通属性
	public $host;  // 公共的普通属性
	// 静态属性
	static public $pass = '123';  // 公共的静态属性

/*	function __construct( $host ){
		$this->host = $host;
	}
*/
	public function sqlInfo(){
		echo "<br />主机地址是:". $this->host;

	}

}

$sqlo = new Sql();
$sqlo->host = 'localhost';
$sqlo->sqlInfo();
echo '<br/>'.Sql::Info;






