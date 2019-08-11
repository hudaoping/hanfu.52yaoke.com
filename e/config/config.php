<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
define('EmpireCMSConfig',TRUE);
$ecms_config=array();

//数据库设置
$ecms_config['db']['usedb']='mysql';	//数据库类型
$ecms_config['db']['dbver']='5.0';	//数据库版本
$ecms_config['db']['dbserver']='localhost';	//数据库登录地址
$ecms_config['db']['dbport']='';	//端口，不填为按默认
$ecms_config['db']['dbusername']='myhanfu';	//数据库用户名
$ecms_config['db']['dbpassword']='fbbyFWE8YRztpLA7';	//数据库密码
$ecms_config['db']['dbname']='myhanfu';	//数据库名
$ecms_config['db']['setchar']='utf8';	//设置默认编码
$ecms_config['db']['dbchar']='utf8';	//数据库默认编码
$ecms_config['db']['dbtbpre']='phome_';	//数据表前缀
$dbtbpre=$ecms_config['db']['dbtbpre'];	//数据表前缀
$ecms_config['db']['showerror']=1;	//显示SQL错误提示(0为不显示,1为显示)


//页面编码设置
$ecms_config['sets']['pagechar']='utf-8';	//安装帝国CMS的编码版本
$ecms_config['sets']['setpagechar']=1;	//页面默认字符集,0=关闭 1=开启
$ecms_config['sets']['elang']='gb';	//语言包

//后台相关配置
$ecms_config['esafe']['openonlinesetting']=3;	//开启后台在线配置参数(0为关闭,1为开启防火墙配置,2为开启安全配置,3为全开启)
$ecms_config['esafe']['openeditdttemp']=1;	//开启后台在线修改动态模板(0为关闭,1为开启)

//易通行系统配置
$ecms_config['epassport']['open']=0;	//是否开启易通行系统(1为开启，0为关闭)

//其它配置
$ecms_config['sets']['txtpath']=ECMS_PATH.'d/txt/';	//文本型数据存放目录
$ecms_config['sets']['saveurlimgclearurl']=0;	//远程保存图片自动去除图片的链接(0为保留,1为去除)
$ecms_config['sets']['deftempid']=0;	//默认模板组ID
$ecms_config['sets']['selfmoreportid']=0;	//当前网站访问端ID,0为主访问端



//-------EmpireCMS.Seting.member-------

//会员系统相关配置
$ecms_config['member']['tablename']="{$dbtbpre}enewsmember";	//会员表
$user_tablename=$ecms_config['member']['tablename'];	//会员表
$ecms_config['member']['changeregisterurl']="ChangeRegister.php";    //多会员组中转注册地址
$ecms_config['member']['registerurl']="";							//会员注册地址
$ecms_config['member']['loginurl']="";								//会员登录地址
$ecms_config['member']['quiturl']="";								//会员退出地址
$ecms_config['member']['chmember']=0;//是否使用原版会员表信息,0为原版,1为非原版
$ecms_config['member']['pwtype']=2;//密码保存形式,0为md5,1为明码,2为双重加密,3为16位md5
$ecms_config['member']['regtimetype']=1;//注册时间保存格式,0为正常时间,1为数值型
$ecms_config['member']['regcookietime']=0;//注册后登录保存时间(秒)
$ecms_config['member']['defgroupid']=0;//注册时会员组ID(ecms的会员组,0为后台默认)
$ecms_config['member']['saltnum']=6;//SALT随机码字符数
$ecms_config['member']['utfdata']=0;//数据是否是GBK编码,0为正常数据,1为GBK编码

$ecms_config['memberf']['userid']='userid';//用户ID字段
$ecms_config['memberf']['username']='username';//用户名字段
$ecms_config['memberf']['password']='password';//密码字段
$ecms_config['memberf']['rnd']='rnd';//随机密码字段
$ecms_config['memberf']['email']='email';//邮箱字段
$ecms_config['memberf']['registertime']='registertime';//注册时间字段
$ecms_config['memberf']['groupid']='groupid';//会员组字段
$ecms_config['memberf']['userfen']='userfen';//积分字段
$ecms_config['memberf']['userdate']='userdate';//有效期字段
$ecms_config['memberf']['money']='money';//帐户余额字段
$ecms_config['memberf']['zgroupid']='zgroupid';//到期转向会员组字段
$ecms_config['memberf']['havemsg']='havemsg';//提示短消息字段
$ecms_config['memberf']['checked']='checked';//审核状态字段
$ecms_config['memberf']['salt']='salt';//SALT加密字段
$ecms_config['memberf']['userkey']='userkey';//用户密钥字段

//-------EmpireCMS.Seting.member-------




