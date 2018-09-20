<?php
require './UserModel.class.php';
require './ModelFactory.class.php';

class UserControll {

	function indexAction(){
		$umo = ModelFactory::M('UserModel');
		$data = $umo->getAllUser();
		include './showUser_view.html';
	}

	function deleteAction(){
		$umo = ModelFactory::M('UserModel');
		$umo->delUserById( $_GET['id'] );
		echo "<h2>删除成功</h2>";
		echo '<a href="?">返回</a>';
	}

	function reviseAction(){
		$umo = ModelFactory::M('UserModel');
		$data = $umo->getUserById( $_GET['id'] );
		$data_hobby = explode( ',', $data['hobby'] );  // 将字符串用参数一分割成一维数组
		$data_address = explode('-', $data['address'] );		
		include './updateUser_View.html';
	}

	function updateAction(){
		$nick = $_POST['nick'];
		$account = $_POST['account'];
		$email = $_POST['email'];
		$edu = $_POST['edu'];
		$hobby = implode(',', $_POST['hobby'] );  // 将一维数组中的值用参数一连接起来
		$aes_province = $_POST['province'];
		$aes_city = $_POST['city'];
		$address = $aes_province .'-'. $aes_city;

		$umo = ModelFactory::M('UserModel');
		$umo->updateUser( $_POST['id'], $nick, $account, $email, $edu, $hobby, $address );
		echo "<h2>修改成功</h2>";
		echo "<a href='?'>返回</a>";
	}

	function intrAction(){
		$umo = ModelFactory::M('UserModel');
		$data = $umo->intrUser( $_GET['id'] );
		include './intrUser_View.html';
	}

	function registerAction(){
		include './User_register.html';
	}

	function addUserAction(){
		$nick = $_POST['nick'];
		$account = $_POST['account'];
		$email = $_POST['email'];
		$edu = $_POST['edu'];
		$hobby = implode(',', $_POST['hobby'] );  // 将一维数组中的值用参数一连接起来
		$aes_province = $_POST['province'];
		$aes_city = $_POST['city'];
		$address = $aes_province .'-'. $aes_city;
		$umo = ModelFactory::M('UserModel');
		$umo->insertUser( $nick, $account, $email, $edu, $hobby, $address);
		echo "<h2>注册成功</h2>";
		echo "<a href='?'>返回</a>";
	}


}

$uco = new UserControll();
$act = !empty($_GET['a']) ? $_GET['a'] : 'index' ;
$action = $act . 'Action';
$uco->$action();


