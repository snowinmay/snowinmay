<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:16:18
         compiled from "/var/www/html/snowinmay/tpl/admincp/frm_mynav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1915584510553f4fe239cb97-59181447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a3a4bda172de19c93a8f28c4831363ececd0e49' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/admincp/frm_mynav.tpl',
      1 => 1396259898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1915584510553f4fe239cb97-59181447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cppath' => 0,
    'urlpath' => 0,
    'cpfile' => 0,
    'mynav' => 0,
    'volist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f4fe23d1ee2_63366274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f4fe23d1ee2_63366274')) {function content_553f4fe23d1ee2_63366274($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
">
<title>my nav</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cppath']->value;?>
css/menu.css" type="text/css" /> 
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cppath']->value;?>
js/menu.js"></script>
</head>
<body style="overflow-x:hidden;">
<div id="accordion2">
  <div class="left_home">
    <i class="lico1"></i><h3><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=mynav" target='main'>我的导航</a></h3>
    <div class="c"></div>
  </div>
  
  <ul class="switchable-p">
    <a id="mynav-0" href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=mynav&a=add" target='main' class="current" onclick="menu(0);"><i class="mico1"></i>添加导航</a>
	<?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mynav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	<a id="mynav-<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" target='main' onclick="menu(<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
);"><i class="mico<?php echo $_smarty_tpl->tpl_vars['volist']->value['icon'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['volist']->value['name'];?>
</a>
	<?php } ?>
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
<?php }} ?>