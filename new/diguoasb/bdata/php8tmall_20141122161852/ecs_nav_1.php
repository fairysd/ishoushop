<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('2',NULL,NULL,'选购中心','0','2','0','pick_out.php','top');");
E_D("replace into `ecs_nav` values('3','','0','查看购物车','0','0','0','flow.php','top');");
E_D("replace into `ecs_nav` values('4','','0','团购商品','0','20','0','group_buy.php','middle');");
E_D("replace into `ecs_nav` values('6',NULL,NULL,'标签云','0','5','6','tag_cloud.php','top');");
E_D("replace into `ecs_nav` values('7',NULL,NULL,'免责条款','1','1','0','article.php?id=1','bottom');");
E_D("replace into `ecs_nav` values('8',NULL,NULL,'隐私保护','1','2','0','article.php?id=2','bottom');");
E_D("replace into `ecs_nav` values('9',NULL,NULL,'咨询热点','1','3','0','article.php?id=3','bottom');");
E_D("replace into `ecs_nav` values('10',NULL,NULL,'联系我们','1','4','0','article.php?id=4','bottom');");
E_D("replace into `ecs_nav` values('11',NULL,NULL,'公司简介','1','5','0','article.php?id=5','bottom');");
E_D("replace into `ecs_nav` values('12',NULL,NULL,'批发方案','1','6','0','wholesale.php','bottom');");
E_D("replace into `ecs_nav` values('14',NULL,NULL,'配送方式','1','7','0','myship.php','bottom');");
E_D("replace into `ecs_nav` values('18','c','4','女装','1','14','0','category.php?id=5','middle');");
E_D("replace into `ecs_nav` values('23',NULL,NULL,'报价单','0','6','0','quotation.php','top');");
E_D("replace into `ecs_nav` values('26','c','3','短裤','1','13','0','category.php?id=3','middle');");
E_D("replace into `ecs_nav` values('27','c','6','美容护肤','1','15','0','category.php?id=6','middle');");
E_D("replace into `ecs_nav` values('28','c','8','眼部护理','0','22','0','category.php?id=8','middle');");
E_D("replace into `ecs_nav` values('29','c','18','手机数码','1','24','0','category.php?id=18','middle');");
E_D("replace into `ecs_nav` values('30','c','12','男装/运动/户外','1','26','0','category.php?id=12','middle');");
E_D("replace into `ecs_nav` values('31','c','1','女装','0','28','0','category.php?id=1','middle');");
E_D("replace into `ecs_nav` values('32','','0','团购','1','7','0','group_buy.php','middle');");

require("../../inc/footer.php");
?>