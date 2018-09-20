<?php


require './SqlDB.class.php';
require './ModelFactory.class.php';
require './BaseModel.class.php';
require './BaseController.class.php';
require './ChatingModel.class.php';
require './ChatingController.class.php';

/*
 *
 * 1. 用传过来的记录总数获取信息
 * 2. 用获取的信息返回给客户端
 *
 */

$auto = ( $_POST['method'] == 'auto' ? true : false );

if ( $auto ) {
	// 自动 ajax 请求部分
	// 1.获取时间之后的的所有信息
	$chat = ModelFactory::M('ChatingController');

	// 2.返回给客户端
	$result = $chat->autoAction();
	echo $result;

} else {
	// 手动 ajax 请求部分

	// 1. 先把 ajax 提交的数据插入数据库
	$chat = new ChatingController();


	// 2.然后把 ajax 提交的数据返回给客户端
	$chat->insertAction();  // 插入用户的信息

	// 然后返回给 浏览器
	$result = $chat->handAction();

	echo $result;  // 返回用户输入的信息
}








