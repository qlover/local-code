<?php

// dom 方式解析 XML 信息


// 创建 DOM 对象

$dom = new DOMDocument('1.0', 'utf-8');

// 加载 DOM 文档
$dom -> load('./x1.xml');

/* 获取 DOM 文档中所有节点  */

// 获取 DOMNodeList 对象
$nodes = $dom->childNodes;   
$len = $nodes -> length;
// 获得 DOMElement 
$firstNode = $nodes -> item(0);
// 但 DOMDocument 对象把回车空白也算是子节点 


// 获取页面中第一个节点
$firstNode = $dom -> getElementsByTagName('person');

// 之后的所有用法都与 JS 中操作 DOM 一模一样
echo $firstNode->item(0)->nodeValue;






