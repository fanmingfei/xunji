<?php /* Smarty version Smarty-3.0.8, created on 2014-02-19 01:41:59
         compiled from "D:\phpStudy\WWW\xunji/index/tpl\index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:3133353039b67cafd20-71272235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e0fb5a51c83d01bd032ed082a61faa34301a07b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\xunji/index/tpl\\index/index.html',
      1 => 1392745317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3133353039b67cafd20-71272235',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->getVariable('site_url')->value;?>
</title>
<meta http-equiv="keywords" content="<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
" >
<meta http-equiv="description" content="<?php echo $_smarty_tpl->getVariable('description')->value;?>
">
<link href="<?php echo $_smarty_tpl->getVariable('tmpurl')->value;?>
"/>
</head>
<style>
#banner img {width:300px;height:200px;float:left;}
</style>
<body>
<div id="banner">
<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('bannerarr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
?>
<img src="<?php echo $_smarty_tpl->getVariable('upurl')->value;?>
<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['title'];?>
">
<?php }} ?>
</div>
<div id="search">
<form name='search' method='get'>
<input type="hidden" name='c' value='main'>
<input type="hidden" name='a' value='s'>
<input type='text' value='' name='keyword'>
<select name='classid'>
	<option value='0'>所有分类</option>
<?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('classarr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['class']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value['name'];?>
</option>
<?php }} ?>
</select>
<input type='submit'>
</form>
</div>
<div id="swzl">
<p><b>失物招领</b></p>
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
====================================================<br>

</div>
<div id="xwqs">
<p><b>寻物启事</b></p>
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
</div>
<div id="tag">
	<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tagarr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
?>
		<?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
<br>
	<?php }} ?>
</div>
</body>
</html>