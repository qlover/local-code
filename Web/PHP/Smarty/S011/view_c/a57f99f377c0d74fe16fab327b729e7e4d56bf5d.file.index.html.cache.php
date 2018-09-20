<?php /* Smarty version Smarty-3.1.16, created on 2017-04-01 22:36:08
         compiled from ".\view\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1805858dfbad89aeb28-18048799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a57f99f377c0d74fe16fab327b729e7e4d56bf5d' => 
    array (
      0 => '.\\view\\index.html',
      1 => 1491056731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1805858dfbad89aeb28-18048799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fruit' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58dfbad8aecc05_36061643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dfbad8aecc05_36061643')) {function content_58dfbad8aecc05_36061643($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Smarty 缓存制作</h2>
	<ul>
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fruit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</li>
	<?php } ?>		
	</ul>

</body>
</html>

<?php }} ?>
