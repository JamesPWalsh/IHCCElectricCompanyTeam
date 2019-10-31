<?php
include('connect.php');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $orderid = $_POST["id"];
   $model = $_POST["model"];
   $color = $_POST["color"];
   $wheels = $_POST["wheels"];
   $seat = $_POST["seat"];
   $graphic = $_POST["graphics"];

     if (isset($_POST['model'])) {
     $sql = "UPDATE order_items oi, inventory i SET oi.item_id = $model WHERE oi.order_id = $orderid and oi.item_id = i.item_id and i.category = 'Model'";
     if ($conn->query($sql) === TRUE) {
     } else {
       echo "not success";
     }
   }
   if (isset($_POST['color'])) {
     $sql = "UPDATE order_items oi, inventory i SET oi.item_id = $color WHERE oi.order_id = $orderid and oi.item_id = i.item_id and i.category = 'Paint Color'";
   if ($conn->query($sql) === TRUE) {
   } else {
     echo "not success";
   }
  }
  if (isset($_POST['wheels'])) {
  $sql = "UPDATE order_items oi, inventory i SET oi.item_id = $wheels WHERE oi.order_id = $orderid and oi.item_id = i.item_id and i.category = 'Wheel'";
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "not success";
  }
  }
  if ($graphic != 0) {
    $hasgraphic = false;
    $sql = "SELECT item_id FROM order_items WHERE order_id = $orderid and item_id = 7";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $hasgraphic = true;
      }
  }
  if(!$hasgraphic) {
    $sql = "INSERT INTO order_items VALUES ($orderid,$graphic,1)";
    if ($conn->query($sql) === TRUE) {
    } else {
      echo "not success";
    }
  }
} else {
  $sql = "SELECT item_id FROM order_items WHERE order_id = $orderid and item_id = 7";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $sql = "DELETE from order_items WHERE order_id = $orderid and item_id = 7";
      if ($conn->query($sql) === TRUE) {
      } else {
        echo "not success";
      }
    }
}
}
  if (isset($_POST['seat'])) {
  $sql = "UPDATE order_items oi, inventory i SET oi.item_id = $seat WHERE oi.order_id = $orderid and oi.item_id = i.item_id and i.category = 'Seat'";
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "not success";
  }
}
  echo "<p style='margin-top:30px;'>Successfully edited order number: ".$orderid."</p>";
  return 1;
echo "Something went wrong with your order, please make sure you're logged in to complete your order.";
return 0;
}
?>
