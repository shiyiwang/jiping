<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','header'); ?>
<style type="text/css">
div.content{
    margin-left:20px;
}
.submit.ib{
    margin-top:20px;
    margin-bottom:20px;
}
</style>
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
        <?php $pcatid=$_GET['pcatid']?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=cabac13589ad02d374a19279a5256b57&sql=SELECT+%60arrparentid%60+from+ji_category+where+catid%3D%24pcatid&return=parentidarr\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT `arrparentid` from ji_category where catid=$pcatid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$parentidarr = $a;unset($a);?> 
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <?php $parentidarr=explode(',',$parentidarr[0]['arrparentid'])?>
         <h2 class="bg"><span class="txt"><?php echo $CATEGORYS[$parentidarr['1']]['catname'];?></span><span class="english">about jiping</span></h2>
            
            
            
            <div class="sidesort">
            

                <ul class="classify">
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=b37d649596af2f8bd47379536a11477a&sql=SELECT+%60arrparentid%60+FROM+ji_category+WHERE+catid%3D%24pcatid&return=parent_cat_arr\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT `arrparentid` FROM ji_category WHERE catid=$pcatid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$parent_cat_arr = $a;unset($a);?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <?php $parent_cat_arr=explode(',',$parent_cat_arr[0]['arrparentid']);array_shift($parent_cat_arr)?>
                
                
                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=442b0587c12f471036952766b5668810&action=category&catid=11&num=20&siteid=%24siteid&order=listorder+ASC&return=pro_cat1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$pro_cat1 = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                   <?php $n=1;if(is_array($pro_cat1)) foreach($pro_cat1 AS $cat1) { ?>
                   		<?php $is_this_cat1=in_array($cat1['catid'],$parent_cat_arr)?>
                        
                	<li class="item  <?php if($is_this_cat1) { ?> open <?php } ?>  ">
                    	<h3 class="bg_x click"><?php echo $cat1['catname'];?></h3>
                        <div class="li">
                        	<ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3391fa6bfabc40064547a89175005c0c&action=category&catid=%24cat1%5B%27catid%27%5D&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$cat1['catid'],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
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
    	<div class="position bg_x"><span class="ico ico_home"></span><span class="link">您已经浏览到：<a href="/" title="">首页</a> > <a href="<?php echo $CATEGORYS['11']['url'];?>" title=""><?php echo $CATEGORYS['11']['catname'];?></a> > <span class="now">在线询盘</span></span></div>
        <div class="main_content">
        	<div class="inquiry">
            	<div class="pro_info detail_info c_f">
                	<?php $id=$_GET['id']?>
                  	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=ed786de72b5a9557df7fe016c2cf10ba&sql=SELECT+%2A+FROM+ji_product+where+id%3D%24id\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM ji_product where id=$id LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                	<div class="c_img c_img120"><a href="<?php echo $data['0']['url'];?>" title=""><img src="<?php echo thumb($data[0]['thumb'],120,0);?>" alt="" /></a></div>
                    <div class="info">
                    
                        <h2 class="c_666 line_24"><?php echo $data['0']['title'];?></h2>
                        <ul>
                        <?php if($pcatid) { ?>
                        
                        
                            <?php if($data[0]['price']) { ?><li class="item c_f"><span class="a">价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：</span><span class="b"><em class="price"><?php echo $data['0']['price'];?></em> 元/吨</span></li><?php } ?>
                            <?php if($data[0]['model_number']) { ?><li class="item c_f"><span class="a">产品型号：</span><span class="b"><?php echo $data['0']['model_number'];?></span></li><?php } ?>
                            <?php if($data[0]['sent_address']) { ?><li class="item c_f"><span class="a">发货地点：</span><span class="b"><?php echo $data['0']['sent_address'];?></span></li><?php } ?>
                            	<?php $has_stockarr=array('预定','现货供应')?>
                            <li class="item c_f"><span class="a">供货方式：</span><span class="b"><?php echo $has_stockarr[$data['0']['has_stock']];?></span></li>
                         <?php } ?>
                         <?php $model_number=$data[0]['model_number']?>
            			 <?php $title=$data[0]['title']?>
                         
                        </ul> 
						<input type="hidden" value="<?php echo $_GET['id'];?>" id="id" />
						<input type="hidden" value="<?php echo $_GET['pcatid'];?>" id="pcatid" />
                    </div>
                    
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
              
            </div>
            <input type="hidden" value="<?php echo $title;?>" name="name"  id="name"/>
			<input type="hidden" value="<?php echo $model_number;?>" name="model"  id="model" />
            
             <script language='javascript' src='<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=13&action=js&siteid=1'></script>
            
        </div>
    </div>
</div>
<div class="hr_20"></div>
<?php include template('content','footer'); ?>