<?php
// 控制器页面
require './TestEmail.class.php';

$mail = 'myus_ed@sina.com';

$teo = new TestEmail( $mail );

$result = $teo->exec();

include './index.html';
