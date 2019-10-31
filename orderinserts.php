<?php
include('connect.php');
include('accountstuff.php');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $model = $_POST["model"];
   $color = $_POST["color"];
   $wheels = $_POST["wheels"];
   $seat = $_POST["seat"];
   $last_id = '';
   $graphic = $_POST["graphics"];
   if (!isset($_SESSION))session_start();
   if (isset($_SESSION['user_id'])) {
     $user = $_SESSION['user_id'];
     $sql = "INSERT INTO orders_track VALUES (NULL,122)";
     if ($conn->query($sql) === TRUE) {
       $last_id = $conn->insert_id;
     } else {
       echo "not success";
     }
     $sql = "INSERT INTO orders VALUES ($last_id,$user,NULL)";
     if ($conn->query($sql) === TRUE) {
     } else {
       echo "not success";
     }
     if (isset($_POST['model'])) {
     $sql = "INSERT INTO order_items VALUES ($last_id,$model,1)";
     if ($conn->query($sql) === TRUE) {
     } else {
       echo "not success";
     }
   }
   if (isset($_POST['color'])) {
   $sql = "INSERT INTO order_items VALUES ($last_id,$color,1)";
   if ($conn->query($sql) === TRUE) {
   } else {
     echo "not success";
   }
  }
  if (isset($_POST['wheels'])) {
  $sql = "INSERT INTO order_items VALUES ($last_id,$wheels,1)";
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "not success";
  }
  }
  if ($graphic != 0) {
  $sql = "INSERT INTO order_items VALUES ($last_id,$graphic,1)";
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "not success";
  }
  }
  if (isset($_POST['seat'])) {
  $sql = "INSERT INTO order_items VALUES ($last_id,$seat,1)";
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "not success";
  }
}
  echo "<p style='margin-top:30px;'>Successfully added order to cart!</p>";
  echo "<p id='myid' style='display:none;'>".$last_id."</p>";
  $_SESSION["orderid"] = $last_id;
  return 1;
}
echo "Something went wrong with your order, please make sure you're logged in to complete your order.";
return 0;
}
?>
