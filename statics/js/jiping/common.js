//导航
$.fn.MainNav = function(){
	var self = $(this);
	var bgName = 'cur';
    $("#mainNav li").hover(function () {
        $("div", this).slideDown(200); $(this).addClass("cur");
    },
    function () {
        $(this).removeClass("cur"); $("div", this).slideUp(200);
    });
}

//触摸背景
$.fn.bgHover = function(){
	var self = $(this);
	var tab = self.find('.item');
	tab.hover(function(){
		$(this).toggleClass("cur");
	});
}

/*产品页分类列表*/
$.fn.Subsort = function(){
	var self = $(this);
	self.delegate('.click','click',function(event){
		$(this).parent().toggleClass('open');
		event.preventDefault();
	});
	self.delegate('.ico_fold','click',function(event){
		$(this).parent().parent().toggleClass('open');
		event.preventDefault();
	});
}

/*详情页放大图片*/
function photoAlbum(node){
	var tab = node.find('.album_list'),
		tabs = tab.find('.item'),
		srcList = tabs.find('a'),
		bigPIC = node.find('#bigPIC'),
		imglink = '',
		superimgSRC = '',
		nowimglink = tab.find('.select').find('a').attr('href'),i = 0;
	var superPIC = $('#superPIC');
	tabs.hover(function(){
		i = tabs.index($(this));
		imglink = srcList.eq(i).attr('href');
		bigPIC.attr('src',imglink);
	},function(){
		
		bigPIC.attr('src',nowimglink);
	});
	tabs.bind('click',function(event){
		i = tabs.index($(this));
		imglink = srcList.eq(i).attr('href');
		superimgSRC = srcList.eq(i).attr('data-superbig');
		tabs.removeClass('select');
		$(this).addClass('select');
		bigPIC.attr('src',imglink);
		nowimglink = imglink;
		//超级大图
		superPIC.attr('src',superimgSRC);
		event.preventDefault();
	});
}
function superIMG(node){
	var img = node.find('#bigPIC'),
		mask = node.find('#img_mask'),
		po = jQuery('#po_bigView'),
		superIMG = po.find('#superPIC'),
		offset = node.offset(),
		offset_x = offset.left,
		offset_y = offset.top;
	var superSRC = img.attr('data-superbig');
	superIMG.attr('src',superSRC);
	node.mousemove(function(event){
		mask.css('display','block');
		po.show();
		var mousex = event.pageX - offset_x;
		var mousey = event.pageY - offset_y;
		var mask_x = mousex-75;
		var mask_y = mousey-75;
		if(mask_x<0)mask_x = 0;
		if(mask_y<0)mask_y = 0;
		if(mask_x+150 > 332)mask_x = 184;
		if(mask_y+150 > 332)mask_y = 184;
		mask.css({'left':mask_x,'top':mask_y});
		po.css({'top':offset_y,'left':offset_x+348});
		superIMG.css({'left':-mask_x*2,'top':-mask_y*2});
	});
	mask.mouseout(function(){
		mask.css('display','');
		po.hide();
	});
}