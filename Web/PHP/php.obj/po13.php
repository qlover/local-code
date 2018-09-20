<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 面向对象--自动加载</title>
<link rel="stylesheet" href="css/css.css">
<script type="text/javascript" src="js/main.js"></script>
</head>

<body>

<?php

class A{
	public $p1 = 1;
	protected $p2 = 2;
	private $p3 = 3;
	static $p4 = 4;
	// 用一个类中的公共方法来遍历所有的实例属性
	function showAllProp(){
		foreach( $this as $key => $value ){
			echo "<br />属性$key=$value";
		}
	}
}
$a1 = new A();
$a1->showAllProp();

?>
</body>
</html>

