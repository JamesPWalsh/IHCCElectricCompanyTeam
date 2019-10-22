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
center#third {
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
	<a class="active" href="Index.php" id="droplink">Homepage</a>
<a class="active" href="About.php" id="droplink">About Us</a>
 <a href="modelorder.php" id="droplink">Order Here</a>
  <a href="Contact.php" id="droplink">Contact Us</a>
  <a href="accountcreation.php" id="droplink">Sign Up</a>
	<a href="Modelinformation.php" id="droplink">Our Models</a>
</div>
</div>
<ul class="effect" id="effect" style="display:none">
	<li><a class="active" href="Index.php" id="droplink">Homepage</a></li>
	<li><a class="active" href="About.php">About Us</a></li>
<li><a href="modelorder.php">Order Here</a></li>
 <li><a href="Contact.php">Contact Us</a></li>
 <li><a href="accountcreation.php" id="droplink">Sign Up</a></li>
  <li><a href="Modelinformation.php" id="droplink">Our Models</a></li>
</ul>
</div>

<div id="content">

<center>
Q: What battery type is used on the bikes?</br>
A: Lithium Ion batteries.</br>
</br>
</br>
Q: What is the most common part to fail?</br>
A: Typically the battery, but only if the bike is left out in the elements</br>
</br>
</br>
Q: If the bike was to fail, would you replace it?</br>
A: no, but you will get a 60% discount on your next bike as well as a lifetime part replacement garenty.</br>
</center>
<center id="second">
</br>
</br>
Q: What would happen if a bike is defective after first use?</br>
A: Full replacement, as well as a lifetime refundability on the bike.</br>
</br>
</br>
Q: Why does my bike make a clanking noise?</br>
A: Most likely a gear is busted, have it checked up and replaced.</br>
</center>
</center>
<center id="third">
</br>
</br>
Q: Why did my bike catch fire?</br>
A: The lithium ion battery was most likely breached.</br>
</br>
</br>
Q: How do i fuel this thing??</br>
A: Plug the bike charging cable into an apropriate outlet, you can buy a converter off of this link <a href= "https://www.youtube.com/watch?v=VxMM4g2Sk8U."> here</a></br>
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
