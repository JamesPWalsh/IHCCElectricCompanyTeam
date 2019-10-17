<?php
include('connect.php');
include('accountstuff.php');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $model = $_POST["model"];
   $color = $_POST["color"];
   $wheels = $_POST["wheels"];
   $last_id = '';
   $graphic = $_POST["graphics"];
   if (!isset($_SESSION))session_start();
   if (isset($_SESSION['user_id'])) {
     $user = $_SESSION['user_id'];
     $sql = "INSERT INTO orders_track VALUES (NULL,$user)";
     if ($conn->query($sql) === TRUE) {
       $last_id = $conn->insert_id;
     } else {
       echo "not success";
     }
     $sql = "INSERT INTO orders VALUES ($last_id,3)";
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
  echo "Successfully submitted order";
 }
}
?>
