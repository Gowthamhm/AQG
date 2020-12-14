<?php
include '../config.php';
include '../error.php';
session_start();
if (isset($_POST['submitl'])) {
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  echo "$user,$pass";

$query = "SELECT * from admin_registration";
$result = $conn->query($query);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "username " . $row["first_name"]. " email " . $row["email"]. " password" . $row["password"]. "<br>";
$dbfname = $row["first_name"];
$dbemail =   $row["email"];
$dbpass = $row["password"];
if($pass==$dbpass && ($user == $dbfname || $user == $dbemail)){
  // echo "proper user";
  $_SESSION['user'] = $user;
  header("location:admin_home.php");
  break;
}
else {
  // echo "Not a user";
  echo "<script>alert('In proper Credentials')</script>";
    header("location:admin_login.html");
}
  }
} else {
  // echo "0 results";
}
}
else {
header("location:admin_reg.html");
}

 ?>
