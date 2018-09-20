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
	public $name;
	function __construct( $n ){
		$this->name = $n;
	}
	function __tostring(){
		$str = '姓名：'.$this->name;
		return $str;   // 返回字符串
	}
}
$a1 = new A('qlover');
echo $a1;  // 报错
// 因为 echo 后面跟的一定是个字符串，所以 $a1 这个对象不能转换成字符串

?>
</body>
</html>

