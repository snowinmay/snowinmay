<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<!--{$page_charset}-->" />
<title>友情链接</title>
<!--{include file="<!--{$cptplpath}-->headerjs.tpl"}-->
<!--{assign var='pluginevent' value=XHook::doAction('adm_head')}-->
</head>
<body>
<!--{assign var='pluginevent' value=XHook::doAction('adm_main_top')}-->
<!--{if $a eq "run"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：插件应用<span>&gt;&gt;</span>扩展应用<span>&gt;&gt;</span>前台导航设置</p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<!--{$cpfile}-->?c=friendlink&a=add" class="btn-general"><span>添加友情链接</span></a>友情链接</h3>

	<form action="<!--{$cpfile}-->?c=friendlink" method="post" name="myform" id="myform" style="margin:0">
	<input type='hidden' name='a' id='a'>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
		<th width="8%"><div class="th-gap">选择</div></th>
		<th width="15%"><div class="th-gap">网站名称</div></th>
		<th width="28%"><div class="th-gap">URL</div></th>
		<th width="8%"><div class="th-gap">排序</div></th>
		<th width="8%"><div class="th-gap">状态</div></th>
		<th width="15%"><div class="th-gap">录入时间</div></th>
		<th><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>

	  <!--{if !empty($friendlink)}-->
	  <!--{foreach $friendlink as $volist}-->
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><input name="id[]" type="checkbox" value="<!--{$volist.id}-->" onClick="checkItem(this, 'chkAll')"></td>
		<td align="left"><!--{$volist.name}--></td>
		<td align="left"><!--{$volist.url}--></td>
		<td align="center"><!--{$volist.orders}--></td>
		<td align="center">
		<!--{if $volist.flag==0}-->
			<input type="hidden" id="attr_flag<!--{$volist.id}-->" value="flagopen" />
			<img id="flag<!--{$volist.id}-->" src="<!--{$urlpath}-->tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<!--{$volist.id}-->');" style="cursor:pointer;">
		<!--{else}-->
			<input type="hidden" id="attr_flag<!--{$volist.id}-->" value="flagclose" />
			<img id="flag<!--{$volist.id}-->" src="<!--{$urlpath}-->tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<!--{$volist.id}-->');" style="cursor:pointer;">	
		<!--{/if}-->
        </td>
		<td align="center"><!--{$volist.addtime|date_format:"%Y-%m-%d %H:%M"}--></td>
		<td align="center">
		<a href="<!--{$cpfile}-->?c=friendlink&a=edit&id=<!--{$volist.id}-->" class="icon-edit">编辑</a>&nbsp;&nbsp;
		<a href="<!--{$cpfile}-->?c=friendlink&a=del&id[]=<!--{$volist.id}-->" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="icon-del">删除</a>
		</td>
	  </tr>
	  <!--{/foreach}-->
	  <tr>
		<td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox"></td>
		<td class="hback" colspan="6">
		<input class="button" name="btn_del" type="button" value="删 除" onClick="{if(confirm('确定要删除吗？')){$('#a').val('del');$('#myform').submit();return true;}return false;}" class="button">
		
		&nbsp;&nbsp;共[ <b><!--{$total}--></b> ]条记录</td>
	  </tr>
	  <!--{else}-->
	  <tr>
	    <td colspan="7" align="center">暂无信息</td>
	  </tr>
	  <!--{/if}-->
	</table>
	</form>
  </div>
</div>
<!--{/if}-->

<!--{if $a eq "add"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：插件应用<span>&gt;&gt;</span>扩展应用<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=friendlink&a=add">添加友情链接</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<!--{$cpfile}-->?c=friendlink" class="btn-general"><span>返回列表</span></a>添加友情链接</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=friendlink" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveadd" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>网站名称 <span class="f_red">*</span> </td>
		<td class='hback' width='85%'><input type="text" name="name" id="name" class="input-150" /> <span id='dname' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>网站URL <span class="f_red">*</span> </td>
		<td class='hback'>
		<input type="text" name="url" id="url" class="input-txt" value="http://" /> （以http://开头） <span id='durl' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>排 序 </td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-s" value="<!--{$orders}-->" /> <span id='dorders' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>状 态 </td>
		<td class='hback'>
		<input type="radio" name="flag" id="flag" value="1" checked />开启，<input type="radio" name="flag" id="flag" value="0" />关闭
		<span id='dflag' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>备注说明 </td>
		<td class='hback'>
		 <textarea name="remark" id="remark" style="width:60%;height:100px;overflow:auto;"></textarea>
		 <span id='dremark' class='f_red'></span>
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
  <div class="path"><p>当前位置：插件应用<span>&gt;&gt;</span>扩展应用<span>&gt;&gt;</span>编辑友情链接</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<!--{$cpfile}-->?c=friendlink" class="btn-general"><span>返回列表</span></a>编辑友情链接</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=friendlink" />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<!--{$id}-->" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>网站名称 <span class="f_red">*</span> </td>
		<td class='hback' width='85%'><input type="text" name="name" id="name" class="input-150" value="<!--{$friendlink.name}-->" /> <span id='dname' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>网站URL <span class="f_red">*</span> </td>
		<td class='hback'>
		<input type="text" name="url" id="url" class="input-txt" value="<!--{$friendlink.url}-->" /> （以http://开头） <span id='durl' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>排 序 </td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-s" value="<!--{$friendlink.orders}-->" /> <span id='dorders' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>状 态 </td>
		<td class='hback'>
		<input type="radio" name="flag" id="flag" value="1"<!--{if $friendlink.flag == '1'}--> checked<!--{/if}--> />开启，
		<input type="radio" name="flag" id="flag" value="0"<!--{if $friendlink.flag == '0'}--> checked<!--{/if}--> />关闭
		<span id='dflag' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>备注说明 </td>
		<td class='hback'>
		 <textarea name="remark" id="remark" style="width:60%;height:100px;overflow:auto;"><!--{$friendlink.remark}--></textarea>
		 <span id='dremark' class='f_red'></span>
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
		dmsg("网站名称不能为空", t);
		return false;
	}

	t = "url";
	v = $("#"+t).val();
	if (v=="") {
		dmsg("网站URL不能为空", t);
		return false;
	}
	return true;
}
</script>
