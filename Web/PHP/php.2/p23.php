<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 操作 Mysql </title>
<link rel="stylesheet" type="text/css" href="css/css.css" />
</head>
<body>


<?php

include_once "load.php";

if(!empty( $_POST)){
	$m = $_POST['msg'];
}else{
	echo "非法访问";exit;
}

echo $m;

?>

<script>




</script>


</body>

</html>














