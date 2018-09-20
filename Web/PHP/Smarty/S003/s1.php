<?php

/*
 * 使用成熟的 Smarty 模板，只需要将 Smarty 中的 libs 目录复制过来就行
 * 需要注意的是，在 Smarty 模板中，视图文件不是存放在 view 中
 *		而是 templates/ 目录下
 */


require './libs/Smarty.class.php';
$ms = new Smarty();

/*$ms->left_delimiter = "<<{";
$ms->right_delimiter = "}>>";*/

$ms->assign('name','Qlover');
$ms->assign('age','18');

$ms->display('s1.html');

/*
 * 在 Smarty 中，默认特殊符号是 { 和 }
 * 如果要修改，则可以用 $ms->left_delimiter 和 $ms->right_delimiter
 *	分别表示左边特殊符号和右边特殊符号
 */



/*
 * display 方法
 * 1.判断缓存是否开启
 * 2.判断模板文件是否有更新，如果有更新则 2. 3.都省略
 * 3.判断缓存文件是否存在
 * 4.判断混编文件是否存在
 * 5.展示模板内容
 * 6.缓存开启生成缓存文件
 */