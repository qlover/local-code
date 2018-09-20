<?php

require './SqlDB.class.php';
require './ModelFactory.class.php';
require './BaseModel.class.php';
require './BaseController.class.php';

require './LoginModel.class.php';
require './LoginController.class.php';
require './ChatModel.class.php';
require './ChatController.class.php';

// 确认控制器
$c = empty( $_GET['c'] ) ? 'Login' : $_GET['c'];
$controller_name = $c. 'Controller';
// 确认动作
$a = empty( $_GET['a'] ) ? 'login' : $_GET['a']	;
$action = $a. 'Action';

// 执行
$ctr = new $controller_name();
$ctr->$action();































