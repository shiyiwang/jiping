<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('special', 'header'); ?>
<style type="text/css">
.plan-2{ padding:0 8px; text-align:center; overflow:hidden}
.plan-2 li div.img-wrap,.plan-2 li a{ width:120px; height:100px; margin:auto}
</style>
<!--main-->
<div class="main">
	<div class="col-left new">
			<div class="FocusPic">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"special\" data=\"op=special&tag_md5=88348764d23038ac8b4a16bd9d07c78d&action=content_list&specialid=%24specialid&thumb=1&listorder=3&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$special_tag = pc_base::load_app_class("special_tag", "special");if (method_exists($special_tag, 'content_list')) {$data = $special_tag->content_list(array('specialid'=>$specialid,'thumb'=>'1','listorder'=>'3','limit'=>'5',));}?>
            	<div class="content" id="main-slide">
                    <div class="changeDiv">  
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],30);?>"><img src="<?php echo thumb($r['thumb'],310,260);?>" alt="<?php echo $r['title'];?>" width="310" height="260" /></a>
                    <?php $n++;}unset($n); ?>
                    </div>
                </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
			<div class="bk10"></div>
			<div class="box">
			<?php $blockid = 'special_'.$specialid.'_4';?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=09ee817aa1debf0ce7370ae2ce8ad457&pos=$blockid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>$blockid,));?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
			<div class="bk10"></div>
			<div class="box">
			<?php $blockid = 'special_'.$specialid.'_5';?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=09ee817aa1debf0ce7370ae2ce8ad457&pos=$blockid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>$blockid,));?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
    </div>
    <div class="col-left img-text" >
		<div class="box intro"><strong>导读：</strong><?php echo $description;?></div>
    	<div class="news-hot">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"special\" data=\"op=special&tag_md5=a9d028e9972799beb132bb25f25c36b1&action=content_list&specialid=%24specialid&listorder=3&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$special_tag = pc_base::load_app_class("special_tag", "special");if (method_exists($special_tag, 'content_list')) {$data = $special_tag->content_list(array('specialid'=>$specialid,'listorder'=>'3','limit'=>'3',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php if($n>1) { ?><div class="bk20 hr"><hr></div><?php } ?>
                <h4 class="blue"><a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r['title'], 36, '');?></a></h4>
                <p><?php echo str_cut($r['description'], 100);?></p>
			<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <?php $n=1;if(is_array($types)) foreach($types AS $t) { ?>
    <div class="bk10"></div>
    <div class="box">
        		<h5><?php echo $t['name'];?><a href="<?php echo $t['url'];?>" class="more">更多>></a></h5>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"special\" data=\"op=special&tag_md5=56bd4500053ed717e6be0674019549ea&action=content_list&specialid=%24id&typeid=%24t%5Btypeid%5D&listorder=3&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$special_tag = pc_base::load_app_class("special_tag", "special");if (method_exists($special_tag, 'content_list')) {$data = $special_tag->content_list(array('specialid'=>$id,'typeid'=>$t[typeid],'listorder'=>'3','limit'=>'10',));}?>
				<ul class="list f14 lh26 ">
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>·<a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r['title'], 36);?></a></li>
            <?php $n++;}unset($n); ?>
            </ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
		<?php $n++;}unset($n); ?>	
    </div>
    <div class="col-auto">
	<div class="box">
            <?php $blockid = 'special_'.$specialid.'_1';?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=09ee817aa1debf0ce7370ae2ce8ad457&pos=$blockid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>$blockid,));?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
	<div class="bk10"></div>
	<div class="box">
            <?php $blockid = 'special_'.$specialid.'_2';?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=09ee817aa1debf0ce7370ae2ce8ad457&pos=$blockid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>$blockid,));?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
	<div class="bk10"></div>
	<div class="box">
            <?php $blockid = 'special_'.$specialid.'_3';?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=09ee817aa1debf0ce7370ae2ce8ad457&pos=$blockid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>$blockid,));?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
	<?php if($voteid) { ?>
	<div class="bk10"></div>
    <div class="box vote">
		<h5 class="title-2">在线调查</h5>
			<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=show&action=js&subjectid=<?php echo $voteid;?>&type=3"></script>
	</div>
	<?php } ?>
    </div>
	<div class="bk10"></div>
	<?php echo $pic_data;?>
	<?php $n=1;if(is_array($types)) foreach($types AS $t) { ?>
    <div class="bk10"></div>
    <div class="box">
        		<h5><?php echo $t['name'];?><a href="<?php echo $t['url'];?>" class="more">更多>></a></h5>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"special\" data=\"op=special&tag_md5=07d330d095e615db7f306368ff5a46cd&action=content_list&specialid=%24id&typeid=%24t%5Btypeid%5D&thumb=1&listorder=3&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$special_tag = pc_base::load_app_class("special_tag", "special");if (method_exists($special_tag, 'content_list')) {$data = $special_tag->content_list(array('specialid'=>$id,'typeid'=>$t[typeid],'thumb'=>'1','listorder'=>'3','limit'=>'6',));}?>
            <ul class="content news-photo picbig">
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<li>
                    <div class="img-wrap">
                        <a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r['thumb'], 110, 85);?>" /></a>
                    </div>
                    <a href="<?php echo $r['url'];?>"><?php echo str_cut($r['title'], 20);?></a>
                </li>
         <?php $n++;}unset($n); ?>
            </ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<div class="hr bk15"></div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"special\" data=\"op=special&tag_md5=56bd4500053ed717e6be0674019549ea&action=content_list&specialid=%24id&typeid=%24t%5Btypeid%5D&listorder=3&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$special_tag = pc_base::load_app_class("special_tag", "special");if (method_exists($special_tag, 'content_list')) {$data = $special_tag->content_list(array('specialid'=>$id,'typeid'=>$t[typeid],'listorder'=>'3','limit'=>'10',));}?>
				<ul class="list f14 lh26 row-2">
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>·<a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r['title'], 36);?></a></li>
            <?php $n++;}unset($n); ?>
            </ul>
			</pc>
        </div>
		<?php $n++;}unset($n); ?>	
		<div class="bk10"></div>
	  <?php if(module_exists('comment')) { ?>
      <iframe src="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=init&commentid=<?php echo id_encode("special",$id,$siteid);?>&iframe=1" width="100%" height="40%" id="comment_iframe" frameborder="0" scrolling="no"></iframe>
	  <?php } ?>
	  <script language='javascript' src='<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=48&action=js'></script>
</div>
<script type="text/javascript"> 
<!--
$(function(){
	new slide("#main-slide","cur",290,260,1);//焦点图
	new SwapTab(".SwapTab","span",".tab-content","ul","fb");//排行TAB
})
//-->
</script>
<?php include template('content', 'footer'); ?>