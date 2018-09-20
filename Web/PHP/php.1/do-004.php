<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户登录</title>
</head>
<body>
<?php
if(isset($_POST['button'])){
	//echo 'have';	
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];
	mysql_connect('127.0.0.1:3306','root','') or die(mysql_error());
	mysql_select_db('data') or die('数据库选择失败');
	mysql_query('set names utf8');
	$sql = "select * from `user` where username='$username' and password='$pwd'";
	$rs = mysql_query($sql) or die('数据表查询失败');
	if(mysql_num_rows($rs) == 1){
		//echo '登录成功';
		header("location:{$username}_page.php");
	}else echo '登录失败';
}
?>

<form name="from1" method="post" action="">
<p>用户名：<input type="text" name="username" placeholder="请输入用户名" /></p>
<p>密码：<input type="password" name="pwd" placeholder="请输入密码" /></p>
<p><input type="submit" name="button" value="登录"></p>
</form>
</body>
</html>
























