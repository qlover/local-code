<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>业务逻辑</title>
<style>
table{ border:1px solid #000;border-collapse:collapse; }
td,th{border:1px solid #000; padding:5px 10px;}
</style>
<script type="text/javascript">
window.onload = function(){
	var addf = document.forms['addform'];
	addf.onsubmit = function(){
		return check();
	};
	function check(){
		var nameReg = /.+/;
		var priceReg = /[0-9]+/g;
		var amountReg = /[0-9]+/g;
		var webReg = /(www\.\w+)\.(com|cn|org|com\.cn)/;
		var name = document.getElementById('name');
		if(!nameReg.test(name.value)){
			alert('【'+name.parentNode.previousSibling.innerHTML+'】的值有错误');
			name.focus();
			return false;
		}
		var price = document.getElementById('price');
		if(!priceReg.test(price.value)){
			alert('【'+price.parentNode.previousSibling.innerHTML+'】的值有错误');
			price.focus();
			return false;
		}
		var amount = document.getElementById('amount');
		if(!amountReg.test(amount.value)){
			alert('【'+amount.parentNode.previousSibling.innerHTML+'】的值有错误');
			amount.focus();
			return false;
		}
		var web = document.getElementById('web');
		if(!webReg.test(web.value)){
			alert('【'+web.parentNode.previousSibling.innerHTML+'】的值有错误');
			web.focus();
			return false;
		}
		
		alert('商品添加成功');
	}
	

}
</script>
</head>
<body>

<?php
$addbool=false;
if(isset($_POST['addgoods'])){
	
	$name = $_POST['name'];
	$price = $_POST['price'];
	$amount = $_POST['amount'];
	$web = $_POST['web'];
	
	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('data');
	mysql_query('set names utf8');
	$sql = "insert into goods values(null,'$name','$price','$amount','$web')";
	if(mysql_query($sql)){
		$addbool = true;
	}else{
		$addbool = false;
	}
	
	
}
?>
<form name="addform" method="post" action="" >
<table>
<tr><td>商品名</td><td><input type="text" name="name" id="name" /></td></tr>
<tr><td>商品单价</td><td><input type="text" name="price"  id="price"/></td></tr>
<tr><td>库存数量</td><td><input type="text" name="amount"  id="amount"/></td></tr>
<tr><td>商品网址</td><td><input type="text" name="web"  id="web"/></td></tr>
<tr>
	<td><input type="submit" name="addgoods" value="保存" id="adds" /></td>
	<!-- 但是这个返回按钮用什么来跳转值得考虑
		而在 JS 中跳转一般有四种方法，详请见手册 location 对象
		但，这里我们用 replace() 方法来实现，跳转，原因，则是该方法不会产生 history 对象
	-->
	<td><input type="button" name="return" value="返回" onclick="location.replace('do-007.php');"/></td>
</tr>
</table>
</form>

</body>
</html>
