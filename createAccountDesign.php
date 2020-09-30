<html>
<head>
<title>My Recipes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/index.css" />

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</head>
<body>
 <?php
  include("files.php");
 include("header.php");
 ?>
 <style>
.formStyle,#menuBar{
  display:none;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

</style>



<div class="container" id="createAccount" style="position:absolute;top: 13%;">
    <div class="row">
              <div class="col-md-5" style="max-width:340px !important;">
                <div class="card text-center card-form" style="background-color:#8eb9ba  !important;">
                  <div class="card-body" style="padding-bottom: 0px;">
                    <h5>Welcome to My Recipes</h4>
                    <p style="font-size:15px;">
                          Sign up to my recipes and follow our delicious food 
                   </p>
                   <?php if (isset($_GET['error'])) { ?>
     		            <p class="error"><?php echo $_GET['error']; ?></p>
     	           <?php } ?>
                    <form action="createAccount.php" method="POST" onsubmit="return checkForm()">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-sm" id="input1" name="firstName" placeholder="First Name"  />
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-sm" id="input2" name="lastName" placeholder="Last Name"  />
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control form-control-sm" id="inputEmail" name="email" placeholder="Email"  />
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-sm" id="input3" name="password" placeholder="Password"  />
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-sm" id="input4" name="repassword" placeholder="Confirm Password"  />
                      </div>
                      <input type="submit" value="Submit" class="btn btn-outline-light btn-block btn-sm" style="height: 28px !important;" >
                      <input type="reset" value="Reset" class="btn btn-outline-light btn-block btn-sm" style="height: 28px !important;" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script>
</script>
</html>