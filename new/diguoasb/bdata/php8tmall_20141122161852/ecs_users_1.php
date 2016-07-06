<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_users`;");
E_C("CREATE TABLE `ecs_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `aite_id` text NOT NULL,
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `frozen_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_points` int(10) unsigned NOT NULL DEFAULT '0',
  `rank_points` int(10) unsigned NOT NULL DEFAULT '0',
  `address_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0',
  `last_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `visit_count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `user_rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_special` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ec_salt` varchar(10) DEFAULT NULL,
  `salt` varchar(10) NOT NULL DEFAULT '0',
  `parent_id` mediumint(9) NOT NULL DEFAULT '0',
  `flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `alias` varchar(60) NOT NULL,
  `msn` varchar(60) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `is_validated` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `credit_line` decimal(10,2) unsigned NOT NULL,
  `passwd_question` varchar(50) DEFAULT NULL,
  `passwd_answer` varchar(255) DEFAULT NULL,
  `people_img` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `email` (`email`),
  KEY `parent_id` (`parent_id`),
  KEY `flag` (`flag`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_users` values('1','','ecshop@ecshop.com','ecshop','554fcae493e564ee0dc75bdf2ebf94ca','','','0','1960-03-03','0.00','0.00','98388','15390','1','0','1245048540','0000-00-00 00:00:00','0.0.0.0','11','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL,'');");
E_D("replace into `ecs_users` values('2','','vip@ecshop.com','vip','232059cb5361a9336ccf1b8c2ba7657a','','','0','1949-01-01','0.00','0.00','0','0','0','0','0','0000-00-00 00:00:00','','0','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL,'');");
E_D("replace into `ecs_users` values('3','','text@ecshop.com','text','1cb251ec0d568de6a929b520c4aed8d1','','','0','1949-01-01','0.00','0.00','0','0','2','0','1242973574','0000-00-00 00:00:00','0.0.0.0','2','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL,'');");
E_D("replace into `ecs_users` values('5','','zuanshi@ecshop.com','zuanshi','815a71fb334412e7ba4595741c5a111d','','','0','1949-01-01','0.00','10000.00','0','0','0','0','0','0000-00-00 00:00:00','','0','3','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL,'');");
E_D("replace into `ecs_users` values('6','','497110669@qq.com','周欢','12c4009a19335a3777e57dd10192e7fb','','','0','0000-00-00','0.00','0.00','0','0','0','1381276290','1381276290','0000-00-00 00:00:00','127.0.0.1','1','0','0',NULL,'0','0','0','','1111@live.cn','444444','44444','55555','66666','0','0.00','motto','7777777','');");
E_D("replace into `ecs_users` values('7','','123456@qq.com','123456','80e7a5f22e22a906efa21f5491050758','','','0','0000-00-00','0.00','0.00','0','0','0','1383007932','1384818204','0000-00-00 00:00:00','127.0.0.1','2','0','0','9072','0','0','0','','','','','','','0','0.00',NULL,NULL,'');");
E_D("replace into `ecs_users` values('8','','123@qq.com','admin123','b5b5312f406815d38eaeba88aae69e7d','','','0','1954-01-01','0.00','0.00','5860','5860','5','1386290864','1407350695','0000-00-00 00:00:00','192.168.1.52','1173','0','0','7839','0','0','0','','','','','','','0','0.00',NULL,NULL,'8_20140805wwqzoe.jpg');");
E_D("replace into `ecs_users` values('9','','123456789@qq.com','123456789','1c989fbb8c9b5b1bdca927c8a2e3a7c9','','','0','0000-00-00','0.00','0.00','0','0','3','1386542427','1387500589','0000-00-00 00:00:00','127.0.0.1','48','0','0','6405','0','0','0','','','','','','','0','0.00',NULL,NULL,'');");
E_D("replace into `ecs_users` values('10','','admin123@qq.com','admin9041','650cdb11cd428301302c1043b87666fd','','','0','0000-00-00','0.00','0.00','0','0','4','1388096666','1400525937','0000-00-00 00:00:00','127.0.0.1','7','0','0','4674','0','0','0','','','','','','','0','0.00',NULL,NULL,'');");
E_D("replace into `ecs_users` values('11','','yangting@ecmoban.com','yang','718c133989a0bcb5c02dd8bbbaf674b2','','','0','1954-01-01','0.00','0.00','699','800','6','1407269132','1407362197','0000-00-00 00:00:00','192.168.1.72','6','0','0','1187','0','0','0','','','','','','','0','0.00',NULL,NULL,'');");
E_D("replace into `ecs_users` values('12','','1000001@qq.com','testadmin','9283a03246ef2dacdc21a9b137817ec1','','','0','0000-00-00','0.00','0.00','0','0','0','1412915276','1412915276','0000-00-00 00:00:00','192.168.1.135','1','0','0',NULL,'0','0','0','','','','','','','0','0.00',NULL,NULL,'');");
E_D("replace into `ecs_users` values('13','','haihui@a.com','haihui','f13655e48f85a0e693a8ba734a8a06cf','','','0','0000-00-00','0.00','0.00','267','267','7','1415297535','1416615441','0000-00-00 00:00:00','127.0.0.1','3','0','0','4372','0','0','0','','','','','','','0','0.00',NULL,NULL,'');");

require("../../inc/footer.php");
?>