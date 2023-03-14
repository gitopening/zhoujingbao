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
<link rel="stylesheet" href="/statics/mobile/css/style.css">
</head>
<body>
<div class="page " id="page">
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
    <ul class="url-here">
      <li><a href="/">首页</a></li>
      <li>专题</li>
    </ul>
    <!-- 专题 -->
    <div class="soft-list2" id="softContent">
      <div class="topic-list" id="listContent"> 
         [!--empirenews.listtemp--]
<!--list.var1-->

[!--empirenews.listtemp--]
              
        
              
      </div>
       <div class="pages">[!--show.listpage--] </div>
    </div>
  </section>
  <!-- footer -->
    <footer class="page-footer">
      <div class="copyright">
        <p>Copyright&nbsp;&copy;&nbsp; 2020-2030 <?=$public_r['add_jianzhanzj_com_murl']?></p>
      </div>
    </footer>
  <script type="text/javascript" src="/statics/mobile/js/jquery.min.js"></script> 
<script type="text/javascript">
    seajs.use('app/common', function(fn){
        fn.init();
        fn.imgLazyLoad();
        fn.gamelist({
            app_classtype:1,
            app_liangwang:0,
            current_catid:149,
        });
    })
</script>
</div>
</body>
</html>