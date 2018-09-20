<?php
/*
 * 布局和继承
 * 用一个页面当作是主体的布局页面，该页面用 block 标出布局内容
 * 分别用其它的页面用 extends 引入到 block 占位的布局区域
 * $smart.block.parent 可以引入父级的 block 
 * $smart.block.clihd 可以引入子级的 block
 * block 可以嵌套
 *
 */
header("Content-Type:text/html; charset=utf-8");
require '../libs/Smarty.class.php';
$ms = new Smarty();
$ms->setTemplateDir('./view/');
$ms->setCompileDir('./view_c/');

// $ms->display('lay1.html');
$ms->display('lay2.html');



/**
 *
 *@param 	layout.html 	主布局页面
 *@param 	lay1.html 		布局页面1，分为上中下
 *@param 	lay2.html 		布局页面2，分为上左右下
 *
 */

