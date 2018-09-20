<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心,第一次总结</title>
</head>
<body>
<?php

function br(){ echo '<br />'; }
function hr(){ echo '<hr />'; }
function H3($str){ echo "<h3>$str</h3>"; }
function H2($str){ echo "<h2>$str</h2>"; }
function H1($str){ echo "<h1>$str</h1>"; }
function p($str){ echo "<p>$str</p>"; }

H1('变量');
$global = '我是全局变量 $global，你服不服';
$var1 = 10;
$var2 = 100;
$var2 = $var1;
$var1 = 1000;
echo $var1."|".$var2;

br();

$var3 = 10;
$var4 = 100;
$var4 = &$var3;
$var3 = 1000;
echo $var3."|".$var4;

H2('可变变量');


$var5 = '我是第5个 var 变量';
$var6 = 'var5';
echo "\$var5 = $var5 | \$var6 = ".$$var6;

function fun(){
	br();
	return "我是函数";
}

function fun1(){
	br();
	return "我是函数一";
}

br();

$f = fun1();
$f1 = 'f';

H3('可变这是用于函数');
echo $$f1;

H3('unset()');

$u1 = 100;
//$u2 = 10;   /* => 100*/
$u2 = &$u1;
$u2 = 10;   /* => 10*/
unset($u1);
echo $u1.'// $u2 变量已经不在了，不信来做个判断';br();
if($u1){
	echo '$u1 还在';
}else echo '$u1 不在了';
p('但为什么$u2在，这个是因为，unset 销毁的是$u1的引用，而 $u2 的引用还在');
echo '$u2='.$u2;
H3('GET 获取');
?>


<?php
$print = false;
if(!empty($_GET['user'])){
	$d = $_GET['user'];
	$print = true;
}
?>
<form name="form1" action="" method="get">
<input name="user" type="text" value="<?php echo $d;?>" placeholder="请输入你的名字"/>
<input type="submit" />
</form>
<?php
if(!empty($_GET['user'])){
	if($print){
		echo p("$d 是你输入的名字");
	}else echo '非法访问';
}else echo '非法访问';


br();

echo $GLOBALS['global'];
unset($global);
br();
echo "将\$global 变量销毁后看全局访问：";
if($GLOBALS['global']){
	echo $GLOBALS['global'];
}else echo "\$GLOBALS['global'] 已经不在了";
hr();
h1('常量');
echo '未定义前 PI 的值是'.PI;
define('PI','3.14159');br();
echo '定义后 PI 的值是'.PI;

br();

const  Name = 'Valentine';

p('直接输出');
echo Name;
p('用  constant() 输出');
echo constant("Name");

br();
H3('常量名也是可变的');
$const1 = 'Valentines';
$i = 'const1';
echo $$i;p('但是却不能用 constant() 函数访问');

	H1('数据类型的下次总结再说了');

?>

<script>
window.onload =function(){
	var thisURL = location.href;
	
	document.form1.onsubmit = function(){
		var userV = document.form1.user.value;
	}
	
	
}
</script>


</body>

</html>














