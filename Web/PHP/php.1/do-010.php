<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>管理员操作</title>
<style>
table{ border:1px solid #000;border-collapse:collapse; }
td,th{border:1px solid #000; padding:5px 10px;}
</style>
<script type="text/javascript">

function jump(id){
	var table = document.getElementById('phptable');
	var trs = table.rows;
	var deltd = null;
	var thistr = null;
	for(var i=1; i < trs.length; i++){
		if(trs[i].firstChild.innerHTML == id){
			thistr = trs[i];
			deltd = trs[i].firstChild.nextSibling.innerHTML;
		}
	}
	thistr.setAttribute('style','background:#0f0');
	var flag = confirm('你确定要删除【'+deltd+'】这条记录吗？');
	if(flag){
		location.href = 'do-010-del.php?id='+id;
	}else{
		thistr.removeAttribute('style');
		return false;
	};
}
</script>
</head>
<body>
<a href="do-009-add.php">添加商品</a>
<table id="phptable">
<tr>
<th>商品编号</th>
<th>商品名称</th>
<th>商品单位</th>
<th>商品数量</th>
<th>商品网址</th>
<th>修改商品</th>
<th>删除商品</th>
</tr>
<?php
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('data') or die('数据库选择失败');
mysql_query('set names utf8');
$rs = mysql_query('select * from goods order by code desc') or die('查询失败');
while($rows = mysql_fetch_assoc($rs)){
	echo '<tr>';
	echo '<td>'.$rows['code'].'</td>';
	echo '<td>'.$rows['name'].'</td>';
	echo '<td>'.$rows['price'].'</td>';
	echo '<td>'.$rows['amount'].'</td>';
	echo '<td>'.$rows['web'].'</td>';
	echo '<td><input type="button" name="change" onclick="location.href=\'do-009-modify.php?id='.$rows['code'].'\'" value="修改"/></td>';
	echo '<td><input type="button" name="delete" value="删除" onclick="jump('.$rows['code'].')"/></td>';
	echo '</tr>';
}
?>
</table>

</body>
</html>
























