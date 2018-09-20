<?php /* Smarty version Smarty-3.1.16, created on 2017-03-31 21:07:36
         compiled from ".\view\s1.html" */ ?>
<?php /*%%SmartyHeaderCode:244458de51f9c5a486-31877978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c5edf13d6740f7bb349475bf40b9042166bec0' => 
    array (
      0 => '.\\view\\s1.html',
      1 => 1490965652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244458de51f9c5a486-31877978',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58de51f9e01b11_12352354',
  'variables' => 
  array (
    'lang' => 0,
    'sedlang' => 0,
    'city' => 0,
    'sedcity' => 0,
    'sedcitys' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58de51f9e01b11_12352354')) {function content_58de51f9e01b11_12352354($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkboxes')) include 'D:\\Web\\PHP\\Smarty\\libs\\plugins\\function.html_checkboxes.php';
if (!is_callable('smarty_function_html_options')) include 'D:\\Web\\PHP\\Smarty\\libs\\plugins\\function.html_options.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h2>复选框</h2>
	<p>
		语言：
		<?php echo smarty_function_html_checkboxes(array('name'=>'lang','options'=>$_smarty_tpl->tpl_vars['lang']->value,'selected'=>$_smarty_tpl->tpl_vars['sedlang']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>


	</p>
	


	<h2>下拉列表</h2>
	城市：
	<?php echo smarty_function_html_options(array('name'=>"city",'options'=>$_smarty_tpl->tpl_vars['city']->value,'selected'=>$_smarty_tpl->tpl_vars['sedcity']->value),$_smarty_tpl);?>


	<?php echo smarty_function_html_options(array('name'=>"city",'options'=>$_smarty_tpl->tpl_vars['city']->value,'selected'=>$_smarty_tpl->tpl_vars['sedcitys']->value,'multiple'=>"multiple"),$_smarty_tpl);?>

</body>
</html><?php }} ?>
