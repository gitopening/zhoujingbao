<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `jianzhanzj_com_enewsmoreport`;");
E_C("CREATE TABLE `jianzhanzj_com_enewsmoreport` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` char(60) NOT NULL DEFAULT '',
  `purl` char(255) NOT NULL DEFAULT '',
  `ppath` char(255) NOT NULL DEFAULT '',
  `postpass` char(120) NOT NULL DEFAULT '',
  `postfile` char(255) NOT NULL DEFAULT '',
  `tempgid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `mustdt` tinyint(1) NOT NULL DEFAULT '0',
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `closeadd` tinyint(1) NOT NULL DEFAULT '0',
  `headersign` char(255) NOT NULL DEFAULT '',
  `openadmin` tinyint(1) NOT NULL DEFAULT '0',
  `rehtml` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`),
  KEY `isclose` (`isclose`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `jianzhanzj_com_enewsmoreport` values('1',0xe4b8bbe8aebfe997aee7abaf,0x687474703a2f2f77656974652e35326d7562616e2e636f6d2f,0x443a2f70687073747564795f70726f2f5757572f77656974652e35326d7562616e2e636f6d2f,0x6e34414f6d304e526777557048616570735148796f57375241526e48565759534a6333713443376972425577656e6b5a78526a5a385041354871664d,'','0','0','0','0','','0','3');");
E_D("replace into `jianzhanzj_com_enewsmoreport` values('2',0xe6898be69cbae7abaf,0x687474703a2f2f77656974652e35326d7562616e2e636f6d,0x443a2f70687073747564795f70726f2f5757572f77656974652e35326d7562616e2e636f6d2f6d2f,0x537065364168536b7a525a4b6a52346b4b544f46516b6d347272697742536966554568314876726769485235494a437572336d507945384c3663584f,'','2','0','0','0','','0','0');");

@include("../../inc/footer.php");
?>