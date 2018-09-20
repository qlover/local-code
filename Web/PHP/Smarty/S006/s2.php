<?php
/*
 * 使用 Smarty 的保留变量
 * Smarty 旧版本可以在原视图中直接写 PHP 代码，而新版本中则不能
 * 所以，如果要在新版本中用 $_GET 获取的信息则需要用保留变量
 *
 *
 */
require '../libs/Smarty.class.php';
$ms = new Smarty();
$ms->setTemplateDir('./view/');
$ms->setCompileDir('./view_c/');
/**
 *
 *{config_load file="style.conf" section="style_1"}
 *{literal} 被该包含的内容是不是会 smarty 解析的
 *@param file 		引入的 conf 配置
 *@param section 	引入配置项里单独的段
 *
 *
 */
// 为 s2.html 页面传一个样式属性
// 用该属性可以去控制 section 属性的值
$sty = 'style_' . rand(1,3); // 可以随机样式
$ms->assign('colorStyle',$sty);


$ms->display('s2.html');




