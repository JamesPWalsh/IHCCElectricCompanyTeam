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
	<?php include "navbar.html" ?>
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
input.form.bg {
border: 2px solid rgba(255,0,0,0.2);
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
input.formtick {
	margin-left: 15px;
	margin-right: 5px;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}
div#buttons {
	text-align:center;
	font-size: 20px;
}
button#fullsubmit,button#exitsubmit {
	background-color: #4CAF50; /* Green */
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
}
		</style>
	<body>
<?php include_once('accountstuff.php');?>
<?php include_once('connect.php');?>
<?php
  if (isset($_SESSION['user_id'])) {

$user = $_SESSION['user_id'];
$accountStatus = checkAccount($conn,$user);
$accountinfo = '';
$info = getAccountInfo($conn,$user);
$js_info = array_map('utf8_encode', $info);
$pass = '';
if($accountStatus == 'customer') {
	$pass = getCustomerPass($conn,$user);
} else if($accountStatus == 'employee') {
	$pass = getEmployeePass($conn,$user);
} else if($accountStatus == 'admin') {
	$pass = getAdminPass($conn,$user);
}
$accountinfo = $info;
} else {
	echo "<h1 style='text-align:center;color:white;'>Please login to access this page</h2>";
	die();
}
?>
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
	<h1 style="color:black;text-shadow: 1px 1px 3px gray;margin-bottom: 50px;">Edit Account Information</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="form">
<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>First Name: </label>
</div>
  <div class="col-sm-3 col-md-7 col-lg-7"><input disabled class="form" type="text" name="firstname" value="<?php echo (isset($accountinfo))?$accountinfo['first_name']:'';?>" id="form-firstname"/><input type="radio" class="formtick" id="firstname" name="firstname">Edit</div>
</div>
<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Last Name: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input disabled class="form" type="text" name="lastname" value="<?php echo (isset($accountinfo))?$accountinfo['last_name']:'';?>" id="form-lastname" width="400px"/><input type="radio" class="formtick" id="lastname" name="lastname">Edit</div>
</div>
<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Email: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input disabled class="form" type="text" name="username" value="<?php echo (isset($accountinfo))?$accountinfo['email']:'';?>" id="form-email" width="400px"/><input type="radio" class="formtick" id="email" name="email">Edit</div>
</div>
<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Password: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input disabled type="password" name="password" value="**********" id="form-password" class="form"><input type="radio" class="formtick" id="password" name="pass">Edit</div>
</div>

<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Street Address: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input disabled class="form" type="text" name="address" value="<?php echo (isset($accountinfo))?$accountinfo['address']:'';?>" id="form-address"><input type="radio" class="formtick" id="address" name="address">Edit</div>
</div>

<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>City: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input disabled class="form" type="text" name="city" value="<?php echo (isset($accountinfo))?$accountinfo['city']:'';?>" id="form-city"><input type="radio" class="formtick" id="city" name="city">Edit</div>
</div>

<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>State: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input disabled class="form" type="text" name="state" value="<?php echo (isset($accountinfo))?$accountinfo['state']:'';?>" id="form-state"><input type="radio" class="formtick" id="state" name="state">Edit</div>
</div>
<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Zip Code: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input disabled class="form" type="text" name="zip" value="<?php echo (isset($accountinfo))?$accountinfo['zip']:'';?>" id="form-zip"><input type="radio" class="formtick" id="zip" name="zip">Edit</div>
</div>
<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Phone Number: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input disabled class="form" type="text" name="number" value="<?php echo (isset($accountinfo))?$accountinfo['phone_number']:'';?>" id="form-phonenumber"><input type="radio" class="formtick" id="phonenumber" name="phone">Edit</div>
</div>

<div class="row">
<div id="label" name="label" class="col-sm-5 col-md-5 col-lg-5 text-right">
<label>Alt. Phone Number: </label>
</div>
  <div class="col-sm-7 col-md-7 col-lg-7"><input disabled class="form" type="text" name="alt-number" value="<?php echo (isset($accountinfo))?$accountinfo['alt_phone_number']:'';?>" id="form-alt-number"><input type="radio" class="formtick" id="alt_phonenumber" name="alt_phone">Edit</div>
</div>

<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 text-center">
<button class="btn" type="button" id="button" name="submit">Submit</button>
</div>
</div>
<div id="teste">
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  </div>

</div>
</form>
</div>
		</div>
		</div>
  </div>
  <div class="col-sm-2"></div>
</div>

