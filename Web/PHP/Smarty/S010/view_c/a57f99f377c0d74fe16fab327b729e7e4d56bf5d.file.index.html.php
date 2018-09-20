<?php /* Smarty version Smarty-3.1.16, created on 2017-04-01 16:56:29
         compiled from ".\view\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1442058df67d55b1245-42967500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a57f99f377c0d74fe16fab327b729e7e4d56bf5d' => 
    array (
      0 => '.\\view\\index.html',
      1 => 1491036987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1442058df67d55b1245-42967500',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58df67d56e54f6_34866566',
  'variables' => 
  array (
    'addr' => 0,
    'baidu' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df67d56e54f6_34866566')) {function content_58df67d56e54f6_34866566($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Web\\PHP\\Smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'D:\\Web\\PHP\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Smarty 变量调剂器</h2>

	<div><?php echo time();?>
</div>
	<div><?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
</div>
	<div><?php echo (($tmp = @$_smarty_tpl->tpl_vars['addr']->value)===null||$tmp==='' ? 'sucuan' : $tmp);?>
</div>
	<div><?php echo $_smarty_tpl->tpl_vars['baidu']->value;?>
</div>
	<div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['baidu']->value, ENT_QUOTES, 'UTF-8', true);?>
</div> 
	<div><?php echo preg_replace('!^!m',str_repeat('hello',4),$_smarty_tpl->tpl_vars['baidu']->value);?>
</div> 

	<div><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['content']->value,11,'---');?>
</div>
	<div><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['content']->value,11,'...',true,true);?>
</div> 
	<div><?php echo mb_strtoupper(smarty_modifier_truncate($_smarty_tpl->tpl_vars['content']->value,11,'...',true,true), 'UTF-8');?>
</div>


</body>
</html>

<?php }} ?>
