<?php
//include "config/config.php";
if(isset($_POST['submit']))
{
echo $name = $_POST['name'];
echo $email = $_POST['email'];
echo $blog = $_POST['address'];
echo $verif_box = $_POST["verif_box"];
// prepare email body text
if(md5($verif_box).'a4xn' == $_COOKIE['tntcon'])
{

echo $sql ="INSERT INTO blog_post VALUES('','$name','$email','$blog')"; die;
mysql_query() or die(mysql_error());
  setcookie('tntcon','');
} else if(isset($verif_box) and $verif_box!=""){
	// if verification code was incorrect then return to contact page and show error
	header("Location:".$_SERVER['HTTP_REFERER']."?subject=$subject&from=$from&message=$message&wrong_code=true");
	exit;
} else {
	echo "no variables received, this page cannot be accessed directly";
	exit;
	}
print "<meta http-equiv=\"refresh\" content=\"0;URL=thankyou.htm\">";




}

?>