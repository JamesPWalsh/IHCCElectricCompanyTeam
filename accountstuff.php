<?php
function checkAccount($conn,$user){
  $sql = "SELECT p.user_id from admin p where p.user_id = $user";
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        return 'admin';
    }
} else {
  $sql = "SELECT p.user_id from employee p where p.user_id = $user";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        return 'employee';
    }
} else {
  $sql = "SELECT p.user_id from cust_account_info p where p.user_id = $user";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        return 'customer';
    }
} else {
  return 0;
}
}
}
}

function getAccountInfo($conn,$user){
  $sql = "SELECT p.user_id,p.first_name,p.last_name,p.email,p.address,p.city,p.state,p.zip,p.phone_number,p.alt_phone_number from account p where p.user_id = $user";
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        return $row;
    }
} else {
    return 0;
}
}

function getAdminPass($conn,$user){
  $sql = "SELECT p.password from admin p where p.user_id = $user";
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        return $row;
    }
} else {
    return 0;
}
}
function getEmployeePass($conn,$user){
  $sql = "SELECT p.password from employee p where p.user_id = $user";
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        return $row;
    }
} else {
    return 0;
}
}
function getCustomerPass($conn,$user){
  $sql = "SELECT p.password from cust_account_info p where p.user_id = $user";
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        return $row;
    }
} else {
    return 0;
}
}
function checkChange($conn,$results) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		$firstname = trim($_POST["firstname"]);
  		$lastname = $_POST["lastname"];
  		$password = $_POST["password"];
  		$address = $_POST["address"];

    }
}
?>
