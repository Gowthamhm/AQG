<?php
include 'config.php';
include 'error.php';
session_start();
if(isset($_POST['submit']))
{
  $topic = $_POST['topic'];
  if(!isset($_POST['qno'])){
    $sql = "SELECT COUNT(*) AS cntrows FROM questions where topic = '$topic' ";
    $result = mysqli_query($conn,$sql);
    $fetchresult = mysqli_fetch_array($result);
    $qno = $fetchresult['cntrows'];
    header( "refresh:0;url=reg_check.php" );
  }
  else{
  $qno = $_POST['qno'];
header( "refresh:0;url=instruction.php" );
}  // $_SESSION['time'] = $qno*60;
  $_SESSION['score'] = 0;
  $_SESSION['topic'] = $topic;
    $_SESSION['qno'] = $qno;
}
// echo "$qno";
 ?>
