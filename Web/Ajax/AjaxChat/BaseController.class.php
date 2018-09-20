<?php
class BaseController{
	function __construct(){
		header('content-type:text/html; charset=utf-8');

	}

	function gotoURL(  $url, $msg='', $time = 3){
		echo "<p>$msg</p>";
		echo "<a href='?'>返回</a>";
		echo "<p>页面将在{$time}秒后自动跳转</p>";
		header("refresh:$time; url=$url");
	}

}


