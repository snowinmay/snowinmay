<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:35:32
         compiled from "/var/www/html/snowinmay/tpl/templets/default/block_newnews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:528808215553f546415ab19-73603676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a38075aae54814b49449a4767ee268c1064b9015' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/templets/default/block_newnews.tpl',
      1 => 1335792749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '528808215553f546415ab19-73603676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'newnews' => 0,
    'volist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f546416e374_08789605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f546416e374_08789605')) {function content_553f546416e374_08789605($_smarty_tpl) {?>      <h3 class="title line">
	    <?php echo hook_get_category(array('name'=>'news','class'=>'more','title'=>'More'),$_smarty_tpl);?>

		<span>最新动态</span>
	  </h3>
	  <ul class="list">
	    <?php $_smarty_tpl->tpl_vars['newnews'] = new Smarty_variable(vo_list("mod={article} where={v.treeid='1'} num={10}"), null, 0);?>
	    <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newnews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['sort_title'];?>
</a></li>
		<?php } ?>
      </ul><?php }} ?>