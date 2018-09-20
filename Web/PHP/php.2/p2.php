<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>
<?php
//$d1 = $_POST['data1'];
//$d2 = $_POST['data2'];
//echo "数据一是 $d1"."<br/>"."数据二是 $d2";

if( !empty($_POST)){
	$d1 = $_POST['data1'];
	$d2 = $_POST['data2'];
	echo "数据一是 $d1"."<br/>"."数据二是 $d2";
}else {
	echo "非法的页面访问";
}

?>
</body>
</html>














