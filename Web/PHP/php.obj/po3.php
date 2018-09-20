<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 面向对象--构造方法</title>
<link rel="stylesheet" href="css/css.css">
<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<?php

class Info{
	public $name ;
	public $age;
	public $sex;

	function run(){
		echo $this->name.'|'.$this->age.'|'.$this->sex.'<br />';
	}

	// 构造方法
	function __construct($n,$a,$s){
		$this->name = $n;
		$this->age = $a;
		$this->sex = $s;
	}
}
/*$o1 = new Info();
$o1->name = 'qlover';
$o1->age = '19';
$o1->sex = '男';
$o1->run();

$o2 = new Info();
$o2->name = 'lee';
$o2->age = '20';
$o2->sex = '女';
$o2->run();
*/


$o1 = new Info('qlover',18,'男');
$o1->run();
$o2 = new Info('lee',19,'女');
$o2->run();


echo "<hr /><br /><br />";


class Info2{
	public $name ;
	function run(){
		echo $this->name;
	}

	// 构造方法
	function __construct($n){
		$this->name = $n;
	}
	// 析构方法
	function __destruct(){   // 不能有参数
		echo "{$this->name}被销毁了";
	}
}
$oo1 = new Info2('qlover');  // 程序运行结束，变量肯定都会被销毁

echo "<br />还没有被销毁";
?>

</body>
</html>














