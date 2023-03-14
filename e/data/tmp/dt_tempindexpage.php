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
<link rel="alternate" media="only screen and(max-width: 640px)"  href="<?=$public_r['add_jianzhanzj_com_murl']?>" >
<meta name="mobile-agent" content="format=html5;url=<?=$public_r['add_jianzhanzj_com_murl']?>">
<meta name="mobile-agent" content="format=xhtml;url=<?=$public_r['add_jianzhanzj_com_murl']?>">
<link href="/statics/tt_gb/skin_css/gb.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/statics/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_jianzhanzj_com_murl']?>"}})();
</script>
<style>
.nav a:nth-child(1){background-color: #0078ff;}
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
<div id="main">
  <div class="main_yxtj 111">
    <ul> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select title,titleurl,onclick,classid,titlepic from [!db.pre!]ecms_game Union All select title,titleurl,onclick,classid,titlepic from [!db.pre!]ecms_soft order by onclick desc limit 10',0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>    
      <li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><em class="cover_80"></em><span><?=$bqr['title']?></span></a></li>
      <?php
}
}
?> 
 
    </ul>
  </div>
  <div class="main_menu">
    <dl>
      <dt>推荐</dt>
      <dd> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      	<a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
      <?php
}
}
?> 
      </dd>
    </dl>
    <dl>
      <dt>热门</dt>
      <dd> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('game',10,19,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      	<a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
      	<?php
}
}
?> 
      </dd>
    </dl>
  </div>
  <div class="main_news clearfix">
    <div class="left">
      <div id="main1_l">
        <div class="main1_l_bar_box" id="main1_l_bar_box">
          <ul class="main1_l_bar"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_news where classid in (5,6) and titlepic<>'' and firsttitle=1 order by newstime desc limit 5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
              <p><span><?=$bqr['title']?></span></p>
              </a></li>
            <?php
}
}
?> 
          </ul>
        </div>
        <div class="ft">
          <div class="ftbg"></div>
          <div id="main1_l-num" class="change"> 
             <a class="on"><span class="mask"><em></em></span></a> 
             <a><span class="mask"><em></em></span></a> 
             <a><span class="mask"><em></em></span></a> 
             <a><span class="mask"><em></em></span></a> 
             <a><span class="mask"><em></em></span></a> 
          </div>
        </div>
        <script type="text/javascript" src="/statics/tt_gb/skin_js/jquery.SuperSlide.2.1.1.js" charset="utf-8"></script> 
      </div>
      <div class="zxlb">
        <ul><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',2,18,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li> <a href="<?=$bqsr['titleurl']?>" target="_blank"> <span class="pic"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></span> <span class="r"></span> <em class="cover"></em> <span class="tit"><?=$bqr['title']?></span> </a> </li>
         <?php
}
}
?>
        </ul>
      </div>
    </div>
    <div class="cen">
      <div class="hd">       
        <div class="title"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,12,0,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		 <?
     if($bqno==1)
     {
     $ec1 = '						<a href="'.$bqsr['titleurl'].'" target="_blank">'.$bqr['title'].'</a></div>
        <h3 class="title2">'.$bqr['smalltext'].'<a class="more" href="'.$bqsr['titleurl'].'" target="_blank">[详情]</a> </h3>';
     }
     elseif($bqno==2)
     {
     $ec1 = '						</div>
      <div class="bd" id="news">
        <div class="news_box">
          <ul class="on">         
            <li> <span class="time red">'.date('m-d',$bqr['newstime']).'</span>
              <p class="icon"><a href="'.$bqsr['titleurl'].'" target="_blank"><img src="'.$bqr['titlepic'].'" alt="'.$bqr['title'].'"><span class="cover_22"></span></a></p>
              <a class="tit" href="'.$bqsr['titleurl'].'" target="_blank">'.$bqr['title'].'</a> 
            </li>';
	 }
     else
     {
     $ec1 =  '						 <li> <span class="time red">'.date('m-d',$bqr['newstime']).'</span>
              <p class="icon"><a href="'.$bqsr['titleurl'].'" target="_blank"><img src="'.$bqr['titlepic'].'" alt="'.$bqr['title'].'"><span class="cover_22"></span></a></p>
              <a class="tit" href="'.$bqsr['titleurl'].'" target="_blank">'.$bqr['title'].'</a> 
            </li>';
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
    </div>
    <div class="right"> 
      <!-- 玩家推荐 -->
      <div class="ui_box">
        <div class="ui_box_hd">玩家推荐</div>
        <div class="rgyxbox">
          <ul class="clearfix"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,5,0,1,'isgood=2','newstime DESC');
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
            <li> <a href="<?=$bqsr['titleurl']?>" target="_blank">
              <p class="pimg"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></p>
              <p class="ptit"> <span class="sptit fl"><?=$bqr['title']?></span> <span class="spbtn fr">下 载</span> </p>
              <p class="pbot"><?=$fenlei?> | 大小：<?=$bqr['daxiao']?></p>
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
<!--热门手游-->
  <div class="section_box">
    <div class="section_box_hd">
      <h3 class="title"><b>热门手游</b></h3>
    </div>
    <div class="section_box_bd">
      <div class="section_box_cont on">
        <div class="section_box_list">
          <ul> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where titlepic<>'' order by onclick desc limit 18",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>  
		  <?php
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
            <li> <a class="item" href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"> <img class="pic"  src="<?=$bqr['titlepic']?>"  alt="<?=$bqr['title']?>">
              <div class="tit"><?=$bqr['title']?></div>
              <div class="cls"><?=$fenlei?></div>
              </a> </li>
           <?php
}
}
?>
 
          </ul>
        </div>
        <div class="section_box_top index_r">
          <div class="index_r_tit"><em></em>手游排行</div>
          <div class="index_r_lb">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,8,1,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
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
           <dl <?php
