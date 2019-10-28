<?php
include_once('connect.php');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $cust_id = $_POST["id"];
   $sql = "SELECT o.order_id,o.user_id,
   (SELECT ot.user_id FROM orders_track ot, account a WHERE a.user_id = ot.user_id and ot.order_id = o.order_id) AS custid
   from orders o, account a
   where o.user_id = a.user_id
   and o.user_id = $cust_id";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
   	// output data of each row
   	while($row = $result->fetch_assoc()) {
   		$id = $row["order_id"];
   		echo "<li id='orderelement'><a href='#' value='$id' id='singleorder'>"."Order ID: ".$row["order_id"] ." Customer ID: ".$row["user_id"]." Employee ID: ".$row["custid"]."</a></li>";
   	}
   } else {
   return false;
   }
return 0;
}
?>
