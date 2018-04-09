<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php $n=1; if(is_array($data)) foreach($data AS $i => $r) { ?>

<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a>

<?php $n++;}unset($n); ?>