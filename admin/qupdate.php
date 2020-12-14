<?php
include '../config.php';
include '../error.php';
include '../session.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $topic=$_POST['topich'];
  $question = $_POST['question'];
  $op1=$_POST['op1'];
  $op2=$_POST['op2'];
  $op3=$_POST['op3'];
  $op4=$_POST['op4'];
  $answer = $_POST['answer'];
  $explain = $_POST['explain'];
  // echo "$id,$topic,$question,$op1,$op2,$op3,$op4,$answer,$explain";

if($answer == $op1 ||$answer == $op2 ||$answer == $op3 ||$answer == $op4){
  $sql ="UPDATE questions SET topic = '$topic',question ='$question' ,option1 = '$op1',option2 ='$op2' ,option3 = '$op3',option4 = '$op4',answer = '$answer',explanation = '$explain' where sl_no = $id";
  if($conn->query($sql) === TRUE){
        echo "<script>alert('updated sucussfully');</script>";
    header("location:admin_home.php");
    echo "inserted sucussfully";
    }
  else {
        echo "<script>alert('updated unsucussfully');</script>";
      header("location:error.php");
      }
}else {
  echo " Please provide a answer within the option";
}

}
 ?>
