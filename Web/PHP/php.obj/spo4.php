<meta charset="utf-8" />
<link rel="stylesheet" href="css/css.css" />
<script type="text/javascript" src="js/main.js"></script>
<?php
require './class/Sql.notSingle.class.php';

$config = array(
	'host' => 'localhost',
	'user' => 'root',
	'pass' => '123',
	'char' => 'utf8',
	'dbname' => 'pratice'
);

$sqlo = new Sql( $config );
// $sqlo->sqlInfo();
$sql = "select * from login";
// $sqlo->getRows( $sql );



// 获取多条语句
$sql = "select * from login";
$rec = $sqlo->getRows( $sql );

echo "<table>";
echo "<tr><th>Id</th><th>username</th><th>password</th></tr>";
foreach($rec as $i){
	echo "<tr>";
	foreach ($i as $key => $value) {
		if( $value === $i['password']){
			// 两种加密
			// $val = crypt( $value );
			// $val = md5( $value );
			echo "<td class=\"password\">{$sqlo->encrypt($value,0)}</td>";
		}else{
			echo "<td>{$value}</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";

// 获取一条数据
$sql = "select * from login where Id = 20";
$rec = $sqlo->getOneRow( $sql );
echo "Id：" . $rec['Id'] . "<br />";
echo "用户名：" . $rec['username'] . "<br />";
echo "密码：" . $sqlo->encrypt($rec['password'],0) . "<br />";



// 获取一个数据
$sql = "select count(*) as sum from login";
$rec = $sqlo->getOneData( $sql );
echo "表中一共有<span class=\"ipt\">{$rec}</span>个用户<br />";

