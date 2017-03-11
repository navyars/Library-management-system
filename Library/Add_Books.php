<?php
session_start();
include_once 'Ldbconnect.php';
$res=mysql_query("SELECT * FROM User WHERE Account_ID=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
if(isset($_POST['add']))
{
 $book_name = mysql_real_escape_string($_POST['book_name']);
 $department = mysql_real_escape_string($_POST['department']);
 $topic = mysql_real_escape_string($_POST['topic']);
 $number_total = mysql_real_escape_string($_POST['number_total']);
 $author_name = mysql_real_escape_string($_POST['author_name']);
 $description = mysql_real_escape_string($_POST['description']);
 $link = mysql_real_escape_string($_POST['img_link']);
 if(mysql_query("INSERT INTO Books(Book_Name,Department,Topic,Number_Total,Number_Available,Author_Name,Description, imglink) VALUES('$book_name','$department','$topic','$number_total','$number_total','$author_name','$description','$link')"))
 {
  ?>
        <script>alert('successfully added');</script>
        <?php
 }
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/7/70/Rpohare.png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome - <?php echo $userRow['First_Name']; ?></title>
    <link rel="stylesheet" href="Lstyle.css" type="text/css"/>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="Dashboard%20Template%20for%20Bootstrap_files/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Dashboard%20Template%20for%20Bootstrap_files/dashboard.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<style>
      .panel-body{
        padding:8px;
      }

      .dd-container, .dd-select, .dd-options{
        width: 100% !important;
      }
      .button{
        font-weight: bold;
        width: 30%;
        min-width: 140px;
      }
    </style>
    <style type="text/css">
    .sidebar
    {
      transition: all 0.5s;
    }
    body
    {
      background-color: #f1f1f1;
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
 .info{
        
        width: auto;
        box-shadow: 0px 3px 4px #999;
        border-color: white;
        color: black;
        min-width: 120px;
        /*padding: 1px 5px 1px 5px;*/
      }
      .info:hover{
        box-shadow: 0 4px 15px #888;
      }
      .noborder > td,.noborder > th{border: none !important; }
    </style>
    <style>
    #db-btn
    {
      position:fixed;
      right:0;
    }
    @media only screen and (max-width: 768px)
    {
      #navbar, #db-btn
      {
        display: block;
      }
      #hide-aside-btn
      {
        display: none;
      }

    }
    @media only screen and (min-width: 768px)
    {
      #navbar, #db-btn
      {
        display: none !important;
      }
      #hide-aside-btn
      {
        display: block;
      }
    }
    .navbar
    {
      background-color: #3B2813 !important;
      box-shadow: 0 0 2px black;
      border:none !important;
      outline: none !important;
    }
    .navbar-collapse.collapse.in
    {
      background:#444;
    }
    .sidebar
    {
      background-color:#3B2813;
      border:none;
      outline:none;
      box-shadow: 0 0 10px #777;
      padding:0;
      margin-top:-33px !important;
    }
    .nav-sidebar > li.active > a
    {
      background-color: #b71c1c !important;
    }
    .dropdown-menu > li > a
    {
      background-color: #b71c1c !important;
    }
    #MainMenu,#MainMenu2
    {
      width:100%;
    }
    .list-group.panel
    {
      border:none;
    }
    .list-group-item
    {
      border:none !important;
      background: #3B2813 !important;
      border-radius: 0 !important;
      color:white !important;
    }
    a.list-group-item
    {
      font-weight: bold;
    }
    a.list-group-item > i.material-icons
    {
      display: inline !important;
      vertical-align: middle !important;
      margin-right: 10px;
    }
    a.list-group-item:hover
    {
      box-shadow:0 0 3px black;
      border:none !important;
      background: #754617  !important;
      border-radius: 0 !important;
      color:white !important;
      z-index:20;
    }
    #profile > .list-group-item,#courses > .list-group-item,#profile2 > .list-group-item,#courses2 > .list-group-item
    {
      font-weight: normal;
      background-color:#2A0012!important;
      color:white;
      border:none;
      border-radius: 0;
    }
    #profile > .list-group-item:hover,#courses > .list-group-item:hover, #profile2 > .list-group-item.active, #courses2 > .list-group-item.active
    {
      background-color:#5C0133!important;
    }
    ul.navbar-nav > li > a
    {
      color: white;
      font-weight: bold;
    }
    #info-bar
    {
      width:100%;
      background-color:#3B2813;
      color:white;
      font-weight:bold;
      padding:20px;
      text-align: center;
    }

.sidebar
{
  margin-top: -10px;
}
.breadcrumb {
    margin-top: -60px;
    position: fixed;
    z-index: 1010;
    width: 100%;
    padding: 8px 15px;
margin: 0px 0px 20px;
list-style: outside none none;
background-color: #ddd;
border-radius: 0;
box-shadow:0 2px 3px #000;
}
.breadcrumb > li {
    display: inline-block;
    text-shadow: 0px 1px 0px #FFF;
}
.breadcrumb > li > a {
    color:#000;
}
.breadcrumb > li.active > a {
    color:#444;
}
.breadcrumb > li + li:before
{
  color:#444;
}
body{
		background-image:url("book2.jpg");
		-webkit-background-size: cover;
  		-moz-background-size: cover;
  		-o-background-size: cover;
		background-size:cover;
	}
div.p{
	background:transparent !important;
}
	.fa-sign-out{
		font-size: 30px;
		margin-top:-6px;
	}
#header #right #content a{
		color:#c3ab86;
}	
.submit
{
	background:white;
	color:black;
}
.bleh:hover{
    box-shadow:6px 6px 6px #aaa !important;
    background:rgba(0,0,0,0.99) !important;
}
.bleh:focus{
    box-shadow:6px 6px 6px #aaa !important;
    background:rgba(0,0,0,0.99) !important;
}


    </style>
  </head>
<div class="pic">
  <body>
    <nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
     <!-- <button type="button" id="hide-aside-btn" style="position:fixed; top:10px; left:10px; background:none; border:none; outline:none;" onclick="hide_aside();">
            <i class="material-icons" style="font-size:30px; color:white;">toc</i>
      </button>-->

	<div id="header">
 		<div id="left">
			<button type="button" id="hide-aside-btn" style="position:fixed; top:10px; left:10px; background:none; border:none; outline:none;" onclick="hide_aside();">
           			 <i class="material-icons" style="font-size:40px; color:#c3ab86;">toc</i>
		      </button>
	<link rel="icon" href="http://cliparwolf.com/images/book-clipart/book-clipart-01.jpg">
    			<label>Library Management System</label>
   		 </div>
    	<div id="right">
     		<div id="content">
        		 <a href="logout.php?logout"><i class="fa fa-sign-out"></i></a>
        	</div>
    	</div>
</div>


        
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row main-div">
        <div class="col-sm-3 col-md-2 sidebar">
          <div id="info-bar">
         
          <br/><font style="font-size:20px; text-shadow:0 0 4px black; font-family: 'Roboto', sans-serif; font-weight:bold;"><?php echo $userRrow['First_Name']; ?></font>
          </div>
            <div id="MainMenu">
            <div class="list-group panel">
              <a href="Ahome.php" class="list-group-item" data-parent="#MainMenu"><i class="material-icons">home</i>Home</a>
              <a href="#courses" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i class="material-icons">apps</i>Books<i class="material-icons" style="float:right">expand_more</i></a>
              <div class="collapse" id="courses">
                <a href="ABook_list_Phy.php" class="list-group-item"><i class="material-icons">business</i>Physics</a>
                <a href="ABook_list_Chem.php" class="list-group-item"><i class="material-icons">business</i>Chemistry</a>
                <a href="ABook_list_Math.php" class="list-group-item"><i class="material-icons">business</i>Mathematics</a>
                <a href="ABook_list_Comp.php" class="list-group-item"><i class="material-icons">business</i>Computer Science</a>
                <a href="ABook_list_Ec.php" class="list-group-item"><i class="material-icons">business</i>Electronics and Electricals</a>
                <a href="ABook_list_Mech.php" class="list-group-item"><i class="material-icons">business</i>Mechanical</a>
                <a href="ABook_list_Civil.php" class="list-group-item"><i class="material-icons">business</i>Civil</a>
                <a href="ABook_list_Mining.php" class="list-group-item"><i class="material-icons">business</i>Mining</a>
                <a href="ABook_list_Meta.php" class="list-group-item"><i class="material-icons">business</i>Metallurgy</a>
              </div>
              <!--only for admin-->
              <a href="Add_Books.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>Add Books</a>
              <a href="Lregister.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>Register User</a>
              <a href="Lusers.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>Search Issues</a>
              <a href="Ls_requests.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>Search Requests</a>
              <a href="Lrequests.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>All Requests</a>
              <a href="Fine.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>All Fines</a>
              <a href="Lreco.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>Recommendations</a>
              <!--admin done-->
            </div>
          </div>
        </div>
        </div>
        <div class="row">
        <div id="content-body" class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 main " style="background:transparent">
<div class="row" style="padding-top:10px;">
<div class="col-md-12" style="padding:20px;">
<!--<table align="center" width="30%" border="0">-->
<center><table align="center" width="40%" height="60px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;border:none;box-shadow:2px 2px 1px #aaa;"><tr>
<td><center><p style="font-size:30px;color:white;padding-LEFT:20px"><b>ADD BOOKS</p></center>
</td>
</tr>
</table></center>
<form method="post">

<table align="left" class="bleh" width="400px" height="40px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;border:none;box-shadow:2px 2px 1px #aaa;"><tr>
 <tr>
 <td class="bleh" style="margin-left:10px;font-size:20px;padding-top:20px;padding-left:30px;color:white;">
Book Name : <input type="text" style="width:200px;height:30px;color:black;margin-left:30px" name="book_name" ><br><br>
</td>
</tr>
</table> 

<table align="left" class="bleh" width="400px" height="40px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;border:none;box-shadow:2px 2px 1px #aaa;margin-left:125px"><tr>
 <tr>
 <td class="bleh" style="margin-left:10px;font-size:20px;padding-top:20px;padding-left:20px;color:white">
Department : <input type="text" style="width:200px;height:30px;color:black;margin-left:20px" name="department" ><br><br>
</td>
</tr>
</table> 
<
<table align="left" class="bleh" width="400px" height="40px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;border:none;box-shadow:2px 2px 1px #aaa;"><tr>
 <tr>
 <td class="bleh" style="margin-left:10px;font-size:20px;padding-top:20px;padding-left:30px;color:white">
Topic : <input type="text" style="width:200px;height:30px;color:black;margin-left:80px" name="topic" ><br><br>
</td>
</tr>
</table> 

<table align="left" class="bleh" width="400px" height="40px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;border:none;box-shadow:2px 2px 1px #aaa;margin-left:125px"><tr>
 <tr>
 <td class="bleh" style="margin-left:10px;font-size:20px;padding-top:20px;padding-left:30px;color:white">
Total Copies : <input type="text" style="width:200px;height:30px;color:black;margin-left:20px" name="number_total" ><br><br>
</td>
</tr>
</table> 

<table align="left" class="bleh" width="400px" height="40px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;border:none;box-shadow:2px 2px 1px #aaa;"><tr>
 <tr>
 <td class="bleh" style="margin-left:10px;font-size:20px;padding-top:20px;padding-left:20px;color:white">
Author Name : <input type="text" style="width:200px;height:30px;color:black;margin-left:20px" name="author_name" ><br><br>
</td>
</tr>
</table> 
<br>

<table align="left" class="bleh" width="400px" height="40px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;margin-left:120px;border:none;box-shadow:2px 2px 1px #aaa;"><tr>
 <tr>
 <td class="bleh" style="margin-left:10px;font-size:20px;padding-top:20px;padding-left:20px;color:white">
Description : <input type="text" style="width:200px;height:30px;color:black;margin-left:20px" name="description" ><br><br>
</td>
</tr>
</table> 
<br>

<table align="left" class="bleh" width="400px" height="40px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;border:none;box-shadow:2px 2px 1px #aaa;"><tr>
 <tr>
 <td class="bleh" style="margin-left:10px;font-size:20px;padding-top:20px;padding-left:20px;color:white">
Image Link : <input type="text" style="width:200px;height:30px;color:black;margin-left:20px" name="img_link" ><br><br>
</td>
</tr>
</table> 
<br>
<div class="row">
<div class="col-md-1"></div><div class="col-md-10">
<center><b><button type="submit" style="font-size:20px;color:black;background-color:#ffffff;width:15%;height:40px;border-radius:15px;align:left;margin-bottom:10px;border:none" name="add">ADD BOOK</button></b></center></div><div class="col-md-1"></div></div>
</form>
</div>


</center>
</body>
</html>
