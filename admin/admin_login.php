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
                                <form role="form" method="POST" action="alog.php">
                                  <div class="form-group input-group centera">
                                    <label >Sign In</label>
                                     </div>
                                     <label for="username">UserName</label>
                                       <div class="form-group input-group">
                                         <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                         <input type="text" class="form-control" name="user" placeholder="username" required/>
                                     </div>
                                         <p class="help-block">Enter your email or firstname as username</p>
                                        <label for="password">Password</label>
                                          <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="pass" placeholder="Your Password" required/>
                                        </div>
                                     <div class="form-group input-group" style="float: right; margin-top: 20px;">
                                       <input type="submit" class="btn btn-lg btn-primary" name="submitl" placeholder="LOGIN" value="LOGIN" />
                                   </div>
                                   <hr />

                                    </form>
                                    Not register ? <a href="admin_reg.php" >click here </a>
                            </div>

                        </div>


        </div>
    <!-- </div> -->

</body>
</html>
