<?php

session_start();

if($_SESSION["first_name"])
{



echo strtoupper($_SESSION["first_name"]);

}
error_reporting(E_ALL ^ E_NOTICE);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bstailor";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

echo '<span  style="font-size:30px; font-family:Lucida Calligraphy; color:#FF0000;  font-weight:bold;margin-left:650px;">Welcome -:Lalita&nbsp;&nbsp;'. $_SESSION["first_name"].'</span>';

 echo '<span  style="font-size:14px; color:#333; font-weight:bold;margin-left:150px;"><a href="logout.php">Logout</a></span>';
 echo "<pre/>";
 if (!isset($_SESSION['email']))
{
    header("Location: login.php?e=access_denied");
    exit();
}
 $email =  $_SESSION['email'];
 $email_admin ="admin@gmail.com";
 
  ?>
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <script type="text/javascript" src="js/popup.js"></script>
<table width="50%" border="1" cellspacing="0" cellpadding="0" align="center" bgcolor="#fff">
 <tr>
      <td colspan="9"><strong><u>Upload Costumes Images :</u></strong></td>
    </tr>
    <tr>
     
      <td><a href="#" onclick="openpopup('popup4')">
      
	  Men</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="men_gallery.php">View List</a></td>
	  <td><a href="#" onclick="openpopup('popup5')">Women</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="women_gallery.php">View List</a></td>
	  <td><a href="#" onclick="openpopup('popup6')">Kids</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="kids_gallery.php">View List</a></td>
	   </tr>   
	</table>
	  
	  <div id="popup4" class="popup">
<form action="men_gallery.php" method="POST" id="form1" name="form1" enctype="multipart/form-data" onSubmit="javascript: return invalid_gallery();">
<table width="490" border="0" align="center" cellpadding="2" cellspacing="4">
<tr>
    <td colspan="3" style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">Please Upload The Gallery :</td>
    </tr>
  <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
   <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td><input type="hidden" name="gallery_add" value="Gallery"></td>  </tr>
   
   <tr>    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">
    Image Title</td>      <td>&nbsp;</td>    <td><input type="text" name="image_title" id="image_title" ></td>  </tr>
   <tr>    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">
    Image Description</td>     <td>&nbsp;</td>    
    <td>
    <textarea name="image_description" cols="14" rows="" id="image_description"></textarea>
    </td>  </tr>
   
  <tr>
    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">
    Upload Small Gallery Image</td>    
    <td>&nbsp;</td>    
    <td><input type="file" name="gallery_small" id="gallery_small" /></td>
  </tr>
  <!--<tr>
    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">
    Upload Large Gallery Imege</td>    
    <td>&nbsp;</td>    
    <td><input type="file" name="gallery" id="gallery" /></td>
  </tr>-->
   <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>
    <td>
    <!--<a href="javascript:SendTellAfriend();"><img src="images/send_btn.jpg" alt="Send" title="Send" border="0" /></a>-->
    <input type="submit" name="submit" value="Submit" /></td>
  </tr>
</table>
</form>
</div>
 <div id="popup5" class="popup">
<form action="women_gallery.php" method="POST" id="form1" name="form1" enctype="multipart/form-data" >
<table width="490" border="0" align="center" cellpadding="2" cellspacing="4">
<tr>
    <td colspan="3" style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">Please Upload The Gallery :</td>
    </tr>
  <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
   <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td><input type="hidden" name="gallery_add" value="Gallery"></td>  </tr>
   
   <tr>    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">
    Image Title</td>      <td>&nbsp;</td>    <td><input type="text" name="image_title" id="image_title" ></td>  </tr>
   <tr>    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">
    Image Description</td>     <td>&nbsp;</td>    
    <td>
    <textarea name="image_description" cols="14" rows="" id="image_description"></textarea>
    </td>  </tr>
   
  <tr>
    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">
    Upload Small Gallery Image</td>    
    <td>&nbsp;</td>    
    <td><input type="file" name="gallery_small" id="gallery_small" /></td>
  </tr>
 <!--<tr>
    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">
    Upload Large Gallery Imege</td>    
    <td>&nbsp;</td>    
    <td><input type="file" name="gallery" id="gallery" /></td>
  </tr>-->
   <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>
    <td>
    <!--<a href="javascript:SendTellAfriend();"><img src="images/send_btn.jpg" alt="Send" title="Send" border="0" /></a>-->
    <input type="submit" name="submit" value="Submit" /></td>
  </tr>
