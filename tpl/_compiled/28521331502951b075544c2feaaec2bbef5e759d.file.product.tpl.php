<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:33:17
         compiled from "/var/www/html/snowinmay/tpl/admincp/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1947133620553f53dd9ab1d1-01120019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28521331502951b075544c2feaaec2bbef5e759d' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/admincp/product.tpl',
      1 => 1396230332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1947133620553f53dd9ab1d1-01120019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'modtitle' => 0,
    'cpfile' => 0,
    'tid' => 0,
    'category_select' => 0,
    'sname' => 0,
    'product' => 0,
    'volist' => 0,
    'urlpath' => 0,
    'page' => 0,
    'urlitem' => 0,
    'total' => 0,
    'pagecount' => 0,
    'showpage' => 0,
    'timeline' => 0,
    'modattr' => 0,
    'comeurl' => 0,
    'id' => 0,
    'album' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f53ddbe0207_44675009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f53ddbe0207_44675009')) {function content_553f53ddbe0207_44675009($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/snowinmay/source/core/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>产品内容</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：模块管理<span>&gt;&gt;</span><?php echo $_smarty_tpl->tpl_vars['modtitle']->value;?>
<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=product&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
">内容列表</a></p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=product&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&a=add" class="btn-general"><span>添加内容</span></a><?php echo $_smarty_tpl->tpl_vars['modtitle']->value;?>
</h3>
	<div class="search-area ">
	  <form method="post" id="search_form" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=product&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
" />
	  <div class="item">
	    <label>分类：</label><?php echo $_smarty_tpl->tpl_vars['category_select']->value;?>
&nbsp;&nbsp;
		<label>名称：</label><input type="text" id="sname" name="sname" size="15" class="input-150" value="<?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
" />&nbsp;&nbsp;&nbsp;
		<input type="submit" class="button_s" value="搜 索" />
	  </div>
	  </form>
	</div>
	<form action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=product&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&a=del" method="post" name="myform" id="myform" style="margin:0">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="8%"><div class="th-gap">选择</div></th>
		<th width="12%"><div class="th-gap">分类</div></th>
		<th width="30%"><div class="th-gap">名称</div></th>
		<th width="8%"><div class="th-gap">浏览</div></th>
		<th width="6%"><div class="th-gap">图片</div></th>
		<th width="6%"><div class="th-gap">状态</div></th>
		<th width="6%"><div class="th-gap">推荐</div></th>
		<th width="11%"><div class="th-gap">发布时间</div></th>
		<th><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><input name="id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
" onClick="checkItem(this, 'chkAll')"><?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['volist']->value['catname'];?>
</td>
		<td align="left">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['linktype']==1){?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" target="_blank">
		<?php }else{ ?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['linkurl'];?>
" target="_blank">
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['volist']->value['productname'];?>
</a></td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['hits'];?>
</td>
		<td align="center">
		<?php if (!empty($_smarty_tpl->tpl_vars['volist']->value['thumbfiles'])){?>
		<font color="green">有</font>
		<?php }else{ ?>
		<font color="#999999">无</font>
		<?php }?>
		</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['flag']==0){?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
" value="flagopen" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
" value="flagclose" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
');" style="cursor:pointer;">	
		<?php }?>
        </td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['elite']==0){?>
			<input type="hidden" id="attr_elite<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
" value="eliteopen" />
			<img id="elite<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('elite','<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_elite<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
" value="eliteclose" />
			<img id="elite<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('elite','<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
');" style="cursor:pointer;">	
		<?php }?>
        </td>
		<td align="center" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],"%Y-%m-%d");?>
</td>
		<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=product&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
