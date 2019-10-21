<!DOCTYPE HTML>
<html lang="en">
<head>
<!--Contact.html
	Author: Robert Hannah
	09/16/2019 -->
	<title>User Cart</title>
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
		div#selection {
			background-color: #ffffff;
			margin-left: auto;
			margin-right: auto;
			width: 40%;
			text-align: center;
			box-shadow: 1px 1px 1px grey;
			margin-top: 10px;
			padding-bottom: 60px;
		}
		div#selection-inner {
		margin: -5px auto;
		}
		
			ul {
				list-style:none;
			}

			li {
				text-align: left;
			}

			h1 {
				text-align: center;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 30px;
			}

			h2 {
				text-align: center;
				padding-top: 12px;
				padding-bottom: 15px;
				background-color: #f2f2f2;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 20px;
			}

			h3 {
				padding-top: 12px;
				padding-bottom: 15px;
				background-color: #f2f2f2;
				margin: 0px;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 20px;
			}

			h4 {
				text-align: center;
				padding-top: 15px;
				padding-bottom: 15px;
				background-color: #f2f2f2;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 20px;
			}

			label {
				font-weight: bold;
			}

			input[type=text].totaldisplay, select {
				width: 250px;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}

			button#finish {
				margin-top: 10px;
			}

			p {
				text-align: center;
			}

			.button {
				color: white;
				background-color: #008CBA;
				border-radius: 4px;
				cursor: pointer;
				text-decoration: none;
			}

			.place {
				color: white;
				background-color: #008CBA;
				border-radius: 4px;
				cursor: pointer;
				text-decoration: none;
			}
			#model{
				width:90%;
			}
						#color{
				width:90%;
			}
						#graphics{
				width:90%;
			}
						#wheels{
				width:90%;
			}
						#premium{
				width:90%;
			}
						#seat{
				width:90%;
			}
		</style>
	</head>
	<body>
<div id="Container">
<div id="navbar">
<div class="login-container">
  <form action="/action_page.php">
    <input class="login" type="text" placeholder="Username" name="username">
    <input class="login" type="text" placeholder="Password" name="password">
    <button type="submit">Login</button>
  </form>
</div>
<div class="topnav" style="display:none">
  <a href="javascript:void(0);" class="icon" id="icon" style="">
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
		
		<div id="selection">
		<h3>User Cart</h3>
		<div id="selection-inner">
		<ul>
			<li>
				<label style="margin-top: 15px;">Model: </label><br>
				<select id = "model">
				  <option value="lightning">Lightning (96v)</option> <!-- 8,999 -->
				  <option value="sparkle">Sparkle (48v)</option> <!-- 5,999 -->
				  <option value="thunder">Thunder (192v)</option> <!-- 10,999 -->
				  <option value="firefly">Firefly (24v)</option> <!-- 3,999 -->
				</select>
			</li>
			<li>
				<label>Color: </label><br>
				<select id = "color">
					<option value="black/white">Black & White</option>
					<option value="yellow/red">Yellow & Red (+ $250)</option>
				</select>
			</li>
			<div id="premiumGraphics">
			<li>
				<label>Graphics: </label><br>
				<select id = "graphics">
					<option value="no">No (No additional charge)</option>
					<option value="yes">Yes (+ $350)</option>
				</select>
			</li>
			</div>
			<li>
				<label>Wheels: </label><br>
				<select id = "wheels">
					<option value="18">18 Inch</option>
					<option value="19">19 Inch</option>
				</select>
			</li>
			<li>
				<label>Premium Wheels </label><br>
				<select id = "premium">
					<option value="no">No (No additional charge)</option>
					<option value="yes">Yes (+ $100)</option>
				</select>
			</li>
			<li>
				<label>Seat Type: </label><br>
				<select id = "seat">
					<option value="solo">Solo</option>
					<option value="standard">Standard</option>
				</select>
			</li>
		</ul>
</div>
		<button  class="button" id="ordersubmit" onclick="getValues();">Check Out</button>
		<!-- Color options will change based on if they select premium or not.<p> -->
	</div>

<script>
$('#effect').show();
$('.login-container').show();
$('.topnav').hide();

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