if($bqno==1)
{
echo 'class="on"';
}
else
{
echo '';
}
?>>
              <dt><span class="num <? echo change("<?=$bqno?>");?>"><?=$bqno?></span></dt>
              <dd>
                <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img  class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover_56"></span></a></div>
                <div class="r"> <a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
                  <p class="xx"><span class="stars 4"></span></p>
                  <p class="cls"><?=$fenlei?></p>
                  <p class="down"><a href="<?=$bqsr['titleurl']?>" target="_blank">下 载</a></p>
                </div>
              </dd>
            </dl>
 <?php
}
}
?>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--热门应用-->
  <div class="section_box ios_section_box">
    <div class="section_box_hd">
      <h3 class="title"><b>手机必备</b></h3>
    </div>
    <div class="section_box_bd">
      <div class="section_box_cont on">
        <div class="section_box_list">
          <ul>
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where titlepic<>'' order by newstime desc limit 18",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>  
		  <?php
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
            <li> <a class="item" href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"> <img class="pic"  src="<?=$bqr['titlepic']?>"  alt="<?=$bqr['title']?>">
              <div class="tit"><?=$bqr['title']?></div>
              <div class="cls"><?=$fenlei?></div>
              </a> </li>
           <?php
}
}
?>
           
          </ul>
        </div>
        <div class="section_box_top index_r">
          <div class="index_r_tit"><em></em>必备排行</div>
          <div class="index_r_lb">
            <div class="index_r_lb">
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,8,2,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
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
           <dl <?php
