<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('7b6120ded1802a887a77237ecdd3db5a','1416643184','0','1','127.0.0.1','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1416614384;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('9b12c3ad853fa58a1505078c8ebde23a','1416644088','0','0','127.0.0.1','0','0','1.00','0','a:5:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"last_time\";i:1416615274;s:12:\"captcha_word\";s:16:\"Yjc0ZTY4NDg3NQ==\";}');");
E_D("replace into `ecs_sessions` values('6b249993f54abd79e2409571aa4e7c4a','1416642774','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('b0753e74c0d3b3c44fb3764141d48c86','1416644270','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('4880fc6bb7cc2bf25637c9d4b830c81d','1416644261','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('ee54989f5161905603e8c6e53640be77','1416644248','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('006848a2a52c08dd8f5231c116a971b4','1416643119','0','0','127.0.0.1','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('80ffeb9eec57d08cfe0106d9e6424bed','1416643129','0','0','127.0.0.1','0','0','1.00','0','a:4:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"last_time\";i:1416614329;}');");
E_D("replace into `ecs_sessions` values('f4d3cb7ff11071b6673059070316abcf','1416643182','0','0','127.0.0.1','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('3c27939c6def475c668021e108f8c876','1416644060','13','0','127.0.0.1','haihui','1','1.00','haihui@a.com','a:7:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:12:\"captcha_word\";s:16:\"NDhmMTRmZjZlMQ==\";s:9:\"flow_type\";i:0;s:9:\"last_time\";s:10:\"1415297535\";s:7:\"last_ip\";s:9:\"127.0.0.1\";}');");
E_D("replace into `ecs_sessions` values('5745dc39535bdfffa217b7233450b7d9','1416643211','0','0','127.0.0.1','0','0','1.00','0','a:4:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:10:\"flow_order\";a:1:{s:14:\"extension_code\";s:0:\"\";}}');");
E_D("replace into `ecs_sessions` values('1af16ae7fd199781c996190473a05577','1416643666','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('a7fff9b7452b27ce7136e569105708ef','1416643680','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('0af9c2cfc740cd4244e845fadbec8d9f','1416644059','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('9622e3f02e6668dc5e432c960c5405eb','1416644086','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('45ce651df3a35831bd5a9c2475fefd19','1416644275','13','0','127.0.0.1','haihui','1','1.00','haihui@a.com','a:6:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:12:\"captcha_word\";s:16:\"ODBhYWJkYmQwMA==\";s:9:\"last_time\";s:10:\"1416614419\";s:7:\"last_ip\";s:9:\"127.0.0.1\";}');");
E_D("replace into `ecs_sessions` values('89a3b155f7434e88331edf840076bf1e','1416644274','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('94130129a804c800ab945b9d053d5e50','1416644281','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");

require("../../inc/footer.php");
?>