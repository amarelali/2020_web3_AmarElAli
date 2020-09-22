<title>My Favorite</title>
<?php
include("header.php");
include("files.php");
include("connect.php");
include("Menu.php");
session_start();


if((time() - @$_SESSION['Created']) < 60000){

}else{?>
<style>
.formStyle,#menuBar{
  display:none;
}

</style>
<div class="container">
<div class="row" style="margin-top: 30px;">
<div class="col-12">
<div style="margin: auto;padding: 10px;text-align: center;background-color: #c4d8d9;border-radius: 12px;width: 50%;">
 Make sure you are login or Create your account if it's the first time 
 <br/>
 <a href="logIn.php">Go to logIn page</a>
 </div>
 </div>
 </div>
 </div>

<?php } ?>