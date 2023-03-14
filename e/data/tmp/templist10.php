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
  <div class="ggwbox"><span id="30" class="lvTestPos"></span></div>
  <div class="ggwbox ggwbox_new"><span id="44" class="lvTestPos"></span></div>
  <div class="weizhi"><span></span><a href="/">首页</a> >
    <p class="dis_online">手机游戏</p>
  </div>
  <!-- 必玩手游 -->
  <div class="g-hotico">
    <div class="mark"></div>
    <div class="show_top_list">
      <ul class="list"> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_soft where classid in (2) and isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>         
        <li class="item"> <a class="pic-group" href="<?=$bqsr['titleurl']?>" target="_blank"> <img class="pic" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <div class="spcover"><span><?=$bqr['title']?></span></div>
          <div class="tit"><?=$bqr['title']?></div>
          <div class="btn">立即下载</div>
          </a> </li>
       <?php
}
}
?>
 
      </ul>
    </div>
  </div>
  <!-- 游戏分类 -->
  <div class="game-content">
    <div class="game-content-l">
      <div class="game-content-list">
        <div class="hd"> <span class="item on">最新</span> </div>
        <div class="bd">
          <ul class="list">
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
    <div class="game-content-r">
      <div class="fldhbox">
        <div class="rg_title">分类</div>
			<div class="fldh_list clearfix"> 
			<?=user_soft()?>
			 </div>
      </div>
      <!-- 猜您喜欢 -->
      <div class="game-you-like" id="gameYouLike">
        <div class="hd">
          <h3 class="title">猜您喜欢</h3>
        </div>
        <div class="bd">
          <ul class="list">  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select title,titleurl,onclick,classid,titlepic from [!db.pre!]ecms_game Union All select title,titleurl,onclick,classid,titlepic from [!db.pre!]ecms_soft order by onclick desc limit 9',0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>       
            <li class="item"> <a href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"> <img class="pic" src="<?=$bqr['titlepic']?>">
              <div class="tit"><?=$bqr['title']?></div>
              </a> </li>
           <?php
}
}
?>
  
          </ul>
        </div>
      </div>
      <!-- 手游TOP榜 -->
      <div class="show_related_game" id="listGameTop">
        <div class="hd">
          <h3 class="title">软件排行</h3>
        </div>
        <div class="b_list nb_list rexin rexin_1">
          <ul> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_soft where newstime > UNIX_TIMESTAMP()-86400*365 order by newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>    
<?
if(bqr[softtype]==1){$fenlei="系统工具";}
else if(bqr[softtype]==2){$fenlei="办公软件";}
else if(bqr[softtype]==3){$fenlei="图形图像";}
else if(bqr[softtype]==4){$fenlei="社交软件";}
else if(bqr[softtype]==5){$fenlei="生活服务";}
else if(bqr[softtype]==6){$fenlei="手机杀毒";}
else if(bqr[softtype]==7){$fenlei="应用工具";}
else if(bqr[softtype]==8){$fenlei="媒体软件";}
else if(bqr[softtype]==9){$fenlei="其他软件";}
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