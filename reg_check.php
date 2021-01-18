<?php
include 'config.php';
include 'error.php';
include 'configcms.php';
session_start();
$topic = $_SESSION['topic'];
$qno = $_SESSION['qno'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Event Quiz Login</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href="assets/css/areg.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
         <!-- <div class="row "> -->
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                            <div class="panel-body">
                                <form role="form" method="POST">
                                  <div class="form-group input-group centera">
                                    <label >Event Login</label>
                                     </div>
                                     <label for="name">Event Name</label>
                                       <div class="form-group input-group">
                                         <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                         <input type="text" class="form-control" name="topic" value="<?php echo $topic ;?>" disabled/>
                                     </div>
                                     <label for="name">Name</label>
                                       <div class="form-group input-group">
                                         <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                         <input type="text" class="form-control" name="name" placeholder="name" required/>
                                     </div>
                                         <p class="help-block">Enter your email or firstname as name</p>
                                        <label for="usn">USN</label>
                                          <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="text" class="form-control" name="usn" placeholder="usn" required/>
                                        </div>
                                     <div class="form-group input-group" style="float: right; margin-top: 20px;">
                                       <input type="submit" class="btn btn-lg btn-primary" name="submite" placeholder="LOGIN" value="LOGIN" />
                                   </div>
                                   <hr />

                                    </form>
                            </div>

                        </div>


        </div>
<?php
if(isset($_POST['submite'])){
// $topic = $_POST['topic'];
$name = strtoupper($_POST['name']);
$_SESSION['name']=$name;
$usn = strtoupper($_POST['usn']);
$_SESSION['usn']=$usn;
$count = 0;
// echo "$topic $name $usn";
// $query = "SELECT * from event_req where event_name='$topic'";
$resultcheck = "SELECT * FROM result where event_name='$topic' and name ='$name' and usn='$usn'";
$resultchecke = $conn->query($resultcheck);
if ($resultchecke->num_rows > 0) {
  while($row = $resultchecke->fetch_assoc()) {
    // echo "$row[event_name],$row[name],$row[usn]";
    if(strtoupper($topic)== strtoupper($row['event_name']) && strtoupper($name) == strtoupper($row['name']) && strtoupper($usn) == strtoupper($row['usn'])){
    //         // echo "<script>alert('You Already taken the exam you can't able to take quiz once more')</script>";
            header( "refresh:0;url=user_home.php" );
            $count = 1;
    echo "already registered";
    }
  }
}
if($count==1){

}else{
// $query = "SELECT * from event_req";
$query = "SELECT * from event_reg where event_name='$topic'";
$result = $conncms->query($query);
if ($result->num_rows > 0) {  // output data of each row
  // $no = 1;
  while($row = $result->fetch_assoc()) {
    if(strtoupper($topic)== strtoupper($row['event_name']) && strtoupper($name) == strtoupper($row['name']) && strtoupper($usn) == strtoupper($row['usn'])){
      $sql ="INSERT INTO result(event_name,name,usn) VALUES('$row[event_name]','$row[name]','$row[usn]')";
      if($conn->query($sql) === TRUE){
          // echo "<script>alert('Ready to take $topic')</script>";
    header( "refresh:0;url=instruction.php" );
        }
      else {
          // echo "<script>alert('please provide a proper information')</script>";
        header( "refresh:1;url=user_home.php" );
    }}
      // echo "<script>alert('please provide a proper information')</script>";
}
}
}
} ?>

</body>
</html>
