<?php
/*
 *
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

$ms->assign('colorStyle','style_3');


$ms->display('s2.html');




