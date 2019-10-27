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
<?php include 'loginchecks.php'?>
        <?php include "navbar.html" ?>
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
            div#carsubmit {
              position:relative;
            }
            a#back {
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
<?php

include_once('connect.php');
include_once('accountstuff.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id      = $_POST["id"];
    $seat    = getCategory($id, 'seat');
    $model   = getCategory($id, 'model');
    $graphic = getCategory($id, 'graphic');
    $wheel   = getCategory($id, 'wheel');
    $color   = getCategory($id, 'color');
    if ($graphic) {
        $graphic = 'Premium Graphics';
    } elseif (!$graphic) {
        $graphic = 'No graphics';
    }
    $seat    = ucwords($seat);
    $model   = ucwords($model);
    $wheel   = ucwords($wheel);
    $graphic = ucwords($graphic);
    $pieces  = explode(" ", $color);
    $color   = ucfirst($pieces[0]) . " " . $pieces[1] . " " . ucfirst($pieces[2]) . " " . ucfirst($pieces[3]);
    $price = 0;
    $sql = "SELECT oi.order_id, sum(i.price) AS price FROM order_items oi, inventory i WHERE oi.item_id = i.item_id and oi.order_id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $price = $row["price"];
        }
    } else {
      echo "ERROR".$conn->error;
    }
} else {
  $id      = $_SESSION["orderid"];
  $seat    = getCategory($id, 'seat');
  $model   = getCategory($id, 'model');
  $graphic = getCategory($id, 'graphic');
  $wheel   = getCategory($id, 'wheel');
  $color   = getCategory($id, 'color');
  if ($graphic) {
      $graphic = 'Premium Graphics';
  } elseif (!$graphic) {
      $graphic = 'No graphics';
  }
  $seat    = ucwords($seat);
  $model   = ucwords($model);
  $wheel   = ucwords($wheel);
  $graphic = ucwords($graphic);
  $pieces  = explode(" ", $color);
  $color   = ucfirst($pieces[0]) . " " . $pieces[1] . " " . ucfirst($pieces[2]) . " " . ucfirst($pieces[3]);
  $price = 0;
  $sql = "SELECT oi.order_id, sum(i.price) AS price FROM order_items oi, inventory i WHERE oi.item_id = i.item_id and oi.order_id = $id";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          $price = $row["price"];
      }
  }
}
function getCategory($id, $var)
{
    include('connect.php');
    if ($var == 'seat') {
        $sql    = "SELECT i.description FROM inventory i, order_items oi WHERE oi.item_id = i.item_id AND oi.order_id = $id and category = 'Seat'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row["description"];
            }
        }
    } elseif ($var == 'model') {
        $sql    = "SELECT i.description FROM inventory i, order_items oi WHERE oi.item_id = i.item_id AND oi.order_id = $id and category = 'Model'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row["description"];
            }
        }
    } elseif ($var == 'graphic') {
        $sql    = "SELECT i.description FROM inventory i, order_items oi WHERE oi.item_id = i.item_id AND oi.order_id = $id and category = 'Graphic'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row["description"];
            }
        }
    } elseif ($var == 'wheel') {
        $sql    = "SELECT i.description FROM inventory i, order_items oi WHERE oi.item_id = i.item_id AND oi.order_id = $id and category = 'Wheel'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row["description"];
            }
        }
    } elseif ($var == 'color') {
        $sql    = "SELECT i.description FROM inventory i, order_items oi WHERE oi.item_id = i.item_id AND oi.order_id = $id and category = 'Paint Color'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row["description"];
            }
        }
    }

}
?>

<div id="Container">

        <div id="selection">
        <h3>User Cart</h3>
        <div id="selection-inner">
          <h3>Price: $<?php echo (isset($price)) ? $price : 'Invalid';?></h3>
        <ul>
            <li>
                <label style="margin-top: 15px;">Model: </label><br>
                <input disabled class="form" type="text" name="username" style="width: 90%;" value="<?php
echo (isset($model)) ? $model : '';
?>" id="form-email" width="400px"/>
            </li>
            <li>
                <label>Color: </label><br>
                <input disabled class="form" type="text" name="username" style="width: 90%;" value="<?php
echo (isset($color)) ? $color : '';
?>" id="form-email" width="400px"/>
            </li>
            <div id="premiumGraphics">
            <li>
                <label>Graphics: </label><br>
                <input disabled class="form" type="text" name="username" style="width: 90%;" value="<?php
echo (isset($graphic)) ? $graphic : '';
?>" id="form-email" width="400px"/>
            </li>
            </div>
            <li>
                <label>Wheels: </label><br>
                <input disabled class="form" type="text" name="username" style="width: 90%;" value="<?php
echo (isset($wheel)) ? $wheel : '';
?>" id="form-email" width="400px"/>
            </li>
            <li>
                <label>Seat Type: </label><br>
                <input disabled class="form" type="text" name="username" style="width: 90%;" value="<?php
echo (isset($seat)) ? $seat : '';
?>" id="form-email" width="400px"/>
            </li>
        </ul>
</div>
      <form id="cartsubmit" method="get" action="order.php">
        <input type="text" id="formprice" name="price" style="display:none;" value="<?php echo (isset($price)) ? $price : 'Invalid';?>"/>
        <button class="button" id="ordersubmit" onclick="getValues();" style="margin-top: 50px;">Check Out</button>
        <br><br><a id="back" style="color:black;" href="modelorder.php?order=false">Back to ordering options&#x2607;</a>
      </form>
    </div>

<script>
$( "a#back" ).click(function() {
});
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
