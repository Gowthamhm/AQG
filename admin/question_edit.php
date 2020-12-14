<?php
include '../config.php';
include '../session.php';
include '../error.php';
include 'nav.php';
if (isset($_POST['submitup'])) {
$topic = $_POST['topic'];
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Questions</title>
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />

    <link href="../assets/css/areg.css" rel="stylesheet" />
  </head>
  <body style="background: #EEF2F7;">
    <div class="container1 container2 container">
      <div class="">
      <h3> Edit the Questions of  <?php echo "$topic"; ?></h3>
  </div>
  <div class="">
    <?php
    $query = "SELECT * from questions where topic = '$topic'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
$id=$row['sl_no'];
$question =$row['question'];
$op1 = $row['option1'];
$op2 = $row['option2'];
$op3 = $row['option3'];
$op4 = $row['option4'];
$ans = $row['answer'];
$explain = $row['explanation'];
     ?>
  <form method="POST" action="questioninsert.php" class="">
    <input type="hidden" name="id" value="<?php echo "$id"; ?>">
    <div class="form-group row">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Topic :</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="colFormLabel" name="topic" value="<?php echo "$topic"; ?>" >
        <input type="hidden" name="topich" value="<?php echo "$topic"; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Question :</label>
      <div class="col-sm-8">
        <!-- <input type="text" class="form-control" id="colFormLabel" value="<?php echo "$topic"; ?>" disabled> -->
        <textarea name="question" class="form-control" rows="4" cols="80" required> <?php echo "$question"; ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Option 1:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="colFormLabel" name="op1" value="<?php echo "$op1"; ?>" required>
      </div>
    </div>  <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Option 2:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="colFormLabel" name="op2" value="<?php echo "$op2"; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Option 3:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="colFormLabel" name="op3" value="<?php echo "$op3"; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Option 4:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="colFormLabel" name="op4" value="<?php echo "$op4"; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Correct Answer :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="colFormLabel" name="answer" value="<?php echo "$ans"; ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Explanation :</label>
        <div class="col-sm-8">
          <!-- <input type="text" class="form-control" id="colFormLabel" value="<?php echo "$topic"; ?>" disabled> -->
          <textarea name="explain" class="form-control" rows="4" cols="80" required><?php echo "$explain"; ?></textarea>
        </div>
      </div>
      <div class="form-group row">
              <div class="col-sm-12">
          <input type="submit" class="btn btn-outline-success btn-lg" name="submit" value="Submit" >
        </div>
      </div>
  </form>
  <?php }
  } ?>
  </div>
  </div>
  </body>
  </html>
