<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title> 用户登录 </title>
	<link rel="stylesheet" type="text/css" href="css/css.css" />
	<script type="text/javascript">
	function regnum(val){
		var reg = /\w{6,20}/;
		if( reg.test(val) ){
			return true;
		}else return false;
	}
function trim(str){
	var reg = /\s/g;
	return str.replace(reg, "");
}
function re(){
	location.replace('p24.logined.php');
}
	window.addEventListener('load',function(){
		var loginForm = document.forms['loginForm'];
		var login = loginForm.login;
		
		//清空用户信息 
		//loginForm.reset();
		
		function check(){
			var user = loginForm.username;
			var pass = loginForm.password;
			if(user.value == ''){
				alert("用户名不能为空");
				user.focus();
				return false;
			}else if(user.value.length < 3){
				alert("你的用户名太短了");
				user.focus();
				return false;
			}else if(pass.value == ''){
				alert("密码不能为空");
				pass.value = '';
				document.getElementsByTagName('span')[0].className = 'show ipt';
				pass.focus();
				return false;
			}else if( !regnum(pass.value) ){
				alert("您输入的密码太短了");
				pass.value = '';
				document.getElementsByTagName('span')[0].className = 'show ipt';
				pass.focus();
				return false;
			}else {				
				return true;
			}
		}
		loginForm.onsubmit = function(){
			return check();
		}
		
		
	},false);
	</script>
</head>
<body>

<form method="post" action="p24.logined.php" name="loginForm">
	<input type="text" name="username" placeholder="您的用户名" />
	<br/>
	<input type="password" name="password"  placeholder="您的密码" />
	 <span class="hide" >密码为六位以上有效数字</span>
	</br>
	<input type="submit" value="登录" name="login" /> 
	<input type="button" value="注册" name="register" onclick="location.replace('p24.regsiter.php')"/> 
</form>
<?php
/*
include_once "load.php";
if(!empty($_POST)){
	$name = $_POST['username'];
	$pass = $_POST['password'];
	connect_data('pratice');
	if( isset($_POST) ){
		$sql = "select * from login where username='$name' and password='$pass' ";
		$result = mysql_query($sql);
		if( mysql_num_rows($result) == 1){
			echo "<h2>登录成功</h2>";
			header('location:p24.logined.php');
		}else{
			echo "<h2>登录失败</h2>";
			exit;
		}
	}else {
		echo '非法访问';
	}
}
*/
?>
<script>




</script>


</body>

</html>














