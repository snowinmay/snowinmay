<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:34:25
         compiled from "/var/www/html/snowinmay/tpl/admincp/modattr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1094882132553f54213fc4f8-51391728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a283d4f1531e334c4e0dd0bcba8fb452b6ab16d9' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/admincp/modattr.tpl',
      1 => 1396230332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1094882132553f54213fc4f8-51391728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'smodule' => 0,
    'cpfile' => 0,
    'streeid' => 0,
    'root_select' => 0,
    'urlitem' => 0,
    'modattr' => 0,
    'volist' => 0,
    'urlpath' => 0,
    'page' => 0,
    'total' => 0,
    'pagecount' => 0,
    'showpage' => 0,
    'comeurl' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f542152afe8_81147366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f542152afe8_81147366')) {function content_553f542152afe8_81147366($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>模块字段</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：模块管理<span>&gt;&gt;</span><?php echo $_smarty_tpl->tpl_vars['smodule']->value;?>
模型<span>&gt;&gt;</span>模块字段</p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=modattr&a=add&smodule=<?php echo $_smarty_tpl->tpl_vars['smodule']->value;?>
&streeid=<?php echo $_smarty_tpl->tpl_vars['streeid']->value;?>
" class="btn-general"><span>添加模块字段</span></a>模块字段</h3>
	<div class="search-area ">
	  <form method="post" id="search_form" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=modattr&smodule=<?php echo $_smarty_tpl->tpl_vars['smodule']->value;?>
" />
	  <div class="item">
	    <label>所属栏目：</label><?php echo $_smarty_tpl->tpl_vars['root_select']->value;?>
&nbsp;&nbsp;
		<input type="submit" class="button_s" value="搜 索" />
	  </div>
	  </form>
	</div>
	<form action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=modattr&a=del&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
" method="post" name="myform" id="myform" style="margin:0">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="9%"><div class="th-gap">选择</div></th>
		<th width="8%"><div class="th-gap">排序</div></th>
		<th width="15%"><div class="th-gap">字段简述</div></th>
		<th width="15%"><div class="th-gap">字段名称</div></th>
		<th width="12%"><div class="th-gap">字段类型</div></th>
		<th width="10%"><div class="th-gap">所属栏目</div></th>
		<th width="8%"><div class="th-gap">必填</div></th>
		<th width="8%"><div class="th-gap">状态</div></th>
		<th><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modattr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['issystem']=='1'){?>
		<?php }else{ ?>
		<input name="id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" onClick="checkItem(this, 'chkAll')">
		<?php }?>
		</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['orders'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['volist']->value['typename'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['attrname'];?>
</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='text'){?>
		单行文本
		<?php }elseif($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='textarea'){?>
		多行文本
		<?php }elseif($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='checkbox'){?>
		多选框
		<?php }elseif($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='radio'){?>
		单选框
		<?php }elseif($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='select'){?>
		下拉选框
		<?php }elseif($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='img'){?>
		图片附件
		<?php }elseif($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='attchment'){?>
		文件附件
		<?php }?>
		</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['treeid']==0){?>
		所有栏目
		<?php }else{ ?>
		<?php echo $_smarty_tpl->tpl_vars['volist']->value['catname'];?>

		<?php }?>
		</td>

		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['isvalid']==0){?>
			<input type="hidden" id="attr_isvalid<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" value="isvalidopen" />
			<img id="isvalid<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('isvalid','<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_isvalid<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" value="isvalidclose" />
			<img id="isvalid<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('isvalid','<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
');" style="cursor:pointer;">	
		<?php }?>
        </td>

		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['flag']==0){?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" value="flagopen" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" value="flagclose" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
');" style="cursor:pointer;">	
		<?php }?>
        </td>

		<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=modattr&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
