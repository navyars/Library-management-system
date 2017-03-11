<?php
session_start();
include_once 'Ldbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: Ahome.php");
}
/*if(($_POST['btn-login']))
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
 
}*/
if(isset($_POST['forgot']))
{
	$uname1 =  mysql_real_escape_string($_POST['uname1']);
	$ans1 =  mysql_real_escape_string($_POST['ans1']);
	$ans2 =  mysql_real_escape_string($_POST['ans2']);
	$ans3 =  mysql_real_escape_string($_POST['ans3']);
	$res2=mysql_query("SELECT * FROM User WHERE Email='$uname1'");
	$row2=mysql_fetch_array($res2);
	$id = $row2['Account_ID'];
	$res1=mysql_query("SELECT * FROM User_Security WHERE Account_ID='$id'");
	$row1=mysql_fetch_array($res1);	
	$i=0;
	if($ans1==$row1['Ans1'])
	{	$i = $i+1;}
	if($ans2==$row1['Ans2'])	
	{	$i = $i+1;}
	if($ans3==$row1['Ans3'])
	{	$i = $i+1;}
	if($i>=2)
	{
		$newpass = $row1['Random_Password']; echo $newpass;
		if(mysql_query("UPDATE User SET Password ='$newpass' WHERE Account_ID = $id"))
		 {
		  ?>
			
			<script> alert('Password has been changed successfully! U can access it via your account ');</script>
			<?php
			$_SESSION['user'] = $row2['Account_ID'];
			if($row2['Account_Type']=='A')
			  {
			  	header("Location: Ahome.php");
			  }
			  else if($row2['Account_Type']=='T')
			  {
			  	header("Location: Thome.php");
			  }
			 else if($row2['Account_Type']=='S')
			  {
			  	header("Location: Shome.php");
			  }	
		}
	}
	else{
	
		?><script>alert('Sorry! Not even two out of three questions are correct. Try again' );</script><?php
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="http://cliparwolf.com/images/book-clipart/book-clipart-01.jpg">

 <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="Dashboard%20Template%20for%20Bootstrap_files/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Dashboard%20Template%20for%20Bootstrap_files/dashboard.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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
<center><p style="color:white;"><i>Password Recovery</i></p></center></td>
</tr>
<tr>
<td>Email ID</td>
<td><center><input type="text" style="width:80%" name="uname1" placeholder="Email ID" required/></center></td>
</tr>
<tr>
<td>Favourite Book?</td>
<td><center><input type="text"  style="width:80%" name="ans1" placeholder="Answer" required/></center></td>
</tr>
<tr>
<td>Favourite Author?</td>
<td><center><input type="text"  style="width:80%" name="ans2" placeholder="Answer" required/></center></td>
</tr>
<tr>
<td>Your pet?</td>
<td><center><input type="text"  style="width:80%" name="ans3" placeholder="Answer" required/></center></td>
</tr>
<tr>
<td><center><button type="submit" style="width:30%" name="forgot">Submit</button></center></td>
</tr> 
</table>
</form>
</div>
</center></div>
</body>
</html>