if($bqno==1)
{
echo 'class="on"';
}
else
{
echo '';
}
?>>
              <dt><span class="num <? echo change("<?=$bqno?>");?>"><?=$bqno?></span></dt>
              <dd>
                <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img  class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover_56"></span></a></div>
                <div class="r"> <a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
                  <p class="xx"><span class="stars 4"></span></p>
                  <p class="cls"><?=$fenlei?></p>
                  <p class="down"><a href="<?=$bqsr['titleurl']?>" target="_blank">下 载</a></p>
                </div>
              </dd>
            </dl>
 <?php
}
}
?>
 
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--网站推荐-->
  <div class="section_box ios_section_box">
    <div class="section_box_hd">
      <h3 class="title"><b>小编推荐</b></h3>
    </div>
    <div class="section_box_bd">
      <div class="section_box_cont on">
        <div class="section_box_list">
          <ul><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select title,titleurl,onclick,classid,titlepic from [!db.pre!]ecms_game Union All select title,titleurl,onclick,classid,titlepic from [!db.pre!]ecms_soft order by onclick desc limit 18',0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <?php
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
            <li> <a class="item" href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"> <img class="pic"  src="<?=$bqr['titlepic']?>"  alt="<?=$bqr['title']?>">
              <div class="tit"><?=$bqr['title']?></div>
              <div class="cls"><?=$fenlei?></div>
              </a> </li>
           <?php
}
}
?>
           
          </ul>
        </div>
        <div class="section_box_top index_r">
          <div class="index_r_tit"><em></em>推荐排行</div>
          <div class="index_r_lb">
            <div class="index_r_lb"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where newstime > UNIX_TIMESTAMP()-86400*15 order by newstime desc limit 8",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<?php
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
			<dl <?php
if($bqno==1)
{
echo 'class="on"';
}
else
{
echo '';
}
?>>
              <dt><span class="num <? echo change("<?=$bqno?>");?>"><?=$bqno?></span></dt>
              <dd>
                <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img  class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover_56"></span></a></div>
                <div class="r"> <a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
                  <p class="xx"><span class="stars 4"></span></p>
                  <p class="cls"><?=$fenlei?></p>
                  <p class="down"><a href="<?=$bqsr['titleurl']?>" target="_blank">下 载</a></p>
                </div>
              </dd>
            </dl>
 <?php
}
}
?>
 
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--手机软件-->
  <div class="section_box ios_section_box">
    <div class="section_box_hd">
      <h3 class="title"><b>手机软件</b></h3>
    </div>
    <div class="section_box_bd">
      <div class="section_box_cont on">
        <div class="section_box_list">
          <ul><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,18,0,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <?
if($bqr[softtype]==1){$fenlei="系统工具";}
else if($bqr[softtype]==2){$fenlei="办公软件";}
else if($bqr[softtype]==3){$fenlei="图形图像";}
else if($bqr[softtype]==4){$fenlei="社交软件";}
else if($bqr[softtype]==5){$fenlei="生活服务";}
else if($bqr[softtype]==6){$fenlei="手机杀毒";}
else if($bqr[softtype]==7){$fenlei="应用工具";}
else if($bqr[softtype]==8){$fenlei="媒体软件";}
else if($bqr[softtype]==9){$fenlei="其他游戏";}
?>         
            <li> <a class="item" href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"> <img class="pic"  src="<?=$bqr['titlepic']?>"  alt="<?=$bqr['title']?>">
              <div class="tit"><?=$bqr['title']?></div>
              <div class="cls"><?=$fenlei?></div>
              </a> </li>
           <?php
}
}
?>
            
          </ul>
        </div>
        <div class="section_box_top index_r">
          <div class="index_r_tit"><em></em>软件排行</div>
          <div class="index_r_lb">
            <div class="index_r_lb"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_soft where newstime > UNIX_TIMESTAMP()-86400*365 order by newstime desc limit 8",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?
if($bqr[softtype]==1){$fenlei="系统工具";}
else if($bqr[softtype]==2){$fenlei="办公软件";}
else if($bqr[softtype]==3){$fenlei="图形图像";}
else if($bqr[softtype]==4){$fenlei="社交软件";}
else if($bqr[softtype]==5){$fenlei="生活服务";}
else if($bqr[softtype]==6){$fenlei="手机杀毒";}
else if($bqr[softtype]==7){$fenlei="应用工具";}
else if($bqr[softtype]==8){$fenlei="媒体软件";}
else if($bqr[softtype]==9){$fenlei="其他游戏";}
?>
           <dl <?php
