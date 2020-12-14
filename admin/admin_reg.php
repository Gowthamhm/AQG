<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Registration</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href="../assets/css/areg.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
         <!-- <div class="row "> -->
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                            <div class="panel-body">
                                <form role="form" method="POST" action="areg.php">
                                  <div class="form-group input-group centera">
                                    <label >Sign Up</label>
                                     </div>
                                     <label for="password">First Name</label>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="text" class="form-control" name="fname" placeholder="First Name" required/>
                                        </div>
                                        <label for="password">Last Name</label>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="text" class="form-control" name="lname" placeholder="Last Name" required/>
                                        </div>
                                        <label for="gender">Gender</label>
  <div class="form-group">
    <select class="form-control"
            onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
            <option value="select">SELECT</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Transgender">Transgender</option>
            <option value="Prefer Not To Say">Prefer Not To Say</option>
    </select>
    <input type="hidden" name="gender" id="displayValue" onfocus="this.select()">
    <input name="idValue" id="idValue" type="hidden">
  </div>
                                        <label for="password">Phone Number</label>
                                          <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"  ></i></span>
                                            <input type="number" class="form-control" name="pno" placeholder="Phone Nummber" required/>
                                        </div>
                                        <label for="password">E-mail</label>
                                          <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"  ></i></span>
                                            <input type="email" class="form-control" name="mail" placeholder="Email" required/>
                                        </div>
                                        <label for="password">Password</label>
                                          <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="pass" placeholder="Your Password" required/>
                                        </div>
                                        <label for="password">Confirm Password</label>
                                          <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-check "  ></i></span>
                                            <input type="password" class="form-control" name="cpass" placeholder="Confirm Your Password" required/>
                                        </div>
                                     <div class="form-group input-group" style="float: right; margin-top: 20px;">
                                       <input type="submit" class="btn btn-lg btn-primary" name="submita" placeholder="Submit" />
                                   </div>
                                    </form>
                                    <hr />
                                    All ready Registered ? <a href="admin_login.php" >LogIn here </a>

                            </div>

                        </div>


        </div>
    <!-- </div> -->

</body>
</html>
