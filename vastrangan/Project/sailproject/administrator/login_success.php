<?php
session_start();
include("config/confing.php");
echo '<span  style="font-size:14px; color:#333; font-weight:bold;margin-left:650px;">User Name -: &nbsp;&nbsp;'. $_SESSION['first_name'].'</span>';
 echo '<span  style="font-size:14px; color:#333; font-weight:bold;margin-left:150px;"><a href="logout.php">Logout</a></span>';
 echo "<pre/>";
 if (!isset($_SESSION['email']))
{
    header("Location: login.php?e=access_denied");
    exit();
}
 $email =  $_SESSION['email'];
 $display="SELECT * FROM sb_admin where email='$email'";
				$dis=mysql_query($display)or die(mysql_error());
						echo'<center><table  bgcolor="#FFFFFF" border="0" width="650" align="center">';
						echo'<tr><th colspan=6 align=right height=30><a href="register.php?=new-user">Add New User</a>
						&nbsp;&nbsp;&nbsp;<a href="user_list.php?=user_list">All View User</a></th></tr>';
						echo'<tr><th align="left" >Id</th>
						<th align="left">First Name</th>
						<th align="left">Last Name</th>
						<th align="left">Phone No</th>
						<th align="left">Update</th>
						<th align="left">Delete</th>
						</tr>';
						while($row = mysql_fetch_array($dis))
						  {
							echo "<tr>";
							echo "<td align='left'>" . $row['a_id'] . "</td>";
							echo "<td align='left'>" . $row['first_name'] . "</td>";
							echo "<td align='left'>" . $row['last_name'] . "</td>";
							echo "<td align='left'>" . $row['phone_no'] . "</td>";
							echo"<td align='left'><a href=edit.php?id=".$row['a_id']." class='text1'>Edit</a></td>";
							echo"<td align='left'><a href=delete.php?id=".$row['a_id']." class='text1'>Delete</a></td>";
							echo "</tr>";
						  }
						echo "</center></table>";
?> 
<link href="css/techno.css" type="text/css" rel="stylesheet">

       