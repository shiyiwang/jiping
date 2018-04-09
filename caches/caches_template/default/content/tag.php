<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<?php $n=1;if(is_array($infos)) foreach($infos AS $info) { ?>
	<a href="<?php echo APP_PATH;?>index.php?m=content&c=tag&a=lists&tag=<?php echo urlencode($info['keyword']);?>"><?php echo $info['keyword'];?></a>(<?php echo $info['videonum'];?>) 
<?php $n++;}unset($n); ?>
<?php include template('content', 'footer'); ?>