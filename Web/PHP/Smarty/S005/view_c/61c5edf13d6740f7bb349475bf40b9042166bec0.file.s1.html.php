<?php /* Smarty version Smarty-3.1.16, created on 2017-03-31 00:02:14
         compiled from ".\view\s1.html" */ ?>
<?php /*%%SmartyHeaderCode:2694358dd2b715ccd07-19119197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c5edf13d6740f7bb349475bf40b9042166bec0' => 
    array (
      0 => '.\\view\\s1.html',
      1 => 1490889618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2694358dd2b715ccd07-19119197',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58dd2b716e5ae4_84459339',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dd2b716e5ae4_84459339')) {function content_58dd2b716e5ae4_84459339($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>用户名：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
	<p>修改特殊符号后</p>
	<div>用户年龄：<?php echo $_GET['name'];?>
</div>
</body>
</html><?php }} ?>