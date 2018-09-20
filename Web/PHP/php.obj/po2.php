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
define('PI',3.1415926);   // 定义的一个普通常量
const G = 9.87;
// 定义一个类
class Info{
	const PI = 3.14;   // 定义类常量
	const G = 9.8; 
	var $name = 'qlover';
	public $age = 19;
	static $pi = 3;
	static public $sex = '女';

	function run($n,$a){
		echo "<br />$n,$a";
	}
}

$n1 = Info::PI;
echo "Info::Pi=". $n1;

echo "<br /> PI = ".PI;
echo "<br /> G = ".G;

$o1 = new Info();
echo $o1->name;
echo $o1->age;

echo "<br />".Info::PI;    // 访问类常量
echo "<br />".Info::$pi;		// 访问静态属性

$o1->run(10,20);

?>


<h2>方法</h2>
<?php
class Info2{
	public $n1 = 10;
	static $n2 = 100;
	function run(){
		echo "<br />".$this->n1;
		echo "<br />".self::$n2;   //  实例方法中也可以使用静态属性
	}

	static function runnum(){
		// 下面一排会报错
		// echo "<br />".$this->n1;    // 静态方法中一般不使用实例属性
		echo "<br />".self::$n2;	
	}

}
$o1 = new Info2();
$o1->run();
Info2::runnum();

?>

</body>
</html>














