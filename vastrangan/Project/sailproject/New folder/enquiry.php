<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>:: G.M.Breweries ::</title>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="fadeslideshow.js">

/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>

<script type="text/javascript">

var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [761, 222], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["images/header_2.jpg", "", "", "G.M.SANTRA"],
		["images/header_4.jpg", "", "", "G.M.DOCTOR"],
		["images/header_1.jpg", "", "", "G.M.LIMBU PUNCH"],
		["images/header_3.jpg", "", "", "G.M. DILBAHAR SAUNF"] //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:2500, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})
</script>
<script language="JavaScript" type="text/JavaScript">
		function invalid() 
		{
		if ((document.form.name.value =="" )||(document.form.name.value == " " ))
				 {
				alert("Enter Name Please !  ");
				document.form.name.focus()
				return false;
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

		   if (document.form.phone.value =="" )
			 {
					alert("Enter Phone Number Please ! ");
					document.form.phone.focus()
					return false;
			  }
		 if (document.form.phone.value !="" )
			{
			test3=document.form.phone.value
			 if((isNaN(test3)))
				{
					alert('Enter a valid Phone Number Please !')
					document.form.phone.value="";
					document.form.phone.focus();
					return false;
				 }
			 }

		if (document.form.complaint.value=="")
				 {
				alert("Enter Comments Please !");
				document.form.complaint.focus()
				return false;
				 }
		 if (document.form.verif_box.value=="")
		 {
		alert("Please verification code.");
		document.form.verif_box.focus()
		return false;
		} 

		}
</script>
</head>

<body onload="MM_preloadImages('images/left_menu2_hover.jpg','images/left_menu3_hover.jpg','images/left_menu4_hover.jpg','images/left_menu5_hover.jpg','images/home_hover.jpg','images/company_hover.jpg','images/our_brand_hover.jpg','images/investors_hover.jpg','images/enquiry_hover.jpg','images/contact_hover.jpg','images/email_hover.jpg')">
<form action="sendmail.php" method="post" name="form" onSubmit="return invalid()">
<table width="959" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="91%"><a href="index.htm"><img src="images/logo.jpg" width="637" height="102" border="0" /></a></td>
        <td width="3%"><a href="home.htm"><img src="images/top_menu1.jpg" width="16" height="10" border="0" /></a></td>
        <td width="3%"><a href="contact_us.htm"><img src="images/top_menu2.jpg" width="16" height="10" border="0" /></a></td>
        <td width="2%"><a href="enquiry.php"><img src="images/top_menu3.jpg" width="16" height="10" border="0" /></a></td>
        <td width="1%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td background="images/menu_bg.jpg"><table width="84%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><a href="home.htm"><img src="images/home.jpg" width="102" height="36" border="0" id="Image5" onmouseover="MM_swapImage('Image5','','images/home_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td><a href="company_profile.htm"><img src="images/company.jpg" width="136" height="36" border="0" id="Image6" onmouseover="MM_swapImage('Image6','','images/company_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td><a href="our_brands.htm"><img src="images/our_brand.jpg" width="104" height="36" border="0" id="Image7" onmouseover="MM_swapImage('Image7','','images/our_brand_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td><a href="investors.htm"><img src="images/investors.jpg" width="132" height="36" border="0" id="Image8" onmouseover="MM_swapImage('Image8','','images/investors_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td><a href="enquiry.php"><img src="images/enquiry.jpg" width="108" height="36" border="0" id="Image9" onmouseover="MM_swapImage('Image9','','images/enquiry_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td><a href="contact_us.htm"><img src="images/contact.jpg" width="103" height="36" border="0" id="Image10" onmouseover="MM_swapImage('Image10','','images/contact_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td><a href="http://www.gmbreweries.com:2095" target="_blank"><img src="images/email.jpg" width="126" height="36" border="0" id="Image11" onmouseover="MM_swapImage('Image11','','images/email_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="images/spacer.jpg" width="4" height="5" /></td>
  </tr>
  <tr>
    <td><table width="960" border="0" cellspacing="0" cellpadding="0" >
      <tr>
        <td width="739"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #c1c1c3;">
          <tr>
            <td colspan="3" style="border-bottom:1px solid #ccc;"><div id="fadeshow1"></div></td>
            </tr>
          <tr>
            <td width="2%" height="30">&nbsp;</td>
            <td width="96%" valign="bottom" class="title">Enquiry Form </td>
            <td width="2%">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td bgcolor="#FFFFFF"><p style="padding-left:30px;"><span class="text"><strong>Please Fill the Following Field.</strong></span>
			<table width="80%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="141" align="left" valign="top" class="text" style="padding-left:30px;"> Name</td>
    <td align="left" valign="top" width="15">:</td>

    <td width="241" align="left" valign="top"><input type="text" name="name" size="25" /></td>
	<td width="172" rowspan="7" align="left" valign="top"><img src="images/enquiry2.jpg" width="129" height="129"  /></td>
    </tr>
  
  <tr>

    <td align="left" valign="top" class="text" style="padding-left:30px;">Email ID</td>
    <td align="left" valign="top">:</td>
    
    <td align="left" valign="top"><input type="text" name="email" size="25"  /></td>
  </tr>
 
  <tr>
    <td align="left" valign="top" class="text" style="padding-left:30px;">Phone No. </td>
    <td align="left" valign="top">:</td>
    
    <td align="left" valign="top"><input type="text" name="phone" size="25" /></td>
  </tr>
  
  <tr>
    <td align="left" valign="top" class="text" style="padding-left:30px;">Comments</td>
    <td align="left" valign="top">:</td>
    
    <td align="left" valign="top"><textarea name="complaint" rows="5" ></textarea></td>
  </tr> 
  
  <tr>

    <td align="left" valign="top" class="text" style="padding-left:30px;">Verification Code</td>
    <td valign="top">:</td><td><input name="verif_box" type="text" id="verif_box" class="txtbox"/>
          <img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="50" height="24" align="absbottom" />
          <!-- if the variable "wrong_code" is sent from previous page then display the error field -->
          <?php if(isset($_GET['wrong_code'])){?>

          <div style="border:1px solid #990000; background-color:#D70000; color:#FFFFFF; padding:4px; padding-left:6px;width:170px;">Wrong verification code</div>
          <?php ;}?></td>
  </tr>
  
  <tr>
    <td  colspan="4"  align="left" style="padding-left:190px;" >
    <input type="submit" name="Submit" value="Submit" class="button" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" class="button" />
    <br />
    <br /></td>
  </tr>
</table></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width="4">&nbsp;</td>
        <td width="212" align="left" valign="top" style="border:1px solid #c1c1c3;"><table width="100%" border="0" cellspacing="0" cellpadding="0" >
          <tr>
            <td colspan="3"><img src="images/left_menu1.jpg" width="190" height="30" /></td>
            </tr>
          <tr>
            <td colspan="3"><a href="gmsantra.htm"><img src="images/left_menu2.jpg" name="Image1" width="190" height="41" border="0" id="Image1" onmouseover="MM_swapImage('Image1','','images/left_menu2_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
            </tr>
          <tr>
            <td colspan="3"><a href="gmdoctor.htm"><img src="images/left_menu3.jpg" width="190" height="36" border="0" id="Image2" onmouseover="MM_swapImage('Image2','','images/left_menu3_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
            </tr>
          <tr>
            <td colspan="3"><a href="gmlimbupunch.htm"><img src="images/left_menu4.jpg" width="190" height="36" border="0" id="Image3" onmouseover="MM_swapImage('Image3','','images/left_menu4_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
            </tr>
          <tr>
            <td colspan="3"><a href="gmdilbahar.htm"><img src="images/left_menu5.jpg" width="190" height="51" border="0" id="Image4" onmouseover="MM_swapImage('Image4','','images/left_menu5_hover.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
          </tr>
          <tr>
            <td colspan="3"><img src="images/left_menu6.jpg" width="190" height="30" /></td>
            </tr>
          <tr>
            <td width="4%">&nbsp;</td>
            <td width="91%" class="text"><strong>G.M.Breweries</strong> is committed to transparency, accountability and adherence to the highest level of accounting standards.<br />
              <span class="redtext"><a href="investors.htm">Read More... </a></span> <br />
              <br /></td>
            <td width="5%">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="text"><img src="images/phpto.jpg" width="165" height="71" /></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<blockquote> 
  <div align="center" class="textx">Copyright 2010 G.M.Breweries Limited. All right reserved . <strong><br />
  </strong>Designed &amp; Developed By <a href="http://www.spearsolservices.com/">Spear Sol Services.</a></div>
</blockquote>
</form>
</body>
</html>
