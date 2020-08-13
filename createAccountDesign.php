<html>
<head>
<title>My Recipes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/index.css" />

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<script src="js/jquery.min.js"></script>
<script src="js/Login.js"></script>
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

</style>
<!-- <div style="width:100%;position:relative;">
<img src='img/MyRecipesBackground2.jpg' width="100%"/>
</div>-->


<div class="container" id="createAccount" style="position:absolute;top: 19%;">
  <div class="row">
              <div class="col-lg-6" style="max-width:450px;">
                <div class="card text-center card-form" style="background-color:#8eb9ba  !important;">
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
                      <input type="submit" value="Submit" class="btn btn-outline-light btn-block btn-md" >
            <input type="reset" value="Reset" class="btn btn-outline-light btn-block btn-md" >
                    </form>
                  </div>
                </div>
              </div>
              </div>
          </div>
  
  
  </div>  

</body>
<script>
</script>
</html>