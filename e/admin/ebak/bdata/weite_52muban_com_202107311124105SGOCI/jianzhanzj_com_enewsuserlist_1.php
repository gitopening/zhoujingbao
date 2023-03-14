<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `jianzhanzj_com_enewsuserlist`;");
E_C("CREATE TABLE `jianzhanzj_com_enewsuserlist` (
  `listid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `listname` varchar(60) NOT NULL DEFAULT '',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `filepath` varchar(120) NOT NULL DEFAULT '',
  `filetype` varchar(12) NOT NULL DEFAULT '',
  `totalsql` text NOT NULL,
  `listsql` text NOT NULL,
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `lencord` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`listid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `jianzhanzj_com_enewsuserlist` values('1',0xe4b893e9a298,0xe4b893e9a298,0x2e2e2f2e2e2f7a742f,0x2e68746d6c,0x73656c65637420636f756e74282a2920617320746f74616c2066726f6d205b2164622e707265215d656e6577737a7420,0x73656c656374207a746e616d65206173207469746c652c7a7470617468206173206e657773706174682c7a74696d67206173207469746c657069632c696e74726f20617320736d616c6c746578742c7a747061746820617320636c61737369642c6f6e636c69636b2c7a7469642061732069642066726f6d205b2164622e707265215d656e6577737a74,'0','12','15',0xe4b893e9a298,0xe4b893e9a298,'0');");
E_D("replace into `jianzhanzj_com_enewsuserlist` values('2',0xe68e92e8a18ce6a69c,0xe68e92e8a18ce6a69c,0x2e2e2f2e2e2f746f702f,0x2e68746d6c,0x73656c65637420636f756e74282a2920617320746f74616c2066726f6d205b2164622e707265215d65636d735f67616d65,0x73656c656374202a2066726f6d205b2164622e707265215d65636d735f67616d65206f726465722062792069642064657363,'0','10','17',0xe68e92e8a18ce6a69c,0xe68e92e8a18ce6a69c,'0');");

@include("../../inc/footer.php");
?>