<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_1`;");
E_C("CREATE TABLE `phome_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=1161 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_1` values('617','1000010000000168','small95a5ea4930c2a34c111f99a3771fcbf0.jpg','10024','','adm1n','1452858365','15','[s]30593350879d278c544fa83f032d0060.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('619','1000010000000168','smalle910988393b9aa5a4b2a3b6d00193aef.jpg','12243','','adm1n','1452858421','15','[s]cf2dd9e6ac594ee6b0e74d9d6f2d8f6f.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('621','1000010000000168','small9313e75a2551f5386a96a6a8c25fbd7a.jpg','15788','','adm1n','1452858522','15','[s]8ab2286a7a11d3d402363a5efccd9e4e.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('623','1000010000000168','small485020772c0907e5121273cab1e85988.jpg','6618','','adm1n','1452858630','15','[s]1f894fcf44acce8d0c6ed5e7607caf35.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('800','1000010000000168','e7fd72b30c59eb327fd6cbc09891f609.jpg','71590','','adm1n','1452864739','15','[URL]e7fd72b30c59eb327fd6cbc09891f609.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('801','1000010000000168','f67fc5730eb3ef42ee00e34cb3af0de5.jpg','143913','','adm1n','1452864739','15','[URL]f67fc5730eb3ef42ee00e34cb3af0de5.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('802','1000010000000168','54a926d1c87eecb6d87b1dce6936b3fd.jpg','146769','','adm1n','1452864740','15','[URL]54a926d1c87eecb6d87b1dce6936b3fd.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('822','1000010000000168','e90000b46a44e0724a5181d0a334d666.jpg','259924','','adm1n','1452864782','15','[URL]e90000b46a44e0724a5181d0a334d666.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('824','1000010000000168','057ed2445884bcb37fa4481dc98029c7.jpg','80928','','adm1n','1452864787','15','[URL]057ed2445884bcb37fa4481dc98029c7.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('825','1000010000000168','26d3696513a2db403058910d575d1699.jpg','257425','','adm1n','1452864788','15','[URL]26d3696513a2db403058910d575d1699.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('828','1000010000000168','cac40bed30bb83cff54189294ab9d152.jpg','280500','','adm1n','1452864788','15','[URL]cac40bed30bb83cff54189294ab9d152.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('831','1000010000000168','5b1f38dfdf53db9ade9d9020e1b9f85d.jpg','330886','','adm1n','1452864789','15','[URL]5b1f38dfdf53db9ade9d9020e1b9f85d.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('832','1000010000000168','b393fad7ad388d79f5e6dd08fbddfdbe.jpg','150934','','adm1n','1452864789','15','[URL]b393fad7ad388d79f5e6dd08fbddfdbe.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('833','1000010000000168','bfcf340ee7e4cf7cb0149322465a6500.jpg','148938','','adm1n','1452864790','15','[URL]bfcf340ee7e4cf7cb0149322465a6500.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('834','1000010000000168','163a4d3e32a99eca885bcb3e78947c82.jpg','168105','','adm1n','1452864790','15','[URL]163a4d3e32a99eca885bcb3e78947c82.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('835','1000010000000168','3641609a57264159bd4fb8d981f977e8.jpg','263831','','adm1n','1452864791','15','[URL]3641609a57264159bd4fb8d981f977e8.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('836','1000010000000168','a9e5daff892482fcf051e115bcfdfba8.jpg','153581','','adm1n','1452864791','15','[URL]a9e5daff892482fcf051e115bcfdfba8.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('837','1000010000000168','d97b2dccfcd3be4507ea621ec63cb9be.jpg','304534','','adm1n','1452864792','15','[URL]d97b2dccfcd3be4507ea621ec63cb9be.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('838','1000010000000168','7cb9c3a574891aa5840496f57e2bca0f.png','427388','','adm1n','1452864797','15','[URL]7cb9c3a574891aa5840496f57e2bca0f.png','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('839','1000010000000168','6fecd95792cf5a9332e040109aa0e795.jpg','51792','','adm1n','1452864797','15','[URL]6fecd95792cf5a9332e040109aa0e795.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('842','1000010000000168','73445e3e8d99738c8fd60ee0a5c2ab2d.jpg','79750','','adm1n','1452864807','15','[URL]73445e3e8d99738c8fd60ee0a5c2ab2d.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('844','1000010000000168','991e38a5191e80d8ca0b10185b7fd207.jpg','74869','','adm1n','1452864808','15','[URL]991e38a5191e80d8ca0b10185b7fd207.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('846','1000010000000168','6b34efa0321e77734bf0fc821de58182.jpg','64322','','adm1n','1452864811','15','[URL]6b34efa0321e77734bf0fc821de58182.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('850','1000010000000168','317aed092ac8cdcb887df96159cddef0.jpg','67815','','adm1n','1452864812','15','[URL]317aed092ac8cdcb887df96159cddef0.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('852','1000010000000168','652615be4fcae9b6b5ad6169cd955b25.jpg','76179','','adm1n','1452864816','15','[URL]652615be4fcae9b6b5ad6169cd955b25.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('856','1000010000000168','b5c374b8303e4d5b6c9ff23566838163.jpg','57351','','adm1n','1452864818','15','[URL]b5c374b8303e4d5b6c9ff23566838163.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('857','1000010000000168','e7661e499215f9790ba768c52ded9aa8.jpg','66485','','adm1n','1452864819','15','[URL]e7661e499215f9790ba768c52ded9aa8.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('888','1000010000000168','04b67dee5fff5830ee7e40b674ae2f67.jpg','72036','','adm1n','1452864983','15','[URL]04b67dee5fff5830ee7e40b674ae2f67.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('889','1000010000000168','c68364e3c16ed577f39f98959c81a0d9.jpg','16533','','adm1n','1452864984','15','[URL]c68364e3c16ed577f39f98959c81a0d9.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('890','1000010000000168','63a7a39335625840d76ea4479775f10d.jpg','80242','','adm1n','1452864984','15','[URL]63a7a39335625840d76ea4479775f10d.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('891','1000010000000168','2e697c1643e8da1f6585406a48f49e13.jpg','19411','','adm1n','1452864984','15','[URL]2e697c1643e8da1f6585406a48f49e13.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('892','1000010000000168','c9f5086fedf3893ed89e6fd4b03721fe.jpg','23618','','adm1n','1452864985','15','[URL]c9f5086fedf3893ed89e6fd4b03721fe.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('893','1000010000000168','7ccc7ab2de8bdc8cdf8bfb5efd17c0da.jpg','31710','','adm1n','1452864985','15','[URL]7ccc7ab2de8bdc8cdf8bfb5efd17c0da.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('894','1000010000000168','dcebf9983ef0e4c9c5802df794fa048c.jpg','211032','','adm1n','1452864986','15','[URL]dcebf9983ef0e4c9c5802df794fa048c.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('895','1000010000000168','cbd04e458251dfd098765b4965793a6d.jpg','190647','','adm1n','1452864991','15','[URL]cbd04e458251dfd098765b4965793a6d.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('896','1000010000000168','0a0b4a41521d4d04ace248d575e83e00.jpg','456762','','adm1n','1452864992','15','[URL]0a0b4a41521d4d04ace248d575e83e00.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('897','1000010000000168','2ab236d2b633a3a8c307afd4f3fa13d9.jpg','658242','','adm1n','1452864993','15','[URL]2ab236d2b633a3a8c307afd4f3fa13d9.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('898','1000010000000168','e8daddc32b31edb754aaa3b2e2121eed.jpg','504568','','adm1n','1452864994','15','[URL]e8daddc32b31edb754aaa3b2e2121eed.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('899','1000010000000168','5ea4e000ad2fad21605dd9eb009a162c.jpg','487537','','adm1n','1452864995','15','[URL]5ea4e000ad2fad21605dd9eb009a162c.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('900','1000010000000168','fed1b7f572dfaa4c87dca961c4daf7b1.jpg','248814','','adm1n','1452864995','15','[URL]fed1b7f572dfaa4c87dca961c4daf7b1.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('901','1000010000000168','467370d929f67607170835e098f135f0.jpg','432255','','adm1n','1452864996','15','[URL]467370d929f67607170835e098f135f0.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('902','1000010000000168','afb34e5a449f3a1eaaf13e96f03edf9c.jpg','233604','','adm1n','1452864997','15','[URL]afb34e5a449f3a1eaaf13e96f03edf9c.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('903','1000010000000168','1e555e1c616131b181382b8ddb8741d2.jpg','146104','','adm1n','1452864997','15','[URL]1e555e1c616131b181382b8ddb8741d2.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('904','1000010000000168','113ed7ccd250867094c252b76a9c8d8e.jpg','219630','','adm1n','1452864998','15','[URL]113ed7ccd250867094c252b76a9c8d8e.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('905','1000010000000168','2ae9a9643d95109e31e7f80743c7c239.jpg','80657','','adm1n','1452864998','15','[URL]2ae9a9643d95109e31e7f80743c7c239.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('906','1000010000000168','0cdd6ccd7ada606b0158ca6777594d1c.jpg','98268','','adm1n','1452864998','15','[URL]0cdd6ccd7ada606b0158ca6777594d1c.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('907','1000010000000168','46bad28909c284ad97d058760fba0907.jpg','87254','','adm1n','1452864999','15','[URL]46bad28909c284ad97d058760fba0907.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('908','1000010000000168','163971389db2242ff86b3b075ed5c83b.jpg','84785','','adm1n','1452864999','15','[URL]163971389db2242ff86b3b075ed5c83b.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('909','1000010000000168','cbd2a659cb9a04e70d3f9ffb9681a6da.jpg','112261','','adm1n','1452864999','15','[URL]cbd2a659cb9a04e70d3f9ffb9681a6da.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('912','1000010000000168','9f5f06ed5d21f4a11a455defd893e2f0.jpg','94592','','adm1n','1452865058','15','[URL]9f5f06ed5d21f4a11a455defd893e2f0.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('913','1000010000000168','d7a67681638e5316fbc602d0192aa07d.jpg','132178','','adm1n','1452865058','15','[URL]d7a67681638e5316fbc602d0192aa07d.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('919','1000010000000168','71cdb61697f57b5f319732123f6174d8.jpg','76195','','adm1n','1452873384','15','[URL]71cdb61697f57b5f319732123f6174d8.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('920','1000010000000168','fde9ad4be95275fb7feda929df5da65e.jpg','46246','','adm1n','1452873384','15','[URL]fde9ad4be95275fb7feda929df5da65e.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('921','1000010000000168','1b82a1207fcddd6fe4891452a8ff84cb.jpg','36417','','adm1n','1452873384','15','[URL]1b82a1207fcddd6fe4891452a8ff84cb.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('933','1000010000000168','a7378567a6a5f72b89e77f28d847a35a.jpg','114549','','adm1n','1452873547','15','[URL]a7378567a6a5f72b89e77f28d847a35a.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('934','1000010000000168','d57015405103e0d34e94ed94b24f9f19.jpg','91094','','adm1n','1452873547','15','[URL]d57015405103e0d34e94ed94b24f9f19.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('935','1000010000000168','82b51e98aefe2c5668e74c6f7d988644.jpg','100957','','adm1n','1452873547','15','[URL]82b51e98aefe2c5668e74c6f7d988644.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('936','1000010000000168','0848ef0139f74f262a23f972af0e8623.jpg','52444','','adm1n','1452873548','15','[URL]0848ef0139f74f262a23f972af0e8623.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('937','1000010000000168','0797b7b9fbaaa0379665a3852e4aa72b.jpg','47756','','adm1n','1452873548','15','[URL]0797b7b9fbaaa0379665a3852e4aa72b.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('938','1000010000000168','5396984ab256a0aa01aa4647f41759bc.jpg','76905','','adm1n','1452873548','15','[URL]5396984ab256a0aa01aa4647f41759bc.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('939','1000010000000168','4b357c5dc7f7eb23df5f9845722172ce.jpg','95179','','adm1n','1452873548','15','[URL]4b357c5dc7f7eb23df5f9845722172ce.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('940','1000010000000168','e006c3facb0d4e2ca0a1ae45e03fdc5a.jpg','33972','','adm1n','1452873549','15','[URL]e006c3facb0d4e2ca0a1ae45e03fdc5a.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('941','1000010000000168','61a83099846d22c2f647c9544d7e5e37.jpg','56552','','adm1n','1452873549','15','[URL]61a83099846d22c2f647c9544d7e5e37.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('942','1000010000000168','d3d1d583a00b69eedb3704c43a04b0a2.jpg','56833','','adm1n','1452873549','15','[URL]d3d1d583a00b69eedb3704c43a04b0a2.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('943','1000010000000168','e3d5995288c18418535e1a84ad1094fb.jpg','35806','','adm1n','1452873549','15','[URL]e3d5995288c18418535e1a84ad1094fb.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('944','1000010000000168','06a4a4407f8b3b10edac2345b273959f.jpg','77395','','adm1n','1452873549','15','[URL]06a4a4407f8b3b10edac2345b273959f.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('945','1000010000000168','1e2dcb3b02062dc1821bf11f34468251.jpg','67268','','adm1n','1452873550','15','[URL]1e2dcb3b02062dc1821bf11f34468251.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('950','1000010000000168','7b225109c29600406faf0f2bd3c17b0a.jpg','22866','','adm1n','1452873611','15','[URL]7b225109c29600406faf0f2bd3c17b0a.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('951','1000010000000168','32745e0cdff44a97b73e87d4af6f986d.jpg','18403','','adm1n','1452873611','15','[URL]32745e0cdff44a97b73e87d4af6f986d.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('952','1000010000000168','c409b92eb2d91ef6b07b1cf3e31c3d5c.jpg','17618','','adm1n','1452873611','15','[URL]c409b92eb2d91ef6b07b1cf3e31c3d5c.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('953','1000010000000168','6f0bbd033689aaf5543bfbf37d7f0fab.jpg','20315','','adm1n','1452873612','15','[URL]6f0bbd033689aaf5543bfbf37d7f0fab.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('954','1000010000000168','4eac5823d89c5ba9a1a7b9fe6eabacf6.jpg','46839','','adm1n','1452873612','15','[URL]4eac5823d89c5ba9a1a7b9fe6eabacf6.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('955','1000010000000168','4698a1bc7c54668bc03ecda12186fd82.jpg','66724','','adm1n','1452873612','15','[URL]4698a1bc7c54668bc03ecda12186fd82.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('956','1000010000000168','d7cb50e10fd1a3b2f40b593a7b9d5670.jpg','66687','','adm1n','1452873612','15','[URL]d7cb50e10fd1a3b2f40b593a7b9d5670.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('957','1000010000000168','8975db0dabc207266e46935fd4546a3b.jpg','62892','','adm1n','1452873612','15','[URL]8975db0dabc207266e46935fd4546a3b.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('958','1000010000000168','6ffaa34ca26690c05e25bda8b0d93492.jpg','43167','','adm1n','1452873613','15','[URL]6ffaa34ca26690c05e25bda8b0d93492.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('959','1000010000000168','a2b246ec608b0451178fd0ed7da707f3.jpg','62356','','adm1n','1452873613','15','[URL]a2b246ec608b0451178fd0ed7da707f3.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('960','1000010000000168','ff63556733e254034b65802a943347dd.jpg','62780','','adm1n','1452873613','15','[URL]ff63556733e254034b65802a943347dd.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('961','1000010000000168','0083cdbe392249fc47f2c5600a1db52a.jpg','289931','','adm1n','1452873652','15','[URL]0083cdbe392249fc47f2c5600a1db52a.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('962','1000010000000168','9a00ad209cfa64b09ad06573ee0f313f.jpg','264238','','adm1n','1452873653','15','[URL]9a00ad209cfa64b09ad06573ee0f313f.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('963','1000010000000168','96f7c4968d108139b9bfcc4c799020b2.jpg','177350','','adm1n','1452873653','15','[URL]96f7c4968d108139b9bfcc4c799020b2.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('964','1000010000000168','7a6a1bfb9cb71a3d612c88c30d754cec.jpg','679959','','adm1n','1452873654','15','[URL]7a6a1bfb9cb71a3d612c88c30d754cec.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('965','1000010000000168','febd84fe6e4c1532b9ca6f30213f7219.jpg','728366','','adm1n','1452873655','15','[URL]febd84fe6e4c1532b9ca6f30213f7219.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('966','1000010000000168','1bfce96b03a6a5736bd3cec524a8781c.jpg','31320','','adm1n','1452873656','15','[URL]1bfce96b03a6a5736bd3cec524a8781c.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('973','1000010000000161','smallf73f091f5814f408170362cf02ce6daf.jpg','10096','','adm1n','1452874466','15','[s]1b82a1207fcddd6fe4891452a8ff84cb.jpg','1','0','161','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('978','1000010000000158','small2057c1dd5e81851ead882acb3299afa2.jpg','7447','','adm1n','1452874762','15','[s]0cdd6ccd7ada606b0158ca6777594d1c.jpg','1','0','158','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('980','1000010000000159','smallcb2ed39ecd42b55b42471c4d1d12657a.jpg','7505','','adm1n','1452874821','21','[s]c37a58df25155d0c7e602e84a6f68c62.jpg','1','0','159','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('981','1000010000000123','e0fed970fcfde40a78c18cabf0a36bb7.jpg','91920','','adm1n','1452878984','20','[URL]e0fed970fcfde40a78c18cabf0a36bb7.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('982','1000010000000123','1228ccc582d495d1d1880434ad23b696.jpg','96937','','adm1n','1452878985','20','[URL]1228ccc582d495d1d1880434ad23b696.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('983','1000010000000123','9fc1a2ba2473c1cd80f737e1563beb13.jpg','65055','','adm1n','1452878985','20','[URL]9fc1a2ba2473c1cd80f737e1563beb13.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('984','1000010000000123','24583d01c3af938907dcc70de8946981.jpg','29933','','adm1n','1452878985','20','[URL]24583d01c3af938907dcc70de8946981.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('985','1000010000000123','ae6433faa6f1c7bd5e48fd8a701165af.jpg','79625','','adm1n','1452878985','20','[URL]ae6433faa6f1c7bd5e48fd8a701165af.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('986','1000010000000123','0da79cb20052a8a73e7e9c41a66b3763.jpg','69659','','adm1n','1452878986','20','[URL]0da79cb20052a8a73e7e9c41a66b3763.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('987','1000010000000123','d32c97e0d2a103c4a8f7bfcca51f2da6.jpg','96733','','adm1n','1452878986','20','[URL]d32c97e0d2a103c4a8f7bfcca51f2da6.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('988','1000010000000123','b12329fb42764108828284b7de11f94e.jpg','71369','','adm1n','1452878986','20','[URL]b12329fb42764108828284b7de11f94e.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('989','1000010000000123','9ffd95c1f0866add3b05ed94c3f30fb0.jpg','71422','','adm1n','1452878986','20','[URL]9ffd95c1f0866add3b05ed94c3f30fb0.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('990','1000010000000123','f45b3a382d2cf52ab41778d79a4cf6df.jpg','28860','','adm1n','1452878987','20','[URL]f45b3a382d2cf52ab41778d79a4cf6df.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('991','1000010000000123','17953584d200fbadcbfe28ac87eae32e.jpg','62449','','adm1n','1452878987','20','[URL]17953584d200fbadcbfe28ac87eae32e.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('992','1000010000000123','2039b9f890eca579f3db511a2a87e153.jpg','85112','','adm1n','1452878987','20','[URL]2039b9f890eca579f3db511a2a87e153.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('993','1000010000000123','27d9c0f21c9319a2e6894b78e4f02bee.jpg','55683','','adm1n','1452878987','20','[URL]27d9c0f21c9319a2e6894b78e4f02bee.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('994','1000010000000123','beeed0401bd4285b2e8f8d177b0515b6.jpg','57227','','adm1n','1452878988','20','[URL]beeed0401bd4285b2e8f8d177b0515b6.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('995','1000010000000123','28574fbab49da41f55fd83c3481bedf8.jpg','95558','','adm1n','1452878988','20','[URL]28574fbab49da41f55fd83c3481bedf8.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('996','1000010000000123','8deb0f905a0ae5c7f2e5c356189725b8.jpg','34967','','adm1n','1452878988','20','[URL]8deb0f905a0ae5c7f2e5c356189725b8.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('997','1000010000000123','ebf8cf695959dea99b98c4aea7d877e3.jpg','26585','','adm1n','1452878988','20','[URL]ebf8cf695959dea99b98c4aea7d877e3.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('998','1000010000000123','de60995a15135cbf2c68498a2c4ae2a0.jpg','94457','','adm1n','1452878989','20','[URL]de60995a15135cbf2c68498a2c4ae2a0.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('999','1000010000000123','18c4691c281267f25973e784c2cccea8.jpg','93998','','adm1n','1452878989','20','[URL]18c4691c281267f25973e784c2cccea8.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1000','1000010000000123','9ab75421e0c53adeb0ea7917d2c06190.jpg','45752','','adm1n','1452878989','20','[URL]9ab75421e0c53adeb0ea7917d2c06190.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1001','1000010000000123','e1d8c864bed13f508a64a7990e5786c5.jpg','131431','','adm1n','1452878989','20','[URL]e1d8c864bed13f508a64a7990e5786c5.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1010','1000010000000165','smallc016630b9b7ac647393a8a597557d517.jpg','11455','','adm1n','1452880236','21','[s]13170085_690522.jpg','1','0','165','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1012','1000010000000164','small5c1837a7c785816a674de79cf8dc326d.jpg','10836','','adm1n','1452880330','15','[s]1e2dcb3b02062dc1821bf11f34468251.jpg','1','0','164','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1016','1000010000000163','small6af7746e23ef9a8f0ebecc202c0b6cfd.jpg','10574','','adm1n','1452880443','21','[s]240390-1403200H23150.jpg','1','0','163','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1020','1000010000000162','small3108eb7ef648225cb3ea57ba508e2e53.jpg','9744','','adm1n','1452880541','21','[s]20070802104522602.jpg','1','0','162','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1022','1000010000000157','small4030fa03ae7c4b4ca66fa361009ea48b.jpg','10986','','adm1n','1452880607','15','[s]201011374221631.jpg','1','0','157','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1026','1000010000000156','small7b084bfb174cc90ba0a7ce97b4bdd693.jpg','14372','','adm1n','1452880692','21','[s]20080909111216556.jpg','1','0','156','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1030','1000010000000155','smalle9bdd7bf092d9d9bc042f305584d41e6.jpg','12084','','adm1n','1452880808','21','[s]sy_53230438757.jpg','1','0','155','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1034','1000010000000154','smalle2ceaf783c1bff3c31477102634e4462.jpg','4516','','adm1n','1452880988','21','[s]e8026022bd5614fdb7b62d3d9a8b7453.jpg','1','0','154','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1036','1000010000000153','small85b1249340433321c5545d57eb3809fe.jpg','9231','','adm1n','1452881048','21','[s]94b9ce51d28c93ca21588d6acb1932f1.jpg','1','0','153','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1038','1000010000000152','small3ffdfeb00eed14d4d5a4a4703ffad88f.jpg','8863','','adm1n','1452881116','21','[s]cd5fce1230b211d105966a7ba23e788b.jpg','1','0','152','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1040','1000010000000151','small70804b5a88473b6e9fe76ba6efaa8e7a.png','72918','','adm1n','1452881177','21','[s]3aa6a5770fceb930266700239e5d7bc1.png','1','0','151','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1042','1000010000000150','small23c1c841a74e27ba936dcb794a5911fb.jpg','11832','','adm1n','1452881250','15','[s]317aed092ac8cdcb887df96159cddef0.jpg','1','0','150','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1046','1000010000000149','small251fbff61fdd3a9eafb2f66e37243471.jpg','10597','','adm1n','1452881341','16','[s]8718367adab44aed5c9d1033b11c8701a08bfb12.jpg','1','0','149','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1048','1000010000000160','smallb8e5e7e47104463be95bbefb78316d50.jpg','12631','','adm1n','1452881431','15','[s]3686042_190139025925_2.jpg','1','0','160','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1050','1000010000000107','smalld66a914e0eb93c4063e7e110c8a13597.jpg','15295','','adm1n','1452881550','9','[s]3210378_121710008741_2.jpg','1','0','107','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1052','1000010000000108','smallb94088eddca70e2aa8468175329faedd.jpg','9411','','adm1n','1452881597','10','[s]48bc437f623bb9d71d5e234d16eae5f1.jpg','1','0','108','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1054','1000010000000109','smallea8e43b2b298db4cbf2b720fad64f329.jpg','18441','','adm1n','1452881654','11','[s]2(79).jpg','1','0','109','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1056','1000010000000110','small541d3b454bc193f485e74e09af565fe8.jpg','12217','','adm1n','1452881706','12','[s]3198681635340558888.jpg','1','0','110','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1058','1000010000000130','smallb382290d64041a00f75eb53321ff323d.png','61851','','adm1n','1452881776','17','[s]a8638e4c7215f5bfcfa70fd593ed650f.png','1','0','130','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1060','1000010000000127','small372e55cd484d3d8bbb4d944deb67a656.jpg','12504','','adm1n','1452881824','17','[s]design_3d_148439_10.jpg','1','0','127','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1062','1000010000000111','small1b074ae6a86faf211057ea044ea97a30.jpg','12360','','adm1n','1452881904','17','[s]71422c16deb9e1f1176f54e866787892.jpg','1','0','111','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1066','1000010000000167','smallb2f8b10429f19f6d3d736f0574f0b272.jpg','8387','','adm1n','1452882541','15','[s]u_20150312113801233-1110.jpg','1','0','167','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1068','1000010000000129','smallc058d0fd0816f449c68bc54835e7063e.jpg','6898','','adm1n','1452883352','18','[s]aa06966b8baadc77f521e7abc18625b7.jpg','1','0','129','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1070','1000010000000126','small779d2e99749a927a7182753920697467.jpg','9510','','adm1n','1452883399','18','[s]5ed34cb5b56b3f6f659b36cbc58015f0.jpg','1','0','126','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1072','1000010000000112','small92fc74bce535c6b075bc36a229b079c3.jpg','9852','','adm1n','1452883437','18','[s]u=812646106,3577354557&amp;fm=21&amp;gp=0.jpg','1','0','112','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1074','1000010000000117','small975f4dcf3937113ba47907f25dd2b0a9.jpg','8110','','adm1n','1452883509','19','[s]f79ff771b3e1147eab636a57371bdccb.jpg','1','0','117','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1076','1000010000000113','smallf8f7ad77f7f2bd34351eee01ea08c0c9.jpg','11578','','adm1n','1452883601','19','[s]2008218105448353_2.jpg','1','0','113','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1078','1000010000000124','small4d2ef7b92f940f0de62a25ed578b83f2.jpg','5440','','adm1n','1452883685','20','[s]0961ce77b3288b82576ad8855edecb86.jpg','1','0','124','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1080','1000010000000123','smallbeeed0401bd4285b2e8f8d177b0515b61452883770.jpg','12982','','adm1n','1452883770','20','[s][URL]beeed0401bd4285b2e8f8d177b0515b6.jpg','1','0','123','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1082','1000010000000122','smallfd2f051e0b2b3080cbfee80a483dd8cd.jpg','7043','','adm1n','1452883811','20','[s]15f1070a397eae0d2fa00d5bb11d303d.jpg','1','0','122','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1084','1000010000000121','smallb37b9756bdb70358f184e2dde8723409.jpg','7481','','adm1n','1452883852','20','[s]3e12d99cd412845d2b4d3cb7931df3c6.jpg','1','0','121','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1086','1000010000000120','small1c633948b1f9ec68dd12897b6d95b0e8.jpg','3968','','adm1n','1452883895','20','[s]947b5ef112fffab8b004e28a180270a3.jpg','1','0','120','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1088','1000010000000119','smalle02e3a0dd4cdf509296745742f792fa7.jpg','5359','','adm1n','1452883929','20','[s]4cf427b69afe9c963cca3c7d09e2e304.jpg','1','0','119','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1090','1000010000000118','smallc06dc54261d9f5674bb892321ead823c.jpg','5095','','adm1n','1452883975','20','[s]024029ca7cb39b849bb62afe3632a7dc.jpg','1','0','118','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1092','1000010000000115','small89113483d110bc0ad08a20045a72cb86.jpg','10250','','adm1n','1452884024','20','[s]a4a1fc290e1b0e649685cfb8e68b7ef6.jpg','1','0','115','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1100','1000010000000114','small946bb549379288d4bbc77a124e7a9c20.jpg','11000','','adm1n','1452884178','20','[s]2989797_091834011230_2.jpg','1','0','114','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1102','1000010000000146','small9c10d85894a3e6d3f09967f1447bb8ff.png','105408','','adm1n','1452916220','15','[s]7cb9c3a574891aa5840496f57e2bca0f.png','1','0','146','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1104','1000010000000145','small05f36b6c91e20f6760dcc6f1abb4b572.jpg','7495','','adm1n','1452916287','15','[s]b393fad7ad388d79f5e6dd08fbddfdbe.jpg','1','0','145','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1106','1000010000000142','small9a02c7a3aa7d591851cb5bc989ecd30b.jpg','10700','','adm1n','1452916327','15','[s]e90000b46a44e0724a5181d0a334d666.jpg','1','0','142','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1108','1000010000000139','smalleb9bd7515e0c168505d43da41e498811.jpg','11083','','adm1n','1452916370','15','[s]54a926d1c87eecb6d87b1dce6936b3fd.jpg','1','0','139','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1110','1000010000000147','smalled8fe1a181e111b9358a119f898ad29f.jpg','10472','','adm1n','1452916452','16','[s]pic-2597-4-1280x800.jpg','1','0','147','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1112','1000010000000144','smallbfebca9d36c99652b7e5963e1f695d62.jpg','8925','','adm1n','1452916507','16','[s]9f5e165f4c5b90f9cee3a2e940d68790.jpg','1','0','144','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1114','1000010000000141','smallcaae9ba1e83980b00a89265904a0515c.jpg','13242','','adm1n','1452916545','16','[s]6608733_174559744000_2.jpg','1','0','141','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1116','1000010000000140','small3407527f5d4e33bb4c2bc79489111c68.jpg','11023','','adm1n','1452916595','16','[s]13e440edc7b53051f22897f38d06713e.jpg','1','0','140','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1122','1000010000000148','small67e35b1a51c59d2611bc04b90028d905.jpg','12084','','adm1n','1452916934','21','[s]sy_53230438757.jpg','1','0','148','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1124','1000010000000143','smallc49db7b7d78ae2be6da3f3f65417b1d8.jpg','9060','','adm1n','1452917013','21','[s]242704849dbe61e6a1baa54eed5f963c.jpg','1','0','143','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1126','1000010000000137','small5873aa73734b21cfca7677363f50b81c.jpg','10460','','adm1n','1452917117','23','[s]2154222489.jpg','1','0','137','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1128','1000010000000135','small21f902ffae8cb13f52ca97849b85dc91.jpg','12184','','adm1n','1452917169','23','[s]63972dd14fdb6c77da54c2cf2bd0adc8.jpg','1','0','135','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1130','1000010000000133','smalladcda0a2be988f042e1449ea3f981321.jpg','13526','','adm1n','1452917275','23','[s]61.jpg','1','0','133','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1132','1000010000000131','smallb4d4f6bf20bde6fd00859995c5adba9a.jpg','11019','','adm1n','1452917324','23','[s]ff81dd8afad3911d358dc38297362057.jpg','1','0','131','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1134','1000010000000138','smallab7a1b096b7eee4e3bbaecf0911c60f7.jpg','7969','','adm1n','1452917421','24','[s]38be8f0a2ee4b4a6473d66a219c64fc6.jpg','1','0','138','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1136','1000010000000136','small08cb13b2c7e5f1a591c422994ef87a71.jpg','9457','','adm1n','1452917473','24','[s]f03e728b0976ace8749325afe0ff726d.jpg','1','0','136','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1138','1000010000000134','small76704bbaada4523f4cd22956a5ad27b4.jpg','17137','','adm1n','1452917515','24','[s]adce6ef05755cd51ece4c08c46f027ec.jpg','1','0','134','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1140','1000010000000132','smalla498bd9572b5e627add93ab81617d3ec.jpg','6618','','adm1n','1452917550','24','[s]cb3bf66203ecb4008747c652c925c8cb.jpg','1','0','132','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1142','1000010000000128','smalle11ae904c237e13fb0052c3bb8637255.jpg','15299','','adm1n','1452917636','22','[s]e42286fd4236deb4c35dec57e2ac4f07.jpg','1','0','128','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1144','1000010000000125','smalle25fa6986d5c7b2c07b3663580840c47.jpg','10826','','adm1n','1452917679','22','[s]6128923e960d2e1b92f3f3f6e057e886.jpg','1','0','125','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1146','1000010000000116','small540602e35ceb9144d2ff13973a3e75ea.jpg','10779','','adm1n','1452917732','22','[s]sy_2010030620081408205.jpg','1','0','116','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1147','1000010000000168','298e89f7b602fdf8668207b56a1793e6.jpg','100782','','adm1n','1452918264','15','[URL]298e89f7b602fdf8668207b56a1793e6.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1148','1000010000000168','11ec68f2fdba487245970f7f5a634f8a.jpg','78921','','adm1n','1452918265','15','[URL]11ec68f2fdba487245970f7f5a634f8a.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1149','1000010000000168','626ed22f652ffe9e7e526acc7f2504a1.jpg','112722','','adm1n','1452918268','15','[URL]626ed22f652ffe9e7e526acc7f2504a1.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1150','1000010000000168','0e13ec75bf269f6f97385f2838d91f38.jpg','120018','','adm1n','1452918272','15','[URL]0e13ec75bf269f6f97385f2838d91f38.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1151','1000010000000168','3b7de581b8c3dd6c39684aa2326c676f.jpg','75302','','adm1n','1452918276','15','[URL]3b7de581b8c3dd6c39684aa2326c676f.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1152','1000010000000168','d8b844ebbd5c4d8773a8dd885122e201.jpg','83941','','adm1n','1452918276','15','[URL]d8b844ebbd5c4d8773a8dd885122e201.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1153','1000010000000168','4a56f5c7fa3c9344f60e4ba089869822.jpg','95696','','adm1n','1452918277','15','[URL]4a56f5c7fa3c9344f60e4ba089869822.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1154','1000010000000168','c4387d5eadbe45c2186fff79eb0d8429.jpg','77731','','adm1n','1452918277','15','[URL]c4387d5eadbe45c2186fff79eb0d8429.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1156','1000010000000168','small163a4d3e32a99eca885bcb3e78947c821452918892.jpg','9926','','adm1n','1452918892','15','[s][URL]163a4d3e32a99eca885bcb3e78947c82.jpg','1','0','168','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('1160','1000010000000166','smallcab0b421f5ad7978b58f18ae00250dab.jpg','8330','','adm1n','1452920910','15','[s]7b225109c29600406faf0f2bd3c17b0a.jpg','1','0','166','0','0','0');");

@include("../../inc/footer.php");
?>