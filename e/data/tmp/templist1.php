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
  <div class="weizhi"><span></span>[!--newsnav--]
  </div>
  <div class="art_list">
    <div class="art_listl" id="list_content">
      <div id="pageList">
        [!--empirenews.listtemp--]
<!--list.var1-->

[!--empirenews.listtemp--]
        
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
        <div class="fldh_list clearfix">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]enewsclass where classid in(5,6) order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>																																	
		<a href="<?=$bqsr[classurl]?>" <? if($bqr['classid']==$GLOBALS['navclassid']){?>class="on"<? } ?>><?=$bqr[classname]?></a> <?php
}
}
?>														
        </div>
      </div>
      <!-- 热门文章 -->
      <div class="side-hot-news">
        <div class="hd">
          <h3 class="title">热门文章</h3>
        </div>
        <div class="bd">
          <ul class="list-focus"> <?php
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
          <ul class="list">
            <?php
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
          <h3 class="title"> 游戏排行</h3>
        </div>
        <div class="b_list nb_list rexin rexin_1">
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