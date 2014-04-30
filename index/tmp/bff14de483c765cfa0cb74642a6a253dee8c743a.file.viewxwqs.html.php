<?php /* Smarty version Smarty-3.0.8, created on 2014-02-19 01:50:30
         compiled from "D:\phpStudy\WWW\xunji/index/tpl\index/viewxwqs.html" */ ?>
<?php /*%%SmartyHeaderCode:2724453039d667f99b9-80235429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bff14de483c765cfa0cb74642a6a253dee8c743a' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\xunji/index/tpl\\index/viewxwqs.html',
      1 => 1392745823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2724453039d667f99b9-80235429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->getVariable('name')->value;?>
 寻物启事详情 <?php echo $_smarty_tpl->getVariable('site_name')->value;?>
</title>
</head>
<body>
<?php if ($_smarty_tpl->getVariable('xwqsarr')->value!='0'){?>
	<?php  $_smarty_tpl->tpl_vars['xwqs'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('xwqsarr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['xwqs']->key => $_smarty_tpl->tpl_vars['xwqs']->value){
?>
		<?php echo $_smarty_tpl->tpl_vars['xwqs']->value['id'];?>
____
		<?php echo $_smarty_tpl->tpl_vars['xwqs']->value['name'];?>
____
		<?php echo $_smarty_tpl->tpl_vars['xwqs']->value['info'];?>
____
		<?php echo $_smarty_tpl->tpl_vars['xwqs']->value['find_time'];?>
____
		<?php echo $_smarty_tpl->tpl_vars['xwqs']->value['find_locale'];?>
____
		<?php echo $_smarty_tpl->tpl_vars['xwqs']->value['time'];?>
<br>
	<?php }} ?>
<?php }else{ ?>
	内容为空
<?php }?>
</body>
</html>