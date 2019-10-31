<?php
$name = $_GET['name'];
$ser="localhost";
$user="root";
$pass="";
$db="electric-database";
if ($name != '') {
$conn = mysqli_connect($ser,$user,$pass,$db) or die("connection failed");
if (!$conn) {
die("Unsuccessful Login");
}
$sql = "SELECT a.user_id,a.first_name,a.last_name from account a where a.first_name LIKE '%$name%' or a.last_name LIKE '%$name%' or concat(a.first_name, ' ',a.last_name) LIKE '%$name%'";
$result = $conn->query($sql);
	// output data of each row
	while($row = $result->fetch_assoc()) {
	  $id = $row["user_id"];
	  $firstname = $row["first_name"];
	  $lastname = $row["last_name"];
		$adminquery = mysqli_query($conn,"SELECT ca.user_id from admin ca where ca.user_id = $id");
		$employeequery = mysqli_query($conn,"SELECT ca.user_id from employee ca where ca.user_id = $id");
		if (mysqli_num_rows($adminquery) > 0) {
			echo "<b>Admin: </b>".$firstname." ".$lastname. " <b>User ID: </b>" . $id."<br/>";
		} else if (mysqli_num_rows($employeequery) > 0) {
			echo "<b>Employee: </b>".$firstname." ".$lastname. " <b>User ID: </b>" . $id."<br/>";
		} else {
		echo "<b>Customer: </b>".$firstname." ".$lastname. " <b>User ID: </b>". $id."<br/>";
		}
	}
mysqli_close($conn);
}
return 0;
?>
