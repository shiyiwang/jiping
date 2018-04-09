<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>default_blue.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<style type="text/css">
.special-bg{ background-color:#fff; width:960px; margin:auto; padding:0 6px}
.z table td{ padding:0}
</style>
</head>
<body class="special-channel">
<div class="body-top special-body-top">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6b0d3485ffde39a464420b24c26f49ac&action=category&catid=0&num=25&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder ASC','limit'=>'25',));}?>
    <div class="content">
    	<a href="" class="logo"><img src="<?php echo IMG_PATH;?>v9/logo.jpg" height="30" /></a><div class="nav"><a href="<?php echo siteurl($siteid);?>">首页</a><?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><span>|</span><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a><?php $n++;}unset($n); ?></div>
    </div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<div class="special-bg">
<div class="header">
<img src="<?php echo $banner;?>" width="954" />
</div><div class="bk10"></div>