<?php
session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bstailor";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

if(isset($_POST['submit']))
{
 $password=md5($_POST['password']);
 $email=$_POST['email'];
 $sql="SELECT * FROM sb_admin WHERE password='$password' AND email='$email'";
$result=mysql_query($sql) or die(mysql_error());
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
//echo "<pre/>;"
 $_SESSION['first_name'] = $row[1];
$_SESSION['email'] = $row[5];
if($count==0)
	{
	//header("Location:member_list.php?e=login succesfully");
	header("Location:login_success_new.php?e=login succesfully");
	}
else { echo "<span style='color:#fff'><center><b>Please Enter correct mail id & paasword !</b></center></span>";}	
	
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Login Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/techno.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/techno.js"></script>
</head>
<body bgcolor="#e4e4e4"><br/><br/>
<div class="main">
<form action="" method="post" enctype="multipart/form-data" onSubmit="return validation1()" name="form1" >
  <table width="450" border="0" cellspacing="2" cellpadding="2" align="center" bgcolor="#fff"> 
    <tr>
      <td colspan="3"></td>
    </tr>
    <tr> 
        <td colspan="3"><strong>Please Enter Your Email id and Password :</strong> 
        </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="98">Email Id </td>
      <td width="34">&nbsp;</td>
      <td width="568"><input type="text" name="email"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Password</td>
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
      <td><input type="submit" name="submit" value=" Login "></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><a href="../index.php?=Home">Home</a> &nbsp; &nbsp; &nbsp; &nbsp;<a href="register.php?=new-user">New User</a> &nbsp; &nbsp; &nbsp; &nbsp;<a href="change_password.php?=change-password">Change 
        Password </a></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
<?php ?>
