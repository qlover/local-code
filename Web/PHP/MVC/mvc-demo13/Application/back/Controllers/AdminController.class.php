<?php

class AdminController extends BaseController {
	function loginAction(){
		include VIEW_PATH . 'login_View.html';
	}
	function checkAction(){
		echo "正在验证信息，请稍后。。。";
	}
}