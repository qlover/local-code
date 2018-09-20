<?php
/*
 * 数组的使用
 *
 *
 *
 */
require '../libs/Smarty.class.php';
$ms = new Smarty();
$ms->setTemplateDir('./view/');
$ms->setCompileDir('./view_c/');

// 为 s1.html 页面提供一个数组
$fruArr = array('apple','pear','bannana', 'wm'=>'watermelon');
$ms->assign('fruit', $fruArr);

$ms->assign('items',array(
	'list1' => '列表一',
	'list2' => '列表二',
	'list3' => '列表三',
	'list4' => '列表四',
	'list5' => '列表五'
));

$ms->display('s1.html');




