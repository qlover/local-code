<?php /* Smarty version Smarty-3.1.16, created on 2017-04-02 00:01:23
         compiled from ".\view\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2977058dfce38c96389-85660014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a57f99f377c0d74fe16fab327b729e7e4d56bf5d' => 
    array (
      0 => '.\\view\\index.html',
      1 => 1491062481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2977058dfce38c96389-85660014',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58dfcebc2be7a8_82049703',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dfcebc2be7a8_82049703')) {function content_58dfcebc2be7a8_82049703($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>缓存集合</h2>

	<div>显示商品信息</div>
	<div>商品展示：</div>
	<div>品牌：<?php echo $_GET['brand'];?>
</div>
	<div>价格：<?php echo $_GET['price'];?>
</div>
	<div>网络：<?php echo $_GET['network'];?>
</div>
	<div>屏幕大小：<?php echo $_GET['big'];?>
</div>

</body>
</html>

<?php }} ?>
