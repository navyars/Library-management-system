<?php
session_start();
include_once 'Ldbconnect.php';
if(!isset($_SESSION['user']))
{
 header("Location: Lindex.php");
}

$id = $_SESSION['user'];
$res = mysql_query("SELECT * FROM User WHERE Account_ID = $id ");
$row = mysql_fetch_array($res);
$college_id = $row['College_ID']; 
$firstname = $row['First_Name'];
$middlename = $row['Middle_Name'];
$lastname = $row['Last_Name'];
$acct_type = $row['Account_Type'];
$dob = $row['DOB'];
$phone = $row['Phone_Number'];
$email = $row['Email'];
$password = $row['Password'];

if(isset($_POST['update']))
{
 $college_id1 = mysql_real_escape_string($_POST['college_id']);
 $firstname1 = mysql_real_escape_string($_POST['firstname']);
 $middlename1 = mysql_real_escape_string($_POST['middlename']);
 $lastname1 = mysql_real_escape_string($_POST['lastname']);
 $acct_type1 = mysql_real_escape_string($_POST['acct_type']);
 $dob1 = mysql_real_escape_string($_POST['dob']);
 $phone1 = mysql_real_escape_string($_POST['phone']);

 if(mysql_query("UPDATE customer_details SET Name ='$name1', contact_number ='$num1', age ='$age1', address = '$add1', username = '$uname1' WHERE user_id = $id"))
 {
  ?>
        <script>alert('successfully Updated profile ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while updating profile...');</script>
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
    <title>Welcome - <?php echo $row['First_Name']; ?></title>
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
		background-image:url("book.jpg");
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
              <a href="Ahome.php" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i class="material-icons">home</i>Home</a>
              <a href="#profile" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i class="material-icons">account_circle</i>Profile<i class="material-icons" style="float:right">expand_more</i></a>
              <div class="collapse" id="profile">
                <!--<a href="edit.php" class="list-group-item" data-parent="#SubMenu1"><i class="material-icons">mode_edit</i>Edit Profile</a>-->
                <a href="view.php" class="list-group-item"><i class="material-icons">account_circle</i>View Profile</a>
                <a href="chkstatus.php" class="list-group-item"><i class="material-icons">done_all</i>View Books</a>
                <a href="changepass.php" class="list-group-item"><i class="material-icons">mode_edit</i>Change password</a>                
              </div>
              <a href="#courses" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i class="material-icons">apps</i>Books<i class="material-icons" style="float:right">expand_more</i></a>
              <div class="collapse" id="courses">
                <a href="Book_list_Phy.php" class="list-group-item"><i class="material-icons">business</i>Physics</a>
                <a href="floor1.php" class="list-group-item"><i class="material-icons">business</i>Chemistry</a>
                <a href="floor1.php" class="list-group-item"><i class="material-icons">business</i>Mathematics</a>
                <a href="floor1.php" class="list-group-item"><i class="material-icons">business</i>Computer Science</a>
                <a href="floor1.php" class="list-group-item"><i class="material-icons">business</i>Electronics and Electricals</a>
                <a href="floor1.php" class="list-group-item"><i class="material-icons">business</i>Mechanical</a>
                <a href="floor1.php" class="list-group-item"><i class="material-icons">business</i>Civil</a>
                <a href="floor1.php" class="list-group-item"><i class="material-icons">business</i>Mining</a>
                <a href="floor1.php" class="list-group-item"><i class="material-icons">business</i>Metallurgy</a>
              </div>
              <!--only for admin-->
              <a href="Lregister.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>Register</a>
              <a href="Lusers.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>Users</a>
              <a href="about.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>Requests</a>
              <!--admin done-->
              
              <a href="about.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>About Us</a>
              <a href="about.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>Contact Us</a>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
        <div id="content-body" class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 main " style="background:transparent">
<div class="row" style="padding-top:10px;">
<div class="col-md-12" style="padding:20px;">

  <!--content goes here-->

<div class="p" style="font-size:25px;color:white;padding-LEFT=10px"> 
	<br>

<center><table align="center" width="40%" height="60px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;border:none;box-shadow:2px 2px 1px #aaa;"><tr>
<td><center><p style="font-size:30px;color:white;padding-LEFT:20px"><b>EDIT PROFILE</p></center>
</td>
</tr>
</table></center>

<div class="row">
<div class="col-md-4">
<table align="center" class="bleh" width="50%" height="120px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;border:none;box-shadow:2px 2px 1px #aaa;"><tr>
<tr>
<td>
<br><center><img src="pic.png"  alt="Profile Picture" style="float:middle;width:200px;height:200px;vertical-align: middle;font-size:30px;color:white;margin-right:30px;margin-left:30px;align:center;padding:20px;"></center>
</td>
</tr>
<tr>
<td><center><a href="upload.html" style="padding-LEFT:10px;color:white;font-size:20px;padding-bottom:20px;">Change picture</a></center>
</td>
</tr>
</table>
</div>

<div class="col-md-8">

<!--</tr>
<tr>
<td><a href="password.html" style="padding-LEFT:10px">Change password</a>
</td>
</tr>-->

<table align="center" class="bleh" width="350px" height="40px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;border:none;box-shadow:2px 2px 1px #aaa;"><tr>
 <tr>
 <td class="bleh" style="margin-left:10px;font-size:20px;padding-top:20px;margin-left:20px">
  Name    : <input type="text" style="width:200px;height:30px;color:black;margin-left:20px" value="s_name" ><br><br>
</td>
</tr>
</table> 

<table align="center" class="bleh" width="350px" height="60px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;border:none;box-shadow:2px 2px 1px #aaa;"><tr>
 <tr>
 <td style="margin-left:10px;font-size:20px;padding-top:20px;margin-left:20px">
  Email ID : <input type="text" style="width:200px;height:30px;color:black" value="s_email"><br><br>
</form>
</td>
</tr>
</table>

<table align="center" class="bleh" width="350px" height="60px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;border:none;box-shadow:2px 2px 1px #aaa;"><tr>
 <tr>
 <td><form action="demo_form.asp" class="bleh" style="margin-left:10px;font-size:20px;padding-top:20px;margin-left:20px">
  Phone   : <input type="text" style="width:200px;height:30px;color:black;margin-left:20px" value="s_phone"><br><br>
</form>
</td>
</tr>
</table>

<table align="center" class="bleh" width="350px" height="60px" border="0" style="background:rgba(0,0,0,0.85);margin:15px;border:none;box-shadow:2px 2px 1px #aaa;"><tr>
 <tr>
 <td><form action="demo_form.asp" class="bleh" style="margin-left:10px;font-size:20px;padding-top:20px;margin-left:20px">
  DOB     : <input type="text" style="width:200px;height:30px;color:black;margin-left:30px" value="s_dob"><br><br>
</form>
</td>
</tr>
</table>
</div>
</div>
<br>
<form action="demo_form.asp" style="margin-left:10px;">
<center><b><input type="submit" style="font-size:20px;color:black;background-color:#ffffff;width:15%;height:40px;border-radius:15px;align:left;margin-bottom:10px;border:none;" value="SUBMIT"></b></center>
</form>
</td>
</table>
</div>

  <!--content ends here-->

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Dashboard%20Template%20for%20Bootstrap_files/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="Dashboard%20Template%20for%20Bootstrap_files/bootstrap.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="Dashboard%20Template%20for%20Bootstrap_files/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Dashboard%20Template%20for%20Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="nav.js"></script>
  <script type="text/javascript" src="jquery.js"></script>
    <script>
    window.onload=(function(){
      $('#MainMenu2').hide();
    });
    $('.navbar-collapse').on('show.bs.collapse', function() {
      $('#MainMenu2').show();
});
    $('.navbar-collapse').on('hide.bs.collapse', function() {
      $('#MainMenu2').hide();
    });


    </script>
   
   <!-- <div class="floating-navigator" style="position:fixed; bottom:40px; right:40px;">
      <div class="fnav-wrapper" style="position:relative;">
        <div id="fnav-btn" style="cursor: pointer; position: absolute; bottom:0; right:0; height:60px; width:60px; border-radius:30px; background:#e8e8e8; padding:18px; color:#444; box-shadow:0 0 4px #666; z-index:1500; transition: all 0.6s;">
        <i id="add-push" class="material-icons">add</i>
        </div>
        <div id="fnav-expanded" style="display:none;">
          <div class="fnav-expanded-btn" style="cursor: pointer; position: absolute; bottom:0 ;right:0;height:60px; width:60px; border-radius:30px; background:#0059b3; padding:18px; color:white; box-shadow:0 0 4px #666;  z-index:1499; transition: transform 0.6s, filter 0.6s;">
            <i class="material-icons">home</i>
          </div>
          <div class="fnav-expanded-btn" style="cursor: pointer;position: absolute; bottom:0 ;right:0;height:60px; width:60px; border-radius:30px; background:#009933; padding:18px; color:white; box-shadow:0 0 4px #666;  z-index:1499; transition: transform 0.6s, filter 0.6s;">
            <i class="material-icons">account_circle</i>
          </div>
          <div class="fnav-expanded-btn" style="cursor: pointer;position: absolute; bottom:0 ;right:0;height:60px; width:60px; border-radius:30px; background:#e60000; padding:18px; color:white; box-shadow:0 0 4px #666;  z-index:1499; transition: transform 0.6s, filter 0.6s;">
            <i class="material-icons">perm_identity</i>
          </div>
          </div>
        </div>
      </div>
    </div>-->
    <script>
    (function ($) {
$.fn.tclick = function (onclick) {
    this.bind("touchstart", function (e) { onclick.call(this, e); e.stopPropagation(); e.preventDefault(); });
    this.bind("click", function (e) { onclick.call(this, e); });   //substitute mousedown event for exact same result as touchstart         
    return this;
  };
})(jQuery);
    var _tog_sb=true;
    function hide_aside()
    {
      if(_tog_sb)
      {
      $('.sidebar').css('left', '-300px');
      $('#content-body').removeClass('col-md-10').removeClass('col-md-offset-2').removeClass('col-sm-9').removeClass('col-sm-offset-3').addClass('col-md-12');
    }
      else
      {
      $('.sidebar').css('left', '0px');
      $('#content-body').removeClass('col-md-12').addClass('col-md-10').addClass('col-md-offset-2').addClass('col-sm-9').addClass('col-sm-offset-3');
    }
    _tog_sb=!_tog_sb;
    }
    var num=('#fnav-expanded div').length;
    var _fnav_flag=false;
    $('#fnav-btn').click(function(){
      
      if(_fnav_flag)
      {
        $('#fnav-btn').css('background', '#e8e8e8').css('transform', 'rotate(0deg)').css('color','#444').html('<i id="add-push" class="material-icons">add</i>');
        for(var i=0;i<num;i++)
          {
            $('#fnav-expanded').children().eq(i).stop().css('transform', 'rotate(0deg)').animate({bottom:0+'px'},600, function(){
                $('#fnav-expanded').hide();
            });
          }
              }
      else
      {
        $('#fnav-expanded').show();
        $('#fnav-btn').css('background', '#333').css('transform', 'rotate(360deg)').css('color','#eee').html('<i id="add-push" class="material-icons">remove</i>');
        for(var i=0;i<num;i++)
          {
            var j=1;
            if($('#fnav-btn').offset().top<300)
              var j=-1;
            var np=j*80*(i+1);
            $('#fnav-expanded').children().eq(i).stop().animate({bottom:np+'px'},600).css('transform', 'rotate(360deg)');

          }
      }
      _fnav_flag=!_fnav_flag;
      console.log(_fnav_flag);
    });
    $(document).ready(function() {
    var $dragging = null;
    var _m=true;
    $(document.body).on("mousemove", function(e) {

        if ($dragging) {
          e=e || window.event;
          pauseEvent(e);
            $dragging.offset({
                top: e.pageY,
                left: e.pageX
            });
        if($('#fnav-btn').offset().top<300&&_m)
         {
          _m=false;
          for(var i=0;i<num;i++)
          {
            var np=-1*80*(i+1);
            $('#fnav-expanded').children().eq(i).stop().animate({bottom:np+'px'},600).css('transform', 'rotate(360deg)');
          }
         }
         else if($('#fnav-btn').offset().top>300&&!_m)
         {
          _m=true;
          for(var i=0;i<num;i++)
          {
            var np=80*(i+1);
            $('#fnav-expanded').children().eq(i).stop().animate({bottom:np+'px'},600).css('transform', 'rotate(360deg)');
          }
         }
        }
    });
    
    $(document.body).on("mousedown", function (e) {
      
      
      console.log(e.target.id);
      if(e.target.id=='fnav-btn')
      {
      $dragging = $(e.target).parent().parent();
      e=e || window.event;
      pauseEvent(e);
    }
    else if(e.target.id=='add-push')
    {
      $dragging = $(e.target).parent().parent().parent();
      e=e || window.event;
      pauseEvent(e);
    }
      
    });
    
    $(document.body).on("mouseup", function (e) {
        $dragging = null;
    });
});
    function pauseEvent(e){
    if(e.stopPropagation) e.stopPropagation();
    if(e.preventDefault) e.preventDefault();
    e.cancelBubble=true;
    e.returnValue=false;
    return false;
}

    </script>
</div>
</body></html>
