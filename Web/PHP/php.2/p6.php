<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>
<?php

//const 常量名 = 常量值
const C1 = 1234;
define("CC1","1234");
echo constant("C1") * 3;

$i = 1;
$c1 = "CC" . $i;
echo "<br />" . constant($c1);


echo "<br />";
echo "v1 的值为" . $v1;
echo "<br />";
echo "B1 的值为" . B1; //这两个都未定义过
?>

<hr>

<?php


$v1 = 0x123;   // $v1 = "0x123" == $v1 = 123
$result = octdec($v1);
echo $result;

?>
</body>

</html>














