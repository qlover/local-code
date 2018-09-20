<?php
class ChatingController extends BaseController {

	function insertAction(){
		$id = $_POST['id'];
		$name = $_POST['n'];
		$text = $_POST['msg'];
		$cm = ModelFactory::M('ChatingModel');
		$cm->insertUser( $id, $name, $text );
	}


	// 自动返回
	public function autoAction() {
		$id = $_POST['id'];
		$time = $_POST['time'];
	
		// 先获取 ChatModel 因为要获取用户信息
		$cm = ModelFactory::M('ChatingModel');
		// 获取这个用户的信息
		$chat_info = $cm->getInfoByTime( $time );
		$str = '';
		foreach( $chat_info as $val ){
			$user = ( $val['user_id'] == $id ? 'self' : 'other' ) ;
/*-----------------*/
$str .=  <<< EOD
<div class="box box-{$user}">
	<div class="user">
		<span class="name">{$val['username']}</span>
		<span class="time">{$val['over_time']}</span>
	</div>
	<div class="output-msg">
		<span class="text">{$val['text']}</span>
	</div>
</div>
EOD;
/*-----------------*/
		}
		return $str;
			
	}



	// 处理信息，返回给客户端
	function handAction(){
		$id = $_POST['id'];
		$time = $_POST['time'];
		// 先获取 ChatModel 因为要获取用户信息
		$cm = new ChatingModel();
		// 获取这个用户的信息
		$chat_info = $cm->getInfoByTime( $time );
		$str = '';
		foreach( $chat_info as $val ){
			$user = ( $val['user_id'] == $id ? 'self' : 'other' ) ;
/*-----------------*/
$str .=  <<< EOD
<div class="box box-{$user}">
	<div class="user">
		<span class="name">{$val['username']}</span>
		<span class="time">{$val['over_time']}</span>
	</div>
	<div class="output-msg">
		<span class="text">{$val['text']}</span>
	</div>
</div>
EOD;
/*-----------------*/
		}
		return $str;

	}
}


