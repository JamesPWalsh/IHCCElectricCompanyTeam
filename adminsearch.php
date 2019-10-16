<?php
$id = $_GET['id'];
$ser="localhost";
$user="root";
$pass="";
$db="electric-database";
if ($id != '') {
$conn = mysqli_connect($ser,$user,$pass,$db) or die("connection failed");
if (!$conn) {
die("Unsuccessful Login");
}
$sql = "SELECT a.user_id,a.first_name,a.last_name from account a, admin p where a.user_id = p.user_id
and a.user_id = $id";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "Admin ".$row["first_name"]." ".$row["last_name"];
	}

} else {
  $sql = "SELECT a.user_id,a.first_name,a.last_name from account a, employee p where a.user_id = p.user_id
  and a.user_id = $id";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
  		echo "Employee ".$row["first_name"]." ".$row["last_name"];
  	}

  }
return false;
}
mysqli_close($conn);
}
return 0;
?>
