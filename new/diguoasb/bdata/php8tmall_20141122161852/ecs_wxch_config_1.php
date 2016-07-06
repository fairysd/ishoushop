<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_wxch_config`;");
E_C("CREATE TABLE `ecs_wxch_config` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `token` varchar(100) NOT NULL,
  `appid` char(18) NOT NULL,
  `appsecret` char(32) NOT NULL,
  `access_token` char(150) NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  `websit` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_wxch_config` values('1','weixin','wx91856de95cb79ec3','cfa96101264545ac5c9655be73435736','','1386912383','');");
E_D("replace into `ecs_wxch_config` values('2','','','','','0','');");
E_D("replace into `ecs_wxch_config` values('3','1111','11111','1111111','','0','');");

require("../../inc/footer.php");
?>