<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>
<?php

echo "<h1>1. 求这个数组的平均值</h1>";
$arr = array(
	1,
	array(2,3,4,5,6,7),
	8,
	array(9,10,11,array(12,13,14))
);
echo "<pre>"; print_r($arr);echo "</pre>";

$len = count($arr);
$cnt = 0;
$sum=0;
for($i =0 ; $i< $len; $i++){
	if(is_array($arr[$i])){ //如果是数组则再把这个数组中的值加起来
		for($n=0; $n < count($arr[$i]);$n++){
			if(is_array($arr[$i][$n])){   //如果数组的数组还有数组
				$newarr = $arr[$i][$n];
				for($j=0; $j < count($newarr);$j++){
					$sum += $newarr[$j];
					$cnt++;
				}
			}else{
				$sum += $arr[$i][$n];
				$cnt++;
			}
		}
	}else{
		$sum += $arr[$i];$cnt++;
	}
	
}
echo "这个数组的平均值是".$sum/$cnt."一共有{$cnt}个元素";

echo "<h1>2.求一个整数数组中的最小奇数，如果没有奇数，则输出没有奇数，否则输出该数
</h1>";

$arr2 = array(2,19,6,5,17,7,23,13);
$barr = array();
$len2 = count($arr2);
foreach($arr2 as $key => $value){
	if($value%2!=0){
		$barr[] = $value;
	}	
}
$lenb = count($barr);
if(!!$len){   //如果这个数组不为空则表示有奇数
	$min = $barr[0];
	for($i=0; $i < count($barr); $i++){
		if($min > $barr[$i]){
			$min = $barr[$i];
		}
	}
}else echo "<br>数组中没有奇数";

echo "<br>最小的奇数是：$min";



echo "<h1>3.用一个函数，带有一个参数（作为数组），函数功能是找出该数组中的第二大值</h1>";
$arr3 = array(2,19,16,25,17,7,23,15,7,55,16,24,66,45,78,9,6,7);
function findSecondMax($arr){
	$len = count($arr);
	$narr = array();
	$max = $arr[0];
	for($i =0 ;$i<$len; $i++){
		if($arr[$i] > $max ){
			$max = $arr[$i];   //找到最大值
		}
	}
	$smax = $arr[0];
	for($i =0 ;$i<$len; $i++){
		if($arr[$i] == $max ){   //如果等于刚才的最大值则，下一次循环
			continue;
		}else{
			if($arr[$i] > $smax){
				$smax = $arr[$i];  //找第二大值
			}
		}
	}

	return $smax;   //只返回第二大值

}
echo "数组中第二大值是：".findSecondMax($arr3);



?>
<script>




</script>


</body>

</html>














