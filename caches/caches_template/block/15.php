<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><h3 class="bg_x click"><?php echo $name;?></h3>
<div class="li">
<ul>
<?php $n=1; if(is_array($data)) foreach($data AS $i => $r) { ?>
<li >
<p class="h"><span class="ico "></span><a class="fw_b" href="search-special-<?php echo $r['url'];?>-1.html" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></p>
</li>
<?php $n++;}unset($n); ?>
</ul>
</div>