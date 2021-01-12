<?php

session_start();

echo $_SESSION['score'];
// Unset all of the session variables
$_SESSION = array();
 	unset($_SESSION);
 	session_unset();
	session_destroy();
  // header("location:user_home.php");

  exit;
?>
