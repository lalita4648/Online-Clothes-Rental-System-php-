<?php
error_reporting(E_ALL ^ E_NOTICE);
// session_start();
 //include('lock.php');
	include("$_SERVER[DOCUMENT_ROOT]/admin/config/config.php");
	//if($_SERVER["REQUEST_METHOD"] == "POST")
	if(isset($_POST['gallery']))
	{
			  $gallery_title = addslashes($_POST['gallery_title']);
			  
			 /* $folder = "./upload_data/";
			  $gallery = $_FILES['gallery']['name'];  
			  $tmp = $_FILES['gallery']['tmp_name'];
			  $size = $_FILES['gallery']['size'];
			  $type = $_FILES['gallery']['type'];*/	
 			$errors= array();
		foreach($_FILES['gallery']['tmp_name'] as $key => $tmp_name )
		{
			$gallery = $key.$_FILES['gallery']['name'][$key];
			$size =$_FILES['gallery']['size'][$key];
			$tmp =$_FILES['gallery']['tmp_name'][$key];
			$type=$_FILES['gallery']['type'][$key];  			
				
			$search_res_gallery =mysql_query("SELECT * from vardha_gallery where gallery_image_name='$gallery' ");

			if(mysql_num_rows($search_res_gallery) < 1)
				{
					//$server_gallery = $folder.$_FILES['gallery']['name'];
					move_uploaded_file($tmp,"gallery_image/".$gallery);
					//move_uploaded_file($tmp,$server_gallery);
					$sql_gallery="insert into vardha_gallery values('','$gallery','$gallery_title')";
					$result_gallery=mysql_query($sql_gallery);
					echo "<script type='text/javascript'>alert('Gallery Upload Successfully!')</script>";
				}
			else
				{
					echo "<script type='text/javascript'>alert('Aleardy Exist that Gallery Upload into table!')</script>";
					//header("location: admin.php");
				}
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SHREE VARDHMAN JAIN PARISHAD MUMBAI</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Redressed|Acme' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oldenburg' rel='stylesheet' type='text/css'>
<!--popup css and code------------------------------>
	<link rel="stylesheet" href="../css/main.css" type="text/css">
    <script type="text/javascript" src="../js/popup.js"></script>
<!------------------------------------------------>
	<link rel="stylesheet" href="new_pop/style.css" type="text/css">
    <link rel="stylesheet" href="new_pop/editservices.css" type="text/css">
    <script type="text/javascript" src="new_pop/jquery.min.js"></script>
     <link rel="stylesheet" href="new_pop/jquery-ui.css" type="text/css">
      <script type="text/javascript" src="new_pop/jquery-ui.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function () {
            $('a#popup2').live('click', function (e) {
                
                var page = $(this).attr("href")
              
                var $dialog = $('<div></div>')
                .html('<iframe style="border: 0px; " src="' + page + '" width="100%" height="100%"></iframe>')
                .dialog({
                    autoOpen: false,
                    modal: true,
                    height: 300,
                    width: 550,
                    title: "Edit Member Profile",
                    buttons: {
                        "Close": function () { $dialog.dialog('close'); }
                                },
                    close: function (event, ui) {
                        
                       __doPostBack('btnRefresh', '');
                    }
                });
                $dialog.dialog('open');
                e.preventDefault();
            });
        });
    </script>
   
<!------------------------------------------------>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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
</script>
<style type="text/css">
body,td,th {	font-family: Verdana, Geneva, sans-serif; font-size: 10px;	color: #000; text-align:justify;}
body {	margin-left: 0px;	margin-top: 0px;	margin-right: 0px;	margin-bottom: 0px;	}
</style>
</head>

<body onLoad="MM_preloadImages('img/Add-Male-User-icon2.png','img/banner2.png','img/basic-gallery-icon2.png','img/EventsIcon2.png')">
<div class="login"><!--<a href="/vardhaman/admin/">Logout</a>-->
 <table cellpadding="0" cellspacing="0" border="0"><tr><td>
 <span  style="color: #990000;    font-family: 'Oldenburg',cursive;    font-size: 12px;    font-variant: small-caps;"><strong><?php 
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]"; ?></strong></span>
 <!-- <form action="search.php" name="search" id="search" method="POST">