//-------EmpireCMS.Seting.area-------

//后台安全设置
$ecms_config['esafe']['loginauth']='';	//登录认证码,如果设置登录需要输入此认证码才能通过
$ecms_config['esafe']['ecookiernd']='Oh697LVcUTw32vU0q7GcNAS9Gf2Gbe';	//后台登录COOKIE认证码(填写10~50个任意字符，最好多种字符组合)
$ecms_config['esafe']['ckhloginip']=0;	//后台是否验证登录IP,0为不验证,1为验证
$ecms_config['esafe']['ckhsession']=0;	//后台是否启用SESSION验证,0为不验证,1为验证
$ecms_config['esafe']['ckhanytime']=0;	//后台随时认证码变更周期,单位:秒(0为不启用)
$ecms_config['esafe']['theloginlog']=0;	//是否记录登陆日志(0为记录,1为不记录)
$ecms_config['esafe']['thedolog']=0;		//是否记录操作日志(0为记录,1为不记录)
$ecms_config['esafe']['ckfromurl']=2;	//是否启用来源地址验证,0为不验证,1为全部验证,2为后台验证,3为前台验证
$ecms_config['esafe']['ckhash']=0;	//启用后台来源认证码,0为金刚模式验证,1为刺猬模式验证,2为关闭验证

//COOKIE设置
$ecms_config['cks']['ckdomain']='';		//cookie作用域
$ecms_config['cks']['ckpath']='/';		//cookie作用路径
$ecms_config['cks']['ckvarpre']='ocngg';		//前台cookie变量前缀
$ecms_config['cks']['ckadminvarpre']='onxly';		//后台cookie变量前缀
$ecms_config['cks']['ckrnd']='w9I12aYkrXB0m52rI1RZjyHX5qQI1g';	//COOKIE验证随机码(填写10~50个任意字符，最好多种字符组合)
$ecms_config['cks']['ckrndtwo']='exPVWKJ3Q6uwtDVbMwvt4zRLGpxI2B';	//COOKIE验证随机码2(填写10~50个任意字符，最好多种字符组合)

//网站防火墙配置
$ecms_config['fw']['eopen']=0;	//开启防火墙(0为关闭,1为开启)
$ecms_config['fw']['epass']='';	//防火墙加密密钥(填写10~50个任意字符，最好多种字符组合)
$ecms_config['fw']['adminloginurl']='';	//允许后台登陆的域名,设置后必须通过这个域名才能访问后台
$ecms_config['fw']['adminhour']='';	//允许登陆后台的时间：0~23小时，多个时间点用半角逗号格开
$ecms_config['fw']['adminweek']='';	//允许登陆后台的星期：星期0~6，多个星期用半角逗号格开
$ecms_config['fw']['adminckpassvar']='';	//后台预登陆验证变量名
$ecms_config['fw']['adminckpassval']='';	//后台预登陆认证码
$ecms_config['fw']['cleargettext']='';	//屏蔽提交敏感字符，多个用半角逗号格开

//-------EmpireCMS.Seting.area-------


//文件类型
$ecms_config['sets']['tranpicturetype']=',.jpg,.gif,.png,.bmp,.jpeg,';	//图片
$ecms_config['sets']['tranflashtype']=',.swf,.flv,.dcr,';	//FLASH
$ecms_config['sets']['mediaplayertype']=',.wmv,.asf,.wma,.mp3,.asx,.mid,.midi,';	//mediaplayer
$ecms_config['sets']['realplayertype']=',.rm,.ra,.rmvb,.mp4,.mov,.avi,.wav,.ram,.mpg,.mpeg,';	//realplayer




//***************** 以下部分为缓存，不用设置 **************

//-------EmpireCMS.Public.Cache-------

