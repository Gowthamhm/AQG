<?php
include 'config.php';
include 'error.php';
include 'nav.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" >
    <title>USER</title>
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet" /> -->

    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/areg.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style media="screen">
@media screen and (min-width: 1200px){
.container1 {
    max-width: 1600px;
}
}
</style>
  </head>
  <body style="background: #EEF2F7;">
    <div class="container1 container2 container">
      <div class="row">
          <?php
        $query = $conn->query("SELECT * FROM topic");
          if($query->num_rows > 0){
          while($row = $query->fetch_assoc()){
            $topic = $row['topic'];
            ?>
            <div class="col-sm col-lg-4"><?php
              $imageURL = 'admin/img/'.$row["topicfilename"];
        ?>
        <h1><?php echo "$topic"; ?></h1>
        <form class="" action="event_reg_check.php" method="post">
          <input type="hidden" name="topic" value="<?php echo  $topic; ?>">
          <input type="image" name="img" src="<?php echo $imageURL; ?>"width="200px" height="200px" value=""> <br>
          <div class="row">
            <?php
            $sql = "SELECT COUNT(*) AS cntrows FROM questions where topic = '$topic' ";
            $result = mysqli_query($conn,$sql);
            $fetchresult = mysqli_fetch_array($result);
            $allcount = $fetchresult['cntrows'];
            // echo "$allcount";
            $eventsql = $conn->query('select * from event a,topic b where lower(a.event_name) = lower(b.topic)');
            // $eventsql = "select * from event a,topic b where lower(a.event_name) = lower(b.topic)";
            if($eventsql->num_rows > 0){
                while($row = $eventsql->fetch_assoc()){
                  if($row['event_name'] == $topic){
                    // echo "$row[topic]";
                  }else {
                  ?>
                  <div class=" col-lg-5">
                <input type="number" name="qno" class="form-control" placeholder="Enter the number of questions" min="1" max="<?php echo "$allcount" ?>">
                  </div>
                  <?php
                  }
             ?>
            <div class=" col-lg-5">
          <input type="submit" name="submit" class="btn btn-lg btn-primary" value="Take Quiz">
            </div>
        </form>
        </div>
        <br>
          <!-- <a href="question.php"><img src="<?php echo $imageURL; ?>" width="200px" height="200px" alt="" /></a> -->
      </div>
        <?php
      }
    }
      }
        }else{ ?>
          <p>No image(s) found...</p>
        <?php } ?>
      </div>
    </div>
  </body>
</html>
