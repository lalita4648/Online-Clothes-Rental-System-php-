<?php
error_reporting(E_ALL ^ E_NOTICE);

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bstailor";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

$id=$_REQUEST['id'];
$fid=$_REQUEST['fid'];
$bid=$_REQUEST['bid'];
$sid=$_REQUEST['sid'];
$rid=$_REQUEST['rid'];

if($id!='')
{
$id=$_REQUEST['id'];
$query="SELECT * FROM sb_contact WHERE `id`='".$id."'";
$query1=mysql_query($query);  $results=mysql_fetch_array($query1);
$name=$results['name']; $email=$results['email'];  $phone=$results['phone'];  $suggestion=$results['suggestion'];
$city=$results['city']; $country=$results['country'];
}
if($fid!='')
{
$fid=$_REQUEST['fid'];
$fquery="SELECT * FROM sb_feedback WHERE `id`='".$fid."'";
$fquery1=mysql_query($fquery);  $fresults=mysql_fetch_array($fquery1);

$id=$fresults['id']; $name=$fresults['name'];  $email=$fresults['email'];  $phone=$fresults['phone'];$feedback=$fresults['feedback'];
$address=$fresults['address'];
}
if($bid!='')
{
$bid=$_REQUEST['bid'];
 $bquery="SELECT * FROM sb_blog WHERE `id`='".$bid."'"; $bquery1=mysql_query($bquery); 

$bresults=mysql_fetch_array($bquery1);
$id=$bresults['id']; $name=$bresults['name'];  $email=$bresults['email'];  $suggestion=$bresults['suggestion'];
}
if($sid!='')
{
$sid=$_REQUEST['sid'];
 $squery="SELECT * FROM visitor WHERE `mid`='".$sid."'"; $squery1=mysql_query($squery); 

$sresults=mysql_fetch_array($squery1);
$id=$sresults['mid']; $fname=$sresults['first_name']; $lname=$sresults['last_name'];  $phoneno=$sresults['phone_no']; $email=$sresults['email'];  $city=$sresults['city']; $country=$sresults['country'];
}
if($rid!='')
{
$rid=$_REQUEST['rid'];
 $rquery="SELECT * FROM rent WHERE `r_id`='".$rid."'"; $rquery1=mysql_query($rquery); 

$rresults=mysql_fetch_array($rquery1);
$id=$rresults['r_id']; $fname=$rresults['first_name']; $lname=$rresults['last_name'];  $date=$rresults['date'];  $address=$rresults['address'];  $city=$rresults['city'];  $state=$rresults['state']; $country=$rresults['country']; $pinecode=$rresults['pinecode'];  $phone_no=$rresults['phone_no'];  $email=$rresults['email'];
}
?>
<html>
<head>
<title>Edit Form</title>
<link href="css/techno.css" type="text/css" rel="stylesheet"></head>
<body bgcolor="#e4e4e4">
<div class="main">
<span style="padding-left:420px;"><b><u> Update Record Form</u></b></span><br/> <br/>
<form name="form1" method="POST" action="#">

<?php if($_GET['id']!=""){?>
<table border="1" cellspacing="2" cellpadding="2" width="450" align="center">
<tr><td colspan="2" align="center"><strong>visitor Details :</strong></td></tr>

<tr align="left" valign="top"><td>Name</td><td> <input type="text" name="name" value="<?php echo $name; ?>"></td></tr>
<tr align="left" valign="top"><td>Email Id</td><td> <input type="text" name="email" value="<?php echo $email; ?>"></td></tr>
<tr align="left" valign="top"><td>Phone No.</td><td> <input type="text" name="phone" value="<?php echo $phone; ?>"></td></tr>
<tr align="left" valign="top"><td>Suggestion</td><td> <input type="text" name="suggestion" value="<?php echo $suggestion; ?>"></td></tr>
<tr align="left" valign="top"><td>City</td><td> <input type="text" name="city" value="<?php echo $city; ?>"></td></tr>
<tr align="left" valign="top"><td>Country</td><td> <input type="text" name="country" value="<?php echo $country; ?>"></td></tr>
<tr align="left" valign="top"><td></td><td><input type="submit" name="submit" value="Update"></td></tr>
</table>
<?php }?>
<?php if($_GET['fid']!=""){?>
<table border="1" cellspacing="2" cellpadding="2" width="450" align="center">
<tr><td colspan="2" align="center"><strong>Feedback Details :</strong></td></tr>

<tr align="left" valign="top"><td>Name</td><td> <input type="text" name="name" value="<?php echo $name; ?>"></td></tr>
<tr align="left" valign="top"><td>Email Id</td><td> <input type="text" name="email" value="<?php echo $email; ?>"></td></tr>
<tr align="left" valign="top"><td>Phone No.</td><td> <input type="text" name="phone" value="<?php echo $phone; ?>"></td></tr>
<tr align="left" valign="top"><td>Address</td><td> <input type="text" name="address" value="<?php echo $address; ?>"></td></tr>


<tr align="left" valign="top"><td></td><td><input type="submit" name="submitf" value="Update"></td></tr>
</table>
<?php }?>

<?php if($_GET['bid']!=""){?>
<table border="1" cellspacing="2" cellpadding="2" width="450" align="center">
<tr><td colspan="2" align="center"><strong>Blog Details :</strong></td></tr>

<tr align="left" valign="top"><td>Name</td><td> <input type="text" name="name" value="<?php echo $name; ?>"></td></tr>
<tr align="left" valign="top"><td>Email Id</td><td> <input type="text" name="email" value="<?php echo $email; ?>"></td></tr>
<tr align="left" valign="top"><td>Suggestion</td><td> <input type="text" name="suggestion" value="<?php echo $suggestion; ?>"></td></tr>
<tr align="left" valign="top"><td></td><td><input type="submit" name="submitb" value="Update"></td></tr>
</table>

<?php }?>

