<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>
<?php
$v1 = 1;
$v2 = $v1;
$v1 = 10;
echo '<br/>'.'$v1 is '.$v1;
echo '<br/>'.'$v2 is '.$v2;

echo "<hr />";

$s1 = 10;
$s2 = &$s1;
unset($s1);
echo '<br/>'.'$v1 is '.$s1;var_dump($s1);
echo '<br/>'.'$v2 is '.$s2;


?>
</body>
</html>














