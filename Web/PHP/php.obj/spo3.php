<meta charset="utf-8" />
<link rel="stylesheet" href="css/css.css" />
<script type="text/javascript" src="js/main.js"></script>
<?php
require './class/Sql.class.php';

$config = array(
	'host' => 'localhost',
	'user' => 'root',
	'pass' => '123',
	'char' => 'utf8',
	'dbname' => 'pratice'
);

$sqlo = new Sql( $config );
$re = mysql_query("select * from user");
var_dump($re);
// 单独修改编码
echo "<br />";

// $sqlo->setChar("gbk");
$res = mysql_fetch_array($re);
echo $res['user'];

// 关闭连接
echo "<br />";

$sqlo->closeDB();
$re = mysql_query("select * from user");
// $res = mysql_fetch_array($re);
var_dump($re);
// echo $res['user'];




