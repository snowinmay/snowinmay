<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:15:52
         compiled from "/var/www/html/snowinmay/tpl/templets/default/block_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1514508323553f4fc8ab3c00-07276313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ede5788f076262506d98c6cee06d87e50d43600d' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/templets/default/block_top.tpl',
      1 => 1380012904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1514508323553f4fc8ab3c00-07276313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'mymenu' => 0,
    'parent' => 0,
    'child' => 0,
    'urlpath' => 0,
    'type' => 0,
    'keyword' => 0,
    'skinpath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f4fc8af9347_25154670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f4fc8af9347_25154670')) {function content_553f4fc8af9347_25154670($_smarty_tpl) {?>  <div id="top">
	<div class="sidebar">
	  <div class="lang">
        <a href="###" onclick="addfavorite('<?php echo $_smarty_tpl->tpl_vars['config']->value['sitename'];?>
', '<?php echo $_smarty_tpl->tpl_vars['config']->value['siteurl'];?>
');">添加收藏</a>
        <span>|</span>
	    <a href="###" onclick="sethomepage(this, window.location);">设为主页</a>
	  </div>
	  <h1><?php echo hook_get_label(array('name'=>'toptips'),$_smarty_tpl);?>
</h1>
	</div>		 
	<a><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['logo'];?>
" style="margin-top:5px; margin-left:5px;"/></a>
  </div><!-- #top //-->
  
  <div id="head">		 
    <ul id="nav" style=" width:780px;">
	  <li class="home"></li>
	  <?php $_smarty_tpl->tpl_vars['mymenu'] = new Smarty_variable(vo_category("type={sedmenu}"), null, 0);?>
	  <?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mymenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value){
$_smarty_tpl->tpl_vars['parent']->_loop = true;
?>
	  <li class="class1" id="nav_<?php echo $_smarty_tpl->tpl_vars['parent']->value['catid'];?>
">
	  <?php if ($_smarty_tpl->tpl_vars['parent']->value['url']==''){?>
	  <a><?php echo $_smarty_tpl->tpl_vars['parent']->value['catname'];?>
</a>
	  <?php }else{ ?>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['parent']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent']->value['catname'];?>
</a>
	  <?php }?>
	  <?php if (!empty($_smarty_tpl->tpl_vars['parent']->value['childmenu'])){?>
	    <ul style="display:none;">
		  <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parent']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
	      <li><a href="<?php echo $_smarty_tpl->tpl_vars['child']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['catname'];?>
</a></li>
		  <?php } ?>
	    </ul>
	  <?php }?>
	  </li>
	  <li class="line"></li> 
	  <?php } ?>
	</ul>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=search" name="myform" id="myform" onsubmit="return checksearch();" />
	<div class="search">
	  <h3></h3>
	  <ul>
	    <li>
		<select name="type" id="type">
		<option value="product"<?php if ($_smarty_tpl->tpl_vars['type']->value=='product'){?> selected<?php }?>>&nbsp;产品&nbsp;</option>
		<option value="photo"<?php if ($_smarty_tpl->tpl_vars['type']->value=='photo'){?> selected<?php }?>>&nbsp;图库&nbsp;</option>
		<option value="article"<?php if ($_smarty_tpl->tpl_vars['type']->value=='article'){?> selected<?php }?>>&nbsp;文章&nbsp;</option>
		<option value="download"<?php if ($_smarty_tpl->tpl_vars['type']->value=='download'){?> selected<?php }?>>&nbsp;下载&nbsp;</option>
		<option value="hr"<?php if ($_smarty_tpl->tpl_vars['type']->value=='hr'){?> selected<?php }?>>&nbsp;招聘&nbsp;</option>
		</select>
		<span class='parasearch_input'><input type='text' name='keyword' id="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" /></span>
		</li>
		<li><span class='parasearch_search'><input class='searchimage' type='image' src='<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
images/navserach.gif' /></span></li>
	  </ul>
	</div>
	</form>
	<div class="clear"></div>
  </div>
<script language="javascript">
function checksearch(){
	if($("#type").val()==""){
		alert("请选择搜索频道.");
		return false;
	}
	if($("#keyword").val()==""){
		alert("关键字不能为空.");
		return false;
	}	
}
</script><?php }} ?>