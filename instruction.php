<?php
include 'config.php';
include 'error.php';
// include 'timesession.php';
// if(isset($_POST['submit']))
// {
//   $topic = $_POST['topic'];
//   $qno = $_POST['qno'];
//     // $_SESSION['time'] = $qno*60;
//   $_SESSION['score'] = 0;
// }
// echo "$qno";
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet" /> -->

    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/areg.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Instructions</title>
  </head>
  <body style="background: #EEF2F7;">
    <div class="container1 container2 container">
      <center><h1>Instructions</h1></center>
        <p>This quiz consists of multiple-choice questions. To be successful with the quizzes,
             It will also be extremely useful to study the key terms,
           and review the Test Your Knowledge activity at the end. Keep the following in mind:</p>
           <ul>
    <li>  <p>  <b>Multiple Attempts </b>- You will have many attempts for this quiz.</p></li>
      <li>  <p> <b>Timing</b>-You will need to complete each of your attempts in one sitting,
           as you are allotted time to complete each attempt. </p></li>
        To start, click the "Take the Quiz" button. When finished, click the "Submit Quiz" button.
      </ul>
<form class="" action="quiz.php" method="post">
  <input type="hidden" name="qno" value="<?php echo $qno; ?>">
  <input type="hidden" name="topic" value="<?php echo $topic; ?>">
  <input type="checkbox" name="read" id="checkme" value="">
<input type="submit" name="isubmit" id="submit" value="Take the Quiz" disabled>
</form>
</div>
  </body>
  <script type="text/javascript">
  var checker = document.getElementById('checkme');
var sendbtn = document.getElementById('submit');
// when unchecked or checked, run the function
checker.onchange = function(){
if(this.checked){
  sendbtn.disabled = false;
} else {
  sendbtn.disabled = true;
}

}
  </script>
</html>
