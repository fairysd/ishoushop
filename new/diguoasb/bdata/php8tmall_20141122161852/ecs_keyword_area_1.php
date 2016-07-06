<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keyword_area`;");
E_C("CREATE TABLE `ecs_keyword_area` (
  `access_time` int(10) unsigned NOT NULL DEFAULT '0',
  `w_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `area` varchar(30) NOT NULL DEFAULT '',
  KEY `access_time` (`access_time`),
  KEY `w_id` (`w_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keyword_area` values('1393576195','1','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576377','1','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576381','1','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576399','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576430','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576485','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576515','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576534','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576563','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576575','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576590','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576599','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576608','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576626','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576829','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576845','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576861','2','127.0.0.1','LAN');");
E_D("replace into `ecs_keyword_area` values('1393576889','2','127.0.0.1','LAN');");

require("../../inc/footer.php");
?>