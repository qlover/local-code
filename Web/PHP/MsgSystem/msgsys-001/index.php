<?php
header("Content-Type:text/html; charset=utf-8");
define('APP_DEBUG', true);  // 开发模式模式
// define('APP_DEBUG', false);  // 而生产模式

define('DIR', '/msgsys-001/');
define('PUB', DIR.'public/');
define('HOME', PUB. 'home/');
define('HOME_CSS', HOME.'css/');
define('HOME_JS', HOME.'js/');
define('HOME_IMG', HOME.'img/');

require '../ThinkPHP/ThinkPHP.php';
