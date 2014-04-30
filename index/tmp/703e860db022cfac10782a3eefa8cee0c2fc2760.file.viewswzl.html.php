<?php /* Smarty version Smarty-3.0.8, created on 2014-02-19 01:23:19
         compiled from "D:\phpStudy\WWW\xunji/index/tpl\index/viewswzl.html" */ ?>
<?php /*%%SmartyHeaderCode:1741353039707836fd2-66385193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '703e860db022cfac10782a3eefa8cee0c2fc2760' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\xunji/index/tpl\\index/viewswzl.html',
      1 => 1392744195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1741353039707836fd2-66385193',
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
 失物招领详情 <?php echo $_smarty_tpl->getVariable('site_name')->value;?>
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
____
		<?php echo $_smarty_tpl->tpl_vars['swzl']->value['name'];?>
____
		<?php echo $_smarty_tpl->tpl_vars['swzl']->value['info'];?>
____
		<?php echo $_smarty_tpl->tpl_vars['swzl']->value['find_time'];?>
____
		<?php echo $_smarty_tpl->tpl_vars['swzl']->value['find_locale'];?>
____
		<?php echo $_smarty_tpl->tpl_vars['swzl']->value['time'];?>
<br>
	<?php }} ?>
<?php }else{ ?>
	内容为空
<?php }?>
</body>
</html>