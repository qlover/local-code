<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>
<?php
$v1 = 123;

$str1 = "qrj";
//单引号字符串
//其实需要或可以识别的转义字符有： \\ \'
$str2 = 'ab\\cde\'fghijk';

echo $str2;

echo "\n\n\n";
echo '<hr />';

$v1 = 123;
$str2 = <<<"ABCD"
abcdefg ，这里其实就是字符串的内容！\$v1 = $v1
ABCD;

echo $str2;

echo "\n\n\n";
echo '<hr />';
$str3 = <<<'ABCD'
abcdefg ，这里其实就是字符串的内容！$v1 = $v1
ABCD;
echo $str3;



?>
<script>



</script>


</body>

</html>