" class="icon-edit">编辑</a>&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=modattr&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="icon-del">删除</a></td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="9" align="center">暂无信息</td>
	  </tr>
	  <?php } ?>
	  <?php if ($_smarty_tpl->tpl_vars['total']->value>0){?>
	  <tr>
		<td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox"></td>
		<td class="hback" colspan="8"><input class="button" name="btn_del" type="button" value="删 除" onClick="{if(confirm('确定要删除吗？')){$('#myform').submit();return true;}return false;}" class="button">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['smodule']->value;?>
模型 共[ <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> ] 个字段</td>
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
  <div class="path"><p>当前位置：模块管理<span>&gt;&gt;</span><?php echo $_smarty_tpl->tpl_vars['smodule']->value;?>
模型<span>&gt;&gt;</span>添加字段</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=modattr&smodule=<?php echo $_smarty_tpl->tpl_vars['smodule']->value;?>
&streeid=<?php echo $_smarty_tpl->tpl_vars['streeid']->value;?>
" class="btn-general"><span>返回列表</span></a>添加字段</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=modattr&smodule=<?php echo $_smarty_tpl->tpl_vars['smodule']->value;?>
&streeid=<?php echo $_smarty_tpl->tpl_vars['streeid']->value;?>
" onsubmit='return checkform();' />
	<input type='hidden' name='a' id='a' value='saveadd' />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width="15%">所属栏目 <span class='f_red'></span></td>
		<td class='hback' width="85%"><?php echo $_smarty_tpl->tpl_vars['root_select']->value;?>
 <span id="dtreeid" class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>简述文字 <span class="f_red">*</span> </td>
		<td class='hback'><input type="text" name="typename" id="typename" class="input-150" /> <span id='dtypename' class='f_red'></span> <br />(发布内容时显示的字段提示，请输入长度不能大于50的任意字符段)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>字段类型 <span class="f_red">*</span> </td>
		<td class='hback'>
		<select name='inputtype' id='inputtype'>
		<option value="">请选择</option>
		<option value="text">单行文本</option>
		<option value="textarea">多行文本</option>
		<option value="checkbox">多选框</option>
		<option value="radio">单选框</option>
		<option value="select">下拉框</option>
		<option value="img">图片附件</option>
		<option value="attchment">文件附件</option>
		</select>
		<span id='dinputtype' class='f_red'></span> （注意一旦选择不能修改）</td>
	  </tr>
	  <tr>
		<td class='hback_1'>字段名称 <span class="f_red">*</span> </td>
		<td class='hback'><input type="text" name="attrname" id="attrname" class="input-100" /> <span id='dattrname' class='f_red'></span> (同一模型名称必须唯一)<br />（请输入长度不能小于2和大于40的英文字符，注意一旦填写不能修改）</td>
	  </tr>

	  <tr>
		<td class='hback_1'>提示文字 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="typeremark" id="typeremark" class="input-txt" /> <span id='dtyperemark' class='f_red'></span> <br />（发布内容时显示的备注内容，请输入长度不能大于200的任意字符段）</td>
	  </tr>

	  <tr>
		<td class='hback_1'>默认值 <span class="f_red"></span></td>
		<td class='hback'><textarea name='attrvalue' id='attrvalue' style='width:50%;height:80px;overflow:auto;'></textarea>  <span id='dattrvalue' class='f_red'></span> <br />（如果字段为下拉、复合选项关联输入框、单选或多选，每个默认值回车输入）</td>
	  </tr>
	  <tr>
		<td class='hback_1'>输入框长度  <span class="f_red"></span></td>
		<td class='hback'><input type="text" name="attrwidth" id="attrwidth" class="input-s" value="100" />像素/百分比  <span id='dattrwidth' class='f_red'></span> <br />(单行文本，请填写数字 60,80,100,150,200,250，多行文本填写1-100百分比)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>本文框高度 <span class="f_red"></span></td>
		<td class='hback'><input type="text" name="attrheight" id="attrheight" class="input-s" value="60" />像素  <span id='dattrheight' class='f_red'></span> (本属性只对多行文本框有效)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>字段排序 <span class="f_red"></span></td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-s" value="0" />  <span id='dorders' class='f_red'></span> (数字越小越考前)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>必填字段 <span class="f_red"></span> </td>
		<td class='hback'><input type="radio" name="isvalid" id="isvalid" value="1" />启用，<input type="radio" name="isvalid" id="isvalid" value="0" checked />关闭</td>
	  </tr>

	  <tr>
		<td class='hback_1'>显示状态 <span class="f_red"></span> </td>
		<td class='hback'><input type="radio" name="flag" id="flag" value="1" checked />启用，<input type="radio" name="flag" id="flag" value="0" />关闭</td>
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
  <div class="path"><p>当前位置：模块管理<span>&gt;&gt;</span><?php echo $_smarty_tpl->tpl_vars['smodule']->value;?>
模型<span>&gt;&gt;</span>编辑字段</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=modattr&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" class="btn-general"><span>返回列表</span></a>编辑字段</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=modattr&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" onsubmit='return checkedit();' />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width="15%">所属栏目 <span class='f_red'></span></td>
		<td class='hback' width="85%"><?php echo $_smarty_tpl->tpl_vars['root_select']->value;?>
 <span id="dtreeid" class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>简述文字 <span class="f_red">*</span> </td>
		<td class='hback'><input type="text" name="typename" id="typename" class="input-150" value="<?php echo $_smarty_tpl->tpl_vars['modattr']->value['typename'];?>
" /> <span id='dtypename' class='f_red'></span> <br />(发布内容时显示的字段提示，请输入长度不能大于50的任意字符段)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>字段类型 <span class="f_red"></span> </td>
		<td class='hback'>
		<select name='inputtype' id='inputtype' disabled>
		<option value="">请选择</option>
		<option value="text"<?php if ($_smarty_tpl->tpl_vars['modattr']->value['inputtype']=='text'){?> selected<?php }?>>单行文本</option>
		<option value="textarea"<?php if ($_smarty_tpl->tpl_vars['modattr']->value['inputtype']=='textarea'){?> selected<?php }?>>多行文本</option>
		<option value="checkbox"<?php if ($_smarty_tpl->tpl_vars['modattr']->value['inputtype']=='checkbox'){?> selected<?php }?>>多选框</option>
		<option value="radio"<?php if ($_smarty_tpl->tpl_vars['modattr']->value['inputtype']=='radio'){?> selected<?php }?>>单选框</option>
		<option value="select"<?php if ($_smarty_tpl->tpl_vars['modattr']->value['inputtype']=='select'){?> selected<?php }?>>下拉框</option>
		<option value="img"<?php if ($_smarty_tpl->tpl_vars['modattr']->value['inputtype']=='img'){?> selected<?php }?>>图片附件</option>
		<option value="attchment"<?php if ($_smarty_tpl->tpl_vars['modattr']->value['inputtype']=='attchment'){?> selected<?php }?>>文件附件</option>
		</select>
		<span id='dinputtype' class='f_red'></span> (不能更改)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>字段名称 <span class="f_red"></span> </td>
		<td class='hback'><?php echo $_smarty_tpl->tpl_vars['modattr']->value['attrname'];?>
 <span id='dattrname' class='f_red'></span> （不能更改）</td>
	  </tr>

	  <tr>
		<td class='hback_1'>提示文字 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="typeremark" id="typeremark" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['modattr']->value['typeremark'];?>
" /> <span id='dtyperemark' class='f_red'></span> <br />（发布内容时显示的备注内容，请输入长度不能大于200的任意字符段）</td>
	  </tr>

	  <tr>
		<td class='hback_1'>默认值 <span class="f_red"></span></td>
		<td class='hback'><textarea name='attrvalue' id='attrvalue' style='width:50%;height:80px;overflow:auto;'><?php echo $_smarty_tpl->tpl_vars['modattr']->value['attrvalue'];?>
</textarea>  <span id='dattrvalue' class='f_red'></span> <br />（如果字段为下拉、复合选项关联输入框、单选或多选，每个默认值回车输入）</td>
	  </tr>
	  <tr>
		<td class='hback_1'>输入框长度  <span class="f_red"></span></td>
		<td class='hback'><input type="text" name="attrwidth" id="attrwidth" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['modattr']->value['attrwidth'];?>
" />像素/百分比  <span id='dattrwidth' class='f_red'></span><br />(单行文本，请填写数字 60,80,100,150,200,250，多行文本填写1-100百分比)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>本文框高度 <span class="f_red"></span></td>
		<td class='hback'><input type="text" name="attrheight" id="attrheight" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['modattr']->value['attrheight'];?>
" />像素  <span id='dattrheight' class='f_red'></span> (本属性只对多行文本框有效)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>字段排序 <span class="f_red"></span></td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['modattr']->value['orders'];?>
" />  <span id='dorders' class='f_red'></span> (数字越小越考前)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>必填字段 <span class="f_red"></span> </td>
		<td class='hback'><input type="radio" name="isvalid" id="isvalid" value="1"<?php if ($_smarty_tpl->tpl_vars['modattr']->value['isvalid']=='1'){?> checked<?php }?> />启用，<input type="radio" name="isvalid" id="isvalid" value="0"<?php if ($_smarty_tpl->tpl_vars['modattr']->value['isvalid']=='0'){?> checked<?php }?> />关闭</td>
	  </tr>

	  <tr>
		<td class='hback_1'>显示状态 <span class="f_red"></span> </td>
		<td class='hback'><input type="radio" name="flag" id="flag" value="1"<?php if ($_smarty_tpl->tpl_vars['modattr']->value['flag']=='1'){?> checked<?php }?> />启用，<input type="radio" name="flag" id="flag" value="0"<?php if ($_smarty_tpl->tpl_vars['modattr']->value['flag']=='0'){?> checked<?php }?> />关闭</td>
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

	t = "typename";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("简述文字不能为空", t);
		$('#'+t).focus();
		return false;
	}
	t = "inputtype";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("字段类型不能为空", t);
		$('#'+t).focus();
		return false;
	}

	t = "attrname";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("字段名称不能为空", t);
		$('#'+t).focus();
		return false;
	}
	else {
		if (v.length<2 || v.length>40) {
			dmsg("字段长度不正确", t);
			$('#'+t).focus();
			return false;
		}
	}
	return true;
}

function checkedit() {
	var t = "";
	var v = "";

	t = "typename";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("简述文字不能为空", t);
		$('#'+t).focus();
		return false;
	}

	return true;
}
</script><?php }} ?>