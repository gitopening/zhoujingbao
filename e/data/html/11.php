<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>标题</td><td bgcolor='ffffff'><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10" class="color">
  </td>
</tr>
</table></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>副标题</td><td bgcolor='ffffff'><input name="ftitle" type="text" size=60 id="ftitle" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[ftitle]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
  <tr>
    <td height="25" bgcolor="#FFFFFF">信息属性: 
      <input name="checked" type="checkbox" value="1"<?=$r[checked]?' checked':''?>>
      审核 &nbsp;&nbsp; 推荐 
      <select name="isgood" id="isgood">
        <option value="0">不推荐</option>
	<?=$ftnr['igname']?>
      </select>
      &nbsp;&nbsp; 头条 
      <select name="firsttitle" id="firsttitle">
        <option value="0">非头条</option>
	<?=$ftnr['ftname']?>
      </select></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">关键字&nbsp;&nbsp;&nbsp;: 
      <input name="keyboard" type="text" size="52" value="<?=stripSlashes($r[keyboard])?>">
      <font color="#666666">(多个请用&quot;,&quot;隔开)</font></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">外部链接: 
      <input name="titleurl" type="text" value="<?=stripSlashes($r[titleurl])?>" size="52">
      <font color="#666666">(填写后信息连接地址将为此链接)</font></td>
  </tr>
