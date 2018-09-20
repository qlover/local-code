<?php
/*
 * 1. 用一个传统的视图页面存放所需要显示的内容，并且在页面中插入特殊的符号
 * 2. 然后创建一个模板类，在类中操作该文件
 * 		将文件中的内容中特殊符号替换成 PHP 代码
 * 3. 将替换后的代码存放在另一个编译后的文件中
 *		并且载入这个编译后的文件（这个编译并不是编译成二进制数）
 *		只是对原视图文件的操作
 * 4. 在主 php 页面中，只需载入模板类，并传入指定的参数就行
 */


// $content = "我是用 Smarty 模块引擎的内容";


// 载入 MiniSmarty 模板
require './MiniSmarty.class.php';
$ms = new MiniSmarty();
$ms->assign('title','我是用 Smarty 模块引擎的标题');
$ms->assign('content','我是用 Smarty 模块引擎的内容');
$ms->compile('./s1.html');
