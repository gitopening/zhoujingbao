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
<meta name="description" content="[!--pagedes--]..." />
<link href="/statics/tt_gb/skin_css/gb.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/statics/js/jquery-1.8.3.min.js"></script>
<style>
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
  <div class="weizhi"><span></span><a href="/">首页</a> > <a href="/zt/">专题合集</a> >
      <h1 class="dis_online">[!--pagetitle--]</h1>
  </div>
  <div class="collections">
    <div class="main_ztgg">
      <div class="ztgg_lf"><img src="[!--class.classimg--]" alt="[!--pagetitle--]"></div>
      <div class="ztgg_rg">
        <div class="ztgg_rg_tt">
          <h1>[!--pagetitle--]</h1>
        </div>
        <div class="ztgg_rg_int" id="ztRemark">
          <div class="hd">[!--class.intro--]...</div>
        </div>
        <div class="bottom">
          <div class="time">更新时间：<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select addtime from [!db.pre!]enewszt where ztid='$GLOBALS[navclassid]'",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><?=date('Y-m-d',$bqr[addtime])?><?php
}
}
?></div>
        </div>
      </div>
    </div>
    <!-- 游戏列表 -->
    <div class="zhuanti-list" style=" margin-bottom: 40px;">
      <ul class="sy_ul clearfix">
        [!--empirenews.listtemp--]
<!--list.var1-->
[!--empirenews.listtemp--]
 
        
      </ul>
    </div>
    <div class="ft">
        <div class="page con_page" id="lcpage">
          <div class="laypage_main laypageskin_molv"></div>
        </div>
    </div>
    <!-- 合集推荐 -->
    <div class="zt_box2">
      <div class="index_gytit">
        <p class="tit"><span>合集推荐</span></p>
      </div>
      <div class="ztlb" id="ztlb">
        <div class="bd">
          <ul>
         <?
$zt=$empire->query("select ztid,ztname,ztpath,ztimg from {$dbtbpre}enewszt order by ztid DESC limit 8");
while($r=$empire->fetch($zt))
{
?> 

            <li> <a class="pic" href="/<?=$r['ztpath']?>/" target="_blank"> <img src="<?=$r['ztimg']?>" alt="<?=$r['ztname']?>"> </a> <a class="tit" href="/<?=$r['ztpath']?>" target="_blank"><?=$r['ztname']?></a>
              <p class="bott"> <span class="time"><?php $_zt=$empire->fetch1("select * from {$dbtbpre}enewszt where ztid='$GLOBALS[navclassid]'");?>
<?=date('Y-m-d',$_zt[addtime])?></span> <a class="bnt" href="/<?=$r[ztpath]?>/" target="_blank">进入专题</a> </p>
            </li>
           <?
}
?>
          </ul>
        </div>
        <a class="mrd_bl prev" id="prev" href="javascript:void(0);"></a> <a class="mrd_br next" id="next" href="javascript:void(0);"></a> </div>
    </div>
    <div class="back_top">
      <div class="backt"><a href="javascript:(0)" target="_self"></a></div>
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