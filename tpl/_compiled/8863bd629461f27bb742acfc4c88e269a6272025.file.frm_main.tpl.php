<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:15:48
         compiled from "/var/www/html/snowinmay/tpl/admincp/frm_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:774566967553f4fc46fe8d7-43418919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8863bd629461f27bb742acfc4c88e269a6272025' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/admincp/frm_main.tpl',
      1 => 1396494932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '774566967553f4fc46fe8d7-43418919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'cppath' => 0,
    'count' => 0,
    'sysdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f4fc4736d86_72924591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f4fc4736d86_72924591')) {function content_553f4fc4736d86_72924591($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_filterhtml')) include '/var/www/html/snowinmay/source/core/smarty/plugins/modifier.filterhtml.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>首页</title>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cppath']->value;?>
css/admin.css" media="screen" />
</head>
<body>
<div class="main-wrap">
<div class="path">
  <p>当前位置：管理首页<span></span></p>
</div>
<div class="main-cont" style="overflow:hidden;">
  <h3 class="title">产品服务</h3>
  <div class="box">
    <div class="btn-group clear">
	  <a class="btn-general" href="http://www.oephp.com/" target="_blank"><span>OEcms官方网站</span></a>
	  <a class="btn-general" href="http://bbs.phpcoo.com/" target="_blank"><span>技术论坛</span></a>
	  <a class="btn-general" href="http://www.oephp.com/about/2.html" target="_blank"><span>联系客服</span></a>
	  <a class="btn-general" href="mailto:phpcoo@qq.com"><span>意见反馈</span></a>
	  <a class="btn-general" href="http://demo.oephp.com/" target="_blank"><span>在线演示</span></a>
	</div>
  </div>

  <h3 class="title">官方最新动态</h3>
  <div class="box">
    <ul class="news-item" id="news">
	  <script language="javascript" src="http://www.phpcoo.com/data/include/oecms.php"></script>
	</ul>
  </div>

  <h3 class="title" style='display:block;'>网站基本数据</h3>
  <div class="box" style="display:block;width:700px;">
    <ul class="data-item">
	  <li>文章模型：<span><?php echo $_smarty_tpl->tpl_vars['count']->value['article'];?>
</span></li>
	  <li>产品模型：<span><?php echo $_smarty_tpl->tpl_vars['count']->value['product'];?>
</span></li>
	  <li>图库模型：<span><?php echo $_smarty_tpl->tpl_vars['count']->value['photo'];?>
</span></li>
	</ul>
	<ul class="data-item">
	  <li>下载模型：<span><?php echo $_smarty_tpl->tpl_vars['count']->value['download'];?>
</span></li>
	  <li>招聘模型：<span><?php echo $_smarty_tpl->tpl_vars['count']->value['hr'];?>
</span></li>
	  <li>单页模型：<span><?php echo $_smarty_tpl->tpl_vars['count']->value['about'];?>
</span></li>
	</ul>
  </div>

  <div style="clear:both;"></div>

  <h3 class="title" style='display:block;'>服务器信息</h3>
  <div class="box" style="width:100%;overflow:hidden;">
	<ul class="group-item">
	  <li>服务器IP：<span><?php echo $_smarty_tpl->tpl_vars['sysdata']->value['serverip'];?>
</span></li>
	  <li>客户端IP：<span><?php echo $_smarty_tpl->tpl_vars['sysdata']->value['clientip'];?>
</span></li>
	  <li>操作系统：<span><?php echo $_smarty_tpl->tpl_vars['sysdata']->value['os'];?>
</span></li>
	</ul>

	<ul class="group-item">
	  <li>web引擎：<span><?php echo smarty_modifier_filterhtml($_smarty_tpl->tpl_vars['sysdata']->value['webengine'],30);?>
</span></li>
	  <li>PHP版本：<span><?php echo $_smarty_tpl->tpl_vars['sysdata']->value['phpversion'];?>
</span></li>
	  <li>curl支持：<span><?php echo $_smarty_tpl->tpl_vars['sysdata']->value['curl'];?>
</span></li>
	</ul>

	<ul class="group-item">
	  <li>GD版本：<span><?php echo $_smarty_tpl->tpl_vars['sysdata']->value['gd'];?>
</span></li>
	  <li>iconv支持：<span><?php echo $_smarty_tpl->tpl_vars['sysdata']->value['iconv'];?>
</span></li>
	  <li>url fopen：<span><?php echo $_smarty_tpl->tpl_vars['sysdata']->value['urlopen'];?>
</span></li>
	</ul>
  </div>

</div>
<div style="clear:both;"></div>
</div>
</body>
</html><?php }} ?>