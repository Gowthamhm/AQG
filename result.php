<?php
session_start();
include 'config.php';
// echo "<h1>Your Score is :";echo $_SESSION['score'];echo"</h1>";
// echo "<h1>Your name is :";echo $_SESSION['name'];echo"</h1>";
// echo "<h1>Your usn is :";echo $_SESSION['usn'];echo"</h1>";
// echo "<h1>Your topic is :";echo $_SESSION['topic'];echo"</h1>";
// echo "<h1>Your Qno is :";echo $_SESSION['qno'];echo"</h1>";
if(!isset($_SESSION['name']) && !isset($_SESSION['usn'])){
// echo "name and usn is empty";
echo "<h1>Your Score is :";echo $_SESSION['score'];echo"</h1>";
header( "refresh:4;url=sessionend.php" );
}else{
  $sql ="UPDATE result set result ='$_SESSION[score]' where event_name='$_SESSION[topic]' and name ='$_SESSION[name]'and usn ='$_SESSION[usn]'";
  if($conn->query($sql) === TRUE){
    echo "<h1>Your topic is :";echo $_SESSION['topic'];echo"</h1>";
    echo "<h1>Your name is :";echo $_SESSION['name'];echo"</h1>";
    echo "<h1>Your usn is :";echo $_SESSION['usn'];echo"</h1>";
    echo "<h1>Selected List list will Anounced Later<h1>";
    header( "refresh:4;url=sessionend.php" );
      // echo "<script>alert('registered successfully')</script>";
    }
  else {
      // echo "<script>alert('Registered Unsuccessfully')</script>";
    // echo "inserted unsucussfully";
      }
}
// Unset all of the session variables
?>
