<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 面向对象</title>
<link rel="stylesheet" href="css/css.css">
<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<h2>面向过程实现</h2>
<?php
// 定义一个可以输出信息的函数
// 第一步
function pntInfo($n, $a, $s){
	echo "<br />我的名字叫{$n},今年{$a}岁，性别{$s}。";
}

// 定义几个变量存放一个人信息
$name = 'qlover';  // 第二步
$age = 18;		// 第三步
$sex = '男';    // 第四步
// 第五步
pntInfo($name,$age,$sex);

// 如果还有一个人的信息则

// 定义几个变量存放另一个人信息
$name = 'Lee';  // 第二步
$age = 19;		// 第三步
$sex = '女';    // 第四步
// 第五步
pntInfo($name,$age,$sex);

?>


<h2>面向对象编程</h2>
<?php

// 首先创建一个需要保存信息的类
class Info{
	// 定义一系列的说明
	var $name = 'qlover';   // 保存姓名的一个特征，其实就是个变量
	var $age = 19;		 // 保存年龄的一个特征，其实就是个变量
	var $sex = '男';      // 保存性别的一个特征，其实就是个变量
	// 定义一系列的完成动作
	// 定义输出信息的一个
	function pntInfo(){
		echo "<br />我的名字叫{$this->name},今年{$this->age}岁，性别{$this->sex}。";
	}
}
// 实例化一次
$o1 = new Info();
$o1->pntInfo();

// 实例化一次 
$o2 = new Info();
$o2->name = 'Lee';
$o2->age = 19;
$o2->sex = '女';
$o2->pntInfo();

?>

<h2>传值</h2>

<?php

$n1 = 10;
$n2 = $n1;   // 值传递
$n2++;
echo '<br />'.$n1.'|'.$n2;

$n1 = 10;
$n2 = & $n1;   // 引用传递
$n2++;
echo '<br />'.$n1.'|'.$n2;

class CC{
	var $n1 = 10;
}
$o1 = new CC();
$o2 = $o1;
$o1->n1 = 100;
echo "<br />". $o1->n1.'|'. $o2->n1;

$o3 = new CC();
$o4 = & $o3;
$o3->n1 = 100;
echo "<br />". $o3->n1.'|'. $o4->n1;


?>


</body>
</html>














