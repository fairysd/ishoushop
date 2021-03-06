<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_category`;");
E_C("CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  `is_top_style` int(3) unsigned NOT NULL DEFAULT '0',
  `is_top_show` int(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=271 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_category` values('1','女装','','','0','50','','','0','','1','5','172,185,178','0','0');");
E_D("replace into `ecs_category` values('2','内衣','','','1','50','','','0','','1','0','6','0','0');");
E_D("replace into `ecs_category` values('3','短裤','','','1','2','','台','1','','1','4','185,189,173,178','0','0');");
E_D("replace into `ecs_category` values('4','女装','','','1','50','','','1','','1','0','28','0','0');");
E_D("replace into `ecs_category` values('5','连衣裙','','','1','1','','','0','','1','5','18','0','0');");
E_D("replace into `ecs_category` values('6','美容护肤','','','0','50','','','1','','0','5','211,212','0','0');");
E_D("replace into `ecs_category` values('7','面部护理','','','6','50','','','0','','1','0','','0','1');");
E_D("replace into `ecs_category` values('8','眼部护理','','','6','50','','','0','','1','0','','1','1');");
E_D("replace into `ecs_category` values('9','其他护理','','','6','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('11','护肤套装','','','6','50','','','0','','1','0','','0','1');");
E_D("replace into `ecs_category` values('12','男装/运动/户外','','','0','50','','','1','','1','0','','1','1');");
E_D("replace into `ecs_category` values('13','精品男装','','','12','3','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('14','上装','','','12','1','','','0','','1','0','','1','1');");
E_D("replace into `ecs_category` values('15','下装','','','12','2','','','0','','1','0','','1','1');");
E_D("replace into `ecs_category` values('16','女鞋/男鞋/箱包','','','0','50','','','1','','1','0','','0','0');");
E_D("replace into `ecs_category` values('17','化妆品/个人护理','','','0','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('18','手机数码','','','0','50','','','1','','1','0','','0','0');");
E_D("replace into `ecs_category` values('19','洁面','','','7','50','','','0','','1','5','211,212','0','0');");
E_D("replace into `ecs_category` values('20','面膜','','','7','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('21','卸妆','','','7','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('22','防晒','','','7','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('23','精华','','','7','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('24','化妆水','','','7','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('25','乳液','','','7','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('26','面霜','','','7','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('27','面油','','','7','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('28','保湿','','','8','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('29','去浮肿','','','8','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('30','去眼纹','','','8','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('31','去眼袋','','','8','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('32','去黑眼圈','','','8','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('33','护唇','','','9','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('34','喷雾','','','9','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('35','啫喱','','','9','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('36','角质按摩','','','9','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('37','祛痘祛斑','','','9','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('38','T区护理','','','9','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('39','颈霜','','','9','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('40','保健食品','','','9','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('41','美白','','','11','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('42','保湿','','','11','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('43','嫩肤','','','11','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('44','补水','','','11','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('45','紧致去皱','','','11','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('46','男士套装','','','12','4','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('47','眼线','','','4','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('48','眼影','','','4','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('49','睫毛','','','4','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('50','眉粉眉笔','','','4','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('51','印花T恤','','','5','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('52','沙滩裙','','','5','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('53','半身裙','','','5','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('54','新品连衣裙','','','5','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('55','雪纺连衣裙','','','5','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('56','眼影','','','3','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('57','修容','','','3','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('58','润唇','','','3','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('59','卸妆','','','3','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('60','浓密卷翘','','','3','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('61','腮红','','','2','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('62','唇妆','','','2','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('63','美甲','','','2','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('64','修容','','','2','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('65','遮瑕','','','2','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('66','底妆定妆','','','2','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('67','T恤','','','14','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('68','背心','','','14','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('69','休闲单西','','','14','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('70','针织衫','','','14','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('71','polo','','','14','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('72','衬衫','','','14','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('73','西服套装','','','14','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('74','牛仔裤','','','15','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('75','修身裤','','','15','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('76','宽松裤','','','15','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('77','休闲裤','','','15','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('78','防晒','','','13','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('79','剃须','','','13','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('80','BB霜','','','13','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('81','保湿','','','46','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('82','活肤','','','46','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('83','兰芝','','','46','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('84','欧莱雅','','','46','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('85','碧欧泉','','','46','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('86','女鞋馆','','','16','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('87','男鞋馆','','','16','51','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('88','箱包馆','','','16','52','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('89','果冻包','','','16','53','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('90','淡香','','','86','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('91','花香调','','','86','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('92','迪奥','','','86','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('93','安娜苏','','','86','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('94','菲拉格慕','','','86','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('95','淡香','','','87','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('96','海洋香调','','','87','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('97','博柏利','','','87','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('98','宝格丽','','','87','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('99','阿迪达斯','','','87','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('100','淡香','','','88','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('101','花果香调','','','88','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('102','爱马仕','','','88','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('103','凯文克莱','','','88','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('104','淡香','','','89','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('105','香体','','','89','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('106','花香调','','','89','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('107','花果香调','','','89','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('108','草木香调','','','89','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('109','身体护理','','','17','60','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('110','丰胸瘦身','','','17','61','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('111','美发护发','','','17','62','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('112','洗护套装','','','17','63','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('113','沐浴','','','109','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('114','脱毛','','','109','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('115','手足护理','','','109','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('116','香体止汗','','','109','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('117','其他护理','','','109','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('118','丰胸塑臀','','','110','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('119','纤体瘦身','','','110','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('120','精油护理','','','110','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('121','洗发','','','111','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('122','护发','','','111','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('123','染发','','','111','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('124','焗油','','','111','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('125','美发造型','','','111','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('126','保湿','','','112','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('127','沐浴','','','112','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('128','护发养发','','','112','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('129','美体套装','','','112','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('130','荣耀系列','','','18','70','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('131','神器预定','','','18','71','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('132','智能穿戴','','','18','72','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('133','联想手机','','','18','73','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('134','美甲工具','','','130','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('135','瘦身纤体','','','130','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('136','化妆镜','','','131','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('137','辅助化妆','','','131','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('138','定妆','','','131','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('139','艾黛儿','','','131','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('140','护发养发','','','132','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('141','发型定型','','','132','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('142','收纳','','','133','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('143','化妆包','','','133','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('144','雅诗兰黛','','','133','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('146','母婴玩具','','','0','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('147','食品','','','0','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('148','大家电/生活电器','','','0','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('149','家具建材','','','0','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('150','珠宝饰品 /腕表眼镜','','','0','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('151','汽车 /配件 /用品','','','0','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('152','家纺 /家饰','','','0','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('153','医药保健','','','0','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('154','居家百货','','','0','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('155','图书音像','','','0','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('156','今日活动','','','1','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('157','真丝连衣裙','','','5','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('158','雪纺衫','','','5','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('159','母婴玩具','','','146','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('160','夏季童装','','','159','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('161','亲子装','','','159','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('162','女童裙子','','','159','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('163','儿童裤子','','','159','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('164','短袖T恤','','','159','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('165','儿童内衣','','','159','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('166','夹克外套','','','159','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('167','天猫食品','','','147','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('168','零食','','','167','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('169','核桃','','','167','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('170','红枣','','','167','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('171','瓜子','','','167','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('172','牛肉干','','','167','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('173','葡萄干','','','167','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('174','芒果干','','','167','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('175','榴莲干','','','167','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('176','大家电','','','148','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('177','冰箱','','','176','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('178','空调','','','176','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('179','平板电视','','','176','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('180','热水器','','','176','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('181','厨房用品','','','148','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('182','电风扇','','','181','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('183','电饭煲','','','181','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('184','电磁炉','','','181','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('185','电视机','','','181','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('186','家装馆','','','149','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('187','沙发','','','186','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('188','电视柜','','','186','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('189','欧式床','','','186','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('190','真皮沙发','','','186','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('191','珠宝饰品','','','150','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('192','腕表眼镜','','','150','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('193','珠宝','','','191','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('194','黄金','','','191','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('195','砖石','','','191','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('196','珍珠','','','191','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('197','翡翠','','','191','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('198','男表','','','192','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('199','女表','','','192','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('200','情侣表','','','192','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('201','太阳镜','','','192','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('202','近视镜','','','192','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('203','运动表','','','192','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('204','学生表','','','192','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('205','汽车生活馆','','','151','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('206','大众','','','205','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('207','丰田','','','205','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('208','长安','','','205','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('209','中华','','','205','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('210','吉利','','','205','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('211','天猫home','','','152','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('212','落地蚊帐','','','211','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('213','四件套','','','211','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('214','全棉毛巾','','','211','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('215','凉席','','','211','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('216','医药保健','','','153','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('217','蚊虫叮咬','','','216','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('218','健康养生','','','216','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('219','肠胃用药','','','216','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('220','男科用药','','','216','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('221','妇科用药','','','216','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('222','居家百货','','','154','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('223','杯子','','','222','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('224','炒锅','','','222','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('225','刀具','','','222','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('226','保鲜盒','','','222','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('227','天猫书城','','','155','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('228','小说','','','227','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('229','言情','','','227','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('230','历史','','','227','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('231','new！','','','1','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('232','大牌电视','','','148','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('233','balabala','','','146','50','','','0','','1','0','0','0','0');");
E_D("replace into `ecs_category` values('234','大牌尿裤','','','146','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('235','精选奶粉','','','146','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('236','进口食品','','','147','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('237','进口水果','','','147','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('238','吃乐会','','','147','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('266','特色市场','','','12','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('259','商务品牌','','','12','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('239','当季流行','','','12','50','','','0','','1','0','','1','1');");
E_D("replace into `ecs_category` values('240','沙滩裤','','','239','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('241','亚麻裤','','','239','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('242','七分裤','','','239','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('243','丝绵T恤','','','239','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('244','拼接POLO','','','239','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('245','棉麻T恤','','','239','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('246','条纹T恤','','','239','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('247','纯色T恤','','','239','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('248','亚麻衬衫','','','239','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('249','潮男背心','','','239','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('250','时尚品牌','','','12','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('251','Jackjones','','','250','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('252','GXG','','','250','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('253','真维斯','','','250','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('254','马克华菲','','','250','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('255','森马','','','250','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('256','selected','','','250','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('257','gxg1978','','','250','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('258','trendiano','','','250','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('260','罗蒙','','','259','50','','','0','','1','0','','0','1');");
E_D("replace into `ecs_category` values('261','劲霸','','','259','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('262','海澜之家','','','259','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('263','卡尔丹顿','','','259','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('264','七匹狼','','','259','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('265','VICUTU','','','259','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('267','唐装','','','266','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('268','正装西服','','','266','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('269','中老年','','','266','50','','','0','','1','0','','0','0');");
E_D("replace into `ecs_category` values('270','工装制服','','','266','50','','','0','','1','0','','0','0');");

require("../../inc/footer.php");
?>