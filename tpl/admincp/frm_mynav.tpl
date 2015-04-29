<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="<!--{$page_charset}-->">
<title>my nav</title>
<link rel="stylesheet" href="<!--{$cppath}-->css/menu.css" type="text/css" /> 
<script type="text/javascript" src="<!--{$urlpath}-->tpl/static/js/jquery.min.js"></script>
<script type="text/javascript" src="<!--{$cppath}-->js/menu.js"></script>
</head>
<body style="overflow-x:hidden;">
<div id="accordion2">
  <div class="left_home">
    <i class="lico1"></i><h3><a href="<!--{$cpfile}-->?c=mynav" target='main'>我的导航</a></h3>
    <div class="c"></div>
  </div>
  
  <ul class="switchable-p">
    <a id="mynav-0" href="<!--{$cpfile}-->?c=mynav&a=add" target='main' class="current" onclick="menu(0);"><i class="mico1"></i>添加导航</a>
	<!--{foreach $mynav as $volist}-->
	<a id="mynav-<!--{$volist.id}-->" href="<!--{$volist.url}-->" target='main' onclick="menu(<!--{$volist.id}-->);"><i class="mico<!--{$volist.icon}-->"></i><!--{$volist.name}--></a>
	<!--{/foreach}-->
  </ul>
</div>
</body>
</html>

<script language="javascript">
function menu(id) {
	$(".switchable-p a").removeClass("current");
	$("#mynav-"+id).addClass("current");
}
</script>
