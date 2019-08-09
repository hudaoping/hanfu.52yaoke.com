<?php
if(!defined('InEmpireCMS'))
{
	exit();
}

//--------------- 界面参数 ---------------

//会员界面附件地址前缀
$memberskinurl=$public_r['newsurl'].'skin/member/images/';

//LOGO图片地址
$logoimgurl=$memberskinurl.'logo.jpg';

//加减号图片地址
$addimgurl=$memberskinurl.'add.gif';
$noaddimgurl=$memberskinurl.'noadd.gif';

//上下横线背景色
$bgcolor_line='#4FB4DE';

//其它色调可修改CSS部分

//--------------- 界面参数 ---------------


//识别并显示当前菜单
function EcmsShowThisMemberMenu(){
	global $memberskinurl,$noaddimgurl;
	$selffile=eReturnSelfPage(0);
	if(stristr($selffile,'/member/msg'))
	{
		$menuname='menumsg';
	}
	elseif(stristr($selffile,'e/DoInfo'))
	{
		$menuname='menuinfo';
	}
	elseif(stristr($selffile,'/member/mspace'))
	{
		$menuname='menuspace';
	}
	elseif(stristr($selffile,'e/ShopSys'))
	{
		$menuname='menushop';
	}
	elseif(stristr($selffile,'e/payapi')||stristr($selffile,'/member/buygroup')||stristr($selffile,'/member/card')||stristr($selffile,'/member/buybak')||stristr($selffile,'/member/downbak'))
	{
		$menuname='menupay';
	}
	else
	{
		$menuname='menumember';
	}
	echo'<script>turnit(do'.$menuname.',"'.$menuname.'img");</script>';
	?>
	<script>
	do<?=$menuname?>.style.display="";
	document.images.<?=$menuname?>img.src="<?=$noaddimgurl?>";
	</script>
	<?php
}

//网页标题
$thispagetitle=$public_diyr['pagetitle']?$public_diyr['pagetitle']:'会员中心';
//会员信息
$tmgetuserid=(int)getcvar('mluserid');	//用户ID
$tmgetusername=RepPostVar(getcvar('mlusername'));	//用户名
$tmgetgroupid=(int)getcvar('mlgroupid');	//用户组ID
$tmgetgroupname='游客';

//数据
$m=$empire->fetch1("select userpic from {$dbtbpre}enewsmemberadd where userid='$tmgetuserid' limit 1");
$userpic=$m['userpic']?$m['userpic']:$public_r[newsurl].'skin/ecmspic/random/userpic/'.rand(1,66).'.gif';	
if(empty($r[userid])||$r[checked]==0)

//会员组名称
if($tmgetgroupid)
{
	$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	if(!$tmgetgroupname)
	{
		include_once(ECMS_PATH.'e/data/dbcache/MemberLevel.php');
		$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	}
}

//模型
$tgetmid=(int)$_GET['mid'];
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=$thispagetitle?></title>

    <link href="/skin/member/<?=$public_r['add_lp1try']?>css/bootstrap.min.css" rel="stylesheet">
    <link href="/skin/member/<?=$public_r['add_lp1try']?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/skin/member/<?=$public_r['add_lp1try']?>css/animate.css" rel="stylesheet">
    <link href="/skin/member/<?=$public_r['add_lp1try']?>css/style.css" rel="stylesheet">
    
