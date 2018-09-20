<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户登录</title>
<style>
table{ border:1px solid #000;border-collapse:collapse; }
td,th{border:1px solid #000; padding:0 10px;}
</style>

<script type="text/javascript">

</script>
</head>
<body>

<table>
<tr>
<th>商品编号</th>
<th>商品名</th>
<th>商品单位</th>
<th>商品数量</th>
<th>商品网址</th>
</tr>
<?php
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('data') or die('数据库选择失败');
mysql_query('set names utf8');
$rs = mysql_query('select * from goods') or die('查询失败');

//获取查询到的所有商品，并在 php 页面中打印出来
//获取数据可以参考 数据库操作的 php 获取数据
while($rows = mysql_fetch_assoc($rs)){		//将获取到的数据作为关联数组
	echo '<tr>';
	echo '<td>'.$rows['code'].'</td>';
	echo '<td>'.$rows['name'].'</td>';
	echo '<td>'.$rows['price'].'</td>';
	echo '<td>'.$rows['amount'].'</td>';
	echo '<td>'.$rows['web'].'</td>';
	echo '</tr>';
}
?>
</table>

</body>
</html>
























