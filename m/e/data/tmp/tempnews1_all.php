<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?=$grpagetitle?>-<?=$public_r['add_jianzhanzj_com_name']?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>..." />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="applicable-device" content="mobile">
<link rel="canonical" href="<?=$public_r['add_jianzhanzj_com_url']?><?=$grtitleurl?>">
<link rel="stylesheet" href="/statics/mobile/css/style.css">
</head>
<body>
<div class="page page-detail" id="page"> 
  <!-- header -->
    <header class="page-header">
      <div class="topbar flex"> 
        <a class="logo-wrap" href="/"><img class="logo" src="/statics/mobile/images/logo.png" alt="<?=$public_r['add_jianzhanzj_com_name']?>"></a>

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
    <ul class="url-here">
      <li><a href="/">首页</a></li>
      <li><a href="/<?=$class_r[$navclassid][classpath]?>/"><?=$class_r[$ecms_gr[classid]][classname]?></a></li>
      <li class="active"><?=$grpagetitle?></li>
    </ul>
    <!-- 资讯详情 -->
    <div class="news-detail">
      <div class="news-detail-hd">
        <h1 class="title"><?=$grpagetitle?></h1>
        <div class="info"> <span class="attr">时间：<?=date('Y-m-d',$ecms_gr[newstime])?></span> <span class="attr">来源：<?=$docheckrep[1]?ReplaceBefrom($ecms_gr[befrom]):$ecms_gr[befrom]?> </span> <span class="attr">作者：<?=$docheckrep[2]?ReplaceWriter($ecms_gr[writer]):$ecms_gr[writer]?></span> </div>
      </div>
      <div class="news-detail-bd">
        <div class="text">
		<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_game where title like '%$navinfor[title]%' or INSTR('$navinfor[title]',title)>0 order by newstime desc limit 1",10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <div class="soft-list2">
            <div>
              <dl class="list-item flex">
                <dt class="col"> <a href="<?=$bqsr['titleurl']?>"> <img class="pic" src="<?=$public_r['add_jianzhanzj_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a> </dt>
                <dd class="con flex-item">
                  <p class="tit"><?=$bqr['title']?></p>
                  <p class="star star<?=$bqr['dengji']?>"></p>
                  <p class="txt"> <span class="attr"><?=$fenlei?></span> <span class="attr">大小:<?=$bqr['daxiao']?></span> </p>
                </dd>
                <dd class="col"> <a class="btn btn-download" href="<?=$bqsr['titleurl']?>">下载</a> </dd>
              </dl>
            </div>
          </div>
 <?php
}
}
?>
      
             
 
			 <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>      </div>
      </div>
    </div>
    <!-- 精品推荐 -->
    <div class="section">
      <div class="section-hd">
        <h3 class="title">精品推荐</h3>
      </div>
      <div class="soft-list">
        <ul class="list" id="jptj">
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_game where classid in (1) and isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>     
          <li class="item"> <a href="<?=$bqsr['titleurl']?>"><img class="pic lazy" src="<?=$public_r['add_jianzhanzj_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
            <div class="tit"><?=$bqr['title']?></div>
            </a> </li>
          <?php
}
}
?>
 
          
        </ul>
      </div>
    </div>
    <!-- 资讯攻略 -->
    <div class="section">
      <div class="section-hd">
        <h3 class="title">资讯攻略</h3>
        <a class="more" href="/<?=$class_r[$navclassid][classpath]?>/">更多+</a> </div>
      <div class="strategy-list">
        <ul class="list"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li class="item flex">
            <div class="tit flex-item"><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></div>
            <div class="date"><?=date('m/d',$bqr[newstime])?></div>
          </li>
         <?php
}
}
?>
 
        </ul>
      </div>
    </div>
    <!-- 手游排行榜 -->
    <div class="section mobile-games-list" id="mobileGamesList">
      <div class="section-hd">
        <h3 class="title">游戏排行</h3>
      </div>
      <div class="tab-content on">
        <div class="soft-list2">
          <div class="list"> 
            <!-- 显示4条 -->  
             <?php
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
            <a class="list-item flex" href="<?=$bqsr['titleurl']?>">
            <div class="col"> <img class="pic lazy" src="/e/data/images/notimg.gif" data-src="<?=$public_r['add_jianzhanzj_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"> </div>
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
  </section>
  <!-- footer -->
    <footer class="page-footer">
      <div class="copyright">
         <p>Copyright&nbsp;&copy;&nbsp; 2020-2030 <?=$public_r['add_jianzhanzj_com_murl']?></p>
      </div>
    </footer>
  <script type="text/javascript" src="/statics/mobile/js/jquery.min.js"></script> 
</div>
<div class="totop" id="totop"><i class="icon icon-top"></i></div>
<script type="text/javascript">
seajs.use('app/common', function(fn){
    fn.init();
    fn.newsDetail();
})
</script>
<div style="display:none;"><script src=/e/public/ViewClick?classid=5&id=590&addclick=1></script></div> 
</body>
</html>