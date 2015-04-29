<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:15:52
         compiled from "/var/www/html/snowinmay/tpl/templets/default/block_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1051829378553f4fc8a97285-15609716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83c26e7dbeafa1708440f75ba5e9481c691b091a' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/templets/default/block_header.tpl',
      1 => 1384822772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1051829378553f4fc8a97285-15609716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'page_title' => 0,
    'copyright_header' => 0,
    'page_description' => 0,
    'page_keyword' => 0,
    'skinpath' => 0,
    'urlpath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f4fc8ab1ab1_68516675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f4fc8ab1ab1_68516675')) {function content_553f4fc8ab1ab1_68516675($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['copyright_header']->value;?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['page_description']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['page_keyword']->value;?>
" />
<meta name="author" content="OEdev" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
style/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
style/css.css" />
<script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/js/public.js'></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
js/downnav.js" language="javascript" type="text/javascript"></script>
<!--[if IE 6]>
<script src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/js/DD_belatedPNG-min.js" language="javascript" type="text/javascript"></script>
<script type="text/javascript">
DD_belatedPNG.fix('.bg,img'); 
</script>
<![endif]-->
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('index_head'), null, 0);?>
</head>
<body>
<?php }} ?>