<?php
if (!isset($_SESSION))session_start();
  if (isset($_GET['signout'])) {
    unset ($_SESSION["username"]);
    unset ($_SESSION["user_id"]);
    unset ($_SESSION["accType"]);
    unset ($_SESSION['orderid']);
    unset ($accountStatus);
  }
if (isset($_SESSION['username']) && isset($_SESSION['accType'])) {
  $accType = ($_SESSION['accType']);
if($accType === 'employee') {
  echo '<script language="javascript">';
  echo '$(document).ready(function(){';
  echo '$("li#order").hide();';
  echo '	});';
  echo '</script>';
} else {
  echo '<script language="javascript">';
  echo '$(document).ready(function(){';
  echo '$("li#order").show();';
  echo '	});';
  echo '</script>';
}
} else {
  echo '<script language="javascript">';
  echo '$(document).ready(function(){';
  echo '$("li#order").show();';
  echo '	});';
  echo '</script>';
}
  if (isset($_SESSION['username'])) {
    include_once('accountstuff.php');
    include_once('connect.php');
    $user = $_SESSION['user_id'];
    $accountStatus = checkAccount($conn,$user);
    if($accountStatus == 'customer') {
    	$_SESSION["accType"] = "customer";
    } else if($accountStatus == 'employee') {
    	$_SESSION["accType"] = "employee";
    } else if($accountStatus == 'admin') {
    	$_SESSION["accType"] = "admin";
    }
		echo '<script language="javascript">';
		echo '$(document).ready(function(){';
		echo '$("#sign-out").show();
    $("li#createacc").hide();
    $("li#editacc").show();
		$("#loginform").hide();
		$("a#signup").hide();';
		echo '	});';
		echo '</script>';

  } else {
		echo '<script language="javascript">';
		echo '$(document).ready(function(){';
		echo '$("#sign-out").hide();
    $("li#order").hide();
    $("li#createacc").show();
    $("li#editacc").hide();
		$("#loginform").show();
		$("a#signup").show();';
		echo '	});';
		echo '</script>';
	}
  if (isset($_SESSION['orderid'])) {
    echo '<script language="javascript">';
    echo '$(document).ready(function(){';
    echo '$("li#mycart").show();';
    echo '	});';
    echo '</script>';
  } else {
    echo '<script language="javascript">';
    echo '$(document).ready(function(){';
    echo '$("li#mycart").hide();';
    echo '	});';
    echo '</script>';
  }
  if (isset($_SESSION['accType'])) {
    if($_SESSION['accType'] == "admin") {
    echo '<script language="javascript">';
    echo '$(document).ready(function(){';
    echo '$("li#controlpanel").show();';
    echo '	});';
    echo '</script>';
  }
  } else {
    echo '<script language="javascript">';
    echo '$(document).ready(function(){';
    echo '$("li#controlpanel").hide();';
    echo '	});';
    echo '</script>';
  }
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
if(curPageName() == 'admincontrolpanel.php' || curPageName() == 'datamaintainence.php' || curPageName() == 'adminvieworders.php') {
  if (!isset($_SESSION['accType'])) {
    echo "<a href='Index.php'>Back to Home</a><br>";
    die("You do not have access to this page");
  } else if($_SESSION['accType'] != "admin") {
    echo "<a href='Index.php'>Back to Home</a><br>";
    die("You do not have access to this page");
  }
}
if(curPageName() == 'modelorder.php') {
  if (!isset($_SESSION['accType'])) {
    echo "<a href='Index.php'>Back to Home</a><br>";
    die("You must be logged in to access this page");
  }
}
?>
