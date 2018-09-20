<?php
/*
* 控制器
*/

// 载入模型
require './LoginModel.class.php'; 

$id = !empty($_GET['id']) ? $_GET['id'] : 1;
$user = !empty($_GET['u']) ? $_GET['u'] : '小覃';


$logino = new LoginModel();
$data1 = $logino->getAllUser();
$data2 = $logino->getUserCount();
$data3 = $logino->getUserById( $id );
$data4 = $logino->getUserByName( $user );

// 载入视图
include './index.html';


