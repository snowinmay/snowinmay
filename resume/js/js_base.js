/*
 * 功能：元素检测
 * 时间：3013.06.27
 * 作者：Prince Yu
 */

//获取元素的代码
function getElement (id) {
	// body...
	if (document.getElementById) {
		return document.getElementById(id);
	} else if(document.all){
		return document.all[id];
	} else {
		throw new Error("No way to retrieve element !");
	}
}

//跨浏览器取得视窗的大小。
var pageWidth = window.innerWidth;
var pageHeight = window.innerHeight;
if (typeof pageWidth != "number") {
      if (document.compatMode == "CSS1Compat") {
           pageWidth = document.documentElement.clientWidth;
           pageHeight = document.documentElement.clientHeight;
      } else{
           pageWidth = document.body.clientWidth;
           pageHeight = document.body.clientHeight;
      }
}

//跨浏览器取得窗口左边和右边的位置。
var leftPos = (typeof window.screenLeft == "number") ? window.screenLeft : window.screenX;
var topPos = (typeof window.screenTop == "number") ? window.screenTop : window.screenY;

// 动态脚本
function loadScript(url){
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = url;
	document.body.appendChild(script);
}
//动态样式
function loadStyle(url){
	var link = document.createElement("link");
	script.rel = "stylesheet";
	script.type = "text/css";
	script.href = url;
	var head = document.getElementsByTagName('head')[0];	
	head.appendChild(link);
}