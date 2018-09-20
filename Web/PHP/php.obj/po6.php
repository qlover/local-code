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
	function __construct(){
		echo "<br />父类中的构造方法";

	}
}

class B extends A{
	function __construct(){
		echo "<br />子类中的构造方法";		
	}
}
class C extends A{
	// 这个类中没有构造方法
}
$o1 = new B();
$o2 = new C();

?>



<h2>手动调用上级同类方法</h2>
<?php
class Member{
	public $name = '';
	public $age = 18;
	public $sex;
	// 父类中的构造方法
	function __construct($name, $age, $sex){
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;		
	}
	// 父类中定义一个方法
	function showInfo(){
		echo "<br />姓名：{$this->name}";
		echo "<br />年龄：{$this->age}";
		echo "<br />性别：{$this->sex}";
	}
}

class Teacher extends Member{
	public $edu = '大学';
	public $major;
	function __construct($name, $age, $sex, $edu, $major){
		// $this->name = $name;
		// $this->age = $age;
		// $this->sex = $sex;
		// 手动调用父类的构造方法
		parent::__construct($name, $age, $sex);
		$this->edu = $edu;
		$this->major = $major;
	}
	// 子类中也有这样的方法
	function showInfo(){
		echo "<br />姓名：{$this->name}";
		echo "<br />年龄：{$this->age}";
		echo "<br />性别：{$this->sex}";
		echo "<br />学历：{$this->edu}";
		echo "<br />专业：{$this->major}";		
	}
}
$o1 = new Teacher('Qlover',18,'男','大学','PHP');
$o1->showInfo();
?>


</body>
</html>














