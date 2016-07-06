<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad_custom_wap`;");
E_C("CREATE TABLE `ecs_ad_custom_wap` (
  `ad_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ad_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ad_name` varchar(60) DEFAULT NULL,
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext,
  `url` varchar(255) DEFAULT NULL,
  `ad_status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad_custom_wap` values('1','0','1','1404427826','data/afficheimg/20140704dumcrk.jpg','http://','0');");
E_D("replace into `ecs_ad_custom_wap` values('2','0','2','1404429721','data/afficheimg/20140704xxiyqh.jpg','http://','0');");
E_D("replace into `ecs_ad_custom_wap` values('3','0','3','1404429726','data/afficheimg/20140704xmvamd.jpg','http://','0');");
E_D("replace into `ecs_ad_custom_wap` values('4','0','4','1404429737','data/afficheimg/20140704yaezav.jpg','http://','1');");

require("../../inc/footer.php");
?>