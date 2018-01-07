
<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bstailor";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

if(isset($_POST['submit']))
{
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone_no = $_POST['phone_no'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$insert = "INSERT INTO sb_admin values('','$first_name','$last_name','$phone_no','$password','$email')";
$result = mysql_query($insert) or die(mysql_error());
if($insert){
 //header("location:login.php");
  echo "<script type='text/javascript'>alert('Successfully Register !')</script>";
 }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Registration Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/techno.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/techno.js"></script>

<script language="JavaScript" type="text/JavaScript">
        function invalid()
        {
        if ((document.form.first_name.value =="" )||(document.form.first_name.value == " " ))
                 {
                alert("Enter First Name Please !  ");
                document.form.first_name.focus()
                return false;
                }
        if (document.form.last_name.value=="")
                 {
                alert("Enter Last Name Please !");
                document.form.last_name.focus()
                return false;
                 }                     
               
         if (document.form.phone_no.value =="" )
             {
                    alert("Enter Phone Number Please ! ");
                    document.form.phone_no.focus()
                    return false;
              }       
         if (document.form.phone_no.value !="" )
            {
            test3=document.form.phone_no.value
             if((isNaN(test3)))
                {
                    alert('Enter a valid Phone Number Please !')
                    document.form.phone_no.value="";
                    document.form.phone_no.focus();

                    return false;
                 }
             }

                   

        if (document.form.email.value =="" )
                 {
                alert("Enter Email Please ! ");
                document.form.email.focus()
                return false;
                }
           if((document.form.email.value.indexOf('@')=="-1")||(document.form.email.value.indexOf('.')=="-1"))
                  {
                    alert("Please Enter your Email ID in the format : user@servername");
                    document.form.email.focus();
                    return false;
                  }
                 
if (document.form.password.value=="")
                 {
                alert("Enter Password Please !");
                document.form.password.focus()
                return false;
                 }                     


        }
</script>
</head>
<body bgcolor="#e4e4e4"><br>
<br>

<div class="main">
<form action="#" method="post" enctype="multipart/form-data" onSubmit="return invalid()" name="form">
  <table width="450" border="0" cellspacing="2" cellpadding="2" align="center" bgcolor="#fff">
    <tr>
      <td colspan="3"><strong><u>Please Fill the Following Details : ( Registration Form )</u></strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="100">First Name</td>
      <td width="87">&nbsp;</td>
      <td width="243"><input type="text" name="first_name" id="first_name"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td>&nbsp;</td>
      <td><input type="text" name="last_name" id="lasi_name"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Phone No</td>
      <td>&nbsp;</td>
      <td><input type="text" name="phone_no" id="phone_no"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Email Id</td>
      <td>&nbsp;</td>
      <td><input type="text" name="email" id="email"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Password</td>
      <td>&nbsp;</td>
      <td><input type="password" name="password" id="password"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Send">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="index.php?=login_page">Go to login Page</a></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
