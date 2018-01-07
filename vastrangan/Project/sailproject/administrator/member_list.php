<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bstailor";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
echo '<span  style="font-size:14px; color:#333; font-weight:bold;margin-left:650px;">User Name -: &nbsp;&nbsp;'. $_SESSION['first_name'].'</span>';
 echo '<span  style="font-size:14px; color:#333; font-weight:bold;margin-left:150px;"><a href="logout.php">Logout</a></span>';
 echo "<pre/>";
 if (!isset($_SESSION['email']))
{
    header("Location: login.php?e=access_denied");
    exit();
}
 $email =  $_SESSION['email'];
 $email_admin ="admin@gmail.com";
$search_res=mysql_query("SELECT * from sb_contact") or die(mysql_error());
$result = mysql_query($search_res) or die(mysql_error());

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Registration Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/techno.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/techno.js"></script>
</head>
<body bgcolor="#666666"><br>
<br>

<div class="main">
<form action="" method="post" enctype="multipart/form-data" onSubmit="return validation()" name="form1">
  <table width="450" border="0" cellspacing="2" cellpadding="2" align="center" bgcolor="#fff">
    <tr> 
      <td colspan="3"><strong><u>Member Details :</u></strong></td>
    </tr>
    <tr> 
      <td>Sr. No.</td> <td>Name</td>  <td>Email</td> <td>Phone No.</td> <td>Suggestion</td> <td>City</td> <td>Country</td> 
    </tr>
   <?php whlie($rows= mysql_fetch_array($result)) {?>
   
   <tr> 
      <td><?php echo $row['mid'];?></td> <td><?php echo $row['name'];?></td>  <td><?php echo $row['email'];?></td> 
	  <td> <?php echo $row['phone'];?></td> <td> <?php echo $row['suggestion'];?></td> 
	  <td><?php echo $row['city'];?></td> <td><?php echo $row['country'];?></td> 
    </tr>
	<?php }?>
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
