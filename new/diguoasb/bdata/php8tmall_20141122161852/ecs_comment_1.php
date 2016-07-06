<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_comment`;");
E_C("CREATE TABLE `ecs_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_value` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `parent_id` (`parent_id`),
  KEY `id_value` (`id_value`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_comment` values('1','0','12','ecshop@ecshop.com','ecshop','很好，我很喜欢','5','1242107120','0.0.0.0','1','0','1');");
E_D("replace into `ecs_comment` values('2','0','22','ecshop@ecshop.com','ecshop','这个我不是很适合我','5','1242107295','0.0.0.0','1','0','1');");
E_D("replace into `ecs_comment` values('3','0','123','11111111@qq.com','','瓶身很妖艳 味道真的很特别 有点浓郁 适合冬天 很独特的味道 很瓶子一样妖艳','5','1386112926','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('4','0','123','2222@qq.com','','香水很正，不错','5','1386112950','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('5','0','123','3333@qq.com','','非常棒，就是我要的味道','5','1386112985','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('6','0','123','4444@qq.com','','虽然发货时候的地址出了问题，但是小米的客服态度超级好，帮忙改了一下，味道很女人，给妈妈用了，看起来好神','5','1386113015','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('7','0','123','','admin','谢谢您的购买！','0','1386113062','127.0.0.1','0','6','0');");
E_D("replace into `ecs_comment` values('8','0','123','','admin','谢谢您的购买！','0','1386113073','127.0.0.1','0','5','0');");
E_D("replace into `ecs_comment` values('9','0','123','','admin','谢谢您的购买！','0','1386113081','127.0.0.1','0','4','0');");
E_D("replace into `ecs_comment` values('10','0','123','','admin','谢谢您的购买！','0','1386113089','127.0.0.1','0','3','0');");
E_D("replace into `ecs_comment` values('11','0','22','','admin','谢谢您的购买！','0','1386113099','127.0.0.1','0','2','0');");
E_D("replace into `ecs_comment` values('12','0','9','111@qq.com','','asdasdasdas','2','1387157178','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('13','0','9','222@qq.com','','asdasdas','4','1387157206','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('14','0','9','','admin','谢谢您的购买','0','1388101231','127.0.0.1','0','13','0');");
E_D("replace into `ecs_comment` values('15','0','9','111@qq.com','','阿什顿阿什顿阿什顿','4','1387157178','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('33','0','123','555@qq.com','','44444444','4','1388423820','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('32','0','9','666@qq.com','','3分喔','3','1388345221','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('30','0','9','555@qq.com','','4分喔','4','1388345182','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('31','0','9','555@qq.com','','5分喔','5','1388345193','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('34','0','19','sadsada@qq.com','','asdasdas','3','1389310529','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('35','0','19','sadasd@qq.com','','asdasdas','1','1389310595','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('36','0','19','222@qq.com','','asdasdas','5','1389310636','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('37','0','0','111@qq.com','','dadgahgahg','5','1390353108','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('38','0','0','','admin','tfiyiyi','0','1390353132','127.0.0.1','0','37','0');");
E_D("replace into `ecs_comment` values('39','0','47','12345678@qq.com','','非常好看，喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！喜欢！','1','1405965776','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('40','0','47','12345678@qq.com','','挺好，不错，大赞！！！！！！！！！！！','5','1405965854','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('41','0','47','','admin','谢谢你的购买','0','1405967732','127.0.0.1','0','40','0');");
E_D("replace into `ecs_comment` values('42','0','5','1222@qq.com','','好，很好，verygood！！','4','1405990340','127.0.0.1','1','0','0');");
E_D("replace into `ecs_comment` values('43','0','5','','admin','恩，好的，谢谢评论','0','1405990361','127.0.0.1','0','42','0');");
E_D("replace into `ecs_comment` values('44','0','132','123@aa.com','','商品商品商品商品商品商品商品商品商品商品','3','1407265964','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('45','0','132','','admin','回复内容回复内容回复内容回复内容回复内容','0','1407265976','192.168.1.72','0','44','0');");
E_D("replace into `ecs_comment` values('46','0','132','0000@qq.com','','商品评论商品评论商品评论商品评论商品评论商品评论','5','1407267978','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('47','0','132','','admin','回复内回复内回复内回复内回复内','0','1407268128','192.168.1.72','0','46','0');");
E_D("replace into `ecs_comment` values('48','0','132','0000@qq.com','','商品评论商品评论商品评论','3','1407268493','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('49','0','132','','admin','回复内容回复内容回复内容回复内容','0','1407268504','192.168.1.72','0','48','0');");
E_D("replace into `ecs_comment` values('50','0','132','122@ad.com','','fsadgasdf','3','1407274402','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('51','0','132','','admin','a','0','1407282106','127.0.0.1','0','50','0');");
E_D("replace into `ecs_comment` values('52','0','132','0000@qq.com','','商品评论商品评论商品评论','4','1407350291','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('53','0','132','','admin','飞洒发的撒个撒旦法人为恶趣味而为的非常的徐工发更方便','0','1407350304','192.168.1.72','0','52','0');");
E_D("replace into `ecs_comment` values('54','0','132','0000@qq.com','','商品评论商品评论商品评论商品评论','5','1407350353','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('55','0','132','','admin','回复内容回复内容回复内容回复内容回复内容回复内容回复内容回复内容回复内容','0','1407350367','192.168.1.72','0','54','0');");
E_D("replace into `ecs_comment` values('56','0','132','0000@qq.com','','商品评论商品评论','4','1407350697','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('57','0','132','','admin','回复内容回复内容回复内容回复内容回复内容','0','1407350757','192.168.1.72','0','56','0');");
E_D("replace into `ecs_comment` values('58','0','132','0000@qq.com','','商品评论商品评论商品评论','1','1407350786','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('59','0','132','','admin','发送到嘎达反而委屈委屈为','0','1407350799','192.168.1.72','0','58','0');");
E_D("replace into `ecs_comment` values('60','0','132','0000@qq.com','','fdasgaszfdsd','1','1407353378','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('61','0','132','123@qq.com','admin123','kj ji i u n','5','1407354499','192.168.1.52','1','0','8');");
E_D("replace into `ecs_comment` values('62','0','132','123@qq.com','admin123','AAAA','3','1407354632','192.168.1.52','1','0','8');");
E_D("replace into `ecs_comment` values('63','0','132','123@qq.com','admin123','FFFF','4','1407354655','192.168.1.52','1','0','8');");
E_D("replace into `ecs_comment` values('64','0','132','0000@qq.com','','商品评论商品评论商品评论商品评论','2','1407354938','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('65','0','132','yangting@ecmoban.com','yang','dsfagsafd','3','1407355504','192.168.1.72','1','0','11');");
E_D("replace into `ecs_comment` values('66','0','132','','admin','sdfasdgsfgasdfads','0','1407363620','192.168.1.72','0','63','0');");
E_D("replace into `ecs_comment` values('67','0','132','','admin','fdsagsafgsfd','0','1407363627','192.168.1.72','0','60','0');");
E_D("replace into `ecs_comment` values('68','0','132','111@admin.com','','商品评论商品评论商品评论商品评论','3','1407363729','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('69','0','132','','admin','12334r4','0','1407363863','192.168.1.52','0','68','0');");
E_D("replace into `ecs_comment` values('70','0','10','123@aa.com','','商品评论商品评论商品评论','3','1408573890','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('71','0','10','','admin','回复内容回复内容回复内容','0','1408573943','192.168.1.72','0','70','0');");
E_D("replace into `ecs_comment` values('72','0','20','123@aa.com','','商品评论商品评论商品评论商品评论','4','1408574225','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('73','0','20','','admin','sdfagdf','0','1408574234','192.168.1.72','0','72','0');");
E_D("replace into `ecs_comment` values('74','0','144','0000@qq.com','','商品评论商品评论商品评论商品评论','2','1408647402','192.168.1.72','1','0','0');");
E_D("replace into `ecs_comment` values('75','0','144','','admin','回复内回复内回复内回复内','0','1408647430','192.168.1.72','0','74','0');");

require("../../inc/footer.php");
?>