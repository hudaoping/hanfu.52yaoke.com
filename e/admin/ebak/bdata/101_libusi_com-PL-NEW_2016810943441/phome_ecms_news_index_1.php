<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_index`;");
E_C("CREATE TABLE `phome_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=177 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_index` values('1','8','1','1452784079','1452784221','1452844942','1');");
E_D("replace into `phome_ecms_news_index` values('2','2','1','1452794539','1452794640','1452844487','1');");
E_D("replace into `phome_ecms_news_index` values('3','2','1','1452796639','1452796639','1452843736','1');");
E_D("replace into `phome_ecms_news_index` values('4','2','1','1452796941','1452796941','1452843684','1');");
E_D("replace into `phome_ecms_news_index` values('5','2','1','1452797230','1452797230','1452843633','1');");
E_D("replace into `phome_ecms_news_index` values('6','2','1','1452797700','1452797701','1452843555','1');");
E_D("replace into `phome_ecms_news_index` values('7','8','1','1452798510','1452798512','1452844899','1');");
E_D("replace into `phome_ecms_news_index` values('8','8','1','1452798659','1452798659','1452844845','1');");
E_D("replace into `phome_ecms_news_index` values('9','8','1','1452798665','1452798665','1452844801','1');");
E_D("replace into `phome_ecms_news_index` values('10','2','1','1452798696','1452798696','1452844556','1');");
E_D("replace into `phome_ecms_news_index` values('11','9','1','1452799498','1452799501','1452845222','1');");
E_D("replace into `phome_ecms_news_index` values('12','8','1','1452799855','1452799855','1470756861','1');");
E_D("replace into `phome_ecms_news_index` values('13','9','1','1452799929','1452799929','1452845184','1');");
E_D("replace into `phome_ecms_news_index` values('14','10','1','1452800346','1452800346','1452846032','1');");
E_D("replace into `phome_ecms_news_index` values('15','10','1','1452800893','1452800893','1452845992','1');");
E_D("replace into `phome_ecms_news_index` values('16','11','1','1452801574','1452801575','1452846479','1');");
E_D("replace into `phome_ecms_news_index` values('17','11','1','1452801580','1452801582','1452846380','1');");
E_D("replace into `phome_ecms_news_index` values('18','12','1','1452802218','1452802221','1452847042','1');");
E_D("replace into `phome_ecms_news_index` values('19','12','1','1452802308','1452802309','1452846979','1');");
E_D("replace into `phome_ecms_news_index` values('20','12','1','1452802392','1452802394','1452846951','1');");
E_D("replace into `phome_ecms_news_index` values('21','8','1','1452827018','1452827018','1452844693','1');");
E_D("replace into `phome_ecms_news_index` values('22','2','1','1452827075','1452827076','1452844524','1');");
E_D("replace into `phome_ecms_news_index` values('23','9','1','1452827137','1452827137','1452845143','1');");
E_D("replace into `phome_ecms_news_index` values('24','10','1','1452827172','1452827172','1452845944','1');");
E_D("replace into `phome_ecms_news_index` values('25','11','1','1452827210','1452827213','1452846327','1');");
E_D("replace into `phome_ecms_news_index` values('26','12','1','1452827241','1452827241','1452846911','1');");
E_D("replace into `phome_ecms_news_index` values('27','13','1','1452828033','1452828033','1452847666','1');");
E_D("replace into `phome_ecms_news_index` values('28','14','1','1452828248','1452828248','1452850174','1');");
E_D("replace into `phome_ecms_news_index` values('29','13','1','1452828404','1452828405','1452847622','1');");
E_D("replace into `phome_ecms_news_index` values('30','14','1','1452828410','1452828411','1452850115','1');");
E_D("replace into `phome_ecms_news_index` values('31','17','1','1452828713','1452828715','1452851979','1');");
E_D("replace into `phome_ecms_news_index` values('32','18','1','1452828901','1452828902','1452856839','1');");
E_D("replace into `phome_ecms_news_index` values('33','17','1','1452828906','1452828907','1452851940','1');");
E_D("replace into `phome_ecms_news_index` values('34','14','1','1452828927','1452828927','1452850852','1');");
E_D("replace into `phome_ecms_news_index` values('35','2','1','1452828946','1452828946','1452843387','1');");
E_D("replace into `phome_ecms_news_index` values('36','19','1','1452829319','1452829324','1452857256','1');");
E_D("replace into `phome_ecms_news_index` values('37','18','1','1452829418','1452829420','1452856737','1');");
E_D("replace into `phome_ecms_news_index` values('38','14','1','1452829424','1452829425','1452850003','1');");
E_D("replace into `phome_ecms_news_index` values('39','17','1','1452829429','1452829435','1452851857','1');");
E_D("replace into `phome_ecms_news_index` values('40','18','1','1452829459','1452829465','1452856667','1');");
E_D("replace into `phome_ecms_news_index` values('41','19','1','1452829470','1452829476','1452857203','1');");
E_D("replace into `phome_ecms_news_index` values('42','8','1','1452829484','1452829485','1452844645','1');");
E_D("replace into `phome_ecms_news_index` values('43','10','1','1452829503','1452829503','1452845859','1');");
E_D("replace into `phome_ecms_news_index` values('44','9','1','1452829508','1452829508','1452845100','1');");
E_D("replace into `phome_ecms_news_index` values('45','12','1','1452829513','1452829513','1452846818','1');");
E_D("replace into `phome_ecms_news_index` values('46','20','1','1452831096','1452831098','1452857454','1');");
E_D("replace into `phome_ecms_news_index` values('47','19','1','1452831174','1452831181','1452857138','1');");
E_D("replace into `phome_ecms_news_index` values('48','20','1','1452831185','1452831185','1452857409','1');");
E_D("replace into `phome_ecms_news_index` values('49','22','1','1452831465','1452831469','1452857730','1');");
E_D("replace into `phome_ecms_news_index` values('50','20','1','1452831554','1452831556','1452857360','1');");
E_D("replace into `phome_ecms_news_index` values('51','22','1','1452831559','1452831562','1452857653','1');");
E_D("replace into `phome_ecms_news_index` values('52','19','1','1452831569','1452831571','1452857074','1');");
E_D("replace into `phome_ecms_news_index` values('53','23','1','1452832012','1452832013','1452858015','1');");
E_D("replace into `phome_ecms_news_index` values('54','22','1','1452832023','1452832025','1452857555','1');");
E_D("replace into `phome_ecms_news_index` values('55','23','1','1452832031','1452832031','1452857964','1');");
E_D("replace into `phome_ecms_news_index` values('56','24','1','1452833500','1452833500','1452858223','1');");
E_D("replace into `phome_ecms_news_index` values('57','23','1','1452833507','1452833507','1452857868','1');");
E_D("replace into `phome_ecms_news_index` values('58','24','1','1452833512','1452833512','1452858171','1');");
E_D("replace into `phome_ecms_news_index` values('59','15','1','1452833775','1452833775','1452858639','1');");
E_D("replace into `phome_ecms_news_index` values('60','24','1','1452833779','1452833780','1452858123','1');");
E_D("replace into `phome_ecms_news_index` values('61','16','1','1452833997','1452833997','1452858864','1');");
E_D("replace into `phome_ecms_news_index` values('62','9','1','1452834006','1452834007','1452845059','1');");
E_D("replace into `phome_ecms_news_index` values('63','15','1','1452834013','1452834015','1452858531','1');");
E_D("replace into `phome_ecms_news_index` values('64','16','1','1452834019','1452834019','1452858819','1');");
E_D("replace into `phome_ecms_news_index` values('65','19','1','1452834031','1452834032','1452857009','1');");
E_D("replace into `phome_ecms_news_index` values('66','16','1','1452834037','1452834037','1452858762','1');");
E_D("replace into `phome_ecms_news_index` values('67','21','1','1452834455','1452834457','1452859090','1');");
E_D("replace into `phome_ecms_news_index` values('68','16','1','1452834461','1452834461','1452858718','1');");
E_D("replace into `phome_ecms_news_index` values('69','15','1','1452834471','1452834471','1452858429','1');");
E_D("replace into `phome_ecms_news_index` values('70','24','1','1452834486','1452834486','1452858081','1');");
E_D("replace into `phome_ecms_news_index` values('71','21','1','1452834494','1452834494','1452922150','1');");
E_D("replace into `phome_ecms_news_index` values('72','15','1','1452834509','1452834510','1452858374','1');");
E_D("replace into `phome_ecms_news_index` values('73','21','1','1452834515','1452834516','1452858936','1');");
E_D("replace into `phome_ecms_news_index` values('74','25','1','1452837546','1452837546','1452850513','1');");
E_D("replace into `phome_ecms_news_index` values('75','25','1','1452838095','1452838096','1452850486','1');");
E_D("replace into `phome_ecms_news_index` values('76','26','1','1452838472','1452838472','1452851357','1');");
E_D("replace into `phome_ecms_news_index` values('77','26','1','1452838533','1452838536','1452851327','1');");
E_D("replace into `phome_ecms_news_index` values('78','26','1','1452838815','1452838815','1452851288','1');");
E_D("replace into `phome_ecms_news_index` values('79','26','1','1452838820','1452838820','1452851256','1');");
E_D("replace into `phome_ecms_news_index` values('80','25','1','1452839153','1452839153','1452850455','1');");
E_D("replace into `phome_ecms_news_index` values('81','25','1','1452839785','1452839788','1452850400','1');");
E_D("replace into `phome_ecms_news_index` values('82','25','1','1452839793','1452839796','1452850362','1');");
E_D("replace into `phome_ecms_news_index` values('83','26','1','1452840139','1452840140','1452851217','1');");
E_D("replace into `phome_ecms_news_index` values('84','26','1','1452840144','1452840144','1452851167','1');");
E_D("replace into `phome_ecms_news_index` values('85','27','1','1452841060','1452841067','1452851607','1');");
E_D("replace into `phome_ecms_news_index` values('86','27','1','1452841072','1452841072','1452851575','1');");
E_D("replace into `phome_ecms_news_index` values('87','27','1','1452841201','1452841201','1452851540','1');");
E_D("replace into `phome_ecms_news_index` values('88','27','1','1452841206','1452841206','1470756905','1');");
E_D("replace into `phome_ecms_news_index` values('89','27','1','1452841339','1452841339','1452851479','1');");
E_D("replace into `phome_ecms_news_index` values('90','27','1','1452841344','1452841351','1452851449','1');");
E_D("replace into `phome_ecms_news_index` values('91','25','1','1452841484','1452841485','1452850717','1');");
E_D("replace into `phome_ecms_news_index` values('92','25','1','1452841490','1452841490','1452850646','1');");
E_D("replace into `phome_ecms_news_index` values('93','10','1','1452841850','1452841854','1452845410','1');");
E_D("replace into `phome_ecms_news_index` values('94','11','1','1452841940','1452841941','1452846255','1');");
E_D("replace into `phome_ecms_news_index` values('95','11','1','1452841945','1452841946','1452846175','1');");
E_D("replace into `phome_ecms_news_index` values('96','13','1','1452842083','1452842084','1452847571','1');");
E_D("replace into `phome_ecms_news_index` values('97','14','1','1452842096','1452842097','1452922245','1');");
E_D("replace into `phome_ecms_news_index` values('98','13','1','1452842098','1452842099','1452847527','1');");
E_D("replace into `phome_ecms_news_index` values('99','14','1','1452842101','1452842102','1452849892','1');");
E_D("replace into `phome_ecms_news_index` values('100','13','1','1452842103','1452842104','1452847473','1');");
E_D("replace into `phome_ecms_news_index` values('101','14','1','1452842106','1452842107','1452849841','1');");
E_D("replace into `phome_ecms_news_index` values('102','14','1','1452842112','1452842112','1452848500','1');");
E_D("replace into `phome_ecms_news_index` values('103','13','1','1452842114','1452842114','1452847344','1');");
E_D("replace into `phome_ecms_news_index` values('104','13','1','1452842119','1452842119','1452847739','1');");
E_D("replace into `phome_ecms_news_index` values('105','13','1','1452842124','1452842124','1452847210','1');");
E_D("replace into `phome_ecms_news_index` values('106','14','1','1452842125','1452842125','1452922209','1');");
E_D("replace into `phome_ecms_news_index` values('107','9','1','1452863560','1452863560','1452881557','1');");
E_D("replace into `phome_ecms_news_index` values('108','10','1','1452863594','1452863612','1452921490','1');");
E_D("replace into `phome_ecms_news_index` values('109','11','1','1452863683','1452863694','1452881665','1');");
E_D("replace into `phome_ecms_news_index` values('110','12','1','1452863740','1452863742','1452881714','1');");
E_D("replace into `phome_ecms_news_index` values('111','17','1','1452863787','1452863789','1452881912','1');");
E_D("replace into `phome_ecms_news_index` values('112','18','1','1452863817','1452863817','1452883444','1');");
E_D("replace into `phome_ecms_news_index` values('113','19','1','1452863942','1452863952','1452883608','1');");
E_D("replace into `phome_ecms_news_index` values('114','20','1','1452863963','1452863975','1452884186','1');");
E_D("replace into `phome_ecms_news_index` values('115','20','1','1452863980','1452863984','1452884032','1');");
E_D("replace into `phome_ecms_news_index` values('116','22','1','1452864031','1452864031','1452917739','1');");
E_D("replace into `phome_ecms_news_index` values('117','19','1','1452864041','1452864041','1452883516','1');");
E_D("replace into `phome_ecms_news_index` values('118','20','1','1452864069','1452864088','1452883983','1');");
E_D("replace into `phome_ecms_news_index` values('119','20','1','1452864092','1452864094','1452883937','1');");
E_D("replace into `phome_ecms_news_index` values('120','20','1','1452864099','1452864110','1452883902','1');");
E_D("replace into `phome_ecms_news_index` values('121','20','1','1452864115','1452864118','1452883859','1');");
E_D("replace into `phome_ecms_news_index` values('122','20','1','1452864128','1452864145','1452883819','1');");
E_D("replace into `phome_ecms_news_index` values('123','20','1','1452864150','1452864151','1452883774','1');");
E_D("replace into `phome_ecms_news_index` values('124','20','1','1452864155','1452864173','1452883693','1');");
E_D("replace into `phome_ecms_news_index` values('125','22','1','1452864198','1452864203','1452917686','1');");
E_D("replace into `phome_ecms_news_index` values('126','18','1','1452864249','1452864278','1452883406','1');");
E_D("replace into `phome_ecms_news_index` values('127','17','1','1452864326','1452864349','1452881831','1');");
E_D("replace into `phome_ecms_news_index` values('128','22','1','1452864433','1452864459','1452917644','1');");
E_D("replace into `phome_ecms_news_index` values('129','18','1','1452864536','1452864565','1452883360','1');");
E_D("replace into `phome_ecms_news_index` values('130','17','1','1452864580','1452864583','1452881783','1');");
E_D("replace into `phome_ecms_news_index` values('131','23','1','1452864644','1452864645','1452917333','1');");
E_D("replace into `phome_ecms_news_index` values('132','24','1','1452864659','1452864660','1452917558','1');");
E_D("replace into `phome_ecms_news_index` values('133','23','1','1452864663','1452864663','1452917282','1');");
E_D("replace into `phome_ecms_news_index` values('134','24','1','1452864664','1452864668','1452917522','1');");
E_D("replace into `phome_ecms_news_index` values('135','23','1','1452864669','1452864669','1452917177','1');");
E_D("replace into `phome_ecms_news_index` values('136','24','1','1452864673','1452864676','1452917481','1');");
E_D("replace into `phome_ecms_news_index` values('137','23','1','1452864683','1452864684','1452917125','1');");
E_D("replace into `phome_ecms_news_index` values('138','24','1','1452864681','1452864701','1452917429','1');");
E_D("replace into `phome_ecms_news_index` values('139','15','1','1452864738','1452864740','1452916378','1');");
E_D("replace into `phome_ecms_news_index` values('140','16','1','1452864762','1452864763','1452916603','1');");
E_D("replace into `phome_ecms_news_index` values('141','16','1','1452864780','1452864780','1452916552','1');");
E_D("replace into `phome_ecms_news_index` values('142','15','1','1452864782','1452864782','1452916335','1');");
E_D("replace into `phome_ecms_news_index` values('143','21','1','1452864777','1452864783','1470760930','1');");
E_D("replace into `phome_ecms_news_index` values('144','16','1','1452864785','1452864789','1452916514','1');");
E_D("replace into `phome_ecms_news_index` values('145','15','1','1452864787','1452864792','1452921524','1');");
E_D("replace into `phome_ecms_news_index` values('146','15','1','1452864796','1452864797','1452916229','1');");
E_D("replace into `phome_ecms_news_index` values('147','16','1','1452864794','1452864803','1452916475','1');");
E_D("replace into `phome_ecms_news_index` values('148','21','1','1452864788','1452864814','1452916941','1');");
E_D("replace into `phome_ecms_news_index` values('149','16','1','1452864817','1452864817','1452881349','1');");
E_D("replace into `phome_ecms_news_index` values('150','15','1','1452864806','1452864819','1468585994','1');");
E_D("replace into `phome_ecms_news_index` values('151','21','1','1452864819','1452864835','1452881185','1');");
E_D("replace into `phome_ecms_news_index` values('152','21','1','1452864848','1452864848','1452881122','1');");
E_D("replace into `phome_ecms_news_index` values('153','21','1','1452864956','1452864960','1452881054','1');");
E_D("replace into `phome_ecms_news_index` values('154','21','1','1452864965','1452864968','1452880995','1');");
E_D("replace into `phome_ecms_news_index` values('155','21','1','1452864972','1452864973','1452880817','1');");
E_D("replace into `phome_ecms_news_index` values('156','21','1','1452864978','1452864979','1452880700','1');");
E_D("replace into `phome_ecms_news_index` values('157','15','1','1452864983','1452864986','1452880615','1');");
E_D("replace into `phome_ecms_news_index` values('158','15','1','1452864991','1452864999','1468585985','1');");
E_D("replace into `phome_ecms_news_index` values('159','21','1','1452865025','1452865026','1452874829','1');");
E_D("replace into `phome_ecms_news_index` values('160','15','1','1452865057','1452865058','1452881439','1');");
E_D("replace into `phome_ecms_news_index` values('161','15','1','1452873325','1452873325','1452874474','1');");
E_D("replace into `phome_ecms_news_index` values('162','21','1','1452873516','1452873518','1452880548','1');");
E_D("replace into `phome_ecms_news_index` values('163','21','1','1452873531','1452873533','1452880449','1');");
E_D("replace into `phome_ecms_news_index` values('164','15','1','1452873546','1452873550','1468585978','1');");
E_D("replace into `phome_ecms_news_index` values('165','21','1','1464191983','1452873584','1452880243','1');");
E_D("replace into `phome_ecms_news_index` values('166','15','1','1464192010','1452873613','1452920918','1');");
E_D("replace into `phome_ecms_news_index` values('167','15','1','1464192051','1452873656','1452882552','1');");
E_D("replace into `phome_ecms_news_index` values('168','15','1','1464192077','1452873682','1468585969','1');");
E_D("replace into `phome_ecms_news_index` values('169','36','1','1395769475','1459571386','1468588416','1');");
E_D("replace into `phome_ecms_news_index` values('170','35','1','1395771837','1459571573','1468588402','1');");
E_D("replace into `phome_ecms_news_index` values('171','34','1','1395771886','1459571739','1459571739','1');");
E_D("replace into `phome_ecms_news_index` values('172','33','1','1395771917','1459571913','1459571913','1');");
E_D("replace into `phome_ecms_news_index` values('173','32','1','1395771950','1459572003','1470760981','1');");
E_D("replace into `phome_ecms_news_index` values('174','31','1','1395771981','1459572125','1459572125','1');");
E_D("replace into `phome_ecms_news_index` values('175','30','1','1395772008','1459572304','1468588337','1');");
E_D("replace into `phome_ecms_news_index` values('176','29','1','1395772039','1459572416','1468588295','1');");

@include("../../inc/footer.php");
?>