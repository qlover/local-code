<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>
<?php
//自动转换
$v1 = 1 + 2;  //3
$v2 = 1 + "2"; //3
$v3 = "1" + 2;  //3
//这里要特别注意，PHP 并不像 JS 加号就是加法，并不能用于字符串连接，当然其实的运算符都一样
$v4 = "1" + "2";   //3
$v5 = 1 + "2abc";  //3
$v6 = "1" + "2abc";  //3
//下面的数据转换就只会识别前面数据，如果没数字就是0
$v7 = "1def" + "2abc";  //3
$v8 = "1def" + "abc2";  //1
$v9 = "def1" + "abc2";  //1

//在算术运算符中，把bool 当作数字来用
$v10 = 1 + true;  //2
$v11 = 1 + false; //1

//强制转换
$a1 = 123;
$a2 = (float)$a1;  //将$a1 的值转换成 float 类型,也就是说，这个时候＄a1 里面还是整数 
$a3 = (string)$a1; //将$a1 的值转换成 string 类型





?>
<script>



</script>


</body>

</html>














