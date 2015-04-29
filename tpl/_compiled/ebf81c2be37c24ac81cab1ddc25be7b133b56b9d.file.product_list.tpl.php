<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:35:32
         compiled from "/var/www/html/snowinmay/tpl/templets/default/product_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:344552954553f5464096506-92048785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebf81c2be37c24ac81cab1ddc25be7b133b56b9d' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/templets/default/product_list.tpl',
      1 => 1380012152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '344552954553f5464096506-92048785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplpath' => 0,
    'config' => 0,
    'thepath' => 0,
    'product' => 0,
    'volist' => 0,
    'skinpath' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f5464108dd7_36029373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f5464108dd7_36029373')) {function content_553f5464108dd7_36029373($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/snowinmay/source/core/smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/snowinmay/source/core/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="wrap">
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value)."block_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value)."block_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <div id="web">
    <div id="left">

      <h3 class="title"><span><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['siteurl'];?>
">首 页</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['thepath']->value;?>
</span></h3>
	  <div class="webcontent">
	    <div id="product-list">
		  
		  <div id="plug2">
		    <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
		    <dl style="height:165px;">
			  <dt style="width:158px;">
			    <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['volist']->value['productname'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['thumbfiles'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['volist']->value['productname'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['volist']->value['productname'];?>
" onload="javascript:DrawImage(this,'150','150');" /></a>
			  </dt>
			  <dd style="width:167px;">
			    <ul>
				  <li><b>名称 : </b><span class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['volist']->value['productname'];?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['volist']->value['productname'],15,0,"utf-8");?>
</a></span></li>
				  <li><b>编号 : </b><span><?php echo $_smarty_tpl->tpl_vars['volist']->value['productsn'];?>
</span></li>
				  <li><b>分类 : </b><span><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['caturl'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['catname'];?>
</a></span></li>
				  <li><b>日期 : </b><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],'%Y-%m-%d');?>
</span></li>
				</ul>
				<div class="detail"><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" title="详细介绍" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
images/picd.gif" title="详细介绍" alt="详细介绍" /></a></div>
			  </dd>
			</dl>
			<?php } ?>
		  
		  </div><!-- #plug2 //-->
		  <div style="clear:both;"></div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['showpage']->value!=''){?>
		<div class="clear"></div>
		<div class="pagecode"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div> 
		<?php }?>	  
	  </div><!-- $webcontent //-->
	
	</div><!-- #left //-->

    <div id="right">
	  <h3 class="title"><span>产品分类</span></h3>
	  <div class="webnav"> 
	  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value)."block_productcat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	  </div><!-- $webnav -->
      <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value)."block_newnews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
      <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value)."block_contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
	</div><!-- $right //-->

    <div style="clear:both;"></div>
  </div>

  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
js/screen.js"></script>
</body>
</html><?php }} ?>