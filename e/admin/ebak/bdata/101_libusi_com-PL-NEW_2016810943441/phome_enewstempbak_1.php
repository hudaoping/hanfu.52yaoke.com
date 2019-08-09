<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstempbak`;");
E_C("CREATE TABLE `phome_enewstempbak` (
  `bid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL DEFAULT '0',
  `modid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  `baktime` int(10) unsigned NOT NULL DEFAULT '0',
  `temptype` varchar(30) NOT NULL DEFAULT '',
  `gid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `lastuser` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`bid`),
  KEY `tempid` (`tempid`),
  KEY `temptype` (`temptype`),
  KEY `gid` (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstempbak` values('1','1','默认新闻内容模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>[!--pagetitle--] - ECMS</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"<?=esub(NoHtml(\$navinfor[newstext]),300)?>\\\\\" />\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]e/data/js/ajax.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"showpage news\\\\\">\r\n[!--temp.header--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n<td class=\\\\\"main\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n<tr>\r\n<td>您当前的位置：[!--newsnav--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" class=\\\\\"title_info\\\\\">\r\n<tr>\r\n<td><h1>[!--title--]</h1></td>\r\n</tr>\r\n<tr>\r\n<td class=\\\\\"info_text\\\\\">时间：[!--newstime--]&nbsp;&nbsp;来源：[!--befrom--]&nbsp;&nbsp;作者：[!--writer--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr>\r\n<td id=\\\\\"text\\\\\">[!--newstext--]\r\n<p align=\\\\\"center\\\\\" class=\\\\\"pageLink\\\\\">[!--page.url--]</p></td>\r\n</tr>\r\n</table>\r\n<table border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"8\\\\\">\r\n<tr>\r\n<td><table border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" class=\\\\\"digg\\\\\">\r\n<tr>\r\n<td class=\\\\\"diggnum\\\\\" id=\\\\\"diggnum\\\\\"><strong><script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]e/public/ViewClick/?classid=[!--classid--]&id=[!--id--]&down=5\\\\\"></script></strong></td>\r\n</tr>\r\n<tr>\r\n<td class=\\\\\"diggit\\\\\"><a href=\\\\\"JavaScript:makeRequest(\\\\''[!--news.url--]e/public/digg/?classid=[!--classid--]&id=[!--id--]&dotop=1&doajax=1&ajaxarea=diggnum\\\\'',\\\\''EchoReturnedText\\\\'',\\\\''GET\\\\'',\\\\''\\\\'');\\\\\">来顶一下</a></td>\r\n</tr>\r\n</table></td>\r\n<td><table border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" class=\\\\\"digg\\\\\">\r\n<tr>\r\n<td valign=\\\\\"middle\\\\\" class=\\\\\"diggnum\\\\\"><strong><a href=\\\\\"[!--news.url--]\\\\\"><img src=\\\\\"[!--news.url--]skin/default/images/back.gif\\\\\" alt=\\\\\"返回首页\\\\\" width=\\\\\"12\\\\\" height=\\\\\"13\\\\\" border=\\\\\"0\\\\\" align=\\\\\"absmiddle\\\\\" /></a></strong></td>\r\n</tr>\r\n<tr>\r\n<td class=\\\\\"diggit\\\\\"><a href=\\\\\"[!--news.url--]\\\\\">返回首页</a></td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n          </td>\r\n</tr>\r\n</table>\r\n[!--temp.pl--]\r\n</td>\r\n<td class=\\\\\"sider\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>推荐资讯</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"8\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[phomenewspic]\\\\''news\\\\'',2,4,128,90,1,20,20[/phomenewspic]\r\n</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>相关文章</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ul>\r\n[!--other.link--]\r\n</ul></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>栏目更新</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ul>\r\n              <script src=\\\\''[!--news.url--]d/js/class/class[!--self.classid--]_newnews.js\\\\''></script></ul></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>栏目热门</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ul>\r\n              <script src=\\\\''[!--news.url--]d/js/class/class[!--self.classid--]_hotnews.js\\\\''></script></ul></td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n[!--temp.footer--]\r\n[!--page.stats--]\r\n</body>\r\n</html>','0','0','','0','1','Y-m-d H:i:s','0','0','0','1452800700','newstemp','2','adm1n');");
E_D("replace into `phome_enewstempbak` values('2','1','默认新闻内容模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>[!--pagetitle--] - Powered by EmpireCMS</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"<?=esub(NoHtml(\$navinfor[newstext]),300)?>\\\\\" />\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]e/data/js/ajax.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"showpage news\\\\\">\r\n[!--temp.header--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n<td class=\\\\\"main\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n<tr>\r\n<td>您当前的位置：[!--newsnav--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" class=\\\\\"title_info\\\\\">\r\n<tr>\r\n<td><h1>[!--title--]</h1></td>\r\n</tr>\r\n<tr>\r\n<td class=\\\\\"info_text\\\\\">时间：[!--newstime--]&nbsp;&nbsp;来源：[!--befrom--]&nbsp;&nbsp;作者：[!--writer--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr>\r\n<td id=\\\\\"text\\\\\">[!--newstext--]\r\n<p align=\\\\\"center\\\\\" class=\\\\\"pageLink\\\\\">[!--page.url--]</p></td>\r\n</tr>\r\n</table>\r\n<table border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"8\\\\\">\r\n<tr>\r\n<td><table border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" class=\\\\\"digg\\\\\">\r\n<tr>\r\n<td class=\\\\\"diggnum\\\\\" id=\\\\\"diggnum\\\\\"><strong><script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]e/public/ViewClick/?classid=[!--classid--]&id=[!--id--]&down=5\\\\\"></script></strong></td>\r\n</tr>\r\n<tr>\r\n<td class=\\\\\"diggit\\\\\"><a href=\\\\\"JavaScript:makeRequest(\\\\''[!--news.url--]e/public/digg/?classid=[!--classid--]&id=[!--id--]&dotop=1&doajax=1&ajaxarea=diggnum\\\\'',\\\\''EchoReturnedText\\\\'',\\\\''GET\\\\'',\\\\''\\\\'');\\\\\">来顶一下</a></td>\r\n</tr>\r\n</table></td>\r\n<td><table border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" class=\\\\\"digg\\\\\">\r\n<tr>\r\n<td valign=\\\\\"middle\\\\\" class=\\\\\"diggnum\\\\\"><strong><a href=\\\\\"[!--news.url--]\\\\\"><img src=\\\\\"[!--news.url--]skin/default/images/back.gif\\\\\" alt=\\\\\"返回首页\\\\\" width=\\\\\"12\\\\\" height=\\\\\"13\\\\\" border=\\\\\"0\\\\\" align=\\\\\"absmiddle\\\\\" /></a></strong></td>\r\n</tr>\r\n<tr>\r\n<td class=\\\\\"diggit\\\\\"><a href=\\\\\"[!--news.url--]\\\\\">返回首页</a></td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n          </td>\r\n</tr>\r\n</table>\r\n[!--temp.pl--]\r\n</td>\r\n<td class=\\\\\"sider\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>推荐资讯</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"8\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[phomenewspic]\\\\''news\\\\'',2,4,128,90,1,20,20[/phomenewspic]\r\n</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>相关文章</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ul>\r\n[!--other.link--]\r\n</ul></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>栏目更新</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ul>\r\n              <script src=\\\\''[!--news.url--]d/js/class/class[!--self.classid--]_newnews.js\\\\''></script></ul></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>栏目热门</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ul>\r\n              <script src=\\\\''[!--news.url--]d/js/class/class[!--self.classid--]_hotnews.js\\\\''></script></ul></td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n[!--temp.footer--]\r\n[!--page.stats--]\r\n</body>\r\n</html>','0','0','','0','1','Y-m-d H:i:s','0','0','0','1452800721','newstemp','1','adm1n');");
E_D("replace into `phome_enewstempbak` values('3','1',' ecms109-默认新闻内容模板','<!DOCTYPE HTML>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<meta http-equiv=\\\\\"X-UA-Compatible\\\\\" content=\\\\\"IE=11,IE=10,IE=9,IE=8\\\\\">\r\n<meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\\\\\">\r\n<title>[!--pagetitle--]-<?=\$public_r[sitename]?></title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"<?=esub(NoHtml(\$navinfor[newstext]),300)?>\\\\\" />\r\n<meta name=\\\\\"apple-mobile-web-app-title\\\\\" content=\\\\\"[!--pagetitle--]\\\\\">\r\n<link rel=\\\\''stylesheet\\\\'' id=\\\\''_bootstrap-css\\\\''  href=\\\\''[!--news.url--]skin/ecms109/css/bootstrap.min.css?ver=1.3\\\\'' type=\\\\''text/css\\\\'' media=\\\\''all\\\\'' />\r\n<link rel=\\\\''stylesheet\\\\'' id=\\\\''_fontawesome-css\\\\''  href=\\\\''[!--news.url--]skin/ecms109/css/font-awesome.min.css?ver=1.3\\\\'' type=\\\\''text/css\\\\'' media=\\\\''all\\\\'' />\r\n<link rel=\\\\''stylesheet\\\\'' id=\\\\''_main-css\\\\''  href=\\\\''[!--news.url--]skin/ecms109/css/main.css?ver=1.3\\\\'' type=\\\\''text/css\\\\'' media=\\\\''all\\\\'' />\r\n<script type=\\\\''text/javascript\\\\'' src=\\\\''[!--news.url--]skin/ecms109/js/jquery.min.js?ver=1.3\\\\''></script>\r\n<link rel=\\\\\"shortcut icon\\\\\" href=\\\\\"[!--news.url--]skin/ecms109/img/favicon.ico\\\\\">\r\n<!--[if lt IE 9]><script src=\\\\\"[!--news.url--]skin/ecms109/js/html5.min.js\\\\\"></script><![endif]-->\r\n</head>\r\n<body class=\\\\\"single single-post postid-70 single-format-standard nav_fixed p_indent comment-open site-layout-2\\\\\">\r\n<header class=\\\\\"header\\\\\">\r\n	<div class=\\\\\"container\\\\\">\r\n		<div class=\\\\\"logo\\\\\"><a href=\\\\\"[!--news.url--]\\\\\" title=\\\\\"<?=\$public_r[sitename]?>\\\\\"><img src=\\\\\"[!--news.url--]skin/ecms109/img/logo.png\\\\\"><?=\$public_r[sitename]?></a></div>		<div class=\\\\\"brand\\\\\">欢迎光临\r\n<br>我们一直在努力</div>		<ul class=\\\\\"site-nav site-navbar\\\\\">\r\n			<li id=\\\\\"menu-item-6\\\\\" class=\\\\\"menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-6\\\\\"><a href=\\\\\"[!--news.url--]\\\\\"><i class=\\\\\"fa fa-home\\\\\"></i> 首页</a></li>\r\n[showclasstemp]\\\\''0\\\\'',13,0,0[/showclasstemp]<?=\$public_r[\\\\''add_navigation-toggle\\\\'']?> \r\n\r\n							<li class=\\\\\"navto-search\\\\\"><a href=\\\\\"javascript:;\\\\\" class=\\\\\"search-show active\\\\\"><i class=\\\\\"fa fa-search\\\\\"></i></a></li>\r\n					</ul>\r\n		<div class=\\\\\"topbar\\\\\">\r\n			<ul class=\\\\\"site-nav topmenu\\\\\">\r\n<?=\$public_r[\\\\''add_topmenu\\\\'']?>\r\n				<li class=\\\\\"menusns\\\\\">\r\n					<a href=\\\\\"javascript:;\\\\\">关注本站 <i class=\\\\\"fa fa-angle-down\\\\\"></i></a>\r\n					<ul class=\\\\\"sub-menu\\\\\">\r\n<li><a class=\\\\\"sns-wechat\\\\\" href=\\\\\"javascript:;\\\\\" title=\\\\\"关注”<?=\$public_r[sitename]?>“\\\\\" data-src=\\\\\"[!--news.url--]skin/ecms109/img/weixin.jpg\\\\\"><i class=\\\\\"fa fa-wechat\\\\\"></i> 微信</a></li>						\r\n<li><a target=\\\\\"_blank\\\\\" rel=\\\\\"external nofollow\\\\\" href=\\\\\"<?=\$public_r[\\\\''add_weibo\\\\'']?>\\\\\"><i class=\\\\\"fa fa-weibo\\\\\"></i> 微博</a></li>						\r\n<li><a target=\\\\\"_blank\\\\\" rel=\\\\\"external nofollow\\\\\" href=\\\\\"<?=\$public_r[\\\\''add_tencent-weibo\\\\'']?>\\\\\"><i class=\\\\\"fa fa-tencent-weibo\\\\\"></i> 腾讯微博</a></li>																		\r\n<li><a target=\\\\\"_blank\\\\\" href=\\\\\"[!--news.url--]e/web/?type=rss2&classid=[!--self.classid--]\\\\\"><i class=\\\\\"fa fa-rss\\\\\"></i> RSS订阅</a></li>					</ul>\r\n				</li>\r\n			</ul>\r\n											<a href=\\\\\"[!--news.url--]e/member/login/\\\\\" class=\\\\\"signin-loader\\\\\">Hi, 请登录</a>\r\n				&nbsp; &nbsp; <a href=\\\\\"[!--news.url--]e/member/register/ChangeRegister.php\\\\\" class=\\\\\"signup-loader\\\\\">我要注册</a>\r\n				&nbsp; &nbsp; <a href=\\\\\"[!--news.url--]e/member/GetPassword/\\\\\">找回密码</a>\r\n					</div>\r\n		<i class=\\\\\"fa fa-bars m-icon-nav\\\\\"></i>\r\n	</div>\r\n</header>\r\n<div class=\\\\\"site-search\\\\\">\r\n	<div class=\\\\\"container\\\\\">\r\n<form onsubmit=\\\\\"return checkSearchForm()\\\\\" class=\\\\\"site-search-form\\\\\" name=\\\\\"q\\\\\" id=\\\\\"searchform\\\\\" target=\\\\\"_blank\\\\\" action=\\\\\"http://zhannei.baidu.com/cse/site\\\\\">\r\n<input class=\\\\\"search-input\\\\\" name=\\\\\"q\\\\\" size=\\\\\"30\\\\\" id=\\\\\"s\\\\\" type=\\\\\"text\\\\\" placeholder=\\\\\"输入关键字\\\\\" value=\\\\\"\\\\\">\r\n<button class=\\\\\"search-btn\\\\\" type=\\\\\"submit\\\\\"><i class=\\\\\"fa fa-search\\\\\"></i></button>\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"cc\\\\\" value=\\\\\"[!--news.url--]\\\\\">\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"ie\\\\\" value=\\\\\"utf-8\\\\\">\r\n</form>\r\n	</div>\r\n</div><section class=\\\\\"container\\\\\">\r\n	<div class=\\\\\"content-wrap\\\\\">\r\n	<div class=\\\\\"content\\\\\">\r\n				<header class=\\\\\"article-header\\\\\">\r\n			<h1 class=\\\\\"article-title\\\\\"><a href=\\\\\"[!--titleurl--]\\\\\">[!--pagetitle--]</a></h1>\r\n			<div class=\\\\\"article-meta\\\\\">\r\n				<span class=\\\\\"item\\\\\">[!--newstime--]</span>\r\n								<span class=\\\\\"item\\\\\">来源：[!--befrom--]</span>				<span class=\\\\\"item\\\\\">分类：<a href=\\\\\"[!--class.url--]\\\\\" rel=\\\\\"category tag\\\\\">[!--class.name--]</a></span>        <span class=\\\\\"item\\\\\"><i class=\\\\\"fa fa-eye\\\\\"></i>阅读(<script src=\\\\\"[!--news.url--]e/public/ViewClick/?classid=[!--classid--]&id=[!--id--]&addclick=1\\\\\"></script>)</span>                         <span class=\\\\\"item\\\\\"><a class=\\\\\"pc\\\\\" href=\\\\\"[!--titleurl--]#comments\\\\\"><i class=\\\\\"fa fa-comments-o\\\\\"></i>查看评论</a></span>\r\n			</div>\r\n		</header>\r\n		<article class=\\\\\"article-content\\\\\">\r\n						<p>[!--newstext--]</p>\r\n<p class=\\\\\"post-copyright\\\\\">未经允许不得转载：<a href=\\\\\"[!--titleurl--]\\\\\">[!--pagetitle--]</a></p>\r\n<div class=\\\\\"page5\\\\\">[!--page.url--]</div>\r\n		</article>\r\n								<div class=\\\\\"action-share bdsharebuttonbox\\\\\">\r\n			<span>分享到：</span><a class=\\\\\"bds_qzone\\\\\" data-cmd=\\\\\"qzone\\\\\"></a><a class=\\\\\"bds_tsina\\\\\" data-cmd=\\\\\"tsina\\\\\"></a><a class=\\\\\"bds_weixin\\\\\" data-cmd=\\\\\"weixin\\\\\"></a><a class=\\\\\"bds_tqq\\\\\" data-cmd=\\\\\"tqq\\\\\"></a><a class=\\\\\"bds_sqq\\\\\" data-cmd=\\\\\"sqq\\\\\"></a><a class=\\\\\"bds_bdhome\\\\\" data-cmd=\\\\\"bdhome\\\\\"></a><a class=\\\\\"bds_tqf\\\\\" data-cmd=\\\\\"tqf\\\\\"></a><a class=\\\\\"bds_renren\\\\\" data-cmd=\\\\\"renren\\\\\"></a><a class=\\\\\"bds_diandian\\\\\" data-cmd=\\\\\"diandian\\\\\"></a><a class=\\\\\"bds_youdao\\\\\" data-cmd=\\\\\"youdao\\\\\"></a><a class=\\\\\"bds_ty\\\\\" data-cmd=\\\\\"ty\\\\\"></a><a class=\\\\\"bds_kaixin001\\\\\" data-cmd=\\\\\"kaixin001\\\\\"></a><a class=\\\\\"bds_taobao\\\\\" data-cmd=\\\\\"taobao\\\\\"></a><a class=\\\\\"bds_douban\\\\\" data-cmd=\\\\\"douban\\\\\"></a><a class=\\\\\"bds_fbook\\\\\" data-cmd=\\\\\"fbook\\\\\"></a><a class=\\\\\"bds_twi\\\\\" data-cmd=\\\\\"twi\\\\\"></a><a class=\\\\\"bds_mail\\\\\" data-cmd=\\\\\"mail\\\\\"></a><a class=\\\\\"bds_copy\\\\\" data-cmd=\\\\\"copy\\\\\"></a><a class=\\\\\"bds_more\\\\\" data-cmd=\\\\\"more\\\\\">更多</a> </div>\r\n		<div class=\\\\\"article-tags\\\\\">标签：[showtags]\\\\''selfinfo\\\\'',100,0,\\\\''\\\\'',0,r,\\\\''&nbsp;\\\\'',0,\\\\''\\\\''[/showtags]</div>\r\n				<div class=\\\\\"relates\\\\\"><div class=\\\\\"title\\\\\"><h3>相关推荐</h3></div><ul>[otherlink]20,\\\\''\\\\'',10,32,0,0,0[/otherlink]</ul></div>\r\n<div class=\\\\\"title\\\\\" id=\\\\\"comments\\\\\">\r\n	<h3>评论</h3>\r\n</div>\r\n<div id=\\\\\"respond\\\\\" class=\\\\\"no_webshot\\\\\">\r\n		\r\n		<p>\r\n			<?=\$public_r[\\\\''add_changyan\\\\'']?>	</p>\r\n	</div>\r\n	</div>\r\n<div id=\\\\\"postcomments\\\\\">\r\n\r\n	<div class=\\\\\"pagenav\\\\\">\r\n			</div>\r\n</div>\r\n	</div>\r\n	</div>\r\n	<aside class=\\\\\"sidebar\\\\\">\r\n<div class=\\\\\"widget widget_ui_textasb\\\\\">[ecmsinfo]\\\\''selfinfo\\\\'',1,32,0,2,17,0,\\\\''isgood=2\\\\''[/ecmsinfo]</div><div class=\\\\\"widget widget_ui_ads\\\\\"><div class=\\\\\"item\\\\\"><?=\$public_r[\\\\''add_acmsd-01\\\\'']?></div></div>\r\n<div class=\\\\\"widget widget_ui_posts\\\\\"><h3>置顶推荐</h3><ul>\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,32,0,2,18,0,\\\\''isgood=1\\\\''[/ecmsinfo]\r\n</ul></div><div class=\\\\\"widget widget_ui_ads\\\\\"><div class=\\\\\"item\\\\\"><?=\$public_r[\\\\''add_acmsd-02\\\\'']?></div></div><div class=\\\\\"widget widget_ui_posts\\\\\"><h3>热门文章</h3><ul>\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,32,0,1,18,0[/ecmsinfo]\r\n</ul></div><div class=\\\\\"widget widget_ui_ads\\\\\"><div class=\\\\\"item\\\\\"><?=\$public_r[\\\\''add_acmsd-03\\\\'']?></div></div>\r\n<div class=\\\\\"widget widget_ui_tags\\\\\"><h3>热门标签</h3><div class=\\\\\"items\\\\\">[showtags]\\\\''\\\\'',30,3,\\\\''num desc\\\\'',0,\\\\''\\\\'',\\\\'' \\\\'',1,\\\\''\\\\'',\\\\''tagname\\\\''[/showtags]</div></div></aside></section>\r\n<div class=\\\\\"branding branding-black\\\\\">\r\n	<?=\$public_r[\\\\''add_footer\\\\'']?>\r\n		<p>&copy; 2015 <a href=\\\\\"[!--news.url--]\\\\\"><?=\$public_r[sitename]?></a></p>\r\n		<div class=\\\\\"hide\\\\\">\r\n\r\n</div>	</div>\r\n</footer>\r\n\r\n<script>\r\nwindow.jsui={\r\n    www: \\\\'' \\\\'',\r\n    uri: \\\\''[!--news.url--]skin/ecms109\\\\'',\r\n    ver: \\\\''1.3\\\\'',\r\n	roll: [\\\\\"1\\\\\",\\\\\"2\\\\\"],\r\n    ajaxpager: \\\\''5\\\\'',\r\n    url_rp: \\\\'' \\\\''\r\n};\r\n</script>\r\n<script type=\\\\''text/javascript\\\\'' src=\\\\''[!--news.url--]skin/ecms109/js/bootstrap.min.js?ver=1.3\\\\''></script>\r\n<script type=\\\\''text/javascript\\\\'' src=\\\\''[!--news.url--]skin/ecms109/js/loader.js?ver=1.3\\\\''></script>\r\n</body>\r\n</html>','0','0','','0','1','Y-m-d H:i:s','0','0','0','1452802814','newstemp','2','adm1n');");
E_D("replace into `phome_enewstempbak` values('4','1','','<!DOCTYPE HTML>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<meta http-equiv=\\\\\"X-UA-Compatible\\\\\" content=\\\\\"IE=11,IE=10,IE=9,IE=8\\\\\">\r\n<meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\\\\\">\r\n<title><?=\$public_r[sitename]?></title>\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"apple-mobile-web-app-title\\\\\" content=\\\\\"<?=\$public_r[sitename]?>\\\\\">\r\n<link rel=\\\\''stylesheet\\\\'' id=\\\\''_bootstrap-css\\\\''  href=\\\\''[!--news.url--]skin/ecms109/css/bootstrap.min.css?ver=1.3\\\\'' type=\\\\''text/css\\\\'' media=\\\\''all\\\\'' />\r\n<link rel=\\\\''stylesheet\\\\'' id=\\\\''_fontawesome-css\\\\''  href=\\\\''[!--news.url--]skin/ecms109/css/font-awesome.min.css?ver=1.3\\\\'' type=\\\\''text/css\\\\'' media=\\\\''all\\\\'' />\r\n<link rel=\\\\''stylesheet\\\\'' id=\\\\''_main-css\\\\''  href=\\\\''[!--news.url--]skin/ecms109/css/main.css?ver=1.3\\\\'' type=\\\\''text/css\\\\'' media=\\\\''all\\\\'' />\r\n<script type=\\\\''text/javascript\\\\'' src=\\\\''[!--news.url--]skin/ecms109/js/jquery.min.js?ver=1.3\\\\''></script>\r\n<link rel=\\\\\"shortcut icon\\\\\" href=\\\\\"[!--news.url--]skin/ecms109/img/favicon.ico\\\\\">\r\n<!--[if lt IE 9]><script src=\\\\\"[!--news.url--]skin/ecms109/js/html5.min.js\\\\\"></script><![endif]-->\r\n</head>\r\n<body class=\\\\\"home blog nav_fixed site-layout-2\\\\\">\r\n<header class=\\\\\"header\\\\\">\r\n	<div class=\\\\\"container\\\\\">\r\n		<h1 class=\\\\\"logo\\\\\"><a href=\\\\\"[!--news.url--]\\\\\" title=\\\\\"<?=\$public_r[sitename]?>\\\\\"><img src=\\\\\"[!--news.url--]skin/ecms109/img/logo.png\\\\\"><?=\$public_r[sitename]?></a></h1>		\r\n<div class=\\\\\"brand\\\\\">欢迎光临<br>我们一直在努力</div>		<ul class=\\\\\"site-nav site-navbar\\\\\">\r\n<li id=\\\\\"menu-item-6\\\\\" class=\\\\\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-6\\\\\"><a href=\\\\\"[!--news.url--]\\\\\"><i class=\\\\\"fa fa-home\\\\\"></i> 首页</a></li>\r\n[showclasstemp]\\\\''0\\\\'',13,0,0[/showclasstemp]<?=\$public_r[\\\\''add_navigation-toggle\\\\'']?> \r\n\r\n							<li class=\\\\\"navto-search\\\\\"><a href=\\\\\"javascript:;\\\\\" class=\\\\\"search-show active\\\\\"><i class=\\\\\"fa fa-search\\\\\"></i></a></li>\r\n					</ul>\r\n		<div class=\\\\\"topbar\\\\\">\r\n			<ul class=\\\\\"site-nav topmenu\\\\\">\r\n<?=\$public_r[\\\\''add_topmenu\\\\'']?>\r\n				<li class=\\\\\"menusns\\\\\">\r\n					<a href=\\\\\"javascript:;\\\\\">关注本站 <i class=\\\\\"fa fa-angle-down\\\\\"></i></a>\r\n					<ul class=\\\\\"sub-menu\\\\\">\r\n<li><a class=\\\\\"sns-wechat\\\\\" href=\\\\\"javascript:;\\\\\" title=\\\\\"关注”<?=\$public_r[sitename]?>“\\\\\" data-src=\\\\\"[!--news.url--]skin/ecms109/img/weixin.jpg\\\\\"><i class=\\\\\"fa fa-wechat\\\\\"></i> 微信</a></li>						\r\n<li><a target=\\\\\"_blank\\\\\" rel=\\\\\"external nofollow\\\\\" href=\\\\\"<?=\$public_r[\\\\''add_weibo\\\\'']?>\\\\\"><i class=\\\\\"fa fa-weibo\\\\\"></i> 微博</a></li>						\r\n<li><a target=\\\\\"_blank\\\\\" rel=\\\\\"external nofollow\\\\\" href=\\\\\"<?=\$public_r[\\\\''add_tencent-weibo\\\\'']?>\\\\\"><i class=\\\\\"fa fa-tencent-weibo\\\\\"></i> 腾讯微博</a></li>																		\r\n<li><a target=\\\\\"_blank\\\\\" href=\\\\\"[!--news.url--]e/web/?type=rss2&classid=[!--self.classid--]\\\\\"><i class=\\\\\"fa fa-rss\\\\\"></i> RSS订阅</a></li>					</ul>\r\n				</li>\r\n			</ul>\r\n											<a href=\\\\\"[!--news.url--]e/member/login/\\\\\" class=\\\\\"signin-loader\\\\\">Hi, 请登录</a>\r\n				&nbsp; &nbsp; <a href=\\\\\"[!--news.url--]e/member/register/ChangeRegister.php\\\\\" class=\\\\\"signup-loader\\\\\">我要注册</a>\r\n				&nbsp; &nbsp; <a href=\\\\\"[!--news.url--]e/member/GetPassword/\\\\\">找回密码</a>\r\n					</div>\r\n		<i class=\\\\\"fa fa-bars m-icon-nav\\\\\"></i>\r\n	</div>\r\n</header>\r\n<div class=\\\\\"site-search\\\\\">\r\n	<div class=\\\\\"container\\\\\">\r\n<form onsubmit=\\\\\"return checkSearchForm()\\\\\" class=\\\\\"site-search-form\\\\\" name=\\\\\"q\\\\\" id=\\\\\"searchform\\\\\" target=\\\\\"_blank\\\\\" action=\\\\\"http://zhannei.baidu.com/cse/site\\\\\">\r\n<input class=\\\\\"search-input\\\\\" name=\\\\\"q\\\\\" size=\\\\\"30\\\\\" id=\\\\\"s\\\\\" type=\\\\\"text\\\\\" placeholder=\\\\\"输入关键字\\\\\" value=\\\\\"\\\\\">\r\n<button class=\\\\\"search-btn\\\\\" type=\\\\\"submit\\\\\"><i class=\\\\\"fa fa-search\\\\\"></i></button>\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"cc\\\\\" value=\\\\\"[!--news.url--]\\\\\">\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"ie\\\\\" value=\\\\\"utf-8\\\\\">\r\n</form>\r\n</div>\r\n</div><section class=\\\\\"container\\\\\">\r\n	<div class=\\\\\"content-wrap\\\\\">\r\n	<div class=\\\\\"content\\\\\">\r\n		<div id=\\\\\"focusslide\\\\\" class=\\\\\"carousel slide\\\\\" data-ride=\\\\\"carousel\\\\\"><ol class=\\\\\"carousel-indicators\\\\\"><li data-target=\\\\\"#focusslide\\\\\" data-slide-to=\\\\\"0\\\\\" class=\\\\\"active\\\\\"></li><li data-target=\\\\\"#focusslide\\\\\" data-slide-to=\\\\\"1\\\\\"></li></ol><div class=\\\\\"carousel-inner\\\\\" role=\\\\\"listbox\\\\\">\r\n<?=\$public_r[\\\\''add_flashpic\\\\'']?>\r\n</div><a class=\\\\\"left carousel-control\\\\\" href=\\\\\"#focusslide\\\\\" role=\\\\\"button\\\\\" data-slide=\\\\\"prev\\\\\"><i class=\\\\\"fa fa-angle-left\\\\\"></i></a><a class=\\\\\"right carousel-control\\\\\" href=\\\\\"#focusslide\\\\\" role=\\\\\"button\\\\\" data-slide=\\\\\"next\\\\\"><i class=\\\\\"fa fa-angle-right\\\\\"></i></a></div>\r\n[ecmsinfo]\\\\''news\\\\'',1,32,0,18,14,0,\\\\''firsttitle=2\\\\''[/ecmsinfo]	<div class=\\\\\"title\\\\\">\r\n			<h3>\r\n				最新发布							</h3>\r\n			<div class=\\\\\"more\\\\\"><a href=\\\\\"#\\\\\">热门标签</a>[showtags]\\\\''\\\\'',5,0,\\\\''\\\\'',0,\\\\''\\\\'',\\\\'' \\\\'',0,\\\\''\\\\'',\\\\''tagname\\\\''[/showtags]</div></div>\r\n		 [ecmsinfo]0,30,36,1,3,15,0[/ecmsinfo]\r\n <br />\r\n	</div>\r\n	</div>\r\n	<aside class=\\\\\"sidebar\\\\\">\r\n	<div class=\\\\\"widget widget-tops\\\\\">\r\n		<ul class=\\\\\"widget-nav\\\\\">\r\n			<li class=\\\\\"active\\\\\">网站公告</li>			<li>会员中心</li>		</ul>\r\n		<ul class=\\\\\"widget-navcontent\\\\\">\r\n							<li class=\\\\\"item item-01 active\\\\\">\r\n					<ul>\r\n[ecmsinfo]\\\\''news\\\\'',5,32,0,18,19,0,\\\\''isgood=3\\\\''[/ecmsinfo]                                      </ul>\r\n				</li>\r\n										<li class=\\\\\"item item-02\\\\\">\r\n											<h4>需要登录才能进入会员中心</h4>\r\n						<p>\r\n							<a href=\\\\\"[!--news.url--]e/member/login/\\\\\" class=\\\\\"btn btn-primary signin-loader\\\\\">立即登录</a>\r\n							<a href=\\\\\"[!--news.url--]e/member/register/ChangeRegister.php\\\\\" class=\\\\\"btn btn-default signup-loader\\\\\">现在注册</a>\r\n						</p>\r\n									</li>\r\n					</ul>\r\n	</div>\r\n<div class=\\\\\"widget widget_ui_textasb\\\\\">[ecmsinfo]\\\\''news\\\\'',1,32,0,18,17,0,\\\\''isgood=2\\\\''[/ecmsinfo]</div><div class=\\\\\"widget widget_ui_ads\\\\\"><div class=\\\\\"item\\\\\"><?=\$public_r[\\\\''add_acmsd-01\\\\'']?></div></div>\r\n<div class=\\\\\"widget widget_ui_posts\\\\\"><h3>置顶推荐</h3><ul>\r\n[ecmsinfo]\\\\''news\\\\'',10,32,0,20,18,0,\\\\''isgood=1\\\\''[/ecmsinfo]\r\n</ul></div><div class=\\\\\"widget widget_ui_ads\\\\\"><div class=\\\\\"item\\\\\"><?=\$public_r[\\\\''add_acmsd-02\\\\'']?></div></div><div class=\\\\\"widget widget_ui_posts\\\\\"><h3>热门文章</h3><ul>\r\n[ecmsinfo]\\\\''news\\\\'',10,32,0,19,18,0[/ecmsinfo]\r\n</ul></div><div class=\\\\\"widget widget_ui_ads\\\\\"><div class=\\\\\"item\\\\\"><?=\$public_r[\\\\''add_acmsd-03\\\\'']?></div></div>\r\n<div class=\\\\\"widget widget_ui_tags\\\\\"><h3>热门标签</h3><div class=\\\\\"items\\\\\">[showtags]\\\\''\\\\'',30,3,\\\\''num desc\\\\'',0,\\\\''\\\\'',\\\\'' \\\\'',1,\\\\''\\\\'',\\\\''tagname\\\\''[/showtags]\r\n</div></aside></section>\r\n<div class=\\\\\"branding branding-black\\\\\">\r\n	<?=\$public_r[\\\\''add_footer\\\\'']?>\r\n		<p>&copy; 2015 <a href=\\\\\"[!--news.url--]\\\\\"><?=\$public_r[sitename]?></a></p>\r\n		<div class=\\\\\"hide\\\\\">\r\n\r\n</div>	</div>\r\n</footer>\r\n\r\n<script>\r\nwindow.jsui={\r\n    www: \\\\'' \\\\'',\r\n    uri: \\\\''[!--news.url--]skin/ecms109\\\\'',\r\n    ver: \\\\''1.3\\\\'',\r\n	roll: [\\\\\"1\\\\\",\\\\\"2\\\\\"],\r\n    ajaxpager: \\\\''5\\\\'',\r\n    url_rp: \\\\'' \\\\''\r\n};\r\n</script>\r\n<script type=\\\\''text/javascript\\\\'' src=\\\\''[!--news.url--]skin/ecms109/js/bootstrap.min.js?ver=1.3\\\\''></script>\r\n<script type=\\\\''text/javascript\\\\'' src=\\\\''[!--news.url--]skin/ecms109/js/loader.js?ver=1.3\\\\''></script>\r\n</body>\r\n</html>','0','0','','0','0','','0','0','0','1452871546','pubindextemp','2','adm1n');");

@include("../../inc/footer.php");
?>