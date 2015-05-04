<?php /* Smarty version Smarty-3.1.14, created on 2015-05-04 11:29:29
         compiled from "../tpl/templets/default/works.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6525224385540d11955c749-36006043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cee113175636dad3481586ce240516756dad6da' => 
    array (
      0 => '../tpl/templets/default/works.tpl',
      1 => 1430703788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6525224385540d11955c749-36006043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5540d1195efe19_61586920',
  'variables' => 
  array (
    'Name' => 0,
    'categories' => 0,
    'temp' => 0,
    'works' => 0,
    'temp2' => 0,
    'time_now' => 0,
    'time_diff' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5540d1195efe19_61586920')) {function content_5540d1195efe19_61586920($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Keywords" content="">
<meta name="description" content="记录工作，生活，学习中的网页作品！">
<title>网页作品 - snowinmay</title>
<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,user-scalable=no">
<link rel="stylesheet" type="text/css" href="/snowinmay/media/works.css">
</head>
<body style="zoom: 1;   background-color: #fff;">
<div id="content">
    <div class="guide">
        <div class="wrapper">
            <nav class="site-list">
                <a class="item" href="http://www.snowinmay.net/" target="_blank">主页</a>
                <a class="item" href="http://snowinmay.net/blog" target="_blank">博客</a>
                <a class="item" href="http://www.cnblogs.com/snowinmay/" target="_blank">北京之旅</a>
                <a class="item" href="http://weibo.com/123114623/home?wvr=5" target="_blank">微博</a>          
            </nav>
        </div>
    </div>
  <div class="wrapper">
    <div id="catalog">
      <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>

    <?php  $_smarty_tpl->tpl_vars['temp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['temp']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['temp']->key => $_smarty_tpl->tpl_vars['temp']->value){
$_smarty_tpl->tpl_vars['temp']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['temp']->key;
?>
    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['temp']->value['treeid'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?>
    <section data-catalog="<?php echo $_smarty_tpl->tpl_vars['temp']->value['asname'];?>
"><!--<?php echo $_smarty_tpl->tpl_vars['temp']->value['catname'];?>
-->
      <header>
          <h2 class="icon-<?php echo $_smarty_tpl->tpl_vars['temp']->value['asname'];?>
"><?php echo $_smarty_tpl->tpl_vars['temp']->value['catname'];?>
</h2>
       </header>
       <ul class="website-list">        
           <?php  $_smarty_tpl->tpl_vars['temp2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['temp2']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['works']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['temp2']->key => $_smarty_tpl->tpl_vars['temp2']->value){
$_smarty_tpl->tpl_vars['temp2']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['temp2']->key;
?>
           <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['temp2']->value['catid']==$_smarty_tpl->tpl_vars['temp']->value['catid'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>
          <li <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['temp2']->value['istop']==1;?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['time_now']->value-$_smarty_tpl->tpl_vars['temp2']->value['addtime']<$_smarty_tpl->tpl_vars['time_diff']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp3&&$_tmp4){?>
            class="new-item"
            <?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['temp2']->value['istop']==1;?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5){?>
            class="hot-item"
            <?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['time_now']->value-$_smarty_tpl->tpl_vars['temp2']->value['addtime']<$_smarty_tpl->tpl_vars['time_diff']->value;?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6){?>
            class="new-item"
            <?php }}}?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['temp2']->value['metadescription'];?>
" class="website" target="_blank"><?php echo $_smarty_tpl->tpl_vars['temp2']->value['productname'];?>
</a>
            <p class="description"><?php echo $_smarty_tpl->tpl_vars['temp2']->value['summary'];?>
 </p>
          </li>
           <?php }?>
          <?php } ?>
        </ul>
    </section>
    <?php }?>
    <?php } ?>
    </div>
  </div>
</div>
<footer id="footer">
    <div class="wrapper">
        <nav id="nav">
            <a href="http://www.snowinmay.net/" target="_blank">主页</a>
            <a href="http://blog.snowinmay.net/" target="_blank">博客</a>
            <a href="http://www.cnblogs.com/snowinmay/" target="_blank">北京之旅</a>
            <a href="http://weibo.com/123114623/home?wvr=5" target="_blank">微博</a>    
        </nav>   
        <div id="copyright"><span>Copyright © 2014</span> <span>本网站模版设计及制作都来自网络，特此声明。</span></div>
    </div>
</footer>
</body>
</html><?php }} ?>