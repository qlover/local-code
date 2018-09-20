<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>分页</title>
<style>
table{ border:1px solid #000;border-collapse:collapse; }
td,th{border:1px solid #000; padding:5px 10px;}
a{ display:block; width:50px; height:50px; float:left; text-align:center;
	margin:10px;  line-height:50px; border:1px solid #f00; background:#888;
	color:#fff;
}
</style>
</head>

<body>

<table>
    <tr>
        <th>商品编号</th>
        <th>商品名称</th>
        <th>商品单位</th>
        <th>商品数量</th>
        <th>商品网址</th>
    </tr>
    <?php
    	mysql_connect('localhost','root','') or die(mysql_error());
		mysql_select_db('data') or die('数据库选择失败');
		mysql_query('set names utf8');
		$sql = 'select * from goods ';
		$rs = mysql_query('select count(*) from goods') or die('数据查询失败');
		$rows = mysql_fetch_row($rs);		//因为上一句返回的只是一行一列
		$pagesize = 10;			
		$recordcount = $rows[0];	//因为返回的一行一列所以就取第一行的第一列的值
		$pagecount = ceil($recordcount / $pagesize);
		$pageno = isset($_GET['pageno'])?$_GET['pageno']:1;
		$pagestart = ($pageno-1) * $pagesize;
		$rs = mysql_query("select * from goods limit $pagestart,$pagesize");
		while($rows = mysql_fetch_assoc($rs)){
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
<?php
echo '<a href="?pageno=1">'.'首页'.'</a>';
echo '<a href="?pageno='.($pageno==1?1:$pageno-1).'">'.'上一页'.'</a>';
for($i = 1; $i <= $pagecount; $i++){
	echo '<a href="?pageno='.$i.'">'.$i.'</a>'; 	
}
echo '<a href="?pageno='.($pageno==$pagecount?$pagecount:$pageno+1).'">'.'下一页'.'</a>';
echo '<a href="?pageno='.$pagecount.'">'.'尾页'.'</a>';
?>
</body>
</html>

