<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_wxch_point`;");
E_C("CREATE TABLE `ecs_wxch_point` (
  `id` int(30) NOT NULL,
  `share` int(30) NOT NULL,
  `subscribe` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_wxch_point` values('0','10','10');");

require("../../inc/footer.php");
?>