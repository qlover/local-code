<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户登录</title>
<script type="text/javascript">
window.onload = function(){
	var rf = document.forms['registerForm'];
	var lf = document.forms['loginForm'];
	
	lf.register.onclick = function(){
		rf.style.display=='none'?rf.style.display='block':rf.style.display='none';
		return false;
	};

/*
	rf.rre.onclick = function(){
		return false;
	}
*/	
	
}
</script>
</head>
<body>
<?php
//登录
if(isset($_POST['login'])){
	//echo 'have';	
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];
	mysql_connect('127.0.0.1:3306','root','') or die(mysql_error());
	mysql_select_db('data') or die('数据库选择失败');
	mysql_query('set names utf8');
	$sql = "select * from `user` where username='$username' and password='$pwd'";
	$rs = mysql_query($sql) or die('数据表查询失败');
	if(mysql_num_rows($rs) == 1){
		echo '登录成功';
		//header("location:{$username}_page.php");
	}else echo '登录失败';
}

?>
<form name="loginForm" method="post" action="">
<p>用户名：<input type="text" name="username" placeholder="请输入用户名" /></p>
<p>密码：<input type="password" name="pwd" placeholder="请输入密码" /></p>
<p><input type="submit" name="login" value="登录">
<input type="submit" name="register" value="注册"></p>
</form>



<form name="registerForm" method="post" action="" style="display:none;">
<h2>这里是注册</h2>
<p>用户名：<input type="text" name="rusername" placeholder="请输入用户名" /></p>
<p>密码：<input type="password" name="rpwd" placeholder="请设置您的密码" /></p>
<p><input type="submit" name="rre" value="确定 注册"></p>
</form>


<h1>
<?php
//注册
if(isset($_POST['rre'])){
	$rusername = $_POST['rusername'];
	$rpwd = $_POST['rpwd'];
	if($rusername == null){
		echo '名字不能为空';
		return false;
	}
	
	if($rpwd == null){
		echo '密码不能为空';
		return false;
	}
	mysql_connect('127.0.0.1:3306','root','') or die(mysql_error());
	mysql_select_db('data') or die('数据库选择失败');
	mysql_query('set names utf8');
	$sql = "insert into data.user(username,password) value ('$rusername','$rpwd')";
	$sqlc = "select * from `user` where username='$rusername'";
	$rs = mysql_query($sqlc) or die('数据表查询失败');
	//检查是否用户名重复
	if(mysql_num_rows($rs) >= 1 ){
		echo '用户名重复了，请换个名字'.'<br>';
		$sql = null;		//把所添加的用户信息清空
	}else{
		if(mysql_query($sql) != null){
			echo '注册成功';
		}else echo '注册失败';
	}
	
}
?>
</h1>


</body>
</html>
























