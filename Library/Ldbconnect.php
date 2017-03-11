<?php
if(!mysql_connect("localhost","root","recyclebin"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("Library"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>
