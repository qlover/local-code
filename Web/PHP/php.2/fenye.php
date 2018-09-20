<?php


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

$arr = array(
	array('aaaa','bbbb','cccc'),
	array('aaaa1','bbbb1','cccc1'),
	array('aaaa2','bbbb2','cccc2'),
	array('aaaa3','bbbb3','cccc3'),
);

$str = json_encode($arr[$page]);
echo $str;
// echo $page;
// echo $page;
?>