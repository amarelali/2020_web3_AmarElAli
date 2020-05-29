<html>
<head>
<title>My Recipes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</head>
<body>
<!-- <header> -->
    <!-- <nav> -->
    <div class="container-fliud">
        <div class="row header">
            <div class="col-12">
            <div class="col-6" >
            <img class="logo" src="img/MyRecipesLogo.jpg" />
            </div>
            <div class="col-6" style="display:block;">
            <!-- <ul class="unorderList" style="float:right">
                <li><a href="#">Hello</a></li>
                <li><a href="#">Hello</a></li>
                <li><a href="#">Hello</a></li>
                <li><a href="#">Hello</a></li>
            </ul>
            </div> -->
            </div>
        </div>
    </div>
    <!-- </nav> -->
<!-- </header> -->
<!-----------------------------------Login-------------------->
<!-- <div style="background-image:url('img/MyRecipesBackground.jpg');background-repeat:no-repeat;background-size: cover;width:100%;height:80%">
<span style="color:white">hello</span>
</div> -->
<div style="height:80%;width:100%;position:relative;">
<img src='img/MyRecipesBackground2.jpg' width="100%"/>
</div>
<div class="container" style="position:absolute;top:35%;left:36%">
<div class="row">
            <div class="col-lg-4" style="max-width:340px;">
              <div class="card text-center card-form" style="background-color:#CEDBEE !important;">
                <div class="card-body">
                  <h5>Welcome to My Recipes</h5>
                  <p style="font-size:14px;">
                        sign up to my recipes and follow our delicious food 
                 </p>
<form action="CreateAccount.php" method="POST" onsubmit="return checkForm()">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-sm" id="input1" placeholder="First Name"  />
                    </div>
					<div class="form-group">
                      <input type="text" class="form-control form-control-sm" id="input2" placeholder="Last Name"  />
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-sm" id="inputEmail" placeholder="Email"  />
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-sm" id="input3" placeholder="Password"  />
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-sm" id="input4" placeholder="Confirm Password"  />
                    </div>
                    <input type="submit" value="Submit" class="btn btn-outline-light btn-block btn-sm" style="color: grey;">
					<input type="reset" value="Reset" class="btn btn-outline-light btn-block btn-sm" style="color: grey;">
                  </form>
                </div>
              </div>
            </div>
            </div>
        </div>
</body>
<script>
$('.carousel').carousel();
</script>
</html>