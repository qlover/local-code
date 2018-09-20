<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 基础</title>
</head>
<body>
<script type="text/javascript">
	var arr = {
		'name' : 'qrj',
		'age' : 17
	}
	alert(arr.name);
	alert(arr['name']);
</script>
<?php
	$emp = array('name'=>'qrj','age'=>17,'sex'=>'男');
	//上面的 name 是一个键，而 qrj 就是键 name 的值
	echo $emp['name'],'<br />';
	echo $emp['sex'],'<br />';
	echo $emp['age'];
	
?>
</body>
</html>