<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Creating a Responsive Web Design</title>
		<link rel="stylesheet" type="text/css" media="screen" href="navbar.css">
	  <!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <!-- jQuery library -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <!-- Latest compiled JavaScript -->
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <?php include 'loginchecks.php'?>
	</head>
	<body>
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
<a href="datamaintainence.html">Data Maintainence</a>
</div>
</div>
<ul class="effect" id="effect" style="display:none">
  <li><a class="Active" href="datamaintainence.html">Data Maintainence</a></li>
</ul>
</div>
	<h1>Admin Control Panel</h1>
	<label>Search Admin/Employee ID: </label><input type="text" name="username" id="form-name"><br>
	<button type="submit">Search</button><br>
	<label>Results: </label><br><br>
	<p>Stuff below shows up if id comes back with results whether it's admin or an employee id. Leave blank for no change</p>
		<label style="margin-right: 78px;">Change Admin ID: </label><input type="text" name="username" id="form-name"><br>
		<label style="margin-right: 24px;">Change Admin Password: </label><input type="text" name="username" id="form-name"><br>
		<label style="margin-right: 54px;">Change Employee ID: </label><input type="text" name="username" id="form-name"><br>
		<label>Change Employee Password: </label><input type="text" name="username" id="form-name"><br>
		<button type="submit">Submit</button>
		<!--database call to validate then insert record into table then generate customer id -->
		<?php
$ser="localhost";
$user="root";
$pass="";
$db="electric-database";

$conn = mysqli_connect($ser,$user,$pass,$db) or die("connection failed");
if (!$conn) {
    die("Connection failed: ");
}
?>
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
