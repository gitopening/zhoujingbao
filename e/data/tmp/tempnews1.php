<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?=$grpagetitle?>-<?=$public_r['add_jianzhanzj_com_name']?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link rel="alternate" media="only screen and(max-width: 640px)"  href="<?=$public_r['add_jianzhanzj_com_murl']?><?=$grtitleurl?>" >
<meta name="mobile-agent" content="format=html5;url=<?=$public_r['add_jianzhanzj_com_murl']?><?=$grtitleurl?>">
<meta name="mobile-agent" content="format=xhtml;url=<?=$public_r['add_jianzhanzj_com_murl']?><?=$grtitleurl?>">
<link href="/statics/tt_gb/skin_css/gb.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/statics/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_jianzhanzj_com_murl']?><?=$grtitleurl?>"}})();
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
  <div class="weizhi"><span></span><?=$grurl?> > <?=$ecms_gr[title]?></div>
  <div class="art_list">
    <div class="art_showl">
      <div class="artshow_hd">
        <h1 class="tit"><?=$ecms_gr[title]?></h1>
        <p class="xx"> <span>作者：<?=$docheckrep[2]?ReplaceWriter($ecms_gr[writer]):$ecms_gr[writer]?></span> <span>来源：<?=$docheckrep[1]?ReplaceBefrom($ecms_gr[befrom]):$ecms_gr[befrom]?></span> <span><?=date('Y-m-d',$ecms_gr[newstime])?></span> </p>
      </div>
      <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_game where title like '%$navinfor[title]%' or INSTR('$navinfor[title]',title)>0 order by newstime desc limit 1",10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <div class="game">
        <div class="qhnr">
          <div class="bd">
            <p class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover_100"></span></a></p>
            <div class="info">
              <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
              <p class="xx"> <span>大小：<?=$bqr['daxiao']?></span> <span>语言：<?=$bqr['yuyan']?></span> </p>
              <p class="xx"> <span>类型：<?=$fenlei?></span> <span><em>等级：</em><em class="stars star<?=$bqr['dengji']?>"></em></span> </p>
            </div>
            <p class="bnt"> <a href="<?=$bqsr['titleurl']?>l" target="_blank">立即下载</a> </p>
          </div>
        </div>
      </div>
 <?php
}
}
?>
      <div class="show_box">
		<p class="show_box">
                    <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>      </div>
      <div class="sxp">
        <ul>
          <li><span>上一篇：</span>
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',1,0,0,'id<'.$navinfor[id].'','id desc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>						
          <a href="<?php
echo $bqsr[titleurl];
$pre='true';
?>"><?=$bqr[title]?></a>									
<?php
}
}
?> 	
          </li>
          <li><span>下一篇：</span>
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',1,0,0,'id>'.$navinfor[id].'','id asc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>							
          <a href="<?php
echo $bqsr[titleurl];
$next='true';
?>"><?=$bqr[title]?></a>									
<?php
}
}
?>									
          	
          </li> 
        </ul>
      </div>
      <div class="xgyd-box ui-box">
        <div class="ui-box-hd">
          <h3 class="title">相关阅读</h3>
        </div>
        <div class="ui-box-bd">
          <ul>
            <? @sys_GetOtherLinkInfo(13,'',10,32,0,0,0);?>      
 
          </ul>
        </div>
      </div>
      <!-- 人气推荐 -->
      <div class="soft_related_box" id="arc_welike">
        <div class="hd"><span>人气推荐</span></div>
        <div class="show_top_list">
          <ul class="list"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('game',16,20,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li class="item"> <a class="pic-group" href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"> <img class="pic" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
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
      <div class="ggbox2"><span id="38" class="lvTestPos"></span></div>
    </div>
    <div class="wrap_rg">
      <!-- 热门文章 -->
      <div class="side-hot-news">
        <div class="hd">
          <h3 class="title">热门文章</h3>
        </div>
        <div class="bd">
          <ul class="list-focus"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',6,18,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		  <?
     if($bqno==1)
     {
     $ec1 = '						<li class="item"> <a class="pic" href="'.$bqsr['titleurl'].'" target="_blank"><img src="'.$bqr['titlepic'].'" alt="'.$bqr['title'].'"></a> <a class="tit" href="'.$bqsr['titleurl'].'" target="_blank">'.$bqr['title'].'</a> </li>';
     }
     elseif($bqno==2)
     {
     $ec1 = '						 <li class="item"> <a class="pic" href="'.$bqsr['titleurl'].'" target="_blank"><img src="'.$bqr['titlepic'].'" alt="'.$bqr['title'].'"></a> <a class="tit" href="'.$bqsr['titleurl'].'" target="_blank">'.$bqr['title'].'</a> </li>
 
          </ul>
          <ul class="list">';
	 }
     else
     {
     $ec1 =  '						 <li class="item"><a class="tit" href="'.$bqsr['titleurl'].'" title="'.$bqr['title'].'" target="_blank">'.$bqr['title'].'</a></li>';
     }
	 echo $ec1;
?>     
<?php
}
}
?>
 
          </ul>
        </div>
      </div>
      <!-- 猜您喜欢 -->
      <div class="game-you-like" id="gameYouLike">
        <div class="hd">
          <h3 class="title">猜您喜欢</h3>
        </div>
        <div class="bd">
          <ul class="list"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',9,19,0,'','newstime DESC');
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
      <div class="show_related_game" id="listGameTop">
        <div class="hd">
          <h3 class="title">游戏排行</h3>
        </div>
        <div class="b_list nb_list rexin rexin_1">
          <ul>
           <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_game where newstime > UNIX_TIMESTAMP()-86400*365 order by newstime desc limit 10",6,24,0);
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
      <!-- 火爆游戏 -->
      <div class="show_related_game hbsy_game" id="showRelatedGame3">
        <div class="hd">
          <h3 class="title">火爆游戏</h3>
        </div>
        <ul class="hot_games bd-item on"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('game',4,20,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		<?
if($bqr[gametype]==1){$fenlei="角色扮演";}
else if($bqr[gametype]==2){$fenlei="休闲益智";}
else if($bqr[gametype]==3){$fenlei="竞技对战";}
else if($bqr[gametype]==4){$fenlei="音乐舞蹈";}
else if($bqr[gametype]==5){$fenlei="塔防策略";}
else if($bqr[gametype]==6){$fenlei="模拟经营";}
else if($bqr[gametype]==7){$fenlei="冒险解谜";}
else if($bqr[gametype]==8){$fenlei="卡牌战略";}
else if($bqr[gametype]==9){$fenlei="其他游戏";}
else if($bqr[gametype]==10){$fenlei="h5游戏";}
?>
        <li> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="img"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a>
          <div class="info"> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="bt"><?=$bqr['title']?></a>
            <div class="tag"> <span><?=$fenlei?></span> </div>
            <div class="start"> <span class="star starz4"></span> </div>
          </div>
          <a href="<?=$bqsr['titleurl']?>" target="_blank" class="downl">下载</a> </li>
        <?php
}
}
?>
        </ul>
      </div>
      <!-- 友情链接 --> 
    </div>
  </div>
</div>
<span id="34" class="lvTestPos"></span> 
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
<div style="display:none;"><script src=/e/public/ViewClick?classid=[!--classid--}&id=<?=$ecms_gr[id]?>&addclick=1></script></div>
</body>
</html>