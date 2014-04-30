<?php /* Smarty version Smarty-3.0.8, created on 2014-02-17 20:19:15
         compiled from "D:\phpStudy\WWW\xunji/index/tpl\index/search.html" */ ?>
<?php /*%%SmartyHeaderCode:90995301fe43294f89-90744734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '005f97f9ddd0619387ec4da8ff05760145ce0842' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\xunji/index/tpl\\index/search.html',
      1 => 1392639553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90995301fe43294f89-90744734',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->getVariable('keyword')->value;?>
-搜索结果</title>
</head>
<body>
<p><span style="color:red;"><b><?php echo $_smarty_tpl->getVariable('keyword')->value;?>
</b></span>在<span style='color:blue;'><b><?php echo $_smarty_tpl->getVariable('classname')->value;?>
</b></span>分类下的搜索结果</p>
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
====================================================<br>
<?php if ($_smarty_tpl->getVariable('xwqsarr')->value!='0'){?>
	<?php  $_smarty_tpl->tpl_vars['xwqs'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('xwqsarr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['xwqs']->key => $_smarty_tpl->tpl_vars['xwqs']->value){
?>
		<?php echo $_smarty_tpl->tpl_vars['xwqs']->value['id'];?>
___
		<?php echo $_smarty_tpl->tpl_vars['xwqs']->value['name'];?>
<br>
		<?php echo $_smarty_tpl->tpl_vars['xwqs']->value['info'];?>
<br><br>
	<?php }} ?>
<?php }else{ ?>
	内容为空
<?php }?>
</body>
</html>