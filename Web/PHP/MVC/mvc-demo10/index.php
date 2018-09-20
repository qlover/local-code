<?php
/*
* 后台管理
* 在 back 目录中添加与 front 目录中相同的文件目录
* 并给相关模型、控制器和视图
*/

$p = !empty($_GET['p']) ? $_GET['p'] : 'front';  // 确认平台
$c = !empty($_GET['c']) ? $_GET['c'] : 'Login' ;   // 确认控制器
$a = !empty($_GET['a']) ? $_GET['a'] : 'index' ;  // 确认动作


require './Framework/Sql.class.php';
require './Framework/BaseModel.class.php';
require './Framework/BaseController.class.php';
require './Framework/ModelFactory.class.php';

require './Application/'. $p .'/Models/'. $c .'Model.class.php';
require './Application/'. $p .'/Controllers/'. $c .'Controller.class.php';



// new 出控制器
$controller_name = $c . 'Controller';
$ctrl = new $controller_name();  
// 执行动作
$action = $a . 'Action';
$ctrl->$action();


