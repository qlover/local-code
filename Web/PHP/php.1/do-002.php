<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 基础</title>
</head>
<body>
<script type="text/javascript">


</script>
<?php
for($i = 100; $i < 999; $i++){
	/*$a = floor($i/100);
	$b = floor(($i%100)/10);
	$c = floor($i%10);*/
	$a = substr($i,0,1);
	$b = substr($i,1,1);
	$c = substr($i,2,1);
	
	if(($a*$a*$a + $b*$b*$b + $c*$c*$c) == $i){
			echo $a,$b,$c.'<br>';
	}
	/*
	if(pow($a,3) + pow($b,3) + pow($c,3) == $i){
			echo $a,$b,$c.'<br>';
	}
	*/
}
?>
</body>
</html>














