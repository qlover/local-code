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
	static public $name = 'a';
	static protected $age = 20;
	function run(){
		echo "<br />{$this->name}";
	}
}
class B extends A{
	public $a = 20;
	static function show(){
		echo "<p>父类的名字是" . parent::$name . "</p>";
		echo "<p>A类的年龄是" . A::$age . "</p>";
	}
}

class P{
	public $name = 'qlover';
	protected $age = 20;
	private $sex = '男';
}

$p1 = new P();
$f1 = new B();
B::show();
echo $p1->name;
/*echo $p1->age;
echo $p1->sex;*/



$o1 = new B();
$o1->run();




?>

</body>
</html>