" class="icon-edit">编辑</a>&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=product&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['productid'];?>
" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="icon-del">删除</a></td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="9" align="center">暂无信息</td>
	  </tr>
	  <?php } ?>
	  <?php if ($_smarty_tpl->tpl_vars['total']->value>0){?>
	  <tr>
		<td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox"></td>
		<td class="hback" colspan="8"><input class="button" name="btn_del" type="button" value="删 除" onClick="{if(confirm('确定要删除吗？')){$('#myform').submit();return true;}return false;}" class="button">&nbsp;&nbsp;共[ <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> ]条记录</td>
	  </tr>
	  <?php }?>
	</table>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['pagecount']->value>1){?>
	<table width='95%' border='0' cellspacing='0' cellpadding='0' align='center' style="margin-top:10px;">
	  <tr>
		<td align='center'><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</td>
	  </tr>
	</table>
	<?php }?>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="add"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：模块管理<span>&gt;&gt;</span><?php echo $_smarty_tpl->tpl_vars['modtitle']->value;?>
<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=product&a=add&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
">添加内容</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=product&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
" class="btn-general"><span>返回列表</span></a>添加内容</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=product&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
" onsubmit='return checkform();' />
	<input type='hidden' name='a' id='a' value='saveadd' />
	<input type='hidden' name='treeid' id='treeid' value='<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
' />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width="15%">所属子分类 <span class='f_red'></span></td>
		<td class='hback' width="85%"><?php echo $_smarty_tpl->tpl_vars['category_select']->value;?>
 <span id="dcatid" class='f_red'></span>不选为默认，外部链接的分类不可选</td>
	  </tr>
	  <tr>
		<td class='hback_1'>编号 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="productsn" id="productsn" class="input-150" value="SN<?php echo $_smarty_tpl->tpl_vars['timeline']->value;?>
" /> <span id='dproductsn' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>名称 <span class="f_red">*</span> </td>
		<td class='hback'><input type="text" name="productname" id="productname" class="input-txt" /> <span id='dproductname' class='f_red'></span> 名称长度不能大于200个任意字符 </td>
	  </tr>
	  <tr>
		<td class='hback_1'>公开价格 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="oprice" id="oprice" class="input-100" />元 <span id='doprice' class='f_red'></span> （填写数字，最多2位小数）</td>
	  </tr>
	  <tr>
		<td class='hback_1'>购买价格 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="bprice" id="bprice" class="input-100" />元 <span id='dbprice' class='f_red'></span> （填写数字，最多2位小数）</td>
	  </tr>
	  <tr>
		<td class='hback_1'>图片地址 <span class="f_red"></span> </td>
		<td class='hback'>
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="uploadfiles" id="uploadfiles" class="input-txt"  /> <span id='duploadfiles' class='f_red'></span></td>
			  <td>
			  <iframe id='iframe_t' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=upload&formname=myform&module=product&uploadinput=uploadfiles&thumbinput=thumbfiles&multipart=sf_upload&previewid=previewsrc'></iframe>
			  </td>
			</tr>
		  </table>
		  上传图片只支持：gif,jpeg,jpg,png格式
	    </td>
	  </tr>
	  <tr>
		<td class='hback_1'>缩略图 <span class="f_red"></span> </td>
		<td class='hback'>
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="thumbfiles" id="thumbfiles" class="input-txt" /> (自动生成) <span id='dthumbfiles' class='f_red'></span> </td>
			  <td><span id="previewsrc"></span></td>
			</tr>
		  </table>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>简介 <span class="f_red"></span> </td>
		<td class='hback'><textarea name="summary" id="summary" style="width:50%;height:60px;overflow:auto;"></textarea>  <span id='dsummary' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>内容 <span class="f_red">*</span> </td>
		<td class='hback'>
		  <textarea name="content" id="content" style="width:95%;height:280px;display:none;"></textarea>
		  <script>var editor;KindEditor.ready(function(K) {editor = K.create('#content'); });</script>
		  <span id='dcontent' class='f_red'></span>
		</td>
	  </tr>

	  <?php if (!empty($_smarty_tpl->tpl_vars['modattr']->value)){?>
	  <tr>
		<td class='hback_yellow' colspan="2">扩展字段 </td>
	  </tr>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modattr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr>
		<td class='hback_1'><?php echo $_smarty_tpl->tpl_vars['volist']->value['typename'];?>
 
		<span class="f_red"><?php if ($_smarty_tpl->tpl_vars['volist']->value['isvalid']==1){?>*<?php }?></span> 
		</td>
		<td class='hback'>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='radio'||$_smarty_tpl->tpl_vars['volist']->value['inputtype']=='checkbox'||$_smarty_tpl->tpl_vars['volist']->value['inputtype']=='select'){?>
		<?php echo $_smarty_tpl->tpl_vars['volist']->value['attr_select'];?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='text'){?>
		<input type="text" name="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" id="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" class="input-<?php echo $_smarty_tpl->tpl_vars['volist']->value['attrwidth'];?>
" /> 
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='textarea'){?>
		<textarea name="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" id="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['volist']->value['attrwidth'];?>
%;height:<?php echo $_smarty_tpl->tpl_vars['volist']->value['attrheight'];?>
px;overflow:auto;"></textarea> 
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='img'){?>
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" id="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" class="input-txt" /></td>
			  <td>
			  <iframe id='iframe_attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=upload&formname=myform&module=product&uploadinput=attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
&multipart=sf_attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
'></iframe>
			  </td>
			</tr>
		  </table>
		  上传图片只支持：gif,jpeg,jpg,png格式
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='attchment'){?>
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" id="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" class="input-txt" /></td>
			  <td>
			  <iframe id='iframe_attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=upload&formname=myform&module=attchment&uploadinput=attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
&multipart=sf_attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
'></iframe>
			  </td>
			</tr>
		  </table>
		  上传文件只支持：rar, zip, tar, gz压缩格式
		<?php }?>


		<span id='dattr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
