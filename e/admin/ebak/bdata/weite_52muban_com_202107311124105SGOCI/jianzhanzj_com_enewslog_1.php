<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `jianzhanzj_com_enewslog`;");
E_C("CREATE TABLE `jianzhanzj_com_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");
E_D("replace into `jianzhanzj_com_enewslog` values('1',0x61646d696e,'2020-08-28 22:16:35',0x3132372e302e302e31,'1','','0',0x3531323936);");
E_D("replace into `jianzhanzj_com_enewslog` values('2',0x61646d696e,'2020-08-29 18:21:16',0x3132372e302e302e31,'1','','0',0x3532313636);");
E_D("replace into `jianzhanzj_com_enewslog` values('3',0x61646d696e,'2020-08-30 14:08:39',0x3132372e302e302e31,'1','','0',0x3635333130);");
E_D("replace into `jianzhanzj_com_enewslog` values('4',0x61646d696e,'2020-08-30 19:19:29',0x3132372e302e302e31,'1','','0',0x3539323036);");
E_D("replace into `jianzhanzj_com_enewslog` values('5',0x61646d696e,'2020-08-31 17:58:58',0x3132372e302e302e31,'1','','0',0x3532383437);");
E_D("replace into `jianzhanzj_com_enewslog` values('6',0x61646d696e,'2020-09-01 17:55:59',0x3132372e302e302e31,'1','','0',0x3439323336);");
E_D("replace into `jianzhanzj_com_enewslog` values('7',0x61646d696e,'2020-09-01 20:41:06',0x3132372e302e302e31,'1','','0',0x3439383732);");
E_D("replace into `jianzhanzj_com_enewslog` values('8',0x61646d696e,'2020-09-02 11:59:55',0x3132372e302e302e31,'1','','0',0x3532363536);");
E_D("replace into `jianzhanzj_com_enewslog` values('9',0x61646d696e,'2020-09-02 12:07:43',0x3132372e302e302e31,'1','','0',0x3533303831);");
E_D("replace into `jianzhanzj_com_enewslog` values('10',0x61646d696e,'2020-09-02 19:13:38',0x3132372e302e302e31,'1','','0',0x3537323237);");
E_D("replace into `jianzhanzj_com_enewslog` values('11',0x61646d696e,'2020-09-02 22:23:24',0x3132372e302e302e31,'1','','0',0x3634303633);");
E_D("replace into `jianzhanzj_com_enewslog` values('12',0x61646d696e,'2020-09-02 22:23:46',0x3132372e302e302e31,'1','','0',0x3634313135);");
E_D("replace into `jianzhanzj_com_enewslog` values('13',0x61646d696e,'2020-09-03 18:38:15',0x3132372e302e302e31,'1','','0',0x3537353737);");
E_D("replace into `jianzhanzj_com_enewslog` values('14',0x61646d696e,'2020-09-03 21:48:54',0x3132372e302e302e31,'1','','0',0x3632373235);");
E_D("replace into `jianzhanzj_com_enewslog` values('15',0x61646d696e,'2020-09-03 21:51:47',0x3132372e302e302e31,'1','','0',0x3632383337);");
E_D("replace into `jianzhanzj_com_enewslog` values('16',0x61646d696e,'2020-09-03 21:58:41',0x3132372e302e302e31,'1','','0',0x3633303930);");
E_D("replace into `jianzhanzj_com_enewslog` values('17',0x61646d696e,'2020-09-03 22:07:45',0x3132372e302e302e31,'1','','0',0x3439383533);");
E_D("replace into `jianzhanzj_com_enewslog` values('18',0x61646d696e,'2020-09-04 18:12:03',0x3132372e302e302e31,'1','','0',0x3534383535);");
E_D("replace into `jianzhanzj_com_enewslog` values('19',0x61646d696e,'2020-09-04 23:34:29',0x3132372e302e302e31,'1','','0',0x3530383437);");
E_D("replace into `jianzhanzj_com_enewslog` values('20',0x61646d696e,'2020-09-04 23:39:56',0x3132372e302e302e31,'1','','0',0x3531313532);");
E_D("replace into `jianzhanzj_com_enewslog` values('21',0x61646d696e,'2020-09-05 18:39:04',0x3132372e302e302e31,'1','','0',0x3530313735);");
E_D("replace into `jianzhanzj_com_enewslog` values('22',0x61646d696e,'2020-09-05 18:39:18',0x3132372e302e302e31,'1','','0',0x3530323139);");
E_D("replace into `jianzhanzj_com_enewslog` values('23',0x61646d696e,'2020-09-05 19:58:24',0x3132372e302e302e31,'1','','0',0x3535313634);");
E_D("replace into `jianzhanzj_com_enewslog` values('24',0x61646d696e,'2020-09-06 21:50:36',0x3132372e302e302e31,'1','','0',0x3631373334);");
E_D("replace into `jianzhanzj_com_enewslog` values('25',0x61646d696e,'2020-09-07 19:39:45',0x3132372e302e302e31,'1','','0',0x3633363238);");
E_D("replace into `jianzhanzj_com_enewslog` values('26',0x61646d696e,'2020-09-07 20:56:50',0x3132372e302e302e31,'1','','0',0x3532323334);");
E_D("replace into `jianzhanzj_com_enewslog` values('27',0x61646d696e,'2020-09-07 22:01:47',0x3132372e302e302e31,'1','','0',0x3535323238);");
E_D("replace into `jianzhanzj_com_enewslog` values('28',0x61646d696e,'2020-09-07 22:30:58',0x3132372e302e302e31,'1','','0',0x3536323130);");
E_D("replace into `jianzhanzj_com_enewslog` values('29',0x61646d696e,'2021-07-31 11:21:18',0x3132372e302e302e31,'0','','0',0x3534323037);");
E_D("replace into `jianzhanzj_com_enewslog` values('30',0x61646d696e,'2021-07-31 11:21:23',0x3132372e302e302e31,'1','','0',0x3534323037);");

@include("../../inc/footer.php");
?>