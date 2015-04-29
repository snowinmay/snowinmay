<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<!--{$page_charset}-->" />
<title>我的导航</title>
<!--{include file="<!--{$cptplpath}-->headerjs.tpl"}-->
<!--{assign var='pluginevent' value=XHook::doAction('adm_head')}-->
</head>
<body>
<!--{assign var='pluginevent' value=XHook::doAction('adm_main_top')}-->
<!--{if $a eq "run"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：我的导航<span></p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<!--{$cpfile}-->?c=mynav&a=add" class="btn-general"><span>添加我的导航</span></a>我的导航</h3>

	<form action="<!--{$cpfile}-->?c=mynav" method="post" name="myform" id="myform" style="margin:0">
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
	  <!--{foreach $mynav as $volist}-->
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center">
		<input name="id[]" type="checkbox" value="<!--{$volist.id}-->" onClick="checkItem(this, 'chkAll')">
		</td>
		<td align="left"><!--{$volist.id}--></td>
		<td align="left"><!--{$volist.name}--></td>
		<td align="left"><!--{$volist.url}--></td>
		<td align="center"><!--{$volist.orders}--></td>
		<td align="center"><!--{$volist.addtime|date_format:"%Y-%m-%d %H:%M"}--></td>
		<td align="center">
		<a href="<!--{$cpfile}-->?c=mynav&a=edit&id=<!--{$volist.id}-->&page=<!--{$page}-->" class="icon-edit">编辑</a>&nbsp;&nbsp;
		<a href="<!--{$cpfile}-->?c=mynav&a=del&id[]=<!--{$volist.id}-->" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="icon-del">删除</a>
		</td>
	  </tr>
	  <!--{foreachelse}-->
      <tr>
	    <td colspan="7" align="center">暂无信息</td>
	  </tr>
	  <!--{/foreach}-->
	  <!--{if $total>0}-->
	  <tr>
		<td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox"></td>
		<td class="hback" colspan="6">
		<input class="button" name="btn_del" type="button" value="删 除" onClick="{if(confirm('确定要删除吗？')){$('#a').val('del');$('#myform').submit();return true;}return false;}" class="button" />
		&nbsp;&nbsp;共[ <b><!--{$total}--></b> ]条记录
		</td>
	  </tr>
	  <!--{/if}-->
	</table>
	</form>
  </div>
</div>
<!--{/if}-->

<!--{if $a eq "add"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：我的导航<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=mynav&a=add">添加我的导航</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<!--{$cpfile}-->?c=mynav" class="btn-general"><span>返回列表</span></a>添加我的导航</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=mynav" onsubmit='return checkform();' />
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
		<td class='hback'><input type="text" name="orders" id="orders" class="input-s" value="<!--{$orders}-->" /> <span id='dorders' class='f_red'></span></td>
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
<!--{/if}-->

<!--{if $a eq "edit"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：我的导航<span>&gt;&gt;</span>编辑我的导航</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<!--{$cpfile}-->?c=mynav" class="btn-general"><span>返回列表</span></a>编辑我的导航</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=mynav" />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<!--{$id}-->" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>导航名称 <span class="f_red">*</span> </td>
		<td class='hback' width='85%'><input type="text" name="name" id="name" class="input-150" value="<!--{$mynav.name}-->" /> <span id='dname' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>链接地址 <span class="f_red">*</span> </td>
		<td class='hback'><input type="text" name="url" id="url" class="input-txt" value="<!--{$mynav.url}-->" /> （可用{urlpath}网站安装路径标签） <span id='durl' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>排 序 </td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-s" value="<!--{$mynav.orders}-->" /> <span id='dorders' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>图 标 </td>
		<td class='hback'>
		<select name="icon" id="icon">
		<option value="0"<!--{if $mynav.icon == '0'}--> selected<!--{/if}-->>无图标</option>
		<option value="1"<!--{if $mynav.icon == '1'}--> selected<!--{/if}-->>图标1</option>
		<option value="2"<!--{if $mynav.icon == '2'}--> selected<!--{/if}-->>图标2</option>
		<option value="3"<!--{if $mynav.icon == '3'}--> selected<!--{/if}-->>图标3</option>
		<option value="4"<!--{if $mynav.icon == '4'}--> selected<!--{/if}-->>图标4</option>
		<option value="5"<!--{if $mynav.icon == '5'}--> selected<!--{/if}-->>图标5</option>
		<option value="6"<!--{if $mynav.icon == '6'}--> selected<!--{/if}-->>图标6</option>
		<option value="7"<!--{if $mynav.icon == '7'}--> selected<!--{/if}-->>图标7</option>
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
<!--{/if}-->
<!--{assign var='pluginevent' value=XHook::doAction('adm_footer')}-->
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
