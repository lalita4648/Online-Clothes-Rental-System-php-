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
echo $insert = "INSERT INTO member values('','$first_name','$last_name','$phone_no','$password','$email')";
$result = mysql_query($insert) or die(mysql_error()); die;
if($insert){
 //header("location:login.php");
  echo "<script type='text/javascript'>alert('Successfully Register !')</script>";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
     <head>
     <title>New Registration</title>
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
<body>
<!--button back top-->
<div id="back-top"></div>    
<div class="main">

<!--==============================header=================================-->
        <header>
            <div class="container_12">
                <div class="grid_12">
                    <div class="top_section">
                        <p>24/7 Call :<br><strong class="icon-phone"></strong> +1 959 603 6035<span class="vline1"></span> <strong class="icon-envelope-alt"></strong> <a href="registration.php" >New Registration</a></p>
                    </div>
                    
                    <h1><a href="index.html"><span style="font-size:40px; font-family:Lucida Calligraphy; color:#FF0000;">VASTRANGAN</span><!--<img src="images/logo.png" alt="Salutem">--></a></h1>
                    <nav>
                        <ul class="sf-menu header_menu">
                            <li ><a href="index.php">Home<strong></strong></a></li>
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

                           
                            <li><a href="feedback.php">Feedback<strong></strong></a></li>
                            <li><a href="contact_us.php">Contact Us<strong></strong></a></li>
                            <li><a href="blog.php">Blog<strong></strong></a></li>
                        
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
  
        <div class="container_12"><span style="font-size:30px; font-family:Lucida Calligraphy; color:#FF0000;"> <strong>COSTUMES:</strong></span>
            <div class="grid_12">
                <div class="slider_wrapper">
                    <div class="" id="camera_wrap">
                      <div data-src="images/1.jpeg"></div>
                     
                  
                        <div data-src="images/4.jpg"></div>
                      
                          <div data-src="images/9.jpg"></div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="white_bg">
<div class="main">
<form action="#" method="post" enctype="multipart/form-data" onSubmit="return invalid()" name="form">
  <table width="450" border="0" cellspacing="2" cellpadding="2" align="center" bgcolor="#fff" style="margin-left:550px;">
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
      <td><input type="submit" name="submit" value="Send"></td>
    </tr>
  </table>
</form>
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
                                    <li ><a href="index.php">Home</a></li>
                                    <li><a href="about_us.php">About Us</a></li>
                                    <li><a href="#"><span></span>Costumes</a></li>
                                    <ul class='submenu'>
                                    <li><a href="men_costumes.php">Men Costumes</a></li>
                                    <li><a href="women_costumes.php">Women Costumes</a></li>
                                     <li><a href="kids_costumes.php">Kids Costumes</a></li></ul></li>
                                    <li><a href="feedback.php">Feedback</a></li>
                                   <!-- <li><a href="index-3.html">Careers</a></li>-->
                                    <li><a href="contact_us.php">Contact Us</a></li>
                                    <li><a href="blog.php">Blog</a></li>
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