<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 面向对象---重写</title>
<link rel="stylesheet" href="css/css.css">
<script type="text/javascript" src="js/main.js"></script>
</head>
<body>



<h2>重写</h2>
<?php
// 动物类
class Animal{
	public $name = "我是动物";  // 定义动物的名字
	function move(){  // 定义动物移动方式
		echp "<br />我能移动";
	}
}
// 鱼类
class Fish extends Animal{
	public $skin = "我有鳞片";   // 扩展属性
	$name = "我是鱼";   // 重写动物名称
	function move(){    // 重写移动方式
		echp "<br />我能用尾巴移动";		
	}
}


?>


</body>
</html>














