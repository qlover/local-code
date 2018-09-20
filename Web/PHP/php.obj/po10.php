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
class A{
	// 定义一个属性，这个属性来存放苦干个不存在的属性
	protected $prop_list = array();
	// 这个方法会在 A 对象使用一个不存在的属性进行赋值的时候自动调用
	function __set($p, $v){
		$this->prop_list[$p] = $v;
	}
	function __get($p){
		if(isset($this->prop_list[$p])){
			return $this->prop_list[$p];
		}else{
			return "该属性不存在";
		}
	}

	function __isset($pror){
		$v1 = isset($this->prop_list[$prop]);
		return $v1;
	}
}
$a1 = new A();
$a1->p1 = 1;
$a1->p2 = 10;
$a1->name = 'qlover';
echo "<br />输出未定义的，不存在的属性和值";
echo "<br />a1->p1：". $a1->p1;
echo "<br />a1->p2：". $a1->p2;
echo "<br />a1->name：". $a1->name;
echo "<br />a1->age：". $a1->age;



?>
</body>
</html>