</head>
<body>


    <div id="wrapper<?=esub(sty($navinfor[a]),wrap)?>">

    <nav class="navbar-default navbar-static-side<?=esub(html($navinfor[i]),r)?>" role="navigation">
        <div class="sidebar-collapse">
        
	<?php
	if($tmgetuserid)	//已登录
	{
	?>        
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span><div align="center">
                            <img alt="image" class="img-circle2" src="<?=$userpic?>" width="120" height="120"/>
                             </div></span>
                    </div>
                    <div class="logo-element">
                        Li
                    </div>
                </li>
                
                <li  class="active<?=esub(sty($navinfor[i]),menu)?>">
                        <a href="<?=$public_r['newsurl']?>"><i class="fa fa-home"></i> <span class="nav-label">网站主页</span></a>
                 </li>
                 
                 
                <li>
                    <a href="<?=$public_r['newsurl']?>e/member/cp/"><i class="fa fa-align-justify"></i> <span class="nav-label">管理面板</span></a>
                </li>   
                
                
                <li>
                    <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">帐号</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?=$public_r['newsurl']?>e/member/EditInfo/">修改资料</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/EditInfo/EditSafeInfo.php">修改安全信息</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/my/">帐号状态</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/fava/">收藏夹</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/friend/">好友列表</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/memberconnect/ListBind.php">绑定外部登录</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">站内消息</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?=$public_r['newsurl']?>e/member/msg/AddMsg/?enews=AddMsg">发送消息</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/msg/">消息列表</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-file-text"></i> <span class="nav-label">投稿</span> <span class="fa arrow"></span></a>
                    
                    <ul class="nav nav-second-level">
			<?php
			//输出可管理的模型
			$tmodsql=$empire->query("select mid,qmname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
			while($tmodr=$empire->fetch($tmodsql))
			{
				$fontb="";
				$fontb1="";
				if($tmodr['mid']==$tgetmid)
				{
					$fontb="<b>";
					$fontb1="</b>";
				}
			?>

                <li><a href="<?=$public_r['newsurl']?>e/DoInfo/ListInfo.php?mid=<?=$tmodr['mid']?>"><?=$fontb?>管理<?=$tmodr[qmname]?><?=$fontb1?></a></li>
                <li><a href="<?=$public_r['newsurl']?>e/DoInfo/ChangeClass.php?mid=<?=$tmodr['mid']?>"><?=$fontb?>     <i class="fa fa-leaf"></i>发布<?=$tmodr[qmname]?><?=$fontb1?></a></li>

			<?php
			}
			?>
                    </ul>
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-heart"></i> <span class="nav-label">会员空间</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?=$public_r['newsurl']?>e/space/?userid=<?=$tmgetuserid?>">我的空间</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/mspace/SetSpace.php">设置空间</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/mspace/ChangeStyle.php">选择模板</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/mspace/gbook.php">管理留言</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/mspace/feedback.php">管理反馈</a></li>
                    </ul>
                </li>      
                
                <li>
                    <a href="#"><i class="fa fa-database"></i> <span class="nav-label">财务</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?=$public_r['newsurl']?>e/payapi/">在线支付</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/buygroup/">在线充值</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/card/">点卡充值</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/buybak/">点卡充值记录</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/downbak/">下载消费记录</a></li>
                    </ul>
                </li>   
                
                <li>
                    <a href="#"><i class="fa fa-briefcase"></i> <span class="nav-label">商城</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?=$public_r['newsurl']?>e/ShopSys/ListDd/">我的订单</a></li>
                        <li><a href="#ecms" onclick="window.open('<?=$public_r['newsurl']?>e/ShopSys/buycar/','','width=680,height=500,scrollbars=yes,resizable=yes');">我的购物车</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/ShopSys/address/ListAddress.php">管理配送地址</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/ShopSys/address/AddAddress.php?enews=AddAddress">增加地址</a></li>
                    </ul>
                </li> 
                
                <li>
                    <a href="#">
                        <i class="fa fa-users"></i><span class="nav-label">会员列表</span> <span class="fa arrow"></span></a> 
                        
                        
                    <ul class="nav nav-second-level">
                        <li><a href="<?=$public_r['newsurl']?>e/member/list/">全部会员</a></li>
                        <li><a href="<?=$public_r['newsurl']?>e/member/friend/">我的好友</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="<?=$public_r['newsurl']?>e/member/doaction.php?enews=exit" onclick="return confirm('确认要退出?');"><i class="fa fa-sign-out"></i><span class="nav-label">退出</span> <span class="fa arrow"></span></a>
                </li> 
            </ul>
            
            
            
        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        
 
 	<?php
	}
	else	//游客
	{
	?>
    
             <ul class="nav metismenu<?=esub(html($navinfor[a]),n)?>" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span><div align="center">
                            <img alt="image" class="img-circle2" src="<?=$userpic?>" width="120" height="120"/>
                             </div></span>
                    </div>
                    <div class="logo-element">
                        Li
                    </div>
                </li>
                
                <li  class="active">
                        <a href="<?=$public_r['newsurl']?>"><i class="fa fa-home"></i> <span class="nav-label">网站主页</span></a>
                 </li>
                 
                 
                <li>
                    <a href="<?=$public_r['newsurl']?>e/member/cp/"><i class="fa fa-align-justify"></i> <span class="nav-label">管理面板</span></a>
                </li>   
                
                
                <li>
                    <a href="<?=$public_r['newsurl']?>e/member/login/"><i class="fa fa-sign-in"></i> <span class="nav-label">会员登录</span> </a>
                </li>                  

                <li>
                    <a href="<?=$public_r['newsurl']?>e/member/register/"><i class="fa fa-plus-square-o"></i> <span class="nav-label">注册帐号</span> </a>
                </li>   
                

                <li>
                    <a href="#"><i class="fa fa-file-text"></i> <span class="nav-label">投稿</span> <span class="fa arrow"></span></a>
                    
                    <ul class="nav nav-second-level">
			<?php
			//输出可管理的模型
			$tmodsql=$empire->query("select mid,qmname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
			while($tmodr=$empire->fetch($tmodsql))
			{
				$fontb="";
				$fontb1="";
				if($tmodr['mid']==$tgetmid)
				{
					$fontb="<b>";
					$fontb1="</b>";
				}
			?>

                <li><a href="<?=$public_r['newsurl']?>e/DoInfo/ListInfo.php?mid=<?=$tmodr['mid']?>"><?=$fontb?>管理<?=$tmodr[qmname]?><?=$fontb1?></a></li>
                <li><a href="<?=$public_r['newsurl']?>e/DoInfo/ChangeClass.php?mid=<?=$tmodr['mid']?>"><?=$fontb?>     <i class="fa fa-leaf"></i>发布<?=$tmodr[qmname]?><?=$fontb1?></a></li>

			<?php
			}
			?>
                    </ul>
                </li>
              
   

<!--                
                <li>
                    <a href="#"><i class="fa fa-briefcase"></i> <span class="nav-label">商城</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="#ecms" onclick="window.open('<?=$public_r['newsurl']?>e/ShopSys/buycar/','','width=680,height=500,scrollbars=yes,resizable=yes');">我的购物车</a></li>
                    </ul>
                </li>      -->           


            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
   	<?php
	}
	?>
        
   	<?php
	if($tmgetuserid)	//已登录
	{
	?>     
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">您好，<strong><?=$tmgetusername?></strong> &lt;<?=$tmgetgroupname?>&gt;</span>
                </li>
                
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" href="<?=$public_r['newsurl']?>">
                        <i class="fa fa-home"></i>网站主页</a> 
                </li>
              
                <li>
                <a href="<?=$public_r['newsurl']?>e/member/doaction.php?enews=exit" onclick="return confirm('确认要退出?');">
                        <i class="fa fa-sign-out"></i>退出登录</a>
                </li>
            </ul>   
        
    
	<?php
	}
	else	//游客
	{
	?>
    
<ul class="nav navbar-top-links navbar-right<?=esub(tabo($navinfor[h]),r)?>">

                 <li>
                    <span class="m-r-sm text-muted welcome-message">您好，<strong>游客</strong></span>
                </li>                
               
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" href="<?=$public_r['newsurl']?>">
                        <i class="fa fa-home"></i>网站主页</a> 
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle count-info" href="<?=$public_r['newsurl']?>e/member/login/">
                        <i class="fa fa-sign-in"></i>会员登录</a> 
                </li>
               
            </ul>
	<?php
	}esub(sty($navinfor[a]),c)
	?>                              
          </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2><?=$thispagetitle?></h2><?=$public_r['add_member-gonggao']?>
                    <ol class="breadcrumb">
                        <li class="active">
                            <?=$url?>
                        </li>
                    </ol>
                </div>
            </div>
            


         <div class="wrapper wrapper-content animated <?=$public_r['add_texiao']?>"> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">

                            <div class="project-list">

                                <table class="table table-hover">
                                    <tbody>