<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><?
if($navinfor[gametype]==1){$fenlei="角色扮演";}
else if($navinfor[gametype]==2){$fenlei="休闲益智";}
else if($navinfor[gametype]==3){$fenlei="竞技对战";}
else if($navinfor[gametype]==4){$fenlei="音乐舞蹈";}
else if($navinfor[gametype]==5){$fenlei="塔防策略";}
else if($navinfor[gametype]==6){$fenlei="模拟经营";}
else if($navinfor[gametype]==7){$fenlei="冒险解谜";}
else if($navinfor[gametype]==8){$fenlei="卡牌战略";}
else if($navinfor[gametype]==9){$fenlei="其他游戏";}
else if($navinfor[gametype]==10){$fenlei="h5游戏";}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?=$grpagetitle?>-<?=$public_r['add_jianzhanzj_com_name']?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>..." />
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
<link href="/statics/pg/skin_css/pg.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/statics/pg/skin_js/pg.js"></script>
<div class="location"><span></span><?=$grurl?> > <?=$ecms_gr[title]?></div>
<div class="show_main clearfix"> 
  <!-- 主体内容 -->
  <div class="show_content new_content syny_content">
    <div class="show_content1">
      <div class="downl_details sydownl_details clearfix"> 
        <!-- 下载信息 -->
        <div class="details_info fl"> <img class="img" src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" alt="<?=$ecms_gr[title]?>">
          <div class="info">
            <div class="bt">
              <h1><?=$ecms_gr[title]?></h1>
            </div>
            <ul>
              <li><span>类型：</span><?=$fenlei?></li>
              <li><span>版本：</span><?=$ecms_gr[banben]?></li>
              <li><span>语言：</span><?=$ecms_gr[yuyan]?></li>
              <li><span>大小：</span><?=$ecms_gr[daxiao]?></li>
              <li><span>等级：</span><span class="stars star<?=$ecms_gr[dengji]?>"></span></li>
              <li><span>更新：</span><?=date('Y-m-d',$ecms_gr[newstime])?></li>
            </ul>
          </div>
        </div>
        <!-- 下载 -->
        <div class="show_l2 fl "> 
		<?php if($navinfor[anurl]==''){ ?> 
                           <li class="bnt2 none"><a class="count_down"> <span class="icon az"></span> <span>安卓版下载</span> </a></li>
							<?php }else{ $anurl="\\/url.php?url=".base64_encode($navinfor[anurl]); ?>
							<li class="bnt2"><a class="count_down" href="<?=$anurl?>" target="_blank"> <span class="icon az"></span> <span>安卓版下载</span> </a></li><?php } ?>
                        <?php if($navinfor[iosurl]==''){ ?>    
                                                        <li class="bnt1 none"><a class="count_down"> <span class="icon pg"></span> <span>苹果版下载</span> </a></li>
							<?php }else{ $iosurl="\\/url.php?url=".base64_encode($navinfor[iosurl]); ?>
							<li class="bnt1"> <a class="count_down" href="<?=$iosurl?>" target="_blank"> <span class="icon pg"></span> <span>苹果版下载</span> </a></li><?php } ?>
           
            
           
           
            
           
        </div>
        <!-- 手机扫码下载 -->
        <div class="show_l2_code fr" id="showl2Code">
          <div class="bd"> <img src="/qr/api.php?url=<?=$public_r['add_jianzhanzj_com_murl']?><?=$grtitleurl?>&p=5.9&m=1" alt="<?=$ecms_gr[title]?>"> <i class="scan_line"></i> </div>
          <div class="ft">手机扫码下载</div>
        </div>
      </div>
      <div class="detail_tag" id="detailTabs">
        <ul>
          <li class="on" data-id="yxjs"><span>游戏介绍</span></li>
          <li data-id="xgyx"><span>相关游戏</span></li>
          <li data-id="xgwz"><span>相关文章</span></li>
          <li data-id="rmck"><span>热门搜索</span></li>
        </ul>
      </div>
      <div class="art_show_bd">
        <p><?=nl2br($ecms_gr[smalltext])?>...</p>
      </div>
      <div class="nrbox" id="arc_yxjs">
        <div class="pic-scroll" id="picScroll">
          <div class="bd">
            <ul class="list">
			<?php
