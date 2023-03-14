<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `jianzhanzj_com_ecms_news_index`;");
E_C("CREATE TABLE `jianzhanzj_com_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=157 DEFAULT CHARSET=utf8");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('1','5','1','1599474900','1599474947','1599474947','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('2','5','1','1599474900','1599474947','1599474947','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('3','5','1','1599474900','1599474948','1599474948','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('4','5','1','1599474900','1599474948','1599474948','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('5','5','1','1599474900','1599474949','1599474949','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('6','5','1','1599474900','1599474949','1599474949','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('7','5','1','1599474900','1599474950','1599474950','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('8','5','1','1599474900','1599474951','1599474951','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('9','5','1','1599474900','1599474951','1599474951','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('10','5','1','1599474900','1599474951','1599474951','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('11','5','1','1599474900','1599474952','1599474952','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('12','5','1','1599474900','1599474952','1599474952','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('13','5','1','1599474900','1599474952','1599474952','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('14','5','1','1599474900','1599474953','1599474953','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('15','5','1','1599474900','1599474953','1599474953','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('16','5','1','1599474900','1599474954','1599474954','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('17','5','1','1599474840','1599474954','1599474954','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('18','5','1','1599474900','1599474955','1599474955','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('19','5','1','1599474840','1599474955','1599474955','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('20','5','1','1599474900','1599474955','1599474955','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('21','5','1','1599474900','1599474956','1599474956','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('22','5','1','1599474900','1599474957','1599474957','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('23','5','1','1599474900','1599474957','1599474957','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('24','5','1','1599474900','1599474958','1599474958','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('25','5','1','1599474900','1599474958','1599474958','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('26','5','1','1599474900','1599474958','1599474958','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('27','5','1','1599474900','1599474959','1599474959','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('28','5','1','1599474900','1599474959','1599474959','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('29','5','1','1599474900','1599474960','1599474960','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('30','5','1','1599474900','1599474961','1599474961','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('31','5','1','1599474900','1599474961','1599474961','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('32','5','1','1599474900','1599474962','1599474962','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('33','5','1','1599474900','1599474964','1599474964','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('34','5','1','1599474900','1599474965','1599474965','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('35','5','1','1599474840','1599474967','1599474967','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('36','5','1','1599474840','1599474968','1599474968','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('37','6','1','1599475200','1599475219','1599475219','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('38','6','1','1599475200','1599475219','1599475219','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('39','6','1','1599475140','1599475220','1599475220','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('40','6','1','1599475200','1599475220','1599475220','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('41','6','1','1599475200','1599475221','1599475221','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('42','6','1','1599475140','1599475221','1599475221','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('43','6','1','1599475200','1599475221','1599475221','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('44','6','1','1599475200','1599475222','1599475222','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('45','6','1','1599475140','1599475222','1599475222','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('46','6','1','1599475200','1599475223','1599475223','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('47','6','1','1599475200','1599475223','1599475223','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('48','6','1','1599475140','1599475224','1599475224','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('49','6','1','1599475200','1599475224','1599475224','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('50','6','1','1599475200','1599475225','1599475225','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('51','6','1','1599475140','1599475225','1599475225','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('52','6','1','1599475200','1599475226','1599475226','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('53','6','1','1599475200','1599475226','1599475226','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('54','6','1','1599475200','1599475227','1599475227','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('55','6','1','1599475140','1599475227','1599475227','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('56','6','1','1599475200','1599475228','1599475228','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('57','6','1','1599475140','1599475228','1599475228','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('58','6','1','1599475140','1599475229','1599475229','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('59','6','1','1599475140','1599475229','1599475229','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('60','6','1','1599475140','1599475229','1599475229','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('61','6','1','1599475140','1599475230','1599475230','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('62','6','1','1599475140','1599475230','1599475230','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('63','6','1','1599475140','1599475231','1599475231','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('64','6','1','1599475140','1599475231','1599475231','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('65','6','1','1599475140','1599475231','1599475231','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('66','6','1','1599475140','1599475232','1599475232','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('67','6','1','1599475140','1599475233','1599475233','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('68','6','1','1599475140','1599475233','1599475233','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('69','6','1','1599475140','1599475234','1599475234','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('70','6','1','1599475080','1599475234','1599475234','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('71','6','1','1599475140','1599475235','1599475235','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('72','6','1','1599475080','1599475236','1599475236','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('73','6','1','1599475140','1599475236','1599475236','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('74','6','1','1599475080','1599475237','1599475237','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('75','6','1','1599475140','1599475238','1599475238','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('76','6','1','1599475080','1599475239','1599475239','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('77','6','1','1599475140','1599475239','1599475239','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('78','6','1','1599475140','1599475240','1599475240','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('79','6','1','1599475080','1599475240','1599475240','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('80','6','1','1599475080','1599475242','1599475242','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('81','6','1','1599475140','1599475242','1599475242','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('82','6','1','1599475080','1599475243','1599475243','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('83','6','1','1599475140','1599475243','1599475243','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('84','6','1','1599475080','1599475244','1599475244','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('85','6','1','1599475080','1599475244','1599475244','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('86','6','1','1599475080','1599475245','1599475245','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('87','6','1','1599475080','1599475248','1599475248','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('88','6','1','1599475080','1599475248','1599475248','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('89','6','1','1599475080','1599475249','1599475249','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('90','6','1','1599475080','1599475249','1599475249','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('91','6','1','1599475080','1599475250','1599475250','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('92','6','1','1599475020','1599475250','1599475250','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('93','6','1','1599475080','1599475250','1599475250','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('94','6','1','1599475080','1599475251','1599475251','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('95','6','1','1599475080','1599475252','1599475252','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('96','6','1','1599475020','1599475252','1599475252','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('97','6','1','1599475080','1599475253','1599475253','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('98','6','1','1599475080','1599475253','1599475253','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('99','6','1','1599475020','1599475253','1599475253','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('100','6','1','1599475080','1599475254','1599475254','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('101','6','1','1599475080','1599475254','1599475254','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('102','6','1','1599475020','1599475255','1599475255','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('103','6','1','1599475080','1599475255','1599475255','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('104','6','1','1599475080','1599475256','1599475256','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('105','6','1','1599475020','1599475256','1599475256','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('106','6','1','1599475080','1599475257','1599475257','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('107','6','1','1599475080','1599475257','1599475257','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('108','6','1','1599475020','1599475258','1599475258','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('109','6','1','1599475080','1599475258','1599475258','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('110','6','1','1599475080','1599475259','1599475259','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('111','6','1','1599475020','1599475259','1599475259','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('112','6','1','1599475080','1599475259','1599475259','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('113','6','1','1599475080','1599475260','1599475260','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('114','6','1','1599475020','1599475261','1599475261','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('115','6','1','1599475020','1599475261','1599475261','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('116','6','1','1599475080','1599475262','1599475262','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('117','6','1','1599475020','1599475262','1599475262','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('118','6','1','1599475020','1599475262','1599475262','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('119','6','1','1599475020','1599475264','1599475264','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('120','6','1','1599475020','1599475264','1599475264','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('121','6','1','1599475020','1599475265','1599475265','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('122','6','1','1599475020','1599475265','1599475265','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('123','6','1','1599475020','1599475266','1599475266','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('124','6','1','1599475020','1599475266','1599475266','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('125','6','1','1599475020','1599475267','1599475267','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('126','6','1','1599475020','1599475268','1599475268','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('127','6','1','1599475020','1599475269','1599475269','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('128','6','1','1599475020','1599475269','1599475269','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('129','6','1','1599475020','1599475270','1599475270','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('130','6','1','1599475020','1599475271','1599475271','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('131','6','1','1599474960','1599475272','1599475272','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('132','6','1','1599475020','1599475272','1599475272','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('133','6','1','1599474960','1599475273','1599475273','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('134','6','1','1599475020','1599475273','1599475273','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('135','6','1','1599474960','1599475274','1599475274','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('136','6','1','1599474960','1599475276','1599475276','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('137','6','1','1599475020','1599475279','1599475279','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('138','6','1','1599475020','1599475279','1599475279','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('139','6','1','1599475020','1599475280','1599475280','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('140','6','1','1599475020','1599475281','1599475281','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('141','6','1','1599475020','1599475281','1599475281','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('142','6','1','1599475020','1599475282','1599475282','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('143','6','1','1599475020','1599475283','1599475283','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('144','6','1','1599475020','1599475283','1599475283','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('145','6','1','1599475020','1599475284','1599475284','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('146','6','1','1599475020','1599475285','1599475285','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('147','6','1','1599475020','1599475285','1599475285','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('148','6','1','1599475020','1599475286','1599475286','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('149','6','1','1599474960','1599475287','1599475287','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('150','6','1','1599474960','1599475287','1599475287','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('151','6','1','1599474960','1599475288','1599475288','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('152','6','1','1599474960','1599475289','1599475289','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('153','6','1','1599474960','1599475289','1599475289','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('154','6','1','1599474960','1599475290','1599475290','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('155','6','1','1599474960','1599475291','1599475291','1');");
E_D("replace into `jianzhanzj_com_ecms_news_index` values('156','6','1','1599474960','1599475291','1599475291','1');");

@include("../../inc/footer.php");
?>