<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:35:32
         compiled from "/var/www/html/snowinmay/tpl/templets/default/block_contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1663820154553f54641733c9-88532665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86491162d9849b943ae3be2216920d344d4adf82' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/templets/default/block_contact.tpl',
      1 => 1359945292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1663820154553f54641733c9-88532665',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f5464178a06_67469027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f5464178a06_67469027')) {function content_553f5464178a06_67469027($_smarty_tpl) {?>	  <h3 class="title line">
	  <?php echo hook_get_category(array('type'=>'url','name'=>'contactus','class'=>'more','title'=>'More'),$_smarty_tpl);?>

	  <span>联系方式</span></h3>
	  <div class="text">
	    <p><?php echo hook_get_label(array('name'=>'contact'),$_smarty_tpl);?>
</p>
      </div><?php }} ?>