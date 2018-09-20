<?php
header('Content-Type:text/html;charset=utf-8');
//连接数据库
function connect_data($database){
	mysql_connect('localhost','root','123') or die("数据连接失败");
	mysql_query("set names utf8");
	mysql_query("use $database") or die("数据库选择失败");
}






