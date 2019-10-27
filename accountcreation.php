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
	<style>
	body {
	margin: 0;
	background: url("images/bg2.jpg") no-repeat center center fixed;
	filter: grayscale(50%);
	background-color: #cccccc;
	background-size: cover;
}

h1,
p,
h2,
button {
	text-align: center;
}
input
input[type=text].form,
select {
	padding: 12px 10px;
	margin: auto 0;
	margin-bottom: 15px;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
}

button {
	border-radius: 4px;
}

label,
input {
	margin-top: 6px;
}

#wrapper-wrapper {
	background-color: white;
	border: 1px solid black;
	border-radius: 50px;
	padding-right: 15px;
	padding-bottom: 15px;
	width: 100%;
	height: 100%;
}
#another-wrapper {
position: relative;
}
#wrapper {
	margin: auto;
		margin-top: 10px;
	width: 80%;
}

form {}

#button {
	margin-top: 15px;
	background-color: #f1f1f1;
	color: black;
	font-size: 16px;
	padding: 16px 30px;
	border: none;
	cursor: pointer;
	border: 1.5px solid black;
	border-radius: 5px;
	text-align: center;
}

#button:hover {
	background-color: #E0E0E0;
}

div.center {
	margin: auto;
	width: 50%;
}
#content {

}
h1.thanks {
	margin-top: 50px;
margin-bottom: 50px;
}
input {

}
img#logo {
display: block;
margin: 0 auto;
}
		</style>
	<body>
	<?php include "navbar.html" ?>

<div class="container-fluid">
  <div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8"></div>
<div id="wrapper">
  <div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 text-center">
	<div id="content">

</div>
</div>
</div>
<div id="wrapper-wrapper">
	<div id="another-wrapper">
	<h1 style="color:black;text-shadow: 1px 1px 3px gray;">Account Registration</h1>
	<p style="color:black">Quick and easy sign up</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>First Name: </label>
</div>
  <div class="col-sm-3 col-md-7 col-lg-7"><input class="form" type="text" name="firstname" id="form-firstname"/></div>
</div>
<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Last Name: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input class="form" type="text" name="lastname" id="form-lastname" width="400px"/></div>
</div>
<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Email: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input class="form" type="text" name="username" id="form-username" width="400px"/></div>
</div>
<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Password: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input type="password" name="password" id="form-password"></div>
</div>

<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Street Address: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input class="form" type="text" name="address" id="form-address"></div>
</div>

<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>City: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input class="form" type="text" name="city" id="form-city"></div>
</div>

<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>State: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input class="form" type="text" name="state" id="form-state"></div>
</div>
<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Zip Code: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input class="form" type="text" name="zip" id="form-zip"></div>
</div>
<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Phone Number: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input class="form" type="text" name="number" id="form-number"></div>
</div>

<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Alt. Phone Number: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input class="form" type="text" name="alt-number" id="form-alt-number"></div>
</div>

<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 text-center">
<input class="btn" type="submit" id="button" name="submit"></input>
</div>
</div>
</form>
</div>
<div id="thank-you" style="display: none;">
<h1 class="thanks">Thank you for Signing Up</h1>
<h2>Welcome to P2T2!</h2>
<p style="margin-top: 100px; padding: 0 55px 0 55px; font-size: 16px;">Thank you for taking the time to complete the registration process. You have taken the first step toward quality electric motorcycle manufacturing and business.</p>
<img id="logo" src="Images/logo.png">
</div>
		</div>
		</div>
  </div>
  <div class="col-sm-2"></div>
</div>

</div>
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

function myFunction3(y) {
	var x = document.getElementsByName("label");
var i;
for (i = 0; i < x.length; i++) {
	if (y.matches) { // If media query matches
x[i].classList.remove("text-right");
  } else {
		x[i].classList.add("text-right");
  }
}
}

var y = window.matchMedia("(max-width: 800px)");
myFunction3(y); // Call listener function at run time
y.addListener(myFunction3); // Attach listener function on state changes
$(document).ready(function(){
});
</script>
	</body>
	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	?>
	<script type="text/javascript">
	$('#another-wrapper').hide();
	$('#thank-you').show();
	</script>

	<?php
		$firstname = trim($_POST["firstname"]);
		$lastname = $_POST["lastname"];
		$password = $_POST["password"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		$state = $_POST["state"];
		$phone_num = $_POST["number"];
		$alt_phone_num = $_POST["alt-number"] or '';
		$zip = $_POST["zip"];
		$username = trim($_POST["username"]);
		$username = strtolower($username);
		?>
		<?php
	$ser="localhost";
	$user="root";
	$pass="";
	$db="electric-database";

	$conn = mysqli_connect($ser,$user,$pass,$db) or die("connection failed");
	if (!$conn) {
	die("Unsuccessful Login");
	} else {
	$sql = "INSERT INTO account (first_name,last_name,address,city,state,zip,phone_number,alt_phone_number,email)
	VALUES ('$firstname','$lastname','$address','$city','$state',$zip,$phone_num,$alt_phone_num,'$username')";
	}
	$last_id = '';
	if (mysqli_query($conn, $sql)) {
			$last_id = $conn->insert_id;
	} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
	}
	if (!$conn) {
	die("Unsuccessful Login");
	} else {
		$sql = "INSERT INTO cust_account_info (user_id,password)
		VALUES ($last_id,'$password')";
	}
	if (mysqli_query($conn, $sql)) {

	} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
	}
	mysqli_close($conn);
	return "Success";
	}
	?>
</html>
