<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>


<?php

function fun($x = 3, $y = 4){
	return $x + $y;
}

$v1 = fun(30,40);  //传过去2个数据分别给予x和Y
$v1 = fun(30);	//传值去1个数据，给予 x 
$v1 = fun();   //没有传值过去，x 自动获得3，Y自动获得 4

//但是，如果有的有默认值有的没有的话
function fun2($a,$b = 2, $c ='abc'){
	echo "a=$a,b=$b,c=$c";
}
fun2(1);
fun2(1,2);
fun2(1,2,'xyz');
fun2();   //这是错误的


function fun3($x, & $y){
	return $x + $y;
}
fun3(2,3);   //致命错误
?>

<script>




</script>


</body>

</html>














