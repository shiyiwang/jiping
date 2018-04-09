<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','header'); ?>
<!--banner start-->
<div class="other_banner" > <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=20d5be0a09c760a3e1304436e14cb547&pos=product_banner\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'product_banner',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></div>
<!--banner end-->
<!--搜索 start-->
<div class="search_bar">
	<div class="w_1000 o_a">
    	<p class="hot_srh f_l">热搜产品：<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=0c7219842bf2d35b29b40f1dd301d55a&pos=hot_searchkey\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'hot_searchkey',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></p>
         <div class="search bg f_r">
			<?php include template("content","search_bar"); ?>
		</div>
    </div>
</div>
<!--搜索 end-->
<div class="hr_12"></div>
<div class="main w_1000 o_a">
<!--左栏 start-->
    <div class="col_sub f_l">
        <div class="sidebar">
      
         <h2 class="bg"><span class="txt"><?php echo $CATEGORYS['11']['catname'];?></span><span class="english"><?php echo $CATEGORYS['11']['description'];?></span></h2>
            <div class="sidesort">
            

                <ul class="classify">
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=347c71e33ebddf240648c96791c183fa&sql=SELECT+%60arrparentid%60+FROM+ji_category+WHERE+catid%3D%24catid&return=parent_cat_arr\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT `arrparentid` FROM ji_category WHERE catid=$catid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$parent_cat_arr = $a;unset($a);?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <?php $parent_cat_arr=explode(',',$parent_cat_arr[0]['arrparentid']);array_shift($parent_cat_arr)?>
                
                
                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=442b0587c12f471036952766b5668810&action=category&catid=11&num=20&siteid=%24siteid&order=listorder+ASC&return=pro_cat1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$pro_cat1 = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                   <?php $n=1;if(is_array($pro_cat1)) foreach($pro_cat1 AS $cat1) { ?>
                   		<?php $is_this_cat1=in_array($cat1['catid'],$parent_cat_arr)?>
                	<li class="item  <?php if($is_this_cat1) { ?> open <?php } ?> ">
                    	<h3 class="bg_x click"><?php echo $cat1['catname'];?></h3>
                        <div class="li">
                        	<ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=011e4666f71a129cebff16e783ab5a7e&action=category&catid=%24cat1%5B%27catid%27%5D&num=20&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$cat1['catid'],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            	<li class=" <?php if($parent_cat_arr[2]==$r['catid']) { ?> open <?php } ?>">
                                	<p class="h"><span class="ico ico_fold"></span><a class="fw_b" href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></p>
                                    <ul class="sub">
                                        <?php $childarr=explode(',',$r['arrchildid'])?>
                                        <?php if(count($childarr)>1) { ?>
                                            <?php array_shift($childarr)?>
                                            <?php $n=1; if(is_array($childarr)) foreach($childarr AS $k => $v) { ?>
                                                <li ><a href="<?php echo $CATEGORYS[$v]['url'];?>" title=""><?php echo $CATEGORYS[$v]['catname'];?></a></li>
                                            <?php $n++;}unset($n); ?>
                                        <?php } ?>
                                    </ul>
                                </li>
                             	<?php $n++;}unset($n); ?>
                             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </ul>
                        </div>
                    </li>
                     
               <?php $n++;}unset($n); ?>
               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    
                 </ul>
               
                
            </div>
        </div>
       <div class="index_box contact_box">
        
            <div class="contact box">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=af428ce296844110e0f6221359f78dea&pos=index_contact\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_contact',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                
                <div class="tab no_border"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=6d2e36f57cabd4a9235c227016a54a2b&pos=index_contact_img\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_contact_img',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></div>
            </div>
        </div>
    </div>
     <!--左栏 end-->
    <div class="col_main f_r">
    	
		 <div class="position bg_x"><span class="ico ico_home"></span><span class="link">您已经浏览到：<a href="index.php" title="">首页</a> > 
    <a href="<?php echo $CATEGORYS[$parent_cat_arr['0']]['url'];?>" title=""><?php echo $CATEGORYS[$parent_cat_arr['0']]['catname'];?></a> > 
     <a href="<?php echo $CATEGORYS[$parent_cat_arr['1']]['url'];?>" title=""><?php echo $CATEGORYS[$parent_cat_arr['1']]['catname'];?></a> > 
     <span class="now"><?php echo $CATEGORYS[$catid]['catname'];?></span></span></div>
        <div class="detail_info c_f">
            <div class="img" id="photoAlbum">
                <div id="superAlbum">
                    <span class="img_mask" id="img_mask"></span>
                    <?php $id=$_GET['id']?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c6f73542577ae26c4d252c122b937c48&sql=SELECT+%2A+FROM++ji_product+p+LEFT+JOIN+ji_product_data+d+ON+p.id%3Dd.id+WHERE+p.id%3D%24id+&return=alldata\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM  ji_product p LEFT JOIN ji_product_data d ON p.id=d.id WHERE p.id=$id  LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$alldata = $a;unset($a);?>
         
   					<?php $imagedata=$alldata[0]['manypic']?>
            
          			<?php $imagedata=string2array($imagedata)?>
                    <div class="c_img big_img">
                    <table height="100%" width="100%"> <tr><td align="center" ><a href="javascript:"><img src="<?php if($imagedata[0]['url']) { ?><?php echo $imagedata['0']['url'];?><?php } else { ?>statics/images/nopic.gif<?php } ?>" data-superbig="<?php echo $imagedata['0']['url'];?>" id="bigPIC" alt="" /></a></td></tr></table></div>
                </div>
                <div class="po_bigView" id="po_bigView"><img src="" class="superPIC" id="superPIC" alt="" /></div>
                <ul class="s_img_list album_list c_f" id="album_list">
        
                	<?php $n=1;if(is_array($imagedata)) foreach($imagedata AS $re) { ?>
                    
                    <li class="item <?php if($n==1) { ?> select <?php } ?>"><a href="<?php echo $re['url'];?>" data-superbig="<?php echo $re['url'];?>"><img src="<?php echo thumb($re['url'],42,42);?>" alt="" /></a></li>
                    <?php $n++;}unset($n); ?>
                    
                    
                  
                	
                </ul>
            </div>
            <div class="info">
            	<?php $detaildata=$alldata[0]?>
            	<h2 class="c_666 fs_14 line_24"><?php echo $detaildata['title'];?></h2>
                <ul>
                    <li class="item c_f"><span class="a">价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：</span><span class="b"><em class="price"><?php echo $detaildata['price'];?></em> 元/吨</span></li>
                     <li class="item c_f"><span class="a">英文名称：</span><span class="b"><?php echo $detaildata['title_en'];?></span></li>
                    <li class="item c_f"><span class="a">产品型号：</span><span class="b"><?php echo $detaildata['model_number'];?></span></li>
                    <li class="item c_f"><span class="a">发货地点：</span><span class="b"><?php echo $detaildata['sent_address'];?></span></li>
                    														<?php $has_stockarr=array('预定','现货供应')?>
                    <li class="item c_f"><span class="a">供货方式：</span><span class="b"><?php echo $has_stockarr[$detaildata['has_stock']];?></span></li>
                </ul>
                <div class="buy_box">
                    <p class="buy"><a class="bg btn_buy" href="inquery-26-<?php echo $catid;?>-<?php echo $id;?>.html" title=""></a></p>
                    <div class="share c_f">
                        <!-- Baidu Button BEGIN -->
                        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
                            <span class="c_999 f_l shareto">分享到：</span>
                            <a class="bds_tsina"></a>
                            <a class="bds_tqq"></a>
                            <span class="bds_more">更多</span>
                        </div>
                    <script type="text/javascript" id="bdshare_js" data="type=tools&uid=3904611" ></script>
                    <script type="text/javascript" id="bdshell_js"></script>
                    <script type="text/javascript">
                        document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
                    </script>
                    <!-- Baidu Button END -->
                    </div>
                </div>
            </div>          
        </div>
        <div class="hr_20"></div>
        <div class="pro_detail">
        	<div class="hd bg_x">商品详情</div>
            <div class="bd">
            	<?php echo $detaildata['content'];?>
            </div>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="hr_10"></div>
        <!--相关同类产品 start-->
        <div class="like_pro">
        	<div class="hd">相关同类产品</div>
            <div class="bd">
            	<div id="likePre" class="bg"></div>
                <div class="like_box" id="likeBox">
                	<ul class="c_f" id="likeContent">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8842112d2c44343a231f2b7fc0defca2&action=lists&catid=%24catid&num=20&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'limit'=>'20',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li class="item" style="font-size:12px"><?php $r[thumb]= $r[thumb] ? $r[thumb] : IMG_PATH.'nopic.gif'?>
                        	<div class="c_img c_img120"><a href="<?php echo $r['url'];?>" title=""><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" /></a></div>
                            <p class="pro_tit02 t_c"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></p>
