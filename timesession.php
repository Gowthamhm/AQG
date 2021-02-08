<?php
include('config.php');
session_start();
if(!isset($_SESSION['score'])){
  echo '<script type="text/javascript">';
echo 'window.location.href="user_home.php";';
echo '</script>';
}
else {

}
?>
