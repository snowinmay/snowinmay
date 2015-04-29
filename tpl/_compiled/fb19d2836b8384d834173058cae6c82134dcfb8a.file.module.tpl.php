<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:28:50
         compiled from "/var/www/html/snowinmay/tpl/admincp/module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:887190219553f52d272c5d7-43901407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb19d2836b8384d834173058cae6c82134dcfb8a' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/admincp/module.tpl',
      1 => 1396230332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '887190219553f52d272c5d7-43901407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'module' => 0,
    'volist' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f52d2793842_38725210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f52d2793842_38725210')) {function content_553f52d2793842_38725210($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>模块类型</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：模块管理<span>&gt;&gt;</span>栏目管理<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=module">模块类型</a></p></div>
  <div class="main-cont">
    <h3 class="title">模块类型</h3>
	<form action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=module&a=saveupdate" method="post" name="myform" id="myform" style="margin:0">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="8%"><div class="th-gap">ID</div></th>
		<th width="12%"><div class="th-gap">别名</div></th>
		<th width="15%"><div class="th-gap">名称</div></th>
		<th width="10%"><div class="th-gap">颜色</div></th>
		<th width="15%"><div class="th-gap">默认首页模板</div></th>
		<th width="15%"><div class="th-gap">默认列表模板</div></th>
		<th width="15%"><div class="th-gap">默认内容模板</div></th>
		<th><div class="th-gap">状态</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><input type="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['modid'];?>
" /><?php echo $_smarty_tpl->tpl_vars['volist']->value['modid'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['volist']->value['alias'];?>
</td>
		<td align="left"><input type="text" name="modname_<?php echo $_smarty_tpl->tpl_vars['volist']->value['modid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['modname'];?>
" class="input-100" /></td>
		<td align="left"><input type="text" name="color_<?php echo $_smarty_tpl->tpl_vars['volist']->value['modid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['color'];?>
" class="input-s" /></td>
		<td align="left"><input type="text" name="tplindex_<?php echo $_smarty_tpl->tpl_vars['volist']->value['modid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['tplindex'];?>
" class="input-100" /></td>
		<td align="left"><input type="text" name="tpllist_<?php echo $_smarty_tpl->tpl_vars['volist']->value['modid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['tpllist'];?>
" class="input-100" /></td>
		<td align="left"><input type="text" name="tpldetail_<?php echo $_smarty_tpl->tpl_vars['volist']->value['modid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['tpldetail'];?>
" class="input-100" /></td>
		<td align="center">
		<select name="enabled_<?php echo $_smarty_tpl->tpl_vars['volist']->value['modid'];?>
">
		<option value="1"<?php if ($_smarty_tpl->tpl_vars['volist']->value['enabled']=='1'){?> selected<?php }?>>开启</option>
		<option value="0"<?php if ($_smarty_tpl->tpl_vars['volist']->value['enabled']=='0'){?> selected<?php }?>>关闭</option>
		</select>
		</td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="8" align="center">暂无信息</td>
	  </tr>
	  <?php } ?>
	  <tr>
		<td class="hback" colspan="8" align="right">默认模板，不需要填写当前风格路径；&nbsp;&nbsp;<input class="button" name="btn_update" type="submit" value="保存更新" class="button">&nbsp;&nbsp;共[ <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> ]个模块类型&nbsp;&nbsp;&nbsp;&nbsp;</td>
	  </tr>
	</table>
	</form>
  </div>
</div>
<?php }?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_footer'), null, 0);?>
</body>
</html>
<?php }} ?>