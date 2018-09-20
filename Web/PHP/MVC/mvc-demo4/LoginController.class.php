<?php
/*
* 登录类控制器
*/
// require './BaseController.class.php';
require './LoginModel.class.php';
class LoginControll {

	function indexAction(){
		$lmodo = new LoginModel();
		$data = $lmodo->getAllUser();
		include './showLogin_view.html';
	}

	function deleteAction(){
		$lmodo = new LoginModel();
		$lmodo->delUserById( $_GET['id'] );
		echo "<h2>删除成功</h2>";
		echo '<a href="?">返回</a>';
	}

	function reviseAction(){
		$lmodo = new LoginModel();
		$date = $lmodo->getUserById( $_GET['id'] );
		include './updateLogin_View.html';
	}

	function updateAction(){
		$acc = $_POST['account'];
		$pass = $_POST['password'];
		$lmodo = new LoginModel();
		

		$lmodo->updateUser( 2, $acc, $pass);

		echo "<h2>修改成功</h2>";
		echo "<a href='?'>返回</a>";
	}

	function intrAction(){
		$lmodo = new LoginModel();
		$data = $lmodo->intrUser( $_GET['id'] );
		include './intrLogin_View.html';
	}

	function registerAction(){
		include './Login_register.html';
	}

	function addUserAction(){

		$account = $_POST['account'];
		$password = $_POST['password'];
		$lmodo = new LoginModel();

		$lmodo->insertUser( $account, $password);
		echo "<h2>注册成功</h2>";
		echo "<a href='?'>返回</a>";

	}


}

$lcono = new LoginControll();
$act = !empty($_GET['a']) ? $_GET['a'] : 'index' ;
$action = $act . 'Action';
$lcono->$action();


