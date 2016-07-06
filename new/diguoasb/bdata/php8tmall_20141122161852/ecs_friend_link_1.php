<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_friend_link`;");
E_C("CREATE TABLE `ecs_friend_link` (
  `link_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_logo` varchar(255) NOT NULL DEFAULT '',
  `show_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  PRIMARY KEY (`link_id`),
  KEY `show_order` (`show_order`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_friend_link` values('4','阿里巴巴集团','http://www.alibabagroup.com/cn/global/home','','50');");
E_D("replace into `ecs_friend_link` values('5','阿里巴巴国际站','http://www.alibaba.com/?spm=3.7095809.2000g002.28.Plooi6','','50');");
E_D("replace into `ecs_friend_link` values('6','阿里巴巴中国站','http://www.1688.com/?spm=3.7095809.2000g002.29.Plooi6','','50');");
E_D("replace into `ecs_friend_link` values('7','全球速卖通','http://www.aliexpress.com/?spm=3.7095809.2000g002.30.Plooi6','','50');");
E_D("replace into `ecs_friend_link` values('8','淘宝网','http://www.taobao.com/?spm=3.7095809.2000g002.31.Plooi6','','50');");
E_D("replace into `ecs_friend_link` values('9','天猫','http://www.tmall.com/?spm=3.7095809.2000g002.32.Plooi6','','50');");
E_D("replace into `ecs_friend_link` values('10','聚划算','http://ju.taobao.com/?spm=3.7095809.2000g002.33.Plooi6','','50');");
E_D("replace into `ecs_friend_link` values('11','一淘','http://www.etao.com/?spm=3.7095809.2000g002.34.Plooi6&tbpm=20140514','','50');");
E_D("replace into `ecs_friend_link` values('12','阿里妈妈','http://www.alimama.com/index.htm?spm=3.7095809.2000g002.35.Plooi6','','50');");
E_D("replace into `ecs_friend_link` values('13','淘宝旅行','http://trip.taobao.com/?spm=3.7095809.2000g002.36.Plooi6','','50');");
E_D("replace into `ecs_friend_link` values('14','虾米','http://www.xiami.com/?spm=3.7095809.2000g002.37.Plooi6','','50');");
E_D("replace into `ecs_friend_link` values('15','阿里云计算','http://www.aliyun.com/?spm=3.7095809.2000g002.38.Plooi6','','50');");
E_D("replace into `ecs_friend_link` values('16','万网','http://www.net.cn/?spm=3.7095809.2000g002.40.Plooi6','','50');");
E_D("replace into `ecs_friend_link` values('17','阿里111','http://#','','50');");

require("../../inc/footer.php");
?>