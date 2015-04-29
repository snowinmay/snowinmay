<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 18:29:53
         compiled from "/var/www/html/snowinmay/tpl/admincp/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:309192256553f6121ec43f6-02563895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ce247d5ca52bd3a0b874b754159d856bac6a4ef' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/admincp/admin.tpl',
      1 => 1396230331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309192256553f6121ec43f6-02563895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'admin' => 0,
    'volist' => 0,
    'urlpath' => 0,
    'page' => 0,
    'total' => 0,
    'pagecount' => 0,
    'showpage' => 0,
    'comeurl' => 0,
    'id' => 0,
    'uc_adminname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f6122032082_91049985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f6122032082_91049985')) {function content_553f6122032082_91049985($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/snowinmay/source/core/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>管理员</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>管理员设置<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=admin">帐号列表</a></p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=admin&a=add" class="btn-general"><span>添加帐号</span></a>帐号列表</h3>
	<form action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=admin" method="post" name="myform" id="myform" style="margin:0">
	<input type="hidden" name="a" id="a" value="del" />
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="8%"><div class="th-gap">选择</div></th>
		<th width="10%"><div class="th-gap">帐号</div></th>
		<th width="15%"><div class="th-gap">类型</div></th>
		<th width="10%"><div class="th-gap">状态</div></th>
		<th width="18%"><div class="th-gap">登录时间</div></th>
		<th width="15%"><div class="th-gap">登录IP</div></th>
		<th width="10%"><div class="th-gap">登录次数</div></th>
		<th><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><input name="id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['adminid'];?>
" onClick="checkItem(this, 'chkAll')"></td>
		<td><?php echo $_smarty_tpl->tpl_vars['volist']->value['adminname'];?>
</td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['volist']->value['super']==1){?><font color="green">系统管理员</font><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['volist']->value['groupid']==0){?><font color="#999999">~~</font><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['volist']->value['groupname'];?>
<?php }?><?php }?></td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['flag']==0){?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['adminid'];?>
" value="flagopen" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['adminid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['adminid'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['adminid'];?>
" value="flagclose" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['adminid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['adminid'];?>
');" style="cursor:pointer;">	
		<?php }?>
		</td>
		<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['logintimeline'],"%Y/%m/%d %H:%M:%S");?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['volist']->value['loginip'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['logintimes'];?>
</td>
		<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=admin&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['adminid'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="icon-edit">编辑</a>&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=admin&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['adminid'];?>
" onClick="{if(confirm('确定要删除吗?')){return true;} return false;}" class="icon-del">删除</a></td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="8" align="center">暂无信息</td>
	  </tr>
	  <?php } ?>
	  <?php if ($_smarty_tpl->tpl_vars['total']->value>0){?>
	  <tr>
		<td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox"></td>
		<td class="hback" colspan="7"><input class="button" name="btn_del" type="button" value="删 除" onClick="{if(confirm('确定删除选定吗!?')){$('#action').val('del');$('#myform').submit();return true;}return false;}" class="button">&nbsp;&nbsp;共[ <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> ]条记录</td>
	  </tr>
	  <?php }?>
	</table>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['pagecount']->value>1){?>
	<table width='95%' border='0' cellspacing='0' cellpadding='0' align='center' style="margin-top:10px;">
	  <tr>
		<td align='center'><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</td>
	  </tr>
	</table>
	<?php }?>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="add"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>管理员帐号<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=admin&a=add">添加管理员</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=admin" class="btn-general"><span>返回列表</span></a>添加管理员</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=admin" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveadd" />
	<table cellpadding='3' cellspacing='3' class='tab'>
	  <tr>
		<td class='hback_1' width="15%">登录帐号：<span class='f_red'>*</span></td>
		<td class='hback' width="85%"><input type="text" name="adminname" id="adminname" class="input-150" /> <span class='f_red' id="dadminname"></span> <font color="#999999">4-16个字符，只能由中文、字母、数字和下横线组成</font></td>
	  </tr>
	  <tr>
		<td class='hback_1'>登录密码：<span class='f_red'>*</span></td>
		<td class='hback'><input type="password" name="password" id="password" class="input-100" /> <span class='f_red' id="dpassword"></span> <font color="#999999">4-16个字符</font></td>
	  </tr>
 	  <tr>
		<td class='hback_1'>确认密码：<span class='f_red'>*</span></td>
		<td class='hback'><input type="password" name="confirmpassword" id="confirmpassword" class="input-100" /> <span class='f_red' id="dconfirmpassword"></span> <font color="#999999">4-16个字符</font></td>
	  </tr>
	  <tr>
		<td class='hback_1'>帐号设置：<span class='f_red'></span></td>
		<td class='hback'><input type="radio" name="flag" value="1" checked />正常，<input type="radio" name="flag" value="0" />锁定，<input type="checkbox" name="super" value="1" checked />系统管理员</td>
	  </tr>
	  <tr>
		<td class='hback_1'>备注说明： </td>
		<td class='hback'><textarea name='memo' id='memo' style='width:50%;height:85px;overflow:auto;color:#444444;'></textarea></td>
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
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>管理员帐号<span>&gt;&gt;</span>编辑帐号</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=admin&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" class="btn-general"><span>返回列表</span></a>编辑帐号</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=admin" />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<table cellpadding='3' cellspacing='3' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>登录帐号 </td>
		<td class='hback' width='85%'><?php echo $_smarty_tpl->tpl_vars['admin']->value['adminname'];?>
