<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<!--{$page_charset}-->" />
<title>top</title>
<link rel="stylesheet" type="text/css" href="<!--{$cppath}-->css/top.css" />
<script type="text/javascript" src="<!--{$urlpath}-->tpl/static/js/jquery.min.js"></script>
<script type="text/javascript" src="<!--{$cppath}-->js/top.js"></script>
<!--[if lte IE 6]>
<script type='text/javascript' src='<!--{$urlpath}-->tpl/staticjs/DD_belatedPNG-min.js'></script>
<script language="javascript">DD_belatedPNG.fix('.logo');</script>
<![endif]-->
</head>
<body>
<div id="top">
  <div class="logo"></div>
  <div id="navs">
	<ul>
	  <li><a class="liico" href="<!--{$cpfile}-->?c=frame&a=left&mod=setting"><span class="liico1">系统设置</span></a></li>
	  <li><a href="<!--{$cpfile}-->?c=frame&a=left&mod=content"><span class="liico2">模块管理</span></a></li>
	  <li><a href="<!--{$cpfile}-->?c=frame&a=left&mod=skin"><span class="liico3">界面模板</span></a></li>
	  <li><a href="<!--{$cpfile}-->?c=frame&a=left&mod=app"><span class="liico4">插件应用</span></a></li>
	  <li><a href="<!--{$cpfile}-->?c=frame&a=mynav"><span class="liico5">我的导航</span></a></li>
	  <div class="c"></div>
	</ul>  
  </div>
  <div id="right">
    <p>
	欢迎回来：<!--{$adminname}-->&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="index.php" target="_blank">网站首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="<!--{$cpfile}-->?c=login&a=logout" target='_top'>退出登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="<!--{$cpfile}-->?c=setting&a=clearcache" target='main'>清除页面缓存</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="<!--{$cpfile}-->?c=setting&a=updatecache" target='main'>更新数据缓存</a>

	</p>
  </div>
  <div style="clear:both;"></div>
</div>
</body>
</html>