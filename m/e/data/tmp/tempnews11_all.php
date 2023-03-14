<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><?
if($navinfor[softtype]==1){$fenlei="系统工具";}
else if($navinfor[softtype]==2){$fenlei="办公软件";}
else if($navinfor[softtype]==3){$fenlei="图形图像";}
else if($navinfor[softtype]==4){$fenlei="社交软件";}
else if($navinfor[softtype]==5){$fenlei="生活服务";}
else if($navinfor[softtype]==6){$fenlei="手机杀毒";}
else if($navinfor[softtype]==7){$fenlei="应用工具";}
else if($navinfor[softtype]==8){$fenlei="媒体软件";}
else if($navinfor[softtype]==9){$fenlei="其他游戏";}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?=$grpagetitle?>-<?=$public_r['add_jianzhanzj_com_name']?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
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
    <!-- 软件信息 -->
    <div class="soft-info">
      <div class="bd">
        <div class="divimg"> <img class="pic" src="<?=$public_r['add_jianzhanzj_com_url']?><?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" alt="<?=$ecms_gr[title]?>"> </div>
        <dl class="con">
          <h1><?=$ecms_gr[title]?> </h1>
          <dd class="flex flex-center">
            <div class="col">
              <p>版本：<?=$ecms_gr[banben]?></p>
              <p>大小：<?=$ecms_gr[daxiao]?></p>
            </div>
            <div class="col">
              <p>类别：<?=$fenlei?></p>
              <p>时间：<?=date('Y-m-d',$ecms_gr[newstime])?></p>
            </div>
          </dd>
        </dl>
      </div>
    <div class="ft" id="download_url_show"> 
       <?php if($navinfor[anurl]==''){ ?> 
                           <a href="JavaScript:;" class="btn btn-disabled and-show">安卓版下载</a>
							<?php }else{ $anurl="\\/url.php?url=".base64_encode($navinfor[anurl]); ?>
							<a href="<?=$anurl?>" class="btn btn-green and-show">安卓版下载</a><?php } ?>
                        <?php if($navinfor[iosurl]==''){ ?>    
                                                        <a class="btn btn-disabled ios-show" href="JavaScript:;">苹果版下载</a>
							<?php }else{ $iosurl="\\/url.php?url=".base64_encode($navinfor[iosurl]); ?>
							<a class="btn btn-green ios-show" href="<?=$iosurl?>">苹果版下载</a><?php } ?>
        
       
       
        
       
    </div>
    </div>
    <!-- 软件介绍 -->
    <div class="section">
      <div class="section-hd">
        <h3 class="title">软件介绍</h3>
      </div>
      <div class="soft-remark" id="softRemarkText"> 
        <!-- 焦点图 -->
        <div class="soft-focus" id="softFocus">
          <div class="bd">
            <ul><?php
$picr=explode(egetzy('rn'),$navinfor[morepic]);
$tushu =count($picr);
for($p=0;$p<count($picr);$p++)
{
$spicr=explode("::::::",$picr[$p]);
?>
            <li> <img class="pic" src="<?=$public_r['add_jianzhanzj_com_url']?><?=$spicr[1]?>" alt="<?=$ecms_gr[title]?>"> </li>
<?php } ?>
              
             
            </ul>
          </div>
          <div class="hd">
            <ul>
            </ul>
          </div>
        </div>
        <!-- 简介 -->
        <div class="text">
          <div class="text-inner">
			
<?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>       </div>
          <div class="text-toggle" id="textShow">展开全部<i class="arrow-down"></i></div>
          <div class="text-toggle text-toggle-hide" id="textHide">收起<i class="arrow-up"></i></div>
        </div>
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_soft where classid in (2) and isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 5",6,24,0);
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
    <!-- 热门手游 -->
    <div class="section" id="xgxz">
      <div class="section-hd">
        <h3 class="title">热门软件</h3>
      </div>
      <div class="soft-list">
        <ul class="list"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,8,1,1,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li class="item"> <a href="<?=$bqsr['titleurl']?>"><img class="pic lazy" src="<?=$public_r['add_jianzhanzj_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
            <div class="tit"><?=$bqr['title']?></div>
            <div class="btn btn-link">下载</div>
            </a> </li>
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
        <h3 class="title">软件排行</h3>
      </div>
      <div class="tab-content on">
        <div class="soft-list2">
          <div class="list"> 
            <!-- 显示10条 -->  <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_soft where newstime > UNIX_TIMESTAMP()-86400*365 order by newstime desc limit 10",6,24,0);
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
    <div class="section">
      <div class="section-hd">
        <h3 class="title">热门搜索</h3>
      </div>
      <div class="dcatetory hot_game"> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',8,0,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
         <a href="<?=$bqsr['titleurl']?>" ><?=$bqr['title']?></a>
         
 <?php
}
}
?>
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
        fn.softDetail();
    })
</script> 
<div style="display:none;"><script src=/e/public/ViewClick?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script></div>
</body>
</html>