<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--banner start-->
<div class="other_banner" > <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=c8b5b4188d58ce041ec5a51147ab5efd&pos=news_banner\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'news_banner',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></div>
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
        	<h2 class="bg"><span class="txt"><?php if($parentid) { ?><?php echo $CATEGORYS[$parentid]['catname'];?><?php } else { ?><?php echo $CATEGORYS[$catid]['catname'];?><?php } ?></span><span class="english"><?php echo $CATEGORYS['6']['description'];?></span></h2>
            <ul class="list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1151dcf91644ce3810ef885101a1bfff&sql=SELECT+arrchildid+FROM+ji_category+WHERE+catid%3D6&cache=%273600&return=catarr\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT arrchildid FROM ji_category WHERE catid=6 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$catarr = $a;unset($a);?>
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
    <div class="col_main f_r">
    	<div class="position bg_x"><span class="ico ico_home"></span><span class="link">您已经浏览到：<a href="/" title="">首页</a> &gt; <span class="now"><?php if($parentid) { ?><a href="<?php echo $CATEGORYS[$parentid]['url'];?>"><?php echo $CATEGORYS[$parentid]['catname'];?></a><?php } else { ?><a href="<?php echo $CATEGORYS[$catid]['url'];?>"><?php echo $CATEGORYS[$catid]['catname'];?></a><?php } ?></span></span></div>
        <div class="main_content">
        	<div class="news">
            	<ul class="list">
              	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=83e86dbe8e634be99f241427bdc4f45f&action=lists&catid=%24catid&num=20&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?> 
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                	<li><span class="c_666 f_r"><?php echo date("Y-m-d",$r['inputtime']);?></span><a href="<?php echo $r['url'];?>" title=""><?php echo $r['title'];?></a></li>
                    <?php if($n==10) { ?>
                    <li class="news_line"></li>
                    <?php } ?>
                    <?php if($n==20) { ?>
                     <li class="news_line"></li>
                    <?php } ?>
                    <?php $n++;}unset($n); ?>
                </ul>
                <div class="list_page c_666 t_c"> <?php echo $pages;?></div>
                <input type="hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>" id="now_url" />
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>
</div>
<div class="hr_20"></div>
<?php include template("content","footer"); ?>