</table></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>发布时间</td><td bgcolor='ffffff'><input name="newstime" type="text" value="<?=$r[newstime]?>" size="28" class="Wdate" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd HH:mm:ss'})"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'"></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>标题图片</td><td bgcolor='ffffff'><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>游戏分类</td><td bgcolor='ffffff'><input name="pctype" type="radio" value="1"<?=$r[pctype]=="1"||$ecmsfirstpost==1?' checked':''?>>系统软件<input name="pctype" type="radio" value="2"<?=$r[pctype]=="2"?' checked':''?>>办公软件<input name="pctype" type="radio" value="3"<?=$r[pctype]=="3"?' checked':''?>>图形图像<input name="pctype" type="radio" value="4"<?=$r[pctype]=="4"?' checked':''?>>社交软件<input name="pctype" type="radio" value="5"<?=$r[pctype]=="5"?' checked':''?>>生活服务<input name="pctype" type="radio" value="6"<?=$r[pctype]=="6"?' checked':''?>>安全软件<input name="pctype" type="radio" value="7"<?=$r[pctype]=="7"?' checked':''?>>应用工具<input name="pctype" type="radio" value="媒体软件"<?=$r[pctype]=="媒体软件"?' checked':''?>>媒体软件<input name="pctype" type="radio" value="其他软件"<?=$r[pctype]=="其他软件"?' checked':''?>>其他软件</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>语言</td><td bgcolor='ffffff'>
<input name="yuyan" type="text" id="yuyan" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[yuyan]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>版本</td><td bgcolor='ffffff'>
<input name="banben" type="text" id="banben" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[banben]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>游戏大小</td><td bgcolor='ffffff'>
<input name="daxiao" type="text" id="daxiao" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[daxiao]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>游戏等级</td><td bgcolor='ffffff'>
<input name="dengji" type="text" id="dengji" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[dengji]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>pc下载</td><td bgcolor='ffffff'>
<input name="pcurl" type="text" id="pcurl" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[pcurl]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=0&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=pcurl<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的文件"><img src="../data/images/changefile.gif" border="0" align="absbottom"></a>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>内容简介</td><td bgcolor='ffffff'><textarea name="smalltext" cols="80" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[smalltext]))?></textarea>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>图片集</td><td bgcolor='ffffff'>
<script>
function dopicadd()
{var i;
var str="";
var oldi=0;
var j=0;
oldi=parseInt(document.add.morepicnum.value);
for(i=1;i<=document.add.downmorepicnum.value;i++)
{
j=i+oldi;
str=str+"<tr><td width=7%><div align=center>"+j+"</div></td><td width=33%><div align=center><input name=msmallpic[] type=text size=28 id=msmallpic"+j+" ondblclick=SpOpenChFile(1,'msmallpic"+j+"')><br><input type=file name=msmallpfile[] size=15></div></td><td width=30%><div align=center><input name=mbigpic[] type=text size=28 id=mbigpic"+j+" ondblclick=SpOpenChFile(1,'mbigpic"+j+"')><br><input type=file name=mbigpfile[] size=15></div></td><td width=30%><div align=center><input name=mpicname[] type=text></div></td></tr>";
}
document.getElementById("addpicdown").innerHTML="<table width='100%' border=0 cellspacing=1 cellpadding=3>"+str+"</table>";
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25">
	图片地址前缀:
      <input name="mpicurl_qz" type="text" id="mpicurl_qz">&nbsp;&nbsp;
	  <input type="checkbox" name="msavepic" value="1">远程保存&nbsp;<input type="checkbox" name="mcreatespic" value="1" onclick="if(this.checked){setmcreatespic.style.display='';}else{setmcreatespic.style.display='none';}">生成缩图
	  <span id="setmcreatespic" style="display:none">：<input type=text name="mcreatespicwidth" size=4 value="<?=$public_r[spicwidth]?>">*<input type=text name="mcreatespicheight" size=4 value="<?=$public_r[spicheight]?>">(宽*高)</span>
	  <?php
	  if(TranmoreIsOpen())
	  {
	  ?>
	  <input type="button" name="Submit" value="多选上传" onclick="window.open('ecmseditor/tranmore/tranmore.php?type=1&classid=<?=$classid?>&filepass=<?=$filepass?>&infoid=<?=$id?>&modtype=0&sinfo=1&ecmsdo=ecmstmmorepic&tranfrom=2<?=$ecms_hashur['ehref']?>&oldmorepicnum='+document.add.morepicnum.value,'ecmstmpage','width=700,height=550,scrollbars=yes');">
	  <?php
	  }
	  ?>
 </td>
  </tr>
  <tr> 
    <td><table width="100%" border=0 align=center cellpadding=3 cellspacing=1>
  <tr bgcolor="#DBEAF5"> 
    <td width="7%"><div align=center>编号</div></td>
    <td width="33%"><div align=center>缩图 <font color="#666666">(双击选择)</font></div></td>
    <td width="30%"><div align=center>大图 <font color="#666666">(双击选择)</font></div></td>
    <td width="30%"><div align=center>图片说明</div></td>
  </tr>
</table></td>
  </tr>
  <tr> 
    <td id=defmorepicid>
    <?php
    if($ecmsfirstpost==1)
    {
	?>
	<table width='100%' border=0 align=center cellpadding=3 cellspacing=1>
	<?php
	$morepicnum=3;
	for($mppathi=1;$mppathi<=$morepicnum;$mppathi++)
	{
	?>
	<tr> 
		<td width='7%'><div align=center><?=$mppathi?></div></td>
		<td width='33%'><div align=center>
		<input name=msmallpic[] type=text id='msmallpic<?=$mppathi?>' size=28 ondblclick="SpOpenChFile(1,'msmallpic<?=$mppathi?>');">
		<br><input type=file name=msmallpfile[] size=15>
		</div></td>
		<td width='30%'><div align=center>
		<input name=mbigpic[] type=text id='mbigpic<?=$mppathi?>' size=28 ondblclick="SpOpenChFile(1,'mbigpic<?=$mppathi?>');">
		<br><input type=file name=mbigpfile[] size=15>
		</div></td>
		<td width='30%'><div align=center>
		<input name=mpicname[] type=text id='mpicname<?=$mppathi?>'>
		</div></td>
	</tr>
	<?php
	}
	?>
	</table>
	<?php
    }
    else
    {
	$morepicpath="";
	$morepicnum=0;
	if($r[morepic])
    	{
    		$r[morepic]=stripSlashes($r[morepic]);
    		//地址
    		$j=0;
    		$pd_record=explode("\r\n",$r[morepic]);
    		for($i=0;$i<count($pd_record);$i++)
    		{
			$j=$i+1;
    			$pd_field=explode("::::::",$pd_record[$i]);
			$morepicpath.="<tr> 
    <td width='7%'><div align=center>".$j."</div></td>
    <td width='33%'><div align=center>
        <input name=msmallpic[] type=text value='".$pd_field[0]."' size=28 id=msmallpic".$j." ondblclick=\"SpOpenChFile(1,'msmallpic".$j."');\">
		<br><input type=file name=msmallpfile[] size=15>
      </div></td>
    <td width='30%'><div align=center>
        <input name=mbigpic[] type=text value='".$pd_field[1]."' size=28 id=mbigpic".$j." ondblclick=\"SpOpenChFile(1,'mbigpic".$j."');\">
		<br><input type=file name=mbigpfile[] size=15>
      </div></td>
    <td width='30%'><div align=center>
        <input name=mpicname[] type=text value='".$pd_field[2]."'><input type=hidden name=mpicid[] value=".$j."><input type=checkbox name=mdelpicid[] value=".$j.">删
      </div></td>
  </tr>";
    		}
    		$morepicnum=$j;
    		$morepicpath="<table width='100%' border=0 cellspacing=1 cellpadding=3>".$morepicpath."</table>";
    	}
	echo $morepicpath;
    }
    ?>
    </td>
  </tr>
  <tr> 
    <td height="25">地址扩展数量: <input name="morepicnum" type="hidden" id="morepicnum" value="<?=$morepicnum?>">
      <input name="downmorepicnum" type="text" value="1" size="6"> <input type="button" name="Submit5" value="输出地址" onclick="javascript:dopicadd();"></td>
  </tr>
  <tr> 
    <td id=addpicdown></td>
  </tr>
</table>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>作者</td><td bgcolor='ffffff'><?php
$writer_sql=$empire->query("select writer from {$dbtbpre}enewswriter");
while($w_r=$empire->fetch($writer_sql))
{
	$w_class.="<option value='".$w_r[writer]."'>".$w_r[writer]."</option>";
}
?>
<input type=text name=writer value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[writer]))?>" size=""> 
        <select name="w_id" id="select7" onchange="document.add.writer.value=document.add.w_id.value">
          <option>选择作者</option>
		  <?=$w_class?>
        </select>
