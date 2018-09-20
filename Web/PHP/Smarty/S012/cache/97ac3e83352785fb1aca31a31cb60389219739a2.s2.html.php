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
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58dfcc8d4cc9e4_81727552',
  'variables' => 
  array (
    'mytime' => 1,
  ),
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dfcc8d4cc9e4_81727552')) {function content_58dfcc8d4cc9e4_81727552($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>局部不缓存</h2>
	
	<div>1491061901</div>
	
	<div><?php echo time();?>
</div>
	
	<div><?php echo $_smarty_tpl->tpl_vars['mytime']->value;?>
</div>

</body>
</html><?php }} ?>
