<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','1','14','','希思黎轻柔护肤西柚柔肤水250ml','','ECS000000','1',NULL,'0','1','颜色:灰色 \n');");
E_D("replace into `ecs_delivery_goods` values('2','2','1','14','','希思黎轻柔护肤西柚柔肤水250ml','','ECS000000','1',NULL,'0','5','颜色:灰色 \n');");
E_D("replace into `ecs_delivery_goods` values('3','3','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1',NULL,'0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('4','4','57','0','','凯文克莱BE中性香水200ml','凯文克莱','ECS000057','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('5','5','57','0','','凯文克莱BE中性香水200ml','凯文克莱','ECS000057','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('6','6','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1',NULL,'0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('7','6','53','0','',' 迪奥EDP真我女士香水50ml','迪奥','ECS000053','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('8','7','53','0','',' 迪奥EDP真我女士香水50ml','迪奥','ECS000053','1',NULL,'0','3','');");
E_D("replace into `ecs_delivery_goods` values('9','8','9','11','','雅诗兰黛第六代特润精华露50ml','雅诗兰黛','ECS000009','1',NULL,'0','3','颜色:白色 \n');");
E_D("replace into `ecs_delivery_goods` values('10','9','122','0','','玫琳凯中性洗面乳绿2号','玫琳凯','ECS000122','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('11','10','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1',NULL,'0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('12','11','119','0','','蓓丽柔和泡沫洁面膏125ml','蓓丽','ECS000119','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('13','12','123','0','','迪奥红毒女士香水EDT 50ml','迪奥','ECS000123','1',NULL,'0','1','外        观:红色 \n');");
E_D("replace into `ecs_delivery_goods` values('14','13','47','0','','春装新款 2014女装小西装 女韩版修身小西服女士外套 潮','浮生若梦','ECS000047','1',NULL,'0','1','颜色:黑色 \n尺码:s【现货】 \n');");
E_D("replace into `ecs_delivery_goods` values('15','14','46','0','','艾路丝婷2014新款夏装韩版女装短袖T恤女修身白色大码体恤9121','香奈儿','ECS000046','1',NULL,'0','1','尺码:s【现货】 \n');");
E_D("replace into `ecs_delivery_goods` values('16','15','71','0','','阿迪达斯男士征服沐浴露250ml','阿迪达斯','ECS000071','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('17','16','132','22','ECS000132g_p22','现货包邮Huawei/华为 P6-C00电信版手机 双模超薄智能 国行正品','','ECS000132','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('18','17','132','22','ECS000132g_p22','现货包邮Huawei/华为 P6-C00电信版手机 双模超薄智能 国行正品','','ECS000132','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('19','18','20','5','','女t恤2014新款夏装雪纺衫女装大码韩版宽松七分袖上衣白色衣服潮','纪梵希','ECS000020','1',NULL,'0','3','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('20','19','144','0','','夏装新款潮短袖t恤男韩版男装衣服夏季T血桖男士休闲运动套装','菲诗小铺','ECS000144','1',NULL,'0','1','尺码:L【现货】 \n颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('21','20','144','0','','夏装新款潮短袖t恤男韩版男装衣服夏季T血桖男士休闲运动套装','菲诗小铺','ECS000144','1',NULL,'0','2','尺码:L【现货】 \n颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('22','21','130','0','','SAMSUNG/三星 Galaxy S4 zoom SM-C101 三星拍照手机 单卡双模','科颜氏','ECS000130','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('23','21','124','0','','Konka/康佳 LED49K70A KKTV49吋8核安卓智能LED液晶电视IPS硬屏50','','ECS000124','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('24','21','132','22','ECS000132g_p22','现货包邮Huawei/华为 P6-C00电信版手机 双模超薄智能 国行正品','碧欧泉','ECS000132','1',NULL,'0','1','颜色:黑色 \n');");
E_D("replace into `ecs_delivery_goods` values('25','22','149','0','','凡几迪优夏装新款男士直筒休闲裤 男装薄款韩版修身黑色长裤子 潮','阿迪达斯','ECS000149','1',NULL,'0','1','');");

require("../../inc/footer.php");
?>