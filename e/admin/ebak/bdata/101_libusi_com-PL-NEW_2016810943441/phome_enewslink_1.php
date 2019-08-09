<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslink`;");
E_C("CREATE TABLE `phome_enewslink` (
  `lid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL DEFAULT '',
  `lpic` varchar(255) NOT NULL DEFAULT '',
  `lurl` varchar(255) NOT NULL DEFAULT '',
  `ltime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `lsay` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `ltype` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslink` values('1','自适应检测','','http://www.libusi.com/tool/','2016-04-02 12:49:58','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('2','使用技巧','','http://www.libusi.com/ecmsedu/','2016-04-02 12:50:18','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('3','李布斯','','http://www.libusi.com/','2016-04-02 12:50:38','0','88','31','_blank','0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('4','模板更新','','http://www.libusi.com/ecms/ecms101.html','2016-04-02 12:51:08','0','88','31','_blank','0','','','1','0','0');");

@include("../../inc/footer.php");
?>