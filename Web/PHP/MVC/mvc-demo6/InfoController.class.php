<?php
require './InfoModel.class.php';
class InfoControll {

	function indexAction(){
		$ifo = new InfoModel();
		$data = $ifo->getAllUser();
		include './showInfo_view.html';
	}

	function deleteAction(){
		$ifo = new InfoModel();
		$ifo->delUserById( $_GET['id'] );
		echo "<h2>删除成功</h2>";
		echo '<a href="?">返回</a>';
	}

	function reviseAction(){
		$ifo = new InfoModel();
		$data = $ifo->getUserById( $_GET['id'] );
		$nick = $data['nick'];
		$account = $data['account'];
		$email = $data['email'];
		$password = $data['password'];
		$qq = $data['qq'];
		$telephone = $data['telephone'];
		$safety = $data['safety'];
		$age = $data['age'];
		$edu = $data['edu'];
		$data_hobby = explode( ',', $data['hobby'] );  // 将字符串用参数一分割成一维数组
		$data_address = explode('-', $data['address'] );		
		$zcode = $data['zcode'];
		$school = $data['school'];
		include './updateInfo_View.html';
	}

	function updateAction(){
		$nick = $_POST['nick'];
		$account = $_POST['account'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$qq = $_POST['qq'];
		$telephone = $_POST['telephone'];
		$safety = $_POST['safety'];
		$age = $_POST['age'];
		$edu = $_POST['edu'];
		$hobby = implode(',', $_POST['hobby'] );  // 将一维数组中的值用参数一连接起来
		$aes_province = $_POST['province'];
		$aes_city = $_POST['city'];
		$address = $aes_province .'-'. $aes_city;
		$zcode = $_POST['zcode'];
		$school = $_POST['school'];

		$ifo = new InfoModel();
		$ifo->updateUser( $_POST['id'], $nick, $account, $email, $password, $qq, $telephone, 
			$safety, $age, $edu, $hobby, $address, $zcode, $school );
		echo "<h2>修改成功</h2>";
		echo "<a href='?'>返回</a>";
	}

	function intrAction(){
		$ifo = new InfoModel();
		$data = $ifo->intrUser( $_GET['id'] );
		include './intrInfo_View.html';
	}

	function registerAction(){
		include './Info_register.html';
	}

	function addUserAction(){

		$nick = $_POST['nick'];
		$account = $_POST['account'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$qq = $_POST['qq'];
		$telephone = $_POST['telephone'];
		$safety = $_POST['safety'];
		$age = $_POST['age'];
		$edu = $_POST['edu'];
		$hobby = implode(',', $_POST['hobby'] );  // 将一维数组中的值用参数一连接起来
		$aes_province = $_POST['province'];
		$aes_city = $_POST['city'];
		$address = $aes_province .'-'. $aes_city;
		$zcode = $_POST['zcode'];
		$school = $_POST['school'];


		$ifo = new InfoModel();
		$ifo->insertUser( $nick, $account, $email, $password, $qq, $telephone, 
			$safety, $age, $edu, $hobby, $address, $zcode, $school );
		echo "<h2>注册成功</h2>";
		echo "<a href='?'>返回</a>";
	}


}

$ifc = new InfoControll();
$act = !empty($_GET['a']) ? $_GET['a'] : 'index' ;
$action = $act . 'Action';
$ifc->$action();


