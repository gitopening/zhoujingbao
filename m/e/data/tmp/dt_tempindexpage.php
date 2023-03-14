<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>[!--pagetitle--]-<?=$public_r['add_jianzhanzj_com_name']?></title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="applicable-device" content="mobile">
<link rel="canonical" href="<?=$public_r['add_jianzhanzj_com_murl']?>">
<link rel="stylesheet" href="/statics/mobile/css/style.css">
</head>
<body>
<div class="page page-detail" id="page"> 
  <!-- header -->
    <header class="page-header">
      <div class="topbar flex"> 
        <a class="logo-wrap" href="/"><img class="logo" src="/statics/mobile/images/logo.png" alt="<?=$public_r['add_jianzhanzj_com_name']?>"></a>
        <form class="search-form flex-item" action="/e/search/index.php" method="post" target="_blank">
          <input type="search" class="search-input" name="keyboard" size="30" value="" placeholder="请输入搜索关键词"/>
          <span class="search-clear"><i class="icon icon-clear"></i></span>
          <button class="search-icon" type="submit"><i class="icon icon-search"></i></button>
          <input type="hidden" name="show" value="title">
          <input type="hidden" name="tempid" value="1" >
          <input type="hidden" name="tbname" value="game">
        </form>
      </div>
      <nav class="navbar"> <a class="nav-link" href="/">首页</a> 
	  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]enewsclass where classid in(1,2,4) order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
	  <a class="nav-link <? if($bqr['classid']==$GLOBALS['navclassid']){?>on<? } ?>" href="<?=$bqsr[classurl]?>"><?=$bqr[bname]?></a><?php
}
}
?> <a class="nav-link" href="/zt/">专题</a> <a class="nav-link" href="/top/">排行</a> </nav>
    </header>
<section class="page-content"> 
  <!-- 首页焦点图广告位 -->
  <div class="index-focus-wrap">
    <div class="index-focus" id="iFocus">
      <ul class="bd">
	  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',5,18,1,'isgood=1','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li><a href="<?=$bqsr['titleurl']?>"> <img class="pic" src="<?=$public_r['add_jianzhanzj_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <div class="tit"><?=$bqr['title']?></div>
          </a></li>
        <?php
}
}
?>
      </ul>
      <ul class="hd">
      </ul>
    </div>
  </div>
  <!-- 热门游戏 -->
  <div class="section">
    <div class="section-hd">
      <h3 class="title">热门游戏</h3>
    </div>
    <div class="soft-list">
      <ul class="list" id='rmwy'> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where classid in (1) and titlepic <> '' order by onclick desc limit 8",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>        
        <li class="item"> <a href="<?=$bqsr['titleurl']?>"> <img class="pic lazy" src="<?=$public_r['add_jianzhanzj_com_url']?><?=$bqr['titlepic']?>" data-src="<?=$public_r['add_jianzhanzj_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <div class="tit tit-aline"><?=$bqr['title']?></div>
          </a> </li>
         <?php
}
}
?>
      </ul>
    </div>
  </div>
  <!-- 游戏必备 -->
  <div class="section section-software">
    <div class="section-hd">
      <h3 class="title">游戏必备</h3>
    </div>
    <div class="soft-list">
      <ul class="list" id="rjbb">
	   <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]ecms_game where classid in (1) and firsttitle=1 and titlepic <> '' order by onclick desc limit 8",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li class="item"> <a href="<?=$bqsr['titleurl']?>"> <img class="pic lazy" src="<?=$public_r['add_jianzhanzj_com_url']?><?=$bqr['titlepic']?>" data-src="<?=$public_r['add_jianzhanzj_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <div class="tit tit-aline"><?=$bqr['title']?></div>
          </a> </li>
         <?php
}
}
?>
        
      </ul>
    </div>
  </div>
  <!-- 最新手游 -->
  <div class="section mobile-games-list" id="mobileGamesList">
    <div class="section-hd">
      <h3 class="title">最新手游</h3>
    </div>
    <div class="tab-content on">
      <div class="soft-list2">
        <div class="list" id="listContent"> 
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,8,0,1,'','newstime DESC');
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
          <a class="list-item flex" href="<?=$bqsr['titleurl']?>">
          <div class="col"> <img class="pic lazy" src="<?=$public_r['add_jianzhanzj_com_url']?><?=$bqr['titlepic']?>" data-src="<?=$public_r['add_jianzhanzj_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"> </div>
          <div class="con flex-item">
            <div class="tit"><?=$bqr['title']?></div>
            <div class="star star4"></div>
            <div class="txt"> <span class="attr"><?=$fenlei?></span> <span class="attr">大小:<?=$bqr['daxiao']?></span> </div>
          </div>
          <div class="col"> <span class="btn btn-download">下&nbsp;载</span> </div>
          </a> 
          <?php
}
}
?>
         </div>
      </div>
    </div>
  </div>
  <!-- 资讯攻略 -->
  <div class="section section-article">
    <div class="section-hd">
      <h3 class="title">资讯攻略</h3>
      <a class="more" href="/news/">更多+</a> </div>
    <div class="article-list">  
	   <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,6,0,1,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <a class="item" href="<?=$bqsr['titleurl']?>"> <img class="pic lazy" src="<?=$public_r['add_jianzhanzj_com_url']?><?=$bqr['titlepic']?>"  data-src="<?=$public_r['add_jianzhanzj_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
      <div class="con">
        <h3 class="tit"><?=$bqr['title']?></h3>
        <p class="time"><?=date('Y-m-d',$bqr[newstime])?></p>
      </div>
      </a>
      <?php
}
}
?>
     </div>
  </div>
  <!-- 精选分类 -->
  <div class="section section-category">
    <div class="section-hd">
      <h3 class="title">游戏分类</h3>
    </div>
    <div class="section-bd">
      <div class="list"> 
	   <?=user_homegame()?>
      </div>
    </div>
  </div>
  <!-- 友情链接 -->
  <div class="section friend-link" id="friendLink">
    <div class="section-hd">
      <h3 class="title">友情链接</h3>
    </div>
    <div class="section-bd">
      <div class="list">
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
</section>
<!-- footer -->
<footer class="page-footer">
  <div class="copyright">
     <p>Copyright&nbsp;&copy;&nbsp; 2020-2030 <?=$public_r['add_jianzhanzj_com_murl']?></p>
  </div>
</footer>
<script type="text/javascript" src="/statics/mobile/js/jquery.min.js"></script> 
<div class="totop" id="totop"><i class="icon icon-top"></i></div>
<script type="text/javascript">
    seajs.use('app/common', function(fn){
        fn.init();
        fn.index(); //焦点图
        fn.imgLazyLoad(); //图片延迟加载
    })
</script> 
</body>
</html>