<?php
$id = $_GET['id'];
$ser="localhost";
$user="root";
$pass="";
$db="electric-database";
$admin_id = '';
if (isset($_GET['adminid'])) {
$admin_id = $_GET['adminid'];
}
$admin_pass = '';
if (isset($_GET['adminpass'])) {
$admin_pass = $_GET['adminpass'];
}
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
		echo "1 admin ".$row["first_name"]." ".$row["last_name"];
	}

} else {
return false;
}
mysqli_close($conn);
}



if ($admin_id != '' && $admin_pass != '') {

$conn = mysqli_connect($ser,$user,$pass,$db) or die("connection failed");
if (!$conn) {
die("Unsuccessful Login");
}
$sql = "UPDATE admin p
SET p.user_id = $admin_id, p.password = '$admin_pass'
WHERE p.user_id = $id";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$sql2 = "UPDATE account a
SET a.user_id = $admin_id
WHERE a.user_id = $id";
if ($conn->query($sql2) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
mysqli_close($conn);
} elseif ($admin_id != '' && $admin_pass == '') {
  $conn = mysqli_connect($ser,$user,$pass,$db) or die("connection failed");
  if (!$conn) {
  die("Unsuccessful Login");
  }
  $sql = "UPDATE admin p
  SET p.user_id = $admin_id
  WHERE p.user_id = $id";
  if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }
  $sql2 = "UPDATE account a
  SET a.user_id = $admin_id
  WHERE a.user_id = $id";
  if ($conn->query($sql2) === TRUE) {
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }
  mysqli_close($conn);
} elseif ($admin_id == '' && $admin_pass != '') {
  $conn = mysqli_connect($ser,$user,$pass,$db) or die("connection failed");
  if (!$conn) {
  die("Unsuccessful Login");
  }
  $sql = "UPDATE admin p
  SET p.password = '$admin_pass'
  WHERE p.user_id = $id";
  if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }
  mysqli_close($conn);
}
return 0;
?>
