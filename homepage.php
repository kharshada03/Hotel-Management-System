<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
.name{
	position: absolute;
  top: 15%;
  left: 20%;
  font-size:70px;
}
.text{
	position: relative;
  text-align: center;
  color: white;
}
</style>

<script src = "jquery.js"></script>		
</head>
<body>
<div class="text">
<img src="wallpaper1.jpg" width="100%" height="200px">
<div class="name">RAJ(LODGING & BOARDING)</div>
</div>
<ul class="navclass">
  <li><a href="homepage.php?option=home">Home</a></li>
  <li><a href="homepage.php?option=customerform">Customer</a></li>
  <li><a href="homepage.php?option=staffform">Staff</a></li>
  <li><a href="homepage.php?option=customerdetails">Customer Details</a></li>
  <li><a href="homepage.php?option=staffdetails">Staff Details</a></li>
  <li style="float:right"><a href="AdminLogin.php">LogOut</a></li>
</ul>


<?php
@$opt = $_GET['option'];
if($opt != "")
{
	if($opt == "home")
	{
	include('home.php');
	}
	if($opt == "customerform")
	{
	include('customerform.php');
	}
	if($opt == "staffform")
	{
		include('staffform.php');
	}
	if($opt == "customerdetails")
	{
	include('customerdetails.php');
	}
	if($opt == "staffdetails")
	{
		include('staffdetails.php');
	}
	else if($opt == "LogOut")
	{
		include('AdminLogin.php');
	}
}
?>

<script>
$(document).ready(function(){
	$('.navclass a').filter(function(){
		return this.href == location.href.replace(/#.*/,"");
	}).addClass('active');
	
	$('.navclass a').siblings.removeClass('active');
	
})
</script>
</body>
</html>