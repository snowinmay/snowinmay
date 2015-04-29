<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:15:52
         compiled from "/var/www/html/snowinmay/tpl/templets/default/block_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167068119553f4fc8b6faf3-22768830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59b4e985311943b8dd243b123b477dcef63a9f70' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/templets/default/block_footer.tpl',
      1 => 1360050351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167068119553f4fc8b6faf3-22768830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'submenu' => 0,
    'volist' => 0,
    'config' => 0,
    'copyright_poweredby' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f4fc8ba5254_56505513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f4fc8ba5254_56505513')) {function content_553f4fc8ba5254_56505513($_smarty_tpl) {?>  <div id="footer">
    <div class="nav">
	<?php $_smarty_tpl->tpl_vars['submenu'] = new Smarty_variable(vo_category("type={submenu}"), null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['submenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['catname'];?>
</a>&nbsp;&nbsp;
	<?php } ?>
	</div>
	<div class="text">
	  <div class="powered_by_oecms">
	    <?php echo $_smarty_tpl->tpl_vars['config']->value['site_footer'];?>
<br />
		<?php if ($_smarty_tpl->tpl_vars['config']->value['icpcode']!=''){?><?php echo $_smarty_tpl->tpl_vars['config']->value['icpcode'];?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['copyright_poweredby']->value;?>
&nbsp;&nbsp;
		&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['config']->value['tjcode']!=''){?><?php echo $_smarty_tpl->tpl_vars['config']->value['tjcode'];?>
<?php }?>
	  </div>
	</div>
  </div>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('event_runtime'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('event_online'), null, 0);?><?php }} ?>