<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav_wap`;");
E_C("CREATE TABLE `ecs_nav_wap` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `icon` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav_wap` values('4','','0','分享','1','4','0','supertouch.php?act=share','middle','1405655642619747104.png');");
E_D("replace into `ecs_nav_wap` values('5','','0','积分商城','1','6','0','exchange.php','middle','1405655652755144849.png');");
E_D("replace into `ecs_nav_wap` values('7','','0','触屏版','1','1','0','#','bottom','');");
E_D("replace into `ecs_nav_wap` values('8','','0','电脑版','1','2','0','#','bottom','');");
E_D("replace into `ecs_nav_wap` values('9','','0','客户端','1','3','0','article.php?id=3','bottom','');");
E_D("replace into `ecs_nav_wap` values('10',NULL,NULL,'联系我们','0','4','0','article.php?id=4','bottom','');");
E_D("replace into `ecs_nav_wap` values('11',NULL,NULL,'公司简介','0','5','0','article.php?id=5','bottom','');");
E_D("replace into `ecs_nav_wap` values('12',NULL,NULL,'批发方案','0','6','0','wholesale.php','bottom','');");
E_D("replace into `ecs_nav_wap` values('14',NULL,NULL,'配送方式','0','7','0','myship.php','bottom','');");
E_D("replace into `ecs_nav_wap` values('18','a','3','帮助中心','1','2','0','article_cat.php?id=3','middle','1405655633658707376.png');");
E_D("replace into `ecs_nav_wap` values('21','','0','购物车','1','5','0','flow.php','middle','1405655646599300387.png');");
E_D("replace into `ecs_nav_wap` values('24','','0','联系我们','1','7','0','supertouch.php?act=contact','middle','1405655657249001066.png');");
E_D("replace into `ecs_nav_wap` values('25','','0','团购','1','8','0','group_buy.php','middle','1405655662572425140.png');");
E_D("replace into `ecs_nav_wap` values('26','','0','全部分类','1','1','0','catalog.php','middle','1405655628493173641.png');");
E_D("replace into `ecs_nav_wap` values('27','','0','个人中心','1','3','0','user.php','middle','1405655637808592177.png');");

require("../../inc/footer.php");
?>