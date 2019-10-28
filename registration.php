<!DOCTYPE HTML>
<html>
<?php
if (isset($_POST['submit'])) {
    $firstname = trim($_POST["firstname"]);
    $lastname  = $_POST["lastname"];
    $password  = $_POST["password"];
    $address   = $_POST["address"];
    $city      = $_POST["city"];
    $state     = $_POST["state"];
    $phone_num = $_POST["number"];
    $alt_phone_num = $_POST["alt-number"] or null;
    $zip = $_POST["zip"];
?>
<?php
    $ser  = "localhost";
    $user = "root";
    $pass = "";
    $db   = "electric-database";
    
    $conn = mysqli_connect($ser, $user, $pass, $db) or die("connection failed");
    if (!$conn) {
        die("Unsuccessful Login");
    } else {
        $sql = "INSERT INTO account (first_name,last_name,address,city,state,zip,phone_number,alt_phone_number)
VALUES ('$firstname','$lastname','$address','$city','$state',$zip,$phone_num,$alt_phone_num)";
    }
    session_start();
    if (mysqli_query($conn, $sql)) {
        $last_id = $conn->insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    mysqli_close($conn);
    return "Success";
}
?>
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
    </head>
    <style>
    body {
    margin: 0;
    background: url("images/bg2.jpg") no-repeat center center fixed;
    background-color: #cccccc;
    background-size: cover;
}

h1,
p,
button {
    text-align: center;
}
input
input[type=text].form,
select {
    padding: 12px 10px;
    margin: auto 0;
    margin-bottom: 15px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    border-radius: 4px;
}

label,
input {
    margin-top: 6px;
}

#wrapper-wrapper {
    background-color: white;
    border: 1px solid black;
    border-radius: 50px;
    padding: 35px;
    padding-right: 15px;
    padding-bottom: 15px;
}

#wrapper {
    margin: auto;
    width: 50%;
}

form {}

button.btn {
    margin-top: 15px;
    background-color: #f1f1f1;
    color: black;
    font-size: 16px;
    padding: 16px 30px;
    border: none;
    cursor: pointer;
    border: 1.5px solid black;
    border-radius: 5px;
    text-align: center;
}

button.btn:hover {
    background-color: #E0E0E0;
}

div.center {
    margin: auto;
    width: 50%;
}

input {

}
        </style>
    <body>
    <div id="navbar">
    <div class="login-container">
    <form action="/registration.php" method="post">
      <input class="login" type="text" placeholder="Username" name="username">
      <input class="login" type="text" placeholder="Password" name="password">
      <button type="submit">Login</button>
    </form>
  </div>
    <ul class="effect">
    <li><a href="About.html">About Us</a></li>
  <li><a href="Contact.html">Contact Us</a></li>
  <li><a href="modelorder.html">Order Here</a></li>
   <li><a href="FAQ.html">Faq Page</a></li>
</ul>
</div>
<div class="container-fluid">
  <div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8"></div>
<div id="wrapper">
  <div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 text-center">
<h1 style="color:white">Account Registration</h1>
<p style="color:white">Quick and easy sign up</p>
</div>
</div>
<div id="wrapper-wrapper">

        </div>
        </div>
  </div>
  <div class="col-sm-2"></div>
</div>

</div>

    </body>
</html>