<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<!--{$page_charset}-->" />
<title>footer</title>
<link rel="stylesheet" type="text/css" href="<!--{$cppath}-->css/footer.css" />
<!--{include file="<!--{$cptplpath}-->headerjs.tpl"}-->
</head>
<body>
<div class="footer">
<table width="98%" border="0" cellpadding="0" cellspacing="0" align="left">
  <tr>
    <td align="left" style="padding-left:10px;width:260px;"><!--{$copyright_poweredby}--> Version <!--{$copyright_version}--><!--{$copyright_release}--></td>
	<td align="left">快捷操作：
	<a href="<!--{$cpfile}-->?c=category" target="main">栏目设置</a>&nbsp;|&nbsp;
	<a href="<!--{$cpfile}-->?c=module" target="main">模型设置</a>&nbsp;|&nbsp;
	<a href="<!--{$cpfile}-->?c=admin&a=editpassword" target="main">修改密码</a>&nbsp;|&nbsp;
	<a href="<!--{$cpfile}-->?c=setting&a=clearcache" target='main'>清除页面缓存</a>&nbsp;|&nbsp;
	<a href="<!--{$cpfile}-->?c=setting&a=updatecache" target='main'>更新数据缓存</a>
	</td>
    <td style="text-align:right;padding-right:10px;" id="serial_tips"><a href="###" onclick="getSerial('serial_tips');">点击查询授权</a></td>
  </tr>
</table>
</div>	
</body>
</html>