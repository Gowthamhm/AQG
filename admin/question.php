<?php
include '../config.php';
include '../error.php';
include '../session.php';
if (isset($_POST['submitup'])) {
  $topic = $_POST['topic'];
  // echo "$topic";
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Questions</title>
    <?php include 'nav.php'; ?>
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />

    <link href="../assets/css/areg.css" rel="stylesheet" />
  </head>
  <style media="screen">
  /* @media screen and (min-width: 1200px){
  .container1 {
      max-width: 1600px;
  }
  } */
  </style>
  <body style="background: #EEF2F7;">
    <div class="container1 container2 container">
      <div class="">
      <h3> Add a Question to <?php echo "$topic"; ?></h3>
</div>
<div class="">
  <form method="POST" action="questioninsert.php" class="">
    <div class="form-group row">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Topic :</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="colFormLabel" name="topic" value="<?php echo "$topic"; ?>" disabled>
        <input type="hidden" name="topich" value="<?php echo "$topic"; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Question :</label>
      <div class="col-sm-8">
        <!-- <input type="text" class="form-control" id="colFormLabel" value="<?php echo "$topic"; ?>" disabled> -->
        <textarea name="question" class="form-control" rows="4" cols="80" required></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Option 1:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="colFormLabel" name="op1" value="" required>
      </div>
    </div>  <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Option 2:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="colFormLabel" name="op2" value="" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Option 3:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="colFormLabel" name="op3" value="" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Option 4:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="colFormLabel" name="op4" value="" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Correct Answer :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="colFormLabel" name="answer" value="" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Explanation :</label>
        <div class="col-sm-8">
          <!-- <input type="text" class="form-control" id="colFormLabel" value="<?php echo "$topic"; ?>" disabled> -->
          <textarea name="explain" class="form-control" rows="4" cols="80" required></textarea>
        </div>
      </div>
      <div class="form-group row">
              <div class="col-sm-12">
          <input type="submit" class="btn btn-outline-success btn-lg" name="submit" value="Submit" >
        </div>
      </div>
  </form>
</div>
</div>
  </body>
</html>
