<!DOCTYPE HTML>
<html lang="en">
<video autoplay muted loop id="myVideo">
  <source src="Videos/bg-video.mp4" type="video/mp4">
</video>
<head>
<!--Administration.html
	Author: Robert Hannah
	09/26/2019 -->
	<meta charset="utf-8">
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
  div#navbar {
    position:fixed;
  z-index:1;
  width: 100%;
  }
body {
		background-color: #9a9b9c;
	}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
footer{
font-size: 10px;
}
.box{
width: 255px;
border: 1px solid black;
}
div#contest {
  position: absolute;
     bottom: 0;  /* position the top  edge of the element at the middle of the parent */
     left: 50%; /* position the left edge of the element at the middle of the parent */

     transform: translate(-50%, -10%); /* This is a shorthand of
                                          translateX(-50%) and translateY(-50%) */
  background-color: #D8D8D8;
  border: 3px inset white;
  border-radius: 15px;
  padding: 10px;
}
</style>
</head>
<body>
  <div id="contest" style="display:none;">
<h3 style="color:black;">Enter our contest to win a free helmet!</h3><br>
<button style="display: block;margin: 0 auto;background-color:#333;color: white;padding: 10px;  border-radius: 15px;">Lets Go!</button>
  </div>
<!--
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <a href="images/Thunder.png"><img src="images/Thunder.png" style="width:1000px; height:500px"></a>
  <div class="text">Thunder</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <a href="images/Sparkle.png"><img src="images/Sparkle.png" style="width:1000px; height:500px"></a>
  <div class="text">Sparkle</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <a href="images/Lightning.png"><img src="images/Lightning.png" style="width:1000px"></a>
  <div class="text">Lightning</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <a href="images/FireFly.png"> <img src="images/FireFly.png" style="width:1000px"></a>
  <div class="text">FireFly</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>


<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>
</div>
<div class="box" align="right">

<p>
Color Choices:
</p>
<a href = "images/BlackWhite.png"> <img src= images/BlackWhite.png width= 250/> </a>
<a href = "images/RedYellow.png"> <img src= images/RedYellow.png width= 250 /> </a>

</div>
</br>
</br>
<center>-->

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</br>
</br>
</br>
<footer>
<fieldset>
</fieldset>
</footer>
<script src="resize.js"></script>
</body>
</html>


<!--https://www.youtube.com/watch?v=iCPd7Pilwx0-->
