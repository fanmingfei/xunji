<?php /* Smarty version Smarty-3.0.8, created on 2014-02-28 22:44:17
         compiled from "D:\phpStudy\WWW\xunji/index/tpl\index/addswzl.html" */ ?>
<?php /*%%SmartyHeaderCode:182765310a0c11a8fd5-77414895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deba16cd35e92e0bffa55587d1b1ad09ac17cb53' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\xunji/index/tpl\\index/addswzl.html',
      1 => 1392740627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182765310a0c11a8fd5-77414895',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>添加失物招领 <?php echo $_smarty_tpl->getVariable('site_name')->value;?>
</title>
<script src='<?php echo $_smarty_tpl->getVariable('tmpurl')->value;?>
/js/jquery.js'  type="text/javascript"></script>
<script src='<?php echo $_smarty_tpl->getVariable('tmpurl')->value;?>
/js/ajaxfileupload.js'  type="text/javascript"></script>
</head>
<body>
<form action='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'addswzlaction'),$_smarty_tpl);?>
' method='post'>
<p>分类</p>
<select name='cid'>
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
物品名称<input value='' name='name' type='text'>
捡到时间<input name='find_time' type='text'>
捡到地点<input name='find_locale' type='text'>
物品详情<textarea name='info'></textarea>
<input name='pic' type='hidden'><br>
<img src='http://gist.ldustu.com/uc_server/avatar.php?uid=4&amp;size=middle' width=300 height=400 id='pic'>
<input type='submit' value='ok'>
</form>
<input type="file" name="file" id="uppic" style="display:none;">
		
		
<script type="text/javascript">
$(document).ready(function(){
	$(document).on('click','#pic',function(){
		$('#uppic').click();
	});
	$(document).on('change','[name="file"]',function(){	
		$.ajaxFileUpload({
		url:'<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'uploadswzlpic'),$_smarty_tpl);?>
', 
		secureuri:false,
        fileElementId:'uppic',
        dataType: 'text',
        
        success: function (data)
        {
          if(data=='-1'){
        	  alert('请检查图片的格式、大小。');
        	  return;
          }else if(data=='-2'){
        	  alert('内部错误，请联系网站管理员！');
        	  return;
          }else{
        	$('#pic').replaceWith("<img src='<?php echo $_smarty_tpl->getVariable('upurl')->value;?>
"+data+"' width=400 height=300' id='pic'>");
        	$("[name='pic']").val(data);
          }
        }
	})
	})
  });
</script>
</body>
</html>