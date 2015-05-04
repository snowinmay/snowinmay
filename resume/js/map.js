/*   
 * 项目名称：百度地图+天气预报
 * 内容：所有涉及到该项目的js文件类和变量的定义
 * 时间：2013.8.14
 * 作者：Prince Yu
*/

//定义对象用来保存全局变量
var PRINCE = {};
var map = PRINCE.map;
// 百度地图API功能
map = new BMap.Map("allmap"); // 创建Map实例
map.addControl(new BMap.NavigationControl());               // 添加平移缩放控件
map.addControl(new BMap.ScaleControl());                    // 添加比例尺控件
map.addControl(new BMap.OverviewMapControl());              //添加缩略地图控件
map.enableScrollWheelZoom();                            //启用滚轮放大缩小
map.addControl(new BMap.MapTypeControl());          //添加地图类型控件
//map.addControl(new BMap.GeolocationControl(BMAP_ANCHOR_TOP_LEFT));      //定位控件 默认在左下方
//map.addControl(new BMap.CopyrightControl());     //好像不用加系统就有了
map.setCurrentCity("杭州");          // 设置地图显示的城市 此项是必须设置的
//杭州六人帮
PRINCE.friends = {
	//name :姓名
	//address：居住地
	//pointX:纬度
	//pointY:经度
	//pointT:地点类型，0表示人物，1表示地名
	//pointI:图片地址，如果是pointT:0的化就有图片地址

	liujie : { name:"刘捷", address:"江苏省无锡市",weiboId:"http://weibo.com/rakejliu", pointX:120.311143,pointY:31.490637,pointT:0,pointI:"img/baidu_map/liujie.jpg"},
	xiaoyin : { name:"小尹", address:"中国上海",weiboId:"http://weibo.com/u/1873456180", pointX:121.4689,pointY:31.2418,pointT:0,pointI:"img/baidu_map/xiaoyin.jpg"},
	shijing : { name:"石晶", address:"浙江省宁波市",weiboId:"http://weibo.com/cyndishi", pointX:121.55,pointY:29.87457,pointT:0,pointI:"img/baidu_map/shijing.jpg"},
	qinqin : { name:"亲亲", address:"浙江省杭州市",weiboId:"http://weibo.com/u/1078713094", pointX:120.1378,pointY:30.2698,pointT:0,pointI:"img/baidu_map/qinqin.jpg"},
	xiaobao : { name:"小宝", address:"浙江省杭州市",weiboId:"http://weibo.com/sankoyou", pointX:120.1378,pointY:30.2398,pointT:0,pointI:"img/baidu_map/xiaobao.jpg"},
	dada : { name:"俞王子", address:"中国北京",weiboId:"http://weibo.com/123114623", pointX:116.384,pointY:39.945,pointT:0,pointI:"img/baidu_map/dada.jpg"}
};
//去过的地方和想去的地方
PRINCE.place = {
	//name:城市名
	//pointX:纬度
	//pointY:经度
	//pointT:地点类型，0表示去过，1表示想去
	//time:事件
	//memory:发生的事情
	hangz:{name:"杭州",pointX:120.1578,pointY:30.2798,time:"2011.2-2012.10",memory:"毕业后就选择工作的城市。",pointT:4},
	nanj:{name:"南京",pointX:118.86,pointY:32.03,time:"大四和在杭州工作期间",memory:"去南京出过差，大四毕业前去南京玩过一次。",pointT:0},
	haerb:{name:"哈尔滨",pointX:126.633,pointY:45.75,time:"2013.1",memory:"去哈尔滨其实是冲着冰雪大世界去的。冬天的哈尔滨很美。",pointT:0},
	xian:{name:"西安",pointX:108.95,pointY:34.266,time:"2013年端午节",memory:"一直向往的城市。",pointT:0},
	beij:{name:"北京",pointX:116.404,pointY:39.915,time:"2012.11-至今",memory:"在北京学习，旅行。",pointT:4},
	tianj:{name:"天津",pointX:117.2,pointY:39.133,time:"2013.4",memory:"天津离北京比较近，过去半个小时就到了。去天津是为了去看天津之眼。",pointT:0},
	taian:{name:"泰安",pointX:117.08,pointY:36.11,time:"2012.12",memory:"记得是去年12月份去的泰山，泰山也成为了我们出游北京的第一个地方。",pointT:0},
	shaox:{name:"绍兴",pointX:120.6,pointY:30.00,time:"从出生到现在",memory:"我的家乡。",pointT:2},
	huzhou:{name:"湖州",pointX:120.08,pointY:30.83,time:"2007.9-2011.6",memory:"大学四年的城市，挺安逸的一个地方，但是毕业后就没有再回去了。",pointT:3},
	shangh:{name:"上海",pointX:121.43,pointY:31.3,time:"大学期间和在杭州工作期间",memory:"去上海出过差，看过世博会，大二的时候还去秋游过。",pointT:0},
	yanan:{name:"延安",pointX:109.28,pointY:36.35,time:"2013年端午节",memory:"去看了壶口瀑布。",pointT:0},
	hain:{name:"海南",pointX:110.35,pointY:20.023,time:"想去",memory:"中国最南端。",pointT:1},
	xizang:{name:"西藏",pointX:91.12377,pointY:29.65277,time:"想去",memory:"青藏高原。",pointT:1},
	dunh:{name:"敦煌",pointX:94.668,pointY:40.14829,time:"想去",memory:"敦煌莫高窟，大沙漠。",pointT:1},
	mohe:{name:"漠河",pointX:122.545,pointY:52.978,time:"想去",memory:"中国最北端，北极村。",pointT:1}
}

