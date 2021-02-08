<?php
$_SESSION = array();
 	unset($_SESSION);
 	session_unset();
	session_destroy();
header( "refresh:0;url=user_home.php" );
  exit;
?>
