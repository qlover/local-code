<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>
<?php
if(!empty($_POST)){
	echo "<p>post数据：</p>";
	print_r($_POST);
}
if(!empty($_GET)){
	echo "<p>get数据：</p>";
	print_r($_GET);
}
if(!empty($_REQUEST)){
	echo "<p>request数据：</p>";
	print_r($_REQUEST);
}
?>

	<!-- 以下数据将会以 get 提交-->
<form action="p4.php?d1=5&d2=10&age=18" method="post">
	<!-- 以下数据将会以 post 提交-->
	数据一：<input name="data1" /> <br />
	数据二：<input name="data2" />
	<input type="submit" value="提交"/>
</form>

</body>

</html>