//------------e_public
$public_r=array('sitename'=>'爱汉服',
'newsurl'=>'http://hanfu.52yaoke.com/',
'filetype'=>'|.gif|.jpg|.swf|.rar|.zip|.mp3|.wmv|.txt|.doc|.png|',
'filesize'=>2048,
'relistnum'=>8,
'renewsnum'=>100,
'min_keyboard'=>4,
'max_keyboard'=>20,
'search_num'=>20,
'search_pagenum'=>10,
'newslink'=>0,
'checked'=>0,
'searchtime'=>30,
'loginnum'=>5,
'logintime'=>60,
'addnews_ok'=>0,
'register_ok'=>0,
'indextype'=>'.html',
'goodlencord'=>0,
'goodtype'=>'',
'searchtype'=>'.html',
'exittime'=>40,
'smalltextlen'=>200,
'defaultgroupid'=>1,
'fileurl'=>'/d/file/',
'install'=>0,
'phpmode'=>0,
'dorepnum'=>300,
'loadtempnum'=>50,
'bakdbpath'=>'bdata',
'bakdbzip'=>'zip',
'downpass'=>'9YCu4GZsROaHffl3DZUo',
'filechmod'=>1,
'loginkey_ok'=>1,
'tbname'=>'news',
'limittype'=>0,
'redodown'=>1,
'downsofttemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'onlinemovietemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'lctime'=>1222406370,
'candocode'=>1,
'opennotcj'=>0,
'listpagetemp'=>'页次：[!--thispage--]/[!--pagenum--]&nbsp;每页[!--lencord--]&nbsp;总数[!--num--]&nbsp;&nbsp;&nbsp;&nbsp;[!--pagelink--]&nbsp;&nbsp;&nbsp;&nbsp;转到:[!--options--]',
'reuserpagenum'=>50,
'revotejsnum'=>100,
'readjsnum'=>100,
'qaddtran'=>0,
'qaddtransize'=>50,
'ebakthisdb'=>1,
'delnewsnum'=>300,
'markpos'=>5,
'markimg'=>'../data/mark/maskdef.gif',
'marktext'=>'',
'markfontsize'=>'5',
'markfontcolor'=>'',
'markfont'=>'../data/mark/cour.ttf',
'adminloginkey'=>0,
'php_outtime'=>0,
'listpagefun'=>'sys_ShowListPage',
'textpagefun'=>'sys_ShowTextPage',
'adfile'=>'thea',
'notsaveurl'=>'',
'rssnum'=>50,
'rsssub'=>300,
'savetxtf'=>',article.newstext,',
'dorepdlevelnum'=>300,
'listpagelistfun'=>'sys_ShowListMorePage',
'listpagelistnum'=>10,
'infolinknum'=>100,
'searchgroupid'=>0,
'opencopytext'=>0,
'reuserjsnum'=>100,
'reuserlistnum'=>8,
'opentitleurl'=>1,
'searchtempvar'=>1,
'showinfolevel'=>0,
'navfh'=>'>',
'spicwidth'=>280,
'spicheight'=>210,
'spickill'=>1,
'jpgquality'=>80,
'markpct'=>65,
'redoview'=>24,
'reggetfen'=>0,
'regbooktime'=>30,
'revotetime'=>30,
'fpath'=>0,
'filepath'=>'',
'nreclass'=>',',
'nreinfo'=>',',
'nrejs'=>',',
'nottobq'=>',',
'defspacestyleid'=>1,
'canposturl'=>'',
'openspace'=>0,
'defadminstyle'=>1,
'realltime'=>0,
'closeip'=>'',
'openip'=>'',
'hopenip'=>'',
'textpagelistnum'=>6,
'memberlistlevel'=>0,
'ebakcanlistdb'=>0,
'keytog'=>2,
'keytime'=>30,
'keyrnd'=>'wtoFfJJF8ERHqIhWKqQgLE2if0mm10',
'checkdorepstr'=>',0,0,0,0,',
'regkey_ok'=>1,
'opengetdown'=>0,
'gbkey_ok'=>1,
'fbkey_ok'=>1,
'newaddinfotime'=>3,
'classnavs'=>'<a href=\"http://hanfu.52yaoke.com/news/\">资讯</a>&nbsp;|&nbsp;<a href=\"http://hanfu.52yaoke.com/yunying/\">运营</a>&nbsp;|&nbsp;<a href=\"http://hanfu.52yaoke.com/sheji/\">设计</a>&nbsp;|&nbsp;<a href=\"http://hanfu.52yaoke.com/shenghuo/\">生活</a>&nbsp;|&nbsp;<a href=\"http://hanfu.52yaoke.com/zonghedaohang/\">综合导航</a>',
'adminstyle'=>',1,2,',
'docnewsnum'=>300,
'openschall'=>0,
'schallfield'=>1,
'schallminlen'=>3,
'schallmaxlen'=>20,
'schallnum'=>20,
'schallpagenum'=>10,
'dtcanbq'=>1,
'dtcachetime'=>43200,
'repkeynum'=>0,
'regacttype'=>0,
'opengetpass'=>0,
'hlistinfonum'=>30,
'qlistinfonum'=>25,
'dtncanbq'=>1,
'dtncachetime'=>43200,
'readdinfotime'=>0,
'qeditinfotime'=>0,
'onclicktype'=>0,
'onclickfilesize'=>10,
'onclickfiletime'=>60,
'schalltime'=>0,
'defprinttempid'=>1,
'opentags'=>1,
'tagstempid'=>10,
'usetags'=>',1,2,3,4,5,6,7,8,',
'chtags'=>'',
'tagslistnum'=>16,
'closeqdt'=>0,
'settop'=>0,
'qlistinfomod'=>0,
'gb_num'=>20,
'member_num'=>20,
'space_num'=>25,
'infolday'=>0,
'filelday'=>0,
'dorepkey'=>0,
'dorepword'=>0,
'onclickrnd'=>'',
'indexpagedt'=>0,
'keybgcolor'=>'',
'keyfontcolor'=>'',
'keydistcolor'=>'',
'indexpageid'=>0,
'closeqdtmsg'=>'',
'openfileserver'=>0,
'fs_purl'=>'',
'closemods'=>'',
'fieldandtop'=>0,
'fieldandclosetb'=>'',
'filedatatbs'=>',1,',
'filedeftb'=>1,
'pldeftb'=>1,
'plurl'=>'/e/pl/',
'plkey_ok'=>1,
'plface'=>'||[~e.jy~]##1.gif||[~e.kq~]##2.gif||[~e.se~]##3.gif||[~e.sq~]##4.gif||[~e.lh~]##5.gif||[~e.ka~]##6.gif||[~e.hh~]##7.gif||[~e.ys~]##8.gif||[~e.ng~]##9.gif||[~e.ot~]##10.gif||',
'plf'=>'',
'pldatatbs'=>',1,',
'defpltempid'=>1,
'pl_num'=>12,
'plgroupid'=>0,
'closelisttemp'=>'',
'chclasscolor'=>'#99C4E3',
'timeclose'=>'',
'timeclosedo'=>'',
'ipaddinfonum'=>0,
'ipaddinfotime'=>0,
'rewriteinfo'=>'',
'rewriteclass'=>'',
'rewriteinfotype'=>'',
'rewritetags'=>'',
'rewritepl'=>'',
'memberconnectnum'=>0,
'closehmenu'=>',shop,',
'indexaddpage'=>0,
'modmemberedittran'=>0,
'modinfoedittran'=>0,
'deftempid'=>2,'add_beian'=>'京ICP备0000000号-1

<!-- 统计代码 -->
<script type=\'text/javascript\' src=\'/tongji.js\'></script>
<!-- 请改为自已的-->
','add_weibo'=>'http://weibo.com/','add_tencent-weibo'=>'http://t.qq.com/','add_flashpic'=>'<li> <a href=\"http://www.libusi.com/1/ecms101.html\" rel=\"bookmark\">
<img src=\"/skin/ecms/img/000001.jpg\" alt=\"图片一\" /></a>
<p class=\"slider-caption\">图片一</p></li>
<li> <a href=\"http://www.libusi.com/1/ecms101.html\" rel=\"bookmark\">
<img src=\"/skin/ecms/img/000002.jpg\" alt=\"图片二\" /></a>
<p class=\"slider-caption\">图片二</p></li>
<li> <a href=\"http://www.libusi.com/1/ecms101.html\" rel=\"bookmark\">
<img src=\"/skin/ecms/img/000003.jpg\" alt=\"图片三\" /></a>
<p class=\"slider-caption\">图片三</p></li>
<li> <a href=\"http://www.libusi.com/1/ecms101.html\" rel=\"bookmark\">
<img src=\"/skin/ecms/img/000004.jpg\" alt=\"图片四\" /></a>
<p class=\"slider-caption\">图片四</p></li>','add_gonggao'=>'<li class=\"scrolltext-title\"><a href=\"http://192.168.1.123/\" rel=\"bookmark\">公告:欢迎你的到来</a></li>
<li class=\"scrolltext-title\"><a href=\"http://192.168.1.123/\" rel=\"bookmark\">公告:程序不定期经常更新！请认准本站！</a></li>

<!-- 请改为自已的或者“不写入缓存”就关闭了 -->','add_weixin-img'=>'/skin/ecms/img/weixin.jpg','add_menu-taxonomy'=>'<li id=\"menu-item\" class=\"\">
<span class=\"font-text\">小分类</span></li>
<li id=\"menu-item\" class=\"\"><a href=\"http://101.libusi.com/sheji/jiaohu/\">交互</a></li>
<li id=\"menu-item\" class=\"\"><a href=\"http://101.libusi.com/sheji/wangye/\">网页</a></li>
<li id=\"menu-item\" class=\"\"><a href=\"http://101.libusi.com/sheji/gongye/\">工业</a></li>
<li id=\"menu-item\" class=\"\"><a href=\"http://101.libusi.com/shenghuo/zhijia/\">智驾</a></li>
<li id=\"menu-item\" class=\"\"><a href=\"http://101.libusi.com/shenghuo/jiaju/\">家居</a></li>
<li id=\"menu-item\" class=\"\"><a href=\"http://101.libusi.com/news/dianshang/\">电商</a></li>


<!-- 请改为自已的或者“不写入缓存”就关闭了 -->','add_navigation-toggle'=>'<li id=\"menu-item-6853\" class=\"red-navbar\"><a target=\"_blank\" href=\"\"><span class=\"font-text\"><i class=\"fa fa-apple\"></i> 手机效果</span></a></li>

<!-- 请改为自已的或者“不写入缓存”就关闭了 -->','add_lp1try'=>'libusi/','add_acmsd001'=>'<a href=\"http://www.libusi.com/1/ecms101.html\" target=\"_blank\">
<img src=\"/skin/ecms/img/306x306.jpg\" alt=\"购买主题\" /></a>','add_acmsd002'=>'<a href=\"http://www.libusi.com/1/ecms101.html\" target=\"_blank\">
<img src=\"/skin/ecms/img/850x118-1.jpg\" alt=\"主题购买\" /></a>','add_acmsd003'=>'<a href=\"http://www.libusi.com/1/ecms101.html\" target=\"_blank\">
<img src=\"/skin/ecms/img/850x118-2.jpg\" alt=\"主题购买\" /></a>','add_acmsd004'=>'<a href=\"http://www.libusi.com/1/ecms101.html\" target=\"_blank\">
<img src=\"/skin/ecms/img/850x118-3.jpg\" alt=\"主题购买\" /></a>','add_acmsd005'=>'<a href=\"http://www.libusi.com/1/ecms101.html\" target=\"_blank\">
<img src=\"/skin/ecms/img/850x118-4.jpg\" alt=\"主题购买\" /></a>','add_footer'=>'
<!-- 请改为自已的或者“不写入缓存”就关闭了 -->

<li id=\"menu-item\" class=\"menu-item\">
<a href=\"http://101.libusi.com/sheji/jiaohu/\">
<i class=\"fa-indent fa\"></i>
<span class=\"font-text\">交互</span></a></li>
<li id=\"menu-item\" class=\"menu-item\">
<a href=\"http://101.libusi.com/shenghuo/zhijia/\">
<i class=\"fa-wrench fa\"></i>
<span class=\"font-text\">智驾</span></a></li>
<li id=\"menu-item\" class=\"menu-item\">
<a href=\"http://101.libusi.com/yunying/guanli/\">
<i class=\"fa-file-code-o fa\"></i>
<span class=\"font-text\">管理</span></a></li>
<li id=\"menu-item\" class=\"menu-item\">
<a href=\"http://101.libusi.com/shenghuo/zhichang/\">
<i class=\"fa-database fa\"></i>
<span class=\"font-text\">职场</span></a></li>
<li id=\"menu-item\" class=\"menu-item\">
<a href=\"http://101.libusi.com/sheji/wangye/\">
<i class=\"fa-leaf fa\"></i>
<span class=\"font-text\">网页</span></a></li>
<li id=\"menu-item\" class=\"menu-item\">
<a target=\"_blank\" href=\"http://101.libusi.com/news/shebei/\">
<i class=\"fa-desktop fa\"></i>
<span class=\"font-text\">设备</span></a></li>
<li id=\"menu-item\" class=\"menu-item\">
<a href=\"http://101.libusi.com/news/hulianwang/\">
<i class=\"fa-star-half-o fa\"></i>
<span class=\"font-text\">互联网</span></a></li>
<li id=\"menu-item\" class=\"menu-item\">
<a href=\"http://101.libusi.com/news/yidonghulianwang/\">
<i class=\"fa-envelope-o fa\"></i>
<span class=\"font-text\">移动互联网</span></a></li>
<li id=\"menu-item\" class=\"menu-item\">
<a href=\"http://101.libusi.com/news/tumeiti/\">
<i class=\"fa-pencil-square-o fa\"></i>
<span class=\"font-text\">图媒体</span></a></li>','add_footer-text'=>'（此信息请到→系统→系统设置→扩展变量→页脚-关于本站→中修改。也可以选择“不写入缓存”，然后刷新生成所有页面，就可以不显示了。）','add_footer-idc'=>'<a href=\"http://www.libusi.com/1/ecms101.html\" target=\"_blank\">
<img class=\"\" title=\"主题\" src=\"/skin/ecms/img/bt.png\" alt=\"主题\" /></a> 
<a href=\"http://www.libusi.com/1/idc.html\" target=\"_blank\">
<img class=\"\" title=\"云主机\" src=\"/skin/ecms/img/idc.png\" alt=\"云主机\" /></a> 


<!-- 请改为自已的或者“不写入缓存”就关闭了 -->','add_sou'=>'<form onsubmit=\"return checkSearchForm()\" method=\"post\" name=\"searchform\" id=\"searchform\" action=\"/e/search/index.php\">
          <input type=\"hidden\" value=\"title\" name=\"show\">
          <input type=\"hidden\" value=\"1\" name=\"tempid\">
          <input type=\"hidden\" value=\"news\" name=\"tbname\">
          <input name=\"mid\" value=\"1\" type=\"hidden\">
<input type=\"text\" value=\"\" name=\"keyboard\" id=\"s\" placeholder=\"输入搜索内容\" required />
<button type=\"submit\" name=\"submit\" id=\"searchsubmit\">搜索</button></form>','add_baidupush'=>'<script>
(function(){
    var bp = document.createElement(\'script\');
    var curProtocol = window.location.protocol.split(\':\')[0];
    if (curProtocol === \'https\') {
        bp.src = \'https://zz.bdstatic.com/linksubmit/push.js\';        
    }
    else {
        bp.src = \'http://push.zhanzhang.baidu.com/push.js\';
    }
    var s = document.getElementsByTagName(\"script\")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<!-- 可以在下面放百度的统计代码 -->','add_logo'=>'/skin/ecms/img/logo.png','add_baidusou'=>'<form id=\"searchform\" target=\"_blank\" action=\"http://zhannei.baidu.com/cse/site\">
<input class=\"swap_value\" placeholder=\"输入站内搜索关键词\" name=\"q\"> 
<button type=\"submit\" id=\"searchsubmit\">百度</button>
<input type=\"hidden\" name=\"cc\" value=\"libusi.com\">
<input type=\"hidden\" name=\"ie\" value=\"utf-8\">
</form>

<!-- 请将网址（libusi.com）改为自已的或者“不写入缓存”就关闭了 -->','add_haosou'=>'<form method=\"get\" id=\"searchform\" action=\"\"> 
<input class=\"swap_value\" id=\"haosou\" placeholder=\"输入好搜站内搜索关键词\" onkeydown=\"if(event.keyCode==13){return Search(\'haosou\');}\"> 
<button type=\"submit\" id=\"searchsubmit\" onClick=\"return Search(\'haosou\');\">好搜</button></form></div>
<script type=\"text/javascript\">function Search(type){ if (type==\"haosou\") 
{ var value=$(\"#haosou\").val()||\"\"; window.open(\"http://www.haosou.com/s?q=\"+value+\"+site%3Alibusi.com\"); } return false;}</script>


<!-- 请将网址（libusi.com）改为自已的或者“不写入缓存”就关闭了 -->','add_2weimashang'=>'<h4>支付宝转账赞助</h4> 
<img title=\"支付宝扫一扫赞助\" src=\"/skin/ecms/img/zhifubaosaoyisaozanzhu.jpg\" />
<h4>支付宝扫一扫赞助</h4>
<h4>微信转账赞助</h4> 
<img title=\"微信扫一扫赞助\" src=\"/skin/ecms/img/weixinsaoyisaozanzhu.jpg\" />
<h4>微信扫一扫赞助</h4>


<!-- 请改为自已的或者“不写入缓存”就关闭了 -->','add_changyan'=>'<!--高速版-->
<div id=\"SOHUCS\"></div>
<script charset=\"utf-8\" type=\"text/javascript\" src=\"http://changyan.sohu.com/upload/changyan.js\" ></script>
<script type=\"text/javascript\">
    window.changyan.api.config({
        appid: \'cys9POvoY\',
        conf: \'prod_d54b641fe874037ce77b5d8278876ed3\'
    });
</script>

<!-- 上面为李布斯（www.libusi.com）的，请改为您自已的，没有的可以到搜狐畅言申请（ http://changyan.kuaizhan.com/ ） -->
<!-- 如果搜狐畅言评论框有李布斯的网址和一些评论笑话，只要将畅言代码更换为您的就可以解决，改完重新刷新生成一下内容页和栏目页（此说明内容可删除）-->
');
//------------e_public

//moreports
$emoreport_r=array();
//moreports


//-------EmpireCMS.Public.Cache-------

$emod_pubr=Array('linkfields'=>'|');

$etable_r=array();
$etable_r['news']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>1);
$etable_r['download']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>1,
'mid'=>2);
$etable_r['photo']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>1,
'mid'=>3);
$etable_r['flash']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>1,
'mid'=>4);
$etable_r['movie']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>1,
'mid'=>5);
$etable_r['shop']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>1,
'mid'=>6);
$etable_r['article']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>1,
'mid'=>7);
$etable_r['info']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>1,
'mid'=>8);


