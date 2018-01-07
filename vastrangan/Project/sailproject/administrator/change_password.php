<?php
session_start();
//include("config/confing.php");
error_reporting(E_ALL ^ E_NOTICE);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bstailor";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $sql="SELECT * FROM sb_admin WHERE  email='$email'";
    $result=mysql_query($sql) or die(mysql_error());
    $count=mysql_num_rows($result);
    $row=mysql_fetch_array($result);
    $a_id = $row[0];
    $update="UPDATE `sb_admin` SET `password`='".md5($_POST['password'])."' WHERE `a_id`='".$a_id."'";
    $query2=mysql_query($update) or die(mysql_error());;
    if($query2){ 
	echo "changed";
	//header("location:index.php");   
	
	 }   
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Change Password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/techno.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/techno.js"></script>

</head>
<body bgcolor="#e4e4e4">
<div class="main">
<form action="" method="post" enctype="multipart/form-data" onSubmit="return validation1()" name="form1"><br>
<br>
<br>

  <table width="450" border="0" cellspacing="2" cellpadding="2" align="center" bgcolor="#fff">
    <tr>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td colspan="3"><strong>Please Your Email id and New Password :</strong> </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="122">Email Id </td>
      <td width="11">&nbsp;</td>
      <td width="297"><input type="text" name="email"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>New Password</td>
      <td>&nbsp;</td>
      <td><input type="password" name="password"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Update Password">
         </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="left"> </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="left">&nbsp;<a href="index.php">Go
          to login Page</a></td>
    </tr>
  </table>


</form>
</div>
</body>
</html>
<?php ?>