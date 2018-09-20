<?php



class ChatController extends BaseController {

	function chatAction(){
		if( empty($_GET['id'])) die('非法访问') ;
		$id = $_GET['id'];
		$cm = ModelFactory::M('ChatModel');
		// 获取这个用户的信息
		$chat_info = $cm->getUserById($id);
		$totles = $cm->getUserCount();
		require './chat.html';
	}

}
