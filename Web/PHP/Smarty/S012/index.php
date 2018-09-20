<?php
/*
 * 
 * 单模板多缓存
 * 
 */
header("Content-Type:text/html; charset=utf-8");
require '../libs/Smarty.class.php';
$ms = new Smarty();
$ms->setTemplateDir('./view/');
$ms->setCompileDir('./view_c/');

$ms->caching = 1;

// 为 index.html 传入不同的页码
// 每个页码都会生成所对应的一个缓存文件
$page = !empty($_GET['page']) ? $_GET['page'] : 1;
$ms->display('index.html', $page);

