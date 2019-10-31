<?php
include_once('connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['id'])) {
	$id = $_POST['id'];
	$sql = "SELECT i.category, i.description FROM order_items oi, inventory i WHERE oi.order_id = $id and oi.item_id = i.item_id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
    echo "<h1>Current Order Items</h1>";
		echo "<b>Order ID: </b>".$id."</b><br>";
		while($row = $result->fetch_assoc()) {
				echo "<b>".$row['category'].": </b>".$row['description']."</b><br>";
		}
	} else {
		echo "Error";
		return false;
	}
	return 1;
}
return 0;
}
?>
