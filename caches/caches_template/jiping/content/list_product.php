<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
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

<!--正文start-->
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
    <div class="position bg_x"><span class="ico ico_home"></span><span class="link">您已经浏览到：<a href="/" title="">首页</a> > 
    <a href="<?php echo $CATEGORYS[$parent_cat_arr['0']]['url'];?>" title=""><?php echo $CATEGORYS[$parent_cat_arr['0']]['catname'];?></a> > 
    <?php if($parentid!=11) { ?>
     <a href="<?php echo $CATEGORYS[$parent_cat_arr['1']]['url'];?>" title=""><?php echo $CATEGORYS[$parent_cat_arr['1']]['catname'];?></a> > 
    <?php } ?>
     <span class="now"><?php echo $CATEGORYS[$catid]['catname'];?></span>
  
     </span></div>
        <div class="main_content">
       
            <div class="pro_list">
    
            	<?php $typeid=$_GET['typeid']?>
            	<?php if($_GET['typeid']) { ?>
                  <?php $sql="SELECT * FROM ji_product WHERE catid=$catid AND typeid=".$_GET['typeid']?>
                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1a2bd29e9c74c3f4b123e9c34f0185f3&sql=SELECT+count%28id%29+as+num+FROM+ji_product+WHERE+catid%3D%24catid+AND+typeid%3D%24typeid&order=id+DESC&return=countarr\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT count(id) as num FROM ji_product WHERE catid=$catid AND typeid=$typeid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$countarr = $a;unset($a);?>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <?php } else { ?>
                  <?php $sql="SELECT * FROM ji_product WHERE catid=$catid"?>
                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=000d3970c29bd7c7c3d598ad74afda71&sql=SELECT+count%28id%29+as+num+FROM+ji_product+WHERE+catid%3D%24catid&order=id+DESC&return=countarr\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT count(id) as num FROM ji_product WHERE catid=$catid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$countarr = $a;unset($a);?>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <?php } ?>
               
           
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=10320f392c419f623b7aa8206a2b4537&sql=%24sql&num=16&page=%24page&order=id+DESC&return=returnarr\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 16;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM ($sql) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("$sql LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$returnarr = $a;unset($a);?>
             
                <ul class="c_f list">
                 <?php if($returnarr) { ?>
                    <?php $n=1;if(is_array($returnarr)) foreach($returnarr AS $re) { ?>  
                        <li class="item hot_sales"><?php $img_thumb_url=thumb($re['thumb'],151,0);?>
                            <div class="c_img c_img160"><a href="<?php echo $re['url'];?>" title="<?php echo $r['title'];?>"  target="_blank"><img src="<?php echo $img_thumb_url;?>" alt="<?php echo $re['title'];?>" /></a></div>
                            <p class="pro_tit02 t_c"><a href="<?php echo $re['url'];?>" title="<?php echo $re['title'];?>"  target="_blank"><?php echo $re['title'];?></a></p>
                            <p class="price t_c">价格：<?php if($re['price']) { ?><span class="fw_b c_f60 fs_14"><?php echo $re['price'];?> </span>元<?php } else { ?><span class="pro_inquery"><a href="inquery-26-<?php echo $re['catid'];?>-<?php echo $re['id'];?>.html" title=""  target="_blank">询盘</a></span><?php } ?></p>
                        </li>
                    <?php $n++;}unset($n); ?>
                <?php } else { ?>
                	抱歉，暂时还没有查询结果！
                <?php } ?>
               
                </ul>
                 <div class="list_page c_666 t_c"> 
                 	<?php $pagehtml=pages($countarr[0]['num'],$page,16)?><!--因分页不出来，故直接调用-->
                 	<?php if($typeid) { ?>
                    	<?php $pagehtml=preg_replace("/product\-(\d+)\-(\d+)\.html\"/i","product-$1-$2_".$typeid.".html\"",$pagehtml)?>
                    <?php } ?>
                    <?php echo $pagehtml?>
                    <input type="hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>" id="now_url" />
                </div>
               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>
</div>
<!--正文end-->
<div class="hr_30"></div>
<?php include template("content","footer"); ?>