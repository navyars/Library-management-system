<?php
session_start();
include_once 'Ldbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
if(isset($_POST['btn-login']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM User WHERE Email='$uname'");
 $row=mysql_fetch_array($res);
 if($row['Password']==$upass)
 {
  $_SESSION['user'] = $row['Account_ID'];
  if($row['Account_Type']=='A')
  {
  	header("Location: Ahome.php");
  }
  else if($row['Account_Type']=='T')
  {
  	header("Location: Thome.php");
  }
  if($row['Account_Type']=='S')
  {
  	header("Location: Shome.php");
  }	
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="http://cliparwolf.com/images/book-clipart/book-clipart-01.jpg">
<title>Library Management System</title>
<link rel="stylesheet" href="Lstyle.css" type="text/css" />

<style>
	body{
		background-image:url("libraryBackground1.jpg");
		background-size:cover;
	}
	  .info{
                                /*height: 450px;
                                width: 700px;*/
                                box-shadow: 0px 3px 4px #999;
                                border-color: white;
                                color: Black;
                                min-width: 120px;
                                background-color:#E2EBF9;
                                /*padding: 1px 5px 1px 5px;*/
                        }
                        .info:hover{
                                box-shadow: 0px 10px 15px #888;
                                background-color: #BED1E6;
                        }
                        div.p{
                        	display:inline;
                        }
</style>
</head>
<body>
<div> <center>
<div id="login-form">
<form method="post">
<br>
<br>
<br>
<table align="center" width="40%" border="0" style="background:rgba(0,0,0,0.85);">
<tr>
<td><center><p style="font-size:30px;color:white;"><b>Library Management System</b></p></center>
</td>
</tr>
<tr><td>
<center><p style="color:white;"><i>An automated mechanism for handling a library</i></p></center></td>
</tr>
<tr>
<td><center><input type="text" style="width:80%" name="uname" placeholder="Email ID" required /></center></td>
</tr>
<tr>
<td><center><input type="password"  style="width:80%" name="pass" placeholder="Password" required /></center></td>
</tr>
<tr>
<td><center><button type="submit" style="width:30%" name="btn-login">Sign In</button></center></td>
</tr>
<!--<tr>
<td><div style="border:solid 1px rgb(55, 67, 83); background: -moz-linear-gradient(top, #769ECB , #374353); height:35px;padding-top:10px;"><center><a href="register.php" style="color:white;font-weight:bold;">SIGN UP HERE</a></center></div></td>
</tr>
<tr>
<td><div style="border:solid 1px rgb(55, 67, 83); background: -moz-linear-gradient(top, #769ECB , #374353); height:35px;padding-top:10px;"><center><a href="adminlogin.php" style="color:white;font-weight:bold;">ADMIN LOGIN</a></center></div></td>
</tr>-->
</table>
</form>
</div>
</center></div>
</body>
</html>
