<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_payment`;");
E_C("CREATE TABLE `ecs_touch_payment` (
  `pay_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `pay_code` varchar(20) NOT NULL DEFAULT '',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `pay_fee` varchar(10) NOT NULL DEFAULT '0',
  `pay_desc` text NOT NULL,
  `pay_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pay_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pay_id`),
  UNIQUE KEY `pay_code` (`pay_code`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_payment` values('4','wxpay','微信支付','0','微信支付，是基于客户端提供的服务功能。同时向商户提供销售经营分析、账户和资金管理的功能支持。用户通过扫描二维码、微信内打开商品页面购买等多种方式调起微信支付模块完成支付。','0','a:6:{i:0;a:3:{s:4:\"name\";s:11:\"wxpay_appid\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:18:\"wxfea3e92ddf4936d5\";}i:1;a:3:{s:4:\"name\";s:15:\"wxpay_appsecret\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:32:\"674828c37381378ba816825c3d533a82\";}i:2;a:3:{s:4:\"name\";s:16:\"wxpay_paysignkey\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:32:\"4cdbcfc816f60dff441984b1caa0d4f5\";}i:3;a:3:{s:4:\"name\";s:15:\"wxpay_partnerid\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:10:\"1218565901\";}i:4;a:3:{s:4:\"name\";s:16:\"wxpay_partnerkey\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:128:\"d1qOVI3KEMQWz2uX2koFros8U2NZpTN5CX8JU6cN50UU4SO38fqRKZ3GD8jv3Ut6UzMmChnc1JerftH1Opdg0hnCW4GC35f09HCkqad3ashj9MVJVVSglknlMZMsJCgi\";}i:5;a:3:{s:4:\"name\";s:14:\"wxpay_signtype\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:4:\"sha1\";}}','1','0','1');");
E_D("replace into `ecs_touch_payment` values('5','alipay_wap','支付宝（手机版）','0','支付宝（手机版）网站(www.alipay.com) 是国内先进的网上支付平台。','0','a:3:{i:0;a:3:{s:4:\"name\";s:14:\"alipay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:16:\"yunhunet@163.com\";}i:1;a:3:{s:4:\"name\";s:10:\"alipay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:32:\"6cmxx9tfy319fgfehf3w0hh3yc3wgr9p\";}i:2;a:3:{s:4:\"name\";s:14:\"alipay_partner\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:16:\"2088901332681362\";}}','1','0','1');");

require("../../inc/footer.php");
?>