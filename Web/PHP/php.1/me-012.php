<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 基础</title>
</head>
<body>
<script type="text/javascript">
	
</script>
<style>
table{ border:1px solid #000;border-collapse:collapse; }
td,th{border:1px solid #000;}
</style>
<?php
$link = @mysql_connect('localhost','root','') or die('connected filed');
mysql_select_db('data') or die('数据库选择失败了');
mysql_query('set names utf8');
$rs = mysql_query('select * from stu') or die('查询失败');
?>
<table>
<tr>
<th>stuid</th>
<th>stuname</th>
<th>stusex</th>
<th>stuage</th>
<th>stuadd</th>
</tr>
<?php
while($rows = mysql_fetch_assoc($rs)){
	echo '<tr>';
	echo '<td>'.$rows['stuid'].'</td>';
	echo '<td>'.$rows['stuname'].'</td>';
	echo '<td>'.$rows['stusex'].'</td>';
	echo '<td>'.$rows['stuage'].'</td>';
	echo '<td>'.$rows['stuadd'].'</td>';
	echo '</tr>';
}
?>
</table>

</body>
</html>