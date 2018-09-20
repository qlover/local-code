<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 面向对象</title>
<link rel="stylesheet" href="css/css.css">
<script type="text/javascript" src="js/main.js"></script>
</head>

<body>

<?php

class B{
	function __call($methodName, $argument){
		if($methodName === 'f1'){
			$len = count($argument);
			if($len < 1 || $len > 3){
				trigger_error("使用非法方法",E_USER_ERROR);
			}elseif($len == 1){
				return $argument[0];
			}elseif($len == 2){
				return $argument[0]*$argument[1];
			}elseif($len == 3){
				return $argument[0]*$argument[1]*$argument[2];
			}

		}elseif($methodName === 'f2'){

		}elseif($methodName === 'f3'){

		}elseif($methodName === 'f4'){

		}

	}
}
$a1 = new B();
$v1 = $a1->f1(3); 
$v2 = $a1->f1(3,4); 
$v3 = $a1->f1(3,4,5); 
// $v4 = $a1->f1(); 


?>
</body>
</html>

