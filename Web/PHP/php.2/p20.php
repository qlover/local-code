<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>


<?php
$arr = array(9,5,7,8,3,4,5,6,7,1,11);

echo "<h2>冒泡排序</h2>";
echo "<br />排序前"; print_r($arr);
$n = count($arr);
for($i=1; $i < $n; $i++){
	for($k=0; $k < $n-$i-1; $k++){
		if($arr[$k] > $arr[$k+1]){
			$t = $arr[$k];
			$arr[$k] = $arr[$k+1];
			$arr[$k+1] = $t;
		}
	}
}
echo "<br />排序后"; print_r($arr);


$arr = array(9,5,7,8,3,4,5,6,7,1,11);
echo "<h2>选择排序</h2>";

echo "<br />排序前"; print_r($arr);
$n = count($arr);
for($i =0 ;$i < $n-1; $i++){
	$max = $arr[0]; //找最大值先要取得第一项的值
	$pos = 0;		//找最大值的下标，也要取得第一项的最大值
	for($k=0; $k < $n-$i; $k++){
		if($arr[$k] > $max){
			$max = $arr[$k]; //如果比较的这个元素大于上面的$max 则，$max 把这个元素装下
			$pos = $k;
		}
	}
	$t = $arr[$pos];
	$arr[$pos] = $arr[$k-1];
	$arr[$k-1] = $t;
}

echo "<br />排序后"; print_r($arr);



?>

<script>




</script>


</body>

</html>














