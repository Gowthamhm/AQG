<?php
include '../config.php';
include '../error.php';
include '../session.php';
if (isset($_POST['submit'])) {
  $topic=$_POST['topich'];
  $question = $_POST['question'];
  $op1=$_POST['op1'];
  $op2=$_POST['op2'];
  $op3=$_POST['op3'];
  $op4=$_POST['op4'];
  $answer = $_POST['answer'];
  $explain = $_POST['explain'];
  echo "$topic,$question,$op1,$op2,$op3,$op4,$answer,$explain";

if($answer == $op1 ||$answer == $op2 ||$answer == $op3 ||$answer == $op4){
  $sql ="INSERT INTO questions(topic,question,option1,option2,option3,option4,answer,explanation)VALUES('$topic','$question','$op1','$op2','$op3','$op4','$answer','$explain')";
  if($conn->query($sql) === TRUE){
        echo "<script>alert('inserted sucussfully')</script>";
    header("location:admin_home.php");
    echo "inserted sucussfully";
    }
  else {
        echo "<script>alert('inserted unsucussfully')</script>";
      header("location:admin_home.php");
      }
}else {
  echo " Please provide a answer within the option";
}

}
 ?>
