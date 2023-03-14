<?php
//tag链接
function user_hTagLink($tagid){
	global $htag_r;
	include_once ECMS_PATH.'e/dongpo/htag/dp_funs.php';
	$url=htag_TagUrl($tagid);
	return $url;
}
//输入tagname获取tag静态化链接
function user_taglink($tagname){
	global $dbtbpre,$empire;
	$tagr=$empire->fetch1("select tagid from {$dbtbpre}enewstags where tagname='$tagname' limit 1");
	if(!$tagr['id']){
		return '';
	}
	$tagurl=user_hTagLink($tagr['id']);
	return $tagurl;
}
//tag分类链接
function user_TagClassUrl($cid){
	global $htag_r;
	include_once ECMS_PATH.'e/dongpo/htag/dp_funs.php';
	$url=htag_TagClassUrl($cid);
	return $url;
}
//软件结合项筛选选项
function user_mgame($ecms=0){
	global $public_r,$navclassid;

	//------- 函数参数设置开始 -----

	//要显示的结合项字段列表，多个字段用半角逗号“,”隔开
	$fieldandvar='gametype';

	//字段显示选项设置，多项用双“#”号隔开，格式：选项说明|==|内容1,值1##内容2,值2
	$fieldandval=array();
	$fieldandval['gametype']='|==|全部,##角色扮演,1##休闲益智,2##竞技对战,3##音乐舞蹈,4##塔防策略,5##模拟经营,6##冒险解谜,7##卡牌战略,8##其他游戏,9##h5游戏,10';
	          
	//正常链接样式
	$fieldandcss='';

	//已选的选项链接样式
	$changefieldandcss='';

	//字段与字段的显示间隔符，格式：开始显示字符|结束显示字符
	$fieldexp='';

	//选项与选项的显示间隔符，格式：开始显示字符|结束显示字符
	$valexp='|';

	//------- 函数参数设置结束 -----


	$userfunecmsver=function_exists('ehtmlspecialchars')?1:0;
	//附加参数
	$urlcs='';
	$mid=(int)$_GET['mid'];
	if($mid)
	{
		$urlcs.='&mid='.$mid;
	}
	if($_GET['classid'])
        {
                $classid=RepPostVar($_GET['classid']);
                $urlcs.=$classid;
        }
        else
        {
        $urlcs.=$navclassid;
        }

	if($_GET['ttid'])
	{
		$ttid=RepPostVar($_GET['ttid']);
		$urlcs.='&ttid='.$ttid;
	}
	if($_GET['ztid'])
	{
		$ztid=RepPostVar($_GET['ztid']);
		$urlcs.='&ztid='.$ztid;
	}
	if($_GET['firsttitle'])
	{
		$firsttitle=(int)$_GET['firsttitle'];
		$urlcs.='&firsttitle='.$firsttitle;
	}
	if($_GET['isgood'])
	{
		$isgood=(int)$_GET['isgood'];
		$urlcs.='&isgood='.$isgood;
	}
	if($_GET['endtime'])
	{
		$starttime=RepPostVar($_GET['starttime']);
		$endtime=RepPostVar($_GET['endtime']);
		$urlcs.='&starttime='.$starttime.'&endtime='.$endtime;
	}
	$line=(int)$_GET['line'];
	if($line)
	{
		$urlcs.='&line='.$line;
	}
	$tempid=(int)$_GET['tempid'];
	if($tempid)
	{
		$urlcs.='&tempid='.$tempid;
	}
	if($_GET['orderby'])
	{
		$orderby=RepPostVar($_GET['orderby']);
		$myorder=(int)$_GET['myorder'];
		$urlcs.='&orderby='.$orderby.'&myorder='.$myorder;
	}
	//间隔字符
	$fieldexpr=explode('|',$fieldexp);
	$valexpr=explode('|',$valexp);
	//输出选项
	$fr=explode(',',$fieldandvar);
	$fcount=count($fr);
	$allstr='';
	$urladd='';
	for($i=0;$i<$fcount;$i++)
	{
		$field=$fr[$i];
		//选项链接
		$getval='';
		if($_GET[$field])
		{
			$getval=$userfunecmsver==1?ehtmlspecialchars($_GET[$field],ENT_QUOTES):htmlspecialchars($_GET[$field],ENT_QUOTES);
			$urladd.='&'.$field.'='.urlencode($getval);
		}
		//选项说明
		$vsayr=explode('|==|',$fieldandval[$field]);
		//选项内容
		$valallstr='';
		$vr=explode('##',$vsayr[1]);
		$vcount=count($vr);
		for($vi=0;$vi<$vcount;$vi++)
		{
			$vtr=explode(',',$vr[$vi]);
			if($vtr[1]=='' || $vtr[1]==null){$vtr[1]=0;}
			if (preg_match("/[\x7f-\xff]/", $getval))
				{
					if(urlencode($getval)==urlencode($vtr[1]))
						{
							$css=$changefieldandcss;
						}
					else
						{
							$css=$fieldandcss;
						}
				}else{
			
					if($getval==$vtr[1])
						{
							$css=$changefieldandcss;
						}
					else
						{
							$css=$fieldandcss;
						}
				}
		$rjfl_value=news_value('gametype',$i,0,$vtr[1]);
		
		// 以上每个加一个字段都需定义
		$valallstr.=$valexpr[0].'<li><a class="btn" href="'.$public_r['newsurl'].'game/list-'.$rjfl_value.'0-0.html" target="_self">'.$vtr[0].'</a>'.$valexpr[1];	
			
		}
		$allstr.=$vsayr[0].$valallstr.$fieldexpr[1].$fieldexpr[0];
	}
	$allstr=str_replace('<!--url.add-->',$urladd,$allstr);
	echo $allstr;
}


