<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>
<?php



echo "<br />aaa";
echo $v1;  //使用了不存在的变量
echo C1;   //使用了不存在的常量
echo  "<br />bbb";

include "./no_this_file.php";

echo "<br />";





echo "<br />ccc1";

//自定义错误（用户错误，该用户并不是使用该页面的用户，而这个用户指的是我们，）
//这里所谓的用户错误，就是我们程序员作为 Php 语言的用户
//来通过程序 主动 创建出来的错误

$age = 180;   //代表网页用户提交的年龄！
if( $age > 150 || $age < 0){  //异常数据处理
	trigger_error("年龄不符合要求",E_USER_ERROR);
}

echo "<br />ccc2";

$s1 = no_this_function(1,2);

echo "<br />ddd";

//该函数需要定义4个参数，分别代表
//errCode 错误代号
//errMsg 错误信息
//errFile 错误文件名
//errLine 错误行
function my_error_handler($errCode,$errMsg,$errFile,$errLine){
	$str = "<p>";
	$str .= "<br />错误代号为：".$errCode;
	$str .= "<br />错误内容为：".$errMsg;
	$str .= "<br />错误文件为：".$errFile;
	$str .= "<br />错误行号为：".$errFile;
	$str .= "<br />错误时间为：".date("Y-H-M");
	$sst .= "</p>";
	echo $str;
}


?>
<script>




</script>


</body>

</html>