' class='f_red'></span>
		<?php echo $_smarty_tpl->tpl_vars['volist']->value['typeremark'];?>

		</td>
	  </tr>
	  <?php } ?>
	  <?php }?>

	  <tr>
		<td class='hback_yellow' colspan="2">SEO优化相关设置 </td>
	  </tr>
	  <tr>
		<td class='hback_1'>TAG标签 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="tags" id="tags" class="input-txt" /> 
		<span id='dtags' class='f_red'></span>
		(多个标签请用","隔开，会自动关联链接)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>Meta关键字 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="metakeyword" id="metakeyword" class="input-txt" /> <span id='dmetakeyword' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>Meta描述 <span class="f_red"></span> </td>
		<td class='hback'><textarea name="metadescription" id="metadescription" style="width:50%;height:60px;overflow:auto;"></textarea>  <span id='dmetadescription' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_yellow' colspan="2">其它附加设置 </td>
	  </tr>
	  <tr>
	    <td class='hback_1'>设置 <span class='f_red'></span></td>
		<td><input type="checkbox" name="istop" id="istop" value="1" />置顶，<input type="checkbox" name="elite" id="elite" value="1" />推荐</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>状态 <span class='f_red'></span></td>
		<td><input type="radio" name="flag" id="flag" value="1" checked />正常，<input type="radio" name="flag" id="flag" value="0" />锁定</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>发布时间 <span class='f_red'></span></td>
		<td><input type="text" name="addtime" id="addtime" class="input-150" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['timeline']->value,"%Y-%m-%d %H:%M:%S");?>
