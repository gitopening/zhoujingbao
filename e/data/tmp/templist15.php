<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>[!--pagetitle--]-<?=$public_r['add_jianzhanzj_com_name']?></title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="/statics/tt_gb/skin_css/gb.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/statics/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_jianzhanzj_com_murl']?>/zt/"}})();
</script>
<style>
.nav a:nth-child(3){background-color: #0099ff;}
.nav a:nth-child(6){background-color: #0078ff;}
</style>
</head>
<body>
<div class="head">
  <div class="header">
    <div class="logo"><a href="/"><img src="/statics/tt_gb/skin_img/logo.png" alt="<?=$public_r['add_jianzhanzj_com_name']?>"></a></div>
    <p class="lsrj"></p>
    <div class="sous">
      <div class="search"> 
        <span class="icon"></span>
        <form action="/e/search/index.php" method="post" target="_blank">
          <input type="text" class="text" name="keyboard" size="30" value="" placeholder="全民K歌"/>
          <input name="searchbtn" type="submit" class="button" value="搜索" search_type ="init"/>
          <input type="hidden" name="show" value="title">
          <input type="hidden" name="tempid" value="1" >
          <input type="hidden" name="tbname" value="game">
        </form>
      </div>
    </div>
  </div>
  <div class="nav_box">
    <div class="nav"> 
       <a href="/">首页</a>
															
															
       <a href="/game/" >手机游戏</a> 														
															
															
       <a href="/app/" class="">手机软件</a> 														
															
															
       <a href="/soft/" class="">电脑软件</a> 														
															
															
       <a href="/news/" class="">资讯攻略</a> 																								
															
    <a href="/zt/" class="on">专题大全</a> 
    <a href="/top/">排行榜</a> </div>
  </div>
</div>
<div id="main1k">
  <div class="weizhi"><span></span><a href="/">首页</a> >
    <h1 class="dis_online"> 专题合集</h1>
  </div>
  <div class="zt_box2">
    <div class="index_gytit">
      <p class="tit"><span>专题合集</span></p>
    </div>
    <div class="ztlb" id="stlist">
      <div class="bd">
        <ul>
           [!--empirenews.listtemp--]
<!--list.var1-->

[!--empirenews.listtemp--] 
                      
            
        </ul>
      </div>
      <div class="ft">
        <div class="page con_page" id="lcpage">
          <div class="laypage_main laypageskin_molv">[!--show.listpage--]</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="foot common">
    <div class="foot_m">
      <p class="txt">Copyright&nbsp;&copy;&nbsp; 2020-2030 weite.96demo.com <a href="https://www.96kaifa.com" rel="nofollow" target="_blank">技术支持：96KaiFa</a></p>
    </div>
  </div>
</div>
<div style="display:none"> 
</div>
<script type="text/javascript" src="/statics/tt_gb/skin_js/gb.js"></script>
</body>
</html>