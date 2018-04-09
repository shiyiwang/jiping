<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php $n=1; if(is_array($data)) foreach($data AS $i => $r) { ?>
<div class="other_banner" style=" background-image:url(<?php echo $r['thumb'];?>);"></div>
<?php $n++;}unset($n); ?>