</td>
	  </tr>
	  <tr>
		<td class='hback_1'>登录密码 </td>
		<td class='hback'><input type="password" name="password" id="password" class="input-100" /> <span id="dpassword" class="f_red"></span> (不修改请留空)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>确认密码 </td>
		<td class='hback'><input type="password" name="confirmpassword" id="confirmpassword" class="input-100" /> <span id="dconfirmpassword" class="f_red"></span> (不修改请留空)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>帐号设置 <span class='f_red'></span></td>
		<td class='hback'><input type="radio" name="flag" value="1"<?php if ($_smarty_tpl->tpl_vars['admin']->value['flag']==1){?> checked<?php }?> />正常，<input type="radio" name="flag" value="0"<?php if ($_smarty_tpl->tpl_vars['admin']->value['flag']==0){?> checked<?php }?> />锁定，<input type="checkbox" name="super" value="1"<?php if ($_smarty_tpl->tpl_vars['admin']->value['super']==1){?> checked<?php }?> />系统管理员</td>
	  </tr>
	  <tr>
		<td class='hback_1'>备注说明 </td>
		<td class='hback'><textarea name="memo" id="memo" style="width:50%;height:85px;overflow:auto;color:#444444;"><?php echo $_smarty_tpl->tpl_vars['admin']->value['memo'];?>
</textarea></td>
	  </tr>
	  <tr>
		<td class='hback_1'>登录次数 </td>
		<td class='hback'><?php echo $_smarty_tpl->tpl_vars['admin']->value['logintimes'];?>
</td>
	  </tr>
	  <tr>
		<td class='hback_1'>登录时间 </td>
		<td class='hback'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['admin']->value['logintimeline'],"%Y-%m-%d %H:%M:%S");?>
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

<?php if ($_smarty_tpl->tpl_vars['a']->value=="editpassword"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>管理员帐号<span>&gt;&gt;</span>修改密码</p></div>
  <div class="main-cont">
	<h3 class="title">修改密码</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=admin" onsubmit='return checkpassword();' />
    <input type="hidden" name="a" value="savepassword" />
	<table cellpadding='5' cellspacing='5' class='tab'>
	  <tr>
		<td class='hback_none' width='15%'>登录帐号： </td>
		<td class='hback_none' width='85%'><?php echo $_smarty_tpl->tpl_vars['uc_adminname']->value;?>
</td>
	  </tr>
	  <tr>
		<td class='hback_none'>旧 密 码： </td>
		<td class='hback_none'><input type='password' name='oldpassword' id='oldpassword' maxlength="16" class="input-150" /> <span id='doldpassword' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_none'>新 密 码： </td>
		<td class='hback_none'><input type='password' name='password' id='password' maxlength="16" class="input-150" /> <span id='dnewpassword' class='f_red'></span> <font color="#999999">4-16个字符</font></td>
	  </tr>
	  <tr>
		<td class='hback_none'>确认密码： </td>
		<td class='hback_none'><input type='password' name='confirmpassword' id='confirmpassword' maxlength="16" class="input-150" /> <span id='dconfirmpassword' class='f_red'></span> </td>
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

	t = "adminname";
	v = $("#"+t).val().length;
	if(v<4 || v>16) {
		dmsg("登录帐号必须为4-16个字符！", t);
		return false;
	}

	t = "password";
	v = $("#"+t).val().length;
	if(v<4 || v>16) {
		dmsg("登录密码必须为4-16个字符", t);
		return false;
	}
	return true;
}

function checkpassword() {
	var t = "";
	var v = "";

	t = "oldpassword";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("原密码不能为空", t);
		return false;
	}

	t = "password";
	v = $("#"+t).val().length;
	if(v<4 || v>16) {
		dmsg("新密码必须为4-16个字符！", t);
		return false;
	}
    
	t = "confirmpassword";
	if($("#confirmpassword").val()!=$("#password").val()) {
		dmsg("确认密码不正确！", t);
		return false;
	}
	return true;
}
</script>
<?php }} ?>