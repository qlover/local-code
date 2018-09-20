<?php
/*
* 控制器
*/

// 载入模型
require './LoginModel.class.php'; 

$logino = new LoginModel();
$data1 = $logino->getAllUser();
$data2 = $logino->getUserCount();

// 载入视图
include './index.html';


