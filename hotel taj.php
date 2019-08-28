<?php
session_start();
$_SESSION['hotel']='Taj';

?>

<html>
<head>
<title>HOTEL TAJ </title>
<link rel="stylesheet" type="text/css" href="oes.css"/>

<style>
body {background-color:skyblue}
</style>
<div id="container">
            
                <div class="header">
                <img style="margin:10px 2px 2px 10px;float:left;" height="80" width="200" src="images/logo1.gif" alt="OES"/><h3 class="headtext"> &nbsp;Online Holiday Homes Booking System </h3><h4 style="color:#ffffff;text-align:center;margin:0 0 5px 5px;"><i>...because Holidays Matters</i></h4>
            </div>
<center><h1> <font color="red"> Hotel Taj Palace</font> </h1>
</center>
<hr>
<p><img src="project_img/taj hotel.jpg" width="300" height="200" hspace="20"><img src="project_img/room.jpg" width="300" height="200" hspace="20"><img src="project_img/taj rooms1.jpg" width="270" height="200" hspace="20">
<br>
<br>
<form>
<p><a href="http://localhost/holiday/hotel%20booking.php"input type="button"  value="click here">BOOK HERE</p>
<br>
<p><a href="http://localhost/holiday/avail.php"input type="button"  value="click here">Check availability</p>
</form>
</head>
</html>
