<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:35:32
         compiled from "/var/www/html/snowinmay/tpl/templets/default/block_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:916136377553f546410f401-94923164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6af1e5d800e4d6c5f046786d34da16a4648d741' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/templets/default/block_banner.tpl',
      1 => 1360028083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '916136377553f546410f401-94923164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ads' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f546412ac32_62226382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f546412ac32_62226382')) {function content_553f546412ac32_62226382($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['ads'] = new Smarty_variable(get_ads('banner_001'), null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['ads']->value)){?>
	<div id="flash">
    <a <?php if (!empty($_smarty_tpl->tpl_vars['ads']->value['url'])&&$_smarty_tpl->tpl_vars['ads']->value['url']!='#'){?>href="<?php echo $_smarty_tpl->tpl_vars['ads']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['ads']->value['target'];?>
"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['ads']->value['uploadfiles'];?>
" width='<?php echo $_smarty_tpl->tpl_vars['ads']->value['width'];?>
' height='<?php echo $_smarty_tpl->tpl_vars['ads']->value['height'];?>
' border='0' title="<?php echo $_smarty_tpl->tpl_vars['ads']->value['title'];?>
" /></a>
	</div>
<?php }?><?php }} ?>