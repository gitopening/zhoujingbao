<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `jianzhanzj_com_enewsztadd`;");
E_C("CREATE TABLE `jianzhanzj_com_enewsztadd` (
  `ztid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  PRIMARY KEY (`ztid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `jianzhanzj_com_enewsztadd` values('1','');");
E_D("replace into `jianzhanzj_com_enewsztadd` values('2','');");
E_D("replace into `jianzhanzj_com_enewsztadd` values('3','');");
E_D("replace into `jianzhanzj_com_enewsztadd` values('4','');");
E_D("replace into `jianzhanzj_com_enewsztadd` values('5','');");
E_D("replace into `jianzhanzj_com_enewsztadd` values('6','');");
E_D("replace into `jianzhanzj_com_enewsztadd` values('7','');");
E_D("replace into `jianzhanzj_com_enewsztadd` values('8','');");
E_D("replace into `jianzhanzj_com_enewsztadd` values('9','');");
E_D("replace into `jianzhanzj_com_enewsztadd` values('10','');");
E_D("replace into `jianzhanzj_com_enewsztadd` values('11','');");
E_D("replace into `jianzhanzj_com_enewsztadd` values('12','');");
E_D("replace into `jianzhanzj_com_enewsztadd` values('13','');");

@include("../../inc/footer.php");
?>