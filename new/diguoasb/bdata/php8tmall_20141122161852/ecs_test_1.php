<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_test`;");
E_C("CREATE TABLE `ecs_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `add_time` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `old_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_test` values('8','40','1390736794','888.00','888.00');");
E_D("replace into `ecs_test` values('2','40','1391068350','777.00','666.00');");
E_D("replace into `ecs_test` values('3','40','1393574389','888.00','777.00');");
E_D("replace into `ecs_test` values('11','41','1390802243','0.00','0.00');");
E_D("replace into `ecs_test` values('10','19','1390802203','888.00','888.00');");
E_D("replace into `ecs_test` values('12','40','1391160431','888.00','888.00');");
E_D("replace into `ecs_test` values('13','40','1402322671','888.00','888.00');");
E_D("replace into `ecs_test` values('17','41','1402323035','0.00','0.00');");
E_D("replace into `ecs_test` values('18','42','1402324461','0.00','0.00');");

require("../../inc/footer.php");
?>