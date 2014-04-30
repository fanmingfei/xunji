<?php /* Smarty version Smarty-3.0.8, created on 2014-02-17 23:05:42
         compiled from "D:\phpStudy\WWW\xunji/index/tpl\index/swzl.html" */ ?>
<?php /*%%SmartyHeaderCode:175735302254656c729-73043248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '865c8f3b6045455c2162bf91d7aa22862db69132' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\xunji/index/tpl\\index/swzl.html',
      1 => 1392649383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175735302254656c729-73043248',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>最新失物招领 <?php echo $_smarty_tpl->getVariable('site_name')->value;?>
</title>
</head>
<body>
<?php if ($_smarty_tpl->getVariable('swzlarr')->value!='0'){?>
	<?php  $_smarty_tpl->tpl_vars['swzl'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('swzlarr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['swzl']->key => $_smarty_tpl->tpl_vars['swzl']->value){
?>
		<?php echo $_smarty_tpl->tpl_vars['swzl']->value['id'];?>
___
		<?php echo $_smarty_tpl->tpl_vars['swzl']->value['name'];?>
<br>
		<?php echo $_smarty_tpl->tpl_vars['swzl']->value['info'];?>
<br><br>
	<?php }} ?>
<?php }else{ ?>
	内容为空
<?php }?>
</body>
</html>