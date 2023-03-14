<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `jianzhanzj_com_ecms_infoclass_pc`;");
E_C("CREATE TABLE `jianzhanzj_com_ecms_infoclass_pc` (
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL DEFAULT '',
  `qz_title` varchar(255) NOT NULL DEFAULT '',
  `save_title` varchar(10) NOT NULL DEFAULT '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepic` varchar(255) NOT NULL DEFAULT '',
  `save_titlepic` varchar(10) NOT NULL DEFAULT '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL DEFAULT '',
  `qz_newstime` varchar(255) NOT NULL DEFAULT '',
  `save_newstime` varchar(10) NOT NULL DEFAULT '',
  `zz_ftitle` text NOT NULL,
  `z_ftitle` varchar(255) NOT NULL DEFAULT '',
  `qz_ftitle` varchar(255) NOT NULL DEFAULT '',
  `save_ftitle` varchar(10) NOT NULL DEFAULT '',
  `zz_smalltext` text NOT NULL,
  `z_smalltext` varchar(255) NOT NULL DEFAULT '',
  `qz_smalltext` varchar(255) NOT NULL DEFAULT '',
  `save_smalltext` varchar(10) NOT NULL DEFAULT '',
  `zz_writer` text NOT NULL,
  `z_writer` varchar(255) NOT NULL DEFAULT '',
  `qz_writer` varchar(255) NOT NULL DEFAULT '',
  `save_writer` varchar(10) NOT NULL DEFAULT '',
  `zz_befrom` text NOT NULL,
  `z_befrom` varchar(255) NOT NULL DEFAULT '',
  `qz_befrom` varchar(255) NOT NULL DEFAULT '',
  `save_befrom` varchar(10) NOT NULL DEFAULT '',
  `zz_newstext` text NOT NULL,
  `z_newstext` varchar(255) NOT NULL DEFAULT '',
  `qz_newstext` varchar(255) NOT NULL DEFAULT '',
  `save_newstext` varchar(10) NOT NULL DEFAULT '',
  `zz_diggtop` text NOT NULL,
  `z_diggtop` varchar(255) NOT NULL DEFAULT '',
  `qz_diggtop` varchar(255) NOT NULL DEFAULT '',
  `save_diggtop` varchar(10) NOT NULL DEFAULT '',
  `zz_pctype` text NOT NULL,
  `z_pctype` varchar(255) NOT NULL,
  `qz_pctype` varchar(255) NOT NULL,
  `save_pctype` varchar(10) NOT NULL,
  `zz_yuyan` text NOT NULL,
  `z_yuyan` varchar(255) NOT NULL,
  `qz_yuyan` varchar(255) NOT NULL,
  `save_yuyan` varchar(10) NOT NULL,
  `zz_banben` text NOT NULL,
  `z_banben` varchar(255) NOT NULL,
  `qz_banben` varchar(255) NOT NULL,
  `save_banben` varchar(10) NOT NULL,
  `zz_daxiao` text NOT NULL,
  `z_daxiao` varchar(255) NOT NULL,
  `qz_daxiao` varchar(255) NOT NULL,
  `save_daxiao` varchar(10) NOT NULL,
  `zz_dengji` text NOT NULL,
  `z_dengji` varchar(255) NOT NULL,
  `qz_dengji` varchar(255) NOT NULL,
  `save_dengji` varchar(10) NOT NULL,
  `zz_pcurl` text NOT NULL,
  `z_pcurl` varchar(255) NOT NULL,
  `qz_pcurl` varchar(255) NOT NULL,
  `save_pcurl` varchar(10) NOT NULL,
  `zz_morepic` text NOT NULL,
  `z_morepic` varchar(255) NOT NULL,
  `qz_morepic` varchar(255) NOT NULL,
  `save_morepic` varchar(10) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>