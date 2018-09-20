<?php
/*
 * 局部不缓存
 *
 * 缓存页面可以把全部页面数据缓存起来，其中有些数据不适合缓存
 * 		例如天气信息，用户名，
 *
 * 
 */

/*
 * 具体操作
 * {$var nocache} 单个变量不缓存
 * $smarty->assing('','', true) 单个变量不缓存
 * {nocache}内部内容都不会被缓存{/nocache} 大旱内容不被缓存
 * 
 */

header("Content-Type:text/html; charset=utf-8");
require '../libs/Smarty.class.php';
$ms = new Smarty();
$ms->setTemplateDir('./view/');
$ms->setCompileDir('./view_c/');

// 开启缓存
$ms->caching = 1;

$ms->assign('mytime',date('Y-m-d H:i:s'), true);

$ms->display('s2.html'); 








