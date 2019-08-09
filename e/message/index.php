<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>

<!DOCTYPE html>
<html>
<?php
if(!$noautourl)
{
?>
<SCRIPT language=javascript>
var secs=4;//4秒
for(i=1;i<=secs;i++) 
{ window.setTimeout("update(" + i + ")", i * 1000);} 
function update(num) 
{ 
if(num == secs) 
{ <?=$gotourl_js?>; } 
else 
{ } 
}
</SCRIPT>
<?
}
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>信息提示</title>
    

    <link href="/e/message/libusi/css/bootstrap.min.css" rel="stylesheet">
    <link href="/e/message/libusi/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/e/message/libusi/css/animate.css" rel="stylesheet">
    <link href="/e/message/libusi/css/style.css" rel="stylesheet">
    
</head>

<body class="gray-bg">

    <div class="middle-box text-center">
        <h2><i class="fa fa-spinner fa-spin fa-3x"></i></h2>
    </div>

  
    <div class="middle-box text-center animated <?=$public_r['add_texiao123']?>">
        <h3 class="font-bold"><?=$error?></h3>
    </div>
    
    <div class="middle-box text-center">
        <div class="error-desc">
        <a href="<?=$gotourl?>" class="btn btn-primary m-t">如果您的浏览器没有自动跳转，请点击这里</a>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/e/message/libusi/js/jquery-2.1.1.js"></script>
    <script src="/e/message/libusi/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='/member.js'></script>
    
    <!-- Bootstrap v3.3.6 (http://getbootstrap.com) -->
    <!-- Copyright 2011-2015 Twitter, Inc. -->

    <!-- INSPINIA - Responsive Admin Theme  add_lp1try -->
     
    <!-- generator author (www.phome.net UTF-8 7.2) -->         
    
    <!-- member skin (www.libusi.com  v1.7) -->   
</body>
</html>