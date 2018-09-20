<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 基础</title>
</head>
<body>
<script type="text/javascript">
	
</script>
<?php
	/*
	$link = mysql_connect('localhost','root','');
	if($link){
		echo 'connected successly';
	}else{
		echo 'connected filed';
		//终止执行，相当于 JS 中的 reutrn false
		exit();
		#die();
	}
	*/
	/*
	$link = mysql_connect('localhost','root','');
	if($link){
		echo 'connected successly';
	}else{
		die('connected filed');

	}
	*/
	#$link = mysql_connect('localhost','root','a') or die('connected filed');
	$link = @mysql_connect('localhost','root','a') or die('connected filed');
	
?>
</body>
</html>