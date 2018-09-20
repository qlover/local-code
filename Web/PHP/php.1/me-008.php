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
	$arr = array('a','b','c','d');
	echo "<p>遍历数组 $arr</p>";
	foreach($arr as $s){
		echo $s.'<br />';
	}
	echo "<p>遍历数组的键值</p>";
	foreach($arr as $key => $value){
		echo "{$key} => {$value}"."<br/>";
	}
	
?>
</body>
</html>