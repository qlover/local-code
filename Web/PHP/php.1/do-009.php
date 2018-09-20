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
window.onload = function(){
	var chs = document.getElementsByName('change');
	var dels = document.getElementsByName('delete');
	for(var i=0; i < dels.length; i ++){
		dels[i].addEventListener('click',function(){
			var thistr =this.parentNode.parentNode;	
			thistr.style.background = '#0f0';
			var deltr = thistr.firstChild.nextSibling.innerHTML;
			var flag = confirm('你确定要删除【'+deltr+'】这条记录吗？');
			if(flag){
				thistr.parentNode.removeChild(thistr);
				alert(deltr+'这条记录已被删除！');
			}else{
				thistr.removeAttribute('style');
				return false;
			};
			
		},false);
	}
	
	
	
	
	
}
</script>
</head>
<body>
<a href="do-009-add.php">添加商品</a>
<table>
<tr>
<th>商品编号</th>
<th>商品名</th>
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
	//下一步比较重要，因为当点击这个按钮的时候，会用 GET 传递值传递给 modify.php ，而在 modify.php 页面中用传输过来的 id 值就可以得到那个需要修改，那么就可以直接让表单中的值等于数据库中 Id 等于的值，就可以达到直接修改
	echo '<td><input type="button" name="change" onclick="location.href=\'do-009-modify.php?id='.$rows['code'].'\'" value="修改"/></td>';
	echo '<td><input type="button" name="delete" value="删除"/></td>';
	echo '</tr>';
}
?>
</table>

</body>
</html>
























