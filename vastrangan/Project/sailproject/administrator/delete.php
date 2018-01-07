<?php
error_reporting(E_ALL ^ E_NOTICE);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bstailor";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
//include("config/confing.php");

if($_GET['id']!="" )
{
$id=$_REQUEST['id'];
$query="DELETE FROM `sb_contact` WHERE `id`='".$id."'";
$query2=mysql_query($query);
header("location:login_success_new.php");
}
elseif($_GET['fid']!="" )
{
$fid=$_REQUEST['fid'];
$query="DELETE FROM `sb_feedback` WHERE `id`='".$fid."'";
$query2=mysql_query($query);
header("location:login_success_new.php");
}
elseif($_GET['bid']!="" )
{$bid=$_REQUEST['bid'];
$query="DELETE FROM `sb_blog` WHERE `id`='".$bid."'";
$query2=mysql_query($query);
header("location:login_success_new.php");
}
elseif($_GET['sid']!="" )
{$sid=$_REQUEST['sid'];
$query="DELETE FROM `visitor` WHERE `mid`='".$sid."'";
$query2=mysql_query($query);
header("location:login_success_new.php");
}

elseif($_GET['mid']!="" )
{$mid=$_REQUEST['mid'];
$query="DELETE FROM `men_gallery` WHERE `id`='".$mid."'";
$query2=mysql_query($query);
header("location:men_gallery.php");
}

elseif($_GET['wid']!="" )
{$wid=$_REQUEST['wid'];
$query="DELETE FROM `women_gallery` WHERE `id`='".$wid."'";
$query2=mysql_query($query);
header("location:women_gallery.php");
}
elseif($_GET['rid']!="" )
{$rid=$_REQUEST['rid'];
$query="DELETE FROM `rent` WHERE `r_id`='".$rid."'";
$query2=mysql_query($query);
header("location:login_success_new.php");
}


?>