<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>排序</title>
</head>
<body>


<?php
function pntArr($arr){
	foreach($arr as $value){
		echo $value.",";
	}
	echo "<br>";
}
$arr = array(2,8,3,1,11,15,9);
$len = count($arr);
pntArr($arr);

//冒泡排序
function bubbleSort(& $arr){
	$len = count($arr);
	for($i =1 ; $i < $len ; $i++){
		for($n=0; $n < $len - $i; $n++){
			if($arr[$n] > $arr[$n+1]){
				$t = $arr[$n+1];
				$arr[$n+1]= $arr[$n];
				$arr[$n] = $t;
			}
		}
	}	
}

//选择排序
function selectSort( & $arr){
	for($i=0; $i <$len -1; $i++){
		//将比较前的第一个单元值与下标记录了
		$max = $arr[0];
		$pos = 0;
		//这个循环必定会产生一个最大值
		for($n=0 ; $n < $len - $i; $n++){
			if($arr[$n] > $max ){
				$max = $arr[$n];
				$pos = $n;
			}
		}
		//与最后一个元素交换 
		$t = $arr[$pos];
		$arr[$pos] = $arr[$n -1]; //因为最后一个值是长度 -11
		$arr[$n -1] = $t;
		
	}
}

//快速排序
function quickSort ( & $array ){   //如果要内排则需要引用传递，否则和 JS 的 quickSort 函数一样
	$_size = count($array);
	if( $_size > 0){  //如果该数组单元大于等于1则继续判断比较
		$key = $array[0];
		$left = array();
		$right = array();
		//一定要注意这个地方，比较是从当前数组的第一个单元而并不是第0个单元
		//不然即使比较了也不能与基数比较，因为基数是等于数组的每一个单元的 $key = $array[0]
		for($i=1; $i < $_size; $i++){
			if($array[$i] <= $key)
				$left[] = $array[$i];
			else
				$right[] = $array[$i];
		}
		//array_merge() 函数相当于 JS 中concat() 函数 
		return array_merge(
				quickSort($left),
				array($key),
				quickSort($right)
			);
	}else return $array;
}

//  插入排序
function insertSort(&$array){
	for( $i = 1; $i < count($array); $i++ ){
		$key = $array[$i];
		//从 key 向前比较
		$n = $i-1;
		while($n >= 0 && $array[$n] > $key ){  //这里要注意个小问题，要把 $n >= 先判断 
			$array[$n + 1] = $array[$n];
			$n--;
		}
		$array[$n+1] = $key;
	}
}

// 希尔排序
function shellSort(&$array){
	$len = count($array);
	$mid  = floor($len/2);
	while ( $mid >= 1) {
		for( $i = $mid; $i < $len; ++$i){
			for( $n = $i - $mid ; $n >= 0 ; $n--){
				if( $array[$n] > $array[$n+$mid] ){
					$temp = $array[$n];
					$array[$n] = $array[$n+1];
					$array[$n+1] = $temp;
				}
			}
		}
		$mid = floor($mid/2);
	}
}

/**  
 * 堆排序
 * 1.保存数组原长度，因为要在数组头部插入一个元素来操作堆 
 * 2.头部插入一个元素 0 ，因为根节点不用管，现在数组长度多了一个 
 * 3.但是刚才已经保存了初始数组长度，现在多了一个叶节点 
 * 4.所以获取最后一个叶节点，但是元素长度改变，所以这个一个是第一个非叶节点 
 * 	也就是最后一个叶节点后的一个节点
 *  
 * 5.整理小堆，首先获取左节点，可以用 公式 2*i+1 
 * 	相对了头部插入了一个元素，则只需要 * 2 就行
 * 	上面保存的原数组长度中，因为第一次获取到的是第一个非叶节点
 * 	直接*2就是原堆中的最后一个节点的左节点
 * 	左节点就是当前
 * 
 * 6.判断，如果右节点比左节点大，而交换，但是现在指向叶节点的指针不变，然后，用右节点与叶节点比较，大就交换，不大则是什么都不做 
 * 	但是如果右节点比叶节点大，交换后可以左节点又是一个叶节点，并且左节点的子节点可能还比自己大
 *  所以将指针指向左节点，将左节点变成下一个叶节点又开始比较，重复执行
 * 7.堆就整理好了，现在就是来排序了，因为堆都整理了了，所以所有叶节点都满足了 r[i] >= r[2*1+1] && r[i] >= r[2*1+2],所以只需要用第一个元素和最后一个元素交换，交换后再堆一次，排序就 ok 了 
 */



