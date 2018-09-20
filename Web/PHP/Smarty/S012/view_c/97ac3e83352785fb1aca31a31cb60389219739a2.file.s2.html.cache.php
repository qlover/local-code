<?php /* Smarty version Smarty-3.1.16, created on 2017-04-01 23:51:41
         compiled from ".\view\s2.html" */ ?>
<?php /*%%SmartyHeaderCode:2443358dfcbba119e86-10852618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97ac3e83352785fb1aca31a31cb60389219739a2' => 
    array (
      0 => '.\\view\\s2.html',
      1 => 1491061899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2443358dfcbba119e86-10852618',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58dfcc52a0d0e5_72704507',
  'variables' => 
  array (
    'mytime' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dfcc52a0d0e5_72704507')) {function content_58dfcc52a0d0e5_72704507($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>局部不缓存</h2>
	
	<div><?php echo time();?>
</div>
	
	<div><?php echo '/*%%SmartyNocache:2443358dfcbba119e86-10852618%%*/<?php echo time();?>
/*/%%SmartyNocache:2443358dfcbba119e86-10852618%%*/';?>
</div>
	
	<div><?php echo '/*%%SmartyNocache:2443358dfcbba119e86-10852618%%*/<?php echo $_smarty_tpl->tpl_vars[\'mytime\']->value;?>
/*/%%SmartyNocache:2443358dfcbba119e86-10852618%%*/';?>
</div>

</body>
</html><?php }} ?>
