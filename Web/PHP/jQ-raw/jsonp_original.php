<?php
header('Content-type: application/json');
//获取回调函数名
$jsoncallback = htmlspecialchars($_GET['jsoncallback']);
//输出jsonp格式的数据
echo $jsoncallback . "(" . json_encode(array('status'=>1,'info'=>'OK')) . ")";
//=> callbackFunction({"status":1,"info":"OK"})
?>