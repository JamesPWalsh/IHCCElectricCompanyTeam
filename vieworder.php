<?php
include('connect.php');
include('accountstuff.php');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $orderid = $_POST["id"];
   $sql = "SELECT o.order_id,a.first_name,a.last_name FROM orders_track o,account a WHERE o.order_id = $orderid AND o.user_id = a.user_id";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
   	// output data of each row
   	while($row = $result->fetch_assoc()) {
      echo "<p>"."Order ID: ".$row["order_id"]."</p>";
   		echo "<p>Customer's Name: " . $row["first_name"]." ".$row["last_name"]."<p>";
   	}
   } else {
   echo "<p>Issue getting order's customer name</p>";
   }
   $sql = "SELECT o.order_id,a.first_name,a.last_name FROM orders o,account a WHERE o.order_id = $orderid AND o.user_id = a.user_id";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
   	// output data of each row
   	while($row = $result->fetch_assoc()) {
   		echo "<p>"."Employee Assigned: " . $row["first_name"]." ".$row["last_name"]."<p>";
   	}
   } else {
   echo "<p>Issue getting order's customer name</p>";
   }
   $sql = "SELECT o.order_id,i.description,i.category FROM order_items o,inventory i WHERE o.order_id = $orderid AND o.item_id = i.item_id";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
   	// output data of each row
    echo "<b><p style='margin-top:30px;'>Items Ordered</p></b>";
   	while($row = $result->fetch_assoc()) {
   		echo "<p>".$row["description"]."<p>";
   	}
   } else {
   echo "<p>Issue getting order's customer name</p>";
   }
   $sql = "SELECT SUM(i.price) AS totalprice FROM order_items o,inventory i WHERE o.order_id = $orderid AND o.item_id = i.item_id";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
   	// output data of each row
   	while($row = $result->fetch_assoc()) {
   		echo "<br><b><p>"."Total Price: $" . number_format($row["totalprice"])."<p></b>";
   	}
   } else {
   echo "<p>Issue getting order's customer name</p>";
   }
   echo "<div id='buttons'><button type='button' name='exit' id='exitsubmit'>Exit</button></div>";
return 0;
}
?>
