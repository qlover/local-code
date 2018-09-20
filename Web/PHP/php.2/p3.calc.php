<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Calc</title>
<style>
h1{text-align:center;}
</style>
<script>
window.onload = function(){
	var myForm = document.forms['myForm'];
	var restart = myForm.restart;
	var method = myForm.method;

	myForm.onreset = function(){
		var flag =confirm('are you srue refurbish');
		if(flag){
			location.replace('p3.calc.php');
		}
	}
	
	
}

</script>
</head>
<body>
<h1>PHP 做的简单的计算器效果</h1>
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$defalutselect = 'selected="selected"';
if(isset($_POST['equal'])){
	$method = $_POST['method'];
	switch($method){
		case "+":$result = $num1 + $num2;break;
		case "-":$result = $num1 - $num2;break;
		case "x":$result = $num1 * $num2;break;
		case "÷":$result = $num1 / $num2;break;
		default: echo '你的运算有问题，请检查'; break;
	}
}
?>


<form name="myForm" action="" method="post">
<input type="text" name="num1" value="<?php echo $num1;?>"/>
<select name="method">
<option name="add">+</option>
<option name="minus" <?php if($method == "-"){ echo "selected='selected'";}?> >-</option>
<option name="ride"<?php if($method == "x"){ echo "selected='selected'";}?>>x</option>
<option name="divide"<?php if($method == "÷"){ echo "selected='selected'";}?>>÷</option>
</select>
<input type="text" name="num2" value="<?php echo $num2;?>"/>
<input type="submit" name="equal" value="="/>
<input type="text" name="result" value="<?php echo $result;?>" />
<input type="reset" name="restart">
</form>

</body>
</html>














