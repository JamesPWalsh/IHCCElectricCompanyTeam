<!DOCTYPE HTML>
<html lang="en">
<head>
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
body {
 background: url("images/blackbike.jpg") no-repeat center center fixed;
 background-color: #cccccc;
 background-size:cover;
}
div#background-box {
background-color: rgba(0,0,0,0.5);
padding-bottom: 15px;
text-shadow: 2px 2px 4px #000000;
}
</style>

<!--Administration.html
	Author: Robert Hannah
	09/10/2019 -->
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="navbar.css" />
  <div id="navbar">
	<div class="login-container">
				<a id='sign-out' href='login.php?signout=true' style='display:none;'>Sign Out&nbsp;</a>
			<form action="login.php" method="POST" id="loginform" style="display:none;">
	      <input class="login" type="text" placeholder="Username" name="username">
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
 <a href="modelorder.html" id="droplink">Order Here</a>
  <a href="Contact.php" id="droplink">Contact Us</a>
  <a href="accountcreation.php" id="signup">Sign Up</a>
  <a href="Modelinformation.php" id="droplink">Our Models</a>
</div>
</div>
<ul class="effect" id="effect" style="display:none">
<li><a href="FAQ.php">Faq Page</a></li>
<li><a href="modelorder.php">Order Here</a></li>
 <li><a href="Contact.php">Contact Us</a></li>
 <li><a href="accountcreation.php" id="signup">Sign Up</a></li>
 <li><a href="Modelinformation.php" id="droplink">Our Models</a></li>
</ul>
</div>
</head>
<body>
<br />
<br />
<!--<fieldset>-->
<div id="background-box">
<font color="white">
<center><h1>About Us</h1></center>
<center>
Electric motercicles<br />
Our company builds elecrically powered motercycles for the public to use.</br>
We pride ourselves on quality over quantity, builing each part manualy rather then automatically.</br>
We have helped in the advancment of ion battery technologies, funding and reaserching how to make them more effecient and cheaper to make.</br>
Our goal isnt to just provide the world with clean running motercycles, but to alos enhance the batteries that will power our future.</br>
</br>
</br>
{server.sayhere("lies.txt")}
</font>

</center>
</div>
<!--</fieldset>-->
<footer>

<div id="footercolmn">

</div>
</footer>
<script>
$('#effect').show();
$('.login-container').show();
$('.topnav').hide();
function myFunction() {
var x = document.getElementById("myLinks");
if (x.style.display === "block") {
x.style.display = "none";
$('.login-container').show();

} else {
x.style.display = "block";
x.style.textAlign = "center";

}
}
function myFunction2(x) {
if (x.matches) { // If media query matches
 $('#effect').hide();
$('.topnav').show();
} else {
$('.login-container').show();
$('#effect').show();
$('.topnav').hide();
}
}

var x = window.matchMedia("(max-width: 900px)");
myFunction(x); // Call listener function at run time;
x.addListener(myFunction2); // Attach listener function on state changes
</script>
</body>
</html>
