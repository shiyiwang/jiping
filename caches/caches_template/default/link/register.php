<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','header'); ?>

<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidator.js" charset="UTF-8"></script> 
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidatorregex.js" charset="UTF-8"></script>
<link href="<?php echo CSS_PATH;?>link.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" /> 
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
                              
                	<li class="item close">
                    	<h3 class="bg_x click"><?php echo $cat1['catname'];?></h3>
                        <div class="li">
                        	<ul>
                            <?php $cat2=$cat1['catid']?>
              				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f88fd35d231dcaf23cf694b90c4a685c&action=category&catid=%24cat2&num=20&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$cat2,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                             	
                               
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
    	<div class="position bg_x"><span class="ico ico_home"></span><span class="link">您已经浏览到：<a href="/" title="">首页</a> &gt; <span class="now">申请友情链接</span></span></div>
        <div class="main_content">
        	
            <div>

<form action="<?php echo APP_PATH;?>index.php?m=link&c=index&a=register&siteid=<?php echo $siteid;?>" method="post" name="myform" id="myform" >
<table cellspacing="1" cellpadding="0" class="table_form">

<tbody><tr> 
<th width='60'>链接类型</th>
<td width="300"><input type="radio" onclick="$('#logolink').hide()" checked="checked" value="0" name="linktype" class="radio_style"> 文字链接
<input type="radio" onclick="$('#logolink').show()" value="1" name="linktype" class="radio_style"> Logo链接
</td>
</tr>

<tr> 
<th>网站名称</th>
<td><input type="text" value="" id="name" name="name" class="input-text"></td>
</tr>
<tr> 
<th>网站地址</th>
<td><input type="text" size="40" value="" name="url" id="url" class="input-text"></td>
</tr>
<tr style="display: none;" id="logolink"> 
<th>Logo地址</th>
<td><input type="text" size="40" value="" name="logo" id="logo" class="input-text"></td>
</tr>
 <tr>
                <th>联系人</th>
                <td><input type="text" value="" id="username" name="username" class="input-text"></td>
              </tr>            
              <tr>
                <th>联系电话:</th>
                <td><input type="text" value="" name="introduce" id="introduce" class="input-text" ></td>
              </tr>
              <tr>
<?php if($setting['enablecheckcode']=='1') { ?>
<tr>
       <th>验证码：</th>
       <td><input name="code" type="text" id="code" size="10"  class="input-text"/> <?php echo form::checkcode('code_img','4','14',110,30);?></td>
</tr>
<?php } ?>
<tr> 
<th></th>
<td><input type="submit" value=" 申 请 " name="dosubmit" class="button"> <input type="reset" value=" 取 消 " name="reset" class="button"> </td>
</tr> 
</tbody></table>
</form>
        </div>
        </div>
    </div>
</div>
<div class="hr_20"></div>
<script type="text/javascript">
<!--
	$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#name").formValidator({onshow:"请输入网站名称",onfocus:"请输入网站名称"}).inputValidator({min:1,max:999,onerror:"网站名称不能为空"});
	$("#username").formValidator({onshow:"请输入联系人姓名",onfocus:"请输入联系人姓名"}).inputValidator({min:1,max:999,onerror:"联系人不能为空"}).regexValidator({regexp:"^\.{2,5}$",onerror:"姓名不短于两个字符，不长于5个字符"});
	$("#introduce").formValidator({onshow:"请输入6到12位纯数字的电话或手机",onfocus:"请输入6到12位纯数字的电话或手机"}).inputValidator({min:1,max:999,onerror:"联系方式不能为空"}).regexValidator({regexp:"^\\d{6,12}$",onerror:"请输入6到12位纯数字的电话或手机"});
	  
 	$("#url").formValidator({onshow:"请输入网站网址,格式应该为http://www.szjiping.com/",onfocus:"请输入网站网址,格式应该为http://www.szjiping.com/"}).inputValidator({min:1,onerror:"请输入网站网址，格式为http://www.szjiping.com/"}).regexValidator({regexp:"^http:\/\/[A-Za-z0-9]+\.[A-Za-z0-9]+[\/=\?%\-&]*([^<>])*$",onerror:"格式应该为http://www.szjiping.com/"})
 	$("#code").formValidator({onshow:"请输入验证码",onfocus:"验证码不能为空"}).inputValidator({min:1,max:999,onerror:"验证码不能为空"}).ajaxValidator({
	    type : "get",
		url : "",
		data :"m=pay&c=deposit&a=public_checkcode",
		datatype : "html",
		async:'false',
		success : function(data){	
            if(data == 1)
			{
                return true;
			}
            else
			{
                return false;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "验证码错误",
		onwait : "验证中"
	});
 	})
//-->
</script>
<?php include template("content","footer"); ?>