</table>
</form>
</div>
 <div id="popup6" class="popup">
<form action="kids_gallery.php" method="POST" id="form1" name="form1" enctype="multipart/form-data" >
<table width="490" border="0" align="center" cellpadding="2" cellspacing="4">
<tr>
    <td colspan="3" style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">Please Upload The Gallery :</td>
    </tr>
  <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
   <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td><input type="hidden" name="gallery_add" value="Gallery"></td>  </tr>
   
   <tr>    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">
    Image Title</td>      <td>&nbsp;</td>    <td><input type="text" name="image_title" id="image_title" ></td>  </tr>
   <tr>    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">
    Image Description</td>     <td>&nbsp;</td>    
    <td>
    <textarea name="image_description" cols="14" rows="" id="image_description"></textarea>
    </td>  </tr>
   
  <tr>
    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">
    Upload Small Gallery Image</td>    
    <td>&nbsp;</td>    
    <td><input type="file" name="gallery_small" id="gallery_small" /></td>
  </tr>
  <!--<tr>
    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">
    Upload Large Gallery Imege</td>    
    <td>&nbsp;</td>    
    <td><input type="file" name="gallery" id="gallery" /></td>
  </tr>-->
   <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>
    <td>
    <!--<a href="javascript:SendTellAfriend();"><img src="images/send_btn.jpg" alt="Send" title="Send" border="0" /></a>-->
    <input type="submit" name="submit" value="Submit" /></td>
  </tr>
</table>
</form>
</div>
<div id="bg" class="popup_bg"></div>
   
  <?php
      $member="SELECT * FROM visitor";
     $mem=mysql_query($member)or die(mysql_error());
                ?>
 <body bgcolor="#e4e4e4">
                
     <table width="50%" border="1" cellspacing="0" cellpadding="0" align="center" bgcolor="#fff">
    <tr>
      <td colspan="15"><strong><u>Visitor   Details :</u></strong></td>
    </tr>                   
                   
    <tr>
      <td><strong>Sr. No.</strong></td> <td><strong>First Name</strong></td>
      <td><strong>Last Name</strong></td> <td><strong>Phone No.</strong></td>
      <td><strong>Email id</strong></td> 
	    <td><strong>city</strong></td> 
		  <td><strong>country</strong></td> 
      <td><strong>Edit</strong></td>
      <td><strong>Delete</strong></td>
    </tr>
                <?php        while($rom = mysql_fetch_array($mem))
                          { ?>
                             <tr>
      <td><?php echo $rom['mid'];?></td> <td><?php echo $rom['first_name'];?></td>  <td><?php echo $rom['last_name'];?></td>
      <td> <?php echo $rom['phone_no'];?></td>  <td><?php echo $rom['email'];?></td>
      <td><?php echo $rom['city'];?></td><td><?php echo $rom['country'];?></td>
     
      <td><a href="edit.php?sid=<?php echo $rom['mid'];?>">Edit</a></td>
       <td><a href="delete.php?sid=<?php  echo $rom['mid'];?>">Delete</a></td>
     
    </tr>
    <?php }?>
    </table>

 <?php
      $display="SELECT * FROM sb_contact";
     $dis=mysql_query($display)or die(mysql_error());
                ?>
 <body bgcolor="#e4e4e4">
                
     <table width="50%" border="1" cellspacing="0" cellpadding="0" align="center" bgcolor="#fff">
    <tr>
      <td colspan="15"><strong><u>Visitor Inquiry Details :</u></strong></td>
    </tr>                   
                   
    <tr>
      <td><strong>Sr. No.</strong></td> <td><strong>First_Name</strong></td><td><strong>Last_Name</strong></td>
      <td><strong>Email</strong></td> <td><strong>Phone No.</strong></td>
      <td><strong>Suggestion</strong></td> <td><strong>City</strong></td>
      <td><strong>Country</strong></td>
      <td><strong>Edit</strong></td>
      <td><strong>Delete</strong></td>
    </tr>
                <?php        while($row = mysql_fetch_array($dis))
                          { ?>
                             <tr>
      <td><?php echo $row['id'];?></td> <td><?php echo $row['first_name'];?></td> <td><?php echo $row['last_name'];?></td>  <td><?php echo $row['email'];?></td>
      <td> <?php echo $row['phone_no'];?></td> <td> <?php echo $row['suggestion'];?></td>
      <td><?php echo $row['city'];?></td>
      <td><?php echo $row['country'];?></td>
      <td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
       <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
     
    </tr>
    <?php }?>
    </table>
