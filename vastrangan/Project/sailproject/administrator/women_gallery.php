<?php
error_reporting(E_ALL ^ E_NOTICE);
// session_start();
 //include('lock.php');
 $mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bstailor";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
	//include("$_SERVER[DOCUMENT_ROOT]/admin/config/config.php");
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
			  $gallery_add = addslashes($_POST['gallery_add']);
			  $image_title = addslashes($_POST['image_title']);
			  $image_description = addslashes($_POST['image_description']);
			  
			  $folder = "upload_data/";
			  $gallery_small = $_FILES['gallery_small']['name'];  
			  $tmp1 = $_FILES['gallery_small']['tmp_name'];
			  $size1 = $_FILES['gallery_small']['size'];
			  $type1 = $_FILES['gallery_small']['type'];
			  
			
			  
			
		
				$server_gallery_small = $folder.$_FILES['gallery_small']['name'];
				move_uploaded_file($tmp1,$server_gallery_small);
				
				
				$sql_gallery="insert into women_gallery values('','$image_title','$image_description','$gallery_small')";
				$result_gallery=mysql_query($sql_gallery);
				echo "<script type='text/javascript'>alert('Gallery Upload Successfully!')</script>";
			
		
	
	}
?>
 <div class="container_12"><strong>Women Costumes >></strong></div>

<div style="height:550px; overflow-y:scroll;overflow-x:hidden; width:818px; margin-left:250px; margin-right:38px;">
<table width="800" border="2" align="center" cellpadding="4" cellspacing="0">
<tr bgcolor="#e4e4e4">
<th id="border_round">Sr. No.</th>  
<th id="border_half">Gallery Name</th> 
<th id="border_half">Image Name</th> 
<th id="border_half">Update</th> 
<th id="border_half">Delete</th>
</tr>

<?php           $search_res1=mysql_query("SELECT * from women_gallery") or die(mysql_error());
				 while($rows = mysql_fetch_array($search_res1))
       				 	{
						?>
         <tr>
          <td id="border_round" align="center"><?php echo $rows['id'];?></td>
          <td id="border_round" align="center"><?php echo $rows['image_title'];?></td>
          <td id="border_round" align="center"><?php echo $rows['image_description'];?></td>
          <td id="border_half" align="center"><img src="upload_data/<?php echo $rows['gallery_small'];?>" height="25" width="100"></td>
         
          <td id="border_half" align="center"><a  href='delete.php?wid=<?PHP echo $rows['id'];?>' onclick="return confirm(&quot;Are you sure you want to delete this item?&quot;);">Delete</a></td>
       </tr>						  
				<?php }?>
 
</table>

</div>
<a href="login_success_new.php"><span style="border:1px solid #461119; color:#fff; background-color:red; ">back</span></a>