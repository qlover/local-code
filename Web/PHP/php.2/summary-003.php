<?php
header("Content-Type:text/html;charset=UTF-8");

$arr = array(5,8,9,7,1,3,4,6,7,5);
$len = count($arr);
//1.求一个数组的平均值
for($i= 0,$sum = 0 ; $i < $len; $i++){
	$sum += $arr[$i];
	//echo "第". $i ."个元素是".$arr[$i].'<br />';
}
echo "平均值是".$sum/$len;
echo "<hr />";


//1.求一个二维数组的平均值
$arr2 = array(
		array(5,79,8,5,2,4,67),
		array(5,23,5,97,65,4,7,96),
		array(1,3,46,7,9,2,21),
		array(6,87,9,4,6,46,46,7)
	);
$len2 = count($arr2);
$c = 0;
for($i = 0,$sum = 0; $i < $len2; $i++){
	$len3 = count($arr2[$i]);
	for($n=0; $n < $len3 ; $n++){
		$sum+=$arr2[$i][$n];
		$c++;
	}
}
echo "这个二维数组的平均值是".$sum/$c;

echo "<hr />";

//求一个一维数组的最大值和最小值
$arr3 = array(31,3,32,54,97,87,34,65,6,7,5,7,7,9,79,798,7,97,54,65,13,7,13,54);
$len4 = count($arr3);
$max =0;
$min = 0;
$t=0;
$m = $arr3[0];
for($i = 0; $i < $len4; $i++){
	if($t < $arr3[$i]){
		$max = $arr3[$i];
		$t = $max;
	}
	if($m > $arr3[$i]){
		$min = $arr3[$i];
		$m = $min;
	}
}

echo "这个数组中最大值是{$max},最小值是{$min}";


echo "<hr />";

//交换一个数组中最大值和最小的值的位置
$arr4 = array(31,87,34,65,6,7,5,7,7,9,79,7,97,54,65,3,32,54,97,13,7,13,798,54);
$len5 = count($arr4);
$big = 0;
$sma = 0;
$m = $arr4[0];
for($i=0,$t=0; $i <$len5; $i++){
	if($t < $arr4[$i]){
		$big = $i;
		$t = $arr4[$i];
	}
	if($m > $arr4[$i]){
		$sma = $i;
		$m = $arr4[$i];
	}
}

echo "最大值的值位置在是{$big},值是{$arr4[$big]}<br />";
echo "最小值的值位置在是{$sma},值是{$arr4[$sma]}<br />";

$chang = $arr4[$big];
$arr4[$big] = $arr4[$sma];
$arr4[$sma] = $chang;

echo "最大值与最小值交换后,{$big}位置是{$arr4[$big]},{$sma}位置是{$arr4[$sma]}";

