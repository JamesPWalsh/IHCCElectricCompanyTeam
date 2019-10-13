<?php
if (!isset($_SESSION))session_start();
  if (isset($_GET['signout'])) {
    unset ($_SESSION["username"]);
  }

  if (isset($_SESSION['username'])) {
		echo '<script language="javascript">';
		echo '$(document).ready(function(){';
		echo '$("#sign-out").show();
		$("#loginform").hide();
		$("a#signup").hide();';
		echo '	});';
		echo '</script>';

  } else {
		echo '<script language="javascript">';
		echo '$(document).ready(function(){';
		echo '$("#sign-out").hide();
		$("#loginform").show();
		$("a#signup").show();';
		echo '	});';
		echo '</script>';
	}
?>