<?php   

    
$display1="SELECT * FROM sb_feedback";
     $dis1=mysql_query($display1)or die(mysql_error());

                ?>
      <table width="50%" border="1" cellspacing="0" cellpadding="0" align="center" bgcolor="#fff">
     <tr>
       <td colspan="15"><strong><u>Visitor feedback Details :</u></strong></td>
    </tr>                  
                  
     <tr>
       <td><strong>Sr. No.</strong></td> <td><strong>Name</strong></td>
      <td><strong>Email</strong></td> <td><strong>Phone No.</strong></td><td><strong>question1</strong></td><td><strong>question2</strong></td><td><strong>question3</strong></td><td><strong>question4</strong></td>
       <td><strong>Suggestion</strong></td>
     
       <td><strong>Edit</strong></td>
       <td><strong>Delete</strong></td>
     </tr>
                 <?php        while($row1 = mysql_fetch_array($dis1))
                           { ?>
                              <tr>
       <td><?php echo $row1['id'];?></td> <td><?php echo $row1['name'];?></td>  <td><?php echo $row1['email'];?></td>
       <td> <?php echo $row1['phone'];?></td><td> <?php echo $row1['q1'];?></td><td> <?php echo $row1['q2'];?></td><td> <?php echo $row1['q3'];?></td><td> <?php echo $row1['q4'];?></td><td> <?php echo $row1['address'];?></td>
    
       <td><a href="edit.php?fid=<?php echo $row1['id'];?>">Edit</a></td>
       <td><a href="delete.php?fid=<?php echo $row1['id'];?>">Delete</a></td>

    
    </tr>
    <?php }?>
    </table>    
   

  
	
	  <?php
      $member="SELECT * FROM rent";
     $mem=mysql_query($member)or die(mysql_error());
                ?>
 <body bgcolor="#e4e4e4">
                
     <table width="50%" border="1" cellspacing="0" cellpadding="0" align="center" bgcolor="#fff">
    <tr>
      <td colspan="15"><strong><u>rent Details :</u></strong></td>
    </tr>                   
                   
    <tr>
      <td><strong>Sr. No.</strong></td> <td><strong>First Name</strong></td>
      <td><strong>Last Name</strong></td> <td><strong>Booking date.</strong></td>
      <td><strong>Address</strong></td>
      <td><strong>City</strong></td> 
	  <td><strong>State</strong></td>
	  <td><strong>Country</strong></td>
	  <td><strong>Pincode</strong></td>
	  <td><strong>phone</strong></td>
	  <td><strong>Email</strong></td>
      <td><strong>Edit</strong></td>
      <td><strong>Delete</strong></td>
    </tr>
                <?php        while($rom = mysql_fetch_array($mem))
                          { ?>
                             <tr>
      <td><?php echo $rom['r_id'];?></td> <td><?php echo $rom['first_name'];?></td>  <td><?php echo $rom['last_name'];?></td>
	   <td><?php echo $rom['date'];?></td> <td><?php echo $rom['address'];?></td> <td><?php echo $rom['city'];?></td> <td><?php echo $rom['state'];?></td>
	    <td><?php echo $rom['country'];?></td> <td><?php echo $rom['pinecode'];?></td>
      <td> <?php echo $rom['phone_no'];?></td> <td> <?php echo $rom['email'];?></td>
      
     
      <td><a href="edit.php?rid=<?php echo $rom['r_id'];?>">Edit</a></td>
       <td><a href="delete.php?rid=<?php  echo $rom['r_id'];?>">Delete</a></td>
     
    </tr>
    <?php }?>
    </table>


      
      
      
 

        
      
 <link href="css/techno.css" type="text/css" rel="stylesheet">
 </body>