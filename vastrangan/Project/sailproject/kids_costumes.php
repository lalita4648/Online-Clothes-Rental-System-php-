<?php
error_reporting(E_ALL ^ E_NOTICE);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bstailor";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
$id=$_REQUEST['id'];
$query="SELECT * FROM kids_gallery WHERE `id`='".$id."'";
$query1=mysql_query($query);  $results=mysql_fetch_array($query1);
 $results['status'];
if($results['status']=='1' or $results['status']=='booked')
{

echo "<script> alert('oop! the item is Already Booked,please give your booking date')</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;URL=rent.php\">";
}
else
{
if($results['status']=='0')
{
echo "<meta http-equiv=\"refresh\" content=\"0;URL=rent.php\">";
}
}
?>
<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Kids Costumes</title>
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
		if (document.form.address.value=="")
				 {
				alert("Enter Comment Please !");
				document.form.address.focus()
				return false;
				 }
		 
		}
</script>
<!--popup css and code------------------------------>
	<link rel="stylesheet" href="css/main.css" type="text/css">
    <script type="text/javascript" src="js/popup.js"></script>
<!------------------------------------------------>
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
                            <li class="current"><a href="#"><span></span>Costumes<strong></strong></a>
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
                <div class="container_12"><span style="font-size:30px; font-family:Lucida Calligraphy; color:#FF0000;"><strong> Kids Costumes >> </strong></span>                            <a href="contact_us.php" id="link" onclick=""><span style="border:1px solid #461119; color:#fff; background-color:#C74162;">&nbsp;<strong>New Order</strong>&nbsp;</a>   
                <div class="grid_12">
                     <?php 
			
				$search_gallery = mysql_query("SELECT * from kids_gallery") or die(mysql_error());
				 $i=0;
		 		while($rows_gallery = mysql_fetch_array($search_gallery))
        		{ if($i%3==0){
			?>
                           <?php } ?>
                   <div class="grid_3 alpha">
                        <a href="#" class="img1">
                            <div class="rotate_section">
                                <p class="up_p"></p>
                                <p class="bottom_p"> </p> 
				
                           <img src="administrator/upload_data/<?php echo $rows_gallery['gallery_small']; ?>" border="0" style="margin:10px;"/>
                            </div>

							<a href="kids_costumes.php?id=<?php echo $rows_gallery['id'] ;?>" id="link" onClick=""><span style="border:1px solid #461119; color:#fff; background-color:#C74162;">&nbsp;<strong>RENT</strong>&nbsp;</a> 
                        <p class="fs_14"><span class="bold" ><a href="#"><?php echo $rows_gallery['image_title'];?></a></span><br></p><p><?php echo $rows_gallery['image_description'];?></p>
                    </div>
                    
                     <?PHP if($i%3==3){ ?>
        </tr> <?php }?>
         <?php $i++;} ?>  
                </div>
            </div>

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
                                    <li class="current"><a href="#"><span></span>Costumes</a></li>
                                    <ul class='submenu'>
                                    <li><a href="men_costumes.php">Men Costumes</a></li>
                                    <li><a href="women_costumes.php">Women Costumes</a></li>
                                     <li><a href="kids_costumes.php">Kids Costumes</a></li></ul></li>
                                    <li><a href="feedback.php">Feedback</a></li>
                                   <!-- <li><a href="index-3.html">Careers</a></li>-->
                                    <li><a href="contact_us.php">Contact Us</a></li>
                                    
									<li ><a href="TermsConditions.php">Terms & Conditions</a></li>
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