<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_wxch_keywords`;");
E_C("CREATE TABLE `ecs_wxch_keywords` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `contents` text NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `type` varchar(20) NOT NULL,
  `url` varchar(50) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `is_reg` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_wxch_keywords` values('4','','','欢迎关注我们的','0','0','subscribe','','','1');");
E_D("replace into `ecs_wxch_keywords` values('10','新闻','新闻','文字文字','0','0','text','','','0');");
E_D("replace into `ecs_wxch_keywords` values('11','丹丹','丹丹','丹丹','0','0','news','www.zouzheq.com','1396788585104161583.jpg','0');");
E_D("replace into `ecs_wxch_keywords` values('12','1212','1212','','0','0','news','','','0');");

require("../../inc/footer.php");
?>