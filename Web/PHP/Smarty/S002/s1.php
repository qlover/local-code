<?php

// $content = "我是用 Smarty 模块引擎的内容";


// 载入 MiniSmarty 模板
require './MiniSmarty.class.php';
$ms = new MiniSmarty();
$ms->assign('title','我是用 Smarty1 模块引擎的标题');
$ms->assign('content','我是用 Smarty1 模块引擎的内容');
$ms->display('./s1.html');






