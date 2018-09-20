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
	location.replace('p24.login.php');
}
	window.addEventListener('load',function(){
		var loginForm = document.forms['loginForm'];
		var login = loginForm.login;
		//清空用户信息 
		//loginForm.reset();
		
		function check(){
			login.onclick = null;
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
<?php

include_once "load.php";
if( isset($_POST['login']) ){
	header('location:p24.logined.php');
	exit;
}

if(!empty($_POST)){
	$name = trim($_POST['username']);
	$pass = trim($_POST['password']);
	connect_data('pratice');
	if( !empty($_POST) ){
		$sql = "select * from login where username='$name'";
		$result = mysql_query($sql);
		if( mysql_num_rows($result) >= 1){
			echo "<h2>注册失败，用户名已经存在</h2>";
			exit;
		}else{			
			$sql = "insert into login(username,password) value('$name','$pass')";
			mysql_query($sql);
			echo "<h2>注册成功</h2>";
			exit;
		}
	}else {
		echo '非法访问';
	}
}

?>
<form method="post" action="" name="loginForm">
	<input type="text" name="username" placeholder="您的用户名" value="<?php if(!empty($_POST['username'])) echo $_POST['username']; else echo '';?>" 
	/> <br/>
	<input type="password" name="password"  placeholder="您的密码" />
	 <span class="hide" >密码为六位以上有效数字</span>
	</br>
	<input type="submit" value="注册" name="register" /> 
	<!-- <input type="submit" value="登录" name="login" /> -->
</form>

<script>




</script>


</body>

</html>














