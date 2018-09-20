<?php
/*
 * 复选框和下拉菜单
 *
 */
require '../libs/Smarty.class.php';
$ms = new Smarty();
$ms->setTemplateDir('./view/');
$ms->setCompileDir('./view_c/');

$ms->assign('sedlang',array(
		'clang','phplang','pylang'
	));
$ms->assign('lang',array(
		'clang' => "C 语言",
		'javalang' => "Java",
		'jslang' => "JavaScript",
		'phplang' => "PHP",
		'pylang' => "Python",
	));

$ms->assign('sedcity','zj');
$ms->assign('sedcitys', array(
		'sh','wh','zj'
	));
$ms->assign('city', array(
		'bj' => '北京',
		'sh' => '上海',
		'cd' => '成都',
		'wh' => '武汉',
		'zj' => '浙江',
	));


$ms->display('s1.html');




