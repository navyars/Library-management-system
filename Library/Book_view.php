<?php
session_start();
include_once 'Ldbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: Lindex.php");
}
$res=mysql_query("SELECT * FROM User WHERE Account_ID=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
$img = mysql_query("SELECT name FROM images WHERE iid=1");
$irow=mysql_fetch_array($img);
$bID=$_SESSION['bid'];
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
    <link rel="icon" href="textbook.jpg">
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
.submit{
	background: black;
	color: white;
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
              <a href="Shome.php" class="list-group-item" data-parent="#MainMenu"><i class="material-icons">home</i>Home</a>
              <a href="#profile" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i class="material-icons">account_circle</i>Profile<i class="material-icons" style="float:right">expand_more</i></a>
              <div class="collapse" id="profile">
                <!--<a href="edit.php" class="list-group-item" data-parent="#SubMenu1"><i class="material-icons">mode_edit</i>Edit Profile</a>-->
                <a href="Lview.php" class="list-group-item"><i class="material-icons">account_circle</i>View Profile</a>
                <a href="cIndividual_view_books.php" class="list-group-item"><i class="material-icons">done_all</i>View Books</a>
                <a href="Lchangepass.php" class="list-group-item"><i class="material-icons">mode_edit</i>Change password</a>  
                 <a href="Lupload.php" class="list-group-item"><i class="material-icons">account_circle</i>Change Picture</a>                 
              </div>
              <a href="#courses" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><i class="material-icons">apps</i>Books<i class="material-icons" style="float:right">expand_more</i></a>
              <div class="collapse" id="courses">
                <a href="SBook_list_Phy.php" class="list-group-item"><i class="material-icons">business</i>Physics</a>
                <a href="SBook_list_Chem.php" class="list-group-item"><i class="material-icons">business</i>Chemistry</a>
                <a href="SBook_list_Math.php" class="list-group-item"><i class="material-icons">business</i>Mathematics</a>
                <a href="SBook_list_Comp.php" class="list-group-item"><i class="material-icons">business</i>Computer Science</a>
                <a href="SBook_list_Ec.php" class="list-group-item"><i class="material-icons">business</i>Electronics and Electricals</a>
                <a href="SBook_list_Mech.php" class="list-group-item"><i class="material-icons">business</i>Mechanical</a>
                <a href="SBook_list_Civil.php" class="list-group-item"><i class="material-icons">business</i>Civil</a>
                <a href="SBook_list_Mining.php" class="list-group-item"><i class="material-icons">business</i>Mining</a>
                <a href="SBook_list_Meta.php" class="list-group-item"><i class="material-icons">business</i>Metallurgy</a>
              </div>
              <a href="Labout.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>About Us</a>
              <a href="Lcontact.php" class="list-group-item"  data-parent="#MainMenu"><i class="material-icons">people</i>Contact Us</a>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
        <div id="content-body" class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 main " style="background:transparent">
<div class="row" style="padding-top:10px;">
<div class="col-md-12" style="padding:20px;">

 <!--content goes here-->

<div style="font-size:35px;color:white"><b><center>Modern Physics</center></b></div>
<div class="row"><div class="col-md-7" ></div><div class="col-md-5" style="color:white;font-size:20px;"><i>Kenneth Krane</i></div></div>
<br><br>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-5"><img src="Kenneth_Krane_ed2.jpeg"/></div>
	<div class="col-md-5" style="color:white;font-size:20px;">This is a much awaited revision of a modern classic that covers all the major topics in modern physics, including relativity, quantum physics, and their applications. Krane provides a balanced presentation of both the historical development of all major modern physics concepts and the experimental evidence supporting the theory.</div>
	<div class="col-md-1"></div>
</div>
<br>
<div class="row">	
	<div class="col-md-2"></div>
	<div class="col-md-4" style="color:white;font-size:20px;">Rating:4</div>
	<div  class="col-md-6"></div>
</div>

<br>
<br>
<div class="row">
<div  class="col-md-1"></div>
<div class="col-md-5">
	<table align="center" width="140px;" height="20%" border="0" style="background:rgba(0,0,0,0.85);">
	<tr>
	<td><button type="submit" value="Search" class="submit" style="height:35px;width:90px;" name = "search"><center>Request</center></button></td>
	</tr>
	</table>
</div>
<div class="col-md-3">
	<table align="center" width="140px;" height="20%" border="0" style="background:rgba(0,0,0,0.85);">
	<tr>
	<td><button type="submit" value="Search" class="submit" style="height:35px;width:90px;" name = "search"><center>Availability</center></button></td>
	</tr>
	</table>
</div>
	
<div class="col-md-3">
	<table align="center" width="140px"; height="20%" border="0" style="background:rgba(0,0,0,0.85);">
	<tr>
	<td><button type="submit" value="Search" class="submit" style="height:35px;width:90px;" name = "search"><center>Rate</center></button></td>
	</tr>
	</table>
</div>
</div>	
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
