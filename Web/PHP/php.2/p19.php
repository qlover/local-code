<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>


<?php
//看下面的数组，使用 for 循环和 next() 函数，遍历以下数组并输出其下标和值
$arr = array(1=>3,'a1'=>11,3=>6,'mn'=>18,88=>2);
$len = count($arr);

for($i=0; $i < $len; $i++){
	$key = key($arr);
	$value = current($arr);
	echo "<br />$key => $value";
	next($arr);
}
echo "<hr />";

//使用 each() 
$arr2 = array(1=>3,'a2'=>11,3=>6,'m'=>158,'88'=>2);
$result = each($arr2); //此时指针到第二个去了
echo "<br />result为：<pre>"; print_r($result);echo "</pre>";
$result2 = each($arr2); //此时指针到第三个去了
echo "<br />result2为：<pre>"; print_r($result2);echo "</pre>";

echo "<hr />";
$arr3 = array(0=>0,1=>11,3=>33,2=>22,);
list($v1) = $arr3;  //将数组下标为0的项赋值给 v1
list($s1,$s2) = $arr3; //将数组下标为0和1的项分别赋值给 s1，s2
list($m1,$m2,$m3) = $arr3; //将数组下标为0和1和2的项分别赋值给 m1，m2,m3
echo "<br />v1=$v1";
echo "<br />s1=$s1,s2=$s2";
echo "<br />m1=$m1,m2=$m2,m3=$m3";

echo "<hr />";

//这个数组很像 each() 得到后的数组
$arr5 = array(
		1=>5,
		'value'=>5,
		0=>1,
		'key'=>1
	);

list($v1,$v2) = $arr5;
echo "<br />v1=$v1,v2=$v2";
list($key,$value) = $arr5;
echo "<br />key=$key,value=$value";
echo "<br />key=$key,value=$value";


//while +each+list
echo "<hr />";
$arr5 = array(1=>3,'a2'=>11,3=>6,'m'=>158,'88'=>2);
while( list($key,$value) = each($arr5)){
	echo "<br />$key = $value";
}


echo "<hr />下面是一数组排序函数用法<br />";

$arr1 = array(1=>3,'a2'=>11,3=>6,'m'=>158,'88'=>2);
echo "<br />排序前";
print_r($arr1);
sort($arr1);
echo "<br />排序后";
print_r($arr1);

echo "<hr />";

$arr2 = array(1=>3,'a2'=>11,3=>6,'m'=>158,'88'=>2);
echo "<br />排序前";
print_r($arr2);
asort($arr2);
echo "<br />排序后";
print_r($arr2);

?>

<script>




</script>


</body>

</html>














