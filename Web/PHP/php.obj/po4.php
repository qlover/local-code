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
$o1 = new Info('A');
$o2 = new Info('B');
$o3 = new Info('C');
echo "<br />"; var_dump($o1);
echo "<br />"; var_dump($o2);
echo "<br />"; var_dump($o3);
echo "<hr />";  

unset($o1);
echo "<br />程序结束";    // 在此处程序运行完了


?>

</body>
</html>