</div>
<script>
$(document).ready(function(){
var firstname_copy = $('#form-firstname').val();
var lastname_copy = $('#form-lastname').val();
var email_copy = $('#form-email').val();
var password_copy = $('#form-password').val();
var address_copy = $('#form-address').val();
var city_copy = $('#form-city').val();
var state_copy = $('#form-state').val();
var zip_copy = $('#form-zip').val();
var phonenumber_copy = $('#form-phonenumber').val();
var alt_phone_number_copy = $('#form-alt-number').val();
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
	$('button#button.btn').click(function () {
		$('div.modal-content').append("<p>Are you sure you would like to make these changes? </p>");
		$('div#myModal').show();
		firstname = '';
		lastname = '';
		password = '';
		address = '';
		city = '';
		state = '';
	  zip = 0;
		phonenumber = 0;
		alt_phone_number = 0;
		if($('input#firstname.formtick').prop("checked") == true) {
			firstname = $('#form-firstname').val();
			$('div.modal-content').append("<p>First name to: "+firstname+"</p>");
		} else {
			firstname = firstname_copy;
		}
		if($('input#lastname.formtick').prop("checked") == true) {
			lastname = $('#form-lastname').val();
			$('div.modal-content').append("<p>Last name to: "+lastname+"</p>");
		} else {
			lastname = lastname_copy;
		}
		if($('input#email.formtick').prop("checked") == true) {
			email = $('#form-email').val();
			$('div.modal-content').append("<p>Email to: "+email+"</p>");
		} else {
			email = email_copy;
		}
		if($('input#password.formtick').prop("checked") == true) {
			password = $('#form-password').val();
			$('div.modal-content').append("<p>Password to: "+password+"</p>");
		} else {
			password = password_copy;
		}
		if($('input#address.formtick').prop("checked") == true) {
			address = $('#form-address').val();
			$('div.modal-content').append("<p>Address to: "+address+"</p>");
		} else {
			address = address_copy;
		}
		if($('input#city.formtick').prop("checked") == true) {
			city = $('#form-city').val();
			$('div.modal-content').append("<p>City to: "+city+"</p>");
		} else {
			city = city_copy;
		}
		if($('input#state.formtick').prop("checked") == true) {
			state = $('#form-state').val();
			$('div.modal-content').append("<p>State to: "+state+"</p>");
		} else {
			state = state_copy;
		}
		if($('input#zip.formtick').prop("checked") == true) {
			zip = $('#form-zip').val();
			$('div.modal-content').append("<p>Zip to: "+zip+"</p>");
		} else {
			zip = zip_copy;
		}
		if($('input#phonenumber.formtick').prop("checked") == true) {
			phonenumber = $('#form-phonenumber').val();
			$('div.modal-content').append("<p>Phone number to: "+phonenumber+"</p>");
		} else {
			phonenumber = phonenumber_copy;
		}
		if($('input#alt_phonenumber.formtick').prop("checked") == true) {
			alt_phone_number = $('#form-alt-number').val();
			$('div.modal-content').append("<p>Alt phone number to: "+alt_phone_number+"</p>");
		} else {
			alt_phone_number = alt_phone_number_copy;
		}
		$('div.modal-content').append("<div id='buttons'><button id='fullsubmit' name='full' type='button'>Confirm</button><button type='button' name='exit' id='exitsubmit'>Exit</button></div>");
	});
	$("#form").on('click', 'button#exitsubmit', function () {
		$('div.modal-content').empty();
		$('div#myModal').hide();
	});
		$("#form").on('click', 'button#fullsubmit', function () {
		var js_data = '<?php echo str_replace("'", "\'", json_encode($info)); ?>';
		var pass = '<?php echo json_encode($pass);?>';
		var status = '<?php echo $accountStatus;?>';
		$('div#myModal').hide();
		$('div.modal-content').empty();
		$.ajax({
			type:"POST",
			cache:false,
			url:"checkaccountchange.php",
			data:{
				firstname:firstname,
				lastname:lastname,
				email:email,
				password:password,
				address:address,
				city:city,
				state:state,
				zip:zip,
				phonenumber:phonenumber,
				alt_phone_number:alt_phone_number,
				results:js_data,
				pass:pass,
				status:status
			},    // multiple data sent using ajax
			success: function (html) {
				console.log("success");
				$('div#teste').html(html);
			}
		});
		console.log("failure");
		return false;
	});
});
</script>
<script src="radiobuttons.js"></script>
	</body>

	<?php if (!$conn) {
	die("Unsuccessful Login");
	}
	mysqli_close($conn);
	?>
</html>