<?php if($_GET['sid']!=""){?>
<table border="1" cellspacing="2" cellpadding="2" width="450" align="center">
<tr><td colspan="2" align="center"><strong>visitor Details :</strong></td></tr>

<tr align="left" valign="top"><td>First Name</td><td> <input type="text" name="first_name" value="<?php echo $fname; ?>"></td></tr>
<tr align="left" valign="top"><td>Last Name</td><td> <input type="text" name="last_name" value="<?php echo $lname; ?>"></td></tr>
<tr align="left" valign="top"><td>Phone no</td><td> <input type="text" name="phone_no" value="<?php echo $phoneno; ?>"></td></tr>
<tr align="left" valign="top"><td>Email Id</td><td> <input type="text" name="email" value="<?php echo $email; ?>"></td></tr>
<tr align="left" valign="top"><td>city</td><td> <input type="text" name="city" value="<?php echo $city; ?>"></td></tr>
<tr align="left" valign="top"><td>country</td><td> <input type="text" name="country" value="<?php echo $country; ?>"></td></tr>
<tr align="left" valign="top"><td></td><td><input type="submit" name="submits" value="Update"></td></tr>
</table>

<?php }?> 
<?php if($_GET['rid']!=""){?>
<table border="1" cellspacing="2" cellpadding="2" width="450" align="center">
<tr><td colspan="2" align="center"><strong>Rent Details :</strong></td></tr>

<tr align="left" valign="top"><td>First Name</td><td> <input type="text" name="first_name" value="<?php echo $fname; ?>"></td></tr>
<tr align="left" valign="top"><td>Last Name</td><td> <input type="text" name="last_name" value="<?php echo $lname; ?>"></td></tr>
<tr align="left" valign="top"><td>Booking date</td><td> <input type="date" name="date" value="<?php echo $date; ?>"></td></tr>
<tr align="left" valign="top"><td>address</td><td> <input type="text" name="address" value="<?php echo $address; ?>"></td></tr>
<tr align="left" valign="top"><td>city</td><td> <input type="text" name="city" value="<?php echo $city; ?>"></td></tr>
<tr align="left" valign="top"><td>state</td><td> <input type="text" name="state" value="<?php echo $state; ?>"></td></tr>
<tr align="left" valign="top"><td>country</td><td> <input type="text" name="country" value="<?php echo $country; ?>"></td></tr>
<tr align="left" valign="top"><td>pincode</td><td> <input type="text" name="pinecode" value="<?php echo $pinecode; ?>"></td></tr>
<tr align="left" valign="top"><td>Phone no</td><td> <input type="text" name="phone_no" value="<?php echo $phone_no; ?>"></td></tr>
<tr align="left" valign="top"><td>Email Id</td><td> <input type="text" name="email" value="<?php echo $email; ?>"></td></tr>

<tr align="left" valign="top"><td></td><td><input type="submit" name="submitr" value="Update"></td></tr>
</table>

<?php }?>
</form>
</div>
</body>
</html>

<?php
if($_GET['id']!="" || $_GET['fid']!="" || $_GET['bid']!="" || $_GET['sid']!="" || $_GET['rid']!="" ){
        if(isset($_POST['submit']))
            {
            $update="UPDATE `sb_contact` SET `name`='".$_POST['name']."', `email`='".$_POST['email']."', `phone`='".$_POST['phone']."',
                `suggestion`='".$_POST['suggestion']."' , `city`='".$_POST['city']."' , `country`='".$_POST['country']."' WHERE `id`='".$id."'";
                $query2=mysql_query($update) or die(mysql_error());   
                header("location:login_success_new.php");

            }
        else if(isset($_POST['submitf']))
        {
               $update="UPDATE `sb_feedback` SET `name`='".$_POST['name']."', `email`='".$_POST['email']."', `phone`='".$_POST['phone']."',
                `address`='".$_POST['address']."' WHERE `id`='".$fid."'";
                $query2=mysql_query($update) or die(mysql_error());   
                header("location:login_success_new.php");

        }
       
        else if(isset($_POST['submitb']))
        {
            $update="UPDATE `sb_blog` SET `name`='".$_POST['name']."', `email`='".$_POST['email']."', `suggestion`='".$_POST['suggestion']."'  WHERE `id`='".$bid."'";
                $query2=mysql_query($update) or die(mysql_error());   
                header("location:login_success_new.php");
        }
       
	    else if(isset($_POST['submits']))
        {
            $update="UPDATE `visitor` SET `first_name`='".$_POST['first_name']."', `last_name`='".$_POST['last_name']."', `phone_no`='".$_POST['phone_no']."', `email`='".$_POST['email']."', `city`='".$_POST['city']."', `country`='".$_POST['country']."'  WHERE `mid`='".$sid."'";
                $query2=mysql_query($update) or die(mysql_error());   
                header("location:login_success_new.php");
        }
		  else if(isset($_POST['submitr']))
        {
            $update="UPDATE `rent` SET `first_name`='".$_POST['first_name']."', `last_name`='".$_POST['last_name']."', `date`='".$_POST['date']."' ,`address`='".$_POST['address']."' ,`city`='".$_POST['city']."' ,`state`='".$_POST['state']."' ,`country`='".$_POST['country']."' ,`pinecode`='".$_POST['pinecode']."' ,`phone_no`='".$_POST['phone_no']."', `email`='".$_POST['email']."'  WHERE `r_id`='".$rid."'";
                $query2=mysql_query($update) or die(mysql_error());   
                header("location:login_success_new.php");
        }
        //header("location:login_success_new.php");

}
?>
 <link href="css/techno.css" type="text/css" rel="stylesheet">