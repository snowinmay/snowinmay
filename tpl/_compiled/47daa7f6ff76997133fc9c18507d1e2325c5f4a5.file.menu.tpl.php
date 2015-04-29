<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:17:24
         compiled from "/var/www/html/snowinmay/tpl/admincp/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17150190553f5024a846e3-09836041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47daa7f6ff76997133fc9c18507d1e2325c5f4a5' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/admincp/menu.tpl',
      1 => 1396487916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17150190553f5024a846e3-09836041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'rootmenu' => 0,
    'volist' => 0,
    'urlpath' => 0,
    'childmenu' => 0,
    'val' => 0,
    'parentmenu' => 0,
    'rootid' => 0,
    'orders' => 0,
    'id' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f5024b800d5_88793543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f5024b800d5_88793543')) {function content_553f5024b800d5_88793543($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>前台导航</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>基础设置<span>&gt;&gt;</span>前台导航设置</p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=menu&a=add" class="btn-general"><span>添加导航</span></a>前台导航</h3>

	<form action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=menu" method="post" name="myform" id="myform" style="margin:0">
	<input type='hidden' name='a' id='a'>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
		<th width="8%"><div class="th-gap">ID</div></th>
		<th width="15%"><div class="th-gap">导航名称</div></th>
		<th width="28%"><div class="th-gap">URL</div></th>
		<th width="6%"><div class="th-gap">状态</div></th>
		<th width="6%"><div class="th-gap">排序</div></th>
		<th width="9%"><div class="th-gap">打开方式</div></th>
		<th width="10%"><div class="th-gap">当选标识</div></th>
		<th><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>

	  <?php $_smarty_tpl->tpl_vars['rootmenu'] = new Smarty_variable(vo_list("mod={menu} where={v.parentid='0'}"), null, 0);?>
	  <?php if (!empty($_smarty_tpl->tpl_vars['rootmenu']->value)){?>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rootmenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['volist']->value['name'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['flag']==0){?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" value="flagopen" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" value="flagclose" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
');" style="cursor:pointer;">	
		<?php }?>
        </td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['orders'];?>
</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['target']=='1'){?>
		新页面打开
		<?php }else{ ?>
		本页面打开
		<?php }?>
		</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['currentmark'];?>
</td>
		
		<td align="center">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=menu&a=add&rootid=<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" class="icon-add">添加子导航</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=menu&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" class="icon-edit">编辑</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=menu&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" onClick="{if(confirm('确定要删除吗？连子导航一起删除。')){return true;} return false;}" class="icon-del">删除</a>
		</td>
	  </tr>

	    <?php $_smarty_tpl->tpl_vars['childmenu'] = new Smarty_variable(vo_list("mod={menu} where={v.parentid='".((string)$_smarty_tpl->tpl_vars['volist']->value['id'])."'}"), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['childmenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
		<td align="left"><font color="blue">&nbsp;&nbsp;&nbsp;├<?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</font></td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['val']->value['flag']==0){?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" value="flagopen" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" value="flagclose" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
');" style="cursor:pointer;">	
		<?php }?>
        </td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['orders'];?>
</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['val']->value['target']=='1'){?>
		新页面打开
		<?php }else{ ?>
		本页面打开
		<?php }?>
		</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['currentmark'];?>
