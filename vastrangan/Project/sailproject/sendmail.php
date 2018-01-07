<?php
// get posted data into local variables

$EmailTo = "info@gmbreweries.com";

//$headers = "From: " . $cleanedFrom . "\r\n";
             $headers = "info@gmbreweries.com\r\n";
			//$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$Subject = "G.M.Breweries Limited (GMBL)";
$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['phone'])); 
//$message = Trim(stripslashes($_POST['message'])); 
$complaint = Trim(stripslashes($_POST['complaint']));
$verif_box = Trim(stripslashes($_POST["verif_box"]));
// prepare email body text
if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){
$message = '<html><body>';
$message .= '<center><table rules="all" style="border-color: #666;" border="1" cellpadding="3" cellspacing="3">';
$message .= "<tr  style='background: #eee;'><td colspan='2'><strong><center>G.M.Breweries Limited (GMBL)</center> </strong> </td></tr>";
$message .= "<tr><td><strong>Name </strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Email ID</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Mobile No. </strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
//$message .= "<tr><td><strong>Address </strong> </td><td>" . strip_tags($_POST['address']) . "</td></tr>";
$message .= "<tr><td><strong>Message</strong> </td><td>" . strip_tags($_POST['complaint']) . "</td></tr>";
$message .= "</table></center>";
$message .= "</body></html>";

// send email 
 $success = mail($EmailTo, $Subject, $message, "From: $headers");
 //print "<meta http-equiv=\"refresh\" content=\"0;URL=thankyou.htm\">";
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
?>