<p class="price t_c">价格：<?php if($r['price']) { ?><span class="fw_b c_f60 fs_14"><?php echo $r['price'];?> </span>元<?php } else { ?><span class="pro_inquery"><a href="inquery-26-<?php echo $catid;?>-<?php echo $r['id'];?>.html" title="">询盘</a></span><?php } ?></p>
                       
                        </li>
                        <?php $n++;}unset($n); ?>
                     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
                    </ul>
                </div>
                <div id="likeNext" class="bg"></div>
            </div>
            <script type="text/javascript">
				new Marquee(
				{
				MSClass : ["likeBox","likeContent"],
				PrevBtnID : "likePre",
				NextBtnID : "likeNext",
				Direction : 2,
				Step : 0.1,
				Width : 690,
				Height : 200,
				Timer : 20,
				DelayTime : 3000,
				WaitTime : 3000,
				ScrollStep: 0,
				SwitchType: 0,
				AutoStart : true
				});
			</script>
        </div>
        <!--相关同类产品 end-->
    </div>
</div>
<!--禁止复制内容-->
  <SCRIPT language=javascript type=text/javascript>
<!--
document.oncontextmenu=new Function('event.returnValue=false;');
document.onselectstart=new Function('event.returnValue=false;');
-->
  </SCRIPT>
<div class="hr_20"></div>
<?php include template('content','footer'); ?>
<script type="text/javascript">
(function($){
	new photoAlbum($('#photoAlbum'));/*相册*/
	new superIMG($('#superAlbum'));/*摸过去放大*/
	$('.like_pro').bgHover();
	$('.big_img img').LoadImage(true,320,320);
	$('.like_pro img').LoadImage(true,120,120);
	
})(jQuery);
</script>