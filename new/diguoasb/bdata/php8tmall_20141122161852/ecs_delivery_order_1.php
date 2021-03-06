<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_order`;");
E_C("CREATE TABLE `ecs_delivery_order` (
  `delivery_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(50) DEFAULT NULL,
  `add_time` int(10) unsigned DEFAULT '0',
  `shipping_id` tinyint(3) unsigned DEFAULT '0',
  `shipping_name` varchar(120) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT '0',
  `action_user` varchar(30) DEFAULT NULL,
  `consignee` varchar(60) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country` smallint(5) unsigned DEFAULT '0',
  `province` smallint(5) unsigned DEFAULT '0',
  `city` smallint(5) unsigned DEFAULT '0',
  `district` smallint(5) unsigned DEFAULT '0',
  `sign_building` varchar(120) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `zipcode` varchar(60) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `best_time` varchar(120) DEFAULT NULL,
  `postscript` varchar(255) DEFAULT NULL,
  `how_oos` varchar(120) DEFAULT NULL,
  `insure_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `shipping_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `update_time` int(10) unsigned DEFAULT '0',
  `suppliers_id` smallint(5) DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `agency_id` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`delivery_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_order` values('1','20131216172137633','2013121684882','1','','1387156881','5','申通快递','0','admin','111','111','1','4','55','541','','222@qq.com','111','111','11','','','等待所有商品备齐后再发','0.00','15.00','1387156897','0','0','0');");
E_D("replace into `ecs_delivery_order` values('2','20131216172394315','2013121628773','2','','1387157023','5','申通快递','0','admin','111','333','1','7','101','902','','222@qq.com','444','5655','','','','等待所有商品备齐后再发','0.00','15.00','1387157039','0','0','0');");
E_D("replace into `ecs_delivery_order` values('3','20140121173059551','2014012127768','4','','1390267776','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390267853','0','0','0');");
E_D("replace into `ecs_delivery_order` values('4','20140123095230972','2014012383197','6','','1390413144','5','申通快递','0','admin','111111','agagqarygsae','1','5','65','626','','123456@qq.com','235645','12345678944','','','','等待所有商品备齐后再发','0.00','15.00','1390413171','0','0','0');");
E_D("replace into `ecs_delivery_order` values('5','20140123095866393','2014012386380','7','','1390413515','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390413539','0','0','0');");
E_D("replace into `ecs_delivery_order` values('6','20140123100066729','2014012362771','8','','1390413591','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390413615','0','0','0');");
E_D("replace into `ecs_delivery_order` values('7','20140123100215181','2014012338692','9','','1390413714','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390413735','0','0','0');");
E_D("replace into `ecs_delivery_order` values('8','20140123100344414','2014012367996','10','','1390413797','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1390413815','0','0','0');");
E_D("replace into `ecs_delivery_order` values('9','20140509151594719','2014050920080','27','','1399590904','7','运费到付','0','admin','fff','fff','1','3','38','418','','12222223@qq.com','111111','13072170278','13072170278','','','等待所有商品备齐后再发','0.00','0.00','1399590957','0','0','0');");
E_D("replace into `ecs_delivery_order` values('10','20140520104945549','2014012314897','26',NULL,'1390420686','5','申通快递','0','admin','sdhsrhdrhs','dhasrdgrahah','1','4','54','532','','123252@qq.com','123456','154896222333','','','','等待所有商品备齐后再发','0.00','15.00','1400525351','0','2','0');");
E_D("replace into `ecs_delivery_order` values('11','20140520105083143','2014012383507','25','22222','1390418164','5','申通快递','0','admin','sdhshsdj','sdhsdfhrs','1','4','56','548','','123@qq.com','234566','15896542131','','','','等待所有商品备齐后再发','0.00','15.00','1400525430','0','0','0');");
E_D("replace into `ecs_delivery_order` values('12','20140520105334268','2014052092102','28','11111111','1400525579','5','申通快递','0','admin','111','333','1','18','247','2092','','222@qq.com','44','5555','','','','等待所有商品备齐后再发','0.00','15.00','1400525619','0','0','0');");
E_D("replace into `ecs_delivery_order` values('13','20140729162505131','2014072939998','34','222','1406593504','7','运费到付','0','admin','222','111','1','4','54','531','','333@qq.com','22','33','','','','等待所有商品备齐后再发','0.00','0.00','1406593527','0','0','0');");
E_D("replace into `ecs_delivery_order` values('14','20140730110023000','2014073039384','35','','1406660382','6','邮局平邮','0','admin','22','问问','1','2','52','500','','111@qq.com','123456','1234567890','','','','等待所有商品备齐后再发','0.00','3.50','1406660445','0','0','0');");
E_D("replace into `ecs_delivery_order` values('15','20140801111730056','2014080115972','36',NULL,'1406834210','5','申通快递','8','admin','dagaf','hgahahahahr','1','3','37','410','','123@qq.com','','12345678993','','','','等待所有商品备齐后再发','0.00','15.00','1406834255','0','2','0');");
E_D("replace into `ecs_delivery_order` values('16','20140806112338167','2014080664824','38','','1407266573','5','申通快递','0','admin','123','从常常常常常常','1','2','52','500','','0000@qq.com','111144444','2312323','','','','等待所有商品备齐后再发','0.00','15.00','1407266591','0','0','0');");
E_D("replace into `ecs_delivery_order` values('17','20140806130727297','2014080697752','39','','1407272840','5','申通快递','11','admin','123','从常常常常常常','1','3','37','410','','yangting@ecmoban.com','','1224343','','','','等待所有商品备齐后再发','0.00','15.00','1407272859','0','0','0');");
E_D("replace into `ecs_delivery_order` values('18','20140821144011086','2014082140288','45','','1408574303','5','申通快递','0','admin','fsd','sadf','1','2','52','500','','123@aa.com','123456','1232456788','','','','等待所有商品备齐后再发','0.00','15.00','1408574423','0','0','0');");
E_D("replace into `ecs_delivery_order` values('19','20140821145167174','2014082164641','46','','1408575038','5','申通快递','0','admin','fsd','sadf','1','2','52','500','','123@aa.com','123456','1232456788','','','','等待所有商品备齐后再发','0.00','15.00','1408575062','0','0','0');");
E_D("replace into `ecs_delivery_order` values('20','20140821145315770','2014082108950','47','','1408575172','5','申通快递','0','admin','fsd','sadf','1','4','54','531','','123@aa.com','123456','12345678963','','','','等待所有商品备齐后再发','0.00','15.00','1408575194','0','0','0');");
E_D("replace into `ecs_delivery_order` values('21','20141107093078978','2014080744347','44','','1407365233','5','申通快递','0','admin','fsd','sadf','1','2','52','500','','123@aa.com','123456','1232456788','','','','等待所有商品备齐后再发','0.00','15.00','1415295006','0','0','0');");
E_D("replace into `ecs_delivery_order` values('22','20141107101494967','2014110790960','48','','1415297573','3','城际快递','13','admin','sdfsdf','sdfsdf','1','2','52','500','','haihui@a.com','043300','13363599221','','','','等待所有商品备齐后再发','0.00','10.00','1415297691','0','0','0');");

require("../../inc/footer.php");
?>