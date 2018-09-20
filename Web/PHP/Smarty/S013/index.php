<?php
/*
 * 
 * 缓存集合
 * 
 */
header("Content-Type:text/html; charset=utf-8");
require '../libs/Smarty.class.php';
$ms = new Smarty();
$ms->setTemplateDir('./view/');
$ms->setCompileDir('./view_c/');

$ms->caching = 1;

$brand = $_GET['brand'];
$price = $_GET['price'];
$network = $_GET['network'];
$big = $_GET['big'];




/*
 * 删除缓存
 *
 * clearCache(模板名称)			删除该模板对应的全部缓存文件
 * clearCache(模板，标志)		删除该指定模板，指定标志开始的全部缓存文件
 * clearAllChache()				删除全部缓存文件
 * clearAllChache(null, 标志)	删除指定标志开始的全部缓存文件，不考虑是那个模板的
 *
 */


$ms->display('index.html', $brand.'|'.$price.'|'.$network.'|'.$big);
