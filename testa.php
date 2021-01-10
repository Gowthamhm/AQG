<!doctype html>
<html>
    <head>
        <link href="style.css" type="text/css" rel="stylesheet">
        <?php
        include 'config.php';
            include 'error.php';


            if (isset($_POST['submit'])) {
            $topic = $_POST['topich'];
            $id = $_POST['id'];
            // echo "$topic,$id";
            }
$topic = 'java';
            if(isset($_POST['delete'])){
              $id=$_POST['id'];
              $topic = $_POST['topich'];
              echo "$id , $topic";
              $query = "DELETE from questions where topic = '$topic' and sl_no = '$id'";
              if($conn->query($query) === TRUE){
                    echo "<script>alert('Deleted sucussfully')</script>";
                header("location:admin_home.php");
                echo "inserted sucussfully";
                }
              else {
                    echo "<script>alert('Deleted unsucussfully')</script>";
                  header("location:admin_home.php");
                  }
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
    <body  style="background: #EEF2F7;">
      <div class="container1 container2 container">
      <div class="">
      <h3> Update Question to <?php echo "$topic"; ?></h3>
</div>
    <div id="content">
            <?php
            // count total number of rows
            $sql = "SELECT COUNT(*) AS cntrows FROM questions where topic ='$topic'";
            $result = mysqli_query($conn,$sql);
            $fetchresult = mysqli_fetch_array($result);
            $allcount = $fetchresult['cntrows'];
            // selecting rows
            $sql = "SELECT * FROM questions where topic = '$topic' ORDER BY id ASC limit $row,".$rowperpage;
            $result = mysqli_query($conn,$sql);
            $sno = $row + 1;
            while($fetch = mysqli_fetch_array($result)){
                $name = $fetch['topic'];
                $salary = $fetch['topicfilename'];
                ?>
                <tr>
                    <td align='center'><?php echo $sno; ?></td>
                    <td align='center'><?php echo $name; ?></td>
                    <td align='center'><?php echo $salary; ?></td>
                </tr>
            <?php
                $sno ++;
            }
            ?>
        </table>
        <form method="post" action="">
            <div id="div_pagination">
                <input type="hidden" name="row" value="<?php echo $row; ?>">
                <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
                <input type="submit" class="button" name="but_prev" value="Previous">
                <input type="submit" class="button" name="but_next" value="Next">
            </div>
        </form>
    </div>
    </body>
</html>