" /> <span id='daddtime' class='f_red'></span> 当前时间为：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['timeline']->value,"%Y-%m-%d %H:%M:%S");?>
 注意不要改变格式。</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>浏览次数 <span class='f_red'></span></td>
		<td><input type="text" name="hits" id="hits" class="input-s" /> <span id='dhits' class='f_red'></span> </td>
	  </tr>
	  <tr>
	    <td class='hback_1'>链接类型 <span class='f_red'></span></td>
		<td><input type="radio" name="linktype" id="linktype" value="1" checked />内部，<input type="radio" name="linktype" id="linktype" value="2" />外部 URL地址：<input type="text" name="linkurl" id="linkurl" class="input-txt" /> <span id='dlinkurl' class='f_red'></span> </td>
	  </tr>
	  <tr>
	    <td class='hback_1'>评论状态 <span class='f_red'></span></td>
		<td><input type="radio" name="iscomment" id="iscomment" value="1" checked />允许，<input type="radio" name="iscomment" id="iscomment" value="0" />禁止 <span id='discomment' class='f_red'></span> </td>
	  </tr>
	  <tr>
	    <td class='hback_1'>订购状态 <span class='f_red'></span></td>
		<td><input type="radio" name="isorder" id="isorder" value="1" />开启，<input type="radio" name="isorder" id="isorder" value="0" checked />关闭 <span id='discomment' class='f_red'></span> </td>
	  </tr>

	  <tr>
		<td class='hback_yellow' colspan="2">个性化设置 </td>
	  </tr>

	  <tr>
		<td class='hback_1'>指定模板文件 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="tplname" id="tplname" class="input-150" />.tpl 
		<span id='dtplname' class='f_red'></span>  &nbsp;&nbsp;<a href="javascript:void(0);" onclick="tbox_templet('选择模板文件', 'tplname');">选择模板</a> <br />(模板文件无扩展名，并确保模板文件夹存在，不填写默认使用栏目和模型的模板)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>指定文件名 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="filename" id="filename" class="input-150" /> 
		<span id='dfilename' class='f_red'></span>
		<br />(格式：26个字母、数字，下横线，中横线组成，不填写，默认为ID号；<br />文件名无扩展名，并确保同一模型下无重名，否则无法保存。)</td>
	  </tr>
	  <tr id="list-top">
		<td class='hback_yellow' colspan="2">
		相册管理  您可以添加多张图片，如需前台显示，TPL模板必须支持相册框排版。 上传图片只支持：gif,jpeg,jpg,png格式
		<input name='imgmaxsort' type='hidden' value='0' />
		</td>
	  </tr>
	  <tr> 
	    <td class="hback_1"></td>
		<td class='hback'>
		<a href="javascript:void(0);" onclick="return album_add($(this), 'product');">添加展示图片</a>
		<span id="load_imgtips"></span></td>
	  </tr>

	  <tr>
		<td class='hback_none'></td>
		<td class='hback_none'><input type="submit" name="btn_save" class="button" value="添加保存" /></td>
	  </tr>
	</table>
	</form>
  </div>
  <div style="clear:both;"></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="edit"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：模块管理<span>&gt;&gt;</span><?php echo $_smarty_tpl->tpl_vars['modtitle']->value;?>
<span>&gt;&gt;</span>编辑内容</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=product&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" class="btn-general"><span>返回列表</span></a>编辑内容</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=product&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type='hidden' name='treeid' id='treeid' value='<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
' />
	<table cellpadding='1' cellspacing='2' class='tab'>
	  <tr>
		<td class='hback_1' width="15%">所属子分类 <span class='f_red'></span></td>
		<td class='hback' width="85%"><?php echo $_smarty_tpl->tpl_vars['category_select']->value;?>
 <span id="dcatid" class='f_red'></span>不选为默认，外部链接的分类不可选</td>
	  </tr>
	  <tr>
		<td class='hback_1'>编号 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="productsn" id="productsn" class="input-150" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['productsn'];?>
" /> <span id='dproductsn' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>名称 <span class="f_red">*</span> </td>
		<td class='hback'><input type="text" name="productname" id="productname" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['productname'];?>
" /> <span id='dproductname' class='f_red'></span> 名称长度不能大于200个任意字符 </td>
	  </tr>
	  <tr>
		<td class='hback_1'>公开价格 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="oprice" id="oprice" class="input-100" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['oprice'];?>
" />元 <span id='doprice' class='f_red'></span> （填写数字，最多2位小数）</td>
	  </tr>
	  <tr>
		<td class='hback_1'>购买价格 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="bprice" id="bprice" class="input-100" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['bprice'];?>
