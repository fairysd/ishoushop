<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('1','1','1','希思黎轻柔护肤西柚柔肤水250ml','ECS000000','14','1','620.00','399.00','颜色:灰色 \n','1','1','','0','0','237');");
E_D("replace into `ecs_order_goods` values('2','2','1','希思黎轻柔护肤西柚柔肤水250ml','ECS000000','14','5','620.00','399.00','颜色:灰色 \n','5','1','','0','0','237');");
E_D("replace into `ecs_order_goods` values('3','3','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','439.00','外        观:红色 \n','0','1','','0','0','297');");
E_D("replace into `ecs_order_goods` values('4','3','119','蓓丽柔和泡沫洁面膏125ml','ECS000119','0','1','630.00','320.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('5','3','113',' 希思黎百合保湿洁面乳250ml','ECS000113','0','1','720.00','420.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('6','4','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','439.00','外        观:红色 \n','1','1','','0','0','297');");
E_D("replace into `ecs_order_goods` values('7','5','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','2','820.00','439.00','外        观:红色 \n','0','1','','0','0','297');");
E_D("replace into `ecs_order_goods` values('8','6','57','凯文克莱BE中性香水200ml','ECS000057','0','1','570.00','259.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('9','7','57','凯文克莱BE中性香水200ml','ECS000057','0','1','570.00','259.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('10','8','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','439.00','外        观:红色 \n','1','1','','0','0','297');");
E_D("replace into `ecs_order_goods` values('11','8','53',' 迪奥EDP真我女士香水50ml','ECS000053','0','1','940.00','679.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('12','9','53',' 迪奥EDP真我女士香水50ml','ECS000053','0','3','940.00','679.00','','3','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('13','10','9','雅诗兰黛第六代特润精华露50ml','ECS000009','11','3','950.00','669.00','颜色:白色 \n','3','1','','0','0','227');");
E_D("replace into `ecs_order_goods` values('14','11','57','凯文克莱BE中性香水200ml','ECS000057','0','2','570.00','259.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('15','12','1','希思黎轻柔护肤西柚柔肤水250ml','ECS000000','14','1','620.00','399.00','颜色:灰色 \n','0','1','','0','0','237');");
E_D("replace into `ecs_order_goods` values('16','13','56','范思哲绅情男士香水Q版5ml','ECS000056','0','1','120.00','45.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('17','14','14','谜尚红色BB霜21#50ml','ECS000014','7','1','208.00','99.00','颜色:黑色 \n','0','1','','0','0','213');");
E_D("replace into `ecs_order_goods` values('18','15','120','曼秀雷敦洁清爽卸妆洁面泡200ml','ECS000120','0','1','120.00','45.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('19','16','119','蓓丽柔和泡沫洁面膏125ml','ECS000119','0','1','630.00','320.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('20','17','9','雅诗兰黛第六代特润精华露50ml','ECS000009','11','1','950.00','669.00','颜色:白色 \n','0','1','','0','0','227');");
E_D("replace into `ecs_order_goods` values('21','18','10','思亲肤90度卷长睫毛膏10g','ECS000010','9','1','78.00','49.90','颜色:黑色 \n','0','1','','0','0','239');");
E_D("replace into `ecs_order_goods` values('22','19','65','KOSE高丝美白深层滋润护手霜35g','ECS000065','0','1','49.00','25.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('23','20','47','浮生若梦丝柔蜜粉08#（紫色)28g','ECS000047','0','1','345.00','229.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('24','21','46','香奈儿斜纹软呢星彩腮红30#5.5g','ECS000046','0','1','449.00','339.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('25','22','122','玫琳凯中性洗面乳绿2号','ECS000122','0','1','105.00','69.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('26','23','9','雅诗兰黛第六代特润精华露50ml','ECS000009','11','1','950.00','669.00','颜色:白色 \n','0','1','','0','0','227');");
E_D("replace into `ecs_order_goods` values('27','24','17','娇韵诗超V型纤容紧致瘦脸面膜75ml','ECS000017','6','1','396.00','275.00','颜色:黑色 \n','0','1','','0','0','201');");
E_D("replace into `ecs_order_goods` values('28','25','119','蓓丽柔和泡沫洁面膏125ml','ECS000119','0','1','630.00','320.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('29','26','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','459.00','外        观:红色 \n','1','1','','0','0','297');");
E_D("replace into `ecs_order_goods` values('30','27','122','玫琳凯中性洗面乳绿2号','ECS000122','0','1','105.00','69.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('31','28','123','迪奥红毒女士香水EDT 50ml','ECS000123','0','1','820.00','400.00','外        观:红色 \n','1','1','','0','0','297');");
E_D("replace into `ecs_order_goods` values('32','29','47','春装新款 2014女装小西装 女韩版修身小西服女士外套 潮','ECS000047','0','1','201.60','168.00','颜色:黑色 \n尺码:s【现货】 \n','0','1','','0','0','333,324');");
E_D("replace into `ecs_order_goods` values('33','30','77','资生堂男士黑炭洁面膏130g','ECS000077','0','1','148.00','49.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('34','31','47','春装新款 2014女装小西装 女韩版修身小西服女士外套 潮','ECS000047','0','1','201.60','168.00','颜色:黑色 \n尺码:s【现货】 \n','0','1','','0','0','333,324');");
E_D("replace into `ecs_order_goods` values('35','32','46','香奈儿斜纹软呢星彩腮红30#5.5g','ECS000046','0','1','449.00','339.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('36','33','78','倩碧男士洁面乳（加强型）150ml','ECS000078','0','1','220.00','155.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('37','33','47','春装新款 2014女装小西装 女韩版修身小西服女士外套 潮','ECS000047','0','2','201.60','168.00','颜色:黑色 \n尺码:s【现货】 \n','0','1','','0','0','333,324');");
E_D("replace into `ecs_order_goods` values('38','34','47','春装新款 2014女装小西装 女韩版修身小西服女士外套 潮','ECS000047','0','1','201.60','168.00','颜色:黑色 \n尺码:s【现货】 \n','1','1','','0','0','333,324');");
E_D("replace into `ecs_order_goods` values('39','35','46','艾路丝婷2014新款夏装韩版女装短袖T恤女修身白色大码体恤9121','ECS000046','0','1','449.00','339.00','尺码:s【现货】 \n','1','1','','0','0','344');");
E_D("replace into `ecs_order_goods` values('40','36','71','阿迪达斯男士征服沐浴露250ml','ECS000071','0','1','97.00','39.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('41','37','47','春装新款 2014女装小西装 女韩版修身小西服女士外套 潮','ECS000047','0','1','201.60','168.00','颜色:粉色 \n尺码:xL【现货】 \n','0','1','','0','0','336,325');");
E_D("replace into `ecs_order_goods` values('42','37','47','春装新款 2014女装小西装 女韩版修身小西服女士外套 潮','ECS000047','0','1','201.60','168.00','颜色:黑色 \n尺码:s【现货】 \n','0','1','','0','0','333,324');");
E_D("replace into `ecs_order_goods` values('43','38','132','现货包邮Huawei/华为 P6-C00电信版手机 双模超薄智能 国行正品','ECS000132','22','1','1200.00','800.00','颜色:黑色 \n','1','1','','0','0','347');");
E_D("replace into `ecs_order_goods` values('44','39','132','现货包邮Huawei/华为 P6-C00电信版手机 双模超薄智能 国行正品','ECS000132','22','1','1200.00','800.00','颜色:黑色 \n','1','1','','0','0','347');");
E_D("replace into `ecs_order_goods` values('45','40','132','现货包邮Huawei/华为 P6-C00电信版手机 双模超薄智能 国行正品','ECS000132','22','1','1200.00','0.00','颜色: 黑色','0','1','','0','0','347,1');");
E_D("replace into `ecs_order_goods` values('46','41','132','现货包邮Huawei/华为 P6-C00电信版手机 双模超薄智能 国行正品','ECS000132','22','1','1200.00','100.00','颜色: 黑色','0','1','','0','0','347,1');");
E_D("replace into `ecs_order_goods` values('47','42','132','现货包邮Huawei/华为 P6-C00电信版手机 双模超薄智能 国行正品','ECS000132','22','1','1200.00','800.00','颜色:黑色 \n','0','1','','0','0','347');");
E_D("replace into `ecs_order_goods` values('48','43','132','现货包邮Huawei/华为 P6-C00电信版手机 双模超薄智能 国行正品','ECS000132','22','1','1200.00','800.00','颜色:黑色 \n','0','1','','0','0','347');");
E_D("replace into `ecs_order_goods` values('49','44','130','SAMSUNG/三星 Galaxy S4 zoom SM-C101 三星拍照手机 单卡双模','ECS000130','0','1','180.00','20.00','','1','1','','132','0','');");
E_D("replace into `ecs_order_goods` values('50','44','124','Konka/康佳 LED49K70A KKTV49吋8核安卓智能LED液晶电视IPS硬屏50','ECS000124','0','1','120.00','30.00','','1','1','','132','0','');");
E_D("replace into `ecs_order_goods` values('51','44','132','现货包邮Huawei/华为 P6-C00电信版手机 双模超薄智能 国行正品','ECS000132','22','1','1200.00','800.00','颜色:黑色 \n','1','1','','0','0','347');");
E_D("replace into `ecs_order_goods` values('52','45','20','女t恤2014新款夏装雪纺衫女装大码韩版宽松七分袖上衣白色衣服潮','ECS000020','5','3','430.00','259.00','颜色:黑色 \n','3','1','','0','0','194');");
E_D("replace into `ecs_order_goods` values('53','46','144','夏装新款潮短袖t恤男韩版男装衣服夏季T血桖男士休闲运动套装','ECS000144','0','1','106.80','89.00','尺码:L【现货】 \n颜色:黑色 \n','1','1','','0','0','360,363');");
E_D("replace into `ecs_order_goods` values('54','47','144','夏装新款潮短袖t恤男韩版男装衣服夏季T血桖男士休闲运动套装','ECS000144','0','2','106.80','89.00','尺码:L【现货】 \n颜色:黑色 \n','2','1','','0','0','360,363');");
E_D("replace into `ecs_order_goods` values('55','48','149','凡几迪优夏装新款男士直筒休闲裤 男装薄款韩版修身黑色长裤子 潮','ECS000149','0','1','107.88','89.90','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('56','49','47','春装新款 2014女装小西装 女韩版修身小西服女士外套 潮','ECS000047','0','1','201.60','168.00','颜色:黑色 \n尺码:s【现货】 \n','0','1','','0','0','333,324');");
E_D("replace into `ecs_order_goods` values('57','50','47','春装新款 2014女装小西装 女韩版修身小西服女士外套 潮','ECS000047','0','1','201.60','168.00','颜色:黑色 \n尺码:s【现货】 \n','0','1','','0','0','333,324');");
E_D("replace into `ecs_order_goods` values('58','51','47','春装新款 2014女装小西装 女韩版修身小西服女士外套 潮','ECS000047','0','1','201.60','168.00','颜色:黑色 \n尺码:s【现货】 \n','0','1','','0','0','333,324');");

require("../../inc/footer.php");
?>