<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>


<?php
//定义个函数
function func1($s1,$s2,$s3){
	$x = $s1 + $s2;
	$y = $s1 - $s2;
	$s3($x,$y);
}
//调用上面的函数，并将一个匿名函数作为参数传入
func1(3,5,function($m1,$m2){
	echo "<br />m1=$m1,m2=$m2";
});


//静态变量
function st(){
	static $st1 = 0;
	$st1++;
	$st2 = 0;
	$st2++;
echo "<br />st1=$st1,st2=$st2,(该函数被调用了{$st1}次)";
}
st();
st();st();st();

//访问外部全局变量
echo "<hr />";
$v4 = 10;
function f4(){
	global $v4;
	
	echo "<br /> 在局部访问全局变量v4=$v4";
	$v4 = 100;
}
f4();
echo "<br /> 在局部访问全局变量v4=$v4";


//访问外部全局变量.2
echo "<hr />";
$v5 = 50;
function f5(){
	echo "<br /> 在局部访问全局变量v5=$v5".$GLOBALS['v5'];
	$v5 = 500;
	$GLOBALS['v5'] = 555;
	unset($GLOBALS['v5']);
}
f5();
echo "<br /> 在局部访问全局变量v5=$v5";

echo '<hr/>';

/*/阶乘
function factorial( $n){
	if( $n == 1) return 1;
	$result = $n * factorial($n -1 );
	return $result;
}
echo factorial(6);
/*/

//阶乘
function factorial( $n){
	echo "<br />开始：有人要求{$n}的阶乘";
	if( $n == 1){
		echo "<br />结束：终于求到了1的阶乘：1";
		return 1;
	}
	$result = $n * factorial($n -1 );
	echo "<br />结束：终于求到了{$n}的阶乘：$result";
	return $result;
}
echo '|'.factorial(6);


?>

<script>




</script>


</body>

</html>














