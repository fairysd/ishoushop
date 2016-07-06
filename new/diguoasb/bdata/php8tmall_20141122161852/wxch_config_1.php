<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_config`;");
E_C("CREATE TABLE `wxch_config` (
  `id` int(1) NOT NULL,
  `token` varchar(100) NOT NULL,
  `appid` char(18) NOT NULL,
  `appsecret` char(32) NOT NULL,
  `access_token` text NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `wxch_config` values('1','weixin','wx3315b8c4448cb545','f448eaab125fe6fa33fa4f3b708f7da5','lLziPOfOxX9Vncr782zh7MEjOYpXzDYylW1454rXPOCfft55Kv4qoE27namTWkW2NqoZ1S3adebPJw62yRa9_Q','1412219440');");

require("../../inc/footer.php");
?>