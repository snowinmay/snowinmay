<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:16:10
         compiled from "/var/www/html/snowinmay/tpl/admincp/skin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1420140882553f4fda7ddd58-72228341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5de61cae23a0d5d348bda8dcb698122108b83dae' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/admincp/skin.tpl',
      1 => 1396230332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1420140882553f4fda7ddd58-72228341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'usingskin' => 0,
    'skin' => 0,
    'volist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f4fda831b18_40067633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f4fda831b18_40067633')) {function content_553f4fda831b18_40067633($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>主题模板</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：界面模板<span>&gt;&gt;</span>主题模板</p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=skin&a=style" class="btn-general"><span>配置界面风格</span></a>正在使用的主题模板</h3>

    <table cellspacing="10" cellpadding="0" width="80%" border="0">
      <tr>
        <td width="27%">
		<img src="<?php echo $_smarty_tpl->tpl_vars['usingskin']->value['preview'];?>
" width="240" height="180"  border="1" />	  
		</td>
		<td width="73%" style="line-height:25px;">
	    <?php echo $_smarty_tpl->tpl_vars['usingskin']->value['tplname'];?>
 <em><?php echo $_smarty_tpl->tpl_vars['usingskin']->value['version'];?>
</em><br>
	    <?php echo $_smarty_tpl->tpl_vars['usingskin']->value['author'];?>
<br>
	    <?php echo $_smarty_tpl->tpl_vars['usingskin']->value['forversion'];?>
<br>
		<?php echo $_smarty_tpl->tpl_vars['usingskin']->value['lastupdate'];?>
<br />
	    <p><?php echo $_smarty_tpl->tpl_vars['usingskin']->value['desc'];?>
</p>
	    </td>
      </tr>
    </table>

	<h3 class="title">主题模板库</h3>
	
	<table cellspacing="10" cellpadding="5" width="80%" border="0">
	  <tr>      
	    
		<?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
		<td align="center" width="33%" style='line-height:28px;border-bottom:1px dashed #999999;'>
		  <a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=skin&a=usetpl&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['tpldir'];?>
" onClick="{if(confirm('确定使用[<?php echo $_smarty_tpl->tpl_vars['volist']->value['tplname'];?>
]模板？')){return true;} return false;}">
		  <img alt="点击使用该模板" src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['preview'];?>
" width="180" height="150" border="0" /></a><br />
		  <?php echo $_smarty_tpl->tpl_vars['volist']->value['tplname'];?>
<span>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=skin&a=del&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['tpldir'];?>
" onClick="{if(confirm('确定要删除该模板吗？一旦删除无法恢复！')){return true;} return false;}">删除</a></span>
        </td>

		<?php if ($_smarty_tpl->tpl_vars['volist']->value['i']%3==0){?>
		</tr>
		<tr>
		<?php }?>
		<?php } ?>
	  
	  </tr>
	</table>



  </div>
</div>
<?php }?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_footer'), null, 0);?>
</body>
</html>
<?php }} ?>