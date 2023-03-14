<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `jianzhanzj_com_enewsuserloginck`;");
E_C("CREATE TABLE `jianzhanzj_com_enewsuserloginck` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `andauth` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `jianzhanzj_com_enewsuserloginck` values('1',0x3762366131626133373431636436623464363961326135386634393033363464);");

@include("../../inc/footer.php");
?>