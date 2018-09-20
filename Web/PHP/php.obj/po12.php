<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 面向对象--自动加载</title>
<link rel="stylesheet" href="css/css.css">
<script type="text/javascript" src="js/main.js"></script>
</head>

<body>

<?php
// require_once './Load.class.php';
function __autoload( $className ){
	require_once './' . $className .'.class.php';
}
Load::Info('qlover');

?>
</body>
</html>

