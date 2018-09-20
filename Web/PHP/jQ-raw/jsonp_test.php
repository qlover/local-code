<?php
// 用于 jQuery-raw 部分的 ajax 的 08预处理的请求面面

$act = trim($_GET['action']);

if($act == 'qlover' ){
	echo trim($_GET['backfunc']).'('. json_encode(array('status'=>1,'info'=>'OK')) .')';  
}


?>