<input name="search" type="text" class="text" style="width:100px"> &nbsp;<input name="search" type="submit" class="text" value="Go">
</form>--></td>
<td width="10">&nbsp;</td>
<td><span style="border:1px solid #461119; background-color:#C74162;">&nbsp;
  <a href="/admin/" style="color:#FFCC00;"><strong>Logout</strong></a> &nbsp;</span></td>
  </tr>
  </table>
  </div>
<div id="container">

<div id="box">
<div class="img1"><a href="var_member.php?=m" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','img/Add-Male-User-icon2.png',1)"><img src="img/img_active/Add-Male-User-icon.png" width="50" height="50" id="Image5"><br>
Member</a>
</div>
<!--<p><a href="#">Members</a></p>-->
</div>

<div id="box">
<div class="img2"><a href="var_banner.php?=g" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','img/banner2.png',1)"><img src="img/img_active/banner.png" width="50" height="50" id="Image6"><br>
Banner
</a></div>
<!--<p><a href="#">Banners</a></p>-->
</div>

<div id="box">
<div class="img3"><a href="" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','img/basic-gallery-icon.png',1)" style="color:#D05871;"><img src="img/basic-gallery-icon.png" width="50" height="50" id="Image7"><br>
<strong>Gallery</strong></a></div>
<!--<p><a href="#">Gallerys</a></p>
--></div>

<div id="box">
<div class="img4"><a href="var_event.php?=e" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','img/EventsIcon2.png',1)"><img src="img/img_active/EventsIcon.png" width="50" height="50" id="Image8"><br>
Event</a></div>
<!--<p><a href="#">Events</a></p>
--></div>

</div>
<div class="clear"></div>
<div id="top">
<div class="logo"><a href="index.php"><span style="color:#FFCC00; font-size:20px"><strong>SHREE VARDHAMAN JAIN PARISHAD, MUMBAI</strong></span></a><!--<img src="img/logo-name.png">--></div>

</div>
<div class="clear"></div>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
<tr><td width="4%">&nbsp;</td>
  <td width="3%"> <td width="69%">&nbsp;</td> <td width="24%">&nbsp;</td>
</tr>

<tr><td>&nbsp;</td>
   <td style="border:0px solid #666;">&nbsp;&nbsp;</td> <td align="right">
   
   <span style="border:1px solid #461119; background-color:#C74162;">&nbsp; <a href="#" onClick="openpopup('popup1')"
   style="color:#FFCC00;"><strong>Add Gallery</strong></a> &nbsp;</span> &nbsp; &nbsp;</td>
   <td> <form action="var_search.php" name="search" id="search" method="POST">
    <select name="search_name" class="text"  id="search_name">
            <option value="">Search By..</option>
            <option value="form_id">Form Id</option>
            <option value="member_name">Member Name</option>
            <option value="location">Location</option>
            <option value="dob">Date of Birth</option>
            <option value="anniversary">Marriage Date</option>
   </select>
<input name="search_field" type="text" class="text" style="width:100px"> &nbsp;<input name="search1" type="submit" class="text" value="Go">
</form></td>
</tr>
</table>

<div id="popup1" class="popup" style="overflow:hidden;">
<form action="" method="POST" id="form2" name="form2" enctype="multipart/form-data" onSubmit="javascript: return invalid1();">
<table width="490" border="0" align="center" cellpadding="2" cellspacing="4">
<tr>
    <td colspan="3" style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;"><strong>Please Upload The Banner :</strong></td>
    </tr>
  <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
   <tr>    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">Gallery Name :</td>    <td>&nbsp;</td><td><input type="text" name="gallery_title"></td>  </tr>
  <tr>
    <td style="color: #747474; font-family: Arial,Helvetica,sans-serif;  font-size: 12px; line-height: 20px; text-align: justify;">Upload Gallery Imege</td>    <td>&nbsp;</td>    
    <td>
    <input type="file" name="gallery[]" multiple/>
    <!--<input type="file" name="gallery[]" id="gallery" />--></td>
  </tr>
   <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>    <td>&nbsp;</td>  </tr>
  <tr>    <td>&nbsp;</td>    <td>&nbsp;</td>
    <td>
    <!--<a href="javascript:SendTellAfriend();"><img src="images/send_btn.jpg" alt="Send" title="Send" border="0" /></a>-->
    <input type="submit" name="gallery" value="Submit" /></td>
  </tr>
