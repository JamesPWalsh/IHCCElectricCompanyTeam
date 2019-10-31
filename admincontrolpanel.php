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
		<style>
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
			<li><a class="Active" href="adminvieworders.php">View Orders</a></li>
		</ul>
		</div>
	</head>
	<body>
<div id="searchid">
	<h1>Search User by Name</h1>
	<label style="margin-right: 78px;">Search ID by Name: </label><input type="text" name="username" id="form-name"><br>
	<button id="idsearch">Search</button><br>
	<label id="results">Results: </label><div id="idresults"></div><br><br>
</div>
	<h1>Change Admin Password</h1>
	<label>Search Admin/Employee ID: </label><input type="text" name="id" id="form-id"><br>
	<button id="search">Search</button><br>
	<label id="results">Results: </label><div id="results"></div><br><br>
<div id="adminchange" style="display:none;">
		<label style="margin-right: 24px;">Change Admin Password: </label><input type="text" name="username" id="form-admin-pass"><br>
		<button id="adminchanges">Submit</button>
</div>
<div id="employeechange" style="display:none;">
		<label>Change Employee Password: </label><input type="text" name="username" id="form-emp-pass"><br>
		<button id="employeechanges">Submit</button>
</div>
		<div id="success">

		</div>
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
$(document).ready(function() {
    $('button#search').click(function () {
      var id = $('#form-id').val();
			console.log("ID: " + id);
      $.ajax({
        type:"GET",
        cache:false,
        url:"adminoremployeesearch.php",
        data:{id:id},    // multiple data sent using ajax
        success: function (html) {
					$('div#results').html((html));
					var result = html.charAt(0);
										if(result == 'A'){
											$('div#employeechange').hide();
										$('div#adminchange').show();
									}else if (result == 'E'){
										$('div#adminchange').hide();
											$('div#employeechange').show();
					}
        }
      });
			$('div#employeechange').hide();
			$('div#adminchange').hide();
      return false;
    });
		$('button#idsearch').click(function () {
			var name = $('#form-name').val();
			console.log("Name: " + name);
			$.ajax({
				type:"GET",
				cache:false,
				url:"idsearch.php",
				data:{name:name},    // multiple data sent using ajax
				success: function (html) {
					$('div#idresults').html((html));
					var result = html.charAt(0);
							/*			if(result == 'A'){
											$('div#employeechange').hide();
										$('div#adminchange').show();
									}else if (result == 'E'){
										$('div#adminchange').hide();
											$('div#employeechange').show();
					}*/
				}
			});
			$('div#employeechange').hide();
			$('div#adminchange').hide();
			return false;
		});
		$('button#adminchanges').click(function () {
			var id = $('#form-id').val();
			var adminid = $('#form-admin-id').val();
			var adminpass = $('#form-admin-pass').val();
			console.log("ID: " + id);
			$.ajax({
				type:"GET",
				cache:false,
				url:"adminchange.php",
				data:{id:id,adminid:adminid,adminpass:adminpass},    // multiple data sent using ajax
				success: function (html) {
					$('div#success').append(html);
				}
			});
			console.log("failure");
			return false;
		});
		$('button#employeechanges').click(function () {
			var id = $('#form-id').val();
			var empid = $('#form-emp-id').val();
			var emppass = $('#form-emp-pass').val();
			console.log("ID: " + id);
			$.ajax({
				type:"GET",
				cache:false,
				url:"employeechange.php",
				data:{id:id,empid:empid,emppass:emppass},    // multiple data sent using ajax
				success: function (html) {
					$('div#success').append(html);
				}
			});
			console.log("failure");
			return false;
		});
  });

</script>

	</body>
</html>