</td>
		
		<td align="center">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=menu&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="icon-edit">编辑</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=menu&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="icon-del">删除</a>
		</td>
	  </tr>
		<?php } ?>
	  <?php } ?>
	  <?php }else{ ?>
	  <tr>
	    <td colspan="8" align="center">暂无信息</td>
	  </tr>
	  <?php }?>
	</table>
	</form>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="add"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>基础设置<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=menu&a=add">添加前台导航</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=menu" class="btn-general"><span>返回列表</span></a>添加前台导航</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=menu" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveadd" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>所属导航 <span class="f_red"></span> </td>
		<td class='hback' width='85%'>
		<select name="parentid" id="parentid">
		<option value="">一级导航</option>
		<?php $_smarty_tpl->tpl_vars['parentmenu'] = new Smarty_variable(vo_list("mod={menu} where={v.parentid='0'}"), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parentmenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['rootid']->value==$_smarty_tpl->tpl_vars['volist']->value['id']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['volist']->value['name'];?>
</option>
		<?php } ?>
		</select>
		<span id='dparentid' class='f_red'></span> 
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>导航名称 <span class="f_red">*</span> </td>
		<td class='hback'><input type="text" name="name" id="name" class="input-150" /> <span id='dname' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>链接地址 <span class="f_red">*</span> </td>
		<td class='hback'>
		<input type="text" name="url" id="url" class="input-txt" /> （可用{urlpath}网站安装路径标签） <span id='durl' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>排 序 </td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['orders']->value;?>
" /> <span id='dorders' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>打开方式 </td>
		<td class='hback'>
		 <input type="radio" name="target" id="target" value="1" />新页面打开，<input type="radio" name="target" id="target" value="0" checked />本页面打开
		 <span id='dtarget' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>当选标识 </td>
		<td class='hback'>
		 <input type="text" name="currentmark" id="currentmark" class="input-s" /> （导航当前选中标识，该标识与模板文件设置的一致）
		 <span id='dcurrentmark' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>状 态 </td>
		<td class='hback'>
		<input type="radio" name="flag" id="flag" value="1" checked />开启，<input type="radio" name="flag" id="flag" value="0" />关闭
		<span id='dflag' class='f_red'></span>
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
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>基础设置<span>&gt;&gt;</span>编辑导航</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=menu" class="btn-general"><span>返回列表</span></a>编辑导航</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=menu" />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>所属导航 <span class="f_red"></span> </td>
		<td class='hback' width='85%'>
		<select name="parentid" id="parentid">
		<option value="">一级导航</option>
		<?php $_smarty_tpl->tpl_vars['parentmenu'] = new Smarty_variable(vo_list("mod={menu} where={v.parentid='0'}"), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parentmenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['menu']->value['parentid']==$_smarty_tpl->tpl_vars['volist']->value['id']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['volist']->value['name'];?>
</option>
		<?php } ?>
		</select>
		<span id='dparentid' class='f_red'></span> 
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>导航名称 <span class="f_red">*</span> </td>
		<td class='hback'><input type="text" name="name" id="name" class="input-150" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
" /> <span id='dname' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>链接地址 <span class="f_red">*</span> </td>
		<td class='hback'>
		<input type="text" name="url" id="url" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['url'];?>
" /> （可用{urlpath}网站安装路径标签） <span id='durl' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>排 序 </td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['orders'];?>
" /> <span id='dorders' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>打开方式 </td>
		<td class='hback'>
		 <input type="radio" name="target" id="target" value="1"<?php if ($_smarty_tpl->tpl_vars['menu']->value['target']=='1'){?> checked<?php }?> />新页面打开，
		 <input type="radio" name="target" id="target" value="0"<?php if ($_smarty_tpl->tpl_vars['menu']->value['target']=='0'){?> checked<?php }?> />本页面打开
		 <span id='dtarget' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>当选标识 </td>
		<td class='hback'>
		 <input type="text" name="currentmark" id="currentmark" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['currentmark'];?>
" /> （导航当前选中标识，该标识与模板文件设置的一致）
		 <span id='dcurrentmark' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>状 态 </td>
		<td class='hback'>
		<input type="radio" name="flag" id="flag" value="1"<?php if ($_smarty_tpl->tpl_vars['menu']->value['flag']=='1'){?> checked<?php }?> />开启，<input type="radio" name="flag" id="flag" value="0"<?php if ($_smarty_tpl->tpl_vars['menu']->value['flag']=='0'){?> checked<?php }?> />关闭
		<span id='dflag' class='f_red'></span>
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