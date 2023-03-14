<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `jianzhanzj_com_enewspubvar`;");
E_C("CREATE TABLE `jianzhanzj_com_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tocache` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `jianzhanzj_com_enewspubvar` values('1',0x6a69616e7a68616e7a6a5f636f6d5f75726c,0xe7bd91e7ab99e59cb0e59d80,0x687474703a2f2f77656974652e35326d7562616e2e636f6d,'','0','0','1');");
E_D("replace into `jianzhanzj_com_enewspubvar` values('2',0x6a69616e7a68616e7a6a5f636f6d5f6d75726c,0xe6898be69cbae59cb0e59d80,0x687474703a2f2f6d77656974652e35326d7562616e2e636f6d2f,'','0','0','1');");
E_D("replace into `jianzhanzj_com_enewspubvar` values('3',0x6a69616e7a68616e7a6a5f636f6d5f6e616d65,0xe7bd91e7ab99e5908de7a7b0,0xe68891e788b1e6a8a1e69dbf,'','0','0','1');");

@include("../../inc/footer.php");
?>