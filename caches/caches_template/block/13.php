<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><ul>
<?php $n=1; if(is_array($data)) foreach($data AS $i => $r) { ?>
<li>
<a ><img src="<?php echo $r['thumb'];?>"></a>
</li>
<?php $n++;}unset($n); ?>
</ul>

</ul>