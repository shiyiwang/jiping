<?php
return array(
				'steps'=>array('ext','version'),//本升级程序需要使用的升级步骤。
				'from_version'=>'V9.3.1',//需要升级的程序
				'from_release'=>'20130305',//需要升级的程序版本
				'to_version'=>'V9.3.2',//升级到的程序
				'to_release'=>'20130411',//升级到的程序版本
				'version_check'=>'1',//是否对版本进行严格检查
				'version_description'=>'1、xss漏洞及用户昵称漏洞
2、修复uc报路径问题
3、相关内容增加只显示当前栏目下的相关关键字内容
4、新增加：视频库缩略图预览功能
5、修复批量生成静态，出现确实channelid的问题
6、修复表单向导复选框问题
7、修复视频库图片为空时，无法发布视频问题
8、修正flash上传漏洞！在apache特殊环境下，造成jpg文件当成php运行bug
9、基于 artDialog4.1.6 修复phpcms v9在谷歌，firefox下面无法使用可视化功能修复
10、修复支付模块漏洞',
);