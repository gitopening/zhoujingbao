<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>[!--keyboard--] 搜索结果_<?=$public_r['add_jianzhanzj_com_name']?></title>
<meta name="keywords" content="高级搜索 [!--pagekey--]" />
<meta name="description" content="高级搜索 [!--pagedes--]" />
<link href="/statics/tt_gb/skin_css/gb.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/statics/js/jquery-1.8.3.min.js"></script>
<style>
#main1k .w1k_box.zzlb .lb_left {
    width: 1200px;
}
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
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]enewsclass where classid in(1,2,3,4) order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
	
	<a href="<?=$bqsr[classurl]?>" <? if($bqr['classid']==$GLOBALS['navclassid']){?>class="on"<? } ?>><?=$bqr[classname]?></a> <?php
}
}
?>																										
															
    <a href="/zt/">专题大全</a> 
    <a href="/top/">排行榜</a> </div>
  </div>
</div>
<div id="main1k">
  <div class="weizhi"><span></span><a href="/">首页</a> > 搜索词“[!--keyboard--]”</div>
  <div class="w1k_box zzlb">
    <div class="lb_left">
      <div class="soft_list2" id="list_content">
        <div id="pageList">
            [!--empirenews.listtemp--]
<!--list.var1-->

[!--empirenews.listtemp--]  
           
            
            
        </div>
      </div>
      <div class="page">
        <div class="page con_page" id="lcpage">
          [!--show.page--]</div>
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