if($bqno==1)
{
echo 'class="on"';
}
else
{
echo '';
}
?>>
              <dt><span class="num <? echo change("<?=$bqno?>");?>"><?=$bqno?></span></dt>
              <dd>
                <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img  class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover_56"></span></a></div>
                <div class="r"> <a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
                  <p class="xx"><span class="stars 4"></span></p>
                  <p class="cls"><?=$fenlei?></p>
                  <p class="down"><a href="<?=$bqsr['titleurl']?>" target="_blank">下 载</a></p>
                </div>
              </dd>
            </dl>
 <?php
}
}
?>
 
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--电脑软件-->
  <div class="section_box ios_section_box">
    <div class="section_box_hd">
      <h3 class="title"><b>电脑软件</b></h3>
    </div>
    <div class="section_box_bd">
      <div class="section_box_cont on">
        <div class="section_box_list">
          <ul><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,18,0,0,'','newstime DESC');
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
            <li> <a class="item" href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"> <img class="pic"  src="<?=$bqr['titlepic']?>"  alt="<?=$bqr['title']?>">
              <div class="tit"><?=$bqr['title']?></div>
              <div class="cls"><?=$fenlei?></div>
              </a> </li>
           <?php
}
}
?>
            
          </ul>
        </div>
        <div class="section_box_top index_r">
          <div class="index_r_tit"><em></em>软件排行</div>
          <div class="index_r_lb">
            <div class="index_r_lb"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_pc where newstime > UNIX_TIMESTAMP()-86400*365 order by newstime desc limit 8",6,24,0);
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
           <dl <?php
