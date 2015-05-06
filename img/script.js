$(function(){
	$("#prince").click(function(){
		var computerChoice = Math.random();
		if (computerChoice < 0.05) {
			computerChoice = "1.png";
		}
		else if(computerChoice <= 0.1) {
			computerChoice = "2.png";
		}
		else if(computerChoice <= 0.15) {
			computerChoice = "3.png";
		}
		else if(computerChoice <= 0.2) {
			computerChoice = "4.png";
		}
		else if(computerChoice <= 0.25) {
			computerChoice = "5.png";
		}
		else if(computerChoice <= 0.3) {
			computerChoice = "6.png";
		}
		else if(computerChoice <= 0.35) {
			computerChoice = "7.png";
		}
		else if(computerChoice <= 0.4) {
			computerChoice = "8.png";
		}
		else if(computerChoice <= 0.45){
			computerChoice = "9.png";
		}
		else if(computerChoice <= 0.5){
			computerChoice = "10.png";
		}
		else if(computerChoice <= 0.55){
			computerChoice = "19.png";
		}
		else if(computerChoice <= 0.6){
			computerChoice = "12.png";
		}
		else if(computerChoice <= 0.65){
			computerChoice = "13.png";
		}
		else if(computerChoice <= 0.7){
			computerChoice = "14.png";
		}
		else if(computerChoice <= 0.75){
			computerChoice = "15.png";
		}
		else if(computerChoice <= 0.8){
			computerChoice = "16.png";
		}
		else if(computerChoice <= 0.85){
			computerChoice = "17.png";
		}
		else if(computerChoice <= 0.9){
			computerChoice = "18.png";
		}
		else{
			computerChoice = "11.png";
		}
		//alert(computerChoice);
		$(this).css('backgroundImage', 'url(img/'+computerChoice+')');
	});	

	$('#about li').bind('click', function(event) {
		$('#info,#det_pos,#detail').removeClass("hid_detail");
		var liIndex = $(this).index();
		$('#detail .book').eq(liIndex).removeClass("hid_detail").siblings().addClass("hid_detail");
	});
			
	$('.show_detail').click(function(){
		$('#info,#det_pos,#detail,#tools,#way,#net,#music,#place,#book').addClass("hid_detail");
	});

	//边栏导航显示
	$('.showme').mouseover(function(){
		$('#about').css('left', '0');
	})
	$('#about').mouseleave(function(){
		$(this).css('left', '-91px');
	})

	//去过的地方，颜色和北京
	$("#detail li, #about li").each(function(i){
		var a = Math.random();
		var ranClass = equRandom(a);
		$(this).addClass(ranClass);
	 });

	//我的前端之路
	$('.way_nav li').bind('click', function(event) {
		$(this).addClass("selected").siblings().removeClass("selected");
		var liIndex = $(this).index();
		$('#way .store .company').hide();
		console.log($('#way .store').children('div').length);
		$('#way .store').children('div').eq(liIndex).show().siblings('div').hide();				
	});

	//判断随机数大小的函数			
	function equRandom(placeChoice){				
		if (placeChoice <= 0.25) {
			return "suc";
		}
		else if(placeChoice <= 0.5) {
			return "warning";
		}
		else if(placeChoice <= 0.75) {
			return "alert";
		}
		else {
			return "alert-info";
		}
	}
});

setInterval("showAuto()", 5000);
//自动轮播
function showAuto(){
	$("#prince").trigger('click');
};