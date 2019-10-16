<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Order Selection Page</title>
		<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css">
		<link rel="stylesheet" type="text/css" media="screen" href="navbar.css">
		<script src="jquery-3.4.1.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<?php include 'loginchecks.php'?>
		<script>
			//$( document ).ready(function() {
			//$('#premiumGraphics').hide();
			//$("#ordersubmit").click(function(){
			//$('#orderdisplay').show();
			//});
			//});
			function numberWithCommas(x) {
	    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			}
			function getValues() {
				var modelValue = document.getElementById("model");
				var displayModel = modelValue.options[modelValue.selectedIndex].text;
				document.getElementById("txtModel").value=displayModel;

				var colorValue = document.getElementById("color");
				var displayColor = colorValue.options[colorValue.selectedIndex].text;
				document.getElementById("txtColor").value=displayColor;

				var wheelsValue = document.getElementById("wheels");
				var displayWheels = wheelsValue.options[wheelsValue.selectedIndex].text;
				document.getElementById("txtWheels").value=displayWheels;

				var premiumValue = document.getElementById("premium");
				var displayPremium = premiumValue.options[premiumValue.selectedIndex].text;
				document.getElementById("txtPremium").value=displayPremium;

				var seatValue = document.getElementById("seat");
				var displaySeat = seatValue.options[seatValue.selectedIndex].text;
				document.getElementById("txtSeat").value=displaySeat;

				var graphicsValue = document.getElementById("graphics");
				var displayGraphics = graphicsValue.options[graphicsValue.selectedIndex].text;
				document.getElementById("txtGraphics").value=displayGraphics;

				var total = 0;
				var base = 0;

				switch (displayModel) {
					case "Lightning (96v)":
						total = total + 8999;
						base = 8999;
						break;
					case "Sparkle (48v)":
						total = total + 5999;
						base = 5999;
						break;
					case "Thunder (192v)":
						total = total + 10999;
						base = 10999;
						break;
					case "Firefly (24v)":
						total = total + 3999;
						base = 3999;
						break;
				}

				if(displayColor == "Yellow & Red (+ $250)") {
					total = total + 250;
					//$( document ).ready(function() {
					//$('#premiumGraphics').show();
					//}
				}

				if(displayPremium == "Yes (+ $100)") {
					total = total + 100;
				}

				if(displayGraphics == "Yes (+ $350)") {
					total = total + 350;
				}
				total = numberWithCommas(total);
				base = numberWithCommas(base);
				document.getElementById("txtTotal").value="$"+total;

				document.getElementById("txtBase").value="$"+base;
				localStorage.setItem("total", total);
				}

		function myFunction()
		{
			window.confirm("Add Chocie Of Deposit Here(if possible)");
		}
		</script>
		<script>
		$( document ).ready(function() {
		$('#orderdisplay').hide();
		$("#ordersubmit").click(function(){
		$('#orderdisplay').show();
		$('#placeorder').show();
		});
		});
		</script>

		<style>
			body {
				background-color: #e6e6e6;
			}

			div#orderdisplay {
				background-color: #ffffff;
				width: 74%;
				box-shadow: 1px 1px 1px grey;
				height: 450px;
				margin-left: 15px;
			}

			div#selection {
				background-color: #ffffff;
				float: right;
				width: 21%;
				text-align: center;
				box-shadow: 1px 1px 1px grey;
			  margin-top: 10px;
				padding-bottom: 60px;
			}
			div#selection-inner {
				margin: -5px auto;
			}
			div#totalDisplay {
				margin-top: 20px;
				background-color: #ffffff;
				width: 74%;
				box-shadow: 1px 1px 1px grey;
				margin-left: 15px;
				height: 300px;
			}

			div#total {
				padding:25px 45px;
			}

			div#cost {
				border: 1px solid white;
				width: 200px;
				float: left;
			}

			div#noCost {
				border: 1px solid white;
				margin-left: 25%;
			}

			div#totalContent {
				text-align: center;
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
			<a class="Active" href="ModelInformation.php">Our Models</a>
		  <a class="Active" href="About.php">About Us</a>
		  <a href="Contact.php">Contact Us</a></li>
		  <a href="FAQ.php">Faq Page</a>



		</div>
		</div>
		<ul class="effect" id="effect" style="display:none">
			<li><a class="Active" href="ModelInformation.php">Our Models</a></li>
		  <li><a class="Active" href="About.php">About Us</a></li>
		  <li><a href="Contact.php">Contact Us</a></li>
		  <li><a href="FAQ.php">Faq Page</a></li>
		</ul>
		</div>
	</head>

	<body>

		<div id="selection">
		<h3>Order Selection</h3>
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
					<option value="18">18"</option>
					<option value="19">19"</option>
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
		<button  class="button" id="ordersubmit" onclick="getValues();">Update</button>
		<!-- Color options will change based on if they select premium or not.<p> -->
	</div>

		<div id="orderdisplay">
			<h2>Order Information</h2>

			<div id="total">
				<div id="cost">
					<label>Model:</label><br>
					<input type="text" id="txtModel" placeholder="Model" disabled/><br>
					<label>Color:</label><br>
					<input type="text" id="txtColor" placeholder="Color" disabled/><br>
					<label>Premium Wheels:</label><br>
					<input type="text" id="txtPremium" placeholder="Premium" disabled/><br>
					<label>Premium Graphics:</label><br>
					<input type="text" id="txtGraphics" placeholder="Graphics" disabled/><br>
				</div>

				<div id="noCost">
					<label>Wheels:</label><br>
					<input type="text" id="txtWheels" placeholder="Wheels" disabled/><br>
					<label>Seat Type: </label><br>
					<input type="text" id="txtSeat" placeholder="Seat" disabled/><br>
				</div>
			</div>
			<!-- Order information changes depending on model order form.
			<p> THIS INFO NEEDS TO GO TO MODELINFORMATION PAGE -->
		</div>

		<div id="totalDisplay" style="margin-bottom: 50px;">
			<h4>Total Information</h4>
			<div id="totalContent">
				<label>Base Price:</label><br>
				<input type="text" id="txtBase" class="totaldisplay" placeholder="N/A" disabled/><br>
				<label>Total:</label><br>
				<input type="text" id="txtTotal" class="totaldisplay" placeholder="N/A" disabled/><br>
				<form id="placeorder" action="order.php" style="display:none">
    <button class="place" id="finish" type="submit">Place Order</button>
</form>
			</div>
		</div>
			<script src="resize.js"></script>
	</body>
</html>