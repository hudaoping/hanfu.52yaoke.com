<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
eCheckCloseMods('member');//关闭模块
$myuserid=(int)getcvar('mluserid');
$mhavelogin=0;
if($myuserid)
{
	include("../../class/db_sql.php");
	include("../../member/class/user.php");
	include("../../data/dbcache/MemberLevel.php");
	$link=db_connect();
	$empire=new mysqlquery();
	$mhavelogin=1;
//数据
	$myusername=RepPostVar(getcvar('mlusername'));
	$myrnd=RepPostVar(getcvar('mlrnd'));
	$r=$empire->fetch1("select ".eReturnSelectMemberF('userid,username,groupid,userfen,money,userdate,havemsg,checked')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$myuserid' and ".egetmf('rnd')."='$myrnd' limit 1");
	
		
	$m=$empire->fetch1("select userpic from {$dbtbpre}enewsmemberadd where userid='$myuserid' limit 1");
  	$userpic=$m['userpic']?$m['userpic']:$public_r[newsurl].'skin/ecmspic/random/userpic/'.rand(1,66).'.gif';
  
	if(empty($r[userid])||$r[checked]==0)
	{
		EmptyEcmsCookie();
		$mhavelogin=0;
	}
	//会员等级
	if(empty($r[groupid]))
	{$groupid=eReturnMemberDefGroupid();}
	else
	{$groupid=$r[groupid];}
	$groupname=$level_r[$groupid]['groupname'];
	//点数
	$userfen=$r[userfen];
	//余额
	$money=$r[money];
	//天数
	$userdate=0;
	if($r[userdate])
	{
		$userdate=$r[userdate]-time();
		if($userdate<=0)
		{$userdate=0;}
		else
		{$userdate=round($userdate/(24*3600));}
	}
	//是否有短消息
	$havemsg="";
	if($r[havemsg])
	{
		$havemsg="<a href='".$public_r['newsurl']."e/member/msg/' target=_blank><font color=red>您有新消息</font></a>";
	}
	//$myusername=$r[username];
	db_close();
	$empire=null;
}
if($mhavelogin==1)
{
?>
document.write(" <div class=\"widgetuser\">   <div class=\"userinfo\">    <div class=\"welcome\">您好：<strong><?=$myusername?></strong> [ <?=$groupname?> ] </div>    <div class=\"userface\"><p class=\"avatar\"><a href=\"/e/member/cp/\"><img alt=\'\' src=\'<?=$userpic?>\' class=\'avatar\' height=\'100\' width=\'100\' /></a></p>    </div>    <div class=\"mylink\">        <ul>            <li><a href=\"/e/member/EditInfo/\">修改资料</a></li>            <li><a href=\"/e/DoInfo/ChangeClass.php?mid=1\">发表文章</a></li>            <li><a href=\"/e/member/EditInfo/EditSafeInfo.php\">修改密码</a></li>            <li><a href=\"/e/member/msg/\">站内信息</a></li>            <li><a href=\"/e/member/mspace/SetSpace.php\">设置空间</a></li>            <li><a href=\"/e/DoInfo/ListInfo.php?mid=1\">我的文章</a></li>            <li><a href=\"/e/member/friend/\">我的好友</a></li>            <li><a href=\"/e/member/my/\">帐号状态</a></li>        </ul>    </div>    <div class=\"uclink\">        <a href=\"/e/member/cp/\"><i class=\"fa fa-user\"></i> 会员中心</a> |         <a href=\"/e/space/?userid=<?=$myuserid?>\"><i class=\"fa fa-users\"></i> 我的空间</a> |         <a href=\"/e/member/doaction.php?enews=exit&ecmsfrom=9\" onclick=\"return confirm(\'确认要退出?\');\"><i class=\"fa fa-sign-out\"></i> 退出登录</a>     </div></div></div>");
<?
}
else
{
?>
document.write("<div class=\"widgetuser\"><div class=\"userinfo\">    <div class=\"welcome\">您好：<strong>游客</strong>，<a href=\"/e/member/login/\"> 登录账号</a>  </div><div class=\"userface\"><p><a href=\"/e/member/cp/\"><img alt=\'\' src=\'/skin/ecmspic/random/userpic/p.php\' class=\'avatar\' height=\'100\' width=\'100\' /></a></p>    </div>    <div class=\"mylink\">        <ul>            <li><a href=\"/e/member/EditInfo/\">修改资料</a></li>            <li><a href=\"/e/DoInfo/ChangeClass.php?mid=1\">发表文章</a></li>            <li><a href=\"/e/member/EditInfo/EditSafeInfo.php\">修改密码</a></li>            <li><a href=\"/e/member/msg/\">站内信息</a></li>            <li><a href=\"/e/member/mspace/SetSpace.php\">设置空间</a></li>            <li><a href=\"/e/DoInfo/ListInfo.php?mid=1\">我的文章</a></li>            <li><a href=\"/e/member/friend/\">我的好友</a></li>            <li><a href=\"/e/member/my/\">帐号状态</a></li>        </ul>    </div>    <div class=\"uclink\">        <a href=\"/e/member/register/index.php?tobind=0&groupid=1\"><i class=\"fa fa-plus-square\"></i> 注册帐号</a> |         <a href=\"/e/member/GetPassword/\"><i class=\"fa fa-unlock-alt\"></i> 忘记密码?</a> |        <a href=\"/e/member/login/\"><i class=\"fa fa-user\"></i> 登录账号</a>     </div></div> </div>");
<?
}
?>