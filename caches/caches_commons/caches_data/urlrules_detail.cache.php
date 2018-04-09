<?php
return array (
  1 => 
  array (
    'urlruleid' => '1',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '1',
    'urlrule' => '{$categorydir}{$catdir}/index.html|{$categorydir}{$catdir}/{$page}.html',
    'example' => 'news/china/1000.html',
  ),
  6 => 
  array (
    'urlruleid' => '6',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '0',
    'urlrule' => 'index.php?m=content&c=index&a=lists&catid={$catid}|index.php?m=content&c=index&a=lists&catid={$catid}&page={$page}',
    'example' => 'index.php?m=content&c=index&a=lists&catid=1&page=1',
  ),
  11 => 
  array (
    'urlruleid' => '11',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '1',
    'urlrule' => '{$year}/{$catdir}_{$month}{$day}/{$id}.html|{$year}/{$catdir}_{$month}{$day}/{$id}_{$page}.html',
    'example' => '2010/catdir_0720/1_2.html',
  ),
  12 => 
  array (
    'urlruleid' => '12',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '1',
    'urlrule' => '{$categorydir}{$catdir}/{$year}/{$month}{$day}/{$id}.html|{$categorydir}{$catdir}/{$year}/{$month}{$day}/{$id}_{$page}.html',
    'example' => 'it/product/2010/0720/1_2.html',
  ),
  16 => 
  array (
    'urlruleid' => '16',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '0',
    'urlrule' => 'index.php?m=content&c=index&a=show&catid={$catid}&id={$id}|index.php?m=content&c=index&a=show&catid={$catid}&id={$id}&page={$page}',
    'example' => 'index.php?m=content&c=index&a=show&catid=1&id=1',
  ),
  17 => 
  array (
    'urlruleid' => '17',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '0',
    'urlrule' => 'show-{$catid}-{$id}-{$page}.html',
    'example' => 'show-1-2-1.html',
  ),
  18 => 
  array (
    'urlruleid' => '18',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '0',
    'urlrule' => 'content-{$catid}-{$id}-{$page}.html',
    'example' => 'content-1-2-1.html',
  ),
  30 => 
  array (
    'urlruleid' => '30',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '0',
    'urlrule' => 'list-{$catid}-{$page}.html',
    'example' => 'list-1-1.html',
  ),
  31 => 
  array (
    'urlruleid' => '31',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '0',
    'urlrule' => 'activity-{$catid}-{$id}-{$page}.html',
    'example' => 'activity-1-1-1.html',
  ),
  32 => 
  array (
    'urlruleid' => '32',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '0',
    'urlrule' => 'news-{$catid}-{$id}-{$page}.html',
    'example' => 'news-1-1-1.html 	',
  ),
  33 => 
  array (
    'urlruleid' => '33',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '0',
    'urlrule' => 'service-{$catid}-{$id}-{$page}.html',
    'example' => 'service-1-2-3.html',
  ),
  34 => 
  array (
    'urlruleid' => '34',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '0',
    'urlrule' => 'hiring-{$catid}-{$id}-{$page}.html',
    'example' => 'hiring-1-2-3.html',
  ),
  35 => 
  array (
    'urlruleid' => '35',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '0',
    'urlrule' => 'inquery-{$catid}-{$page}.html',
    'example' => 'inquery-1-2.html',
  ),
  36 => 
  array (
    'urlruleid' => '36',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '0',
    'urlrule' => 'faq-{$catid}-{$id}-{$page}.html',
    'example' => 'faq-1-3-2.html',
  ),
  37 => 
  array (
    'urlruleid' => '37',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '0',
    'urlrule' => 'faq-{$catid}-{$page}.html',
    'example' => 'faq-1-1.html 	',
  ),
  38 => 
  array (
    'urlruleid' => '38',
    'module' => 'content',
    'file' => 'show',
    'ishtml' => '0',
    'urlrule' => 'product-{$catid}-{$id}-{$page}.html',
    'example' => 'product-1-1-1.html 	',
  ),
  39 => 
  array (
    'urlruleid' => '39',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '1',
    'urlrule' => '{$catid}-{$page}.html',
    'example' => '2-3.html',
  ),
  41 => 
  array (
    'urlruleid' => '41',
    'module' => 'content',
    'file' => 'category',
    'ishtml' => '0',
    'urlrule' => 'product-{$catid}-{$page}.html',
    'example' => 'product-2-2.html',
  ),
);
?>