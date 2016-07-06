<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2009-04-21','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-04-27','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-04','ecshop','斤','1');");
E_D("replace into `ecs_keywords` values('2009-05-10','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','三星','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','p806','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','夏新','1');");
E_D("replace into `ecs_keywords` values('2009-05-18','ecshop','52','2');");
E_D("replace into `ecs_keywords` values('2009-05-22','ecshop','p','1');");
E_D("replace into `ecs_keywords` values('2013-10-30','ecshop','11','1');");
E_D("replace into `ecs_keywords` values('2013-12-02','ecshop','雅诗兰黛即时修护眼部精华霜15ml','2');");
E_D("replace into `ecs_keywords` values('2013-12-02','ecshop','迪奥红毒女士香水EDT','1');");
E_D("replace into `ecs_keywords` values('2013-12-02','ecshop','50ml','1');");
E_D("replace into `ecs_keywords` values('2013-12-13','ecshop','雅诗兰黛鲜活营养红石榴眼霜15ml','1');");
E_D("replace into `ecs_keywords` values('2013-12-13','ecshop','雅诗兰黛','1');");
E_D("replace into `ecs_keywords` values('2013-12-16','ecshop','洁面','43');");
E_D("replace into `ecs_keywords` values('2013-12-17','ecshop','1','3');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','雅诗兰黛鲜活营养红石榴眼霜15ml','7');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','红石榴眼霜15ml','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','KD876','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','石榴','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','5D','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','兰蔻超塑颜5D提拉日霜法国版50ml','3');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','眼霜','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','雅诗兰黛红石榴鲜活晚霜50ml新','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','索爱原装M2卡读卡器','1');");
E_D("replace into `ecs_keywords` values('2013-12-20','ecshop','雅顿保湿调理露200ml','1');");
E_D("replace into `ecs_keywords` values('2013-12-27','ecshop','雅诗兰黛鲜活营养红石榴眼霜15ml','1');");
E_D("replace into `ecs_keywords` values('2014-01-06','ecshop','11','9');");
E_D("replace into `ecs_keywords` values('2014-01-22','ecshop','111','7');");
E_D("replace into `ecs_keywords` values('2014-01-22','ecshop','11','3');");
E_D("replace into `ecs_keywords` values('2014-05-09','ecshop','dd','1');");
E_D("replace into `ecs_keywords` values('2014-05-09','ecshop','1','2');");
E_D("replace into `ecs_keywords` values('2014-07-21','ecshop','凉席','1');");
E_D("replace into `ecs_keywords` values('2014-07-24','ecshop','春','2');");
E_D("replace into `ecs_keywords` values('2014-07-24','ecshop','搜','1');");
E_D("replace into `ecs_keywords` values('2014-07-28','ecshop','2','3');");
E_D("replace into `ecs_keywords` values('2014-07-28','ecshop','艾','1');");
E_D("replace into `ecs_keywords` values('2014-07-28','ecshop','日本南瓜','1');");
E_D("replace into `ecs_keywords` values('2014-07-28','ecshop','e','2');");
E_D("replace into `ecs_keywords` values('2014-07-31','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-08-04','ecshop','春装新款','1');");
E_D("replace into `ecs_keywords` values('2014-08-04','ecshop','2014女装小西装','1');");
E_D("replace into `ecs_keywords` values('2014-08-04','ecshop','女韩版修身','1');");
E_D("replace into `ecs_keywords` values('2014-08-04','ecshop','2','8');");
E_D("replace into `ecs_keywords` values('2014-08-06','ecshop','现货包邮Huawei/华为','9');");
E_D("replace into `ecs_keywords` values('2014-08-06','ecshop','P6-C00电信版手机','9');");
E_D("replace into `ecs_keywords` values('2014-08-06','ecshop','双模超薄智能','9');");
E_D("replace into `ecs_keywords` values('2014-08-06','ecshop','国行正品','9');");
E_D("replace into `ecs_keywords` values('2014-08-06','ecshop','&lt;span&gt;2014夏装新款&lt;/span&gt;','1');");
E_D("replace into `ecs_keywords` values('2014-08-06','ecshop','春装新款','2');");
E_D("replace into `ecs_keywords` values('2014-08-06','ecshop','2014女装小西装','2');");
E_D("replace into `ecs_keywords` values('2014-08-06','ecshop','女韩版修身小西服女士外套','2');");
E_D("replace into `ecs_keywords` values('2014-08-06','ecshop','潮','2');");
E_D("replace into `ecs_keywords` values('2014-08-07','ecshop','现货包邮Huawei/华为','7');");
E_D("replace into `ecs_keywords` values('2014-08-07','ecshop','P6-C00电信版手机','7');");
E_D("replace into `ecs_keywords` values('2014-08-07','ecshop','双模超薄智能','7');");
E_D("replace into `ecs_keywords` values('2014-08-07','ecshop','国行正品','7');");
E_D("replace into `ecs_keywords` values('2014-08-12','ecshop','女','1');");
E_D("replace into `ecs_keywords` values('2014-08-12','ecshop','我','1');");
E_D("replace into `ecs_keywords` values('2014-08-12','ecshop','我的美丽日记玻尿酸面膜10片','4');");
E_D("replace into `ecs_keywords` values('2014-08-15','ecshop','2','1');");
E_D("replace into `ecs_keywords` values('2014-08-15','ecshop','ba','2');");
E_D("replace into `ecs_keywords` values('2014-08-15','ecshop','dd','1');");
E_D("replace into `ecs_keywords` values('2014-08-22','ecshop','丹姿水密码面部护理套装','1');");
E_D("replace into `ecs_keywords` values('2014-08-22','ecshop','美白保湿护肤','1');");
E_D("replace into `ecs_keywords` values('2014-08-22','ecshop','洁面水乳液补水三件套','1');");
E_D("replace into `ecs_keywords` values('2014-11-03','ecshop','小米3','2');");
E_D("replace into `ecs_keywords` values('2014-11-03','ecshop','&lt;span&gt;连帽卫衣&lt;/span&gt;','2');");
E_D("replace into `ecs_keywords` values('2014-11-22','ecshop','&lt;span&gt;连帽卫衣&lt;/span&gt;','2');");

require("../../inc/footer.php");
?>