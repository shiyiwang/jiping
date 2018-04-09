<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<style type="text/css">
          li.item.c_f{
           		width:99.6%
          } 
</style>
<!--banner start-->
<div class="index_banner">
	<div class="banner" id="focus001">
    	<div class="cont">
        
           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=2844d8056a4b962443176e6098a7d0cd&pos=index_turn_banner_new\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_turn_banner_new',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

        </div>
    </div>
</div>

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
<!--热销产品 start-->
<div class="hot_sales w_1000 o_a">
	<div class="hot_bg"></div>
	<div class="pub_hd01 bg_x"><a class="f_r c_999 ff_s" href="<?php echo $CATEGORYS['11']['url'];?>" title=""  target="_blank">更多>></a><span class="fw_b fs_14">热销产品</span></div>
    <div class="bd">
    	<div id="hotPre" class="bg"></div>
    	<div class="hot_box" id="hotBox">
        	<ul id="hotContent">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6947ff6cb57c350303ef01c5642c92bd&action=position&posid=1&order=listorder+DESC&num=18\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'18',));}?>
            	<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
             
                <?php $pro_id=$val['id']?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=18d3ef75900ce463e80c244e58114fa7&sql=SELECT+price%2Ccatid+FROM+ji_product+WHERE+id%3D%24pro_id&order=listorder+DESC&return=pro_price_arr\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT price,catid FROM ji_product WHERE id=$pro_id LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$pro_price_arr = $a;unset($a);?>
            	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            	<li>
                	<div class="c_img c_img140 index_centpic"><a href="<?php echo $val['url'];?>" title=""  target="_blank"><img src="<?php echo thumb($val['thumb'],140,0);?>" alt="" /></a></div>
                    <p class="pro_tit01 t_c"><a href="<?php echo $val['url'];?>" title=""  target="_blank"><?php echo $val['title'];?></a></p>
                   <p class="price t_c">价格：<?php if($pro_price_arr[0]['price']) { ?><span class="fw_b c_f60 fs_14"><?php echo $pro_price_arr['0']['price'];?> </span>元<?php } else { ?><span class="pro_inquery"><a href="inquery-26-<?php echo $pro_price_arr['0']['catid'];?>-<?php echo $pro_id;?>.html" title=""  target="_blank">询盘</a></span><?php } ?></p>
                       
                </li>
               
                <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
       <div id="hotNext" class="bg"></div>
    </div>
    <script type="text/javascript">
		new Marquee(
		{
		MSClass : ["hotBox","hotContent"],
		PrevBtnID : "hotPre",
		NextBtnID : "hotNext",
		Direction : 2,
		Step : 0.1,
		Width : 936,
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
<!--热销产品 end-->
<div class="hr_10"></div>
<!--产品分类 start-->
<div class="pro_sort w_1000 o_a">
	<div class="pub_hd01 bg_x"><a class="f_r c_999 ff_s" href="<?php echo $CATEGORYS['11']['url'];?>" title=""  target="_blank">更多>></a><span class="fw_b fs_14">产品分类</span></div>
    <div class="bd">
   
     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f52a304872be7a1b2236bd409cfc289f&sql=SELECT+typeid%2Cname+FROM+ji_type+&start=0&num=1000&return=type\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT typeid,name FROM ji_type  LIMIT 1000");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$type = $a;unset($a);?>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     <?php $typearr=array()?>
     <?php $n=1;if(is_array($type)) foreach($type AS $type_vvv) { ?>
     	<?php $typearr[$type_vvv['typeid']]=$type_vvv['name']?>
     <?php $n++;}unset($n); ?>
    
    
     
    	<ul class="main_sort" id="proSort">
     
    	<?php $posarr=array(20,21,22,23,24,25,26,27,28) ?>
          
          <?php $n=1;if(is_array($posarr)) foreach($posarr AS $proposid) { ?>
            
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=b2745f2dbd8e0f0df904d76462eb705b&sql=SELECT+catid+FROM+ji_position+WHERE+posid%3D%24proposid+&return=poscatidarr\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT catid FROM ji_position WHERE posid=$proposid  LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$poscatidarr = $a;unset($a);?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        	
            <li class="item c_f" >
            	<h2 class="f_l"><a href="<?php echo $CATEGORYS[$poscatidarr['0']['catid']]['url'];?>" title=""  target="_blank"><?php echo $CATEGORYS[$poscatidarr['0']['catid']]['catname'];?></a></h2>
                <ul class="sub_sort c_f f_l">
                
                 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7d2185e29e998a3d14bbec2db006e874&action=position&posid=%24proposid&num=24&order=listorder+DESC&return=pro_list\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$pro_list = $content_tag->position(array('posid'=>$proposid,'order'=>'listorder DESC','limit'=>'24',));}?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
                        <?php $newprolist=array()?>
                        <?php $kk=0?>
                       <?php $n=1;if(is_array($pro_list)) foreach($pro_list AS $pro) { ?>
                                  <?php $newprolist[$kk][]=$pro?>
                                  <?php $is_engh=is_int($n/6)?>
                                  <?php if($is_engh) { ?>
                                      <?php $kk++;?>
                                  <?php } ?>
                        <?php $n++;}unset($n); ?>
                  
                    <?php $n=1;if(is_array($newprolist)) foreach($newprolist AS $listarr) { ?>

                  <li>
                  	<dl>
                        	 <dd>
                            	<?php $n=1;if(is_array($listarr)) foreach($listarr AS $val) { ?>

                         		<a href="<?php echo $val['url'];?>" title="<?php echo $val['title'];?>" target="_blank">
<?php if($val['short_title']) { ?>
<?php echo $val['short_title'];?>
<?php } else { ?>
<?php echo str_cut($val['title'],24);?>
<?php } ?></a>
                                <?php $n++;}unset($n); ?>
                           </dd>
                        </dl>
                   </li> 
                   	<?php $n++;}unset($n); ?>
                   
                    
                </ul>
                <div class="img_pro f_r">
                	<ul class="c_f">
                    	<?php $pic_posid=$proposid+9?>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0869fecc3924692b118d21cae9f4e541&action=position&posid=%24pic_posid&num=2&order=id+DESC&return=new_pro\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$new_pro = $content_tag->position(array('posid'=>$pic_posid,'order'=>'id DESC','limit'=>'2',));}?>	
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    	<?php $n=1;if(is_array($new_pro)) foreach($new_pro AS $pro_detail) { ?>
                        <li>
                        	<?php $img_path=thumb($pro_detail['thumb'],87,0)?>
                        	<div class="c_img c_img87"><a href="<?php echo $pro_detail['url'];?>"  target="_blank"><img src="<?php echo $img_path;?>" alt="<?php echo $pro_detail['title'];?>" /></a></div>
                            <p class="pro_tit01 t_c"><a class="c_blue2" href="<?php echo $pro_detail['url'];?>" title=""  target="_blank"><?php echo str_cut($pro_detail['title'],18);?></a></p>
                        </li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
            </li>
           
           <?php $n++;}unset($n); ?> 
        </ul>
    </div>
</div>
<!--产品分类 end-->
<div class="hr_10"></div>
<div class="w_1000 o_a">
    <div class="index_box f_l">
    <!--公司简介 start-->
    	<div class="index_intro box">
        	<div class="pub_hd02"><span class="fs_14 fw_b">公司简介</span></div>
            <div class="bd">
            	<ul class="intro_img c_f">
                	<li class="mr"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=33f6c6029cd56356bd501fe6c65d4a9e&pos=index_about_img1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_about_img1',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></li>
                    <li><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=919356f50d508531871a5e852c335f4d&pos=index_about_img2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_about_img2',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></li>
                </ul>
                <p class="intro_txt"><span class="txt"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=8c95889c31fb5934a401044ea566090b&pos=index_about_content\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_about_content',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></span><a class="ff_s c_blue2" href="<?php echo $CATEGORYS['2']['url'];?>" title=""  target="_blank">查看详细>></a></p>
            </div>
        </div>
    <!--公司简介 end-->
    </div>
    <div class="index_box f_l">
    <!--最新动态 start-->
    	<div class="index_news box">
        	<div class="pub_hd02"><a class="f_r c_999 ff_s" href="<?php echo $CATEGORYS['6']['url'];?>" title=""  target="_blank">更多>></a><span class="fs_14 fw_b" id="all_" onclick="news_li_show('all_')"><a href="javascript:">最新动态</a></span><span class="link"><a href="javascript:" title="" id="com_" onclick="news_li_show('com_')">企业新闻</a><a href="javascript:" title="" id="ind_"  onclick="news_li_show('ind_')">行业动态</a><a href="javascript:" title="" id="baike_"  onclick="news_li_show('baike_')">行业百科</a></span></div>
            <div class="bd">
            	<div class="img_news">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=fe0645e74f2471eed36c47f863be68bd&sql=+SELECT+title%2Ccontent+FROM+ji_page+WHERE+catid%3D28&return=service_area\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query(" SELECT title,content FROM ji_page WHERE catid=28 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$service_area = $a;unset($a);?>
                	<div class="img f_l"><a href="<?php echo $CATEGORYS['28']['url'];?>" title=""  target="_blank"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=7905cb2a2d92405c54f58df2b920c414&pos=index_news_img\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_news_img',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></a></div>
                    <h3><a class="c_blue2" href="<?php echo $CATEGORYS['28']['url'];?>" title=""  target="_blank"><?php echo $service_area['0']['title'];?></a></h3>
                    <?php $service_con=$service_area[0]['content']?>
                    <?php $service_con=strip_tags($service_con)?>
                    <?php $service_con=str_cut($service_con,166)?>
                   
                    <p class="c_999 txt"><?php echo $service_con;?>...</p>
                 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
                <ul class="news_li" id="all_new">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=946a6f6700f49746fb71197df4b748fa&action=lists&catid=6&num=7&order=id+DESC&return=all_news_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$all_news_data = $content_tag->lists(array('catid'=>'6','order'=>'id DESC','limit'=>'7',));}?> 
                	 <?php $n=1;if(is_array($all_news_data)) foreach($all_news_data AS $all_val) { ?>
                    	<li><span class="c_999 f_r"><?php echo date("Y-m-d",$all_val['inputtime']);?></span><a href="<?php echo $all_val['url'];?>" title=""><?php echo $all_val['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <ul class="news_li hidden" id="com_new">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dfa424554c3e7837840db1e3355d7572&action=lists&catid=21&num=7&order=id+DESC&return=com_news_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$com_news_data = $content_tag->lists(array('catid'=>'21','order'=>'id DESC','limit'=>'7',));}?> 
                	 <?php $n=1;if(is_array($com_news_data)) foreach($com_news_data AS $com_val) { ?>
                    	<li><span class="c_999 f_r"><?php echo date("Y-m-d",$com_val['inputtime']);?></span><a href="<?php echo $com_val['url'];?>" title=""  target="_blank"><?php echo $com_val['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <ul class="news_li hidden" id="ind_new">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5387394e09b7981ef22670e85018f43f&action=lists&catid=22&num=7&order=id+DESC&return=ind_news_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$ind_news_data = $content_tag->lists(array('catid'=>'22','order'=>'id DESC','limit'=>'7',));}?> 
                	 <?php $n=1;if(is_array($ind_news_data)) foreach($ind_news_data AS $ind_val) { ?>
                    	<li><span class="c_999 f_r"><?php echo date("Y-m-d",$ind_val['inputtime']);?></span><a href="<?php echo $ind_val['url'];?>" title=""  target="_blank"><?php echo $ind_val['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <ul class="news_li hidden" id="baike_new">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=acd10add904ced337b44df92d27ddbb3&action=lists&catid=23&num=7&order=id+DESC&return=baike_news_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$baike_news_data = $content_tag->lists(array('catid'=>'23','order'=>'id DESC','limit'=>'7',));}?> 
                	 <?php $n=1;if(is_array($baike_news_data)) foreach($baike_news_data AS $baike_val) { ?>
                    	<li><span class="c_999 f_r"><?php echo date("Y-m-d",$baike_val['inputtime']);?></span><a href="<?php echo $baike_val['url'];?>" title=""  target="_blank"><?php echo $baike_val['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                
            </div>
        </div>
    <!--最新动态 end-->
    </div>
    <div class="index_box contact_box f_r">
    <!--联系 start-->
    	<div class="contact box">
        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=af428ce296844110e0f6221359f78dea&pos=index_contact\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_contact',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
             <div class="tab no_border"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=6d2e36f57cabd4a9235c227016a54a2b&pos=index_contact_img\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_contact_img',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></div>
        </div>
    <!--联系 end-->
    </div>
</div>
<div class="hr_10"></div>
<!--友情链接 start-->
<div class="friendlink w_1000 o_a">
	<span class="tit">友情链接：</span><span class="link"> 	
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=ab044c12156d8856ab4cc40a3a9475e9&action=type_list&siteid=1&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>'1','order'=>'listorder DESC','limit'=>'8',));}?>
     <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
     <a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><?php echo $v['name'];?></a>
     <?php $n++;}unset($n); ?>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> <a class="ff_s c_blue2" href="/index.php?m=link&c=index&a=register&siteid=1">申请友链</a>
	</span>
</div>
<!--友情链接 end-->
<div class="hr_20"></div>
<?php include template("content","footer"); ?>

<script type="text/ecmascript">
function news_li_show(newsid){
		
	newsid=newsid+"new";

	$(".news_li").each(function(){
		if(newsid==this.getAttribute("id")){
			$(this).css('display',"block");
		}else{
			$(this).css('display',"none");
		}
	})
}
</script>