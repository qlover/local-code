<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言系统页面</title>
	<link rel="stylesheet" href="<?php echo HOME_CSS;?>reset.css">
	<link rel="stylesheet" href="<?php echo HOME_CSS;?>style.css">
	<script src="<?php echo HOME_JS;?>fun.js"></script>
</head>
<body>
	<div id="to-top">返回顶部</div>
	<h2>留言系统页面</h2>
	<section id="user-info">
		<h3>登录状态：<?php  if( $is_login ){ echo '已经登录'; }else{ echo '还未登录'; } ?></h3>
		<span class="hid"><?php echo UID;?></span>
		<h3>当前用户：<?php echo UNAME; ?><button id="quitBtn" class="fr">退出</button></h3>
	</section>

	<!-- 留言 -->
	<?php  if( $is_login){ echo '<section id="message"><textarea name="msg" id="msg-broad"></textarea><p><input id="msgBtn" type="submit" value="留言" /></p></section>'; } ?>
	<!--// 留言 -->
	<section id="content">
		<div class="item">
			<!-- 留言板 -->
			<?php foreach($result as $v){ ?>
			<div class="items">
				<dl class="list">
					<dd class="top"><?php echo $v['uname'] ?></dd>
					<dd class="mid"><?php echo $v['text'] ?>
						<span class="time fr"><?php echo $v['time']; ?></span>
					</dd>
					<dd class="bot">
						<span class="zan ">赞</span>
					</dd>
				</dl>
			</div>
			<?php } ?>
			<!-- 留言板 -->
		</div>

	</section>
	<script src="<?php echo HOME_JS;?>jquery.js"></script>
	<script>
	$('#msg-broad').val('');

	$('#to-top').on('click',toTop);
	
	$('#quitBtn').on('click', function(event) {	
		$.post('quit.html',{
			'is' : true
		}, function(data) {
			data = Boolean(data);
			document.cookie = '';
			if (data == true) {
				// 不能有 history 记录
				document.location.replace('login.html');
			}
		});
	});
	</script>
	<!-- 留言 Ajax -->
	<script>

		$('#msgBtn').on('click', function(event) {
			var textVal = $('#msg-broad').val();
			if( textVal == ''){
				alert('提交内容为空');
				$('#msg-broad').focus();
				return false;
			}
			$('#msg-broad').val('');
			var $args = {
				'uid' : '<?php echo UID; ?>',
				'uname' : '<?php echo UNAME; ?>',
				'text' : textVal,
			};	
			$.post('message.html', $args, function(data) {
				// 处理JSON 格式
				// console.log(!!data);
				if(data){
					// alert('留言成功');
					// 解析  JSON
					var data = $.parseJSON(data)[0];
					// 将解析的 JSON 信息添加到页面中
					var $s = '<div class="items flick">';
					$s += '<dl class="list">';
					$s += '<dd class="top">'+data['uname']+'</dd>';
					$s += '<dd class="mid">'+data['text'];
					$s += '<span class="time fr">'+data['time']+'</span></dd>';
					$s += '<dd class="bot"><span class="zan">赞</span></dd>';
					$s += '</dl></div>';
					$('#content .items').first().before($s);
					setTimeout(function(){
						$('#content .items').first().removeClass('flick');
					},1000);
				}else{
					alert('留言失败');
				}
				// data = JSON.parse(data);
				// console.log(data);
			});
		});
	</script>

</body>
</html>