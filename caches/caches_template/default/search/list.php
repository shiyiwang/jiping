<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('search','header'); ?>
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
               
                
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=442b0587c12f471036952766b5668810&action=category&catid=11&num=20&siteid=%24siteid&order=listorder+ASC&return=pro_cat1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$pro_cat1 = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                             <?php $n=1;if(is_array($pro_cat1)) foreach($pro_cat1 AS $cat1) { ?>
                             
                	<li class="item  open ">
                    	<h3 class="bg_x click"><?php echo $cat1['catname'];?></h3>
                        <div class="li">
                        	<ul>
                            <?php $cat2=$cat1['catid']?>
              				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=996c840f4daef3597deb56b7a7353048&action=category&catid=%24cat2&num=20&siteid=%24siteid&order=listorder+ASC&return=cat2_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$cat2_data = $content_tag->category(array('catid'=>$cat2,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                             <?php $n=1;if(is_array($cat2_data)) foreach($cat2_data AS $r) { ?>
                             	
                               
                            	<li  <?php if($catid==$r['catid']) { ?> class="open" <?php } ?>>
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
    	<div class="position bg_x"><span class="ico ico_home"></span><span class="link">您已经浏览到：<a href="/" title="">首页</a> &gt;  <span class="now">产品搜索 - “<?php echo $_GET['q'];?>”</span></span></div>
        <div class="main_content">
        	
            <div class="pro_list">
           
            	<ul class="c_f list">
               	
                <?php $n=1; if(is_array($data)) foreach($data AS $i => $r) { ?>
             
                	<li class="item hot_sales"><?php $img_thumb_url=thumb($r['thumb'],150,0);?>
                    	<div class="c_img c_img160"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $img_thumb_url;?>" alt="<?php echo $r['title'];?>" /></a></div>
                        <p class="pro_tit02 t_c"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></p>
                        <p class="price t_c">价格：<span class="fw_b c_f60 fs_14"><?php echo $r['price'];?></span>元</p>
                    </li>
                <?php $n++;}unset($n); ?>
                <?php if(empty($data)) { ?>抱歉，<?php if($_GET['catid']) { ?>“<span class="font_blue"> <?php echo $CATEGORYS[$_GET['catid']]['catname'];?> </span> ”下<?php } ?>暂时还没有关于 “<span class="font_blue"> <?php echo $_GET['q'];?> </span> ” 的查询结果！<?php } ?>
                </ul>
                <div class="list_page c_666 t_c"> 
              
              		<?php $pages=preg_replace("/-[\d]+\.html\?page=([\d+])/i","-$1.html",$pages)?>
               		<?php echo $pages;?>
                </div>
          
            </div>
        </div>
    </div>
</div>
<div class="hr_20"></div>
<?php include template("search","footer"); ?>