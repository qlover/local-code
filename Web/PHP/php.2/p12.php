<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>
<?php

/*
假设，有5个灯泡需要管理，需要实现以下功能目标：
1.可以指定任意一个灯泡的当前状态
2.可以打开指定的任意一个灯泡
3.可以关闭指定的任意一个灯泡
*/

//首先，需要设定对应的5个常量，代表对应的5个灯泡
define("D1",1);		//对应二进制：	00000001
define("D2",2);		//对应二进制：	00000010
define("D3",4);		//对应二进制：	00000100
define("D4",8);		//对应二进制：	00001000
define("D5",16);	//对应二进制：	00010000

//然后，定义个变量，该变量就代表5个灯泡的任意组合状态值
$state = 10;  //其对应二进制值为：	00001010
			  //此时，它其实表示第2和第4个灯亮
//任务一：可以指定任意一个灯泡的当前状态
//需求1a：请输入灯泡1的状态
if( ($state & D1) > 0){
	echo "<br />灯1是亮的";
}else{
	echo "<br />灯1是灭的";
}
//需求1b：请输入灯泡2的状态
if( ($state & D2) > 0){
	echo "<br />灯2是亮的";
}else{
	echo "<br />灯2是灭的";
}
echo "<hr />";
function showAll(){
	echo '<p>';
	for($i = 1; $i <=5; ++$i){	
		$s = "D".$i;
		if( ($GLOBALS['state'] & constant($s)) >0){
			echo "灯{$i}亮，";
		}else{
			echo "灯{$i}灭，";
		}
	}
	echo '</p>';
}
echo "打开前";
showAll();

//任务二：可以打开指定的任意一个灯泡
//也只需要按照如下算法就可以打开
echo "打开后";
$state = $state | D3;
showAll();

//任务三：可以关闭指定的任意一个灯泡
$state = $state & (~D2);
showAll();

$state = $state & (~D5);  //这就证明了本身是关着的灯再去关上结果还是关上的
showAll();

?>
<script>




</script>


</body>

</html>














