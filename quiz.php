<?php
include 'config.php';
include 'error.php';
include 'timesession.php';

if(isset($_POST['isubmit']))
{
  // $topic = $_POST['topic'];
  // $qno = $_POST['qno'];
  // // $_SESSION['time'] = $qno*60;
  // $_SESSION['score'] = 0;
  // echo "$_SESSION[topic]";
  // echo "$_SESSION[qno]";
  // echo "$_SESSION[score]";
  $topic = $_SESSION['topic'];
  $qno = $_SESSION['qno'];
  $_SESSION['score'] = 0;
  echo "$topic,$qno,$_SESSION[score],$_SESSION[name],$_SESSION[usn]";
}
$rowperpage = 1;
$row = 0;

//
// // Previous Button
// if(isset($_POST['but_prev'])){
//     $row = $_POST['row'];
//     $row -= $rowperpage;
//     $topic = $_POST['topic'];
//     $qno = $_POST['qno'];
//     if( $row < 0 ){
//         $row = 0;
//     }
// }

// Next Button
if(isset($_POST['but_next'])){
    // echo "$_SESSION[time]";
    $row = $_POST['row'];
    $allcount = $_POST['allcount'];
    $topic = $_POST['topic'];
    $qno = $_POST['qno'];
    if(!isset($_POST['op'])){
      $val = $row;
      if( $val < $allcount ){
          $row = $val;
      }
      echo '<script>alert("without Answering to this question you can\'t move to next question")</script>';
    }
      else{
    $sop = $_POST['op'];
    $sql = "SELECT * FROM questions where topic = '$topic' ORDER BY sl_no ASC limit $row,".$rowperpage;
    $result = mysqli_query($conn,$sql);
    while($fetch = mysqli_fetch_array($result)){
      $ans = $fetch['answer'];
      // echo "$ans";
    }
    if ($ans === $sop) {
$_SESSION['score'] = $_SESSION['score']+1;
    }
    else{
      $_SESSION['score'] = $_SESSION['score'];
    }
    $val = $row + $rowperpage;
    if( $val < $allcount ){
        $row = $val;
    }
    }
}
if (isset($_POST['submitf'])) {
  $sop = $_POST['op'];
  $sql = "SELECT * FROM questions where topic = '$topic' ORDER BY sl_no ASC limit $row,".$rowperpage;
  $result = mysqli_query($conn,$sql);
  while($fetch = mysqli_fetch_array($result)){
    $ans = $fetch['answer'];
  }
  if ($ans === $sop) {
$_SESSION['score'] = $_SESSION['score']+1;
  }
  else{
    $_SESSION['score'] = $_SESSION['score'];
  }

  $val = $row + $rowperpage;
  if( $val < $allcount ){
      $row = $val;
  }
  header("location:result.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link href="assets/css/quiz.css" rel="stylesheet" />
    <title>Quiz</title>
  </head>
      <body style="background:#EEF2F7;
    width: 80%;
    height: 80vh;
    margin-left: 114px">
    <span id="carb"> <?php  ?></span>
    <?php
    $allcount = $qno;
    $sql = "SELECT * FROM questions where topic = '$topic' ORDER BY sl_no ASC limit $row,".$rowperpage;
    $result = mysqli_query($conn,$sql);
    $sno = $row + 1;
    while($fetch = mysqli_fetch_array($result)){
      $dbid=$fetch['sl_no'];
      $question =$fetch['question'];
      $op1 = $fetch['option1'];
      $op2 = $fetch['option2'];
      $op3 = $fetch['option3'];
      $op4 = $fetch['option4'];
  $option = array($op1,$op2,$op3,$op4);
      $ans = $fetch['answer'];
      $explain = $fetch['explanation'];
      ?>
        <div class="containerq  container" style=" height: auto;
    margin-top: 10%;
    margin-left: 3%;">
  <div class="row">
          <?php echo "<center><h1> $topic </h1></center> ";echo "Question : "; echo $row +'1';?>
            </div>
          <div class="row" style="padding: 10%;">
          <div class=" col-lg-12">
<p><?php echo ($question); ?></p>
      <form method="post" action="">
      <?php
      $i=0;
      foreach ($option as  $value) {
        echo "<input type='radio' name='op'id='' value='$value'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$value."<br>";
      }
      ?>
          </div>
        </div>
      <?php
      $sno++;
    }
    ?>
        <div id="div_pagination" class="row">
            <input type="hidden" name="row" value="<?php echo $row; ?>">
            <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
            <input type="hidden" name="topic" value="<?php echo $topic; ?>">
            <input type="hidden" name="qno" value="<?php echo $qno; ?>">
            <!-- <?php echo $row?>
            <?php echo $qno ?>
              <?php echo $allcount ?> -->
            <?php   if($row == 0){ }else{?>
          <?php } ?>
              <?php   if($allcount == $row + 1){?>
                 <input type="submit"  class="btn btn-success" class="button" name="submitf" style="float: right;margin-right: 49px;" value="Submit"><?php }else{?>
            <input type="submit" class="btn  btn-primary" id="nxt"name="but_next"style="float: right;margin-right: 49px;" value="Next">
            <?php } ?>
          <!-- </div> -->
        </div>
    </form>
      </div>
  </body>
</html>
