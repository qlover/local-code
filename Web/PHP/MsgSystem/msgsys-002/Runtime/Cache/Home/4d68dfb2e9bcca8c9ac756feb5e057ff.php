<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登录页面</title>
	<link rel="stylesheet" href="<?php echo HOME_CSS;?>reset.css">
	<link rel="stylesheet" href="<?php echo HOME_CSS;?>style.css">
</head>
<body>
	<h2>用户登录页面</h2>
	<div id="login">
		<form action="toLogin.html" method="post" enctype="multipart/form-data"">
			<p>用户名：<input type="text" name="uname" /></p>
			<p>密码：<input type="password" name="upass" /></p>
			<p>记住密码：<input type="checkbox" name="remember" /></p>
			<p><input id="logBtn" type="submit" value="登录"></p>
		</form>
	</div>
	<script src="<?php echo HOME_JS;?>jquery.js"></script>
	<script>
	

	var $uname = $('input[name="uname"]');
	var $upass = $('input[name="upass"]');
	$('#logBtn').on('click', function(event) {
		
		if ( $uname.val() == '' ) {
			alert('用户名不能为空');
			$uname.focus();
			return false;
		}
	
		if ( $upass.val() == '' ) {
			alert('密码不能为空');
			$upass.focus();
			return false;
		}



			

	});




	</script>
</body>
</html>