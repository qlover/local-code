<?php
/**
* 一些有关 MVC 的基本做法
* 1.请求分发器，就是前端控制器（demo8 已实现）
* 2.目录/平台目录结构 (demo9 已实现)
* 3.常量，为因为 MVC 目录多，可以用 常量来表示出每个目录 
* 4.禁止访问除 index.php 之外所有文件
*/

$p = !empty($_GET['p']) ? $_GET['p'] : 'front';  // 确认平台
$c = !empty($_GET['c']) ? $_GET['c'] : 'Login' ;   // 确认控制器
$a = !empty($_GET['a']) ? $_GET['a'] : 'index' ;  // 确认动作


/** 基础常量的设定
* 
*/
define('PLAT', $p); // 平台
define('DS', DIRECTORY_SEPARATOR ); // 路径的分割符，用预定义常量来做常量值
define('ROOT', __DIR__ . DS);  //当前目录
define('APP', ROOT . 'Application' . DS); // applaction 完整路径
define('FRAMEWORK', ROOT . 'Framework' . DS);  // framework 完整路径
define('PLAT_PATH', APP . PLAT . DS); // 当前平台所有目录
define('CTRL_PATH', PLAT_PATH . 'Controllers' . DS); // 当前控制器所有目录
define('MODEL_PATH', PLAT_PATH . 'Models' . DS);  // 当前模型类所有路径
define('VIEW_PATH', PLAT_PATH . 'Views' . DS);

// 所有路径目录用基础常量代替
// 后面就只需要写文件名就行了
require FRAMEWORK . 'Sql.class.php';
require FRAMEWORK . 'BaseModel.class.php';
require FRAMEWORK . 'BaseController.class.php';
require FRAMEWORK . 'ModelFactory.class.php';
require MODEL_PATH . $c .'Model.class.php';
require CTRL_PATH . $c .'Controller.class.php';


// new 出控制器
$controller_name = $c . 'Controller';
$ctrl = new $controller_name();  
// 执行动作
$action = $a . 'Action';
$ctrl->$action();


/** 禁止访问需要在 apache 配置中写
*
* AllowOverride All #允许使用分布式权限配置文件 .htaccess
* Deny from All #拒绝访问所有
* 最后把这个文件分别放入不允许访问的目录
*/