/** 
 * 原始代码演示
 */


/*

// 交换
function swap( &$i, &$n ){
	$t = $i; $i = $n; $n = $t;
}

// 堆化数组
function heap( & $R, $self, $end ){  // 参数二三都表示下标
	$lef = $self * 2;  // 获取左子节点

	if( $lef > $end ){
		return ;
	}

	$rig = $lef + 1;
	// 判断子节点
	if( $rig <= $end && $R[$rig] > $R[$lef] ){
		$lef = $rig;
	}

	// 判断子节点与叶节点
	if( $R[$lef] > $R[$self] ){
		swap($R[$lef], $R[$self]);
		// 因为可能子节点也是个叶节点并且它的子节点可能还比它小
		// 所以需要递归,但是此时的 $self 就要指向左节点
		heap($R, $lef, $end);
	}


}

// 堆排序
function heapSort(& $R ){
	
	$len = count($R);
	// 重要一步，头部插入一个元素
	array_unshift($R, 0);
	// 获取第一个非叶节点
	$current = $len>>1;
	while(true){
        heap($R, $current, $len);
        if( $current > 1 ){
            // 移动节点指针，遍历所有节点
            $current--;
        }
        else{
            // 临界点$len=1，即所有排序完成
            if( $len==1 ){
                break;
            }
            swap($R[$len], $R[1]);
            $len--;
        }
    }

	// 将第一个元素移除
	array_shift($R);
}
//*/


/**
 * 改进后的代码
 * 
 */


//*


// 用位操作交换变量
function swap( &$a, &$b ){
    $a = $a^$b;
    $b = $a^$b;
    $a = $a^$b;
}
// 堆化
function heap(& $R, $self, $end ){
    $pos = $self<<1;  // 直接得到默认指向左节点的下标指针
    if(  !isset($R[ $pos] ) /* 当下标没值时 */ || $pos > $end )
        return ;
    $rig = $pos + 1;
    /* 判断子节点 */
    if( $rig <= $end && $R[$rig] > $R[$pos] )
        $pos = $rig;
    // 子与叶节点比较
    if( $R[$pos] > $R[$self] ){
        swap($R[$pos], $R[$self] );
        // 考虑到如果交换后刚才子节点位置还是个叶节点
        // 并且它的子节点还比它大则再次堆化
        heap( $R, $pos, $end );
    }
}
// 堆排序
function heapSort( & $R ){
    $len = count( $R );
    array_unshift($R, 0);
    // 向右移得到最后一个非叶节点
    $current = $len>>1;   
    while ( $len > 1) {
	    heap($R, $current, $len );	
	    // 如果没遍历到了根节点，就继续遍历
	    if( $current > 1){
	    	$current--;
	    }
    	// 当找到了根节点说明后面的小堆都排好序了
	    else{
			swap($R[1], $R[$len--] );
	    }
    }
    array_shift( $R );
}


//*/




// heap($arr, 3, $len);
heapSort($arr);


pntArr($arr);







//快速排序
/*
function quickSort(&$arr){
    if(count($arr)>1){
        $k=$arr[0];
        $x=array();
        $y=array();
        $_size=count($arr);
        for($i=1;$i<$_size;$i++){
            if($arr[$i]<=$k){
                $x[]=$arr[$i];
            }elseif($arr[$i]>$k){
                $y[]=$arr[$i];
            }
        }
        $x=quickSort($x);
        $y=quickSort($y);
        return array_merge($x,array($k),$y);
    }else{
        return $arr;
    }
}*/

//  二分查找
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




<!-- 



 -->








