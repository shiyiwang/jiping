<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
<meta name="description" content="　<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jiping/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jiping/MSClass.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jiping/sl.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>style/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jiping/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jiping/jquery.fancybox.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  	$.focus("#focus001");
	});
</script>
</head>

<body>
<?php $now_url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>
<?php if($catid==27) { ?>
	<?php $new_url=preg_replace("/catid\=27/","catid=28",$now_url)?>
	<?php echo header("Location:".$new_url);?>
<?php } ?>
<?php if($catid==33) { ?>
	<?php $new_url=preg_replace("/catid\=33/","catid=34",$now_url)?>
	<?php echo header("Location:".$new_url);?>
<?php } ?>

<?php if($catid) { ?>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=73253c3d7223f090b0611ceea0455b28&sql=SELECT+arrparentid+FROM+ji_category+WHERE+catid%3D%24catid&return=cat_fid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT arrparentid FROM ji_category WHERE catid=$catid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$cat_fid = $a;unset($a);?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <?php $cat_fid=explode(',',$cat_fid[0]['arrparentid'])?>
    <?php $cur_cat=$cat_fid[1]?>
<?php } ?>

<!--头部start-->
<div class="header bg_x">
	<div class="w_1000 o_a">
		<a href="/"><h1 class="header_logo f_l">吉平化工</h1></a>
        <div class="header_r f_r">
        	<div class="map t_r"><a href="http://<?php echo $_SERVER["HTTP_HOST"];?>/index.php?m=member&c=index&a=register&siteid=1" title="会员注册">会员注册</a><a href="http://<?php echo $_SERVER["HTTP_HOST"];?>/index.php?m=member&c=index&a=login" title="登录">登录</a><a href="javascript:" onclick="addFavorite()" title="网站收藏">网站收藏</a>
            <a class="no_border" href="#" onclick="setHomepage()"; title="设为主页">设为主页</a></div>
            <div class="contact"><span class="tel ff_yh fs_14"><b class="ico ico_tel"></b>咨询电话：<em class="fs_18">0755-8963 6850</em></span><a class="weibo" href="http://t.qq.com/szjjping" title="" rel="nofollow" target="_blank"><b class="ico ico_tx"></b>腾讯微博</a><a class="weibo" href="http://e.weibo.com/u/3238530764" title="" rel="nofollow" target="_blank"><b class="ico ico_sina"></b>新浪微博</a></div>
        
       
    
        </div>
    </div>
</div>
<!--头部end-->
<!--导航start-->
<div class="nav_bar bg_x">
	<div class="w_1000 o_a">
    	<ul class="main_nav" id="mainNav">
          <?php if(!isset($CATEGORYS)) { $CATEGORYS = getcache('category_content_'.$siteid,'commons'); } ?>
        	<li class="item index"><a class="main <?php if($catid==false) { ?> cur <?php } ?>" href="http://<?php echo $_SERVER["HTTP_HOST"];?>">首页</a></li>
            
          <li class="item">
                <a class="main <?php if($cur_cat==1||$catid==1) { ?>cur<?php } ?>" href="<?php echo $CATEGORYS['2']['url'];?>"  target="_blank"><?php echo $CATEGORYS['1']['catname'];?></a>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d04bea910bdedccda0f23eb36a3f2a8&action=category&catid=1&num=10&siteid=%24siteid&order=listorder+ASC&return=cat_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$cat_data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                <div class="sub_nav">
                    <ul>                        
                            <?php $n=1;if(is_array($cat_data)) foreach($cat_data AS $r) { ?>
                                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"  target="_blank"><?php echo $r['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>                           
                    </ul>
                </div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
            </li>    
            <li class="item">
                <a class="main <?php if($cur_cat==11||$catid==11) { ?>cur<?php } ?>" href="<?php echo $CATEGORYS['11']['url'];?>"  target="_blank"><?php echo $CATEGORYS['11']['catname'];?></a>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5cd8dc40c5ea0e1a32a77f848c670aaf&action=category&catid=11&num=10&siteid=%24siteid&order=listorder+ASC&return=cat_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$cat_data = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                <div class="sub_nav">
                    <ul>                        
                            <?php $n=1;if(is_array($cat_data)) foreach($cat_data AS $r) { ?>
                                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"  target="_blank"><?php echo $r['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>                           
                    </ul>
                </div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
            </li>  
             <li class="item">
                <a class="main <?php if($cur_cat==6||$catid==6) { ?>cur<?php } ?>" href="<?php echo $CATEGORYS['6']['url'];?>"  target="_blank"><?php echo $CATEGORYS['6']['catname'];?></a>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2181202553eaaede3febb81d3b9e7fc3&action=category&catid=6&num=10&siteid=%24siteid&order=listorder+ASC&return=cat_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$cat_data = $content_tag->category(array('catid'=>'6','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                <div class="sub_nav">
                    <ul>                        
                            <?php $n=1;if(is_array($cat_data)) foreach($cat_data AS $r) { ?>
                                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"  target="_blank"><?php echo $r['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>                           
                    </ul>
                </div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
            </li>  
             <li class="item">
                <a class="main <?php if($cur_cat==27||$catid==27) { ?>cur<?php } ?>" href="<?php echo $CATEGORYS['28']['url'];?>"  target="_blank"><?php echo $CATEGORYS['27']['catname'];?></a>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aa84d4de3a2204ba964a22abf22ba380&action=category&catid=27&num=10&siteid=%24siteid&order=listorder+ASC&return=cat_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$cat_data = $content_tag->category(array('catid'=>'27','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                <div class="sub_nav">
                    <ul>                        
                            <?php $n=1;if(is_array($cat_data)) foreach($cat_data AS $r) { ?>
                                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"  target="_blank"><?php echo $r['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>                           
                    </ul>
                </div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
            </li> 
            <li class="item"><a class="main <?php if($cur_cat==32||$catid==32) { ?>cur<?php } ?>" href="<?php echo $CATEGORYS['32']['url'];?>"  target="_blank"><?php echo $CATEGORYS['32']['catname'];?></a></li> 
             <li class="item">
                <a class="main <?php if($cur_cat==33||$catid==33) { ?>cur<?php } ?>" href="<?php echo $CATEGORYS['34']['url'];?>"  target="_blank"><?php echo $CATEGORYS['33']['catname'];?></a>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e1e5eba861fd6bb33620fbbea6295241&action=category&catid=33&num=10&siteid=%24siteid&order=listorder+ASC&return=cat_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$cat_data = $content_tag->category(array('catid'=>'33','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                <div class="sub_nav">
                    <ul>                        
                            <?php $n=1;if(is_array($cat_data)) foreach($cat_data AS $r) { ?>
                                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"  target="_blank"><?php echo $r['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>                           
                    </ul>
                </div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
            </li>                                      
        </ul>
    </div>
</div>
<!--导航end-->