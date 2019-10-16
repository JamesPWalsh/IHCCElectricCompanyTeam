<!DOCTYPE HTML>
<html>

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
  background: url("images/t.jpg") no-repeat center center fixed;
 background-color: white;
 background-size:cover;
}
div#background-box {
background-color: rgba(0,0,0,0.5);
padding-bottom: 15px;
}

.container {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<!--Administration.html
	Author: Robert Hannah
	09/10/2019 -->
	<meta charset="utf-8">
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
    <a href="About.php" id="droplink">About Us</a>
  <a href="FAQ.php" id="droplink">Faq Page</a>
   <a href="modelorder.php" id="droplink">Order Here</a>
   <a href="accountcreation.php" id="droplink">Sign Up</a>
    <a href="Contact.php" id="droplink">Contact Us</a>
  </div>
  </div>
  <ul class="effect" id="effect" style="display:none">
  <li><a href="About.php">About Us</a></li>
  <li><a href="FAQ.php">Faq Page</a></li>
  <li><a href="modelorder.php">Order Here</a></li>
  <li><a href="accountcreation.php" id="droplink">Sign Up</a></li>
   <li><a href="Contact.php">Contact Us</a></li>
  </ul>
  </div>
</head>
<body>
<div class="container">
<center>
<h1>Sparkle (48v) information</h1>
</center>
<p>Integer imperdiet tristique luctus. Aenean a tempor quam. Vivamus tristique porta ex, eu viverra massa sodales faucibus. Morbi accumsan enim vel aliquam placerat. Vivamus fringilla tristique nunc, sit amet faucibus ante auctor et. Proin id ultrices enim. Proin lacus nisl, consequat et porta vel, dapibus nec felis. Nulla in dui sit amet dui feugiat ullamcorper ac non dolor. Quisque in dui posuere magna mollis porttitor sed ut leo. Cras blandit finibus turpis et scelerisque.</p>
<ul>
<li>Morbi accumsan enim vel aliquam placerat</li>
<li>Proin id ultrices enim</li>
<li>Proin lacus nisl, consequat et porta vel, dapibus nec felist</li>
<li>Quisque in dui posuere magna mollis porttitor sed ut leo</li>
</ul>
<p>Aenean eu mi a est aliquam congue. Vestibulum sodales libero id mi egestas porttitor. Pellentesque aliquam velit in venenatis dictum. Donec ultricies ut orci ut eleifend. Fusce consequat mollis commodo. Vivamus sit amet facilisis orci. Duis tristique justo et neque malesuada, id dignissim nulla condimentum. Integer id vulputate est, euismod viverra justo. Nullam blandit nisl rutrum commodo aliquet. In hac habitasse platea dictumst. Proin gravida neque accumsan nunc consequat accumsan. Mauris eu lectus nec risus rhoncus congue id id magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus eget nulla dapibus, egestas odio eu, dapibus lorem. Mauris egestas maximus eros, vel sollicitudin odio. Integer ultrices libero sed vestibulum placerat.

Nulla mollis mi in nunc aliquet, et aliquam urna malesuada. Morbi sed interdum augue. Maecenas augue turpis, ultricies et ultricies nec, pretium non magna. Fusce aliquam ante mauris, ut imperdiet sem blandit ac. In feugiat lectus molestie tortor pulvinar, vitae mattis ex fermentum. Fusce non libero quis augue maximus tincidunt sed non ante. Sed vel quam purus. Quisque euismod faucibus velit a ullamcorper. Nunc sem augue, gravida sed lacinia eget, aliquam ut libero. Cras tristique finibus commodo. Quisque nec aliquam urna.
</p>
<center>
<h1>Lightning (96v) information</h1>
</center>
<p>Integer imperdiet tristique luctus. Aenean a tempor quam. Vivamus tristique porta ex, eu viverra massa sodales faucibus. Morbi accumsan enim vel aliquam placerat. Vivamus fringilla tristique nunc, sit amet faucibus ante auctor et. Proin id ultrices enim. Proin lacus nisl, consequat et porta vel, dapibus nec felis. Nulla in dui sit amet dui feugiat ullamcorper ac non dolor. Quisque in dui posuere magna mollis porttitor sed ut leo. Cras blandit finibus turpis et scelerisque.</p>
<ul>
<li>Morbi accumsan enim vel aliquam placerat</li>
<li>Proin id ultrices enim</li>
<li>Proin lacus nisl, consequat et porta vel, dapibus nec felist</li>
<li>Quisque in dui posuere magna mollis porttitor sed ut leo</li>
</ul>
<p>Aenean eu mi a est aliquam congue. Vestibulum sodales libero id mi egestas porttitor. Pellentesque aliquam velit in venenatis dictum. Donec ultricies ut orci ut eleifend. Fusce consequat mollis commodo. Vivamus sit amet facilisis orci. Duis tristique justo et neque malesuada, id dignissim nulla condimentum. Integer id vulputate est, euismod viverra justo. Nullam blandit nisl rutrum commodo aliquet. In hac habitasse platea dictumst. Proin gravida neque accumsan nunc consequat accumsan. Mauris eu lectus nec risus rhoncus congue id id magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus eget nulla dapibus, egestas odio eu, dapibus lorem. Mauris egestas maximus eros, vel sollicitudin odio. Integer ultrices libero sed vestibulum placerat.

Nulla mollis mi in nunc aliquet, et aliquam urna malesuada. Morbi sed interdum augue. Maecenas augue turpis, ultricies et ultricies nec, pretium non magna. Fusce aliquam ante mauris, ut imperdiet sem blandit ac. In feugiat lectus molestie tortor pulvinar, vitae mattis ex fermentum. Fusce non libero quis augue maximus tincidunt sed non ante. Sed vel quam purus. Quisque euismod faucibus velit a ullamcorper. Nunc sem augue, gravida sed lacinia eget, aliquam ut libero. Cras tristique finibus commodo. Quisque nec aliquam urna.
</p>
<center>
<h1>Thunder (192v) information</h1>
</center>
<p>Integer imperdiet tristique luctus. Aenean a tempor quam. Vivamus tristique porta ex, eu viverra massa sodales faucibus. Morbi accumsan enim vel aliquam placerat. Vivamus fringilla tristique nunc, sit amet faucibus ante auctor et. Proin id ultrices enim. Proin lacus nisl, consequat et porta vel, dapibus nec felis. Nulla in dui sit amet dui feugiat ullamcorper ac non dolor. Quisque in dui posuere magna mollis porttitor sed ut leo. Cras blandit finibus turpis et scelerisque.</p>
<ul>
<li>Morbi accumsan enim vel aliquam placerat</li>
<li>Proin id ultrices enim</li>
<li>Proin lacus nisl, consequat et porta vel, dapibus nec felist</li>
<li>Quisque in dui posuere magna mollis porttitor sed ut leo</li>
</ul>
<p>Aenean eu mi a est aliquam congue. Vestibulum sodales libero id mi egestas porttitor. Pellentesque aliquam velit in venenatis dictum. Donec ultricies ut orci ut eleifend. Fusce consequat mollis commodo. Vivamus sit amet facilisis orci. Duis tristique justo et neque malesuada, id dignissim nulla condimentum. Integer id vulputate est, euismod viverra justo. Nullam blandit nisl rutrum commodo aliquet. In hac habitasse platea dictumst. Proin gravida neque accumsan nunc consequat accumsan. Mauris eu lectus nec risus rhoncus congue id id magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus eget nulla dapibus, egestas odio eu, dapibus lorem. Mauris egestas maximus eros, vel sollicitudin odio. Integer ultrices libero sed vestibulum placerat.

Nulla mollis mi in nunc aliquet, et aliquam urna malesuada. Morbi sed interdum augue. Maecenas augue turpis, ultricies et ultricies nec, pretium non magna. Fusce aliquam ante mauris, ut imperdiet sem blandit ac. In feugiat lectus molestie tortor pulvinar, vitae mattis ex fermentum. Fusce non libero quis augue maximus tincidunt sed non ante. Sed vel quam purus. Quisque euismod faucibus velit a ullamcorper. Nunc sem augue, gravida sed lacinia eget, aliquam ut libero. Cras tristique finibus commodo. Quisque nec aliquam urna.
</p>
<center>
<h1>Firefly (24v) information</h1>
</center>
<p>Integer imperdiet tristique luctus. Aenean a tempor quam. Vivamus tristique porta ex, eu viverra massa sodales faucibus. Morbi accumsan enim vel aliquam placerat. Vivamus fringilla tristique nunc, sit amet faucibus ante auctor et. Proin id ultrices enim. Proin lacus nisl, consequat et porta vel, dapibus nec felis. Nulla in dui sit amet dui feugiat ullamcorper ac non dolor. Quisque in dui posuere magna mollis porttitor sed ut leo. Cras blandit finibus turpis et scelerisque.</p>
<ul>
<li>Morbi accumsan enim vel aliquam placerat</li>
<li>Proin id ultrices enim</li>
<li>Proin lacus nisl, consequat et porta vel, dapibus nec felist</li>
<li>Quisque in dui posuere magna mollis porttitor sed ut leo</li>
</ul>
<p>Aenean eu mi a est aliquam congue. Vestibulum sodales libero id mi egestas porttitor. Pellentesque aliquam velit in venenatis dictum. Donec ultricies ut orci ut eleifend. Fusce consequat mollis commodo. Vivamus sit amet facilisis orci. Duis tristique justo et neque malesuada, id dignissim nulla condimentum. Integer id vulputate est, euismod viverra justo. Nullam blandit nisl rutrum commodo aliquet. In hac habitasse platea dictumst. Proin gravida neque accumsan nunc consequat accumsan. Mauris eu lectus nec risus rhoncus congue id id magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus eget nulla dapibus, egestas odio eu, dapibus lorem. Mauris egestas maximus eros, vel sollicitudin odio. Integer ultrices libero sed vestibulum placerat.

Nulla mollis mi in nunc aliquet, et aliquam urna malesuada. Morbi sed interdum augue. Maecenas augue turpis, ultricies et ultricies nec, pretium non magna. Fusce aliquam ante mauris, ut imperdiet sem blandit ac. In feugiat lectus molestie tortor pulvinar, vitae mattis ex fermentum. Fusce non libero quis augue maximus tincidunt sed non ante. Sed vel quam purus. Quisque euismod faucibus velit a ullamcorper. Nunc sem augue, gravida sed lacinia eget, aliquam ut libero. Cras tristique finibus commodo. Quisque nec aliquam urna.
</p>
</div>
	</body>
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
  $(document).ready(function(){
  });
  </script>
</html>
