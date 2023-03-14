<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `jianzhanzj_com_enewsclass`;");
E_C("CREATE TABLE `jianzhanzj_com_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `oneinfo` tinyint(1) NOT NULL DEFAULT '0',
  `addsql` varchar(255) NOT NULL DEFAULT '',
  `wapislist` tinyint(1) NOT NULL DEFAULT '0',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `jianzhanzj_com_enewsclass` values('1','0',0xe6898be69cbae6b8b8e6888f,'','0','25','10','10','0','9','','1',0x67616d65,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','9','1','10',0xe6b8b8e6888f,'0','0','9',0x67616d65,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0',0x67616d65,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','662','662','1598698570','0','','0','1599229602');");
E_D("replace into `jianzhanzj_com_enewsclass` values('2','0',0xe6898be69cbae8bdafe4bbb6,'','0','25','10','11','0','10','','1',0x617070,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','10','1','10',0xe5ba94e794a8,'0','0','10',0x736f6674,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0',0x617070,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','457','457','1598698612','0','','0','1599131941');");
E_D("replace into `jianzhanzj_com_enewsclass` values('3','0',0xe794b5e88491e8bdafe4bbb6,'','0','25','10','12','0','11','','1',0x736f6674,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','11','1','10',0xe794b5e88491e8bdafe4bbb6,'0','0','11',0x7063,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0',0x736f6674,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','131','131','1598698656','0','','0','1598791509');");
E_D("replace into `jianzhanzj_com_enewsclass` values('4','0',0xe8b584e8aeafe694bbe795a5,0x7c357c367c,'0','25','10','1','0','1','','0',0x6e657773,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe8b584e8aeaf,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0',0x6e657773,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1598698761','0','','0','1599131983');");
E_D("replace into `jianzhanzj_com_enewsclass` values('5','4',0xe8bdafe4bbb6e69599e7a88b,'','0','25','10','1','0','1',0x7c347c,'1',0x6e6577732f726a6a63,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe8bdafe4bbb6e69599e7a88b,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0',0x6e657773,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','36','36','1598698837','0','','0','1598698837');");
E_D("replace into `jianzhanzj_com_enewsclass` values('6','4',0xe6b8b8e6888fe694bbe795a5,'','0','25','10','1','0','1',0x7c347c,'1',0x6e6577732f7978676c,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe6b8b8e6888fe694bbe795a5,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0',0x6e657773,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','120','120','1598698876','0','','0','1598698876');");

@include("../../inc/footer.php");
?>