" />元 <span id='dbprice' class='f_red'></span> （填写数字，最多2位小数）</td>
	  </tr>
	  <tr>
		<td class='hback_1'>图片地址 <span class="f_red"></span> </td>
		<td class='hback'>
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="uploadfiles" id="uploadfiles" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['uploadfiles'];?>
"  /> <span id='duploadfiles' class='f_red'></span></td>
			  <td>
			  <iframe id='iframe_t' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=upload&formname=myform&module=product&uploadinput=uploadfiles&thumbinput=thumbfiles&multipart=sf_upload&previewid=previewsrc'></iframe>
			  </td>
			</tr>
		  </table>
		  上传图片只支持：gif,jpeg,jpg,png格式
		 </td>
	  </tr>
	  <tr>
		<td class='hback_1'>缩略图 <span class="f_red"></span> </td>
		<td class='hback'>
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="thumbfiles" id="thumbfiles" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['thumbfiles'];?>
" /> <span id='dthumbfiles' class='f_red'></span> </td>
			  <td>
			  <span id="previewsrc">
				<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['thumbfiles'])){?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['thumbfiles'];?>
" width="60px" height="60px" border="0" />
				<?php }?>
				</span>
			  </td>
			</tr>
		  </table>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>简介 <span class="f_red"></span> </td>
		<td class='hback'><textarea name="summary" id="summary" style="width:50%;height:60px;overflow:auto;"><?php echo $_smarty_tpl->tpl_vars['product']->value['summary'];?>
</textarea>  <span id='dsummary' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>内容 <span class="f_red">*</span> </td>
		<td class='hback'>
		  <textarea name="content" id="content" style="width:95%;height:280px;display:none;"><?php echo $_smarty_tpl->tpl_vars['product']->value['content'];?>
</textarea>
		  <script>var editor;KindEditor.ready(function(K) {editor = K.create('#content'); });</script>
		  <span id='dcontent' class='f_red'></span>
		</td>
	  </tr>

	  <?php if (!empty($_smarty_tpl->tpl_vars['modattr']->value)){?>
	  <tr>
		<td class='hback_yellow' colspan="2">扩展字段 </td>
	  </tr>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modattr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr>
		<td class='hback_1'><?php echo $_smarty_tpl->tpl_vars['volist']->value['typename'];?>
 
		<span class="f_red"><?php if ($_smarty_tpl->tpl_vars['volist']->value['isvalid']==1){?>*<?php }?></span> 
		</td>
		<td class='hback'>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='radio'||$_smarty_tpl->tpl_vars['volist']->value['inputtype']=='checkbox'||$_smarty_tpl->tpl_vars['volist']->value['inputtype']=='select'){?>
		<?php echo $_smarty_tpl->tpl_vars['volist']->value['attr_select'];?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='text'){?>
		<input type="text" name="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" id="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['extvalue'];?>
" class="input-<?php echo $_smarty_tpl->tpl_vars['volist']->value['attrwidth'];?>
" /> 
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='textarea'){?>
		<textarea name="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" id="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['volist']->value['attrwidth'];?>
%;height:<?php echo $_smarty_tpl->tpl_vars['volist']->value['attrheight'];?>
px;overflow:auto;"><?php echo $_smarty_tpl->tpl_vars['volist']->value['extvalue'];?>
</textarea> 
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='img'){?>
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" id="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['extvalue'];?>
" class="input-txt" /></td>
			  <td>
			  <iframe id='iframe_attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=upload&formname=myform&module=product&uploadinput=attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
&multipart=sf_attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
'></iframe>
			  </td>
			</tr>
		  </table>
		  上传图片只支持：gif,jpeg,jpg,png格式
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['volist']->value['inputtype']=='attchment'){?>
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" id="attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['extvalue'];?>
" class="input-txt" /></td>
			  <td>
			  <iframe id='iframe_attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=upload&formname=myform&module=attchment&uploadinput=attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
&multipart=sf_attr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
'></iframe>
			  </td>
			</tr>
		  </table>
		  上传文件只支持：rar, zip, tar, gz压缩格式
		<?php }?>

		<span id='dattr_<?php echo $_smarty_tpl->tpl_vars['volist']->value['aid'];?>
' class='f_red'></span>
		<?php echo $_smarty_tpl->tpl_vars['volist']->value['typeremark'];?>

		</td>
	  </tr>
	  <?php } ?>
	  <?php }?>

	  <tr>
		<td class='hback_yellow' colspan="2">SEO优化相关设置 </td>
	  </tr>
	  <tr>
		<td class='hback_1'>TAG标签 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="tags" id="tags" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['tags'];?>
