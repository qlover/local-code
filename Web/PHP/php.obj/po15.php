<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 面向对象</title>
<link rel="stylesheet" href="css/css.css">
<script type="text/javascript" src="js/main.js"></script>
</head>

<body>

<?php

class A{
	static $p1 = 1;
	static function show(){
		echo "<br />self::p1 = ". self::$p1;
		echo "<br />static::p1 = ". static::$p1; // 说明 static 取得了当前的类
	}
}
class B extends A{
	static $p1 = 11;  // 重写
}
A::show();
echo "<hr />";
B::show();

?>
</body>
</html>

