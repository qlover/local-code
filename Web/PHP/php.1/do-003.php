<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php 基础</title>
</head>
<body>
<script type="text/javascript">


</script>
<style>
table{
	border-collapse:collapse;
}
td{
	border:1px solid #000;
	padding:2px 5px;
}
</style>
<table>
<?php
for($i=1; $i <= 9; $i++){
	echo '<tr>';
	for($n=1; $n<=$i; $n++){
		echo "<td>{$i}X{$n}=".($i*$n)."</td>";
	}
	echo '</tr>';
}
?>
</table>
</body>
</html>














