<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keyword`;");
E_C("CREATE TABLE `ecs_keyword` (
  `w_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `word` varchar(255) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `letter` varchar(255) NOT NULL DEFAULT '',
  `items` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `total_search` int(10) unsigned NOT NULL DEFAULT '0',
  `month_search` int(10) unsigned NOT NULL DEFAULT '0',
  `week_search` int(10) unsigned NOT NULL DEFAULT '0',
  `today_search` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`w_id`),
  KEY `searchengine` (`searchengine`),
  KEY `word` (`word`),
  KEY `letter` (`letter`),
  KEY `keyword` (`keyword`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keyword` values('1','ecshop','测','测','ce','39','1393576381','3','3','3','3','1');");
E_D("replace into `ecs_keyword` values('2','ecshop','测试商品','测试商品','ceshishangpin','39','1393576889','15','15','15','15','1');");

require("../../inc/footer.php");
?>