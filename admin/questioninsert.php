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
  // echo "$topic,$question,$op1,$op2,$op3,$op4,$answer,$explain";
  $sqlf ="select * from questions";
  $result = $conn->query($sqlf);
  $check=0;
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      if($row['question'] ===  $question){
        $check =1;
        break;
      }
    }
  }
  if($check == 1){
    echo "<script>alert('You entered the Already existing Question')</script>";
  header( "refresh:0;url=admin_home.php" );
  }else {
if($answer == $op1 ||$answer == $op2 ||$answer == $op3 ||$answer == $op4){
  $sql ="INSERT INTO questions(topic,question,option1,option2,option3,option4,answer,explanation)VALUES('$topic','$question','$op1','$op2','$op3','$op4','$answer','$explain')";
  if($conn->query($sql) === TRUE){
        echo "<script>alert('inserted sucussfully')</script>";
header( "refresh:1;url=admin_home.php" );
    }
  else {
        echo "<script>alert('inserted unsucussfully')</script>";
    header( "refresh:1;url=admin_home.php" );
      }
}else {
    echo "<script>alert('Please provide a answer within the option')</script>";
header( "refresh:1;url=admin_home.php" );
  }

  }
}
 ?>
