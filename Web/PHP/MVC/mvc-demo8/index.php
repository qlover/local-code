<?php
/*
*
*	前端控制器
*/

$c = !empty($_GET['c']) ? $_GET['c'] : 'Login' ;  // 获取需要的控制器，默认 LoginController
require './' . $c .'Model.class.php';
require './ModelFactory.class.php';
require './BaseController.class.php';
require './' . $c .'Controller.class.php';
$controller_name = $c . 'Controller';
$ctrl = new $controller_name();   // new 出相应的控制器对象

$act = !empty($_GET['a']) ? $_GET['a'] : 'index' ;
$action = $act . 'Action';
$ctrl->$action();


