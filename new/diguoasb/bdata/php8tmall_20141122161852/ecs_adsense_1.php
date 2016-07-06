<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_adsense`;");
E_C("CREATE TABLE `ecs_adsense` (
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_adsense` values('1','本站','1');");
E_D("replace into `ecs_adsense` values('55','本站','1');");
E_D("replace into `ecs_adsense` values('92','本站','2');");
E_D("replace into `ecs_adsense` values('25','本站','1');");
E_D("replace into `ecs_adsense` values('24','本站','1');");
E_D("replace into `ecs_adsense` values('108','本站','1');");
E_D("replace into `ecs_adsense` values('106','本站','2');");
E_D("replace into `ecs_adsense` values('107','本站','2');");
E_D("replace into `ecs_adsense` values('109','本站','3');");
E_D("replace into `ecs_adsense` values('104','本站','1');");
E_D("replace into `ecs_adsense` values('124','本站','1');");
E_D("replace into `ecs_adsense` values('105','本站','1');");
E_D("replace into `ecs_adsense` values('112','本站','1');");
E_D("replace into `ecs_adsense` values('99','本站','1');");
E_D("replace into `ecs_adsense` values('113','本站','1');");
E_D("replace into `ecs_adsense` values('182','本站','1');");
E_D("replace into `ecs_adsense` values('96','本站','1');");
E_D("replace into `ecs_adsense` values('97','本站','2');");
E_D("replace into `ecs_adsense` values('174','本站','2');");
E_D("replace into `ecs_adsense` values('183','本站','1');");
E_D("replace into `ecs_adsense` values('149','本站','1');");
E_D("replace into `ecs_adsense` values('150','本站','3');");

require("../../inc/footer.php");
?>