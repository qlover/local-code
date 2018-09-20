<?php


/*
 * 当然目录也是可以修改不用 templates 和 templates_c 
 *	可以用 $ms->setTemplateDir() 和 $ms->setCompileDir() 方法
 *	分别表示视图和编译目录
 */


require './libs/Smarty.class.php';
$ms = new Smarty();
$ms->left_delimiter = "<@";
$ms->right_delimiter = "@>";

$ms->setTemplateDir('./view/');
$ms->setCompileDir('./view_c/');

$ms->assign('name','Qlover');
$ms->assign('age','18');

$ms->display('s1.html');

