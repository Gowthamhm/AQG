<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- BOOTSTRAP STYLES-->
    <!-- <link href="../assets/css/bootstrap.css" rel="stylesheet" /> -->
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />

    <link href="../assets/css/areg.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <nav class="navbar navbar-dark bg-dark navbar-expand-md  justify-content-between">
    <div class="container-fluid">
        <div class="navbar-collapse collapse dual-nav w-50 order-1 order-md-0">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link pl-0" href="#">ADMIN <span class="sr-only">ADMIN</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link pl-0" href="admin_home.php"> Home<span class="sr-only">Home</span></a>
                </li>
            </ul>
        </div>
        <a href="/" class="navbar-brand mx-auto d-block text-center order-0 order-md-1 w-25">Automatic Quiz Generator</a>
        <div class="navbar-collapse collapse dual-nav w-50 order-2">
            <ul class="nav navbar-nav ml-auto">
<li class="nav-item dropdown" style="list-style-type: none;font-size: 20px;margin-top: 12px;margin-right: 20px;"><p id="demo" style="color:white;"></p></li>
<li class="nav-item dropdown" style="list-style-type: none;font-size: 20px;margin-top: 12px;margin-right: 20px;color: whitesmoke;"><p><?php echo(strftime("%H:%M")); ?></p><li>
<li><a href="logout.php"><span class="fa fa-sign-out signout">SignOut</span></a> </li>
                <!-- <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-twitter"></i></a></li>
                <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-github"></i></a></li> -->
            </ul>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<script type="text/javascript">
var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();
var dt = new Time();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>
</html>
