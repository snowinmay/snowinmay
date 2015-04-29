<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:45:16
         compiled from "/var/www/html/snowinmay/tpl/templets/default/product_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58624751553f56ac292ea5-46189696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bec8bdb9c7380d987dace39082d652e94572a3be' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/templets/default/product_detail.tpl',
      1 => 1380013310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58624751553f56ac292ea5-46189696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplpath' => 0,
    'config' => 0,
    'thepath' => 0,
    'product' => 0,
    'skinpath' => 0,
    'val' => 0,
    'catinfo' => 0,
    'urlpath' => 0,
    'previous_item' => 0,
    'next_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f56ac32e753_73759907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f56ac32e753_73759907')) {function content_553f56ac32e753_73759907($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/snowinmay/source/core/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="wrap">
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value)."block_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value)."block_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <style type="text/css">.other {width: 60px;padding-right: 6px;padding-left:2px;}</style>
  <div id="web">
    <div id="left">
	  <h3 class="title"><span><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['siteurl'];?>
">首 页</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['thepath']->value;?>
</span></h3>
	  <div class="webcontent">
	    <div id="showproduct">
		  <dl>
		    <dt style="width:364px;">
			  
			  <?php if ($_smarty_tpl->tpl_vars['product']->value['uploadfiles']!=''){?>
			  <span class='info_img' id='imgqwe'><a id='view_bigimg' href='<?php echo $_smarty_tpl->tpl_vars['product']->value['uploadfiles'];?>
' title="查看大图" target='_blank'>
              <img id='view_img' border='0' style="width:350px; height:200px"   onload="javascript:DrawImage(this,'350','200');" src='<?php echo $_smarty_tpl->tpl_vars['product']->value['uploadfiles'];?>
'></a></span>
			  <script type='text/javascript'>var zoomImagesURI   = '<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
images/zoom/';</script>
			  <script src='<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
js/zoom.js' language='javascript' type='text/javascript'></script>
			  <script src='<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
js/zoomhtml.js' language='javascript' type='text/javascript'></script>
			  <script type='text/javascript'>	window.onload==setupZoom();	</script>
			  <?php }else{ ?>
			  <span class='info_img'><img id='view_img' border='0' onload="javascript:DrawImage(this,'350','200');" src='<?php echo $_smarty_tpl->tpl_vars['product']->value['thumbfiles'];?>
'></span>
			  <?php }?>
			  <div style="padding-top:5px;"></div>
              <span class='other' onmouseover="changepic('<?php echo $_smarty_tpl->tpl_vars['product']->value['uploadfiles'];?>
')"><img  border='0' width="50" height="50" src='<?php echo $_smarty_tpl->tpl_vars['product']->value['thumbfiles'];?>
'></span>
              <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gallery'])){?>
               <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['gallery']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
              <span class='other' onmouseover="changepic('<?php echo $_smarty_tpl->tpl_vars['val']->value['imgurl'];?>
')"><img  border='0' width="50" height="50" src='<?php echo $_smarty_tpl->tpl_vars['val']->value['imgthumb'];?>
'></span>
              <?php } ?>
              <?php }?>
			</dt>
			
			<dd style="width:326px;">
			  <ul class="list">
			    <li class="title"><h1>名称 ：<span><?php echo $_smarty_tpl->tpl_vars['product']->value['productname'];?>
</span></h1></li>
				<li><b>编号 : </b><span><?php echo $_smarty_tpl->tpl_vars['product']->value['productsn'];?>
</span></li>
				<li><b>分类 : </b><span><a href="<?php echo $_smarty_tpl->tpl_vars['catinfo']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['catinfo']->value['catname'];?>
</a></span></li>
				<li><b>日期 : </b><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['addtime'],'%Y-%m-%d');?>
</span></li>
                <li><b>价格 : </b><span><?php echo $_smarty_tpl->tpl_vars['product']->value['bprice'];?>
</span></li>
				<li class="description"><span></span></li>
			  </ul>
			  <div class="feedback"><a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php if ($_smarty_tpl->tpl_vars['config']->value['urlsuffix']=='html'){?>guestbook/<?php }else{ ?>index.php?c=guestbook<?php }?>">在线留言</a></div>
			</dd>
		  </dl>
		  
		  <div style="clear:both;"></div>
		  <h3 class="hr"><span>详细介绍</span></h3>
		  <div class="text editor">
		    <?php echo $_smarty_tpl->tpl_vars['product']->value['content'];?>

			<br />
		    <?php $_smarty_tpl->tpl_vars['pluginaction'] = new Smarty_variable(XHook::doAction('content_share'), null, 0);?>
		  </div>
		  <div class="hits">点击次数：<span><?php echo $_smarty_tpl->tpl_vars['product']->value['hits'];?>
</span>&nbsp;&nbsp;发布日期：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['addtime'],"%Y/%m/%d");?>
&nbsp;&nbsp;【<a href='javascript:window.print();'>打印此页</a>】&nbsp;&nbsp;【<a href='javascript:self.close()'>关闭</a>】</div>
		  
		  <div class="page">上一篇：<?php echo $_smarty_tpl->tpl_vars['previous_item']->value;?>
<br>下一篇：<?php echo $_smarty_tpl->tpl_vars['next_item']->value;?>
</div>
		</div>
      </div>

    </div><!-- $left //-->
    
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
</html>
<script language="javascript">
function changepic(val){
	$("#view_img").attr("src",val);
	$("#view_bigimg").attr("href",val)
}
</script><?php }} ?>