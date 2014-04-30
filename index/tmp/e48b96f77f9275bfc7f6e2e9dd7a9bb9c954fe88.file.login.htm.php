<?php /* Smarty version Smarty-3.0.8, created on 2013-12-16 21:25:52
         compiled from "D:\phpStudy\WWW\xunwu/index/tpl\admin/login.htm" */ ?>
<?php /*%%SmartyHeaderCode:1333252aeff60a106e8-11919999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e48b96f77f9275bfc7f6e2e9dd7a9bb9c954fe88' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\xunwu/index/tpl\\admin/login.htm',
      1 => 1387199959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1333252aeff60a106e8-11919999',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
<head>
<meta chaset='utf-8'>
</head>
<body>
<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'loginaction'),$_smarty_tpl);?>
">
username:<input type="text"><br>
password:<input type="password"><br>
<input type="submit" value="login">
<input type="button" value="sign">
</form>
</body>
</html>