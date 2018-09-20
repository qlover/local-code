<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> 用户登录成功页面 </title>
<link rel="stylesheet" type="text/css" href="css/css.css" />
</head>
<body>

<?php

include_once "load.php";

if(!empty( $_POST)){
	echo "<h2>登录成功!</h2>";
	$name = $_POST['username'];
	$pass = $_POST['password'];
}else {
	echo "<h2>非法访问!</h2>";
	exit;
}


connect_data('pratice');
$sql = "select * from login where username='$name' and password='$pass' ";
$result = mysql_query($sql);
if( mysql_num_rows($result) == 1){
	echo "<h2>登录成功</h2>";
}else{
	echo "<h2>登录失败</h2>";
	header('location:p24.login.php');   //跳转到登录页面
}



?>

<script>




</script>


</body>

</html>














