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
<link rel="alternate" media="only screen and(max-width: 640px)"  href="<?=$public_r['add_jianzhanzj_com_murl']?>/<?=$class_r[$GLOBALS[navclassid]][classpath]?>/" >
<meta name="mobile-agent" content="format=html5;url=<?=$public_r['add_jianzhanzj_com_murl']?>/<?=$class_r[$GLOBALS[navclassid]][classpath]?>/">
<meta name="mobile-agent" content="format=xhtml;url=<?=$public_r['add_jianzhanzj_com_murl']?>/<?=$class_r[$GLOBALS[navclassid]][classpath]?>/">
<link href="/statics/tt_gb/skin_css/gb.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/statics/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_jianzhanzj_com_murl']?>/<?=$class_r[$GLOBALS[navclassid]][classpath]?>/"}})();
</script>
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
  <div class="weizhi"><span></span>[!--newsnav--]</div>
  <div class="hot_rj">
    <dl>
      <dt>热门</dt>  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_pc where classid in (3) and isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>   
      <dd> <a href="<?=$bqsr['titleurl']?>" target="_blank"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"> <span class="cover_74"></span> <em><?=$bqr['title']?></em> </a> </dd><?php
}
}
?>
      
  
    </dl>
  </div>
  <div class="w1k_box zzlb">
    <div class="lb_left">
      <div class="rg_title">电脑软件</div>
      <div class="soft_list2" id="list_content">
        <div id="pageList">
            [!--empirenews.listtemp--]
<!--list.var1-->

[!--empirenews.listtemp--]
                      
            
         
            
        </div>
      </div>
      <div class="page">
        <div class="page con_page" id="lcpage">
          <div class="laypage_main laypageskin_molv">[!--show.listpage--]</div>
        </div>
      </div>
    </div>
    <div class="wrap_rg">
      <div class="fldhbox">
        <div class="rg_title">分类</div>
			<div class="fldh_list clearfix"> <?=user_pc()?> </div>
      </div>
      <!-- 猜您喜欢 -->
      <div class="game-you-like" id="gameYouLike">
        <div class="hd">
          <h3 class="title">猜您喜欢</h3>
        </div>
        <div class="bd">
          <ul class="list">
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select title,titleurl,onclick,classid,titlepic from [!db.pre!]ecms_pc Union All select title,titleurl,onclick,classid,titlepic from [!db.pre!]ecms_soft order by onclick desc limit 9',0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?> 
          <li class="item"> <a href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"> <img class="pic" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
            <div class="tit"><?=$bqr['title']?></div>
            </a> </li>
          <?php
}
}
?>
 
          </ul>
        </div>
      </div>
      <!-- 热门软件 -->
      <div class="show_related_game hbsy_game" id="showRelatedGame3">
        <div class="hd">
          <h3 class="title">热门软件</h3>
        </div>
        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('pc',4,20,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		<?
if($bqr[pctype]==1){$fenlei="系统软件";}
else if($bqr[pctype]==2){$fenlei="办公软件";}
else if($bqr[pctype]==3){$fenlei="图形图像";}
else if($bqr[pctype]==4){$fenlei="社交软件";}
else if($bqr[pctype]==5){$fenlei="生活服务";}
else if($bqr[pctype]==6){$fenlei="安全软件";}
else if($bqr[pctype]==7){$fenlei="应用工具";}
else if($bqr[pctype]==8){$fenlei="媒体软件";}
else if($bqr[pctype]==9){$fenlei="其他软件";}
?>
        <ul class="hot_games bd-item on">
            <li> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="img"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a>
              <div class="info"> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="bt"><?=$bqr['title']?></a>
                <div class="tag"> <span><?=$fenlei?></span> </div>
                <div class="start"> <span class="star starz4"></span> </div>
              </div>
              <a href="<?=$bqsr['titleurl']?>" target="_blank" class="downl">下载</a> </li>
        </ul>
        <?php
}
}
?>
        
      </div>
      <div class="show_related_game" id="listGameTop">
        <div class="hd">
          <h3 class="title"> 软件排行</h3>
        </div>
        <div class="b_list nb_list rexin rexin_1">
          <ul><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_pc where newstime > UNIX_TIMESTAMP()-86400*365 order by newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		  <?
if($bqr[pctype]==1){$fenlei="系统软件";}
else if($bqr[pctype]==2){$fenlei="办公软件";}
else if($bqr[pctype]==3){$fenlei="图形图像";}
else if($bqr[pctype]==4){$fenlei="社交软件";}
else if($bqr[pctype]==5){$fenlei="生活服务";}
else if($bqr[pctype]==6){$fenlei="安全软件";}
else if($bqr[pctype]==7){$fenlei="应用工具";}
else if($bqr[pctype]==8){$fenlei="媒体软件";}
else if($bqr[pctype]==9){$fenlei="其他软件";}
?>
		   <li <?php
if($bqno==1)
{
echo 'class="hover"';
}
else
{
echo '';
}
?>>
            
              <div class="lb_mr"><em class="no<?=$bqno?>"><?=$bqno?></em><span><?=$bqr['title']?></span><a href="<?=$bqsr['titleurl']?>" target="_blank" class="lq">下载</a></div>
              <div class="lb_hover"> <em class="no1"><?=$bqno?></em>
                <div class="lb_icon"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover_89"></span></a></div>
                <div class="lb_intro">
                  <p class="title"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                  <p class="sl"><span class="star starz4"></span></p>
                  <p class="time"><?=$fenlei?></p>
                </div>
                <div class="lb_a"><a href="<?=$bqsr['titleurl']?>" target="_blank" class="lq">下载</a></div>
              </div>
            </li>
         <?php
}
}
?>
          </ul>
        </div>
      </div>
      <!-- 友情链接 --> 
    </div>
  </div>
</div>
<div class="footer">
  <div class="foot common">
    <div class="foot_m">
      <p class="txt">Copyright&nbsp;&copy;&nbsp; 2020-2030 <?=$public_r['add_jianzhanzj_com_murl']?> <a href="<?=$public_r['add_jianzhanzj_com_url']?>" rel="nofollow" target="_blank">技术支持：<?=$public_r['add_jianzhanzj_com_name']?></a></p>
    </div>
  </div>
</div>
<div style="display:none"> 
</div>
<script type="text/javascript" src="/statics/tt_gb/skin_js/gb.js"></script>
</body>
</html>