<?php

$c = !empty($_GET['c']) ? $_GET['c'] : 'Login' ;   // 确认控制器

// 载入所有需要的工具类
// 让所有的页面为 index.php 工作,这样可以减少不必要的路径错误
// 也就说,在其它的文件中就不需要载入某个文件了
require './Framework/Sql.class.php';
require './Framework/BaseModel.class.php';
require './Framework/BaseController.class.php';
require './Framework/ModelFactory.class.php';
// 载入相对应的模型类和控制器类
require './Application/front/Models/' . $c .'Model.class.php';
require './Application/front/Controllers/' . $c .'Controller.class.php';
// new 控制器对象
$controller_name = $c . 'Controller';
$ctrl = new $controller_name();  
// 
$act = !empty($_GET['a']) ? $_GET['a'] : 'index' ;  // 确认动作
$action = $act . 'Action';
$ctrl->$action();


