<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>
<?php

//PHP 中的循环中止
/*

break;   终止全部

continue;  中止当前循环


但是在 PHP 中还有更强大的能力，中断更多层的循环


for(){		循环1
	for(){ 		循环2
		for(){		循环3
			break 2; //此时会中断2，其实指中断第2 层
			对此 Break 语句循环 3 其实是第一层，循环2是第二层，循环1是第3层
		}
		continue 2;   此时会中断循环2，其实指中断2层
			对此 continue 语句循环2是基第1层，循环1是第2层
	}		
}

echo "<P>使用相对路径：";
include './page.php';


echo "<P>使用绝对路径（方法1）：";
include _DIR__.'\page.php';

echo "<P>使用绝对路径（方法1）：";
$root = $_SEVER['DOCUMENT_ROOT'];	 //获得当前站点根目录
include $root.'.\page.php';


*/




?>
<script>




</script>


</body>

</html>














