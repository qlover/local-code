<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>


<?php
//二分查找
$arr = array(2,3,7,8,9,10,15,16,17,20,25,27,30,38,39,44,55,66,77,88,89,100,105,106,107);
$search = 32;   //要找的数据
$len = count($arr);
function binary_search($array,$aim,$begin,$end){
	$mid =  floor(($begin+$end)/2);   //定位中间的位置,如果长度是偶数，则没有中间，如果是奇数就可以直接得到中间位置
	
	$mid_value = $array[$mid];    //定位中间的值
	if($aim == $mid_value){
		return true;	//如果要查找的值刚好在中间就返回 true		
	}elseif($mid_value > $aim){
		//但是如果在查找的时候，如果出现起始位置比结束位置大，比如从 5 位置找到 3 这个位置，则找不到了，所以此时不可能会找到 $aim,所以需要判断
		if($begin > $mid-1){
			return false;
		}
		//如果中间的项要比查找的项大，就找左边
		$re = binary_search($array,$aim,$begin,$mid-1);
	}else{
		//如果中间的项要比查找的项小，就找右边
		if($mid+1 >$end){
			return false;
		}
		$re = binary_search($array,$aim,$mid+1,$end);
	}
	return $re;
}
//使用该函数从 $arr 中的0 到 len-1  $search
$v1 = binary_search($arr,$search,0,$len-1);
echo "";var_dump($v1);






/*
function binary_search($array,$aim,$begin,$end){
	if($end < $begin){
		return false;   //极端一：如果要查找的范围就不对了，则找不到
	}
	$mid =  floor(($begin+$end)/2); 
	$mid_value = $array[$mid]; 
	if($aim == $mid_value){
		return true;	//极端二：如果刚等于中间值，则找到
	}elseif($mid_value > $aim){
		$re = binary_search($array,$aim,$begin,$mid-1);
	}else{
		$re = binary_search($array,$aim,$mid+1,$end);
	}
	return $re;   //正常返回
}
*/




?>

<script>




</script>


</body>

</html>














