$(function() {
	jQuery.focus = function(slid) { 
		var sWidth = 1400 //1920; //设置焦点图的宽度（显示面积）
		var len = $(slid).find("ul li").length; //获取焦点图个数
		var index = 0;
		var picTimer;
		var w = document.body.clientWidth;
		
		//以下代码添加数字按钮
		var tab = "<div class='tab'>";
		for(var i=0; i < len; i++) {
			var ii = i+1;
			tab += "<span></span>";
		}
		 tab += "</div>";
		$(slid).append(tab);
	
		//为小按钮添加鼠标滑入事件，以显示相应的内容
		$(slid+" div.tab span").mouseenter(function() {
			index = $(slid+" .tab span").index(this);
			showPics(index);
		}).eq(0).trigger("mouseenter");
	
		//本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
		$(slid+" ul").css("width",sWidth * (len));
		$(slid+" .cont").css({"width":w,"left":-(sWidth-w)/2});
		function show(){
			var w = $(window).width();
			$(slid+" .cont").css({"width":w,"left":-(sWidth-w)/2});
			$(slid).css({'width':w});
			}
			window.onload = show;
			window.onresize = show;
		
		//鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
		$(slid).hover(function() {
			clearInterval(picTimer);
		},function() {
			picTimer = setInterval(function() {
				showPics(index);
				index++;
				if(index == len) {index = 0;}
			},4000); //此4000代表自动播放的间隔，单位：毫秒
		}).trigger("mouseleave");
		
		//显示图片函数，根据接收的index值显示相应的内容
		function showPics(index) { //普通切换
			var nowLeft = -index*sWidth; //根据index值计算ul元素的left值
			$(slid+" ul").stop(true,false).animate({"left":nowLeft},500); //通过animate()调整ul元素滚动到计算出的position
			$(slid+" .tab span").removeClass("active").eq(index).addClass("active"); //为当前的按钮切换到选中的效果
		}	
	};	
});

