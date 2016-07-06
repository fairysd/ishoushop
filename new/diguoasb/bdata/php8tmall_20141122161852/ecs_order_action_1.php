<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','1','admin','1','0','2','0','1','1387156893');");
E_D("replace into `ecs_order_action` values('2','1','admin','5','5','2','0','','1387156897');");
E_D("replace into `ecs_order_action` values('3','1','admin','1','1','2','1','','1387156904');");
E_D("replace into `ecs_order_action` values('4','2','admin','1','0','2','0','1','1387157036');");
E_D("replace into `ecs_order_action` values('5','2','admin','5','5','2','0','','1387157039');");
E_D("replace into `ecs_order_action` values('6','2','admin','1','1','2','1','','1387157046');");
E_D("replace into `ecs_order_action` values('7','4','admin','1','0','2','0','gvhdtjdtyj','1390267814');");
E_D("replace into `ecs_order_action` values('8','4','admin','1','3','2','0','','1390267846');");
E_D("replace into `ecs_order_action` values('9','4','admin','5','5','2','0','tyi76','1390267854');");
E_D("replace into `ecs_order_action` values('10','4','admin','1','1','2','1','','1390267904');");
E_D("replace into `ecs_order_action` values('11','6','admin','1','0','0','0','','1390413159');");
E_D("replace into `ecs_order_action` values('12','6','admin','1','0','2','0','ityiu','1390413165');");
E_D("replace into `ecs_order_action` values('13','6','admin','5','5','2','0','','1390413171');");
E_D("replace into `ecs_order_action` values('14','6','admin','1','1','2','1','','1390413197');");
E_D("replace into `ecs_order_action` values('15','7','admin','1','0','0','0','','1390413526');");
E_D("replace into `ecs_order_action` values('16','7','admin','1','0','2','0','dftuftu','1390413531');");
E_D("replace into `ecs_order_action` values('17','7','admin','5','5','2','0','','1390413539');");
E_D("replace into `ecs_order_action` values('18','7','admin','1','1','2','1','','1390413545');");
E_D("replace into `ecs_order_action` values('19','8','admin','1','0','0','0','','1390413603');");
E_D("replace into `ecs_order_action` values('20','8','admin','1','0','2','0','r6ir','1390413608');");
E_D("replace into `ecs_order_action` values('21','8','admin','5','5','2','0','e58u68','1390413615');");
E_D("replace into `ecs_order_action` values('22','8','admin','1','1','2','1','','1390413621');");
E_D("replace into `ecs_order_action` values('23','9','admin','1','0','0','0','','1390413724');");
E_D("replace into `ecs_order_action` values('24','9','admin','1','0','2','0','e5r8uer568','1390413730');");
E_D("replace into `ecs_order_action` values('25','9','admin','5','5','2','0','rt6','1390413735');");
E_D("replace into `ecs_order_action` values('26','9','admin','1','1','2','1','','1390413742');");
E_D("replace into `ecs_order_action` values('27','10','admin','1','0','0','0','','1390413805');");
E_D("replace into `ecs_order_action` values('28','10','admin','1','0','2','0','e5r6ue4','1390413810');");
E_D("replace into `ecs_order_action` values('29','10','admin','5','5','2','0','','1390413815');");
E_D("replace into `ecs_order_action` values('30','10','admin','1','1','2','1','','1390413820');");
E_D("replace into `ecs_order_action` values('31','27','admin','1','0','0','0','','1399590920');");
E_D("replace into `ecs_order_action` values('32','27','admin','1','0','2','0','1','1399590947');");
E_D("replace into `ecs_order_action` values('33','27','admin','1','3','2','0','','1399590952');");
E_D("replace into `ecs_order_action` values('34','27','admin','5','5','2','0','','1399590957');");
E_D("replace into `ecs_order_action` values('35','27','admin','1','1','2','1','','1399591297');");
E_D("replace into `ecs_order_action` values('36','27','admin','5','2','2','0','124','1399591388');");
E_D("replace into `ecs_order_action` values('37','26','admin','1','0','0','0','','1400525336');");
E_D("replace into `ecs_order_action` values('38','26','admin','1','0','2','0','1','1400525343');");
E_D("replace into `ecs_order_action` values('39','26','admin','5','5','2','0','','1400525351');");
E_D("replace into `ecs_order_action` values('40','25','admin','1','0','2','0','1','1400525419');");
E_D("replace into `ecs_order_action` values('41','25','admin','5','5','2','0','','1400525430');");
E_D("replace into `ecs_order_action` values('42','28','admin','1','0','2','0','1','1400525605');");
E_D("replace into `ecs_order_action` values('43','28','admin','1','3','2','0','','1400525608');");
E_D("replace into `ecs_order_action` values('44','28','admin','5','5','2','0','','1400525619');");
E_D("replace into `ecs_order_action` values('45','28','admin','1','1','2','1','','1400525641');");
E_D("replace into `ecs_order_action` values('46','25','admin','1','1','2','1','','1400525666');");
E_D("replace into `ecs_order_action` values('47','34','admin','1','0','2','0','1','1406593519');");
E_D("replace into `ecs_order_action` values('48','34','admin','1','3','2','0','','1406593522');");
E_D("replace into `ecs_order_action` values('49','34','admin','5','5','2','0','','1406593527');");
E_D("replace into `ecs_order_action` values('50','34','admin','1','1','2','1','','1406593534');");
E_D("replace into `ecs_order_action` values('51','35','admin','1','0','2','0','23','1406660438');");
E_D("replace into `ecs_order_action` values('52','35','admin','5','5','2','0','','1406660446');");
E_D("replace into `ecs_order_action` values('53','35','admin','1','1','2','1','','1406660454');");
E_D("replace into `ecs_order_action` values('54','36','admin','1','0','0','0','','1406834239');");
E_D("replace into `ecs_order_action` values('55','36','admin','1','0','2','0','22','1406834247');");
E_D("replace into `ecs_order_action` values('56','36','admin','1','3','2','0','','1406834250');");
E_D("replace into `ecs_order_action` values('57','36','admin','5','5','2','0','','1406834255');");
E_D("replace into `ecs_order_action` values('58','38','admin','1','0','2','0','f','1407266584');");
E_D("replace into `ecs_order_action` values('59','38','admin','1','3','2','0','','1407266586');");
E_D("replace into `ecs_order_action` values('60','38','admin','5','5','2','0','','1407266591');");
E_D("replace into `ecs_order_action` values('61','38','admin','1','1','2','1','','1407266597');");
E_D("replace into `ecs_order_action` values('62','39','admin','1','0','2','0','f','1407272852');");
E_D("replace into `ecs_order_action` values('63','39','admin','1','3','2','0','','1407272855');");
E_D("replace into `ecs_order_action` values('64','39','admin','5','5','2','0','','1407272859');");
E_D("replace into `ecs_order_action` values('65','39','admin','1','1','2','1','f','1407272866');");
E_D("replace into `ecs_order_action` values('66','45','admin','1','0','2','0','f','1408574417');");
E_D("replace into `ecs_order_action` values('67','45','admin','1','3','2','0','','1408574419');");
E_D("replace into `ecs_order_action` values('68','45','admin','5','5','2','0','','1408574423');");
E_D("replace into `ecs_order_action` values('69','45','admin','1','1','2','1','','1408574437');");
E_D("replace into `ecs_order_action` values('70','46','admin','1','0','2','0','f','1408575056');");
E_D("replace into `ecs_order_action` values('71','46','admin','1','3','2','0','','1408575058');");
E_D("replace into `ecs_order_action` values('72','46','admin','5','5','2','0','','1408575062');");
E_D("replace into `ecs_order_action` values('73','46','admin','1','1','2','1','','1408575069');");
E_D("replace into `ecs_order_action` values('74','47','admin','1','0','2','0','f','1408575187');");
E_D("replace into `ecs_order_action` values('75','47','admin','1','3','2','0','','1408575190');");
E_D("replace into `ecs_order_action` values('76','47','admin','5','5','2','0','','1408575194');");
E_D("replace into `ecs_order_action` values('77','47','admin','1','1','2','1','','1408575201');");
E_D("replace into `ecs_order_action` values('78','47','admin','5','2','2','0','123','1415294934');");
E_D("replace into `ecs_order_action` values('79','44','admin','1','0','0','0','','1415294958');");
E_D("replace into `ecs_order_action` values('80','44','admin','1','0','2','0','213','1415294974');");
E_D("replace into `ecs_order_action` values('81','44','admin','5','5','2','0','','1415295006');");
E_D("replace into `ecs_order_action` values('82','44','admin','1','1','2','1','','1415295045');");
E_D("replace into `ecs_order_action` values('83','42','admin','1','0','0','0','','1415296979');");
E_D("replace into `ecs_order_action` values('84','48','admin','1','0','0','0','','1415297673');");
E_D("replace into `ecs_order_action` values('85','48','admin','5','5','0','0','','1415297691');");
E_D("replace into `ecs_order_action` values('86','48','admin','1','1','0','1','','1415297752');");
E_D("replace into `ecs_order_action` values('87','48','admin','5','5','0','1','','1415300401');");
E_D("replace into `ecs_order_action` values('88','48','admin','1','1','0','1','','1415300409');");
E_D("replace into `ecs_order_action` values('89','48','admin','1','1','0','1','','1415301405');");
E_D("replace into `ecs_order_action` values('90','48','admin','1','1','0','1','','1415301501');");
E_D("replace into `ecs_order_action` values('91','44','admin','5','5','2','1','','1415301582');");
E_D("replace into `ecs_order_action` values('92','44','admin','1','1','2','1','','1415301590');");

require("../../inc/footer.php");
?>