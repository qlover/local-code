<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 面向对象--工厂模式</title>
<link rel="stylesheet" href="css/css.css">
<script type="text/javascript" src="js/main.js"></script>
</head>
<body>



<h2>重写</h2>
<?php

class A{}
class B{}
class C{}

// 设计一个工厂类，这个工厂类有一个静态方法
class Factory{
	// 传入参数，将参数作为可变类名
	static function getFactory( $className ){
		$obj = new $className();  // new 一个可变类
		return $obj;  // 返回这个创建的类
	}
}
$o1 = Factory::getFactory("A");  // 创建了 A 类
$o2 = Factory::getFactory("B");  // 创建了 B 类
$o3 = Factory::getFactory("A");  // 创建了 C 类


?>
</body>
</html>