PRINCE.addPoint = function(obj){
	//name:城市名
	//pointX:纬度
	//pointY:经度
	//pointT:地点类型，0表示去过，1表示想去,2表示家乡，3表示学校
	//time:事件
	//memory:发生的事情
	var point = new BMap.Point(obj.pointX,obj.pointY);
	map.centerAndZoom(point, 11);
	///自定义开始
	if (obj.pointT === 0) {
		var BMapSize = new BMap.Size(-46, -21);   // 设置图片偏移
	}else if(obj.pointT === 1){
		BMapSize = new BMap.Size(0, -21);   // 设置图片偏移 
	}else if(obj.pointT === 2){
		BMapSize = new BMap.Size(-23, -21);   // 设置图片偏移 
	}else if(obj.pointT === 3){
		BMapSize = new BMap.Size(-69, -21);   // 设置图片偏移 
	}else if(obj.pointT === 4){
		BMapSize = new BMap.Size(-92, -21);   // 设置图片偏移 
	}

	var myIcon = new BMap.Icon("img/baidu_map/us_mk_icon_bt00yb.png", new BMap.Size(23, 25), {    
	// 指定定位位置。   
	// 当标注显示在地图上时，其所指向的地理位置距离图标左上    
	// 角各偏移10像素和25像素。您可以看到在本例中该位置即是   
   // 图标中央下端的尖角位置。    
   offset: new BMap.Size(5, 15),    
   // 设置图片偏移。   
   // 当您需要从一幅较大的图片中截取某部分作为标注图标时，您   
   // 需要指定大图的偏移位置，此做法与css sprites技术类似。  
   imageOffset: BMapSize     
 });      
	// 创建标注对象并添加到地图   
	 var marker = new BMap.Marker(point, {icon: myIcon});
	///自定义结束
	map.addOverlay(marker);  // 将标注添加到地图中
	var pInfo = '<div class="infowin"><p><b>'+obj.name+'</b></p><p>'+obj.time+'</p><p>'+obj.memory +'</p></div>';
	marker.addEventListener("click", function(){   
	 	var infoWindow = new BMap.InfoWindow(pInfo);  // 创建信息窗口对象
		map.openInfoWindow(infoWindow, point);     // 打开信息窗口
	});
	
}

//自定义图标
PRINCE.addMarker = function(obj){  // 创建图标对象   
var point = new BMap.Point(obj.pointX, obj.pointY);
map.centerAndZoom(point, 11);  // 编写自定义函数，创建标注
var myIcon = new BMap.Icon("img/baidu_map/us_mk_icon_bt00yb.png", new BMap.Size(23, 21), {    
   offset: new BMap.Size(10, 25),    
   imageOffset: new BMap.Size(0, 0)   // 设置图片偏移  
 });      
// 创建标注对象并添加到地图   
 var marker = new BMap.Marker(point, {icon: myIcon});    
 map.addOverlay(marker);    

	var pInfo = '<div class="infowin"><p><b>'+obj.name+'</b></p><p>'+obj.address+'</p><p><a target="_blank" href="'+obj.weiboId +'">'+obj.weiboId +'</a></p></div><div style="float:left;margin:0 0 0 5px;"><img class="myinfopic" src="'+obj.pointI+'" /></div>';
	marker.addEventListener("click", function(){   
	 	var infoWindow = new BMap.InfoWindow(pInfo);  // 创建信息窗口对象
		map.openInfoWindow(infoWindow, point);     // 打开信息窗口
	});
}