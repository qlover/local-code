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
	$link = @mysql_connect('localhost','root','') or die('connected filed');
	// 用 mysql_query() 方法
	#mysql_query('use data') or die('数据库选择失败了');	
	// 用 mysql_select_db() 方法
	mysql_select_db('data') or die('数据库选择失败了');
	//设置 mysql 客户端的编码
	mysql_query('set names utf8');
	//查询数据,以这个数据库中的 stu 表做为查询对象
	$rs = mysql_query('select * from stu') or die('查询失败');
	$rows = mysql_fetch_row($rs);
	print_r($rows);
*/

/*
	$link = @mysql_connect('localhost','root','') or die('connected filed');
	mysql_select_db('data') or die('数据库选择失败了');
	mysql_query('set names utf8');
	$rs = mysql_query('select * from stu') or die('查询失败');
	do{
		$rows = mysql_fetch_row($rs);
		if($rows==false){
			break;
		}
		print_r($rows).'<br>';
	}while($rows);
*/
?>
</body>
</html>