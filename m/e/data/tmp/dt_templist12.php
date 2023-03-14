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
<link rel="canonical" href="<?=$public_r['add_jianzhanzj_com_murl']?>/<?=$class_r[$GLOBALS[navclassid]][classpath]?>/">
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
    <li>[!--class.name--]</li>
  </ul>
  <div class="soft-list2" id="softContent">
    <div class="list-head fn-clear">
      <div class="dropdown"> <a class="btn-dropdown">全部<i class="arrow-down"></i></a>
        <ul class="dropdown-menu">
		
            <?=user_mgame()?>
        </ul>
      </div>
    </div>
    <div class="list" id="listContent"> 
       [!--empirenews.listtemp--]
<!--list.var1-->

[!--empirenews.listtemp--] 
        
       
         
     </div>
  </div>
  <div class="pages">[!--show.gamepage--] </div>
</section>
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
        fn.imgLazyLoad();
        fn.gamelist({
            app_classtype:1,
            app_liangwang:0,
            current_catid:149,
        });
    })
</script>
<script language="javascript" type="text/javascript">
$(function(){
    var pagenum = 1; //设置当前页数
	var www_96kaifa_com_zongpage=0;
	var totalheight = 0;
	var wan=true;
	function loadData(){ 
		totalheight = parseFloat($(window).height()) + parseFloat($(window).scrollTop()); 
		if ($(document).height()-200 <= totalheight && wan==true) {   
			www_96kaifa_com_zongpage = 25;
			var currentclass = 2;
			$.ajax({
				url : '/game-getajax.php',
				type:'get',
				data:{"next":pagenum},
				dataType : 'html',
				beforeSend:function(){
					$('.preloader').show();
					wan=false;
				},
				success : function(data){
					if(data!=''){
						$('.list').append(data);
						$('.preloader').hide();
						pagenum++; 
						wan=true;
					}else{
						$('#listLoader').html('没有更多了');
						return false;
					}
				}
			});
		}
	}
  $(window).scroll( function() {   
		loadData();  
  });
});
</script>  
</body>
</html>