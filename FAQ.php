<!DOCTYPE HTML>
<html lang="en">
<head>
<!--Contact.html
	Author: Robert Hannah
	09/16/2019 -->
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" media="screen" href="navbar.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php include 'loginchecks.php'?>
<style>
body {background: url("images/city100.jpg") no-repeat center center fixed;
margin:0;
}
center {

padding-top: 20px;
padding-left: 300px;
background-color: rgb(0,0,0,.2);
color:white;
margin-left: auto;
margin-right: auto;
padding-bottom: 45px;
font-size: 25px;
text-shadow: 2px 2px 4px #000000;
}
center#second {
	position: relative;

}
</style>

</head>

<body>
<div id="Container">
<div id="navbar">
	<div class="login-container">
				<a id='sign-out' href='login.php?signout=true' style='display:none;'>Sign Out&nbsp;</a>
			<form action="login.php" method="POST" id="loginform" style="display:none;">
	      <input class="login" type="text" placeholder="Email" name="username">
	      <input class="login" type="password" placeholder="Password" name="password">
	      <button type="submit" id="login">Login</button>
	    </form>
</div>
<div class="topnav" style="display:none">
  <a href="javascript:void(0);" class="icon" id="icon" onclick="myFunction()" style="">
  <div class="clearfix"></div><i class="fa fa-bars fa-2x"></i>
  </a>

<div id="myLinks">
	<a href="FAQ.php" id="droplink">Faq Page</a>
	<a href="Contact.php" id="droplink">Contact Us</a>
	<a href="About.php" id="droplink">About Us</a>
	<a href="modelorder.php" id="droplink">Order Here</a>
	<a href="Modelinformation.php" id="droplink">Order Here</a>
	<a href="Index.php" id="droplink">Home</a>
</div>
</div>
<ul class="effect" id="effect" style="display:none">
	<li><a href="FAQ.php">Faq Page</a></li>
	<li><a href="Contact.php">Contact Us</a></li>
	<li><a href="About.php">About Us</a></li>
	<li><a href="modelorder.php">Order Here</a></li>
	<li><a href="Modelinformation.php">Order Here</a></li>
	<li><a href="Index.php">Home</a></li>
</ul>
</div>

<div id="content">

<center>
Q: What Dinosaur is the best?</br>
A: T-Rex of course.</br>
</br>
</br>
Q: What is the best bird?</br>
A: all of them!</br>
</br>
</br>
Q: Is this the FAQ section?</br>
A: no.</br>
</center>
<center id="second">
</br>
Q: What is best puppo</br>
A: Every Doggo!</br>
</br>
Q: whats a dogs favorite pizza?</br>
A: PUPeroni.</br>
</center>


</div> <!-- End Content-->
</div> <!-- End Container-->
<footer>
<div id="footercolmn">

</div>
</footer>
	<script src="resize.js"></script>
</body>
</html>
