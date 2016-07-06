<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_wxch_diymen`;");
E_C("CREATE TABLE `ecs_wxch_diymen` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `parentid` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `keyword` varchar(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_wxch_diymen` values('1','0','更多信息','1','');");
E_D("replace into `ecs_wxch_diymen` values('2','1','首页','','http://www.zm668.com/mobile/');");
E_D("replace into `ecs_wxch_diymen` values('3','1','图文消息','图文消息','');");
E_D("replace into `ecs_wxch_diymen` values('5','0','会员功能','V1001_TODAY_MUSIC','');");
E_D("replace into `ecs_wxch_diymen` values('6','0','商品','V1001_TODAY_SINGER','');");
E_D("replace into `ecs_wxch_diymen` values('8','1','文本消息','文本消息','');");
E_D("replace into `ecs_wxch_diymen` values('9','5','账户资金','资金','');");
E_D("replace into `ecs_wxch_diymen` values('10','5','订单查询','订单查询','');");
E_D("replace into `ecs_wxch_diymen` values('11','5','快递查询','快递查询','');");
E_D("replace into `ecs_wxch_diymen` values('12','6','新品上市','new','');");
E_D("replace into `ecs_wxch_diymen` values('13','6','精品推荐','best','');");
E_D("replace into `ecs_wxch_diymen` values('14','6','热卖商品','hot','');");
E_D("replace into `ecs_wxch_diymen` values('15','6','促销商品','pro_goods','');");
E_D("replace into `ecs_wxch_diymen` values('16','5','会员中心','会员中心','');");
E_D("replace into `ecs_wxch_diymen` values('17','5','签到','签到','');");
E_D("replace into `ecs_wxch_diymen` values('18','1','帮助','帮助','');");

require("../../inc/footer.php");
?>