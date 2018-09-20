<script src="js/main.js"></script>
<link rel="stylesheet" href="css/css.css">
<?php
header("Content-Type;text/html;charset=utf-8");
// echo "<h1>面向对象总结</h1>";


// crate a object
class Sql{

	public $host;
	public $user;
	protected $pass;



	// 构造函数
	function __construct( $h, $u, $p){
		$this->host = $h;
		$this->user = $u;
		$this->pass = $p;
	}

	function sqlInfo(){
		echo "<h2>{$this->host},{$this->user},{$this->pass}</h2>";
	}

}

$sqlo = new Sql('localhost','root','123');
$sqlo->sqlInfo();



