<?php /* Smarty version Smarty-3.1.14, created on 2015-04-28 17:17:58
         compiled from "/var/www/html/snowinmay/tpl/admincp/setting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1687953035553f5046c88be5-51404684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b157d4a9dcb396a1d07f43b7c1adf2c34df35ff2' => 
    array (
      0 => '/var/www/html/snowinmay/tpl/admincp/setting.tpl',
      1 => 1396230332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1687953035553f5046c88be5-51404684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'sitename' => 0,
    'siteurl' => 0,
    'icpcode' => 0,
    'tjcode' => 0,
    'logo' => 0,
    'logowidth' => 0,
    'logoheight' => 0,
    'urlpath' => 0,
    'content' => 0,
    'php_upload_maxsize' => 0,
    'gd_version' => 0,
    'uploadmaxsize' => 0,
    'maxthumbwidth' => 0,
    'maxthumbheight' => 0,
    'thumbwidth' => 0,
    'thumbheight' => 0,
    'productthumbwidth' => 0,
    'productthumbheight' => 0,
    'photothumbwidth' => 0,
    'photothumbheight' => 0,
    'watermarkflag' => 0,
    'watermarkfile' => 0,
    'watermarkpos' => 0,
    'config' => 0,
    'sysdata' => 0,
    'articlenum' => 0,
    'articlelen' => 0,
    'productnum' => 0,
    'productlen' => 0,
    'photonum' => 0,
    'photolen' => 0,
    'downnum' => 0,
    'downlen' => 0,
    'hrnum' => 0,
    'hrlen' => 0,
    'articlepagesize' => 0,
    'productpagesize' => 0,
    'photopagesize' => 0,
    'downpagesize' => 0,
    'hrpagesize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_553f5046d488e4_25358727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553f5046d488e4_25358727')) {function content_553f5046d488e4_25358727($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_filterhtml')) include '/var/www/html/snowinmay/source/core/smarty/plugins/modifier.filterhtml.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>管理员</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <form name="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting" />
  <input type="hidden" name="a" value="savebase" />
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>基础设置<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting">站点设置</a></p></div>
  <div class="main-cont">
	<h3 class="title">站点信息设置</h3>
	<div class="set-area">
	  <div class="form web-info-form">
		<div class="form-row">
		  <label class="form-field">网站名称</label>
		  <div class="form-cont"><input name="sitename" id="sitename" class="input-txt" type="text" value="<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
" /><span id="dsitename"></span></div>
		</div>
		<div class="form-row">
		  <label class="form-field">网站地址</label>
		  <div class="form-cont"><input name="siteurl" id="siteurl" class="input-txt" type="text" value="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
" /><span id="dsiteurl"></span><p class="form-tips">（以“http://”开头，“/”结束）</p></div>
		</div>
		<div class="form-row">
		  <label class="form-field">备案号码</label>
		  <div class="form-cont"><input name="icpcode" id="icpcode" class="input-txt" type="text" value="<?php echo $_smarty_tpl->tpl_vars['icpcode']->value;?>
" /><span id="dicpcode"></span><p class="form-tips">（网站备案信息将显示在页面底部）</p></div>
		</div>
		<div class="form-row">
		  <label for="declare" class="form-field">流量统计代码</label>
		  <div class="form-cont"><textarea name="tjcode" id="tjcode" class="input-area area-s4 code-area" style="width:500px;height:60px;"><?php echo $_smarty_tpl->tpl_vars['tjcode']->value;?>
</textarea></div>
		</div>
	  </div>
	</div>
    
	<h3 class="title">网站LOGO设置</h3>
	<div class="set-area">
	  <div class="form web-info-form">
	    <div class="form-row">
		  <label class="form-field">LOGO图片</label>
		  <div class="form-cont">

		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="logo" id="logo" value="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" class="input-txt" /> <span id='dlogo' class='f_red'></span></td>
			  <td>
			  <iframe id='iframe_t' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=upload&formname=myform&module=article&uploadinput=logo&multipart=sf_upload&previewid=previewsrc'></iframe>
			  </td>
			</tr>
		  </table>
		  上传图片只支持：gif,jpeg,jpg,png格式
			
		  </div>
		</div>
		<div class="form-row">
		  <label class="form-field">LOGO大小</label>
		  <div class="form-cont">宽：<input name="logowidth" id="logowidth" type="text" size="5" value="<?php echo $_smarty_tpl->tpl_vars['logowidth']->value;?>
" />px；高：<input name="logoheight" id="logoheight" type="text" size="5" value="<?php echo $_smarty_tpl->tpl_vars['logoheight']->value;?>
" />px</div>
		</div>
        
		<div class="form-row">
		  <label class="form-field">LOGO预览</label>
		  <div class="form-cont">
		  <span id="previewsrc">
		  <?php if ($_smarty_tpl->tpl_vars['logo']->value!=''){?>
		  <img src='<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
' />
		  <?php }?>
		  </span>
		  </div>
		</div>

		<div class="btn-area"><input type="submit" name="btn_save" class="button" value="更新保存" /></div>
	  </div>
	</div>
  </div>
  </form>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="footer"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>基础设置<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting&a=footer">网站底部信息</a></p></div>
  <div class="main-cont">
	<h3 class="title">网站底部信息</h3>
    <form name="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting" />
    <input type="hidden" name="a" value="savefooter" />
	<table cellpadding='2' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>底部信息：</td>
		<td class='hback' width='85%'>
		  <textarea name="content" id="content" style="overflow:auto;width:98%;height:300px;display:none;"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>
		  <script>var editor;KindEditor.ready(function(K) {editor = K.create('#content'); });</script>
		</td>
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

<?php if ($_smarty_tpl->tpl_vars['a']->value=="upload"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>基础设置<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting&a=upload">上传图片设置</a></p></div>
  <div class="main-cont">
	<h3 class="title">上传图片设置，本功能需要PHP环境支持GD库才生效
缩略图按原图比例缩小，宽高不会超过本设定，但都不能小于60px</h3>

    <form name="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting" />
    <input type="hidden" name="a" value="saveupload" />
	<table cellpadding='1' cellspacing='2' class='tab'>
	  <tr>
	    <td class='hback_1'>PHP环境信息：</td>
		<td><font color="green">PHP环境允许最大上传：<?php echo $_smarty_tpl->tpl_vars['php_upload_maxsize']->value;?>
；GD库：<?php echo $_smarty_tpl->tpl_vars['gd_version']->value;?>
</font></td>
	  </tr>
	  <tr>
	    <td class='hback_1'>设置最大上传：</td>
		<td><input type='text' name='uploadmaxsize' id='uploadmaxsize' value='<?php echo $_smarty_tpl->tpl_vars['uploadmaxsize']->value;?>
' size="5" />M (大小不能超过PHP环境允许的最大值)</td>
	  </tr>
	  <tr>
		<td class='hback_1' width="20%">图片最大尺寸： </td>
		<td class='hback' width="80%">宽：<input type="text" name="maxthumbwidth" id="maxthumbwidth" size="5" value="<?php echo $_smarty_tpl->tpl_vars['maxthumbwidth']->value;?>
" /> 像素（px）  高：<input type="text" name="maxthumbheight" id="maxthumbheight" size="5" value="<?php echo $_smarty_tpl->tpl_vars['maxthumbheight']->value;?>
" /> 像素（px）<br />
	如果用户上传一些尺寸很大的数码图片，则程序会按照本设置进行缩小该图片并显示，<br />比如可以设置为 宽：1024px，高：768px，但都不能小于300px。设置为0，则不做任何处理。</td>
	  </tr>

	  <tr>
		<td class='hback_1'>文章缩略图大小： </td>
		<td class='hback'>宽：<input type="text" name="thumbwidth" id="thumbwidth" size="5" value="<?php echo $_smarty_tpl->tpl_vars['thumbwidth']->value;?>
" /> 像素（px） ， 高：<input type="text" name="thumbheight" id="thumbheight" size="5" value="<?php echo $_smarty_tpl->tpl_vars['thumbheight']->value;?>
" /> 像素（px）</td>
	  </tr>
	  <tr>
		<td class='hback_1'>产品缩略图大小： </td>
		<td class='hback'>宽：<input type="text" name="productthumbwidth" id="productthumbwidth" size="5" value="<?php echo $_smarty_tpl->tpl_vars['productthumbwidth']->value;?>
" /> 像素（px） ， 高：<input type="text" name="productthumbheight" id="productthumbheight" size="5" value="<?php echo $_smarty_tpl->tpl_vars['productthumbheight']->value;?>
" /> 像素（px）</td>
	  </tr>
	  <tr>
		<td class='hback_1'>图库缩略图大小： </td>
		<td class='hback'>宽：<input type="text" name="photothumbwidth" id="photothumbwidth" size="5" value="<?php echo $_smarty_tpl->tpl_vars['photothumbwidth']->value;?>
" /> 像素（px） ， 高：<input type="text" name="photothumbheight" id="photothumbheight" size="5" value="<?php echo $_smarty_tpl->tpl_vars['photothumbheight']->value;?>
" /> 像素（px）</td>
	  </tr>
	</table>
	<h3 class="title">图片水印设置（需要GD库支持）</h3>
	<table cellpadding='1' cellspacing='2' class='tab'>
	  <tr>
		<td class="hback_1" width="20%">是否启用： </td>
		<td class="hback" width="80%"><input type="radio" name="watermarkflag" value="1"<?php if ($_smarty_tpl->tpl_vars['watermarkflag']->value==1){?> checked<?php }?> />是，<input type="radio" name="watermarkflag" value="0"<?php if ($_smarty_tpl->tpl_vars['watermarkflag']->value==0){?> checked<?php }?> />否</td>
	  </tr>
	  <tr>
		<td class="hback_1">水印图片地址： </td>
		<td class="hback"><input type="text" name="watermarkfile" id="watermarkfile" size="45" value="<?php echo $_smarty_tpl->tpl_vars['watermarkfile']->value;?>
" /> <br />默认为tpl/static/images/watermark.png，只支持JPG/GIF/PNG格式，推荐用透明的png图片 <br /><font color="red">注意图片地址相对于网站根目录</font></td>
	  </tr>
	  <tr>
		<td class="hback_1">水印位置： </td>
		<td class="hback"><input type="radio" name="watermarkpos" value="1"<?php if ($_smarty_tpl->tpl_vars['watermarkpos']->value==1){?> checked<?php }?> />顶端居左 <input type="radio" name="watermarkpos" value="2"<?php if ($_smarty_tpl->tpl_vars['watermarkpos']->value==2){?> checked<?php }?> />顶端居右 <input type="radio" name="watermarkpos" value="3"<?php if ($_smarty_tpl->tpl_vars['watermarkpos']->value==3){?> checked<?php }?> />底端居左 <input type="radio" name="watermarkpos" value="4"<?php if ($_smarty_tpl->tpl_vars['watermarkpos']->value==4){?> checked<?php }?> />底端居右  <input type="radio" name="watermarkpos" value="0"<?php if ($_smarty_tpl->tpl_vars['watermarkpos']->value==0){?> checked<?php }?> />随机</td>
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

<?php if ($_smarty_tpl->tpl_vars['a']->value=="rewrite"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>基础设置<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting&a=rewrite">伪静态设置</a></p></div>
  <div class="main-cont">
	<h3 class="title">站点伪静态设置（开启Rewrite功能会将URL静态化，提高搜索引擎的抓取）</h3>
    <form name="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting" />
    <input type="hidden" name="a" value="saverewrite" />
	<table cellpadding='3' cellspacing='3' class='tab'>
	  <tr>
		<td class="hback_c1" width="20%">页面访问方式 </td>
		<td class="hback_c1" width="80%">
        <input type="radio" name="urlsuffix" id="urlsuffix" value="php"<?php if ($_smarty_tpl->tpl_vars['config']->value['urlsuffix']=='php'){?> checked<?php }?> />PHP动态页&nbsp;&nbsp;&nbsp;&nbsp;
		<br />
		<input type="radio" name="urlsuffix"  id="urlsuffix" value="html"<?php if ($_smarty_tpl->tpl_vars['config']->value['urlsuffix']=='html'){?> checked<?php }?> />
        HTML伪静态
		（请选择web引擎对应伪静态规则：<select name="webtype" id="webtype">
		<option value="apache">Aapche规则</option>
		<option value="iis">IIS Rewrite3.1规则</option>
		<option value="nginx">Nginx规则</option>
		</select>）
		<br />
        您当前使用的web引擎：<?php echo smarty_modifier_filterhtml($_smarty_tpl->tpl_vars['sysdata']->value['webengine'],30);?>

        </td>
	  </tr>
	  <tr>
		<td class='hback_none'></td>
		<td class='hback_none'><input type="submit" name="btn_save" class="button" value="编辑保存" /></td>
	  </tr>
	</table>
	<h3 class="title">温馨提示Apache服务器配置Rewrite规则：</h3>
	<table cellpadding='5' cellspacing='5' class='tab'>

	  <td style="color:#666666;line-height:20px;">
	  如果使用HTML伪静态必须满足以下条件：<br />
	  1、网站根目录必须有0777权限，能写入、修改、删除.htaccess规则配置文件；<br />
	  2、选择Apache引擎，Apache必须安装了Rewrite模块，并且Apache配置文件AllowOverride设置为all；<br />
	  3、选择IIS引擎，IIS必须已经安装Rewrite3.1扩展组件，如果Rewrite版本低于3.1，无法使用伪静态；<br />
	  4、选择Nginx引擎，Nginx必须支持Rewrite模块。
	  </td>
	</table>
	</form>
  </div>
  <div style="clear:both;"></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="index_style"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：界面模板<span>&gt;&gt;</span>主题模板<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting&a=index_style">首页配置</a></p></div>
  <div class="main-cont">
	<h3 class="title">首页配置</h3>

    <form name="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting" />
    <input type="hidden" name="a" value="save_index_style" />
	<table cellpadding='2' cellspacing='2' class='tab'>
	  <tr>
	    <td class='hback_1' width='15%'>文章模块最新：</td>
		<td class="hback" width='85%'><input type="text" name="articlenum" id="articlenum" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['articlenum']->value;?>
" />条，标题长度：<input type="text" name="articlelen" id="articlelen" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['articlelen']->value;?>
" />个字符</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>产品模块最新：</td>
		<td class="hback"><input type="text" name="productnum" id="productnum" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['productnum']->value;?>
" />条，标题长度：<input type="text" name="productlen" id="productlen" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['productlen']->value;?>
" />个字符</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>图库模块最新：</td>
		<td class="hback"><input type="text" name="photonum" id="photonum" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['photonum']->value;?>
" />条，标题长度：<input type="text" name="photolen" id="photolen" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['photolen']->value;?>
" />个字符</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>下载模块最新：</td>
		<td class="hback"><input type="text" name="downnum" id="downnum" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['downnum']->value;?>
" />条，标题长度：<input type="text" name="downlen" id="downlen" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['downlen']->value;?>
" />个字符</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>招聘模块最新：</td>
		<td class="hback"><input type="text" name="hrnum" id="hrnum" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['hrnum']->value;?>
" />条，标题长度：<input type="text" name="hrlen" id="hrlen" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['hrlen']->value;?>
" />个字符</td>
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

<?php if ($_smarty_tpl->tpl_vars['a']->value=="main_style"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：界面模板<span>&gt;&gt;</span>主题模板<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting&a=index_style">界面配置</a></p></div>
  <div class="main-cont">
	<h3 class="title">界面配置</h3>

    <form name="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting" />
    <input type="hidden" name="a" value="save_main_style" />
	<table cellpadding='2' cellspacing='2' class='tab'>
	  <tr>
	    <td class='hback_1' width='15%'>文章模块列表页：</td>
		<td class="hback" width='85%'>每页显示 <input type="text" name="articlepagesize" id="articlepagesize" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['articlepagesize']->value;?>
" />条</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>产品模块列表页：</td>
		<td class="hback">每页显示 <input type="text" name="productpagesize" id="productpagesize" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['productpagesize']->value;?>
" />条</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>图库模块列表页：</td>
		<td class="hback">每页显示 <input type="text" name="photopagesize" id="photopagesize" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['photopagesize']->value;?>
" />条</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>下载模块列表页：</td>
		<td class="hback">每页显示 <input type="text" name="downpagesize" id="downpagesize" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['downpagesize']->value;?>
" />条</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>招聘模块列表页：</td>
		<td class="hback">每页显示 <input type="text" name="hrpagesize" id="hrpagesize" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['hrpagesize']->value;?>
" />条</td>
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
<?php }} ?>