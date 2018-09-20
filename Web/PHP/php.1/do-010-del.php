<?php
//因为本页面无需要用上 html　 结构所以就直接用 php　 了
$id = $_GET['id'];
mysql_connect('localhost','root','');
mysql_select_db('data');
mysql_query('set names utf8');
$sql = "delete from goods where code=$id";
if(mysql_query($sql)){
	header('location:do-010.php');
}else die(mysql_error());



