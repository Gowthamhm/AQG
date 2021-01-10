<?php
   include('config.php');
   session_start();
         if(!isset($_SESSION['user'])){
           echo '<script type="text/javascript">';
echo 'window.location.href="admin_login.php";';
echo '</script>';
         }
       else{
// echo "$_SESSION[user]";
// echo "$_SESSION[club]";
       }
       if (!isset($_SESSION['time'])) {
         echo "timer not set";
       }
       else {
         echo "timer set";
       }
?>
