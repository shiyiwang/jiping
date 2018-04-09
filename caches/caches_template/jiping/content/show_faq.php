<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','header'); ?>
<!--banner start-->
<div class="other_banner" > <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=734d66d84761f79e30b471fa58ee7fcd&pos=service_banner\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'service_banner',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></div>
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
        	<h2 class="bg"><span class="txt"><?php echo $CATEGORYS['27']['catname'];?></span><span class="english"><?php echo $CATEGORYS['27']['description'];?></span></h2>
            <ul class="list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6f7811c9209b92d669148ac5e67fc8ba&sql=SELECT+arrchildid+FROM+ji_category+WHERE+catid%3D27&cache=%273600&return=catarr\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT arrchildid FROM ji_category WHERE catid=27 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$catarr = $a;unset($a);?>
            <?php $catarr=$catarr[0]['arrchildid']?>
            <?php $catarr=explode(',',$catarr)?>
            <?php array_shift($catarr)?>
                <?php $n=1;if(is_array($catarr)) foreach($catarr AS $cid) { ?>
                <li<?php if($catid==$cid) { ?> class="cur"<?php } ?>><a href="<?php echo $CATEGORYS[$cid]['url'];?>" title="<?php echo $CATEGORYS[$cid]['catname'];?>"><?php echo $CATEGORYS[$cid]['catname'];?></a></li>
                <?php $n++;}unset($n); ?>  
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    	<div class="index_box contact_box">
        
            <div class="contact box">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=af428ce296844110e0f6221359f78dea&pos=index_contact\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_contact',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                
                <div class="tab no_border"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=6d2e36f57cabd4a9235c227016a54a2b&pos=index_contact_img\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_contact_img',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></div>
            </div>
        </div>
    </div>
    <!--左栏 end-->
    <div class="col_main f_r"><?php echo $parentid;?>
    	<div class="position bg_x"><span class="ico ico_home"></span><span class="link">您已经浏览到：<a href="/" title="">首页</a> &gt;<span class="link"><a href="<?php echo $CATEGORYS['28']['url'];?>" title="<?php echo $CATEGORYS['27']['catname'];?>"><?php echo $CATEGORYS['27']['catname'];?></a>&nbsp;&gt;&nbsp;<a href="<?php echo $CATEGORYS[$catid]['url'];?>" title="<?php echo $CATEGORYS[$catid]['catname'];?>"><?php echo $CATEGORYS[$catid]['catname'];?></a></span>&nbsp;&gt;</span>&nbsp; <span class="now"><?php echo $title;?></span></span></div>
        <div class="main_content">
        	<div class="news_info faq_info">
            	  
                <div class="faq">
                 <div class="hd"><span class="ico ico_q"></span><span class="ques"><?php echo $title;?></span></div>
                   <div class="bd"><span class="ico ico_a"></span><span class="answer"><?php echo $content;?></span></div>
   
                  </div>
                
                <div class="fanye fs_14">
                    <span>上一篇：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></span><span>下一篇：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></span>
                </div>
            </div>
            <div class="related_news">
                <h3 class="fs_14">常见问题</h3>
                <ul class="c_f">
                   
      
                    
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5acfb1ca42a0f88e464bba1e64a7ec5e&action=position&posid=19&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder DESC','limit'=>'6',));}?>

                    <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                    
                    <li> <a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
                    
                    <?php $n++;}unset($n); ?>
                    
                    
                </ul>
            </div> 
        </div>
    </div>
</div>
<div class="hr_20"></div>
<?php include template("content","footer"); ?>