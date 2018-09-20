<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 基础</title>
</head>
<body>
<?php
	$a = 10;
	$b = $a;
	unset($a);
	define('name','array');
	echo name;
	echo $b;
?>
</body>
</html>