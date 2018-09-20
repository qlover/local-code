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
	$stu = array(1=>'a','b','c');
	echo $stu[0],'<br />';
	echo $stu[1],'<br />';
	echo $stu[2],'<br />';
	print_r($stu);
?>
<h3>另一个数组的赋值</h3>
<?php
	$str = array('a',2=>'b','c',5=>'d','e');
	//你知道结果又会是怎么样的吗？
	print_r($str);
?>
<h3>关联数组</h3>
<?php
	$stu = array(100=>'a','二百'=>'b');
	echo $stu[100],'<br />';	//虽然可以输出，但是上一句的100=>'a' 说明了 100 和元素 a 有关联，所以这个是个关联数组
	echo $stu['100'],'<br />';
	echo $stu['二百'],'<br />';
	print_r($stu);
?>
</body>
</html>