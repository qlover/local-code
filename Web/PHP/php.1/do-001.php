<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 基础</title>
</head>
<body>
<script type="text/javascript">
	function run(){
		alert('this is run()');
	}
	var a = 'run';
	var b = a;
	b();
</script>
<?php
	function show(){
		echo '你使用了 show() 这个函数'.'<br />';
	}
	$s = 'show';
	$run = $s;
	echo $run();
	echo $run();
	
	$a = 'I love you';
	$b = 'a';
	echo '$a is:'.$a.'<br />';
	echo '$b is:'.$b.'<br />';
	echo '$$b is:'.$$b.'<br />';
?>
<h3>下面来个可变变量的做法</h3>
<h5>定义三个函数 分别叫 first(), second(),third()</h5>
<?php
function first(){
	echo '这个是 first 函数'.'<br />';
}
function second(){
	echo '这个是 second 函数'.'<br />';
}
function third(){
	echo '这个是 third 函数'.'<br />';
}
	
function runFun($str){ $str(); }
	
runFun('first');
runFun('third');
runFun('first');
runFun('second'); //如果用 JS 做这个肯定是做不出来的，不信请向上看 <script/> 中的内容
?>
<h3>函数作用域</h3>
<?php
	$num = 500;
	
	function cal(){
		$num2 = 600;
		echo $num2;
		//echo $num;
	}
	cal();
?>
</body>
</html>














