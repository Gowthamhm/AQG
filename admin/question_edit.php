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
      $no = 1;
      while($row = $result->fetch_assoc()) {
$id=$row['sl_no'];
$question =$row['question'];
     ?>
  <form method="POST" action="questionupdate.php" class="">
    <input type="hidden" name="id" value="<?php echo "$id"; ?>">
    <input type="hidden" name="topich" value="<?php echo "$topic"; ?>">
    <div class="form-group row">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Question <?php echo "$no";?>:</label>
      <div class="col-sm-6">
      <textarea name="question" class="form-control" rows="2" cols="80" required> <?php echo "$question"; ?></textarea>
      </div>
              <div class="col-sm-2">
          <input type="submit" class="btn btn-outline-success btn-lg" name="submit" value="Edit" >
        </div>
        <div class="col-sm-2">
    <input type="submit" class="btn btn-outline-success btn-lg" name="delete" value="Delete" >
  </div>
            </div>
  </form>
  <?php
$no++;}
  } ?>
  </div>
  </div>
  </body>
  </html>
