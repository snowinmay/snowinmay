<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<!--{$page_charset}-->" />
<title>图库内容</title>
<!--{include file="<!--{$cptplpath}-->headerjs.tpl"}-->
<!--{assign var='pluginevent' value=XHook::doAction('adm_head')}-->
</head>
<body>
<!--{assign var='pluginevent' value=XHook::doAction('adm_main_top')}-->
<!--{if $a eq "run"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：模块管理<span>&gt;&gt;</span><!--{$modtitle}--><span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=photo&tid=<!--{$tid}-->">内容列表</a></p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<!--{$cpfile}-->?c=photo&tid=<!--{$tid}-->&a=add" class="btn-general"><span>添加内容</span></a><!--{$modtitle}--></h3>
	<div class="search-area ">
	  <form method="post" id="search_form" action="<!--{$cpfile}-->?c=photo&tid=<!--{$tid}-->" />
	  <div class="item">
	    <label>分类：</label><!--{$category_select}-->&nbsp;&nbsp;
		<label>标题：</label><input type="text" id="stitle" name="stitle" size="15" class="input-150" value="<!--{$stitle}-->" />&nbsp;&nbsp;&nbsp;
		<input type="submit" class="button_s" value="搜 索" />
	  </div>
	  </form>
	</div>
	<form action="<!--{$cpfile}-->?c=photo&tid=<!--{$tid}-->&a=del" method="post" name="myform" id="myform" style="margin:0">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="8%"><div class="th-gap">选择</div></th>
		<th width="12%"><div class="th-gap">分类</div></th>
		<th width="30%"><div class="th-gap">标题</div></th>
		<th width="8%"><div class="th-gap">浏览</div></th>
		<th width="6%"><div class="th-gap">图片</div></th>
		<th width="6%"><div class="th-gap">状态</div></th>
		<th width="6%"><div class="th-gap">推荐</div></th>
		<th width="11%"><div class="th-gap">发布时间</div></th>
		<th><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <!--{foreach $photo as $volist}-->
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><input name="id[]" type="checkbox" value="<!--{$volist.photoid}-->" onClick="checkItem(this, 'chkAll')"><!--{$volist.photoid}--></td>
		<td align="left"><!--{$volist.catname}--></td>
		<td align="left">
		<!--{if $volist.linktype==1}-->
		<a href="<!--{$volist.url}-->" target="_blank">
		<!--{else}-->
		<a href="<!--{$volist.linkurl}-->" target="_blank">
		<!--{/if}-->
		<!--{$volist.title}--></a></td>
		<td align="center"><!--{$volist.hits}--></td>
		<td align="center">
		<!--{if !empty($volist.thumbfiles)}-->
		<font color="green">有</font>
		<!--{else}-->
		<font color="#999999">无</font>
		<!--{/if}-->
		</td>
		<td align="center">
		<!--{if $volist.flag==0}-->
			<input type="hidden" id="attr_flag<!--{$volist.photoid}-->" value="flagopen" />
			<img id="flag<!--{$volist.photoid}-->" src="<!--{$urlpath}-->tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<!--{$volist.photoid}-->');" style="cursor:pointer;">
		<!--{else}-->
			<input type="hidden" id="attr_flag<!--{$volist.photoid}-->" value="flagclose" />
			<img id="flag<!--{$volist.photoid}-->" src="<!--{$urlpath}-->tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<!--{$volist.photoid}-->');" style="cursor:pointer;">	
		<!--{/if}-->
        </td>
		<td align="center">
		<!--{if $volist.elite==0}-->
			<input type="hidden" id="attr_elite<!--{$volist.photoid}-->" value="eliteopen" />
			<img id="elite<!--{$volist.photoid}-->" src="<!--{$urlpath}-->tpl/static/images/no.gif" onClick="javascript:fetch_ajax('elite','<!--{$volist.photoid}-->');" style="cursor:pointer;">
		<!--{else}-->
			<input type="hidden" id="attr_elite<!--{$volist.photoid}-->" value="eliteclose" />
			<img id="elite<!--{$volist.photoid}-->" src="<!--{$urlpath}-->tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('elite','<!--{$volist.photoid}-->');" style="cursor:pointer;">	
		<!--{/if}-->
        </td>
		<td align="center" title="<!--{$volist.addtime|date_format:"%Y-%m-%d %H:%M:%S"}-->"><!--{$volist.addtime|date_format:"%Y-%m-%d"}--></td>
		<td align="center"><a href="<!--{$cpfile}-->?c=photo&tid=<!--{$tid}-->&a=edit&id=<!--{$volist.photoid}-->&page=<!--{$page}-->&<!--{$urlitem}-->" class="icon-edit">编辑</a>&nbsp;&nbsp;<a href="<!--{$cpfile}-->?c=photo&tid=<!--{$tid}-->&a=del&id[]=<!--{$volist.photoid}-->" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="icon-del">删除</a></td>
	  </tr>
	  <!--{foreachelse}-->
      <tr>
	    <td colspan="9" align="center">暂无信息</td>
	  </tr>
	  <!--{/foreach}-->
	  <!--{if $total>0}-->
	  <tr>
		<td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox"></td>
		<td class="hback" colspan="8"><input class="button" name="btn_del" type="button" value="删 除" onClick="{if(confirm('确定要删除吗？')){$('#myform').submit();return true;}return false;}" class="button">&nbsp;&nbsp;共[ <b><!--{$total}--></b> ]条记录</td>
	  </tr>
	  <!--{/if}-->
	</table>
	</form>
	<!--{if $pagecount>1}-->
	<table width='95%' border='0' cellspacing='0' cellpadding='0' align='center' style="margin-top:10px;">
	  <tr>
		<td align='center'><!--{$showpage}--></td>
	  </tr>
	</table>
	<!--{/if}-->
  </div>
</div>
<!--{/if}-->

<!--{if $a eq "add"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：模块管理<span>&gt;&gt;</span><!--{$modtitle}--><span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=photo&a=add&tid=<!--{$tid}-->">添加内容</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<!--{$cpfile}-->?c=photo&tid=<!--{$tid}-->" class="btn-general"><span>返回列表</span></a>添加内容</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=photo&tid=<!--{$tid}-->" onsubmit='return checkform();' />
	<input type='hidden' name='a' id='a' value='saveadd' />
	<input type='hidden' name='treeid' id='treeid' value='<!--{$tid}-->' />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width="15%">所属子分类 <span class='f_red'></span></td>
		<td class='hback' width="85%"><!--{$category_select}--> <span id="dcatid" class='f_red'></span>不选为默认，外部链接的分类不可选</td>
	  </tr>
	  <tr>
		<td class='hback_1'>标题 <span class="f_red">*</span> </td>
		<td class='hback'><input type="text" name="title" id="title" class="input-txt" /> <span id='dtitle' class='f_red'></span> 标题长度不能大于200个任意字符 </td>
	  </tr>
	  <tr>
		<td class='hback_1'>图片地址 <span class="f_red"></span> </td>
		<td class='hback'>
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="uploadfiles" id="uploadfiles" class="input-txt"  /> <span id='duploadfiles' class='f_red'></span></td>
			  <td>
			  <iframe id='iframe_t' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<!--{$cpfile}-->?c=upload&formname=myform&module=photo&uploadinput=uploadfiles&thumbinput=thumbfiles&multipart=sf_upload&previewid=previewsrc'></iframe>
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

	  <!--{if !empty($modattr)}-->
	  <tr>
		<td class='hback_yellow' colspan="2">扩展字段 </td>
	  </tr>
	  <!--{foreach $modattr as $volist}-->
	  <tr>
		<td class='hback_1'><!--{$volist.typename}--> 
		<span class="f_red"><!--{if $volist.isvalid==1}-->*<!--{/if}--></span> 
		</td>
		<td class='hback'>
		<!--{if $volist.inputtype=='radio' || $volist.inputtype=='checkbox' || $volist.inputtype=='select'}-->
		<!--{$volist.attr_select}-->
		<!--{/if}-->
		<!--{if $volist.inputtype=='text'}-->
		<input type="text" name="attr_<!--{$volist.aid}-->" id="attr_<!--{$volist.aid}-->" class="input-<!--{$volist.attrwidth}-->" /> 
		<!--{/if}-->
		<!--{if $volist.inputtype=='textarea'}-->
		<textarea name="attr_<!--{$volist.aid}-->" id="attr_<!--{$volist.aid}-->" style="width:<!--{$volist.attrwidth}-->%;height:<!--{$volist.attrheight}-->px;overflow:auto;"></textarea> 
		<!--{/if}-->

		<!--{if $volist.inputtype=='img'}-->
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="attr_<!--{$volist.aid}-->" id="attr_<!--{$volist.aid}-->" class="input-txt" /></td>
			  <td>
			  <iframe id='iframe_attr_<!--{$volist.aid}-->' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<!--{$cpfile}-->?c=upload&formname=myform&module=photo&uploadinput=attr_<!--{$volist.aid}-->&multipart=sf_attr_<!--{$volist.aid}-->'></iframe>
			  </td>
			</tr>
		  </table>
		  上传图片只支持：gif,jpeg,jpg,png格式
		<!--{/if}-->

		<!--{if $volist.inputtype=='attchment'}-->
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="attr_<!--{$volist.aid}-->" id="attr_<!--{$volist.aid}-->" class="input-txt" /></td>
			  <td>
			  <iframe id='iframe_attr_<!--{$volist.aid}-->' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<!--{$cpfile}-->?c=upload&formname=myform&module=attchment&uploadinput=attr_<!--{$volist.aid}-->&multipart=sf_attr_<!--{$volist.aid}-->'></iframe>
			  </td>
			</tr>
		  </table>
		  上传文件只支持：rar, zip, tar, gz压缩格式
		<!--{/if}-->


		<span id='dattr_<!--{$volist.aid}-->' class='f_red'></span>
		<!--{$volist.typeremark}-->
		</td>
	  </tr>
	  <!--{/foreach}-->
	  <!--{/if}-->

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
		<td><input type="text" name="addtime" id="addtime" class="input-150" value="<!--{$timeline|date_format:"%Y-%m-%d %H:%M:%S"}-->" /> <span id='daddtime' class='f_red'></span> 当前时间为：<!--{$timeline|date_format:"%Y-%m-%d %H:%M:%S"}--> 注意不要改变格式。</td>
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
		<td class='hback_yellow' colspan="2">个性化设置 </td>
	  </tr>

	  <tr>
		<td class='hback_1'>指定模板文件 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="tplname" id="tplname" class="input-150" />.tpl 
		<span id='dtplname' class='f_red'></span>  &nbsp;&nbsp;<a href="javascript:void(0);" onclick="tbox_templet('选择模板文件', 'tplname');">选择模板</a> <br />(模板文件无扩展名，并确保模板文件夹存在，不填写默认使用栏目和模型的模板)</td>
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
		<a href="javascript:void(0);" onclick="return album_add($(this), 'photo');">添加展示图片</a>
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
<!--{/if}-->

<!--{if $a eq "edit"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：模块管理<span>&gt;&gt;</span><!--{$modtitle}--><span>&gt;&gt;</span>编辑内容</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<!--{$cpfile}-->?c=photo&<!--{$comeurl}-->" class="btn-general"><span>返回列表</span></a>编辑内容</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=photo&<!--{$comeurl}-->" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<!--{$id}-->" />
	<input type='hidden' name='treeid' id='treeid' value='<!--{$tid}-->' />
	<table cellpadding='1' cellspacing='2' class='tab'>
	  <tr>
		<td class='hback_1' width="15%">所属子分类 <span class='f_red'></span></td>
		<td class='hback' width="85%"><!--{$category_select}--> <span id="dcatid" class='f_red'></span>不选为默认，外部链接的分类不可选</td>
	  </tr>
	  <tr>
		<td class='hback_1'>标题 <span class="f_red">*</span> </td>
		<td class='hback'><input type="text" name="title" id="title" class="input-txt" value="<!--{$photo.title}-->" /> <span id='dtitle' class='f_red'></span> 标题长度不能大于200个任意字符 </td>
	  </tr>
	  <tr>
		<td class='hback_1'>图片地址 <span class="f_red"></span> </td>
		<td class='hback'>
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="uploadfiles" id="uploadfiles" class="input-txt" value="<!--{$photo.uploadfiles}-->"  /> <span id='duploadfiles' class='f_red'></span></td>
			  <td>
			  <iframe id='iframe_t' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<!--{$cpfile}-->?c=upload&formname=myform&module=photo&uploadinput=uploadfiles&thumbinput=thumbfiles&multipart=sf_upload&previewid=previewsrc'></iframe>
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
			  <td><input type="text" name="thumbfiles" id="thumbfiles" class="input-txt" value="<!--{$photo.thumbfiles}-->" /> <span id='dthumbfiles' class='f_red'></span> </td>
			  <td>
			  <span id="previewsrc">
				<!--{if !empty($photo.thumbfiles)}-->
				<img src="<!--{$urlpath}--><!--{$photo.thumbfiles}-->" width="60px" height="60px" border="0" />
				<!--{/if}-->
				</span>
			  </td>
			</tr>
		  </table>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>简介 <span class="f_red"></span> </td>
		<td class='hback'><textarea name="summary" id="summary" style="width:50%;height:60px;overflow:auto;"><!--{$photo.summary}--></textarea>  <span id='dsummary' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>内容 <span class="f_red">*</span> </td>
		<td class='hback'>
		  <textarea name="content" id="content" style="width:95%;height:280px;display:none;"><!--{$photo.content}--></textarea>
		  <script>var editor;KindEditor.ready(function(K) {editor = K.create('#content'); });</script>
		  <span id='dcontent' class='f_red'></span>
		</td>
	  </tr>

	  <!--{if !empty($modattr)}-->
	  <tr>
		<td class='hback_yellow' colspan="2">扩展字段 </td>
	  </tr>
	  <!--{foreach $modattr as $volist}-->
	  <tr>
		<td class='hback_1'><!--{$volist.typename}--> 
		<span class="f_red"><!--{if $volist.isvalid==1}-->*<!--{/if}--></span> 
		</td>
		<td class='hback'>
		<!--{if $volist.inputtype=='radio' || $volist.inputtype=='checkbox' || $volist.inputtype=='select'}-->
		<!--{$volist.attr_select}-->
		<!--{/if}-->
		<!--{if $volist.inputtype=='text'}-->
		<input type="text" name="attr_<!--{$volist.aid}-->" id="attr_<!--{$volist.aid}-->" value="<!--{$volist.extvalue}-->" class="input-<!--{$volist.attrwidth}-->" /> 
		<!--{/if}-->
		<!--{if $volist.inputtype=='textarea'}-->
		<textarea name="attr_<!--{$volist.aid}-->" id="attr_<!--{$volist.aid}-->" style="width:<!--{$volist.attrwidth}-->%;height:<!--{$volist.attrheight}-->px;overflow:auto;"><!--{$volist.extvalue}--></textarea> 
		<!--{/if}-->

		<!--{if $volist.inputtype=='img'}-->
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="attr_<!--{$volist.aid}-->" id="attr_<!--{$volist.aid}-->" value="<!--{$volist.extvalue}-->" class="input-txt" /></td>
			  <td>
			  <iframe id='iframe_attr_<!--{$volist.aid}-->' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<!--{$cpfile}-->?c=upload&formname=myform&module=photo&uploadinput=attr_<!--{$volist.aid}-->&multipart=sf_attr_<!--{$volist.aid}-->'></iframe>
			  </td>
			</tr>
		  </table>
		  上传图片只支持：gif,jpeg,jpg,png格式
		<!--{/if}-->

		<!--{if $volist.inputtype=='attchment'}-->
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="attr_<!--{$volist.aid}-->" id="attr_<!--{$volist.aid}-->" value="<!--{$volist.extvalue}-->" class="input-txt" /></td>
			  <td>
			  <iframe id='iframe_attr_<!--{$volist.aid}-->' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<!--{$cpfile}-->?c=upload&formname=myform&module=attchment&uploadinput=attr_<!--{$volist.aid}-->&multipart=sf_attr_<!--{$volist.aid}-->'></iframe>
			  </td>
			</tr>
		  </table>
		  上传文件只支持：rar, zip, tar, gz压缩格式
		<!--{/if}-->

		<span id='dattr_<!--{$volist.aid}-->' class='f_red'></span>
		<!--{$volist.typeremark}-->
		</td>
	  </tr>
	  <!--{/foreach}-->
	  <!--{/if}-->

	  <tr>
		<td class='hback_yellow' colspan="2">SEO优化相关设置 </td>
	  </tr>
	  <tr>
		<td class='hback_1'>TAG标签 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="tags" id="tags" class="input-txt" value="<!--{$photo.tags}-->" /> 
		<span id='dtags' class='f_red'></span>
		(多个标签请用","隔开，会自动关联链接)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>Meta关键字 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="metakeyword" id="metakeyword" class="input-txt" value="<!--{$photo.metakeyword}-->" /> <span id='dmetakeyword' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>Meta描述 <span class="f_red"></span> </td>
		<td class='hback'><textarea name="metadescription" id="metadescription" style="width:50%;height:60px;overflow:auto;"><!--{$photo.metadescription}--></textarea>  <span id='dmetadescription' class='f_red'></span> </td>
	  </tr>
	  <tr>
		<td class='hback_yellow' colspan="2">其它附加设置 </td>
	  </tr>
	  <tr>
	    <td class='hback_1'>设置 <span class='f_red'></span></td>
		<td><input type="checkbox" name="istop" id="istop" value="1"<!--{if $photo.istop==1}--> checked<!--{/if}--> />置顶，<input type="checkbox" name="elite" id="elite" value="1"<!--{if $photo.elite==1}--> checked<!--{/if}--> />推荐</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>状态 <span class='f_red'></span></td>
		<td><input type="radio" name="flag" id="flag" value="1"<!--{if $photo.flag==1}--> checked<!--{/if}--> />正常，<input type="radio" name="flag" id="flag" value="0"<!--{if $photo.flag==0}--> checked<!--{/if}--> />锁定</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>发布时间 <span class='f_red'></span></td>
		<td><input type="text" name="addtime" id="addtime" class="input-150" value="<!--{$photo.addtime|date_format:"%Y-%m-%d %H:%M:%S"}-->" /> <span id='daddtime' class='f_red'></span> 当前时间为：<!--{$timeline|date_format:"%Y-%m-%d %H:%M:%S"}--> 注意不要改变格式。</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>浏览次数 <span class='f_red'></span></td>
		<td><input type="text" name="hits" id="hits" class="input-s" value="<!--{$photo.hits}-->" /> <span id='dhits' class='f_red'></span> </td>
	  </tr>
	  <tr>
	    <td class='hback_1'>链接类型 <span class='f_red'></span></td>
		<td><input type="radio" name="linktype" id="linktype" value="1"<!--{if $photo.linktype==1}--> checked<!--{/if}--> />内部，<input type="radio" name="linktype" id="linktype" value="2"<!--{if $photo.linktype==2}--> checked<!--{/if}--> />外部 URL地址：<input type="text" name="linkurl" id="linkurl" class="input-txt" value="<!--{$photo.linkurl}-->" /> <span id='dlinkurl' class='f_red'></span> </td>
	  </tr>

	  <tr>
		<td class='hback_yellow' colspan="2">个性化设置 </td>
	  </tr>

	  <tr>
		<td class='hback_1'>指定模板文件 <span class="f_red"></span> </td>
		<td class='hback'><input type="text" name="tplname" id="tplname" class="input-150" value="<!--{$photo.tplname}-->" />.tpl 
		<span id='dtplname' class='f_red'></span>  &nbsp;&nbsp;<a href="javascript:void(0);" onclick="tbox_templet('选择模板文件', 'tplname');">选择模板</a> <br />(模板文件无扩展名，并确保模板文件夹存在，不填写默认使用栏目和模型的模板)</td>
	  </tr>

	  <tr id="list-top">
		<td class='hback_yellow' colspan="2">
		相册管理  您可以添加多张图片，如需前台显示，TPL模板必须支持相册框排版。 上传图片只支持：gif,jpeg,jpg,png格式
		<input name='imgmaxsort' type='hidden' value='<!--{$photo.gallery_num}-->' />
		</td>
	  </tr>

	  <!-- 循环读取已相册 -->
	  <!--{if !empty($photo.gallery)}-->
	  <!--{foreach $photo.gallery as $album}-->
	  <tr class='imglist'>
	    <td class='hback_1'><a href='javascript:void(0);' onclick='album_countnums();album_del($(this), <!--{$album.i}-->);'>删除</a> 图片<!--{$album.i}--></td>
		<td class='hback'>
		  <table border='0' cellspacing='0' cellpadding='0'>
		    <tr>
			  <td colspan='2'>
			    排序：<input name='imgorders_<!--{$album.i}-->' id='imgorders_<!--{$album.i}-->' type='text' class='input-s' value='<!--{$album.imgorders}-->' />&nbsp;
                图片描述：<input name='imgname_<!--{$album.i}-->' id='imgname_<!--{$album.i}-->' type='text' class='input-150' value="<!--{$album.imgname}-->" />
			  </td>
			</tr>
			<tr>
			  <td>
			    图片地址：<input name='imgurl_<!--{$album.i}-->' id='imgurl_<!--{$album.i}-->' type='text' class='input-200' value="<!--{$album.imgurl}-->" />
				<input type='hidden' name='imgthumb_<!--{$album.i}-->' id='imgthumb_<!--{$album.i}-->' value="<!--{$album.imgthumb}-->" />
			  </td>
			  <td>
			    <iframe id='iframe_t_<!--{$album.i}-->' border='0' frameborder='0' scrolling='no' style='width:260px;height:25px;padding:0px;margin:0px;' src='<!--{$cpfile}-->?c=upload&module=photo&formname=myform&uploadinput=imgurl_<!--{$album.i}-->&thumbinput=imgthumb_<!--{$album.i}-->&multipart=sf_upload_<!--{$album.i}-->&previewid=imgpreview_<!--{$album.i}-->'></iframe>
			  </td>
			</tr>
		  </table>
		  <span id='imgpreview_<!--{$album.i}-->'><img src="<!--{$urlpath}--><!--{$album.imgthumb}-->" width="60px" height="60px" /></span>
		</td>
	  </tr>
	  <!--{/foreach}-->
	  <!--{/if}-->

	  <tr> 
	    <td class="hback_1"></td>
		<td class='hback'>
		<a href="javascript:void(0);" onclick="return album_add($(this), 'photo');">添加展示图片</a>
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
<!--{/if}-->
<!--{assign var='pluginevent' value=XHook::doAction('adm_footer')}-->
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

	t = "title";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("标题不能为空", t);
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

</script>