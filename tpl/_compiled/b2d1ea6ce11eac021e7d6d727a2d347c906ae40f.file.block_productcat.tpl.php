<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:35:32
         compiled from "/var/www/html/snowinmay/tpl/templets/default/block_productcat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66535379553f546412f945-62178652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2d1ea6ce11eac021e7d6d727a2d347c906ae40f' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/templets/default/block_productcat.tpl',
      1 => 1335793285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66535379553f546412f945-62178652',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rootid' => 0,
    'treeproduct' => 0,
    'parent' => 0,
    'child' => 0,
    'skinpath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f5464155c05_68100312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f5464155c05_68100312')) {function content_553f5464155c05_68100312($_smarty_tpl) {?>	    <div id="web-sidebar">
		  <?php $_smarty_tpl->tpl_vars['treeproduct'] = new Smarty_variable(vo_category("type={treecat} rootid={".((string)$_smarty_tpl->tpl_vars['rootid']->value)."}"), null, 0);?>
		  <?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['treeproduct']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value){
$_smarty_tpl->tpl_vars['parent']->_loop = true;
?>
		  <dl>
		    <dt class="part2" id="part1-id<?php echo $_smarty_tpl->tpl_vars['parent']->value['catid'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['parent']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent']->value['catname'];?>
</a></dt>
			<dd class="part3dom">
			  <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parent']->value['childcatgory']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
			  <h4 class="part3" id="part2-id<?php echo $_smarty_tpl->tpl_vars['child']->value['catid'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['child']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['catname'];?>
</a></h4>
			  <?php } ?>
			</dd>
		  </dl>	
		  <?php } ?>
		</div>
		<!-- #web-sidebar //-->
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
js/sidebar.js"></script><?php }} ?>