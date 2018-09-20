<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>
<?php

$s1 = "a";
$s2 = "A";
$s3 = "abc";
$s4 = "xyz";
$s5 = "xyzz";
$s6 = "zzz";
$s7 = "abc9";
$s8 = "9z";
$s1++;$s2++;$s3++;$s4++;$s5++;$s6++;$s7++;$s8++;
echo "$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8";


echo "<hr />";

$v1 = 1;
$v2 = 1;
$v1++; //此行后，v1 为 2
++$v2; //此行后，21 为 2
echo "<br />v1=$v1,v2=$v2";
//说明：此时前自增后自增效果一样

echo "<br />";
echo $v1++; //输出2，此行后，v1 为 3
echo "<br />";
echo ++$v2; //输出3，此行后，v2 为 3
echo "<br />v1=$v1,v2=$v2";

echo "<hr />";

$s1 = $v1++; //s13，此行后，v1 为 4
$s2 = ++$v2;//s24，此行后，v1 为 4
echo "<br />s1=$s1,s2=$s2";
echo "<br />v1=$v1,v2=$v2";

echo "<hr />";

$t1 = microtime(true);  //获得当前时间，精确到万分之一秒
for($i = 1; $i < 10000000; ++$i){ }
$t2 = microtime(true);
for($i = 1; $i < 10000000; ++$i){ }
$t3 = microtime(true);
echo "<p>前++耗时：".($t2-$t1);
echo "<p>后++耗时：".($t3-$t2);



//用个函数来模拟复杂运算
function f1($x,$y){
	$m1 = $x * 2;
	$m2 = $y * 3;
	return $m1 + $m2;
}

$n1 = 3;

//如果 $n2 = 2
$n2 = 4;

//判断一
if( $n1 > $n2 || f1($n1,$n2) > 20 ){ }else{ }
//判断二
if( f1($n1,$n2) > 20 || $n1 > $n2 ){ }else{ }







?>
<script>




</script>


</body>

</html>














