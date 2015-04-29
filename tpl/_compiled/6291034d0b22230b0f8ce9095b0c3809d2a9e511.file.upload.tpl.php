<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:17:58
         compiled from "/var/www/html/snowinmay/tpl/admincp/upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:380398923553f5046e03437-73316490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6291034d0b22230b0f8ce9095b0c3809d2a9e511' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/admincp/upload.tpl',
      1 => 1396230332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '380398923553f5046e03437-73316490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'urlpath' => 0,
    'cpfile' => 0,
    'multipart' => 0,
    'module' => 0,
    'formname' => 0,
    'uploadinput' => 0,
    'thumbinput' => 0,
    'previewid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f5046e228d9_45086641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f5046e228d9_45086641')) {function content_553f5046e228d9_45086641($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>上传图片/附件</title>
<script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/js/jquery.min.js'></script>
<style type="text/css">
body {font-size: 9pt;margin: 0px;padding: 0px;background-color:#fff;}
.bj {padding-top: 3px;padding-bottom: 3px;}
form {margin: 0px;padding: 0px;}
.file {border:1px solid #e0e0e0;font-size:9pt;width:200px;position:relative;}
.button{background:none repeat scroll 0 0 #4e6a81;
border-color:#dddddd #000000 #000000 #dddddd;
border-style:solid;
border-width:2px;
color:#FFFFFF;cursor:pointer;letter-spacing:0.1em;overflow:visible;padding:3px 15px;width:auto;cursor:pointer;text-decoration:none;}
</style>
</head>
<body>
<div id="upload_box" style="display:block">
<form action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=upload&a=saveupload&multipart=<?php echo $_smarty_tpl->tpl_vars['multipart']->value;?>
" method="post" enctype="multipart/form-data" name="up_form" id="up_form" onSubmit="return checkupload();">
<input type="hidden" name="module" id="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" />
<input type="hidden" name="formname" id="formname" value="<?php echo $_smarty_tpl->tpl_vars['formname']->value;?>
" />
<input type="hidden" name="uploadinput" id="uploadinput" value="<?php echo $_smarty_tpl->tpl_vars['uploadinput']->value;?>
" />
<input type="hidden" name="thumbinput" id="thumbinput" value="<?php echo $_smarty_tpl->tpl_vars['thumbinput']->value;?>
" />
<input type="hidden" name="previewid" id="previewid" value="<?php echo $_smarty_tpl->tpl_vars['previewid']->value;?>
" />
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td><input name="<?php echo $_smarty_tpl->tpl_vars['multipart']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['multipart']->value;?>
" type="file" class="file" /></td>
    <td>&nbsp;<input type="submit" name="btn_upload" id="btn_upload" value="上传"  /></td>
  </tr>
</table>
</form>
</div>
<div id="upload_loading" style="display:none" class="bj"><img src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/uploading.gif" alt="文件上传中，请稍后..." width="220" height="19" border="0" /></div>
</body>
</html>
<script type="text/javascript">
function checkupload() {
	var t = "";
	var v = "";

	t = "<?php echo $_smarty_tpl->tpl_vars['multipart']->value;?>
";
	v = $("#"+t).val();
	if(v=="") {
		alert("请选择要上传的图片/附件");
		return false;
	}
    
	$('#upload_box').hide();
	$('#upload_loading').show();

	return true;
}
</script>
<?php }} ?>