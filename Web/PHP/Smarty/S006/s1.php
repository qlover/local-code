<?php
/*
 * 使用 Smarty 的保留变量
 * Smarty 旧版本可以在原视图中直接写 PHP 代码，而新版本中则不能
 * 所以，如果要在新版本中用 $_GET 获取的信息则需要用保留变量
 *
 *
 * {config_load file="site.conf"} 引入配置的文件
 */
require '../libs/Smarty.class.php';
$ms = new Smarty();
$ms->setTemplateDir('./view/');
$ms->setCompileDir('./view_c/');


$ms->assign('name','Qlover');
// $smarty.get.name 可以获取 GET 传递的信息，并不是上一排所设置的信息
$ms->assign('age','18');




$ms->display('s1.html');




