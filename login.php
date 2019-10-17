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
<?php include 'loginchecks.php' ?>
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
button,h3 {
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
a#sign-out {
	color:white;
	padding-top: 115px;
}
		</style>
	<body>
	<div id="navbar">
	<div class="login-container">
				<a id='sign-out' href='login.php?signout=true' class='effect' style='display:none;'>Sign Out&nbsp;&#x2607;</a>
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
    <a href="About.php" id="droplink">About Us</a>
	<a href="FAQ.php" id="droplink">Faq Page</a>
   <a href="modelorder.php" id="droplink">Order Here</a>
    <a href="Contact.php" id="droplink">Contact Us</a>
  </div>
  </div>
	<ul class="effect" id="effect">
	<li><a href="About.php">About Us</a></li>
  <li><a href="FAQ.php">Faq Page</a></li>
  <li><a href="modelorder.php">Order Here</a></li>
   <li><a href="Contact.php">Contact Us</a></li>
</ul>
</div>

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
		<?php
		function testLogin($conn,$username,$password) {
			$changelogged = '</script><script language="javascript">$(document).ready(function(){$("#loginform").hide();$("#sign-out").show();});</script>';
			$successpart1 = "<h2 style='margin-bottom: 100px;'>Thank you for logging in ";
			$successpart2 = "</h2><p style='margin-bottom: 250px;'>Please wait until we release more features that make being logged in actually useful.</p>
			<img src='Images/logo.png' style='display: block;margin-left: auto;margin-right: auto;'/>
			<p>We here at P2T2 are very sorry for the inconveinance</p>";
	    $sql = "SELECT a.email,p.password,a.first_name,a.last_name,a.user_id from account a, cust_account_info p where a.user_id = p.user_id
			and a.email = '$username' and p.password = '$password'";
	    $result = $conn->query($sql);
	    if ($result->num_rows == 1) while ($row = $result->fetch_assoc()) {
	        $_SESSION['username'] = $username;
					$_SESSION['user_id'] = $row['user_id'];
					return $successpart1 . $row["first_name"] . " " . $row["last_name"] . $successpart2 . $changelogged;
	    } else {
	        $sql = "SELECT a.email,p.password,a.first_name,a.last_name,a.user_id from account a, admin p where a.user_id = p.user_id
					and a.email = '$username' and p.password = '$password'";
	        $result = $conn->query($sql);
	        if ($result->num_rows == 1) while ($row = $result->fetch_assoc()) {
	            $_SESSION['username'] = $username;
							$_SESSION['user_id'] = $row['user_id'];
	            return $successpart1 . $row["first_name"] . " " . $row["last_name"] . $successpart2 . $changelogged;
	        } else {
	            $sql = "SELECT a.email,p.password,a.first_name,a.last_name,a.user_id from account a, employee p where a.user_id = p.user_id
							and a.email = '$username' and p.password = '$password'";
	            $result = $conn->query($sql);
	            if ($result->num_rows == 1) while ($row = $result->fetch_assoc()) {
	                $_SESSION['username'] = $username;
									$_SESSION['user_id'] = $row['user_id'];
	                return $successpart1 . $row["first_name"] . " " . $row["last_name"] . $successpart2 . $changelogged;
	            }
	            return "";
	        }
	    }
		}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $ser = "localhost";
    $user = "root";
    $pass = "";
    $db = "electric-database";
    $conn = mysqli_connect($ser, $user, $pass, $db) or die("connection failed");
    if (!$conn) {
        die("Unsuccessful Login");
    }
		$loginstring = testLogin($conn,$username,$password);
		echo $loginstring;
		mysqli_close($conn);
}
?>
		<?php if (isset($_GET['signout'])) {
    $logout = "<h3 style='margin-bottom: 300px;margin-top:55px;'>You have successfully logged out.</h3>
				<img src='Images/logo.png' style='display: block;margin-left: auto;margin-right: auto;'/>";
    echo $logout;
}
?>
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
</html>
