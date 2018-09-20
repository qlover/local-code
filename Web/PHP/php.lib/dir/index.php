<?php
// 控制器页面
require './Dir.class.php';
header('Content-Type:text/html;charset=utf-8');

$dlo = new Dir( );
$result = $dlo->showList( );

$fh = fopen('test.txt','a');
fwrite( $fh, '<p style="color:red">我是文件删除内容</p>');
fclose( $fh );


include './index.html';
