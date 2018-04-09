<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--底部start-->
<div class="footer">
	<div class="footer_nav">
        <div class="w_1000 o_a">
            <ul class="main_li c_f">
            	<li class="item pro_item">
                    <h3 class="fs_14">主营产品类目</h3>
                    <ul class="sub_li c_f">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=303d5ad035db093911d4085c9e7ef96e&action=category&catid=11&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>                           
                  		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                        
                    </ul>
                </li>
                <li class="item">
                    <h3 class="fs_14"><?php echo $CATEGORYS['1']['catname'];?></h3>
                    <ul class="sub_li">
                      
                       
                       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=be2ef3abdf542e1dcb9ac18eb6bbea45&action=category&catid=1&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>                           
               			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                       
                    </ul>
                </li>
                <li class="item">
                    <h3 class="fs_14"><?php echo $CATEGORYS['6']['catname'];?></h3>
                    <ul class="sub_li">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=40cd59ef57cee9022e0519da0cc1ed03&action=category&catid=6&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'6','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>                           
               			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                    </ul>
                </li>
                <li class="item">
                    <h3 class="fs_14">其它信息</h3>
                    <ul class="sub_li">
                        <li><a href="<?php echo $CATEGORYS['33']['url'];?>" title=""><?php echo $CATEGORYS['33']['catname'];?></a></li>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0ed7d30899304aa33693eb580361a771&action=category&catid=27&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'27','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>                           
               			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </li>
                <li class="item no_bg weixin">
                    <h3 class="fs_14">吉平微信</h3>
                    <div class="img"><img src="<?php echo IMG_PATH;?>jiping/weixin.jpg" alt="" /><span class="fs_14 ff_yh">微信号：jiping</span></div>
                    <div>
                    	<h4 class="fw_n">添加方式：</h4> 
                        <p>1.按号码查找：jiping</p>
                        <p>2.扫描上面的二维码</p>
                	</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer_cont w_1000 o_a">
    	<div class="foot_link t_c"><a href="index.php" title="">首页</a><a href="<?php echo $CATEGORYS['2']['url'];?>" title=""><?php echo $CATEGORYS['2']['catname'];?></a><a href="<?php echo $CATEGORYS['3']['url'];?>" title=""><?php echo $CATEGORYS['3']['catname'];?></a><a href="<?php echo $CATEGORYS['24']['url'];?>" title=""><?php echo $CATEGORYS['24']['catname'];?></a><a href="<?php echo $CATEGORYS['9']['url'];?>" title=""><?php echo $CATEGORYS['9']['catname'];?></a><a href="<?php echo $CATEGORYS['34']['url'];?>" title=""><?php echo $CATEGORYS['34']['catname'];?></a><a href="<?php echo $CATEGORYS['32']['url'];?>" title=""><?php echo $CATEGORYS['32']['catname'];?></a><a href="<?php echo $CATEGORYS['35']['url'];?>" title=""><?php echo $CATEGORYS['35']['catname'];?></a><a class="no_border" href="<?php echo $CATEGORYS['37']['url'];?>" title=""><?php echo $CATEGORYS['37']['catname'];?></a></div>
    	<div class="foot_info">
        	<p class="t_c c_999 line_24"><span class="mr10">&copy; Copyright 2003-2011 深圳市吉平化工有限公司 粤ICP备10225501号-1 </span>
            	<a target="_blank" href="http://tongji.baidu.com/hm-web/welcome/ico?s=1304c4b497fc17d600ed45ef26ec20a5"><img width="20" height="20" border="0" src="http://eiv.baidu.com/hmt/icon/24.gif" /></a>
                <a title="站长统计" target="_blank" href="http://www.cnzz.com/stat/website.php?web_id=3993825"><img vspace="0" hspace="0" border="0" src="http://icon.cnzz.com/pic1.gif" /></a>
            </p>
        </div>
        <div class="foot_img t_c"><a href="javascript:" title="" target="_blank"><img src="<?php echo IMG_PATH;?>jiping/foot_img01.gif" alt="" /></a><a href="javascript:" title="" target="_blank"><img src="<?php echo IMG_PATH;?>jiping/foot_img02.gif" alt="" /></a><a href="javascript:" title="" target="_blank"><img src="<?php echo IMG_PATH;?>jiping/foot_img03.gif" alt="" /></a><a href="javascript:" title="" target="_blank"><img src="<?php echo IMG_PATH;?>jiping/foot_img04.gif" alt="" /></a><a href="javascript:" title="" target="_blank"><img src="<?php echo IMG_PATH;?>jiping/foot_img05.gif" alt="" /></a><a href="javascript:" title="" target="_blank"><img src="<?php echo IMG_PATH;?>jiping/foot_img06.gif" alt="" /></a></div>
    </div>
</div>
<!--底部end-->
<script type="text/javascript" src="<?php echo JS_PATH;?>jiping/common.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jiping/select.jQuery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jiping/backToTop.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jiping/LoadImage.js"></script>
<script type="text/javascript">
(function($){
	$('#mainNav').MainNav();
	$('#headSearch').selectbox();
	$('#proSort').bgHover();
	$('.sidesort').Subsort();
	$('.c_img140 img').LoadImage(true,140,140);
	$('.c_img87 img').LoadImage(true,87,87);
})(jQuery);
</script>
<script type="text/javascript">
(function($){
	new photoAlbum($('#photoAlbum'));/*相册*/
	new superIMG($('#superAlbum'));/*摸过去放大*/
	$('.like_pro').bgHover();
	$('.big_img img').LoadImage(true,320,320);
	$('.like_pro img').LoadImage(true,120,120);
})(jQuery);
</script>
<script type="text/ecmascript">
function check_search(){
	if($("#q").val()=="请输入搜索关键字"){
		$("#q").val('');
	}
}
</script>
<script type="text/javascript">
      
function addFavorite(){
		try{
			window.external.addFavorite('http://www.szjiping.com','深圳市吉平化工有限公司');
		}
		catch (e){
				 try{
					window.sidebar.addPanel('深圳市吉平化工有限公司','http://www.szjiping.com',"");
				 }
				 catch (e){
						alert("加入收藏失败，请使用Ctrl+D进行添加");
				 }
		}
}


function setHomepage(){
	 var url = 'http://www.szjiping.com'; 
	 if (document.all){
		  document.body.style.behavior='url(#default#homepage)'; 
		  document.body.setHomePage(url); 
	}else if (window.sidebar){ 
			if(window.netscape){
				 try{
					  netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect"); 
				}catch (e){ 
						  
						  }
			} 
			var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components. interfaces.nsIPrefBranch); 
			prefs.setCharPref('browser.startup.homepage',url);
	}else{
	
	} 
}
						
</script>
<SCRIPT LANGUAGE="JavaScript" src=http://float2006.tq.cn/floatcard?adminid=9486594&sort=0 ></SCRIPT>
</body>
</html>