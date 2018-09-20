<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>管理员添加页面</title>
<style>
table{ border:1px solid #000;border-collapse:collapse; }
td,th{border:1px solid #000; padding:5px 10px;}
</style>
<script type="text/javascript">
window.onload = function(){
	function check(val){
		var valname = val.name;
		var nameReg = /.+/;
		var priceReg = /[0-9]+\.[0-9]{0,3}/g;
		var amountReg = /[0-9]+/g;
		var webReg = /(www\.\w+)\.(com|cn|org|com\.cn)/;
		var uPparText = val.parentNode.previousSibling.innerHTML;
		if(valname == 'name'){
			return !nameReg.test(val.value);
		}else if(valname == 'price'){
			return !priceReg.test(val.value);
		}else if(valname == 'amount'){
			return !amountReg.test(val.value);
		}else if(valname == 'web'){
			return !webReg.test(val.value);
		}
	}
	function checkUP(a,b,c,d){
		if(!check(a) && !check(b) && !check(c) && !check(d)){
			alert('所有数据输入正确，将在5秒后提交');
		}
	}
	function tj(){
		return true;
	}
	var addvalues = document.getElementsByClassName('addvalue');
	document.getElementById('adds').onclick = function(){
		for(var i = 0; i < addvalues.length; i++){
			if(check(addvalues[i])){
				alert('【'+addvalues[i].parentNode.previousSibling.innerHTML+'】的值错误');
				addvalues[i].focus();
				break;
				
			}
			
		}
	}
	
}
</script>
</head>
<body>

<?php
if(isset($_POST['addgoods'])){
	echo '添加成功';
}
?>
<form name="addform" method="post" action="">
<table>
<tr><td>商品名</td><td><input type="text" name="name" class="addvalue" /></td></tr>
<tr><td>商品单价</td><td><input type="text" name="price" class="addvalue" /></td></tr>
<tr><td>库存数量</td><td><input type="text" name="amount" class="addvalue" /></td></tr>
<tr><td>商品网址</td><td><input type="text" name="web" class="addvalue" /></td></tr>
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
























