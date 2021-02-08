<?php
// Include the database configuration file
include '../config.php';
include '../session.php';
include '../error.php';
if (isset($_POST['submit'])) {
if (($_FILES['file']['name']!="")){
// Where the file is going to be stored
 $target_dir = "img/";
 $file = $_FILES['file']['name'];
 $path = pathinfo($file);
 $filename = $path['filename'];
 $ext = $path['extension'];
 $temp_name = $_FILES['file']['tmp_name'];
 $path_filename_ext = $target_dir.$filename.".".$ext;

// Check if file already exists
if (file_exists($path_filename_ext)) {
 echo "Sorry, file already exists.";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
 echo "Congratulations! File Uploaded Successfully.";
 }
}
$topic = $_POST['topic'];
echo "$topic,$filename.$ext";
$filen ="$filename.$ext";
echo "$topic,$filen";
$sqlf ="select * from topic";
$result = $conn->query($sqlf);
$check=0;
if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    if($row['topic'] == $topic){
      $check =1;
      break;
    }
  }
}
if($check == 1){
  echo "<script>alert('Already Entered')</script>";
header( "refresh:0;url=admin_home.php" );
}else {
$sql ="INSERT INTO topic(topic,topicfilename) VALUES('$topic','$filen')";
if($conn->query($sql) === TRUE){
  header("location:admin_home.php");
  }
else {
    // header("location:admin_reg.html");
  echo "inserted unsucussfully";
    }
  }
}
?>
