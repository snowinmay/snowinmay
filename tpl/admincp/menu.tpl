<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<!--{$page_charset}-->" />
<title>前台导航</title>
<!--{include file="<!--{$cptplpath}-->headerjs.tpl"}-->
<!--{assign var='pluginevent' value=XHook::doAction('adm_head')}-->
</head>
<body>
<!--{assign var='pluginevent' value=XHook::doAction('adm_main_top')}-->
<!--{if $a eq "run"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>基础设置<span>&gt;&gt;</span>前台导航设置</p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<!--{$cpfile}-->?c=menu&a=add" class="btn-general"><span>添加导航</span></a>前台导航</h3>

	<form action="<!--{$cpfile}-->?c=menu" method="post" name="myform" id="myform" style="margin:0">
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

	  <!--{assign var='rootmenu' value=vo_list("mod={menu} where={v.parentid='0'}")}-->
	  <!--{if !empty($rootmenu)}-->
	  <!--{foreach $rootmenu as $volist}-->
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><!--{$volist.id}--></td>
		<td align="left"><!--{$volist.name}--></td>
		<td align="left"><!--{$volist.url}--></td>
		<td align="center">
		<!--{if $volist.flag==0}-->
			<input type="hidden" id="attr_flag<!--{$volist.id}-->" value="flagopen" />
			<img id="flag<!--{$volist.id}-->" src="<!--{$urlpath}-->tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<!--{$volist.id}-->');" style="cursor:pointer;">
		<!--{else}-->
			<input type="hidden" id="attr_flag<!--{$volist.id}-->" value="flagclose" />
			<img id="flag<!--{$volist.id}-->" src="<!--{$urlpath}-->tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<!--{$volist.id}-->');" style="cursor:pointer;">	
		<!--{/if}-->
        </td>
		<td align="center"><!--{$volist.orders}--></td>
		<td align="center">
		<!--{if $volist.target=='1'}-->
		新页面打开
		<!--{else}-->
		本页面打开
		<!--{/if}-->
		</td>
		<td align="center"><!--{$volist.currentmark}--></td>
		
		<td align="center">
		<a href="<!--{$cpfile}-->?c=menu&a=add&rootid=<!--{$volist.id}-->" class="icon-add">添加子导航</a>&nbsp;&nbsp;
		<a href="<!--{$cpfile}-->?c=menu&a=edit&id=<!--{$volist.id}-->" class="icon-edit">编辑</a>&nbsp;&nbsp;
		<a href="<!--{$cpfile}-->?c=menu&a=del&id[]=<!--{$volist.id}-->" onClick="{if(confirm('确定要删除吗？连子导航一起删除。')){return true;} return false;}" class="icon-del">删除</a>
		</td>
	  </tr>

	    <!--{assign var='childmenu' value=vo_list("mod={menu} where={v.parentid='<!--{$volist.id}-->'}")}-->
		<!--{foreach $childmenu as $val}-->
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><!--{$val.id}--></td>
		<td align="left"><font color="blue">&nbsp;&nbsp;&nbsp;├<!--{$val.name}--></font></td>
		<td align="left"><!--{$val.url}--></td>
		<td align="center">
		<!--{if $val.flag==0}-->
			<input type="hidden" id="attr_flag<!--{$val.id}-->" value="flagopen" />
			<img id="flag<!--{$val.id}-->" src="<!--{$urlpath}-->tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<!--{$val.id}-->');" style="cursor:pointer;">
		<!--{else}-->
			<input type="hidden" id="attr_flag<!--{$val.id}-->" value="flagclose" />
			<img id="flag<!--{$val.id}-->" src="<!--{$urlpath}-->tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<!--{$val.id}-->');" style="cursor:pointer;">	
		<!--{/if}-->
        </td>
		<td align="center"><!--{$val.orders}--></td>
		<td align="center">
		<!--{if $val.target=='1'}-->
		新页面打开
		<!--{else}-->
		本页面打开
		<!--{/if}-->
		</td>
		<td align="center"><!--{$val.currentmark}--></td>
		
		<td align="center">
		<a href="<!--{$cpfile}-->?c=menu&a=edit&id=<!--{$val.id}-->" class="icon-edit">编辑</a>&nbsp;&nbsp;
		<a href="<!--{$cpfile}-->?c=menu&a=del&id[]=<!--{$val.id}-->" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="icon-del">删除</a>
		</td>
	  </tr>
		<!--{/foreach}-->
	  <!--{/foreach}-->
	  <!--{else}-->
	  <tr>
	    <td colspan="8" align="center">暂无信息</td>
	  </tr>
	  <!--{/if}-->
	</table>
	</form>
  </div>
</div>
<!--{/if}-->

<!--{if $a eq "add"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>基础设置<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=menu&a=add">添加前台导航</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<!--{$cpfile}-->?c=menu" class="btn-general"><span>返回列表</span></a>添加前台导航</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=menu" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveadd" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>所属导航 <span class="f_red"></span> </td>
		<td class='hback' width='85%'>
		<select name="parentid" id="parentid">
		<option value="">一级导航</option>
		<!--{assign var='parentmenu' value=vo_list("mod={menu} where={v.parentid='0'}")}-->
		<!--{foreach $parentmenu as $volist}-->
		<option value="<!--{$volist.id}-->"<!--{if $rootid==$volist.id}--> selected<!--{/if}-->><!--{$volist.name}--></option>
		<!--{/foreach}-->
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
		<td class='hback'><input type="text" name="orders" id="orders" class="input-s" value="<!--{$orders}-->" /> <span id='dorders' class='f_red'></span></td>
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
<!--{/if}-->

<!--{if $a eq "edit"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>基础设置<span>&gt;&gt;</span>编辑导航</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<!--{$cpfile}-->?c=menu" class="btn-general"><span>返回列表</span></a>编辑导航</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=menu" />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<!--{$id}-->" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>所属导航 <span class="f_red"></span> </td>
		<td class='hback' width='85%'>
		<select name="parentid" id="parentid">
		<option value="">一级导航</option>
		<!--{assign var='parentmenu' value=vo_list("mod={menu} where={v.parentid='0'}")}-->
		<!--{foreach $parentmenu as $volist}-->
		<option value="<!--{$volist.id}-->"<!--{if $menu.parentid==$volist.id}--> selected<!--{/if}-->><!--{$volist.name}--></option>
		<!--{/foreach}-->
		</select>
		<span id='dparentid' class='f_red'></span> 
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>导航名称 <span class="f_red">*</span> </td>
		<td class='hback'><input type="text" name="name" id="name" class="input-150" value="<!--{$menu.name}-->" /> <span id='dname' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>链接地址 <span class="f_red">*</span> </td>
		<td class='hback'>
		<input type="text" name="url" id="url" class="input-txt" value="<!--{$menu.url}-->" /> （可用{urlpath}网站安装路径标签） <span id='durl' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>排 序 </td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-s" value="<!--{$menu.orders}-->" /> <span id='dorders' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>打开方式 </td>
		<td class='hback'>
		 <input type="radio" name="target" id="target" value="1"<!--{if $menu.target == '1'}--> checked<!--{/if}--> />新页面打开，
		 <input type="radio" name="target" id="target" value="0"<!--{if $menu.target == '0'}--> checked<!--{/if}--> />本页面打开
		 <span id='dtarget' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>当选标识 </td>
		<td class='hback'>
		 <input type="text" name="currentmark" id="currentmark" class="input-s" value="<!--{$menu.currentmark}-->" /> （导航当前选中标识，该标识与模板文件设置的一致）
		 <span id='dcurrentmark' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>状 态 </td>
		<td class='hback'>
		<input type="radio" name="flag" id="flag" value="1"<!--{if $menu.flag=='1'}--> checked<!--{/if}--> />开启，<input type="radio" name="flag" id="flag" value="0"<!--{if $menu.flag=='0'}--> checked<!--{/if}--> />关闭
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
