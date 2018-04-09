<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','header'); ?>
<!--banner start-->
<div class="other_banner" > <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=835e6be345fd2e2041d8bc1d6c65b575&pos=hiring_banner\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'hiring_banner',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></div>
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
        	<h2 class="bg"><span class="txt"><?php echo $CATEGORYS[$catid]['catname'];?></span><span class="english"><?php echo $CATEGORYS['32']['description'];?></span></h2>
            <ul class="list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=44a509a3563c3962b11e1c355b82281b&sql=SELECT+id%2Ctitle%2Curl+FROM+ji_news+WHERE+catid%3D%24catid&cache=%273600&num=5&return=latestarr\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT id,title,url FROM ji_news WHERE catid=$catid LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$latestarr = $a;unset($a);?>
           		<?php $id=$_GET['id']?>
                <?php $n=1;if(is_array($latestarr)) foreach($latestarr AS $hiring) { ?>
      
                <li <?php if($hiring['id']==$id) { ?> class="cur" <?php } ?>><a href="<?php echo $hiring['url'];?>" title="<?php echo $hiring['title'];?>"><?php echo $hiring['title'];?></a></li>
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
    	<div class="position bg_x"><span class="ico ico_home"></span><span class="link">您已经浏览到：<a href="/" title="">首页</a> &gt; <a href="<?php echo $CATEGORYS[$catid]['url'];?>" title=""><?php echo $CATEGORYS[$catid]['catname'];?></a> &gt; <span class="now"><?php echo $title;?></span></span></div>
        <div class="main_content">
        	<div class="hiring">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=0a49ff6d14c89cfb42d11d173cd99e04&pos=hiring_contect\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'hiring_contect',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
             
             <div class="hiring_info">
                	<div class="hd bg_x"><span class="f_r c_666">发布时间：2013/3/21</span><span class="fw_b">招聘职位</span></div>
                    <div class="bd"> <?php echo $content;?> </div>
                
                </div>
            </div>
             
        </div>
    </div>
</div>
<div class="hr_20"></div>
<?php include template("content","footer"); ?>