<!doctype html>
<html>
    <head>
        <link href="style.css" type="text/css" rel="stylesheet">
        <title>Questions</title>
        <link href="../assets/css/font-awesome.css" rel="stylesheet" />

    <link href="../assets/css/areg.css" rel="stylesheet" />
        <?php
        include '../config.php';
        include '../session.php';
        include '../error.php';
        include 'nav.php';
// $topic = 'java';
if (isset($_POST['submitup'])) {
  $topic = $_POST['topic'];
  // echo "$topic";
}


            $rowperpage = 1;
            $row = 0;

            // Previous Button
            if(isset($_POST['but_prev'])){
                $row = $_POST['row'];
                $row -= $rowperpage;
                if( $row < 0 ){
                    $row = 0;
                }
            }

            // Next Button
            if(isset($_POST['but_next'])){
                $row = $_POST['row'];
                $allcount = $_POST['allcount'];

                $val = $row + $rowperpage;
                if( $val < $allcount ){
                    $row = $val;
                }
            }
        ?>
    </head>
 <body style="background: #EEF2F7;">
   <div class="container1 container2 container">
        <div class="">
        <h3> Update Question to <?php echo "$topic"; ?></h3>
  </div>

   <div class="">
            <?php
            // count total number of rows
            $sql = "SELECT COUNT(*) AS cntrows FROM questions where topic = '$topic' ";
            $result = mysqli_query($conn,$sql);
            $fetchresult = mysqli_fetch_array($result);
            $allcount = $fetchresult['cntrows'];
            // selecting rows
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
                <form method="POST" class="">
                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-2 col-form-label">Topic :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="colFormLabel" name="topic" value="<?php echo "$topic"; ?>" disabled>
                        <input type="hidden" name="topich" value="<?php echo "$topic"; ?>">
                        <input type="hidden" name="id" value="<?php echo "$id"; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-2 col-form-label">Question :</label>
                      <div class="col-sm-8">
                        <!-- <input type="text" class="form-control" id="colFormLabel" value="<?php echo "$topic"; ?>" disabled> -->
                        <textarea name="question" class="form-control" rows="4" cols="80" required><?php echo "$question"; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-2 col-form-label">Option 1:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="colFormLabel" name="op1" value="<?php echo "$op1";?>" required>
                      </div>
                    </div>  <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Option 2:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="colFormLabel" name="op2" value="<?php echo "$op2";?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Option 3:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="colFormLabel" name="op3" value="<?php echo "$op3";?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Option 4:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="colFormLabel" name="op4" value="<?php echo "$op4";?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Correct Answer :</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="colFormLabel" name="answer" value="<?php echo "$ans";?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Explanation :</label>
                        <div class="col-sm-8">
                          <!-- <input type="text" class="form-control" id="colFormLabel" value="<?php echo "$topic"; ?>" disabled> -->
                          <textarea name="explain" class="form-control" rows="4" cols="80" required> <?php echo "$explain"; ?></textarea>
                        </div>
                      </div>
                      <br><br> <input type="hidden" name="row" value="<?php echo $row; ?>">
                        <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
                      <div class="form-group row">
                        <div class="col-sm-4">
                          <?php if($row == 0){ }else { ?>
                    <input type="submit" class = "btn btn-outline-primary btn-lg" name="but_prev" value="Previous">
                    <?php }   ?>
                  </div>
                      <div class="col-sm-4">
                          <input type="submit" class="btn btn-outline-success btn-lg" name="submit" value="Submit" >
                        </div>
                  <div class="col-sm-4">
                    <?php if($row == $allcount -1){ }else { ?>

            <input type="submit" class="btn btn-outline-primary btn-lg"name="but_next" value="Next">
          <?php } ?>
            </div>
                      </div>
                  </form>
            <?php
                $sno ++;
            }
            ?>
    </div>
    </div>
    </body>
</html>
