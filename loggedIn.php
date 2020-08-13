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
a ,a:hover{
    text-decoration:none;
    color:black;
}
.up-arrow {
  width: 100px;
  height: 100px;
  position: relative;
  overflow: hidden;
  box-shadow: 0px 3px 10px -17px rgba(0, 0, 0, 0.5);
}
.up-arrow:after {
  content: "";
  position: absolute;
  width: 20px;
  height: 20px;
  background: white;
  transform: rotate(45deg);
  top: 91px;
  left: 25px;
  box-shadow: 2px 1px 10px -2px rgba(0, 0, 0, 0.5)
}
.butns{
    height:57px;
}
@media screen and (min-width: 992px){
    .categories span{
        font-size: 40px;
    }
}
@media screen and (max-width: 992px){
    .categories span{
        font-size: 33px;
    }
}
</style>
</head>
<body ><!--style="background-color:#EEE"-->
<?php
include("header.php");
include("Menu.php");
?>


<!-- -->
<div class="container">
    <div class="row" style="height:90vh"> <!--   height:100vh;width:100%;position:relative;top:20%;background-color:#EEE -->
        <div class="col-12" style="height:100%">
             <div class="row" style="height:100%">
                <a  href="GlobalRecipes.php" class="col-10 col-md-4 mx-auto categories" style="color: #f8f9fa;height: 20%;border-radius: 34px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);position: relative;margin-top: 10%;background-image: url('img/food.jpg');background-repeat: no-repeat;background-size: cover;" >
                    <span style="font-weight: bold;position: absolute;top: 25%;left: 14%;text-shadow: 5px 2px 4px black;">Global Recipes</span>
                </a>    
                <a href="HealthyRecipes.php" class="col-10 col-md-4 mx-auto categories" style="color: #f8f9fa;height: 20%;border-radius: 34px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);position: relative;margin-top: 10%;background-image: url('img/healthyfood.jpg');background-repeat: no-repeat;background-size: cover;" >
                    <span style="font-weight: bold;position: absolute;top: 25%;left: 11%;text-shadow: 5px 2px 4px black;">Healthy Recipes</span>
                </a> 
            </div> 
        </div>
    </div>
</div>

<!-------->

<!-------->
</body>
</html>