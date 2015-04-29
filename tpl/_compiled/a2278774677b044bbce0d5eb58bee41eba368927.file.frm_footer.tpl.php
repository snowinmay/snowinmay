<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:15:48
         compiled from "/var/www/html/snowinmay/tpl/admincp/frm_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1898680837553f4fc4696be9-45241642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2278774677b044bbce0d5eb58bee41eba368927' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/admincp/frm_footer.tpl',
      1 => 1396230331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1898680837553f4fc4696be9-45241642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cppath' => 0,
    'cptplpath' => 0,
    'copyright_poweredby' => 0,
    'copyright_version' => 0,
    'copyright_release' => 0,
    'cpfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f4fc46bd301_73833207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f4fc46bd301_73833207')) {function content_553f4fc46bd301_73833207($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>footer</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cppath']->value;?>
css/footer.css" />
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>
<div class="footer">
<table width="98%" border="0" cellpadding="0" cellspacing="0" align="left">
  <tr>
    <td align="left" style="padding-left:10px;width:260px;"><?php echo $_smarty_tpl->tpl_vars['copyright_poweredby']->value;?>
 Version <?php echo $_smarty_tpl->tpl_vars['copyright_version']->value;?>
<?php echo $_smarty_tpl->tpl_vars['copyright_release']->value;?>
</td>
	<td align="left">快捷操作：
	<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=category" target="main">栏目设置</a>&nbsp;|&nbsp;
	<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=module" target="main">模型设置</a>&nbsp;|&nbsp;
	<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=admin&a=editpassword" target="main">修改密码</a>&nbsp;|&nbsp;
	<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting&a=clearcache" target='main'>清除页面缓存</a>&nbsp;|&nbsp;
	<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting&a=updatecache" target='main'>更新数据缓存</a>
	</td>
    <td style="text-align:right;padding-right:10px;" id="serial_tips"><a href="###" onclick="getSerial('serial_tips');">点击查询授权</a></td>
  </tr>
</table>
</div>	
</body>
</html><?php }} ?>