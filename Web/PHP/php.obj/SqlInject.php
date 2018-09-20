<?php

/**
 * SQL 注入
 */

// 先写一个简单的登录功能
// 这里只先考虑登录成功不考虑其它因素，因为 SQL 注入会体现出来 

?>

<form action="" method="post">
	<p>用户名：<input type="text" name="user"></p>
	<p>密码：<input type="password" name="pass"></p>
	<p><input type="submit" value="登录"></p>
</form>

<?php

// 获取用户输入信息
$name = $_POST['user'];
$pass = $_POST['pass'];


// 连接数据库
$link = mysql_connect('localhost','root','root123');
mysql_query('set names utf-8');
mysql_query('use pratice');
// $sql = "select * from login where username='$name' and password='$pass'";

$sql = "select * from login where username='$name' and password='$pass'";

// echo $sql,'<br />';
$result = mysql_query( $sql );
$rec = mysql_fetch_assoc( $result );
if ($rec != false) {
	echo '登录成功';
} else {
	echo "登录失败";
}


// 但是如果在用户名中输入 qrj'# 你会发现同样的,登录成功了
// 这是因为, 单引号将qrj 前面的字符串与后面的字符串分开了,并且, # 把后面的全部注释掉了
// 所以结果会成功

// 像下面这样
// 在用户名中输入 '#       select * from login where username = ''#' and password=''
// 输入 'or 1 or'    select * from login where username = ''or 1 or '' and password=''
// 输入 '---        select * from login where username = ''----' and password=''



// 都会导致登录成功