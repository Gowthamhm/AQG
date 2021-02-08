<!doctype html>
<html>
    <head>
        <link href="style.css" type="text/css" rel="stylesheet">
        <?php
        include 'config.php';
            include 'error.php';

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
    <body>
    <div id="content">
        <table width="100%" id="emp_table" border="0">
            <tr class="tr_header">
                <th>S.no</th>
                <th>Name</th>
                <th>Salary</th>
            </tr>
            <?php
            // count total number of rows
            $sql = "SELECT COUNT(*) AS cntrows FROM topic";
            $result = mysqli_query($conn,$sql);
            $fetchresult = mysqli_fetch_array($result);
            $allcount = $fetchresult['cntrows'];
            // selecting rows
            $sql = "SELECT * FROM topic  ORDER BY id ASC limit $row,".$rowperpage;
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
