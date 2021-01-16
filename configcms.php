<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="cms";

$conncms = new mysqli($servername, $username, $password,$dbname);

if ($conncms->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
// echo "connected to cms";
}
 ?>