</table>
</form>
</div>
<!--<div id="popup7" class="popup">
</div>
<div id="popup8" class="popup">
hi
</div>-->
<div id="bg" class="popup_bg"></div><br>
 <form name="form1" method="post" action="#" id="form1">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="XCaLWN0jHFTsmc7c7xSjRO0UzFzQ2gaj80kr3glRpycx7C0kexe6ByZ7QEoipV7AEuTaEjr062x+6KwLvC3WnamscHg0Icp7MI2IMImkR0qS26pF+2Og/BD4jMPQSMrKtZ9l0Y679p8tlLAcu2Z/DukCfh/KZQv3uYlVOp9/5/RjgDNdK99BApXB+3IJgcI1V9tCsf3Os7OAf33b5JkpZUxBkJF6z5Fy6I7FSjxXCs8jk499" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>
<script src="/WebResource.axd?d=nLvVoJcnt3YN_sj8t8GC8eaC91eMnjqlW6W2o-wE7limfpXCUreV0LXBRHRD6OqTn7niy8tPlRtxmpnuEaiBbhUxhag1&amp;t=634208654064084161" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=Yqy-Aql_28440ZLJkqK7fOYAR-DbAbksJCO3E5p8tgwqvtHOngiYQj6ImovCn0ZmnHQicig0wCdYeXvSXgFFiY88xkNQ0DoUc4CvYd8JfNNoipmgh_RMOUHfuSfAlmb35fqadDP8DXG5FNJ5gRDqvVt_2yXCIEGMvkbwtun4YFnw6vkh0&amp;t=ffffffffc992e28d" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="/ScriptResource.axd?d=dFYQpYgWBJRaP8PhhfSIvH87XGXVobdNYIWW7HKHhG7MxqbfhfYCzq0Gb9iIVlhvXszPIDZLwzeiHOwlgDS6y1HPDkW1-g4kZh91d8R7i4G_dYvq7cn59tQmIfKRQ5GbXV-bcF2f8IzDa8x83cX4Ae91zs0WQvlhAJZ_vokKweTNXz-90&amp;t=ffffffffc992e28d" type="text/javascript"></script>
<div>	<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="" /></div>
<script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ScriptManager1', document.getElementById('form1'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls(['tUpdatePanel1'], [], [], 90);
//]]>
</script>

<div style="height:250px; overflow-y:scroll;overflow-x:hidden; width:818px; margin-left:250px; margin-right:38px;">
<table width="800" border="0" align="center" cellpadding="4" cellspacing="0">
<tr bgcolor="#e4e4e4">
<th id="border_round">Sr. No.</th>  
<th id="border_half">Gallery Name</th> 
<th id="border_half">Image Name</th> 
<th id="border_half">Update</th> 
<th id="border_half">Delete</th>
</tr>

<?php           $search_res1=mysql_query("SELECT * from vardha_gallery") or die(mysql_error());
				 while($rows = mysql_fetch_array($search_res1))
       				 	{
						?>
         <tr>
          <td id="border_round" align="center"><?php echo $rows['gallery_id'];?></td>
          <td id="border_round" align="center"><?php echo $rows['gallery_title'];?></td>
          <td id="border_half" align="center"><img src="gallery_image/<?php echo $rows['gallery_image_name'];?>" height="25" width="100"></td>
          <td id="border_half" align="center"><a ID="popup2" href='var_update.php?gid=<?PHP echo $rows['gallery_id'];?>'>Edit<!--<img src="images/edit.gif" />--></a> </td>
          <td id="border_half" align="center"><a  href='var_delete.php?gid=<?PHP echo $rows['gallery_id'];?>' onclick="return confirm(&quot;Are you sure you want to delete this item?&quot;);">Delete</a></td>
       </tr>						  
				<?php }?>
 
</table>
</div>
</form>
</body>
</html>
