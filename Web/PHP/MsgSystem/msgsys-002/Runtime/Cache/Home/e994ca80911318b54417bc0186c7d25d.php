<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册页面</title>
	<link rel="stylesheet" href="<?php echo HOME_CSS;?>style.css">
</head>
<body>
	<h2>用户注册</h2>
	<div id="register">
		<form id="regForm" action="toRegister.html" method="post">
			<p>用户名：<input id="uname" type="text" name="uname" > <span class="tip"></span></p>
			<p>密码：<input id="upass" type="password" name="upass" > </p>
			<p><input id="regBtn" type="submit" value="注册"></p>
		</form>
	</div>
	<script src="<?php echo HOME_JS;?>jquery.js"></script>
	<script>
	$('#uname').on('blur', function(event) {
		var _this = $(this);
		_this.val( $.trim(_this.val()));
		if( _this.val() == '' ){
			_this.siblings('.tip').text('用户名不能为空');
			return false;	
		} 
		$.post('checkName.html',{
			'uname' : _this.val()
		}, function(data) {
			_this.siblings('.tip').text(data);
		});
	});
	$('#regFrom').submit(function(event) {
		
	});
	$('#regBtn').on('click', function() {
		
		if( $('#uname').val() == ''){
			alert('用户名不能为空');
			$('#uname').focus();
			return false;
		}

		if( $('#upass').val() == ''){
			alert('密码不能为空');
			$('#upass').focus();
			return false;
		}
		
	});

	</script>
</body>
</html>