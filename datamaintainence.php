<!DOCTYPE HTML>
<html lang="en">
<head>
<!--Administration.html
	Author: Robert Hannah
	09/26/2019 -->
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
	body {
		background-color: #9a9b9c;
	}
	center#center {
		width: 70%;
		margin-top: 5px;
		border-radius: 10px;
		border: 2px black inset;
		background-color: #f2f2f2;
		padding: 20px;
		margin: 0 auto;
	}
	</style>
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
	<a href="datamaintainence.php">Data Maintainence</a>
	</div>
	</div>
	<ul class="effect" id="effect" style="display:none">
			<li><a class="active" href="Index.php" id="droplink">Homepage</a></li>
	  <li><a class="Active" href="datamaintainence.php">Data Maintainence</a></li>
	</ul>
	</div>
</head>
<body>

<center id="center">
<fieldset>
<label>Database Option </label><br />
<select id = "opt">
  <option value="Add">Add</option>
  <option value="Delete">Delete</option>
  <option value="Change">Change</option>
</select>
<br />
<br />
<label>Order Id: </label><br>
	<input type="text" name="Cost" id="Cost" value="8999" size="30" />
<br />
<br />
<div id="add" style='display:none;'>
	<label>Other order stuff: </label><br>
		<input type="text" name="Cost" id="Cost" value="" size="30" />
</div>
<div id="change" style='display:none;'>
	<label>Other order stuff: </label><br>
		<input type="text" name="Cost" id="Cost" value="" size="30" />
</div>
<button id="ordersubmit">Submit</button>
</center>
<div id="myDIV">
<script>
function Display(){
var seat = document.getElementById("Seats").value;
var cost = document.getElementById("Cost").value;
var graphics = document.getElementById("Graphics").value;
var wheels = document.getElementById("Wheels").value;
var model = document.getElementById("model").value;
var options = document.getElementById("opt").value;
var color = document.getElementById("Color").value;
document.write("<link rel="+"stylesheet "+"type="+"text/css"+" media="+"screen"+" href="+"navbar.css"+">"
+"<style> body { background-color: #9a9b9c; } </style>"
+"<center><fieldset>"
+"<ul id="+"navbar"+">"
+"<li><a class="+"active"+"href="+"#home"+">About Us</a></li>"
+"<li><a href="+"#news"+   ">Contact Us</a></li>"
+"<li><a href="+"#contact"+">Model Information</a></li>"
+"<li><a href="+"#about"+  ">Display Options</a></li>"
+"<li><a href="+"#about"+  ">Faq Page</a></li>"
+"</ul>"
+options
+" <br /> "
+" <br /> "
+ model
+" <br /> "
+" <br /> "
+ "<p> " + color + "</p>");
console.log("Color: " + color);
if(color == "Standard: Black & White free") {
	console.log("made it in");
document.write("<img src= images/BlackWhite.png width= 250 />");
} else {
console.log("Color: "+ color);
document.write("<img src= images/RedYellow.png width= 250 />");
}
document.write(
" <br /> "
+" <br /> "
+ wheels
+" <br /> "
+" <br /> "
+ graphics
+" <br /> "
+" <br /> "
+ seat
+" <br /> "
+" <br /> $"
+ cost
+"</center></fieldset>");
}
$(document).ready(function() {
$('button#ordersubmit').click(function () {
		$('div#add').show();
	});
	  });
</script>
</div>

</fieldset>

<footer>

<div id="footercolmn">

</div>
</footer>


<script src="resize.js"></script>
</body>
</html>
