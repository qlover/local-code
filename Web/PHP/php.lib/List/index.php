<?php
// 控制器页面
require './TestEmail.class.php';
$e = "myused@sina.com";
$teo = new TestEmail();

$result = $teo->isValidEmail( $e )?'yes':'no';


include './index.html';
