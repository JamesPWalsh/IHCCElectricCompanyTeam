<?php
include('connect.php');
include('accountstuff.php');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $cust_id = $_POST["id"];
   echo $cust_id;
   $model = $_POST["model"];
   $color = $_POST["color"];
   $wheels = $_POST["wheels"];
   $seat = $_POST["seat"];
   $last_id = '';
   $graphic = $_POST["graphics"];
   $isvalid = getCustomerPass($conn,$cust_id);
   if($isvalid != 0) {
     $sql = "INSERT INTO orders_track VALUES (NULL,$cust_id)";
     if ($conn->query($sql) === TRUE) {
       $last_id = $conn->insert_id;
     } else {
       echo "not success";
     }
     $sql = "INSERT INTO orders VALUES ($last_id,3,NULL)";
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
   if (isset($_POST['seat'])) {
   $sql = "INSERT INTO order_items VALUES ($last_id,$seat,1)";
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
  if (isset($_POST['seat'])) {
  $sql = "INSERT INTO order_items VALUES ($last_id,$seat,1)";
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
  echo "Successfully added order to database";
   } else {
     echo "Id entered is not a customer's account id";
     return 0;
   }
return 0;
}
?>
