<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','header'); ?>

<!--banner start-->
<?php if($catid==34) { ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=3bc722c63e2e702995b383c6ed161610&pos=contactus_banner\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'contactus_banner',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php } else { ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=d09993f2024b18646cbca5379f4d9f7d&pos=aboutus_banner\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'aboutus_banner',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php } ?>
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
        	<h2 class="bg"><span class="txt"><?php if($parentid) { ?><?php echo $CATEGORYS[$parentid]['catname'];?><?php } else { ?><?php echo $CATEGORYS[$catid]['catname'];?><?php } ?></span><span class="english">
            <?php if($catid==34) { ?>
            	<?php echo $CATEGORYS['33']['description'];?>
            <?php } else { ?>
            	<?php echo $CATEGORYS['1']['description'];?>
            <?php } ?>
         
            
            </span></h2>
            <ul class="list">
                <?php $n=1;if(is_array($arrchild_arr)) foreach($arrchild_arr AS $cid) { ?>
                <li<?php if($catid==$cid) { ?> class="cur"<?php } ?>><a href="<?php echo $CATEGORYS[$cid]['url'];?>" title="<?php echo $CATEGORYS[$cid]['catname'];?>"><?php echo $CATEGORYS[$cid]['catname'];?></a></li>
                <?php $n++;}unset($n); ?>  
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
    	<div class="position bg_x"><span class="ico ico_home"></span><span class="link">您已经浏览到：<a href="/" title="">首页</a> > 
<?php if($parentid) { ?><a href="<?php if($parentid==1) { ?><?php echo $CATEGORYS['2']['url'];?><?php } else { ?><?php if($parentid==33) { ?><?php echo $CATEGORYS['34']['url'];?><?php } else { ?><?php echo $CATEGORYS[$parentid]['url'];?><?php } ?><?php } ?>" title="<?php echo $CATEGORYS[$parentid]['catname'];?>"><?php echo $CATEGORYS[$parentid]['catname'];?></a> >&nbsp;<span class="now"><?php echo $CATEGORYS[$catid]['catname'];?></span><?php } else { ?><span class="now"><?php echo $CATEGORYS[$catid]['catname'];?></span><?php } ?>
   </span></div>
        <div class="main_content">
        	<div class="company_intro c_f">
            	<?php if($catid==2) { ?><div class="img f_l"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=d367f252e118f1adca67994c8e6859c6&pos=aboutus\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'aboutus',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></div><?php } ?>
                <div class="info">
               	<?php echo $content;?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hr_20"></div>
<?php include template('content','footer'); ?>