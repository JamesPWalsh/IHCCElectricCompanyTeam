<?php
include('connect.php');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 $orderid = $_POST["id"];
	 $sql = "UPDATE orders SET active=1 WHERE order_id=$orderid";

	 if ($conn->query($sql) === TRUE) {
		 if (!isset($_SESSION))session_start();
		 unset ($_SESSION['orderid']);
	     echo "Record updated successfully";
	 } else {
	     echo "Error updating record: " . $conn->error;
	 }
}
?>