" /> 
		<span id='dtags' class='f_red'></span>
		(多个标签请用","隔开，会自动关联链接)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>Meta关键字 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="metakeyword" id="metakeyword" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['metakeyword'];?>
" /> <span id='dmetakeyword' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>Meta描述 <span class="f_red"></span> </td>
		<td class='hback'><textarea name="metadescription" id="metadescription" style="width:50%;height:60px;overflow:auto;"><?php echo $_smarty_tpl->tpl_vars['product']->value['metadescription'];?>
</textarea>  <span id='dmetadescription' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_yellow' colspan="2">其它附加设置 </td>
	  </tr>
	  <tr>
	    <td class='hback_1'>设置 <span class='f_red'></span></td>
		<td><input type="checkbox" name="istop" id="istop" value="1"<?php if ($_smarty_tpl->tpl_vars['product']->value['istop']==1){?> checked<?php }?> />置顶，<input type="checkbox" name="elite" id="elite" value="1"<?php if ($_smarty_tpl->tpl_vars['product']->value['elite']==1){?> checked<?php }?> />推荐</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>状态 <span class='f_red'></span></td>
		<td><input type="radio" name="flag" id="flag" value="1"<?php if ($_smarty_tpl->tpl_vars['product']->value['flag']==1){?> checked<?php }?> />正常，<input type="radio" name="flag" id="flag" value="0"<?php if ($_smarty_tpl->tpl_vars['product']->value['flag']==0){?> checked<?php }?> />锁定</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>发布时间 <span class='f_red'></span></td>
		<td><input type="text" name="addtime" id="addtime" class="input-150" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
" /> <span id='daddtime' class='f_red'></span> 当前时间为：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['timeline']->value,"%Y-%m-%d %H:%M:%S");?>
 注意不要改变格式。</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>浏览次数 <span class='f_red'></span></td>
		<td><input type="text" name="hits" id="hits" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['hits'];?>
" /> <span id='dhits' class='f_red'></span> </td>
	  </tr>
	  <tr>
	    <td class='hback_1'>链接类型 <span class='f_red'></span></td>
		<td><input type="radio" name="linktype" id="linktype" value="1"<?php if ($_smarty_tpl->tpl_vars['product']->value['linktype']==1){?> checked<?php }?> />内部，<input type="radio" name="linktype" id="linktype" value="2"<?php if ($_smarty_tpl->tpl_vars['product']->value['linktype']==2){?> checked<?php }?> />外部 URL地址：<input type="text" name="linkurl" id="linkurl" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['linkurl'];?>
" /> <span id='dlinkurl' class='f_red'></span> </td>
	  </tr>
	  <tr>
	    <td class='hback_1'>评论状态 <span class='f_red'></span></td>
		<td><input type="radio" name="iscomment" id="iscomment" value="1"<?php if ($_smarty_tpl->tpl_vars['product']->value['iscomment']==1){?> checked<?php }?> />允许，<input type="radio" name="iscomment" id="iscomment" value="0"<?php if ($_smarty_tpl->tpl_vars['product']->value['iscomment']==0){?> checked<?php }?> />禁止 <span id='discomment' class='f_red'></span> </td>
	  </tr>
	  <tr>
	    <td class='hback_1'>订购状态 <span class='f_red'></span></td>
		<td><input type="radio" name="isorder" id="isorder" value="1"<?php if ($_smarty_tpl->tpl_vars['product']->value['isorder']==1){?> checked<?php }?> />开启，<input type="radio" name="isorder" id="isorder" value="0"<?php if ($_smarty_tpl->tpl_vars['product']->value['isorder']==0){?> checked<?php }?> />关闭 <span id='discomment' class='f_red'></span> </td>
	  </tr>

	  <tr>
		<td class='hback_yellow' colspan="2">个性化设置 </td>
	  </tr>

	  <tr>
		<td class='hback_1'>指定模板文件 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="tplname" id="tplname" class="input-150" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['tplname'];?>
