<!DOCTYPE HTML>
<html lang="en">
<head>
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
body {
 background: url("images/blackbike.jpg") no-repeat center center fixed;
 background-color: #cccccc;
 background-size:cover;
}
div#background-box {
background-color: rgba(0,0,0,0.5);
padding-bottom: 15px;
text-shadow: 2px 2px 4px #000000;
}
</style>

<!--Administration.html
	Author: Robert Hannah
	09/10/2019 -->
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="navbar.css" />
  <?php include "navbar.html" ?>
</head>
<body>
<br />
<br />
<!--<fieldset>-->
<div id="background-box">
<font color="white">
<center><h1>About Us</h1></center>
<center>
Electric motercicles<br />
The devices of the future, We build your own custom Electric motercycles.<br />
We have the best engineers in the contry, building and designing Motercycles.<br />
We offer jobs to all walks of life, from fast food to welding.<br />
We build more then even motercycles, as we have built things from human reforming devices to tooth brushes.<br />
We even have liturature teachers.<br />
We also build immortality devices.<br />
We have also liberated france.<br />
We have also eaten a whole chicken army.<br />
We have also built a robot steve jobs.<br />
We have also built a robot einstien.<br />
We have also built a robot Nichola Tesla.<br />
We also built all computers on earth.<br />
We own every company.<br />
There is only one company you can buy from, and thats us.<br />
youre never gonna buy from any other company.<br />
</font>

</center>
</div>
<!--</fieldset>-->
<footer>

<div id="footercolmn">

</div>
</footer>
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
