<?php
include 'config.php';
include 'error.php';
if(isset($_POST['submit']))
{
  // echo $_POST['qno'];
  // echo $_POST['topic'];
  $topic = $_POST['topic'];
  $qno = $_POST['qno'];
  // echo $topic;
  // echo $qno;
}
$rowperpage = 1;
$row = 0;

// Previous Button
if(isset($_POST['but_prev'])){
    $row = $_POST['row'];
    $row -= $rowperpage;
    $topic = $_POST['topic'];
    $qno = $_POST['qno'];
    if( $row < 0 ){
        $row = 0;
    }
}

// Next Button
if(isset($_POST['but_next'])){
    $row = $_POST['row'];
    $allcount = $_POST['allcount'];
    $topic = $_POST['topic'];
    $qno = $_POST['qno'];
    $val = $row + $rowperpage;
    if( $val < $allcount ){
        $row = $val;
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

        <link href="assets/css/font-awesome.css" rel="stylesheet" />

        <link href="assets/css/quiz.css" rel="stylesheet" />
    <title>Quiz</title>
  </head>
      <body style="background: #EEF2F7;">
    <?php
    // count total number of rows
    // $sql = "SELECT COUNT(*) AS cntrows FROM questions where topic='$topic'";
    // $result = mysqli_query($conn,$sql);
    // $fetchresult = mysqli_fetch_array($result);
    // $allcount = $fetchresult['cntrows'];
    $allcount = $qno;
    // echo "$topic";
    // echo "$qno";
    // echo "$allcount";
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
      $ans = $fetch['answer'];
      $explain = $fetch['explanation'];
      ?>
        <div class="containerq  container">
          <div class="row">
          <div class=" col-lg-5">
<p><?php echo ($question); ?></p>
    <form class="" action="" method="post">
      <input type="radio" name="op1" value="<?php echo $op1;?>"><?php echo $op1;?> <br>
      <input type="radio" name="op2" value="<?php echo $op2;?>"><?php echo $op2;?> <br>
            <input type="radio" name="op3" value="<?php echo $op3;?>"><?php echo $op3;?> <br>
                  <input type="radio" name="op4" value="<?php echo $op4;?>"><?php echo $op4;?> <br>
    </form>
          </div>
      <div class=" col-lg-5">
            <table>
              <tr>
              <?php
              for ($i=0; $i < $allcount; $i++) {
                ?>
                  <td><?php echo $i; ?> </td>
                <?php
              }
              ?></tr>
            </table>
          </div>
        </div>
      <?php
      // echo "$dbid,$question,$op1,$op2,$op3,$op4";
      $sno++;
    }
    ?>
    <form method="post" action="">
        <div id="div_pagination">
            <input type="hidden" name="row" value="<?php echo $row; ?>">
            <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
            <input type="hidden" name="topic" value="<?php echo $topic; ?>">
            <input type="hidden" name="qno" value="<?php echo $qno; ?>">
            <?php echo $row?>
            <?php echo $qno ?>
              <?php echo $allcount ?>
            <?php   if($row == 0){ }else{?>
            <input type="submit" class="button" name="but_prev" value="Previous">
          <?php } ?>
          <?php echo $row ?>
              <?php   if($allcount == $row + 1){?>  <input type="submit" class="button" name="submit" value="Submit"><?php }else{?>
            <input type="submit" class="button" name="but_next" value="Next">
            <?php } ?>
        </div>
    </form>
      </div>
  </body>
</html>
