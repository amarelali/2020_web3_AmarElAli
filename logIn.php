<html>
<head>
<title>My Recipes</title>
<?php
include("files.php");
?>

</head>
<body>
<?php
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
.notify{
    background-color: #def0d8;
    color: #769671;
    padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 10px auto;
   font-size: 13px;
}

</style>
<!-----------------------------------Login-------------------->
 
<div class="container" id="LogIn" style="position:absolute;top: 21%;">
<div class="row">
            <div class="col-12 col-md-6 col-lg-4" >
              <div class="card text-center card-form" style="background-color:#8eb9ba !important;padding: 10px;">
                <div class="card-body" style="padding: 10px;">
                  <h4>Welcome to My Recipes</h4>
                  <p style="font-size:20px;">
                        Log in to my recipes and follow our delicious food 
                 </p>
                 <?php if (isset($_GET['error'])) { ?>
     		            <p class="error"><?php echo $_GET['error']; ?></p>
     	           <?php } ?>
                  <?php if (isset($_GET['notify'])) { ?>
     		             <p class="notify"><?php echo $_GET['notify']; ?></p>
     	             <?php } ?>
                 <form action="checkLogIn.php" method="POST" ><!--onsubmit="return checkForm()"-->
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-md" id="inputEmail" name="email" placeholder="Email"  />
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-md" id="input3" name="password" placeholder="Password"  />
                    </div>
                    <input type="submit" value="Log In" class="btn btn-outline-light btn-block btn-md" >
					<input type="reset" value="Reset" class="btn btn-outline-light btn-block btn-md" >
					<!-- <input type="reset" value="Create Account" class="btn btn-outline-light btn-block btn-md" style="color: grey;"> -->
                <!---->  <a href="createAccountDesign.php" style="color:#5f1312;margin:5px;font-size:20px;">Click to create account</a>
                <a href="ForgetPassword.php" style="margin:5px;color: #ea1c19;font-size: 16px;">Forget Password?</a>
                  </form>
                </div>
              </div>
              

            </div>
            </div>
        </div>
 
    </div>


</div> 
 

</body>
 
</html>