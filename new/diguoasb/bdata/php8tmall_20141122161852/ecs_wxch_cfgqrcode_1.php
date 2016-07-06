<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_wxch_cfgqrcode`;");
E_C("CREATE TABLE `ecs_wxch_cfgqrcode` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `account` varchar(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `rule` varchar(200) NOT NULL,
  `state` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_wxch_cfgqrcode` values('1','10','111','11','11','1');");

require("../../inc/footer.php");
?>