<?php

/********密码验证***********/
$password='123456';				                   //这个密码是登陆验证用的.您需要在模块里设置和这里一样的密码....注意一定需要修改.
if($password!=$_GET['pw']) exit('验证密码错误');   //安全检测,密码不符则退出

/****以下代码非专业人员不建议修改***************/
define('EmpireCMSAdmin','1');
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
require LoadLang("pub/fun.php");
require("../class/delpath.php");
require("../class/copypath.php");
require("../class/t_functions.php");
require("../class/classfun.php");

$link=db_connect();
$empire=new mysqlquery();

//验证用户
$loginin=$_POST['username'];
$lur=$empire->fetch1("select * from {$dbtbpre}enewsuser where `username`='$loginin'");
if(!$lur) exit('不存在的用户名'.$loginin);

$logininid=$lur['userid'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];

$incftp=0;
if($public_r['phpmode'])
{
	include("../class/ftp.php");
	$incftp=1;
}
require("../class/hinfofun.php");
$navtheid=(int)$_POST['filepass'];
$ztname=$_POST['ztname'];
$ztimg=$_POST['ztimg'];
$nr=$empire->fetch1("select * from {$dbtbpre}enewszt where ztname='$ztname' limit 1");
if($nr){
$sql=$empire->query("update {$dbtbpre}enewszt set ztimg='$ztimg' where ztid='$nr[ztid]'");
exit('增加专题成功');
}else{
AddZt($_POST,$logininid,$loginin);
}



db_close();
$empire=null;

?>