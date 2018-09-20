<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 操作 Mysql </title>
<link rel="stylesheet" type="text/css" href="css/css.css" />
</head>
<body>


<?php


mysql_connect("localhost","root","123") or die("数据库连接失败");
mysql_query("set names utf8");
mysql_query("use pratice") or die("数据库选择失败");
$result = mysql_query("select * from msgbroad");

echo("<table>");
echo "<tr>";
echo "<th>ID</th>";
echo "<th>用户</th>";
echo "<th>留言内容</th>";
echo "</tr>";
//取得每一条记录
while( $re = mysql_fetch_array($result) ){
	echo "<tr>";
	
	echo "<td>". $re['Id']."</td>";
	echo "<td>". $re['user']."</td>";
	echo "<td>". $re['text']."</td>";
	
	echo "<tr>";
}
echo("</table>");

?>

<script>




</script>


</body>

</html>














