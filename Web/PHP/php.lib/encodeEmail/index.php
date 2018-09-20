<?php
// 控制器页面
require './EncodeEmail.class.php';

$eeo = new EncodeEmail();
$result = $eeo->encoding('myused@sina.com','link to mail');



include './index.html';
