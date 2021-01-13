<?php
include '../config.php';
include '../error.php';

if(isset($_POST['submita']))
{
$fname=$_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$pno = $_POST['pno'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
echo "$fname,$lname,$gender,$pno,$mail,$pass,$cpass";
if ($cpass == $pass) {
  $sql ="INSERT INTO admin_registration(first_name,last_name,phone_number,email,password,gender) VALUES('$fname','$lname','$pno','$mail','$pass','$gender')";
  if($conn->query($sql) === TRUE){
      echo "<script>alert('registered successfully')</script>";
header( "refresh:1;url=admin_login.php" );
    }
  else {
      echo "<script>alert('Registered Unsuccessfully')</script>";
    header( "refresh:1;url=admin_reg.php" );
    // echo "inserted unsucussfully";
      }
    }
    else {
        echo "<script>alert('Entered password and confirm passwod are not equal')</script>";
      header( "refresh:1;url=admin_reg.php" );
      // echo "Password are not Equal";
    }
}
else {
    header("location:admin_reg.php");
}
 ?>
