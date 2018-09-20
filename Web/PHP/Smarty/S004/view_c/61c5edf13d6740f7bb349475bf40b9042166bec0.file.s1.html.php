<?php /* Smarty version Smarty-3.1.16, created on 2017-03-30 23:47:49
         compiled from ".\view\s1.html" */ ?>
<?php /*%%SmartyHeaderCode:35058dd28a5d02f62-53201377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c5edf13d6740f7bb349475bf40b9042166bec0' => 
    array (
      0 => '.\\view\\s1.html',
      1 => 1490888837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35058dd28a5d02f62-53201377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'age' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58dd28a5dc06a0_77813679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dd28a5dc06a0_77813679')) {function content_58dd28a5dc06a0_77813679($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>用户名：{$name}</div>
	<p>修改特殊符号后</p>
	<div>用户年龄：<?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</div>
</body>
</html><?php }} ?>
