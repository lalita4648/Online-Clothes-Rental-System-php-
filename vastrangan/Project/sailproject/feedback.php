<?php
include("config/config.php");
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
      $email = $_POST['email'];
        $phone = $_POST['phone'];
		$q1= $_POST['opt'];
			$q2= $_POST['opt2'];
				$q3= $_POST['opt3'];
				$q4= $_POST['opt4'];
       $suggestion = $_POST['address'];
	   
      $result = "SELECT *  FROM `visitor` WHERE `email` LIKE '%".$email."%'";
      $search_res=mysql_query($result) or die(mysql_error());
	   $row = mysql_fetch_array($search_res);
        $mid = $row ['mid']; // die; 
      //if(mysql_num_rows($search_res) < 1)
             // {                //$server = $folder.$_FILES['file']['name'];move_uploaded_file($tmp,$server);
               $sql="insert into sb_feedback values('','$name','$email','$phone','$q1','$q2','$q3','$q4','$suggestion','$mid')";
                              $result=mysql_query($sql);
                              echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
             // }
}
?>

 

<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Feedback</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico" type="image/x-icon">
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/scroll_to_top.js"></script>
	 <script src="js/script.js"></script>
     <script src="js/sForm.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/touchTouch.jquery.js"></script>
     <script src="js/jquery.fancybox.pack.js"></script>

     <!-- font-awesome font -->
     <link rel="stylesheet" href="font/font-awesome.css" type="text/css" media="screen">
     <!-- fontello font -->

     <script src="js/camera.js"></script>
     <!--[if (gt IE 9)|!(IE)]><!-->
     <script src="js/jquery.mobile.customized.min.js"></script>
     <!--<![endif]-->

     <script src="js/jquery.touchSwipe.min.js"></script>
     <script>
             $(window).load(function() {
                $(function() {$("a.various").fancybox();});
            });
                        
        </script>

     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script src="js/html5shiv.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
    <script language="JavaScript" type="text/JavaScript">
		function invalid() 
		{
		var radioselect=false;
		var radio1=document.getElementById('BEST').checked;
		var radio2=document.getElementById('GOOD').checked;
		var radio3=document.getElementById('FAIR').checked;
		var radio4=document.getElementById('BEST').checked;
		var radio5=document.getElementById('GOOD').checked;
		var radio6=document.getElementById('FAIR').checked;
		var radio7=document.getElementById('Satisfied').checked;
		var radio8=document.getElementById('Verysatisfied').checked;
		var radio9=document.getElementById('Dissatisfied').checked;
		
		if((radio1=="")&&(radio2=="")&&(radio3==""))
		{
		alert("Please select among three option !  ");
		return false;
		}
		if((radio4=="")&&(radio5=="")&&(radio6==""))
		{
		alert("Please select among three option !  ");
		return false;
		}
		if((radio7=="")&&(radio8=="")&&(radio9==""))
		{
		alert("Please select among three option !  ");
		return false;
		}
		
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
			 for(var i=0;i<document.form.opt.length;i++)
			 {
			 if(document.form.opt[i].checked)
			 radioselect=true;
			 }
			 if(!radioselect)
			 {
			 alert("please select one of the option!")
			
			 return false;
             }

		if (document.form.address.value=="")
				 {
				alert("Enter Suggestion Please !");
				document.form.address.focus()
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
<body>
<!--button back top-->
<div id="back-top"></div>    
<div class="main">

<!--==============================header=================================-->
        <header>
            <div class="container_12">
                <div class="grid_12">
                    <div class="top_section">
                        <p>24/7 Call :<br><strong class="icon-phone"></strong> +1 959 603 6035<span class="vline1"></span> <strong class="icon-envelope-alt"></strong> 
                    </div>
                    
                    <h1><a href="index.php"><span style="font-size:40px; font-family:Lucida Calligraphy; color:#FF0000;">VASTRANGAN</span><!--<img src="images/logo.png" alt="Salutem">--></a></h1>
                    <nav>
                        <ul class="sf-menu header_menu">
                            <li><a href="index.php">Home<strong></strong></a></li>
                             <li><a href="about_us.php">About Us<strong></strong></a></li>
                            <li><a href="#"><span></span>Costumes<strong></strong></a>
                                <ul class='submenu'>
                                    <li><a href="men_costumes.php">Men Costumes</a></li>
                                    <li><a href="women_costumes.php">Women Costumes</a></li>
                                     <li><a href="kids_costumes.php">Kids Costumes</a></li>
                                   <!-- <li class='sub-menu'><a href="#">Fusce euismod conuat</a>
                                        <ul class='submenu2'>
                                            <li><a href="#">Pellentesque sed</a></li>
                                            <li><a href="#">Aliquam congue ferm</a></li>
                                            <li><a href="#">Mauris accum</a></li>
                                        </ul>
                                    </li>--> 
                                </ul>
                            </li>

                           
                            <li class="current"><a href="#">Feedback<strong></strong></a></li>
                            <li><a href="contact_us.php">Contact Us<strong></strong></a></li>
                           
							<li><a href="TermsConditions.php">Terms & Conditions<strong></strong></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

    <div class="div-content">  

        <div class="wrapper padTop1">
           <!-- <div class="container_12">
                <div class="grid_12">
                    <div class="fright sform2">
                        <div class="form_links">
                            <a href="#" class="mobile_marleft_0">Member Area</a>|<a href="#">Sitemap</a>
                        </div>
                        <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                          <input type="text" name="s" value="" />
                          <a onClick="document.getElementById('search').submit()"></a>
                       </form>
                    </div>
               </div>
           </div>-->
        </div>
        
<!--=======content================================-->
  
       

        
        <div class="white_bg">
            <div class="container_12">
                <table width="100%" border="1" style="border:0px solid #333;">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span style="font-size:20px; font-family:Lucida Calligraphy; color:#FF0000;"><strong>Please Give Your Feedback :</strong></span>
    <form action="#" method="post" name="form" onSubmit="return invalid()">
          <table width="83%" border="0" cellspacing="2" cellpadding="2">
              <tr>
                <td width="22%" align="left" valign="top" class="text"> Name</td>
                <td width="7%" align="left" valign="top">:</td>
                <td width="71%" align="left" valign="top"><input type="text" name="name" size="26" /></td>
              </tr>
              <tr>
                <td align="left" valign="top" class="text">E Mail ID</td>
                <td align="left" valign="top">:</td>
                <td align="left" valign="top"><input type="text" name="email" size="26"/></td>
              </tr>
              <tr>
                <td align="left" valign="top" class="text">Telephone</td>
                <td align="left" valign="top">:</td>
                <td align="left" valign="top"><input type="text" name="phone" size="26" maxlength="10"/></td>
              </tr>
			   <tr>
            
<td align="left" valign="top" class="text" colspan="3">Please rate the following aspect of site:</td>
                <td align="left" valign="top"></td></tr>
				<tr><td></td><td colspan="2">GRAPHIC DESIGN</td></tr>
				<tr><td></td>
  <td align="left" valign="top"><input type="radio" name="opt" id="BEST" value="BEST"/>BEST</td><td><input type="radio" name="opt" id="GOOD" value="GOOD" />GOOD<input type="radio" name="opt" id="FAIR" value="FAIR" />FAIR</td>
		
              </tr>
			     <td align="left" valign="top"></td></tr>
				<tr><td></td><td colspan="2">EASE OF NAVIGATION</td></tr>
				<tr><td></td>
  <td align="left" valign="top"><input type="radio" name="opt2" id="BEST" value="BEST"/>BEST</td><td><input type="radio" name="opt2" id="GOOD" value="GOOD" />GOOD<input type="radio" name="opt2" id="FAIR" value="FAIR" />FAIR</td>
		
              </tr>
			     <td align="left" valign="top"></td></tr>
				<tr><td></td><td colspan="2">USEFULL OF CONTENT</td></tr>
				<tr><td></td>
                  <td align="left" valign="top"><input type="radio" name="opt3" id="BEST" value="BEST"/>BEST</td><td><input type="radio" name="opt3" id="GOOD" value="GOOD" />GOOD<input type="radio" name="opt3" id="FAIR" value="FAIR" />FAIR</td>

              </tr>
			     <td align="left" valign="top"></td></tr>
				<tr><td></td><td colspan="2" >HOW SATISFIED ARE YOU WITH YOUR EXPERIENCE WITH[WEB_SITE]</td></tr>
				<tr><td></td>
                <td align="left" valign="top"><input type="radio" name="opt4" id="Satisfied" value="Satisfied"/>SATISFIED</td><td ><input type="radio" name="opt4" id="Verysatisfied" value="Verysatisfied" />VERYSATISFIED<input type="radio" name="opt4"  id="Dissatisfied" value="Dissatisfied" />DISSATISFIED</td>
		
              </tr>
              <tr>
			   
                <td align="left" valign="top" class="text">Suggestion</td>
                <td align="left" valign="top"></td>
                <td align="left" valign="top"><textarea name="address" cols="20"></textarea></td>
              </tr>
              
<tr>

    <td align="left" valign="top" class="text">Verification Code</td>
    <td valign="top">:</td><td><input name="verif_box" type="text" id="verif_box" class="txtbox"/>
          <img src="verificationimage.php?4666" alt="verification image, type it in the box" width="50" height="24" align="absbottom" />
          <!-- if the variable "wrong_code" is sent from previous page then display the error field -->
          </td>
  </tr>

              <tr>
                <td colspan="3" align="center"><input type="submit" name="submit" value="Submit" />
                    <input type="reset" name="Submit2" value="Reset" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
            </table>
			
          </form>
    </td>
    <td><img align="middle" src="images/feedback.jpg"></td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

            </div>
        </div>


        

        

    </div>
    <!--=======footer=================================-->
        <footer>
            
            <div class="footer_priv">
                <div class="container_12">
                    <div class="grid_12">
                        <div class="grid_8 alpha">
                            <nav>
                                <ul class="sf-menu">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about_us.php">About Us</a></li>
                                    <li><a href="#"><span></span>Costumes</a></li>
                                    <ul class='submenu'>
                                    <li><a href="men_costumes.php">Men Costumes</a></li>
                                    <li><a href="women_costumes.php">Women Costumes</a></li>
                                     <li><a href="kids_costumes.php">Kids Costumes</a></li></ul></li>
                                    <li class="current"><a href="feedback.php">Feedback</a></li>
                                   <!-- <li><a href="index-3.html">Careers</a></li>-->
                                    <li><a href="contact_us.php">Contact Us</a></li>
                                   
									<li><a href="TermsConditions.php">Terms & Conditions</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="grid_4 omega">
                            <p><span class="bold">VASTRANGAN</span> &copy; 2015 <a href="index.php">Privacy policy</a><br><!--{%FOOTER_LINK} --></p>
                        </div>
                    </div>

                </div>
            </div>  
        </footer>
</div>
<script type="text/javascript">
    $(document).ready(function(){
      
      jQuery('#camera_wrap').camera({
        loader: false,
        pagination: false,
        thumbnails: false,
        height: '51.8398268%',
        fx: 'curtainSliceLeft',
        rows: '1',
        slicedCols: '5',
        slicedRows: '1',
        caption: false
      });

    });

    $(document).ready(function(){
      // Initialize the gallery
      $('.magnifier2').touchTouch();
    });

    $('.lightbox-video').hover(
            function(){
                $(this).find("span").stop().animate({opacity:'1'},400)
            },
            function(){
                $(this).find("span").stop().animate({opacity:'0'},400)
            }
        )

    function myFocus(element){
       if (element.value == element.defaultValue){
           element.focus();
           element.value = '';
       }
    }
    function myBlur(element){
       if (element.value == ''){
           element.blur();
           element.value = element.defaultValue;
       }
    }

</script>
<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
</body>
</html>