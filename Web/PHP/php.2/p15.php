<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 核心</title>
</head>
<body>

<form action="" method="post">
	<input type="text" name="n"/>
	<input type="submit" value="判断" />
</form>
<?php
if( !empty($_POST['n'])){
	$n = $_POST['n'];
	$c = 0;  //用于计数
	for($i =1; $i <= $n; ++$i){
		if($n % $i == 0){
			$c++;
		}
	}
	if($c == 2){
		echo "{$n}是素数";
	}else{
		echo "{$n}不是素数";
	}
	
}
?>
<script>




</script>


</body>

</html>














