<?php

require './class/SqlDB.class.php';
echo "用的是 PHP 做的分页，没有用 AJAX 分页，因为用 ajax 不好用 MVC 表现出来";
$config = array(
	'host' => 'localhost',
);

$sqlo = new SqlDB( $config );
// 每页显示条数
$eachShow = 7;  // 5

// 记录总数
$sql = "select count(*) from goods";
$totepage = $sqlo->getOneData( $sql ); // 33
// 求每页起始
$pageNo = !empty($_GET['pageNo']) ? $_GET['pageNo'] : 1 ;
$startpage = ($pageNo-1) * $eachShow;
// 总共页数
$overpage = ceil($totepage/$eachShow);
// 获取数据
$sql = "select * from goods limit $startpage,$eachShow";
$data = $sqlo->getRows( $sql );

// 上一页
$prevpage = $pageNo != 1 ? $pageNo - 1 : $pageNo ;
// 下一页
$nextpage = $pageNo != $overpage ? $pageNo + 1 : $pageNo ;





include './pageing.html';