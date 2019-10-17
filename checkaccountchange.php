<?php
include('connect.php');
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = trim($_POST["firstname"]);
    $lastname = $_POST["lastname"];
    $email = strtolower($_POST["email"]);
    $password = $_POST["password"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $phone_num = $_POST["phonenumber"];
    $alt_phone_num = $_POST["alt_phone_number"];
    $results = $_POST["results"];
    $pass = $_POST["pass"];
    $status = $_POST["status"];
    $pass = json_decode($pass);
    $results = json_decode($results);
    $user_id = trim($results->{'user_id'});
    $changed = [];
    if($firstname != $results->{'first_name'}) {
      $sql = "UPDATE account a
      SET a.first_name = '$firstname'
      WHERE a.user_id = $user_id";
      if ($conn->query($sql) === TRUE) {
        array_push($changed,'First Name');
      }
    }
    if($lastname != $results->{'last_name'}) {
      $sql = "UPDATE account a
      SET a.last_name = '$lastname'
      WHERE a.user_id = $user_id";
      if ($conn->query($sql) === TRUE) {
        array_push($changed,'Last Name');
      }
    }
    if($email != $results->{'email'}) {
      $sql = "UPDATE account a
      SET a.email = '$email'
      WHERE a.user_id = $user_id";
      if ($conn->query($sql) === TRUE) {
        array_push($changed,'Email');
      }
    }
    $pass = $pass->{'password'};
      if($password != $pass && $password != '**********') {
        if($status == 'customer') {
        $sql = "UPDATE cust_account_info a
        SET a.password = '$password'
        WHERE a.user_id = $user_id";
        if ($conn->query($sql) === TRUE) {
          array_push($changed,'Password');
        }
      } else {
        echo "<p style='margin-top: 50px; text-align:center;'>Employee's and Admin cannot change their password through this screen.</p>";
      }
      }
    if($address != $results->{'address'}) {
      $sql = "UPDATE account a
      SET a.address = '$address'
      WHERE a.user_id = $user_id";
      if ($conn->query($sql) === TRUE) {
        array_push($changed,'Address');
      }
    }
    if($city != $results->{'city'}) {
      $sql = "UPDATE account a
      SET a.city = '$city'
      WHERE a.user_id = $user_id";
      if ($conn->query($sql) === TRUE) {
        array_push($changed,'City');
      }
    }
    if($state!= $results->{'state'}) {
      $sql = "UPDATE account a
      SET a.state = '$state'
      WHERE a.user_id = $user_id";
      if ($conn->query($sql) === TRUE) {
        array_push($changed,'State');
      }
    }
    if($zip != $results->{'zip'}) {
      $sql = "UPDATE account a
      SET a.zip = '$zip'
      WHERE a.user_id = $user_id";
      if ($conn->query($sql) === TRUE) {
        array_push($changed,'Zip');
      }
    }
    if($phone_num != $results->{'phone_number'}) {
      $sql = "UPDATE account a
      SET a.phone_number = '$phone_num'
      WHERE a.user_id = $user_id";
      if ($conn->query($sql) === TRUE) {
        array_push($changed,'Phone Number');
      }
    }
    if($alt_phone_num != $results->{'alt_phone_number'}) {
      $sql = "UPDATE account a
      SET a.alt_phone_number = '$alt_phone_num'
      WHERE a.user_id = $user_id";
      if ($conn->query($sql) === TRUE) {
        array_push($changed,'Alt. Phone Number');
      }
    }
      if(sizeof($changed) != 0) {
      $changedstring = "<p style='text-align:center;'>You succesfully changed ";
      foreach ($changed as $cur) {
        if(!next($changed)) {
         $changedstring .= $cur;
       } else {
         $changedstring .= $cur.", ";
       }
      }
      echo $changedstring."</p>";
    } else {
      $changedstring = '';
      echo $changedstring;
    }

  }
  ?>
