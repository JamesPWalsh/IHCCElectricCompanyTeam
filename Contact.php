<!DOCTYPE HTML>
<html lang="en">
<head>
<!--Contact.html
	Author: Robert Hannah
	10/25/2018 -->
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="navbar.css" />
	<link rel="stylesheet" type="text/css" href="navbar.css" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include 'loginchecks.php'?>
<?php include "navbar.html" ?>
<style>
body {font-family: Arial, Helvetica, sans-serif;
 background: url("images/ironrun.jpg") no-repeat center center fixed;
}
* {box-sizing: border-box;}

input[type=text].forminput, select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit].forminput {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
	width: 70%;
	margin-top: 5px;
  border-radius: 10px;
	border: 2px black inset;
  background-color: #f2f2f2;
  padding: 20px;
}
form#form {
position: relative;
}
p.info {
position: absolute;
bottom: 0px;
left: 20px;
}
@media screen and (max-width: 1000px) {
 input#submit::before {
  content: "\A";
            white-space: pre;
 }
 p.info {
 padding-top: 15px;
 padding-right: 35px;

 position: relative;
 }
}
a.icon {
  display: block;
  position: absolute;
  right: 0px;
  top: 0x;
  color:white;

}
.topnav {

  background-color: #333;
  position: relative;
}
div#myLinks {
  display: none;
}
a#droplink {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
  margin: auto;
  display: table;

}
.topnav a.icon {
  display: block;
  position: absolute;
  right:10px;
  top: 7px;
}
.clearfix {
overflow:hidden;
}
.clearfix::after {
content: "";
  clear: both;
  display: table;
  }
</style>

</head>

<body>
<div id="Container">
<div id="content">

<div class="container">
  <form action="/action_page.php" id="form">

<center>
	<h1>Contact Us</h1>
</center>
<center>

	<input type="radio" name="gender" value="male"> Mr.
	<input type="radio" name="gender" value="female"> Ms.
	<input type="radio" name="gender" value="other"> Mrs.<br><br>

    <label for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" class="forminput"  placeholder="Your first name.."><br>

    <label for="lname">Last Name</label><br>
    <input type="text" id="fname" name="lastname" class="forminput"  placeholder="Your last name.."><br>

    <label for="fname">E-Mail</label><br>
    <input type="text" id="fname" name="firstname" class="forminput"  placeholder="Your email address.."><br>

    <label for="fname">Phone Number</label><br>
    <input type="text" id="fname" name="firstname" class="forminput"  placeholder="Your phone number.."><br>

    <label for="country">Prefered Contact</label><br>
    <select id="country" name="country">
      <option value="email">E-Mail</option>
      <option value="text">Text</option>
      <option value="call">Call</option>
    </select><br>
		<label for="subject">Subject</label>
    <br><textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea><br>

    <input type="submit" value="Submit" class="forminput" id="submit" style="text-align: center">
	<p class="info">1234 Walnut Street
Ottumwa, IA 52501<br>
Phone: 123-888-9999
ElectricCorp@email.com
</p>
  </form>
</div>

</center>



</div> <!-- End Content-->
</div> <!-- End Container-->
<footer>
<div id="footercolmn">

</div>
</footer>
<script> function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
	 $('.login-container').show();

  } else {
    x.style.display = "block";
	x.style.textAlign = "center";
		 $('.login-container').hide();
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

var x = window.matchMedia("(max-width: 900px)")
myFunction2(x) // Call listener function at run time
x.addListener(myFunction2) // Attach listener function on state changes
</script>

</body>
</html>
