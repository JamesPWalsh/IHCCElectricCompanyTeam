<?php
include('connect.php');
include('accountstuff.php');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $orderid = $_POST["id"];
   $sql = "SELECT order_id FROM orders WHERE order_id = $orderid";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         
     }
   } else {
     echo "Error Deleting Order, Order ID ".$orderid." does not exist";
     return 0;
   }
   $sql = "DELETE FROM orders WHERE order_id = $orderid";

   if ($conn->query($sql) === TRUE) {
   } else {
       echo "Error Deleting Order, Order ID ".$orderid." does not exist";
       return 0;
   }
   $sql = "DELETE FROM orders_track WHERE order_id = $orderid";

   if ($conn->query($sql) === TRUE) {
   } else {
       echo "Error Deleting Order, Order ID ".$orderid." does not exist";
       return 0;
   }
   $sql = "DELETE FROM order_items WHERE order_id = $orderid";

   if ($conn->query($sql) === TRUE) {
   } else {
       echo "Error Deleting Order, Order ID ".$orderid." does not exist";
       return 0;
   }
   echo "Successfully deleted Order ID ".$orderid;
return 0;
}
?>