$emod_r=array();
$emod_r[1]=Array('mid'=>1,
'mname'=>'新闻系统模型',
'qmname'=>'新闻',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,cjwz,special.field,newstime,titlepic,smalltext,writer,befrom,newstext,',
'qenter'=>',title,ftitle,cjwz,special.field,titlepic,smalltext,writer,befrom,newstext,',
'listtempf'=>',title,ftitle,cjwz,newstime,titlepic,smalltext,diggtop,',
'tempf'=>',title,ftitle,cjwz,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'mustqenterf'=>',title,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,cjwz,smalltext,',
'cj'=>',title,ftitle,cjwz,newstime,titlepic,smalltext,writer,befrom,newstext,',
'canaddf'=>',title,ftitle,cjwz,newstime,titlepic,smalltext,writer,befrom,newstext,',
'caneditf'=>',title,ftitle,cjwz,newstime,titlepic,smalltext,writer,befrom,newstext,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,diggtop,cjwz,',
'tbdataf'=>',writer,befrom,newstext,',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,cjwz,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|2|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|29|30|31|32|33|34|35|36|',
'tid'=>1,
'tbname'=>'news');
$emod_r[2]=Array('mid'=>2,
'mname'=>'下载系统模型',
'qmname'=>'软件',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,titlepic,softwriter,homepage,demo,softfj,language,softtype,softsq,star,filetype,filesize,downpath,softsay,',
'qenter'=>',title,special.field,titlepic,softwriter,homepage,demo,softfj,language,softtype,softsq,filetype,filesize,downpath,softsay,',
'listtempf'=>',title,newstime,titlepic,softfj,language,softtype,softsq,star,filetype,filesize,softsay,',
'tempf'=>',title,newstime,titlepic,softwriter,homepage,demo,softfj,language,softtype,softsq,star,filetype,filesize,downpath,softsay,',
'mustqenterf'=>',title,downpath,softsay,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,softsay,',
'cj'=>',title,newstime,titlepic,softwriter,homepage,demo,softfj,language,softtype,softsq,star,filetype,filesize,downpath,softsay,',
'canaddf'=>',title,newstime,titlepic,softwriter,homepage,demo,softfj,language,softtype,softsq,star,filetype,filesize,downpath,softsay,',
'caneditf'=>',title,newstime,titlepic,softwriter,homepage,demo,softfj,language,softtype,softsq,star,filetype,filesize,downpath,softsay,',
'tbmainf'=>',title,titlepic,newstime,softfj,language,softtype,softsq,star,filetype,filesize,softsay,',
'tbdataf'=>',softwriter,homepage,demo,downpath,',
'tobrf'=>',softsay,',
'dohtmlf'=>',softwriter,homepage,demo,softfj,language,softtype,softsq,star,filetype,filesize,downpath,softsay,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',softsay,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|38|39|40|41|',
'tid'=>2,
'tbname'=>'download');
$emod_r[3]=Array('mid'=>3,
'mname'=>'图片系统模型',
'qmname'=>'图片',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'qenter'=>',title,special.field,filesize,picsize,picfbl,picfrom,titlepic,picurl,picsay,',
'listtempf'=>',title,newstime,titlepic,picurl,picsay,',
'tempf'=>',title,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'mustqenterf'=>',title,picsay,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,picsay,',
'cj'=>',title,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'canaddf'=>',title,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'caneditf'=>',title,newstime,filesize,picsize,picfbl,picfrom,titlepic,picurl,morepic,num,width,height,picsay,',
'tbmainf'=>',title,titlepic,newstime,picurl,picsay,',
'tbdataf'=>',filesize,picsize,picfbl,picfrom,morepic,num,width,height,',
'tobrf'=>',picsay,',
'dohtmlf'=>',filesize,picsize,picfbl,picfrom,picurl,morepic,num,width,height,picsay,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',picsay,',
'filef'=>',',
'imgf'=>',titlepic,picurl,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|52|53|54|',
'tid'=>3,
'tbname'=>'photo');
$emod_r[4]=Array('mid'=>4,
'mname'=>'FLASH系统模型',
'qmname'=>'FLASH',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,titlepic,flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'qenter'=>',title,special.field,titlepic,flashwriter,email,filesize,flashurl,width,height,flashsay,',
'listtempf'=>',title,newstime,titlepic,flashwriter,star,filesize,flashurl,flashsay,',
'tempf'=>',title,newstime,titlepic,flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'mustqenterf'=>',title,flashurl,flashsay,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,flashwriter,flashsay,',
'cj'=>',title,newstime,titlepic,flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'canaddf'=>',title,newstime,titlepic,flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'caneditf'=>',title,newstime,titlepic,flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'tbmainf'=>',title,titlepic,newstime,flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'tbdataf'=>',',
'tobrf'=>',flashsay,',
'dohtmlf'=>',flashwriter,email,star,filesize,flashurl,width,height,flashsay,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',flashsay,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',flashurl,',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|50|51|',
'tid'=>4,
'tbname'=>'flash');
$emod_r[5]=Array('mid'=>5,
'mname'=>'电影系统模型',
'qmname'=>'电影',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'qenter'=>',',
'listtempf'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,moviefen,moviesay,',
'tempf'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'mustqenterf'=>',title,moviesay,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,movietype,company,player,playadmin,moviesay,',
'cj'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'canaddf'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'caneditf'=>',title,newstime,titlepic,movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'tbmainf'=>',title,titlepic,newstime,movietype,company,movietime,player,playadmin,filetype,filesize,star,moviefen,moviesay,',
'tbdataf'=>',playdk,playtime,downpath,playerid,onlinepath,',
'tobrf'=>',moviesay,',
'dohtmlf'=>',movietype,company,movietime,player,playadmin,filetype,filesize,star,playdk,playtime,moviefen,downpath,playerid,onlinepath,moviesay,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',moviesay,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|42|43|44|45|',
'tid'=>5,
'tbname'=>'movie');
$emod_r[6]=Array('mid'=>6,
'mname'=>'商城系统模型',
'qmname'=>'商品',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,titlepic,productpic,newstext,',
'qenter'=>',',
'listtempf'=>',title,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,titlepic,productpic,newstext,psalenum,',
'tempf'=>',title,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,titlepic,productpic,newstext,psalenum,',
'mustqenterf'=>',title,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,productno,pbrand,intro,price,newstext,',
'cj'=>',title,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,titlepic,productpic,newstext,',
'canaddf'=>',title,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,titlepic,productpic,newstext,',
'caneditf'=>',title,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,titlepic,productpic,newstext,',
'tbmainf'=>',title,titlepic,newstime,productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,productpic,newstext,psalenum,',
'tbdataf'=>',',
'tobrf'=>',intro,newstext,',
'dohtmlf'=>',productno,pbrand,intro,unit,weight,tprice,price,buyfen,pmaxnum,productpic,newstext,psalenum,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',',
'filef'=>',',
'imgf'=>',titlepic,productpic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|46|47|48|49|',
'tid'=>6,
'tbname'=>'shop');
$emod_r[7]=Array('mid'=>7,
'mname'=>'文章系统模型',
'qmname'=>'文章',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,smalltext,writer,befrom,newstext,',
'qenter'=>',title,ftitle,special.field,titlepic,smalltext,writer,befrom,newstext,',
'listtempf'=>',title,ftitle,newstime,titlepic,smalltext,diggtop,',
'tempf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,newstext,diggtop,',
'mustqenterf'=>',title,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,smalltext,',
'cj'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,newstext,',
'canaddf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,newstext,',
'caneditf'=>',title,ftitle,newstime,titlepic,smalltext,writer,befrom,newstext,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,',
'checkboxf'=>',',
'savetxtf'=>'newstext',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|55|56|57|',
'tid'=>7,
'tbname'=>'article');
$emod_r[8]=Array('mid'=>8,
'mname'=>'分类信息系统模型',
'qmname'=>'分类信息',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,smalltext,titlepic,myarea,email,mycontact,address,',
'qenter'=>',title,smalltext,titlepic,myarea,email,mycontact,address,',
'listtempf'=>',title,newstime,smalltext,titlepic,myarea,',
'tempf'=>',title,newstime,smalltext,titlepic,myarea,email,mycontact,address,',
'mustqenterf'=>',title,smalltext,myarea,email,',
'listandf'=>',myarea,',
'setandf'=>0,
'searchvar'=>',title,smalltext,myarea,',
'cj'=>',title,newstime,smalltext,titlepic,myarea,email,mycontact,address,',
'canaddf'=>',title,newstime,smalltext,titlepic,myarea,email,mycontact,address,',
'caneditf'=>',title,newstime,smalltext,titlepic,myarea,email,mycontact,address,',
'tbmainf'=>',title,titlepic,newstime,smalltext,myarea,',
'tbdataf'=>',email,mycontact,address,',
'tobrf'=>',smalltext,',
'dohtmlf'=>',smalltext,myarea,email,mycontact,address,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|11|12|13|14|15|16|18|19|20|21|23|24|25|26|28|29|30|31|',
'tid'=>8,
'tbname'=>'info');


//-------EmpireCMS.Public.Cache-------

?>