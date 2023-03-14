<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `jianzhanzj_com_ecms_pc_index`;");
E_C("CREATE TABLE `jianzhanzj_com_ecms_pc_index` (
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
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=utf8");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('1','3','1','1599477000','1599477022','1599484832','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('2','3','1','1599476880','1599477022','1599484840','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('3','3','1','1599476880','1599477023','1599484848','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('4','3','1','1599476940','1599477023','1599484857','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('5','3','1','1599477000','1599477023','1599484865','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('6','3','1','1599477000','1599477024','1599484873','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('7','3','1','1599476940','1599477024','1599484881','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('8','3','1','1599477000','1599477025','1599484894','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('9','3','1','1599476940','1599477025','1599484902','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('10','3','1','1599476940','1599477025','1599484912','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('11','3','1','1599477000','1599477026','1599484919','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('12','3','1','1599476940','1599477026','1599484799','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('13','3','1','1599476940','1599477027','1599484788','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('14','3','1','1599476940','1599477027','1599484778','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('15','3','1','1599476940','1599477028','1599484761','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('16','3','1','1599476940','1599477028','1599477028','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('17','3','1','1599476940','1599477029','1599477029','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('18','3','1','1599476940','1599477029','1599477029','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('19','3','1','1599476940','1599477029','1599477029','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('20','3','1','1599476940','1599477030','1599477030','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('21','3','1','1599476940','1599477030','1599477030','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('22','3','1','1599476940','1599477031','1599477031','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('23','3','1','1599476940','1599477031','1599477031','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('24','3','1','1599476940','1599477032','1599477032','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('25','3','1','1599476940','1599477032','1599477032','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('26','3','1','1599476880','1599477033','1599477033','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('27','3','1','1599476940','1599477033','1599477033','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('28','3','1','1599476940','1599477033','1599477033','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('29','3','1','1599476940','1599477034','1599477034','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('30','3','1','1599476940','1599477035','1599477035','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('31','3','1','1599476880','1599477035','1599477035','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('32','3','1','1599476820','1599477036','1599477036','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('33','3','1','1599476880','1599477036','1599477036','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('34','3','1','1599476880','1599477037','1599477037','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('35','3','1','1599476880','1599477038','1599477038','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('36','3','1','1599476880','1599477038','1599477038','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('37','3','1','1599476880','1599477039','1599477039','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('38','3','1','1599476880','1599477040','1599477040','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('39','3','1','1599476880','1599477040','1599477040','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('40','3','1','1599476880','1599477041','1599477041','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('41','3','1','1599476880','1599477042','1599477042','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('42','3','1','1599476880','1599477043','1599477043','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('43','3','1','1599476820','1599477043','1599477043','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('44','3','1','1599476880','1599477044','1599477044','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('45','3','1','1599476820','1599477045','1599477045','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('46','3','1','1599476820','1599477046','1599477046','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('47','3','1','1599476820','1599477046','1599477046','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('48','3','1','1599476820','1599477047','1599477047','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('49','3','1','1599476820','1599477047','1599477047','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('50','3','1','1599476820','1599477048','1599477048','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('51','3','1','1599476820','1599477050','1599477050','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('52','3','1','1599476700','1599477051','1599477051','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('53','3','1','1599476700','1599477051','1599477051','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('54','3','1','1599476820','1599477052','1599477052','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('55','3','1','1599476820','1599477052','1599477052','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('56','3','1','1599476820','1599477053','1599477053','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('57','3','1','1599476760','1599477053','1599477053','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('58','3','1','1599476760','1599477053','1599477053','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('59','3','1','1599476820','1599477054','1599477054','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('60','3','1','1599476760','1599477055','1599477055','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('61','3','1','1599476760','1599477055','1599477055','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('62','3','1','1599476760','1599477056','1599477056','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('63','3','1','1599476760','1599477056','1599477056','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('64','3','1','1599476760','1599477056','1599477056','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('65','3','1','1599476760','1599477057','1599477057','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('66','3','1','1599476760','1599477057','1599477057','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('67','3','1','1599476760','1599477058','1599477058','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('68','3','1','1599476760','1599477058','1599477058','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('69','3','1','1599476760','1599477058','1599477058','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('70','3','1','1599476760','1599477059','1599477059','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('71','3','1','1599476760','1599477060','1599477060','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('72','3','1','1599476760','1599477060','1599477060','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('73','3','1','1599476760','1599477060','1599477060','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('74','3','1','1599476700','1599477061','1599477061','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('75','3','1','1599476700','1599477061','1599477061','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('76','3','1','1599476700','1599477062','1599477062','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('77','3','1','1599476700','1599477063','1599477063','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('78','3','1','1599476700','1599477064','1599477064','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('79','3','1','1599476700','1599477064','1599477064','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('80','3','1','1599476700','1599477065','1599477065','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('81','3','1','1599476640','1599477066','1599477066','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('82','3','1','1599476700','1599477066','1599477066','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('83','3','1','1599476640','1599477067','1599477067','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('84','3','1','1599476640','1599477068','1599477068','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('85','3','1','1599476640','1599477068','1599477068','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('86','3','1','1599476640','1599477069','1599477069','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('87','3','1','1599476640','1599477069','1599477069','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('88','3','1','1599476640','1599477071','1599477071','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('89','3','1','1599476640','1599477071','1599477071','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('90','3','1','1599476640','1599477072','1599477072','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('91','3','1','1599476640','1599477072','1599477072','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('92','3','1','1599476640','1599477073','1599477073','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('93','3','1','1599476640','1599477074','1599477074','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('94','3','1','1599476640','1599477075','1599477075','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('95','3','1','1599476640','1599477075','1599477075','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('96','3','1','1599476640','1599477076','1599477076','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('97','3','1','1599476640','1599477077','1599477077','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('98','3','1','1599476580','1599477078','1599477078','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('99','3','1','1599476700','1599477083','1599477083','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('100','3','1','1599476700','1599477084','1599477084','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('101','3','1','1599476580','1599477087','1599477087','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('102','3','1','1599476460','1599477087','1599477087','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('103','3','1','1599476460','1599477088','1599477088','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('104','3','1','1599476580','1599477088','1599477088','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('105','3','1','1599476640','1599477089','1599477089','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('106','3','1','1599476640','1599477089','1599477089','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('107','3','1','1599476580','1599477090','1599477090','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('108','3','1','1599476580','1599477090','1599477090','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('109','3','1','1599476640','1599477091','1599477091','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('110','3','1','1599476580','1599477091','1599477091','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('111','3','1','1599476580','1599477091','1599477091','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('112','3','1','1599476580','1599477092','1599477092','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('113','3','1','1599476580','1599477092','1599477092','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('114','3','1','1599476580','1599477092','1599477092','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('115','3','1','1599476580','1599477093','1599477093','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('116','3','1','1599476580','1599477094','1599477094','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('117','3','1','1599476580','1599477094','1599477094','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('118','3','1','1599476520','1599477095','1599477095','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('119','3','1','1599476580','1599477095','1599477095','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('120','3','1','1599476520','1599477095','1599477095','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('121','3','1','1599476520','1599477096','1599477096','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('122','3','1','1599476580','1599477096','1599477096','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('123','3','1','1599476460','1599477097','1599477097','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('124','3','1','1599476460','1599477097','1599477097','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('125','3','1','1599476520','1599477098','1599477098','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('126','3','1','1599476460','1599477098','1599477098','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('127','3','1','1599476460','1599477099','1599477099','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('128','3','1','1599476460','1599477099','1599477099','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('129','3','1','1599476460','1599477099','1599477099','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('130','3','1','1599476460','1599477100','1599477100','1');");
E_D("replace into `jianzhanzj_com_ecms_pc_index` values('131','3','1','1599476460','1599477101','1599477101','1');");

@include("../../inc/footer.php");
?>