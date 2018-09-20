<?php
/*
 * 删除缓存
 *
 * clearCache(模板名称)			删除该模板对应的全部缓存文件
 * clearCache(模板，标志)		删除该指定模板，指定标志开始的全部缓存文件
 * clearAllCache()				删除全部缓存文件
 * clearAllCache(null, 标志)	删除指定标志开始的全部缓存文件，不考虑是那个模板的
 * 删除缓存文件就不要 display() 方法
 */

header("Content-Type:text/html; charset=utf-8");
require '../libs/Smarty.class.php';
$ms = new Smarty();
$ms->setTemplateDir('./view/');
$ms->setCompileDir('./view_c/');

// 开启缓存
$ms->caching = 1;
// 删除一个模板文件
echo $ms->clearCache('index.html','sanxin|100|cmcc|20');
echo $ms->cleareAllCache(); // 全部缓存文件都将被删除