//游戏结合项筛选选项
function user_msoft($ecms=0){
	global $public_r,$navclassid;

	//------- 函数参数设置开始 -----

	//要显示的结合项字段列表，多个字段用半角逗号“,”隔开
	$fieldandvar='softtype';

	//字段显示选项设置，多项用双“#”号隔开，格式：选项说明|==|内容1,值1##内容2,值2
	$fieldandval=array();
	$fieldandval['softtype']='|==|全部,##系统工具,1##办公软件,2##图形图像,3##社交软件,4##生活服务,5##手机杀毒,6##应用工具,7##媒体软件,8##其他软件,9';
	           
	//正常链接样式
	$fieldandcss='';

	//已选的选项链接样式
	$changefieldandcss='';

	//字段与字段的显示间隔符，格式：开始显示字符|结束显示字符
	$fieldexp='';

	//选项与选项的显示间隔符，格式：开始显示字符|结束显示字符
	$valexp='|';

	//------- 函数参数设置结束 -----


	$userfunecmsver=function_exists('ehtmlspecialchars')?1:0;
	//附加参数
	$urlcs='';
	$mid=(int)$_GET['mid'];
	if($mid)
	{
		$urlcs.='&mid='.$mid;
	}
	if($_GET['classid'])
        {
                $classid=RepPostVar($_GET['classid']);
                $urlcs.=$classid;
        }
        else
        {
        $urlcs.=$navclassid;
        }

	if($_GET['ttid'])
	{
		$ttid=RepPostVar($_GET['ttid']);
		$urlcs.='&ttid='.$ttid;
	}
	if($_GET['ztid'])
	{
		$ztid=RepPostVar($_GET['ztid']);
		$urlcs.='&ztid='.$ztid;
	}
	if($_GET['firsttitle'])
	{
		$firsttitle=(int)$_GET['firsttitle'];
		$urlcs.='&firsttitle='.$firsttitle;
	}
	if($_GET['isgood'])
	{
		$isgood=(int)$_GET['isgood'];
		$urlcs.='&isgood='.$isgood;
	}
	if($_GET['endtime'])
	{
		$starttime=RepPostVar($_GET['starttime']);
		$endtime=RepPostVar($_GET['endtime']);
		$urlcs.='&starttime='.$starttime.'&endtime='.$endtime;
	}
	$line=(int)$_GET['line'];
	if($line)
	{
		$urlcs.='&line='.$line;
	}
	$tempid=(int)$_GET['tempid'];
	if($tempid)
	{
		$urlcs.='&tempid='.$tempid;
	}
	if($_GET['orderby'])
	{
		$orderby=RepPostVar($_GET['orderby']);
		$myorder=(int)$_GET['myorder'];
		$urlcs.='&orderby='.$orderby.'&myorder='.$myorder;
	}
	//间隔字符
	$fieldexpr=explode('|',$fieldexp);
	$valexpr=explode('|',$valexp);
	//输出选项
	$fr=explode(',',$fieldandvar);
	$fcount=count($fr);
	$allstr='';
	$urladd='';
	for($i=0;$i<$fcount;$i++)
	{
		$field=$fr[$i];
		//选项链接
		$getval='';
		if($_GET[$field])
		{
			$getval=$userfunecmsver==1?ehtmlspecialchars($_GET[$field],ENT_QUOTES):htmlspecialchars($_GET[$field],ENT_QUOTES);
			$urladd.='&'.$field.'='.urlencode($getval);
		}
		//选项说明
		$vsayr=explode('|==|',$fieldandval[$field]);
		//选项内容
		$valallstr='';
		$vr=explode('##',$vsayr[1]);
		$vcount=count($vr);
		for($vi=0;$vi<$vcount;$vi++)
		{
			$vtr=explode(',',$vr[$vi]);
			if($vtr[1]=='' || $vtr[1]==null){$vtr[1]=0;}
			if (preg_match("/[\x7f-\xff]/", $getval))
				{
					if(urlencode($getval)==urlencode($vtr[1]))
						{
							$css=$changefieldandcss;
						}
					else
						{
							$css=$fieldandcss;
						}
				}else{
			
					if($getval==$vtr[1])
						{
							$css=$changefieldandcss;
						}
					else
						{
							$css=$fieldandcss;
						}
				}
		$rjfl_value=news_value('softtype',$i,0,$vtr[1]);
		
		// 以上每个加一个字段都需定义
		$valallstr.=$valexpr[0].'<li><a class="btn" href="'.$public_r['newsurl'].'soft/list-'.$rjfl_value.'0-0.html" target="_self">'.$vtr[0].'</a></li>'.$valexpr[1];	
			
		}
		$allstr.=$vsayr[0].$valallstr.$fieldexpr[1].$fieldexpr[0];
	}
	$allstr=str_replace('<!--url.add-->',$urladd,$allstr);
	echo $allstr;
}
//软件结合项筛选选项
function user_homegame($ecms=0){
	global $public_r,$navclassid;

	//------- 函数参数设置开始 -----

	//要显示的结合项字段列表，多个字段用半角逗号“,”隔开
	$fieldandvar='gametype';

	//字段显示选项设置，多项用双“#”号隔开，格式：选项说明|==|内容1,值1##内容2,值2
	$fieldandval=array();
	$fieldandval['gametype']='|==|全部,##角色扮演,1##休闲益智,2##竞技对战,3##音乐舞蹈,4##塔防策略,5##模拟经营,6##冒险解谜,7##卡牌战略,8##其他游戏,9##h5游戏,10';
	          
	//正常链接样式
	$fieldandcss='';

	//已选的选项链接样式
	$changefieldandcss='';

	//字段与字段的显示间隔符，格式：开始显示字符|结束显示字符
	$fieldexp='';

	//选项与选项的显示间隔符，格式：开始显示字符|结束显示字符
	$valexp='|';

	//------- 函数参数设置结束 -----


	$userfunecmsver=function_exists('ehtmlspecialchars')?1:0;
	//附加参数
	$urlcs='';
	$mid=(int)$_GET['mid'];
	if($mid)
	{
		$urlcs.='&mid='.$mid;
	}
	if($_GET['classid'])
        {
                $classid=RepPostVar($_GET['classid']);
                $urlcs.=$classid;
        }
        else
        {
        $urlcs.=$navclassid;
        }

	if($_GET['ttid'])
	{
		$ttid=RepPostVar($_GET['ttid']);
		$urlcs.='&ttid='.$ttid;
	}
	if($_GET['ztid'])
	{
		$ztid=RepPostVar($_GET['ztid']);
		$urlcs.='&ztid='.$ztid;
	}
	if($_GET['firsttitle'])
	{
		$firsttitle=(int)$_GET['firsttitle'];
		$urlcs.='&firsttitle='.$firsttitle;
	}
	if($_GET['isgood'])
	{
		$isgood=(int)$_GET['isgood'];
		$urlcs.='&isgood='.$isgood;
	}
	if($_GET['endtime'])
	{
		$starttime=RepPostVar($_GET['starttime']);
		$endtime=RepPostVar($_GET['endtime']);
		$urlcs.='&starttime='.$starttime.'&endtime='.$endtime;
	}
	$line=(int)$_GET['line'];
	if($line)
	{
		$urlcs.='&line='.$line;
	}
	$tempid=(int)$_GET['tempid'];
	if($tempid)
	{
		$urlcs.='&tempid='.$tempid;
	}
	if($_GET['orderby'])
	{
		$orderby=RepPostVar($_GET['orderby']);
		$myorder=(int)$_GET['myorder'];
		$urlcs.='&orderby='.$orderby.'&myorder='.$myorder;
	}
	//间隔字符
	$fieldexpr=explode('|',$fieldexp);
	$valexpr=explode('|',$valexp);
	//输出选项
	$fr=explode(',',$fieldandvar);
	$fcount=count($fr);
	$allstr='';
	$urladd='';
	for($i=0;$i<$fcount;$i++)
	{
		$field=$fr[$i];
		//选项链接
		$getval='';
		if($_GET[$field])
		{
			$getval=$userfunecmsver==1?ehtmlspecialchars($_GET[$field],ENT_QUOTES):htmlspecialchars($_GET[$field],ENT_QUOTES);
			$urladd.='&'.$field.'='.urlencode($getval);
		}
		//选项说明
		$vsayr=explode('|==|',$fieldandval[$field]);
		//选项内容
		$valallstr='';
		$vr=explode('##',$vsayr[1]);
		$vcount=count($vr);
		for($vi=0;$vi<$vcount;$vi++)
		{
			$vtr=explode(',',$vr[$vi]);
			if($vtr[1]=='' || $vtr[1]==null){$vtr[1]=0;}
			if (preg_match("/[\x7f-\xff]/", $getval))
				{
					if(urlencode($getval)==urlencode($vtr[1]))
						{
							$css=$changefieldandcss;
						}
					else
						{
							$css=$fieldandcss;
						}
				}else{
			
					if($getval==$vtr[1])
						{
							$css=$changefieldandcss;
						}
					else
						{
							$css=$fieldandcss;
						}
				}
		$rjfl_value=news_value('gametype',$i,0,$vtr[1]);
		
		// 以上每个加一个字段都需定义
		$valallstr.=$valexpr[0].'<a class="item" href="'.$public_r['newsurl'].'game/list-'.$rjfl_value.'0-0.html" target="_self">'.$vtr[0].'</a>'.$valexpr[1];	
			
		}
		$allstr.=$vsayr[0].$valallstr.$fieldexpr[1].$fieldexpr[0];
	}
	$allstr=str_replace('<!--url.add-->',$urladd,$allstr);
	echo $allstr;
}

function news_value($field,$ii,$iii,$vrtss)//新增函数
  {
                if($_GET[$field])
                {
                        $getval=htmlspecialchars($_GET[$field],ENT_QUOTES);
                        //$news_values='-'.urlencode($getval);
						$news_values=$getval.'-';
                }
                else
                {
                $news_values='0-';
                }
                if($ii==$iii)
                {
                $news_values=$vrtss.'-';
                }
  return $news_values;
  }
?>