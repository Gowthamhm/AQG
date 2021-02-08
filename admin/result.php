<?php
include '../config.php';
include '../session.php';
include '../error.php';
include 'nav.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADMIN</title>
    <!-- <link href="../assets/css/bootstrap.css" rel="stylesheet" /> -->

    <link href="../assets/css/font-awesome.css" rel="stylesheet" />

    <link href="../assets/css/areg.css" rel="stylesheet" />

    <!-- BOOTSTRAP STYLES-->
    <!-- <link href="../assets/css/bootstrap.css" rel="stylesheet" /> -->
    <!--CUSTOM BASIC STYLES-->
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
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
        <div class="col-md-12">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h1>Event Result</h1>
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Event Name</th>
                                            <th>Name  </th>
                                            <th>USN  </th>
                                            <th>Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php   $query ="SELECT * from result";
$resultchecke = $conn->query($query);
if ($resultchecke->num_rows > 0) {
  while($row = $resultchecke->fetch_assoc()) {
    ?>
    <tr class="success">
        <td><?php echo $row['event_name']; ?> </td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['usn']; ?></td>
        <td><?php echo $row['result']; ?></td>
    </tr>
    <?php
  }
}

 ?>



                                        <!-- <tr class="info">
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>4</td>
                                            <td>John</td>
                                            <td>Smith</td>
                                            <td>@jsmith</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>
                  </div>
        </div>
  </body>
  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="../assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="../assets/js/bootstrap.js"></script>
 <!-- METISMENU SCRIPTS -->
<script src="../assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="../assets/js/custom.js"></script>
</html>
