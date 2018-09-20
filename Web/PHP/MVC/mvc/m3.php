<?php
// 数据获取在这里
$time = date("Y-m-d H:i:s");


// 获取颜色数据值
if( !empty($_GET['color']) ){
	$color = $_GET['color'];
}else{   // 默认背景
	$color = 'red';
}
// 数据表现在
$file = './m3_' . $color . '.html';

include $file;
?>













