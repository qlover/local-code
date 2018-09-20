<?php
/* 数据缓存 */
header("Content-Type:text/html; charset=utf-8");
require '../libs/Smarty.class.php';
$ms = new Smarty();
$ms->setTemplateDir('./view/');
$ms->setCompileDir('./view_c/');



// isCached() 可以判断缓存文件是否过期
