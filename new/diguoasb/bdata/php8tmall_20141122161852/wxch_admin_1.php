<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_admin`;");
E_C("CREATE TABLE `wxch_admin` (
  `aid` int(3) NOT NULL AUTO_INCREMENT,
  `type` varchar(8) NOT NULL,
  `wxid` char(28) NOT NULL,
  `name` varchar(100) NOT NULL,
  `autoload` tinyint(1) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>