$picr=explode(egetzy('rn'),$navinfor[morepic]);
$tushu =count($picr);
for($p=0;$p<count($picr);$p++)
{
$spicr=explode("::::::",$picr[$p]);
?>
            <li class="item item<?=($i+1)?>"> <img class="pic" src="<?=$spicr[1]?>" alt="<?=$ecms_gr[title]?>"> </li>
<?php } ?>
              
              
 
            </ul>
            <a class="prev" href="javascript:"><i class="icon icon-prev"></i></a> <a class="next" href="javascript:"><i class="icon icon-next"></i></a> </div>
          <div class="hd">
            <ul>
            </ul>
          </div>
        </div>
        <div class="gamejs">
          <div id="j_app_desc">
              <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>         </div>
          <div class="more_btn"><a href="javascript:void(0)" id="j_app_desc_btn"></a></div>
        </div>
      </div>
    </div>
    <div class="soft_related_box" id="arc_xgyx">
      <div class="hd"><span>相关游戏</span></div>
      <div class="show_top_list">
        <ul class="list"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_game where title like '%$navinfor[title]%' or INSTR('$navinfor[title]',title)>0 order by newstime desc limit 16",10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		<li class="item">
					<a class="pic-group" href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>">
						<img class="pic" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
						<div class="tit"><?=$bqr['title']?></div>
						<div class="btn">立即下载</div>
					</a>
				</li><?php
}
}
?>
        </ul>
      </div>
    </div>
    <!-- 相关专题 -->
    <div class="soft_related_box soft_related_article" id="arc_xgwz">
      <div class="hd"><span>相关文章</span></div>
      <div class="bd">
        <ul>
		<? @sys_GetOtherLinkInfo(13,'',8,32,0,0,0);?>
        </ul>
      </div>
    </div>
    <!-- 人气推荐 -->
    <div class="soft_related_box" id="arc_welike">
      <div class="hd"><span>人气推荐</span></div>
      <div class="show_top_list">
        <ul class="list"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',16,0,0,"gametype='".$navinfor['gametype']."'",'newstime DESC');
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
    <!-- 热门搜索 -->
    <div class="soft_related_box" id="arc_rmck">
      <div class="hd"><span class="sealinknav on">热门搜索</span></div>
      <div class="rmckbox"> 
	  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('game',10,18,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
         <a href="<?=$bqsr['titleurl']?>" class="c-<?=$bqno?> " target="_blank" ><?=$bqr['title']?></a>
         <?php
}
}
?>
      </div>
      <div class="link_yq hide"> </div>
    </div>
  </div>
  <!-- 右侧栏 -->
  <div class="show_r newshow_r synyshow_r">
    <div class="game-you-like" id="gameYouLike">
      <div class="hd">
        <h3 class="title">猜您喜欢</h3>
      </div>
      <div class="bd">
        <ul class="list"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select title,titleurl,onclick,classid,titlepic from [!db.pre!]ecms_game Union All select title,titleurl,onclick,classid,titlepic from [!db.pre!]ecms_soft order by onclick desc limit 9',0,24,0);
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
    <!-- 软件排行 -->
    <div class="show_related_game" id="showdjGame">
      <div class="hd">
        <h3 class="title">游戏排行</h3>
      </div>
      <div class="b_list nb_list rexin rexin_1">
        <ul><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_game where newstime > UNIX_TIMESTAMP()-86400*365 order by newstime desc limit 10",6,24,0);
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
      <ul class="hot_games bd-item on"> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',4,1,0,'','newstime DESC');
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
    <!-- 精选推荐 -->
    <div class="game-you-like" id="showRelatedGame">
      <div class="hd">
        <h3 class="title">精选推荐</h3>
      </div>
      <div class="bd">
        <ul class="list"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',9,2,0,'','newstime DESC');
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
  </div>
</div>
<div class="back_top">
  <div class="backt"><a href="javascript:(0)" target="_self"></a></div>
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
<div style="display:none;"><script src=/e/public/ViewClick?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script></div>
</body>
</html>