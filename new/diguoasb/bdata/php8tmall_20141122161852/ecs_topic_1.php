<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_topic`;");
E_C("CREATE TABLE `ecs_topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '''''',
  `intro` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(10) NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `template` varchar(255) NOT NULL DEFAULT '''''',
  `css` text NOT NULL,
  `topic_img` varchar(255) DEFAULT NULL,
  `title_pic` varchar(255) DEFAULT NULL,
  `base_style` char(6) DEFAULT NULL,
  `htmls` mediumtext,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_topic` values('1','夏新优惠大酬宾','<p>夏新产品优惠开始了</p>','1241107200','1246291200','O:8:\"stdClass\":1:{s:7:\"default\";a:1:{i:0;s:11:\"夏新N7|17\";}}','','',NULL,NULL,NULL,NULL,NULL,NULL);");
E_D("replace into `ecs_topic` values('2','国庆专题','','1407225600','1438761600','O:8:\"stdClass\":1:{s:7:\"default\";a:9:{i:0;s:38:\"香奈儿coco小姐唇膏（62#）3g|8\";i:1;s:86:\"衣品天成 2014夏装新款女装T恤 韩版时尚百搭修身条纹T恤女短袖|16\";i:2;s:89:\"女t恤2014新款夏装雪纺衫女装大码韩版宽松七分袖上衣白色衣服潮|20\";i:3;s:88:\"衣酷王子 情侣装 夏装套装韩版春沙滩男女短袖潮2014新款情侣t恤|22\";i:4;s:89:\"棉立方2014夏新款韩版大码蕾丝欧根纱中长款白色宽松棉短袖女t恤|21\";i:5;s:88:\"蓝天麦子情侣装夏装2014新款女装T恤背心中长款连衣裙子韩版1A211|14\";i:6;s:128:\"兰蔻精华眼膜霜15ml兰蔻精华眼膜霜15ml兰蔻精华眼膜霜15ml兰蔻精华眼膜霜15ml兰蔻精华眼膜霜15ml|19\";i:7;s:84:\"艾路丝婷2014新款夏装韩版女装短袖T恤女修身白色大码体恤9121|46\";i:8;s:49:\"博柏利英伦迷情女士香水（白）30ml|49\";}}','','','data/afficheimg/20140806howjjo.gif','data/afficheimg/20140806himvyc.jpg','','','','');");

require("../../inc/footer.php");
?>