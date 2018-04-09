<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','header'); ?>
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
        	<h2 class="bg"><span class="txt"><?php echo $CATEGORYS[$parentid]['catname'];?></span><span class="english"><?php echo $CATEGORYS['6']['description'];?></span></h2>
            <ul class="list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1151dcf91644ce3810ef885101a1bfff&sql=SELECT+arrchildid+FROM+ji_category+WHERE+catid%3D6&cache=%273600&return=catarr\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT arrchildid FROM ji_category WHERE catid=6 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$catarr = $a;unset($a);?>
            <?php $catarr=$catarr[0]['arrchildid']?>
            <?php $catarr=explode(',',$catarr)?>
            <?php array_shift($catarr)?>
                <?php $n=1;if(is_array($catarr)) foreach($catarr AS $cid) { ?>
                <li <?php if($catid==$cid) { ?> class="cur"<?php } ?>><a href="<?php echo $CATEGORYS[$cid]['url'];?>" title="<?php echo $CATEGORYS[$cid]['catname'];?>"><?php echo $CATEGORYS[$cid]['catname'];?></a></li>
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
    	<div class="position bg_x"><span class="ico ico_home"></span><span class="link">您已经浏览到：<a href="index.php" title="">首页</a> &gt; <span class="link"><a href="<?php echo $CATEGORYS['6']['url'];?>" title="<?php echo $CATEGORYS['6']['catname'];?>"><?php echo $CATEGORYS['6']['catname'];?></a></span>&nbsp;&gt; <span class="now"><?php echo $CATEGORYS[$catid]['catname'];?></span></span></div>
        <div class="main_content">
        	<div class="news_info">
            	<h3 class="fs_18 t_c"><?php echo $title;?></h3>
                <p class="infos t_c c_999"><span class="mr">点击数：<span id="hits"></span>次</span><span class="mr">发表时间：<?php echo $inputtime;?></span><span>来源：<?php echo $copyfrom;?></span></p>
                  <script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>    
                <div class="info">
                <?php echo $content;?>
                  </div>
                <div class="info_d c_f">
                    <div class="share f_r">
                        <!-- Baidu Button BEGIN -->
                        <div class="bdshare_t bds_tools get-codes-bdshare" id="bdshare">
                            <span class="f_l shareto">分享到：</span>
                            <a class="bds_qzone" title="分享到QQ空间" href="#"></a>
                            <a class="bds_tsina" title="分享到新浪微博" href="#"></a>
                            <a class="bds_tqq" title="分享到腾讯微博" href="#"></a>
                            <a class="bds_renren" title="分享到人人网" href="#"></a>
                            <a class="bds_kaixin001" title="分享到开心网" href="#"></a>
                            <a class="bds_tsohu" title="分享到搜狐微博" href="#"></a>
                            <a class="bds_douban" title="分享到豆瓣网" href="#"></a>
                            <a class="bds_t163" title="分享到网易微博" href="#"></a>
                            <a class="bds_taobao" title="分享到我的淘宝" href="#"></a>
                            <a class="bds_tqf" title="分享到腾讯朋友" href="#"></a>
                            <span class="bds_more">更多</span>
                        </div>
                        <script data="type=tools&amp;uid=3904611" id="bdshare_js" type="text/javascript" src="http://bdimg.share.baidu.com/static/js/bds_s_v2.js?cdnversion=377116"></script>
                        <script id="bdshell_js" type="text/javascript" src="http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=11"></script>
                        <script type="text/javascript">
                            document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
                        </script>
                        <!-- Baidu Button END -->
                    </div>
                    <div class="keywords f_l">关键字：<?php $n=1;if(is_array($keywords)) foreach($keywords AS $keyword) { ?><a href="<?php echo APP_PATH;?>index.php?m=content&c=tag&catid=<?php echo $catid;?>&tag=<?php echo urlencode($keyword);?>" class="blue"><?php echo $keyword;?></a> <?php $n++;}unset($n); ?></div>
                </div>
                <div class="fanye fs_14">
                    <span>上一篇：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></span><span>下一篇：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></span>
                </div>
            </div>
            <div class="related_news">
                <h3 class="fs_14">热点新闻</h3>
                <ul class="c_f">
                   
      
                    
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1dc9370098dcb2dcbe3b043f0bbb93ad&action=position&posid=18&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','limit'=>'6',));}?>

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