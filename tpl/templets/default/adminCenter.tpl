<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><{$title}></title>
	<link rel="stylesheet" href="../templates/css/css_base.css">
	<link rel="stylesheet" href="../templates/css/css_admin.css">
	<link rel="stylesheet" href="http://blog.snowinmay.net/work/demopage/style_a.css">
	<style>
	#name{ display: none; }
	</style>
	
</head>
<body>
	<div id="alogin">
		<div class="atop">
			<h1>snowinmay后台数据管理中心</h1>欢迎您，<{$amsgname}>。今天是：<span id="tdate"></span>
		</div>
		<div class="aleft" id="aleft">
			<ul class="list">
				<li class="b list1" >系统设置</li>
				<li class="b sec"><a href="http://snowinmay.net">返回首页</a></li>
				<li class="list2">前端之路</li>
				<li class="list3">看过的书/电影</li>
				<li class="list4">去过的地方</li>
				<li class="list5">想去的地方</li>
				<li class="list6">听过的歌</li>
				<li class="list7">常用的网络</li>
				<li class="list8">熟悉的工具</li>
				<li class="list9">哒哒语录</li>
			</ul>
		</div>
		<div class="aright">
			<div class="aintro">
				<span id="tdatep"></span><span class="b"><{$amsgname}>,</span><span id="tdatein"></span>
			</div>
			<div class="aintro">
				您可以：<a href="#" class="list1">配置网站参数</a>，<a href="http://snowinmay.net/">返回查看网站</a>
			</div>
			<div class="aintro aintro-list1" >
				<!-- 配置系统信息 -->
				<{include file="netconfig.tpl"}>
			</div>
			<div class="aintro d_item_box aintro-list2">
				<{include file="company.tpl"}>
			</div>
			<div class="aintro d_item_box aintro-list3">
				<{include file="book.tpl"}>
			</div>
			<div class="aintro d_item_box aintro-list4">
				<{include file="gone_place.tpl"}>
			</div>
			<div class="aintro d_item_box aintro-list5">
				<{include file="going_place.tpl"}>
			</div>
			<div class="aintro d_item_box aintro-list6">
				<{include file="song.tpl"}>
			</div>
			<div class="aintro d_item_box aintro-list7">
				<{include file="comnet.tpl"}>
			</div>
			<div class="aintro d_item_box aintro-list8">
				<{include file="tool.tpl"}>
			</div>
			<div class="aintro d_item_box aintro-list9">
				<{include file="yulu.tpl"}>
			</div>
			
		</div>
	<script src="../templates/js/js_base.js"></script>
	<script>
	window.onload = function(){


		//显示管理中心内容
		var ddd="<{$amsg}>";
		var ccc="<{$amsgid}>";//001
		if (ccc == 001) {
			//alert(ddd);			
			document.getElementById('alogin').style.display = "block";
		}else{
			alert(ddd);
			window.location.href='login.php';
		};

		//获取当前时间。
		var now = new Date();
		var year = now.getFullYear();
		var month = now.getMonth() +1;
		var date = now.getDate();
		var hour = now.getHours();
		var tdatein = "";
		var tdatep ="";
		document.getElementById('tdate').innerHTML = year + "年" + month + "月" + date + "日" ;
		if (hour >=0 && hour < 6) {
			  tdatep = "凌晨了，";
			  tdatein = "夜已深，请注意休息！";
			}else if (hour >=6 && hour < 11) {
				tdatep = "早上好，";
			    tdatein = "每一天，努力让梦想更近一些！";	
			}else if (hour >=11 && hour < 14) {
				tdatep = "中午好，";
			  tdatein = "吃顿丰富的午餐，为身体加油！";	
			}else if (hour >=14 && hour < 17) {
				tdatep = "下午好，";
			  tdatein = "泡杯咖啡，午休是为了更好的工作！";		
			}else if(hour >=17 && hour <= 23){
				tdatep = "晚上好，";
			  tdatein = "忙碌了一天，好好享受晚上的时光！";	
			}
			document.getElementById('tdatein').innerHTML = tdatein;
			document.getElementById('tdatep').innerHTML = tdatep;

			//设置这边栏高度alert(pageHeight);
			pageHeight = pageHeight -66
			document.getElementById('aleft').style.height = pageHeight +'px';
			//alert(pageHeight - '66');
	}
		
	</script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	   <script>
     $(function(){
          $('.list1').click(function(){
               $('.aintro-list1').css('display', 'block');
               $('.aintro-list2,.aintro-list3,.aintro-list4,.aintro-list5,.aintro-list6,.aintro-list7,.aintro-list8,.aintro-list9').css('display', 'none');
          });
          $('.list2').click(function(){
               $('.aintro-list2').css('display', 'block');
               $('.aintro-list1,.aintro-list3,.aintro-list4,.aintro-list5,.aintro-list6,.aintro-list7,.aintro-list8,.aintro-list9').css('display', 'none');
          });
          $('.list3').click(function(){
               $('.aintro-list3').css('display', 'block');
               $('.aintro-list1,.aintro-list2,.aintro-list4,.aintro-list5,.aintro-list6,.aintro-list7,.aintro-list8,.aintro-list9').css('display', 'none');
          });
          $('.list4').click(function(){
               $('.aintro-list4').css('display', 'block');
               $('.aintro-list1,.aintro-list2,.aintro-list3,.aintro-list5,.aintro-list6,.aintro-list7,.aintro-list8,.aintro-list9').css('display', 'none');
          });
          $('.list5').click(function(){
               $('.aintro-list5').css('display', 'block');
               $('.aintro-list1,.aintro-list2,.aintro-list3,.aintro-list4,.aintro-list6,.aintro-list7,.aintro-list8,.aintro-list9').css('display', 'none');
          });
          $('.list6').click(function(){
               $('.aintro-list6').css('display', 'block');
               $('.aintro-list1,.aintro-list2,.aintro-list3,.aintro-list4,.aintro-list5,.aintro-list7,.aintro-list8,.aintro-list9').css('display', 'none');
          });
          $('.list7').click(function(){
               $('.aintro-list7').css('display', 'block');
               $('.aintro-list1,.aintro-list2,.aintro-list3,.aintro-list4,.aintro-list6,.aintro-list5,.aintro-list8,.aintro-list9').css('display', 'none');
          });
          $('.list8').click(function(){
               $('.aintro-list8').css('display', 'block');
               $('.aintro-list1,.aintro-list2,.aintro-list3,.aintro-list4,.aintro-list6,.aintro-list7,.aintro-list5,.aintro-list9').css('display', 'none');
          });
          $('.list9').click(function(){
               $('.aintro-list9').css('display', 'block');
               $('.aintro-list1,.aintro-list2,.aintro-list3,.aintro-list4,.aintro-list6,.aintro-list7,.aintro-list8,.aintro-list5').css('display', 'none');
          });
     })
     </script>
</body>
</html>