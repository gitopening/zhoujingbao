<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><?
if($navinfor[pctype]==1){$fenlei="系统软件";}
else if($navinfor[pctype]==2){$fenlei="办公软件";}
else if($navinfor[pctype]==3){$fenlei="图形图像";}
else if($navinfor[pctype]==4){$fenlei="社交软件";}
else if($navinfor[pctype]==5){$fenlei="生活服务";}
else if($navinfor[pctype]==6){$fenlei="安全软件";}
else if($navinfor[pctype]==7){$fenlei="应用工具";}
else if($navinfor[pctype]==8){$fenlei="媒体软件";}
else if($navinfor[pctype]==9){$fenlei="其他软件";}
?>
<!doctype html>
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
  <!--其他版本 -->
  <div class="wrap clearfix">
    <div class="wrap_lf">
      <div class="xz_list clearfix">
        <div class="list_md">
          <div class="md_hd"> <img class="img" src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" alt="<?=$ecms_gr[title]?>"> </div>
          <div class="fllist clearfix">
            <h1 class="tit" id="soft_title"><?=$ecms_gr[title]?></h1>
            <p class="plf"><span>软件大小：</span><em id="ljdx"><?=$ecms_gr[daxiao]?></em></p>
            <p><span>软件语言：</span><em id="ljyy"><?=$ecms_gr[yuyan]?></em></p>
            <p><span>软件类别：</span><em id="ljlb"><?=$fenlei?></em></p>
            <p><span>更新时间：</span><em><?=date('Y-m-d',$ecms_gr[newstime])?></em></p>
          
          </div>
          <div class="md_bt">
            <div class="bt_btns">
               
              <div class="bt_btn bt_abtn"> <a href="#download_addr"><span class="ico"></span><b class="tit">本地下载</b></a> </div>
              
              <div class="bt_btn bt_bbtn bt_disabled"> <a href="javascript:;"><span class="ico"></span><b class="tit">高速下载</b></a>
                <p class="tips">需下载高速下载器，提速50%</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 相关阅读 -->
      <div class="wrap_lf_tt">
        <ul>
          <li class="on  rjjs">软件介绍</li>
          <li class="rjjt">软件截图</li>
          <li class="xgbb">相关软件</li>
          <li class="xgyd">相关阅读</li>
          <li class="xzdz">下载地址</li>
        </ul>
      </div>
      <div class="rjjsbox" id="j_app_desc">
			<?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?></div>
      <div class="more_btn"><a href="javascript:void(0)" id="j_app_desc_btn" rel="0">展开<span></span></a></div>
      <div class="rjjt_tips">软件截图</div>
      <div class="sliderbox">
        <div class="btn_bj lfbd">
          <div id="btn-left" class="arrow-btn dasabled"></div>
        </div>
        <div class="slider">
          <ul>
		  <?php
$picr=explode(egetzy('rn'),$navinfor[morepic]);
$tushu =count($picr);
for($p=0;$p<count($picr);$p++)
{
$spicr=explode("::::::",$picr[$p]);
?>
            <li> <img src="<?=$spicr[1]?>" alt="<?=$ecms_gr[title]?>"> </li>
<?php } ?>
              
             
 
          </ul>
        </div>
        <div class="btn_bj rgbd">
          <div id="btn-right" class="arrow-btn"></div>
        </div>
      </div>
      <a id="download_addr" name="download_addr"></a>
      <div class="xzdzbox"  id="xzqdzbox"> 
              <div class="hjtj_title">
          <ul id="test_tab_list">
            <li class="last">
              <h2><?=$ecms_gr[title]?>下载地址</h2>
            </li>
          </ul>
        </div>
        <div class="tab_list tab_list_1"> 
          <div class="xzdz_wrap clearfix">
            <div class="xzdz_lf">
              <div class="sortbox">
                <div class="sort_list"> 
                  <!--未勾选推广-->
                  <dl class="clearfix der">
                    <dt class="dt3"><span>普通下载地址</span></dt>
                    <dd> <?php if($navinfor[pcurl]==''){}else{ $down="\\/url.php?url=".base64_encode($navinfor[pcurl]); ?>
                        <a href="<?=$down?>" class="ddx" target="_blank"><span></span>广东电信下载</a> 
                        <a href="<?=$down?>" target="_blank"><span></span>厦门电信下载</a> 
                        <a href="<?=$down?>" target="_blank"><span></span>湖北电信下载</a> 
                        <a href="<?=$down?>" target="_blank"><span></span>江苏电信下载</a> 
                        <a href="<?=$down?>" target="_blank"><span></span>陕西网通下载</a> 
                        <a href="<?=$down?>" target="_blank"><span></span>山东网通下载</a> 
						<? } ?> 
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
              </div>
      <!--其他版本 -->
      <div class="week-hot-game imgload">
        <div class="block-title mb10">
          <h3 class="title">相关软件</h3>
        </div>
        <ul class="information-list"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_soft where title like '%$navinfor[title]%' or INSTR('$navinfor[title]',title)>0 order by newstime desc limit 10",10,24,0);
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
  <li><a target="_blank" class="type">[<?=$fenlei?>]</a><i></i><a href="<?=$bqsr['titleurl']?>" target="_blank" title="<?=$bqr['title']?>"> <span><?=$bqr['title']?></span> </a> </a></li><?php
}
}
?>
        </ul>
      </div>
      <div class="xgydbox">
        <div class="block-title">
          <h3 class="title">相关阅读</h3>
        </div>
        <div class="xgyd_list">
          <ul class="clearfix">
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',16,0,0,"pctype='".$navinfor['pctype']."'",'newstime DESC');
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
        <div class="hd"> </div>
      <div class="rmckbox"> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('pc',10,19,0);
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
    <div class="wrap_rg">
      <div class="game-you-like" >
        <div class="hd">
          <h3 class="title">最新软件</h3>
        </div>
        <div class="bd">
          <ul class="list"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('pc',6,18,0);
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
      <!-- 猜您喜欢 -->
      <div class="game-you-like" id="gameYouLike">
        <div class="hd">
          <h3 class="title">猜您喜欢</h3>
        </div>
        <div class="bd">
          <ul class="list"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select title,titleurl,onclick,classid,titlepic from [!db.pre!]ecms_pc Union All select title,titleurl,onclick,classid,titlepic from [!db.pre!]ecms_soft order by onclick desc limit 9',0,24,0);
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
      <!-- 热门软件 -->
      <div class="show_related_game hbsy_game" id="showRelatedGame3">
        <div class="hd">
          <h3 class="title">热门软件</h3>
        </div><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('pc',4,20,0);
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
        <ul class="hot_games bd-item on">
            <li> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="img"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a>
              <div class="info"> <a href="<?=$bqsr['titleurl']?>" target="_blank" class="bt"><?=$bqr['title']?></a>
                <div class="tag"> <span><?=$fenlei?></span> </div>
                <div class="start"> <span class="star starz4"></span> </div>
              </div>
              <a href="<?=$bqsr['titleurl']?>" target="_blank" class="downl">下载</a> </li>
        </ul>
        <?php
}
}
?>
      </div>
      <div class="show_related_game" id="listGameTop">
        <div class="hd">
          <h3 class="title"> 软件排行</h3>
        </div>
        <div class="b_list nb_list rexin rexin_1">
          <ul><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_pc where newstime > UNIX_TIMESTAMP()-86400*365 order by newstime desc limit 10",6,24,0);
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