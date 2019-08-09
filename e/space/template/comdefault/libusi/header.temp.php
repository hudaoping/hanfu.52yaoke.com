<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//公告
$spacegg='';
if($addur['spacegg'])
{
	$spacegg='<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#96C8F1">
  <tr>
    <td background="template/default/images/bg_title_sider.gif"><b>公告</b></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
            '.$addur['spacegg'].'
          </td>
        </tr>
      </table></td>
  </tr>
</table>
<br>';
}
//导航菜单
$dhmenu='';
$modsql=$empire->query("select mid,qmname from {$dbtbpre}enewsmod where usemod=0 and showmod=0 and qenter<>'' order by myorder,mid");
while($modr=$empire->fetch($modsql))
{
	$dhmenu.="<td width=70 height=24 onmouseover='ChangeMenuBg(this,mod".$modr[mid].")' onmouseout='ChangeMenuBg2(this,mod".$modr[mid].")' align='center' onclick=\"self.location.href='list.php?userid=$userid&mid=$modr[mid]';\"><font color='#FFFFFF' id='mod".$modr[mid]."'><strong>".$modr[qmname]."</strong></font></td>";
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=$spacename?></title>
    <meta content="<?=$spacename?>" name="keywords" />
    <meta content="<?=$spacename?>" name="description" />

    <link href="/skin/member/<?=$public_r['add_lp1try']?>css/bootstrap.min.css" rel="stylesheet">
    <link href="/skin/member/<?=$public_r['add_lp1try']?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/skin/member/<?=$public_r['add_lp1try']?>css/animate.css" rel="stylesheet">
    <link href="/skin/member/<?=$public_r['add_lp1try']?>css/style.css" rel="stylesheet">
    
</head>
<body>


    <div id="wrapper<?=esub(sty($navinfor[l]),wrap)?>">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
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
                
                <li  class="active">
                        <a href="<?=$public_r['newsurl']?>"><i class="fa fa-home"></i> <span class="nav-label">网站主页</span></a>
                 </li>               
  
     
                <li>
                    <a href="../member/cp"><i class="fa fa-align-justify"></i> <span class="nav-label">管理面板</span></a>
                </li>         
   
  
                <li>
                    <a href="/e/space/list.php?tempid=1&userid=<?=$userid?>&mid=1"><i class="fa fa-file-text"></i> <span class="nav-label">我的文章</span> </a>
                </li>
                               
                <li>
                    <a href="../member/friend/add/?fname=<?=$username?>"><i class="fa fa-heart"></i> <span class="nav-label">加为好友</span> </a>
                </li>
                
                <li>
                    <a href="../member/msg/AddMsg/?username=<?=$username?>"><i class="fa fa-send-o"></i> <span class="nav-label">发短消息</span> </a>
                </li>
                
                <li>
                    <a href="UserInfo.php?userid=<?=$userid?>"><i class="fa fa-trophy"></i> <span class="nav-label">公司资料</span> </a>
                </li>
                
                
                <li>
                    <a href="gbook.php?userid=<?=$userid?>"><i class="fa fa-pencil-square-o"></i> <span class="nav-label">留言板</span> </a>
                </li>  
                
                <li>
                    <a href="feedback.php?userid=<?=$userid?>"><i class="fa fa-leaf"></i> <span class="nav-label">反馈信息</span> </a>
                </li>             
                     
                <li>
                    <a href="UserInfo.php?userid=<?=$userid?>"><i class="fa fa-refresh"></i> <span class="nav-label">访问<?=$addur[viewstats]?>次</span> </a>
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
       

    
        
    

<ul class="nav navbar-top-links navbar-right<?=esub(tabo($navinfor[o]),l)?>">

                 <li>
                    <span class="m-r-sm text-muted welcome-message"><a href="UserInfo.php?userid=<?=$userid?>">
                          <?=$spacename?>
                          </a></span>
                </li> 
                         
               
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" href="../member/friend/add/?fname=<?=$username?>">
                        <i class="fa fa-heart"></i>加为好友</a> 
                </li>
                
                              
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" href="UserInfo.php?userid=<?=$userid?>">
                        <i class="fa fa-trophy"></i>公司资料</a>
                </li>

            </ul>


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