" />.tpl 
		<span id='dtplname' class='f_red'></span>  &nbsp;&nbsp;<a href="javascript:void(0);" onclick="tbox_templet('选择模板文件', 'tplname');">选择模板</a> <br />(模板文件无扩展名，并确保模板文件夹存在，不填写默认使用栏目和模型的模板)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>指定文件名 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="filename" id="filename" class="input-150" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['filename'];?>
" /> 
		<span id='dfilename' class='f_red'></span>
		<br />(格式：26个字母、数字，下横线，中横线组成，不填写，默认为ID号；<br />文件名无扩展名，并确保同一模型下无重名，否则无法保存。)</td>
	  </tr>

	  <tr id="list-top">
		<td class='hback_yellow' colspan="2">
		相册管理  您可以添加多张图片，如需前台显示，TPL模板必须支持相册框排版。 上传图片只支持：gif,jpeg,jpg,png格式
		<input name='imgmaxsort' type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['product']->value['gallery_num'];?>
' />
		</td>
	  </tr>

	  <!-- 循环读取已相册 -->
	  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gallery'])){?>
	  <?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['gallery']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
	  <tr class='imglist'>
	    <td class='hback_1'><a href='javascript:void(0);' onclick='album_countnums();album_del($(this), <?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
);'>删除</a> 图片<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
</td>
		<td class='hback'>
		  <table border='0' cellspacing='0' cellpadding='0'>
		    <tr>
			  <td colspan='2'>
			    排序：<input name='imgorders_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
' id='imgorders_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
' type='text' class='input-s' value='<?php echo $_smarty_tpl->tpl_vars['album']->value['imgorders'];?>
' />&nbsp;
                图片描述：<input name='imgname_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
' id='imgname_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
' type='text' class='input-150' value="<?php echo $_smarty_tpl->tpl_vars['album']->value['imgname'];?>
" />
			  </td>
			</tr>
			<tr>
			  <td>
			    图片地址：<input name='imgurl_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
' id='imgurl_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
' type='text' class='input-200' value="<?php echo $_smarty_tpl->tpl_vars['album']->value['imgurl'];?>
" />
				<input type='hidden' name='imgthumb_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
' id='imgthumb_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
' value="<?php echo $_smarty_tpl->tpl_vars['album']->value['imgthumb'];?>
" />
			  </td>
			  <td>
			    <iframe id='iframe_t_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
' border='0' frameborder='0' scrolling='no' style='width:260px;height:25px;padding:0px;margin:0px;' src='<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=upload&module=product&formname=myform&uploadinput=imgurl_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
&thumbinput=imgthumb_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
&multipart=sf_upload_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
&previewid=imgpreview_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
'></iframe>
			  </td>
			</tr>
		  </table>
		  <span id='imgpreview_<?php echo $_smarty_tpl->tpl_vars['album']->value['i'];?>
'><img src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['album']->value['imgthumb'];?>
" width="60px" height="60px" /></span>
		</td>
	  </tr>
	  <?php } ?>
	  <?php }?>

	  <tr> 
	    <td class="hback_1"></td>
		<td class='hback'>
		<a href="javascript:void(0);" onclick="return album_add($(this), 'product');">添加展示图片</a>
		<span id="load_imgtips"></span></td>
	  </tr>

	  <tr>
		<td class='hback_none'></td>
		<td class='hback_none'><input type="submit" name="btn_save" class="button" value="更新保存" /></td>
	  </tr>
	</table>
	</form>
  </div>
  <div style="clear:both;"></div>
</div>
<?php }?>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_footer'), null, 0);?>
</body>
</html>
<script type="text/javascript">
function checkform() {
	var t = "";
	var v = "";
	
	/*
	t = "catid";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("请选择分类", t);
		$('#'+t).focus();
		return false;
	}
	*/

	t = "productname";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("名称不能为空", t);
		$('#'+t).focus();
		return false;
	}

	t = "content";
	v = editor.text();
	if(editor.isEmpty()) {
		dmsg("内容不能为空", t);
		editor.focus();
		return false;
	}
	return true;
}

</script><?php }} ?>