<input type="button" name="wbutton" value="增加作者" onclick="window.open('NewsSys/writer.php?<?=$ecms_hashur[ehref]?>&addwritername='+document.add.writer.value);">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>信息来源</td><td bgcolor='ffffff'><?php
$befrom_sql=$empire->query("select sitename from {$dbtbpre}enewsbefrom");
while($b_r=$empire->fetch($befrom_sql))
{
	$b_class.="<option value='".$b_r[sitename]."'>".$b_r[sitename]."</option>";
}
?>
<input type="text" name="befrom" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[befrom]))?>" size=""> 
        <select name="befrom_id" id="befromid" onchange="document.add.befrom.value=document.add.befrom_id.value">
          <option>选择信息来源</option>
          <?=$b_class?>
        </select>
<input type="button" name="wbutton" value="增加来源" onclick="window.open('NewsSys/BeFrom.php?<?=$ecms_hashur[ehref]?>&addsitename='+document.add.befrom.value);">
</td></tr><tr><td height=25 colspan=2 bgcolor='ffffff'><div align=left>新闻正文</div></td></tr></table><div style='background-color:#D0D0D0'><?=ECMS_ShowEditorVar("newstext",$ecmsfirstpost==1?"":stripSlashes($r[newstext]),"Default","","300","100%")?>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
          <tr> 
            <td bgcolor="#FFFFFF"> <input name="dokey" type="checkbox" value="1"<?=$r[dokey]==1?' checked':''?>>
              关键字替换&nbsp;&nbsp; <input name="copyimg" type="checkbox" id="copyimg" value="1">
      远程保存图片(
      <input name="mark" type="checkbox" id="mark" value="1">
      <a href="SetEnews.php<?=$ecms_hashur[whehref]?>" target="_blank">加水印</a>)&nbsp;&nbsp; 
      <input name="copyflash" type="checkbox" id="copyflash" value="1">
      远程保存FLASH(地址前缀： 
      <input name="qz_url" type="text" id="qz_url" size="">
              )</td>
          </tr>
          <tr>
            
    <td bgcolor="#FFFFFF"><input name="repimgnexturl" type="checkbox" id="repimgnexturl" value="1"> 图片链接转为下一页&nbsp;&nbsp; <input name="autopage" type="checkbox" id="autopage" value="1">自动分页
      ,每 
      <input name="autosize" type="text" id="autosize" value="5000" size="5">
      个字节为一页&nbsp;&nbsp; 取第 
      <input name="getfirsttitlepic" type="text" id="getfirsttitlepic" value="" size="1">
      张上传图为标题图片( 
      <input name="getfirsttitlespic" type="checkbox" id="getfirsttitlespic" value="1">
      缩略图: 宽 
      <input name="getfirsttitlespicw" type="text" id="getfirsttitlespicw" size="3" value="<?=$public_r[spicwidth]?>">
      *高
      <input name="getfirsttitlespich" type="text" id="getfirsttitlespich" size="3" value="<?=$public_r[spicheight]?>">
      )</td>
          </tr>
        </table>
</div><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>顶</td><td bgcolor='ffffff'>
<input name="diggtop" type="text" id="diggtop" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[diggtop]))?>" size="">
</td></tr></table>