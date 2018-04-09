<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>dialog.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<div class="box">
  
    <div class="content">
				<form method="post" onsubmit="return add_pro_url()" action="<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=<?php echo $formid;?>&siteid=<?php echo $this->siteid;?>"<?php if($no_allowed) { ?> target="member_login"<?php } ?> name="myform" id="myform">
<ul class="form_li">
<!-- 询盘 -->



 <?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>
	<?php if($info['formtype']=='omnipotent') { ?>
		<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $_fm => $_fm_value) { ?>
			<?php if($_fm_value['iscomnipotent']) { ?>
				<?php $info['form'] = str_replace('{'.$_fm.'}',$_fm_value['form'],$info['form']);?>
			<?php } ?>
		<?php $n++;}unset($n); ?>
	<?php } ?>
	
	<?php $is_model=strpos($info['form'],'pro_model')?>
	<?php $is_name=strpos($info['form'],'pro_name')?>
	<?php if(!$is_model) { ?>
		<?php if(!$is_name) { ?>
    <li><span class="tit"> <span class="cor_red"> <b>*</b>&nbsp;  </span><?php echo $info['name'];?>：</span>
	  
      <?php echo $info['form'];?>  <span class="cor_gray" ><?php echo $info['tips'];?></span></span></li>
		<?php } ?>
    <?php } ?>
<?php $n++;}unset($n); ?>
</ul>

<div class="submit ib"> <p class="t_c submit"><input type="submit"<?php if($no_allowed) { ?> disabled=""<?php } ?> name="dosubmit" id="dosubmit" class="bg btn_submit" value=" 提交 "></p></div> <?php if($no_allowed) { ?>您还没有<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&alogin&forward=<?php echo urlencode(HTTP_REFERER);?>" style="color:red">登录</a>或<a href="" style="color:red">注册</a>网站，请登录后提交表单<?php } ?>
 <script type="text/javascript">
			  function add_pro_url(){
				 
				  var title=$('#name').val();
				  var model=$('#model').val();
				  
				  $("#myform").append("<input type='hidden' value="+title+" name='info[pro_name]' />");
				  $("#myform").append("<input type='hidden' value="+model+" name='info[pro_model]' />");

				  return true;
			  }
			  </script>

</form>

    </div>
</div>