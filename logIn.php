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
                <!---->  <a href="createAccountDesign.php" style="color:#80807e;margin:5px;font-size:20px;">Click to create account</a>
                  </form>
                </div>
              </div>
              
<div class="alert alert-danger" role="alert" id="wrongPassAlert" style="position:absolute;z-index:1000;display: none;">
  <strong>Wrong Password!</strong> 
  </div>
            </div>
            </div>
        </div>
 
    </div>


</div> 
<!-- 
<div class="container" id="createAccount" style="position:absolute;top:35%;left:38%">
<div class="row">
            <div class="col-lg-6" style="max-width:450px;">
              <div class="card text-center card-form" style="background-color:#f1ae79 !important;">
                <div class="card-body">
                  <h4>Welcome to My Recipes</h4>
                  <p style="font-size:20px;">
                        Sign up to my recipes and follow our delicious food 
                 </p>
<form action="createAccount.php" method="POST" onsubmit="return checkForm()">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-md" id="input1" name="firstName" placeholder="First Name"  />
                    </div>
					<div class="form-group">
                      <input type="text" class="form-control form-control-md" id="input2" name="lastName" placeholder="Last Name"  />
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-md" id="inputEmail" name="email" placeholder="Email"  />
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-md" id="input3" name="password" placeholder="Password"  />
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-md" id="input4" name="repassword" placeholder="Confirm Password"  />
                    </div>
                    <input type="submit" value="Submit" class="btn btn-outline-light btn-block btn-md" style="color: grey;">
					<input type="reset" value="Reset" class="btn btn-outline-light btn-block btn-md" style="color: grey;">
                  </form>
                </div>
              </div>
            </div>
            </div>
        </div>


</div> -->

</body>
<script>
      $('.alert').alert();
</script>
</html>