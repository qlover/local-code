<?php
/*
 * 在模板中获得变量信息， smarty 本身不支持在模板中使用 php 函数
 * 其把函数给封装了一下，这个封装的函数就是 smarty 的变量调剂哭器 
 *
 *
 */
header("Content-Type:text/html; charset=utf-8");
require '../libs/Smarty.class.php';
$ms = new Smarty();
$ms->setTemplateDir('./view/');
$ms->setCompileDir('./view_c/');
$ms->assign('baidu','<a href="http://www.baidu.com">百度</a>');
$ms->assign('title',"cont1\ncont2\ncont3");
$ms->assign('content',"Hello, I am a good boy.");


$ms->display('index.html');



