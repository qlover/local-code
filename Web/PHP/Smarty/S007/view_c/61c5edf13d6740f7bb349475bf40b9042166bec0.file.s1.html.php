<?php /* Smarty version Smarty-3.1.16, created on 2017-03-31 20:27:09
         compiled from ".\view\s1.html" */ ?>
<?php /*%%SmartyHeaderCode:2694358dd2b715ccd07-19119197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c5edf13d6740f7bb349475bf40b9042166bec0' => 
    array (
      0 => '.\\view\\s1.html',
      1 => 1490963228,
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
    'fruit' => 0,
    'key' => 0,
    'val' => 0,
    'items' => 0,
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
	<h2>数组</h2>
	<p>苹果：<?php echo $_smarty_tpl->tpl_vars['fruit']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['fruit']->value[0];?>
</p>
	<p>梨：<?php echo $_smarty_tpl->tpl_vars['fruit']->value[1];?>
</p>
	<p>香蕉：<?php echo $_smarty_tpl->tpl_vars['fruit']->value[2];?>
</p>
	<p>西瓜：<?php echo $_smarty_tpl->tpl_vars['fruit']->value['wm'];?>
</p>
	


	<h2>使用 foreach</h2>
	
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fruit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['val']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['val']->iteration=0;
 $_smarty_tpl->tpl_vars['val']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
 $_smarty_tpl->tpl_vars['val']->iteration++;
 $_smarty_tpl->tpl_vars['val']->index++;
 $_smarty_tpl->tpl_vars['val']->first = $_smarty_tpl->tpl_vars['val']->index === 0;
?>
		<P><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
=><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</P>
	<?php }
if (!$_smarty_tpl->tpl_vars['val']->_loop) {
?>
		<p>数组没有任何元素！</p>
	<?php } ?>
	<h4>foreach 遍历内部的关键字</h4>
	
	<p>数组元素总个：<?php echo $_smarty_tpl->tpl_vars['val']->total;?>
</p>


	<style>
		.col1 {
			background: #e00;
		}
		.col2 {
			background: #ccc;
		}
	</style>

	<h2>条件判断</h2>
	<ul>
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['val']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['val']->iteration=0;
 $_smarty_tpl->tpl_vars['val']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['val']->iteration++;
 $_smarty_tpl->tpl_vars['val']->index++;
 $_smarty_tpl->tpl_vars['val']->first = $_smarty_tpl->tpl_vars['val']->index === 0;
?>
		<?php if ($_smarty_tpl->tpl_vars['val']->first) {?>
			<li class="col1">
		<?php } elseif ($_smarty_tpl->tpl_vars['val']->iteration%2==1) {?>
			<li class="col2">
		<?php } else { ?>
			<li>
		<?php }?>

		<?php echo $_smarty_tpl->tpl_vars['val']->value;?>

		</li>
	<?php } ?>
	</ul>

</body>
</html><?php }} ?>
