<?php
// 使用ODBC连接Access数据库
$dsn = "DRIVER=Microsoft Access Driver (*.mdb);dbq=".realpath("8.0.mdb");
$conn = odbc_connect($dsn,"","",SQL_CUR_USE_ODBC ) or die ("Connect Error!");





$page = null;
// 初始化 cookie 为 0 ，也就是初始化第一条数据
// 这个过程可以在 fenye.html 中完成更简单

// 下一页
if ( $_GET['ac'] == 'up' ) {
	$c = $_COOKIE['page'];
	setcookie('page', ++$c);
	$page = $c;
}
// 上一页
elseif( $_GET['ac'] == 'down' ){
	$c = $_COOKIE['page'];
	setcookie('page', --$c);
	$page = $c;
}

// 小于第一条数据时
if ( $page < 0 ) {
	setcookie('page', 0);  // 默认到第一条数据
	$page = 0; 
}
// 最后一条数据时
elseif ( $page > 3 ) {
	setcookie('page', 3);
	echo '暂无更多数据';
	die;
}

$arr = array( );


$sql = "select top 4 * from cms_banner where id not in ( select top 1 id from cms_banner )";
$rs = odbc_exec($conn, $sql);

while( $row = odbc_fetch_array($rs) ) { 
	array_push($arr, $row);
} 


print_r($arr);



// $str = json_encode($arr[$page]);
// echo $str;



// odbc_close($conn);



/* 获取执行 top 类似于 limit */
// select * from tablename limit m, n
//  ==>
// select top (n-m+1) id from tablename
// where id not in (
//   select top m-1 id from tablename
// )


/**
select top @pageSize id from tablename
where id not in (
  select top @offset id from tablename
)
 */
?>