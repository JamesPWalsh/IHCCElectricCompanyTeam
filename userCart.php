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

		<script>
		function myFunction()
		{
			window.confirm("Add Chocie Of Deposit Here(if possible)");
		}
		</script>

		<style>
		div#order {
		text-align: center;
		}
		div#totalcont {
		text-align: center !important;
		}
		div#total {
		float: none;
		display: inline-block;
		border: 1px black solid;
		padding: 25px;
		}
		div#clean {
		display: inline-block;
		}
		ul {
		list-style:none;
		}
		li {
		text-align: left;
		}
		h2 {
		text-align: center;
		}
		label {
		font-weight: bold;
		}
		button#finish {
		margin-top: 10px;
		}
		p {
		text-align: center;
		}
		center {
			padding-top: 38px;
			background-color: rgb(0,0,0,.2);
			color:white;
			margin-left: auto;
			margin-right: auto;
		}
		</style>
		<div id="navbar">
		<div class="login-container">
		  <form action="/action_page.php">
		    <input class="login" type="text" placeholder="Username" name="username">
		    <input class="login" type="text" placeholder="Password" name="password">
		    <button type="submit">Login</button>
		  </form>
		</div>
		<div class="topnav" style="display:none">
		  <a href="javascript:void(0);" class="icon" id="icon" onclick="myFunction()" style="">
		  <div class="clearfix"></div><i class="fa fa-bars fa-2x"></i>
		  </a>

		<div id="myLinks">
		<a class="active" href="About.html" id="droplink">About Us</a>
		 <a href="modelorder.html" id="droplink">Order Here</a>
		  <a href="Contact.html" id="droplink">Contact Us</a>
		  <a href="accountcreation.html" id="droplink">Sign Up</a>
		</div>
		</div>
		<ul class="effect" id="effect" style="display:none">
			<li><a class="active" href="About.html">About Us</a></li>
		<li><a href="modelorder.html">Order Here</a></li>
		 <li><a href="Contact.html">Contact Us</a></li>
		 <li><a href="accountcreation.html" id="droplink">Sign Up</a></li>
		</ul>
		</div>
	</head>
	<body>
		<?php
		include('connect.php');
		include('accountstuff.php');
		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
		   $id = $_POST["id"];
			 $seat = getCategory($id,'seat');
			 $model = getCategory($id,'model');
			 $graphic = getCategory($id,'graphic');
			 $wheel = getCategory($id,'wheel');
			 $color = getCategory($id,'color');
			 if(!$graphic)$graphic = 'No graphics';
		 }
		 function getCategory($id,$var) {
			 include('connect.php');
			 if($var == 'seat') {
				 $sql = "SELECT i.description FROM inventory i, order_items oi WHERE oi.item_id = i.item_id AND oi.order_id = $id and category = 'Seat'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
							return $row["description"];
					}
				}
			} elseif ($var == 'model') {
				$sql = "SELECT i.description FROM inventory i, order_items oi WHERE oi.item_id = i.item_id AND oi.order_id = $id and category = 'Model'";
			 $result = $conn->query($sql);
			 if ($result->num_rows > 0) {
				 while($row = $result->fetch_assoc()) {
						 return $row["description"];
				 }
			 }
		 } elseif ($var == 'graphic') {
			 $sql = "SELECT i.description FROM inventory i, order_items oi WHERE oi.item_id = i.item_id AND oi.order_id = $id and category = 'Graphic'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
						return $row["description"];
				}
			}
		} elseif ($var == 'wheel') {
			$sql = "SELECT i.description FROM inventory i, order_items oi WHERE oi.item_id = i.item_id AND oi.order_id = $id and category = 'Wheel'";
		 $result = $conn->query($sql);
		 if ($result->num_rows > 0) {
			 while($row = $result->fetch_assoc()) {
					 return $row["description"];
			 }
		 }
	 } elseif ($var == 'color') {
		 $sql = "SELECT i.description FROM inventory i, order_items oi WHERE oi.item_id = i.item_id AND oi.order_id = $id and category = 'Paint Color'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
					return $row["description"];
			}
		}
	 }
		 }
			 ?>
<div id="Container">

			<div id="order">
	<h1>Cart</h1>
	<div id="clean">
	<ul>
		<li><label>Model: </label><input disabled class="form" type="text" name="username" value="<?php echo (isset($model))?$model:'';?>" id="form-email" width="400px"/></li>

<li><label>Color: </label>
<input disabled class="form" type="text" name="username" value="<?php echo (isset($color))?$color:'';?>" id="form-email" width="400px"/>
</li>

<li><label>     Performance Graphics: </label>
	<input disabled class="form" type="text" name="username" value="<?php echo (isset($graphic))?$graphic:'';?>" id="form-email" width="400px"/>
</li>

<li><label>Wheels: </label>
<input disabled class="form" type="text" name="username" value="<?php echo (isset($wheel))?$wheel:'';?>" id="form-email" width="400px"/>
</li>

<li><label>Seat Type: </label><input disabled class="form" type="text" name="username" value="<?php echo (isset($seat))?$seat:'';?>" id="form-email" width="400px"/></li>

</ul>

	<form action="checkout.html">
		<input type="submit" value="Place Order" onclick="myFunction()"/>
	</form>

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
