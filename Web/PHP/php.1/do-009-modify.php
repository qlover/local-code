<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改数据</title>
<style>
table{ border:1px solid #000;border-collapse:collapse; }
td,th{border:1px solid #000; padding:5px 10px;}
</style>
<script type="text/javascript">
window.onload = function(){
	
}
</script>
</head>
<body>
<?php
$id=$_GET['id'];
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('data');
mysql_query('set names utf8');
$rs = mysql_query("select * from goods where code={$id}") or die('查询失败');
$rows = mysql_fetch_assoc($rs);


//点击修改保存数据到数据库
if(isset($_POST['change'])){
	$name = $_POST['name'];
	$price = $_POST['price'];
	$amount = $_POST['amount'];
	$web = $_POST['web'];
	//下面的拼接SQL 语句很重要，因为看
	//在 do-009.php 页面点击修改传输过来的 id 值等于当前修改商品的编号到本页面，并这个是 GET 得到的
	//如果在下面的 SQL 语句中没有 id　这个条件，那么 将会把所有的数据都改了，而这个 id 就是限制修改的哪一条记录
	//而这个 id 在本页面 php 又不能像 $name $price $amount $web 那样获取，那这个 id 那里来
	//现在又想，开始从 do-009.php　跳转过来的 id 还在吗，如果还在不就好，但又是GET 又是 POST 提交，到底还在不在
	//现在告诉你，不要多想，因为在表单中 <form name="addform" method="post" action="" > action 的值等于空，所以就表示提交到本页面，而提交到本页面就是还是原来的地址，原来的 urldecode
	//所以这个 ID 值还在，那问题就解决了
	//最后当点击修改按钮的时候，即GET提交了又POST提交了
	$sql = "update goods set name='$name',price='$price',amount='$amount',web='$web' where code='{$id}'";
	
	if(mysql_query($sql)){
		header('location:do-009.php');
	}else{
		echo '修改失败'; 
		exit();
	}
}

?>
<h6>注意本页面的地址</h6>
<form name="addform" method="post" action="" >
<table>
<!-- 下面的每个 Input 元素的 value 属性都比较重要，当然这样写可以，用 JS 写也可以 -->
<tr><td>商品名</td><td><input type="text" name="name" id="name" value="<?php echo $rows['name']?>" /></td></tr>
<tr><td>商品单价</td><td><input type="text" name="price"  id="price" value="<?php echo $rows['price']?>" /></td></tr>
<tr><td>库存数量</td><td><input type="text" name="amount"  id="amount" value="<?php echo $rows['amount']?>" /></td></tr>
<tr><td>商品网址</td><td><input type="text" name="web"  id="web" value="<?php echo $rows['web']?>" /></td></tr>
<tr>
	<td><input type="submit" name="change" value="修改" id="adds" /></td>
	<!-- 但是这个返回按钮用什么来跳转值得考虑
		而在 JS 中跳转一般有四种方法，详请见手册 location 对象
		但，这里我们用 replace() 方法来实现，跳转，原因，则是该方法不会产生 history 对象
	-->
	<td><input type="button" name="return" value="返回" onclick="location.replace('do-009.php');"/></td>
</tr>
</table>
</form>

</body>
</html>
























