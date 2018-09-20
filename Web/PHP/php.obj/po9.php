<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 面向对象--单例模式</title>
<link rel="stylesheet" href="css/css.css">
<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<?php

// 设计一个只有创造出它的一个对象的类
class Single{
	// 1.私有化构造方法
	private function __construct(){

	}
	// 2.定义一个静态属性，初始为 null
	static $instance = null;
	// 3.定义一个静态方法，从中判断对象的数量
	static function getSingle(){
		if( !isset( self::$instance ) ){
			$obj = new self();
			self::$instance = $obj;
			return self::$instance;
		}else{
			return self::$instance;
		}
	}
}
//$o1 = new Single();  // 该类的构造方法私有仑，出错了不能 new 出对象
//$o2 = new Single();  // 不能 new 出对象
$o1 = Single::getSingle();
$o2 = Single::getSingle();

var_dump($o1);echo "<br />";
var_dump($o2);echo "<br />";

?>
</body>
</html>

