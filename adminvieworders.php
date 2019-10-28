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
	  <?php include_once('loginchecks.php');
		include_once('connect.php');?>

		<style>
		body {
			background-color:gray;
		}
		div#main {
			margin: 0 auto;
			width: 60%;
			border: 1px solid black;
			border-radius: 15px;
			background-color: white;
		}
		ul {
			list-style-type:none;
			text-align: center;
		}
		li#orderelement {
		}
		ul li#orderelement a {
 			display:block;
			text-decoration:none;
			color:black;
		}
		ul li#orderelement a:hover {
 			background-color:lightblue;
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
		button#exitsubmit {
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
			<li><a class="Active" href="admincontrolpanel.php">Control Panel</a></li>
		</ul>
		</div>
	</head>
	<body>
		<div id="myModal" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
		  </div>

		</div>
<div id="main">
<h1 style="text-align:center;">View All Orders</h1>
<?php
$sql = "SELECT o.order_id,o.user_id,
(SELECT ot.user_id FROM orders_track ot, account a WHERE a.user_id = ot.user_id and ot.order_id = o.order_id) AS custid
from orders o, account a
where o.user_id = a.user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	echo "<ul>";
	while($row = $result->fetch_assoc()) {
		$id = $row["order_id"];
		echo "<li id='orderelement'><a href='#' value='$id' id='singleorder'>"."Order ID: ".$row["order_id"] ." Customer ID: ".$row["user_id"]." Employee ID: ".$row["custid"]."</a></li>";
	}
	echo "</ul>";
} else {
return false;
}


?>
</div>
		<!--database call to validate then insert record into table then generate customer id -->
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
			$('body').on('click', 'button#exitsubmit', function () {
			console.log("MADE");
		$('div.modal-content').empty();
		$('div#myModal').hide();
	});
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
		$('a#singleorder').click(function () {
			var stuff = $(this).attr('value');
			$.ajax({
				type:"POST",
				cache:false,
				url:"vieworder.php",
				data:{id:stuff},    // multiple data sent using ajax
				success: function (html) {
					$('div.modal-content').append("<h3 style='text-align:center;'>Order Number: " + stuff + " </h3>");
					$('div#myModal').show();
					$('div.modal-content').append(html);
				}
			});
			console.log("failure");
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
