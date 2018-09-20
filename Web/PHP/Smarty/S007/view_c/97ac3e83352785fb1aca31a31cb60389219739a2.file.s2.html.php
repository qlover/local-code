<?php /* Smarty version Smarty-3.1.16, created on 2017-03-31 19:48:42
         compiled from ".\view\s2.html" */ ?>
<?php /*%%SmartyHeaderCode:662558de402d9ec9d7-70288406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97ac3e83352785fb1aca31a31cb60389219739a2' => 
    array (
      0 => '.\\view\\s2.html',
      1 => 1490960867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '662558de402d9ec9d7-70288406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58de402dad8c80_93147187',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58de402dad8c80_93147187')) {function content_58de402dad8c80_93147187($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("style.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(((string)$_smarty_tpl->tpl_vars['colorStyle']->value), 'local'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<style>
		div{
			color:<?php echo $_smarty_tpl->getConfigVariable('CLR');?>
;
			width:<?php echo $_smarty_tpl->getConfigVariable('WD');?>
;
			height:<?php echo $_smarty_tpl->getConfigVariable('HG');?>
;
			background-color:<?php echo $_smarty_tpl->getConfigVariable('BG');?>
;
		}
	</style>

	<h2>配置文件中的使用</h2>
	
	<div>配置变量</div>

</body>
</html><?php }} ?>
