<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Checkout</title>
		<link rel="stylesheet" type="text/css" media="screen" href="navbar.css">
	  <!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <!-- jQuery library -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <!-- Latest compiled JavaScript -->
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <?php include 'loginchecks.php'?>
		<script src="jquery-3.4.1.min.js"></script>
		<script>
		function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}
		$( document ).ready(function() {
		$('#orderdisplay').hide();
		var total = localStorage.getItem("total");
		total = numberWithCommas(total);
		$('p#total').append(total);
		$("#ordersubmit").click(function(){
		$('#orderdisplay').show();
		});
		});
		</script>
		<script>
		function myFunction() {
		}
		</script>

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
	  <a href="Contact.php" id="droplink">Contact Us</a>
	  <a href="accountcreation.php" id="signup">Sign Up</a>
	</div>
	</div>
	<ul class="effect" id="effect" style="display:none">
	<li><a href="FAQ.php">Faq Page</a></li>
	 <li><a href="Contact.php">Contact Us</a></li>
	 <li><a href="accountcreation.php" id="signup">Sign Up</a></li>
	</ul>
	</div>
<style>
body {font-family: Arial, Helvetica, sans-serif;
 background: url("images/ironrun.jpg") no-repeat center center fixed;
}
* {box-sizing: border-box;}

input[type=text].orderinput, input#start,select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
a#back {
	position: relative;
	top: 40px;
}
input[type=submit].orderinput {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit].orderinput:hover {
  background-color: #45a049;
}

.container {
	width: 40%;
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 20px;
}
div#paypal:hover {
filter:drop-shadow(8px 8px 10px gray);
}
</style>

	</head>
	<body>

<div id="content">

<div class="container" style="padding-bottom: 70px;">

<center>
	<h1>Checkout</h1>
	<p id="total" style="font-size: 17px;">Your total is: $</p>
</center>
<center>
<div id="loggedout" style="display:none;">
    <label for="fname">First Name</label>
    <input type="text" class="orderinput"  id="fname" name="firstname">

    <label for="lname">Address</label>
    <input type="text" class="orderinput"  id="lname" name="lastname">

    <label for="fname">City</label>
    <input type="text" class="orderinput"  id="fname" name="firstname">

    <label for="fname">State</label>
    <input type="text" class="orderinput"  id="fname" name="firstname">

	<label for="fname">ZIP</label>
    <input type="text" class="orderinput"  id="fname" name="firstname">

	<label for="fname">Country/Region</label>
    <input type="text" class="orderinput"  id="fname" name="firstname">
</div>
    <label for="method">Payment Method</label>
    <select id="paymentmethod" name="paymentmethod">
      <option value="email">Paypal</option>
      <option value="text">Credit</option>
      <option value="call">Debit</option>
    </select>
		<div id="paypal" style="display:none; margin-top: 50px;">
		<a href="#"><img src="Images/Paypal.png" /></a><br>
	</div>
	<div id="notpaypal" style="display:none;">
	<label for="fname">Card Number</label>
    <input type="text" class="orderinput"  id="fname" name="firstname">
		<label for="fname">Expiration Date: </label><br>
		<input type="month" id="start" name="start"
		 min="2019-9" ><br>
			<label for="fname">Security Code: </label><input type="text" class="orderinput"  id="fname" name="firstname">
	<button id="successsubmit" >Place Order</button>
	<div id="success" style="display:none">
<p style="margin-top: 50px;font-size: 17px;">Your order has been successfully been submitted. Shortly you will receive an email with your tracking code and more information regarding your purchase.</p>
	</div>
	</div>
	<div id="paypalsuccess" style="display:none">
<p style="margin-top: 50px;font-size: 17px;">Sorry you currently cannot use paypal to pay. Paypal is currently suing us 25 million dollars for theft. We apologize.</p>
	</div>
	<script>
		var paypal = $("select#paymentmethod option:selected").text();
	function Paypal() {
		if(paypal == 'Paypal') {
			$('div#paypalsuccess').hide();
			$('div#success').hide();
			$("div#notpaypal").hide();
		  $("div#paypal").show();
		} else {
			$('div#paypalsuccess').hide();
			$('div#success').hide();
			$("div#paypal").hide();
			$("div#notpaypal").show();
		}
	}
	$( document ).ready(function() {
		Paypal();
			$("select#paymentmethod").change(function(){
				paypal = $("select#paymentmethod option:selected").text();
		Paypal();
		  });
			$("#successsubmit").click(function(){
			$('div#success').show();
			});
			$("div#paypal").on('click', function(e) {
				console.log("clicked");
				e.preventDefault();
			$('div#paypalsuccess').show();
			});
	});

	</script>
	<a id="back" style="color:black;" href="modelorder.php">Back to ordering options&#x2607;</a>
</div>

</center>
<?php
if (!isset($_SESSION))session_start();
  if (isset($_GET['signout'])) {
    unset ($_SESSION["username"]);
  }

  if (isset($_SESSION['username'])) {
		echo '<script language="javascript">';
		echo '$(document).ready(function(){';
		echo '$("div#loggedout").hide();';
		echo '	});';
		echo '</script>';

  } else {
		echo '<script language="javascript">';
		echo '$(document).ready(function(){';
		echo '$("div#loggedout").show();';
		echo '	});';
		echo '</script>';
	}
?>
<script src="resize.js"></script>
	</body>
</html>
