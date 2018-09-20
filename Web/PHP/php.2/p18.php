<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>


<?php


$arr = array(2=>6,'a1'=>5,3=>5,'abc'=>18);
$v1 = current($arr);   //获得当前单元的值
$v2 = key($arr);   //获取当前单元的键
echo "<br/>初始，单元的下标和值分别为：$v1,$v2";
$v3 = next($arr);
$v4 = key($arr);
echo "<br/>然后，现在当前单元的下标和值分别为：$v4,$v3";
//右向右移了三个单元
next($arr);
next($arr);
next($arr);

?>

<script>




</script>


</body>

</html>














