<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<!--{$page_charset}-->" />
<title>商业版授权</title>
<!--{include file="<!--{$cptplpath}-->headerjs.tpl"}-->
<!--{assign var='pluginevent' value=XHook::doAction('adm_head')}-->
</head>
<body>
<!--{assign var='pluginevent' value=XHook::doAction('adm_main_top')}-->
<!--{if $a eq "run"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>系统状态<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=article&tid=<!--{$tid}-->">商业版授权</a></p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<!--{$cpfile}-->?c=authorized&a=add" class="btn-general"><span>添加授权</span></a><!--{$modtitle}--></h3>
	<div class="search-area ">
	  <form method="post" id="search_form" action="<!--{$cpfile}-->?c=authorized" />
	  <div class="item" style="line-height:35px;">
	    产品：
		<select name="spdname" id="spdname">
		  <option value="">全部</option>
		  <option value="oecms"<!--{if $spdname=='oecms'}--> selected<!--{/if}-->>OECMS</option>
		  <option value="oelove"<!--{if $spdname=='oelove'}--> selected<!--{/if}-->>OELOVE</option>
		</select>
		&nbsp;
	    域名：
		<input type="text" id="sdomain" name="sdomain" class="input-150" value="<!--{$sdomain}-->" />
		&nbsp;
	    授权码：
		<input type="text" id="sascode" name="sascode" class="input-150" value="<!--{$sascode}-->" />
		&nbsp;
		状态：
		<select name="sasflag" id="sasflag">
		  <option value="">全部</option>
		  <option value="1"<!--{if $sasflag=='1'}--> selected<!--{/if}-->>已授权</option>
		  <option value="2"<!--{if $sasflag=='2'}--> selected<!--{/if}-->>未授权</option>
		</select>
		&nbsp;&nbsp;&nbsp;
		<input type="submit" class="button_s" value=" 搜 索 " />

		<br />
		授权主体：<input type="text" id="sasname" name="sasname" class="input-100" value="<!--{$sasname}-->" />
		证件号码：<input type="text" id="sasidnumber" name="sasidnumber" class="input-100" value="<!--{$sasidnumber}-->" />
		手机：<input type="text" id="sasmobile" name="sasmobile" class="input-100" value="<!--{$sasmobile}-->" />
		QQ：<input type="text" id="sasqq" name="sasqq" class="input-100" value="<!--{$sasqq}-->" />
		邮箱：<input type="text" id="sasemail" name="sasemail" class="input-100" value="<!--{$sasemail}-->" />
	  </div>
	  </form>
	</div>
	<form action="<!--{$cpfile}-->?c=article&tid=<!--{$tid}-->&a=del" method="post" name="myform" id="myform" style="margin:0">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="15%"><div class="th-gap">域名</div></th>
		<th width="12%"><div class="th-gap">授权版本</div></th>
		<th width="10%"><div class="th-gap">价格</div></th>
		<th width="10%"><div class="th-gap">授权主体</div></th>
		<th width="12%"><div class="th-gap">电话</div></th>
		<th width="10%"><div class="th-gap">授权时间</div></th>
		<th width="15%"><div class="th-gap">服务期限</div></th>
		<th width="5%"><div class="th-gap">状态</div></th>
		<th><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <!--{foreach $authorized as $volist}-->
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="left"><!--{$volist.domain}--></td>
		<td align="left"><!--{$volist.asdesc}--></td>
		<td align="left"><!--{$volist.price}--></td>
		<td><!--{$volist.asname}--></td>
		<td><!--{$volist.asmobile}--></td>
		<td align="center"><!--{$volist.astime|date_format:"%Y-%m-%d"}--></td>
		<td align="center"><!--{$volist.starttime|date_format:"%Y-%m-%d"}-->~<!--{$volist.endtime|date_format:"%Y-%m-%d"}--></td>
		<td align="center">
		<!--{if $volist.asflag==0}-->
			<input type="hidden" id="attr_flag<!--{$volist.asid}-->" value="flagopen" />
			<img id="flag<!--{$volist.asid}-->" src="<!--{$urlpath}-->tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<!--{$volist.asid}-->');" style="cursor:pointer;">
		<!--{else}-->
			<input type="hidden" id="attr_flag<!--{$volist.asid}-->" value="flagclose" />
			<img id="flag<!--{$volist.asid}-->" src="<!--{$urlpath}-->tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<!--{$volist.asid}-->');" style="cursor:pointer;">	
		<!--{/if}-->
        </td>
		<td align="center"><a href="<!--{$cpfile}-->?c=authorized&a=edit&id=<!--{$volist.asid}-->&page=<!--{$page}-->&<!--{$urlitem}-->" class="icon-edit">编辑</a>&nbsp;&nbsp;<a href="<!--{$cpfile}-->?c=authorized&a=del&id=<!--{$volist.asid}-->&page=<!--{$page}-->&<!--{$urlitem}-->" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="icon-del">删除</a></td>
	  </tr>
	  <!--{foreachelse}-->
      <tr>
	    <td colspan="9" align="center">暂无信息</td>
	  </tr>
	  <!--{/foreach}-->
	</table>
	</form>
	<!--{if $pagecount>1}-->
	<table width='95%' border='0' cellspacing='0' cellpadding='0' align='center' style="margin-top:10px;">
	  <tr>
		<td align='center'><!--{$showpage}--></td>
	  </tr>
	</table>
	<!--{/if}-->
  </div>
</div>
<!--{/if}-->

<!--{if $a eq "add"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>系统状态<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=authorized&a=add">添加授权</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<!--{$cpfile}-->?c=authorized" class="btn-general"><span>返回列表</span></a>添加授权</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=authorized" onsubmit='return checkform();' />
	<input type='hidden' name='a' id='a' value='saveadd' />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_c3' colspan="4"><b>授权服务</b></td>
	  </tr>
	  <tr>
		<td class='hback_1' width="15%">授权域名 <span class='f_red'>*</span></td>
		<td class='hback' width="85%" colspan="3"><input type="text" name="domain" id="domain" class="input-txt"  /> <span id='ddomain' class='f_red'></span> <font color="#999999">（填写根域名）</font></td>
	  </tr>
	  <tr>
		<td class='hback_1'>产品类型 <span class="f_red">*</span> </td>
		<td class='hback' colspan="3">
		<select name="pdname" id="pdname">
		<option value="">请选择</option>
		<option value="oecms">OECMS</option>
		<option value="oelove">OELOVE</option>
		</select>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		价格 <span class='f_red'>*</span>&nbsp;&nbsp;<input type="text" name="price" id="price" class="input-100" />元
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>授权产品 <span class="f_red">*</span> </td>
		<td class='hback' colspan="3"><input type="text" name="asdesc" id="asdesc" class="input-txt" /> <span id='dasdesc' class='f_red'></span>   <font color="#999999">（填写授权产品信息）</font></td>
	  </tr>
	  <tr>
		<td class='hback_1'>授权日期 <span class="f_red">*</span> </td>
		<td class='hback' colspan="3"><input type="text" name="astime" id="astime" class="input-100" onClick="WdatePicker();" /> <span id='dastime' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>服务期限 <span class="f_red">*</span> </td>
		<td class='hback' colspan="3"><input type="text" name="starttime" id="starttime" class="input-100" onClick="WdatePicker();" />&nbsp;&nbsp;至 &nbsp;&nbsp;&nbsp;<input type="text" name="endtime" id="endtime" class="input-100" onClick="WdatePicker();" /></td>
	  </tr>
	  <tr>
		<td class='hback_1'>授权状态 <span class="f_red">*</span> </td>
		<td class='hback' colspan="3"><input type="checkbox" name="asflag" id="asflag" value="1" />授权 <span id='dasflag' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_yellow' colspan="4"><b>授权人信息</b></td>
	  </tr>
	  <tr>
	    <td class='hback_1' width="15%">授权主体 <span class='f_red'>*</span></td>
		<td width="35%"><input type="text" name="asname" id="asname" class="input-txt" /> <span id='dasname' class='f_red'></span></td>
	    <td class='hback_1' width="15%">证件号码 <span class='f_red'></span></td>
		<td width="35%"><input type="text" name="asidnumber" id="asidnumber" class="input-txt" /> <span id='dasidnumber' class='f_red'></span></td>
	  </tr>
	  <tr>
	    <td class='hback_1'>联系人 <span class='f_red'></span></td>
		<td><input type="text" name="ascontact" id="ascontact" class="input-150" /> <span id='dascontact' class='f_red'></span></td>
	    <td class='hback_1'>手机号码 <span class='f_red'></span></td>
		<td><input type="text" name="asmobile" id="asmobile" class="input-150" /> <span id='dasmobile' class='f_red'></span></td>
	  </tr>
	  <tr>
	    <td class='hback_1'>联系电话 <span class='f_red'></span></td>
		<td><input type="text" name="astel" id="astel" class="input-150" /> <span id='dastel' class='f_red'></span></td>
	    <td class='hback_1'>联系QQ <span class='f_red'></span></td>
		<td><input type="text" name="asqq" id="asqq" class="input-150" /> <span id='dasqq' class='f_red'></span></td>
	  </tr>
	  <tr>
	    <td class='hback_1'>联系邮箱 <span class='f_red'></span></td>
		<td><input type="text" name="asemail" id="asemail" class="input-150" /> <span id='dasemail' class='f_red'></span></td>
	    <td class='hback_1'>联系地址 <span class='f_red'></span></td>
		<td><input type="text" name="address" id="address" class="input-txt" /> <span id='daddress' class='f_red'></span></td>
	  </tr>
	  <tr>
	    <td class='hback_1'>备注说明 <span class='f_red'></span></td>
		<td colspan="3">
		<textarea name="remark" id="remark" style="width:60%;height:100px;overflow:hidden;"></textarea>
		<span id='dremark' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_none'></td>
		<td class='hback_none' colspan="3"><input type="submit" name="btn_save" class="button" value="添加保存" /></td>
	  </tr>
	</table>
	</form>
  </div>
  <div style="clear:both;"></div>
</div>
<!--{/if}-->

<!--{if $a eq "edit"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>系统状态<span>&gt;&gt;</span>编辑授权</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<!--{$cpfile}-->?c=authorized&<!--{$comeurl}-->" class="btn-general"><span>返回列表</span></a>编辑授权</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=authorized&<!--{$comeurl}-->" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<!--{$id}-->" />
	<table cellpadding='1' cellspacing='2' class='tab'>
	  <tr>
		<td class='hback_c3' colspan="4"><b>授权服务</b></td>
	  </tr>
	  <tr>
		<td class='hback_1' width="15%">授权域名 <span class='f_red'></span></td>
		<td class='hback' width="85%" colspan="3">
		<!--{$authorized.domain}-->
		<input type="hidden" name="domain" id="domain" class="input-txt" value="<!--{$authorized.domain}-->" /> <span id='ddomain' class='f_red'></span></font>
		
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>产品类型 <span class="f_red">*</span> </td>
		<td class='hback' colspan="3">
		<select name="pdname" id="pdname">
		<option value="">请选择</option>
		<option value="oecms"<!--{if $authorized.pdname == 'oecms'}--> selected<!--{/if}-->>OECMS</option>
		<option value="oelove"<!--{if $authorized.pdname == 'oelove'}--> selected<!--{/if}-->>OELOVE</option>
		</select>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		价格 <span class='f_red'>*</span>&nbsp;&nbsp;<input type="text" name="price" id="price" class="input-100" value="<!--{$authorized.price}-->" />元
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>授权产品 <span class="f_red">*</span> </td>
		<td class='hback' colspan="3"><input type="text" name="asdesc" id="asdesc" class="input-txt" value="<!--{$authorized.asdesc}-->" /> <span id='dasdesc' class='f_red'></span>   <font color="#999999">（填写授权产品信息）</font></td>
	  </tr>
	  <tr>
		<td class='hback_1'>授权日期 <span class="f_red">*</span> </td>
		<td class='hback' colspan="3"><input type="text" name="astime" id="astime" class="input-100" onClick="WdatePicker();" value="<!--{$authorized.astime|date_format:"%Y-%m-%d"}-->" /> <span id='dastime' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>服务期限 <span class="f_red">*</span> </td>
		<td class='hback' colspan="3"><input type="text" name="starttime" id="starttime" class="input-100" onClick="WdatePicker();" value="<!--{$authorized.starttime|date_format:"%Y-%m-%d"}-->" />&nbsp;&nbsp;至 &nbsp;&nbsp;&nbsp;<input type="text" name="endtime" id="endtime" class="input-100" onClick="WdatePicker();" value="<!--{$authorized.endtime|date_format:"%Y-%m-%d"}-->" /></td>
	  </tr>
	  <tr>
		<td class='hback_1'>授权状态 <span class="f_red">*</span> </td>
		<td class='hback' colspan="3"><input type="checkbox" name="asflag" id="asflag" value="1"<!--{if $authorized.asflag=='1'}--> checked<!--{/if}--> />授权 <span id='dasflag' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>授权码 <span class="f_red"></span> </td>
		<td class='hback' colspan="3"><!--{$authorized.ascode}--></td>
	  </tr>
	  <tr>
		<td class='hback_1'>密钥 <span class="f_red"></span> </td>
		<td class='hback' colspan="3"><!--{$authorized.askey}--></td>
	  </tr>
	  <tr>
		<td class='hback_yellow' colspan="4"><b>授权人信息</b></td>
	  </tr>
	  <tr>
	    <td class='hback_1' width="15%">授权主体 <span class='f_red'>*</span></td>
		<td width="35%"><input type="text" name="asname" id="asname" class="input-txt" value="<!--{$authorized.asname}-->" /> <span id='dasname' class='f_red'></span></td>
	    <td class='hback_1' width="15%">证件号码 <span class='f_red'></span></td>
		<td width="35%"><input type="text" name="asidnumber" id="asidnumber" class="input-txt" value="<!--{$authorized.asidnumber}-->" /> <span id='dasidnumber' class='f_red'></span></td>
	  </tr>
	  <tr>
	    <td class='hback_1'>联系人 <span class='f_red'></span></td>
		<td><input type="text" name="ascontact" id="ascontact" class="input-150" value="<!--{$authorized.ascontact}-->" /> <span id='dasmobile' class='f_red'></span></td>
	    <td class='hback_1'>手机号码 <span class='f_red'></span></td>
		<td><input type="text" name="asmobile" id="asmobile" class="input-150" value="<!--{$authorized.asmobile}-->" /> <span id='dasmobile' class='f_red'></span></td>
	  </tr>
	  <tr>
	    <td class='hback_1'>联系电话 <span class='f_red'></span></td>
		<td><input type="text" name="astel" id="astel" class="input-150" value="<!--{$authorized.astel}-->" /> <span id='dastel' class='f_red'></span></td>
	    <td class='hback_1'>联系QQ <span class='f_red'></span></td>
		<td><input type="text" name="asqq" id="asqq" class="input-100" value="<!--{$authorized.asqq}-->" /> <span id='dasqq' class='f_red'></span></td>
	  </tr>
	  <tr>
	    <td class='hback_1'>联系邮箱 <span class='f_red'></span></td>
		<td><input type="text" name="asemail" id="asemail" class="input-150" value="<!--{$authorized.asemail}-->" /> <span id='dasemail' class='f_red'></span></td>
	    <td class='hback_1'>联系地址 <span class='f_red'></span></td>
		<td><input type="text" name="address" id="address" class="input-txt" value="<!--{$authorized.address}-->" /> <span id='daddress' class='f_red'></span></td>
	  </tr>
	  <tr>
	    <td class='hback_1'>备注说明 <span class='f_red'></span></td>
		<td colspan="3">
		<textarea name="remark" id="remark" style="width:60%;height:100px;overflow:hidden;"><!--{$authorized.remark}--></textarea>
		<span id='dremark' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_none'></td>
		<td class='hback_none' colspan="3"><input type="submit" name="btn_save" class="button" value="更新保存" /></td>
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

	t = "domain";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("请填写域名", t);
		$('#'+t).focus();
		return false;
	}

	t = "pdname";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("请选择产品类型", t);
		$('#'+t).focus();
		return false;
	}

	t = "asdesc";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("请填写授权产品信息", t);
		$('#'+t).focus();
		return false;
	}

	t = "astime";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("请填写授权日期", t);
		$('#'+t).focus();
		return false;
	}

	t = "asname";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("请填写授权人", t);
		$('#'+t).focus();
		return false;
	}

	return true;
}

</script>