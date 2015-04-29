<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:28:01
         compiled from "/var/www/html/snowinmay/tpl/admincp/mynav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1440983971553f52a16f5880-89124994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '782829e8fea0b97ebc74324863a6e8b6a469a170' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/admincp/mynav.tpl',
      1 => 1396334392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1440983971553f52a16f5880-89124994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'mynav' => 0,
    'volist' => 0,
    'page' => 0,
    'total' => 0,
    'orders' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f52a177fb71_22277617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f52a177fb71_22277617')) {function content_553f52a177fb71_22277617($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/snowinmay/source/core/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>我的导航</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：我的导航<span></p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=mynav&a=add" class="btn-general"><span>添加我的导航</span></a>我的导航</h3>

	<form action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=mynav" method="post" name="myform" id="myform" style="margin:0">
	<input type='hidden' name='a' id='a'>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="8%"><div class="th-gap">选择</div></th>
		<th width="12%"><div class="th-gap">ID</div></th>
		<th width="15%"><div class="th-gap">导航名称</div></th>
		<th width="30%"><div class="th-gap">URL</div></th>
		<th width="8%"><div class="th-gap">排序</div></th>
		<th width="15%"><div class="th-gap">添加时间</div></th>
		<th><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mynav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center">
		<input name="id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" onClick="checkItem(this, 'chkAll')">
		</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['volist']->value['name'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['orders'];?>
</td>
		<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],"%Y-%m-%d %H:%M");?>
</td>
		<td align="center">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=mynav&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="icon-edit">编辑</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=mynav&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="icon-del">删除</a>
		</td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="7" align="center">暂无信息</td>
	  </tr>
	  <?php } ?>
	  <?php if ($_smarty_tpl->tpl_vars['total']->value>0){?>
	  <tr>
		<td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox"></td>
		<td class="hback" colspan="6">
		<input class="button" name="btn_del" type="button" value="删 除" onClick="{if(confirm('确定要删除吗？')){$('#a').val('del');$('#myform').submit();return true;}return false;}" class="button" />
		&nbsp;&nbsp;共[ <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> ]条记录
		</td>
	  </tr>
	  <?php }?>
	</table>
	</form>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="add"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：我的导航<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=mynav&a=add">添加我的导航</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=mynav" class="btn-general"><span>返回列表</span></a>添加我的导航</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=mynav" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveadd" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>导航名称 <span class="f_red">*</span> </td>
		<td class='hback' width='85%'><input type="text" name="name" id="name" class="input-150" /> <span id='dname' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>链接地址 <span class="f_red">*</span> </td>
		<td class='hback'><input type="text" name="url" id="url" class="input-txt" /> （可用{urlpath}网站安装路径标签） <span id='durl' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>排 序 </td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['orders']->value;?>
" /> <span id='dorders' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>图 标 </td>
		<td class='hback'>
		<select name="icon" id="icon">
		<option value="0">无图标</option>
		<option value="1">图标1</option>
		<option value="2">图标2</option>
		<option value="3">图标3</option>
		<option value="4">图标4</option>
		<option value="5">图标5</option>
		<option value="6">图标6</option>
		<option value="7">图标7</option>
		</select>
		 <span id='dicon' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_none'></td>
		<td class='hback_none'><input type="submit" name="btn_save" class="button" value="添加保存" /></td>
	  </tr>
	</table>
	</form>
  </div>
  <div style="clear:both;"></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="edit"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：我的导航<span>&gt;&gt;</span>编辑我的导航</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=mynav" class="btn-general"><span>返回列表</span></a>编辑我的导航</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=mynav" />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>导航名称 <span class="f_red">*</span> </td>
		<td class='hback' width='85%'><input type="text" name="name" id="name" class="input-150" value="<?php echo $_smarty_tpl->tpl_vars['mynav']->value['name'];?>
" /> <span id='dname' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>链接地址 <span class="f_red">*</span> </td>
		<td class='hback'><input type="text" name="url" id="url" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['mynav']->value['url'];?>
" /> （可用{urlpath}网站安装路径标签） <span id='durl' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>排 序 </td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['mynav']->value['orders'];?>
" /> <span id='dorders' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>图 标 </td>
		<td class='hback'>
		<select name="icon" id="icon">
		<option value="0"<?php if ($_smarty_tpl->tpl_vars['mynav']->value['icon']=='0'){?> selected<?php }?>>无图标</option>
		<option value="1"<?php if ($_smarty_tpl->tpl_vars['mynav']->value['icon']=='1'){?> selected<?php }?>>图标1</option>
		<option value="2"<?php if ($_smarty_tpl->tpl_vars['mynav']->value['icon']=='2'){?> selected<?php }?>>图标2</option>
		<option value="3"<?php if ($_smarty_tpl->tpl_vars['mynav']->value['icon']=='3'){?> selected<?php }?>>图标3</option>
		<option value="4"<?php if ($_smarty_tpl->tpl_vars['mynav']->value['icon']=='4'){?> selected<?php }?>>图标4</option>
		<option value="5"<?php if ($_smarty_tpl->tpl_vars['mynav']->value['icon']=='5'){?> selected<?php }?>>图标5</option>
		<option value="6"<?php if ($_smarty_tpl->tpl_vars['mynav']->value['icon']=='6'){?> selected<?php }?>>图标6</option>
		<option value="7"<?php if ($_smarty_tpl->tpl_vars['mynav']->value['icon']=='7'){?> selected<?php }?>>图标7</option>
		</select>
		<span id='dicon' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_none'></td>
		<td class='hback_none'><input type="submit" name="btn_save" class="button" value="更新保存" /></td>
	  </tr>
	</table>
	</form>
  </div>
  <div style="clear:both;"></div>
</div>
<?php }?>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_footer'), null, 0);?>
</body>
</html>
<script type="text/javascript">
function checkform() {
	var t = "";
	var v = "";

	t = "name";
	v = $("#"+t).val();
	if (v=="") {
		dmsg("导航名称不能为空", t);
		return false;
	}

	t = "url";
	v = $("#"+t).val();
	if (v=="") {
		dmsg("链接地址不能为空", t);
		return false;
	}
	return true;
}
</script>
<?php }} ?>