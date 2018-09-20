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
	$link = @mysql_connect('localhost','root','') or die('connected filed');
	// 用 mysql_query() 方法
	#mysql_query('use data') or die('数据库选择失败了');	
	// 用 mysql_select_db() 方法
	mysql_select_db('data') or die('数据库选择失败了');
?>
</body>
</html>