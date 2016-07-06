<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cat_flashimg`;");
E_C("CREATE TABLE `ecs_cat_flashimg` (
  `img_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) NOT NULL,
  `img_title` varchar(255) NOT NULL,
  `img_desc` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `href_url` varchar(255) NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  PRIMARY KEY (`img_id`),
  KEY `show_order` (`sort_order`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cat_flashimg` values('1','2','','','1377564911363899379.jpg','http://www.xxx.com','50');");
E_D("replace into `ecs_cat_flashimg` values('2','2','','','1357801640086018297.jpg','http://www.xxx.com','50');");
E_D("replace into `ecs_cat_flashimg` values('3','2','','','1357801645477945679.jpg','http://www.xxx.com','50');");
E_D("replace into `ecs_cat_flashimg` values('4','2','','','1357801650310879640.jpg','http://www.xxx.com','50');");
E_D("replace into `ecs_cat_flashimg` values('6','2','','','1357801659757397876.jpg','http://www.xxx.com','50');");

require("../../inc/footer.php");
?>