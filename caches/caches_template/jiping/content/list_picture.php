<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','header'); ?>
<!--banner start-->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=d09993f2024b18646cbca5379f4d9f7d&pos=aboutus_banner\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'aboutus_banner',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
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
        	<h2 class="bg"><span class="txt"><?php if($parentid) { ?><?php echo $CATEGORYS[$parentid]['catname'];?><?php } else { ?><?php echo $CATEGORYS[$catid]['catname'];?><?php } ?></span><span class="english"><?php echo $CATEGORYS['1']['description'];?></span></h2>
            <ul class="list">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bce6f2a09d852add59615f9362c56952&action=category&catid=%24parentid&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li<?php if($catid==$r['catid']) { ?> class="cur"<?php } ?>><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></li>
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
    <div class="col_main f_r">
    	<div class="position bg_x"><span class="ico ico_home"></span><span class="link">您已经浏览到：<a href="/" title="">首页</a> &gt; <a href="<?php echo $CATEGORYS['2']['url'];?>" title=""><?php echo $CATEGORYS[$parentid]['catname'];?></a> &gt; <span class="now">企业活动</span></span></div>
        <div class="main_content">
        	<div class="activity">
               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fdd667dde353c173fa84f94aa0432180&action=lists&catid=%24catid&num=1&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
             
                <ul  class="list c_f" id="activityImg">
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li class="item">
                    <div  class="activity_bg">
                    <div class="c_img">
                    <a class="fancybox"  href="<?php echo $r['thumb'];?>" data-fancybox-group="gallery" title=""><img src="<?php echo thumb($r[thumb],150,0);?>" width="150" height="112" alt="<?php echo $r['title'];?>"/></a>
                    </div>
                    <p class="pro_tit01 t_c"><?php echo str_cut($r[title],28);?></p>
                      </div>
                    </li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <div class="list_page c_666 t_c"><?php echo $pages;?></div>
                 <input type="hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>" id="now_url" />
               
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>
</div>
<div class="hr_20"></div>
<?php include template('content','footer'); ?>