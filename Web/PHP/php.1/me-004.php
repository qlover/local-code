<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 基础</title>
</head>
<body>
<script type="text/javascript">
	document.write('hello world'+'<br />');
</script>
<?php
	$name = 'qrj';
	define('age','17');
	echo $name.age."<br />";
	if(defined('age')){
		echo 'age 已经被定义了';
	}else{
		echo 'age 还没有被定义';		
	}
?>
</body>
</html>