<?php


class LoginController extends BaseController {

	

	function loginAction(){
		require './login.html';
	}

	function checkAction(){
	
		if( empty($_POST['name']) || empty($_POST['pass']) ) {
			die('非法访问');
		}
		$lm = ModelFactory::M('loginModel');
		
		// 信息来源
		$name = $_POST['name'];
		$pass = $_POST['pass'];


		$id = $lm->getIdByName($name);
		if ( $lm->checkUser($name, $pass) ) {
			$this->gotoURL("?c=chat&a=chat&id={$id}", '登录成功');
		} else {
			$this->gotoURL('?',"登录失败");
		}
	}

}
