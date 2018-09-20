<?php

// ajax 提交页面


// print_r($_FILES);

$path = "./";     // 保存到服务器路径
$name = $_FILES['upfile']['name'];  // 获取文件传来路径
$tname = $path.$name;   // 获取文件保存服务器路径

// 判断路径
if( move_uploaded_file( $_FILES['upfile']['tmp_name'], $tname )){
	echo 'upload access'; 
}else{
	echo 'upload failed';
}