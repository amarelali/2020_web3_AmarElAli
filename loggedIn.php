<?php
session_start();
if(isset($_SESSION['name'])){
echo ("<script>console.log('Bonjour ".$_SESSION['name']."' );</script>");
}else{
    echo ("<script>console.log('Erreur' );</script>");
    header("Location:LogIn.php");
}
?>
<html>
<head>
<title>My Recipes</title>
<script src="js/Login.js"></script>
<?php 
    include("files.php");
?>
<style>
.up-arrow {
    border-color: #c7d4d6 transparent;
    border-style: solid;
    border-width: 0px 20px 20px 20px;
    height: 0px;
    width: 0px;
    background: transparent;
    margin-left: 18px;
}
a ,a:hover{
    text-decoration:none;
    color:black;
}
</style>
</head>
<body ><!--style="background-color:#EEE"-->
<?php
    include("header.php");
?> 
<div class="container">
    <div class="row" style="height:90vh"> <!--   height:100vh;width:100%;position:relative;top:20%;background-color:#EEE -->
        <div class="col-12" style="height:100%">
             <div class="row" style="height:100%">
                <div id="food" class="col-10 col-md-4 mx-auto" style="color: #f8f9fa;height: 20%;border-radius: 34px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);position: relative;margin-top: 10%;background-image: url('img/food.jpg');background-repeat: no-repeat;background-size: cover;">
                    <span style="font-weight: bold;font-size: 40px;position: absolute;top: 25%;left: 38%;text-shadow: 5px 2px 4px black;"> Food</span>
                </div>    
                <div id="healthy Food"class="col-10 col-md-4 mx-auto" style="color: #f8f9fa;height: 20%;border-radius: 34px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);position: relative;margin-top: 10%;background-image: url('img/healthyfood.jpg');background-repeat: no-repeat;background-size: cover;">
                    <span style="font-weight: bold;font-size: 40px;position: absolute;top: 25%;left: 16%;text-shadow: 5px 2px 4px black;">Healthy Food</span>
                </div>
            </div> 
        </div>
    </div>
</div>

<!-------->

<div class="container-fluid" style="position: absolute;top: 41px;" >
	<div class="row" >
        <div class="up-arrow">
        </div>
    </div>
    <div class="row" style="background-color:#c7d4d6;max-width:200px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">    
		<a href="MyProfile.php"class="col-md-12 " style="margin-top:1rem"><!---->
			My Profile
			<hr>
		</a>
		<a href="LastRecipesChecked.php" class="col-md-12" >
			Last Recipes checked
			<hr>
		</a>
		<a href="yourFavorite.php" class="col-md-12 ">
			Your Favorite
			<hr>
		</a>
		<a href="LogOut.php" class="col-md-12 " style="margin-bottom:1rem"><!---->
			Log Out
		</a>
		
	</div>
</div>

<!-------->
</body>
<script>
$("#food")
</script>
</html>