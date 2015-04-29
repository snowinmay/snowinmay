<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<!--{$page_charset}-->" />
<title>系统使用记录 </title>
<!--{include file="<!--{$cptplpath}-->headerjs.tpl"}-->
<!--{assign var='pluginevent' value=XHook::doAction('adm_head')}-->
</head>
<body>
<!--{assign var='pluginevent' value=XHook::doAction('adm_main_top')}-->
<!--{if $a eq "run"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>系统状态<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=loginlogs">系统使用记录</a></p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<!--{$cpfile}-->?c=loginlogs&a=dellocal" class="btn-general" onClick="{if(confirm('确定删除吗？')){return true;}return false;}"><span>删除localhost记录</span></a>系统日志</h3>
	
	<div class="search-area ">
	  <form method="post" id="search_form" action="<!--{$cpfile}-->?c=loginlogs" />
	  <div class="item">
		<label>产品：</label>
		<select name="spdname" id="spdname">
		  <option value="">全部</option>
		  <option value="oecms"<!--{if $spdname=='oecms'}--> selected<!--{/if}-->>OECMS</option>
		  <option value="oelove"<!--{if $spdname=='oelove'}--> selected<!--{/if}-->>OELOVE</option>
		</select>
		&nbsp;&nbsp;
		<label>类型：</label>
		<select name="spdtype" id="spdtype">
		  <option value="">全部</option>
		  <option value="free"<!--{if $spdtype=='free'}--> selected<!--{/if}-->>free</option>
		  <option value="standard"<!--{if $spdtype=='standard'}--> selected<!--{/if}-->>standard</option>
		</select>
		&nbsp;&nbsp;
	    <label>网址：</label>
		<input type="text" id="ssiteurl" name="ssiteurl" class="input-150" value="<!--{$ssiteurl}-->" />
		&nbsp;&nbsp;
		<label>排序：</label>
		<select name="sorder" id="sorder">
		  <option value="">默认</option>
		  <option value="id"<!--{if $sorder=='id'}--> selected<!--{/if}-->>ID</option>
		  <option value="login"<!--{if $sorder=='login'}--> selected<!--{/if}-->>最后登录时间</option>
		</select>
		&nbsp;&nbsp;
		<input type="submit" class="button_s" value=" 搜 索 " />
	  </div>
	  </form>
	</div>

	<form action="<!--{$cpfile}-->?c=loginlogs&a=del" method="post" name="myform" id="myform" style="margin:0">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="18%"><div class="th-gap">网址</div></th>
		<th width="10%"><div class="th-gap">产品</div></th>
		<th width="8%"><div class="th-gap">类型</div></th>
		<th width="10%"><div class="th-gap">版本</div></th>
		<th width="11%"><div class="th-gap">创建日期</div></th>
		<th width="11%"><div class="th-gap">服务器IP</div></th>
		<th width="11%"><div class="th-gap">请求IP</div></th>
		<th width="11%"><div class="th-gap">请求时间</div></th>
		<th><div class="th-gap">请求次数</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <!--{foreach $loginlogs as $volist}-->
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td><!--{$volist.siteurl}--></td>
		<td><!--{$volist.pdname}--></td>
		<td><!--{$volist.pdtype}--></td>
		<td><!--{$volist.pdversion}--> <!--{$volist.pdrelease}--></td>
		<td align="center" title="<!--{$volist.addtime|date_format:"%H:%M:%S"}-->"><!--{$volist.addtime|date_format:"%Y-%m-%d"}--></td>
		<td><!--{$volist.serverip}--></td>
		<td><!--{$volist.lastip}--></td>
		<td align="center" title="<!--{$volist.lasttime|date_format:"%H:%M:%S"}-->"><!--{$volist.lasttime|date_format:"%Y-%m-%d"}--></td>
		<td align="center"><!--{$volist.logintimes}--></td>
		
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

<!--{assign var='pluginevent' value=XHook::doAction('adm_footer')}-->
</body>
</html>