if($bqno==1)
{
echo 'class="on"';
}
else
{
echo '';
}
?>>
              <dt><span class="num <? echo change("<?=$bqno?>");?>"><?=$bqno?></span></dt>
              <dd>
                <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img  class="lazy" src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover_56"></span></a></div>
                <div class="r"> <a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
                  <p class="xx"><span class="stars 4"></span></p>
                  <p class="cls"><?=$fenlei?></p>
                  <p class="down"><a href="<?=$bqsr['titleurl']?>" target="_blank">下 载</a></p>
                </div>
              </dd>
            </dl>
 <?php
}
}
?>
 
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 游戏攻略 -->
  <div class="index_az index_yxzx">
    <div class="index_left">
      <div class="index_gytit">
        <p class="tit"><span>游戏攻略</span></p>
      </div>
      <div class="mbox clearfix"> <a class="more" href="/news/" target="_blank">更多+</a>
        <div class="index4_nrl">
         <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_news where classid in (5,6) and firsttitle=1 and titlepic <> '' order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <div class="zx_tt"> <a href="<?=$bqsr['titleurl']?>" target="_blank"> <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"> <span class="bt"><?=$bqr['title']?></span> </a> </div>
         <?php
}
}
?>
        </div>
        <div class="index4_nrr">
          <div class="hd"> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',11,18,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>          
            <?
     if($bqno==1)
     {
     $ec1 = '						<p class="tit"> <a href="'.$bqsr['titleurl'].'" target="_blank">'.$bqr['title'].'</a> </p>
            <p class="txt">'.$bqr['smalltext'].' ... <a class="mores" href="'.$bqsr['titleurl'].'" target="_blank">[详情]</a></p> 
            <ul>';
     }
     elseif($bqno==2)
     {
     $ec1 = '						<li> <span class="time">'.date('m/d',$bqr['newstime']).'</span> <em class="dian"></em> <a href="'.$bqsr['titleurl'].'" target="_blank">'.$bqr['title'].'</a> </li>';
	 }
     else
     {
     $ec1 =  '						 <li> <span class="time">'.date('m/d',$bqr['newstime']).'</span> <em class="dian"></em> <a href="'.$bqsr['titleurl'].'" target="_blank">'.$bqr['title'].'</a> </li>';
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
      </div>
    </div>
    <div class="index_rs" id="yxzx">
      <div class="index_r_tit"><span>软件教程</span><a class="more" href="/news/rjjc/" target="_blank">更多+</a></div>
      <div class="index_r_lb index_rmzxlb"> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,9,0,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
	    <dl <?php
if($bqno==1)
{
echo 'class="on"';
}
else
{
echo '';
}
?>>
              <dt><span class="num <? echo change("<?=$bqno?>");?>"><?=$bqno?></span><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></dt>
          <dd>
            <div class="pic"> <a href="<?=$bqsr['titleurl']?>" target="_blank"> <img class="lazy" src="<?=$bqr['titlepic']?>" data-original="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"> </a> </div>
            <div class="r">
              <p class="down"><a href="<?=$bqsr['titleurl']?>" target="_blank">查看详情</a></p>
            </div>
          </dd>
        </dl>
 <?php
}
}
?>    
        
          
        
      </div>
    </div>
  </div>
  <!-- 小编推荐 -->
  <div class="main_xbtj" id="xbtjMain">
    <div class="hd">
      <h3 class="title">手游推荐</h3>
      <ul class="tab_hd">
        <li class="on">全部</li>
        <li>热门推荐</li>
        <li>精选推荐</li>
        <li>最新推荐</li>
        <li>编辑推荐</li>
        <li>今日推荐</li>
        <li>本周推荐</li>
        <li>本月推荐</li>
      </ul>
    </div>
    <div class="bd">
      <div class="tab_bd_item on">
        <ul class="clearfix">
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where newstime > UNIX_TIMESTAMP()-86400*365 order by newstime desc limit 50",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li><a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
         <?php
}
}
?>
 
        </ul>
      </div>
      <div class="tab_bd_item">
        <ul class="clearfix">
         <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where newstime > UNIX_TIMESTAMP()-86400*365 order by onclick desc limit 50",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li><a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
         <?php
}
}
?>
          
        </ul>
      </div>
      <div class="tab_bd_item">
        <ul class="clearfix">
         <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where newstime > UNIX_TIMESTAMP()-86400*30 order by newstime desc limit 50",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li><a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
         <?php
}
}
?>
          
        </ul>
      </div>
      <div class="tab_bd_item">
        <ul class="clearfix">
          <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where newstime > UNIX_TIMESTAMP()-86400*15 order by newstime desc limit 50",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li><a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
         <?php
}
}
?>
         
 
        </ul>
      </div>
      <div class="tab_bd_item">
        <ul class="clearfix">
          <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where newstime > UNIX_TIMESTAMP()-86400*7 order by newstime desc limit 50",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li><a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
         <?php
}
}
?>
         
 
        </ul>
      </div>
      <div class="tab_bd_item">
        <ul class="clearfix">
		 <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where newstime > UNIX_TIMESTAMP()-86400*120 order by newstime desc limit 50",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li><a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
         <?php
}
}
?>
        </ul>
      </div>
      <div class="tab_bd_item">
        <ul class="clearfix">
          <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where newstime > UNIX_TIMESTAMP()-86400*180 order by onclick desc limit 50",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li><a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
         <?php
}
}
?>
         
        </ul>
      </div>
      <div class="tab_bd_item">
        <ul class="clearfix">
         <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where newstime > UNIX_TIMESTAMP()-86400*60 order by onclick desc limit 50",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li><a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
         <?php
}
}
?>
          
        </ul>
      </div>
    </div>
  </div>
  <div class="link_box">
    <div class="hd">
      <div class="link_arrow"> <a class="link_left disable" href="javascript:void(0);" id="partnerNext">→</a> <a class="link_right" href="javascript:void(0);" id="partnerPrev">←</a> </div>
      友情链接 </div>
    <div id="partner" class="partner_con">
      <ul>
  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 and lpic="" order by lid',100,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<li><a href="<?=$bqr[lurl]?>"  target="_blank" title="<?=$bqr[lname]?>"><?=$bqr[lname]?></a></li>
<?php
}
}
?>
      </ul>
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
<script type="text/javascript" src="/statics/tt_gb/skin_js/index.js"></script>
</body>
</html>