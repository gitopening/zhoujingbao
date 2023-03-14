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
function user_game($ecms=0){
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
	$changefieldandcss='on';

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
		$valallstr.=$valexpr[0].'<a class="'.$css.'" href="'.$public_r['newsurl'].'game/list-'.$rjfl_value.'0-0.html" target="_self">'.$vtr[0].'</a>'.$valexpr[1];	
			
		}
		$allstr.=$vsayr[0].$valallstr.$fieldexpr[1].$fieldexpr[0];
	}
	$allstr=str_replace('<!--url.add-->',$urladd,$allstr);
	echo $allstr;
}


//游戏结合项筛选选项
function user_soft($ecms=0){
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
	$changefieldandcss='on';

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
		$valallstr.=$valexpr[0].'<a class="'.$css.'" href="'.$public_r['newsurl'].'soft/list-'.$rjfl_value.'0-0.html">'.$vtr[0].'</a>'.$valexpr[1];	
			
		}
		$allstr.=$vsayr[0].$valallstr.$fieldexpr[1].$fieldexpr[0];
	}
	$allstr=str_replace('<!--url.add-->',$urladd,$allstr);
	echo $allstr;
}
function user_pc($ecms=0){
	global $public_r,$navclassid;

	//------- 函数参数设置开始 -----

	//要显示的结合项字段列表，多个字段用半角逗号“,”隔开
	$fieldandvar='pctype';

	//字段显示选项设置，多项用双“#”号隔开，格式：选项说明|==|内容1,值1##内容2,值2
	$fieldandval=array();
	$fieldandval['pctype']='|==|全部,##系统软件,1##办公软件,2##图形图像,3##社交软件,4##生活服务,5##安全软件,6##应用工具,7##媒体软件,8##其他软件,9';
	           
	//正常链接样式
	$fieldandcss='';

	//已选的选项链接样式
	$changefieldandcss='on';

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
		$rjfl_value=news_value('pctype',$i,0,$vtr[1]);
		
		// 以上每个加一个字段都需定义
		$valallstr.=$valexpr[0].'<a class="'.$css.'" href="'.$public_r['newsurl'].'pc/list-'.$rjfl_value.'0-0.html">'.$vtr[0].'</a>'.$valexpr[1];	
			
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
	$fieldandval['gametype']='|==|全部游戏,##角色扮演,1##休闲益智,2##动作冒险,3##解谜闯关,4##飞行射击,5##策略塔防,6##体育竞速,7##模拟养成,8##儿童教育,9##音乐舞蹈,10##BT游戏,11';
	          
	//正常链接样式
	$fieldandcss='fieldandcss';

	//已选的选项链接样式
	$changefieldandcss='class="cur_class"';

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
		$valallstr.=$valexpr[0].'<li '.$css.'><a href="'.$public_r['newsurl'].'game/'.$rjfl_value.'0-0.html">'.$vtr[0].'</a></li>'.$valexpr[1];	
			
		}
		$allstr.=$vsayr[0].$valallstr.$fieldexpr[1].$fieldexpr[0];
	}
	$allstr=str_replace('<!--url.add-->',$urladd,$allstr);
	echo $allstr;
}


//游戏结合项筛选选项
function user_homesoft($ecms=0){
	global $public_r,$navclassid;

	//------- 函数参数设置开始 -----

	//要显示的结合项字段列表，多个字段用半角逗号“,”隔开
	$fieldandvar='softtype';

	//字段显示选项设置，多项用双“#”号隔开，格式：选项说明|==|内容1,值1##内容2,值2
	$fieldandval=array();
	$fieldandval['softtype']='|==|全部软件,##社交通讯,1##影音播放,2##实用工具,3##资讯阅读,4##拍摄美化,5##购物理财,6##学习办公,7##游戏辅助,8##旅游出行,9##生活休闲,10##健康运动,11##育儿亲子,12';
	           
	//正常链接样式
	$fieldandcss='fieldandcss';

	//已选的选项链接样式
	$changefieldandcss='class="cur_class"';

	//字段与字段的显示间隔符，格式：开始显示字符|结束显示字符
	$fieldexp='</p>';

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
		$valallstr.=$valexpr[0].'<li '.$css.'><a href="'.$public_r['newsurl'].'soft/'.$rjfl_value.'0-0.html">'.$vtr[0].'</a></li>'.$valexpr[1];	
			
		}
		$allstr.=$vsayr[0].$valallstr.$fieldexpr[1].$fieldexpr[0];
	}
	$allstr=str_replace('<!--url.add-->',$urladd,$allstr);
	echo $allstr;
}
//软件结合项筛选选项
function user_softi($ecms=0){
	global $public_r,$navclassid;

	//------- 函数参数设置开始 -----

	//要显示的结合项字段列表，多个字段用半角逗号“,”隔开
	$fieldandvar='softtype';

	//字段显示选项设置，多项用双“#”号隔开，格式：选项说明|==|内容1,值1##内容2,值2
	$fieldandval=array();
	$fieldandval['softtype']='<ul class="flex">|==|全部分类,##社交聊天,1##系统工具,2##金融理财,3##时尚购物,4##旅游出行,5##影音播放,6##生活实用,7##办公学习,8##资讯阅读,9##拍摄美化,10##医疗健康,11##其它软件,12';
	
	//正常链接样式
	$fieldandcss='fieldandcss';

	//已选的选项链接样式
	$changefieldandcss='current';

	//字段与字段的显示间隔符，格式：开始显示字符|结束显示字符
	$fieldexp='</ul>';

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
		$valallstr.=$valexpr[0].'<a '.$css.' href="'.$public_r['newsurl'].'soft/'.$rjfl_value.'0-0.html">'.$vtr[0].'</a>'.$valexpr[1];	
			
		}
		$allstr.=$vsayr[0].$valallstr.$fieldexpr[1].$fieldexpr[0];
	}
	$allstr=str_replace('<!--url.add-->',$urladd,$allstr);
	echo $allstr;
}


//游戏结合项筛选选项
function user_gamei($ecms=0){
	global $public_r,$navclassid;

	//------- 函数参数设置开始 -----

	//要显示的结合项字段列表，多个字段用半角逗号“,”隔开
	$fieldandvar='gametype';

	//字段显示选项设置，多项用双“#”号隔开，格式：选项说明|==|内容1,值1##内容2,值2
	$fieldandval=array();
	$fieldandval['gametype']='<ul class="flex">|==|全部分类,##角色扮演,1##动作格斗,2##休闲益智,3##枪战射击,4##战争策略,5##卡牌对战,6##音乐舞蹈,7##模拟经营,8##体育竞技,9##冒险解谜,10##其它游戏,11';
	
	//正常链接样式
	$fieldandcss='fieldandcss';

	//已选的选项链接样式
	$changefieldandcss='current';

	//字段与字段的显示间隔符，格式：开始显示字符|结束显示字符
	$fieldexp='</ul>';

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
		$valallstr.=$valexpr[0].'<li class="'.$css.'"><a href="'.$public_r['newsurl'].'game/'.$rjfl_value.'0-0.html">'.$vtr[0].'</a></li>'.$valexpr[1];	
			
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
function change($num){
$arr=array(
1=>'one',
2=>'two',
3=>'three',
);
$nums_arr=explode("\r\n",chunk_split($num,1));
foreach($nums_arr as $n){
if($n!=''){
$str.=$arr[$n];
}
}
return $str;
}
?>