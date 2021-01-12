<?php

session_start();

echo "<h1>Your Score is :";echo $_SESSION['score'];echo"</h1>";
// Unset all of the session variables
$_SESSION = array();
 	unset($_SESSION);
 	session_unset();
	session_destroy();
header( "refresh:4;url=user_home.php" );
  exit;
?>
