<title>My Recipes</title>
<style>
body{
  background-color:#EEE;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php

$fn=$_POST["firstName"];
$ln=$_POST["lastName"];
$e=$_POST["email"];
$p=$_POST["password"];
$rep=$_POST["repassword"];


if(empty($fn) || empty($fn) || empty($fn) || empty($fn) || $p != $rep ){
  if(empty($fn) || empty($fn) || empty($fn) || empty($fn) ){
    header("location:createAccountDesign.php?error= please fill out all fields ");
  }else if($p != $rep){
    header("location:createAccountDesign.php?error= failed to confirm password");
  }
}else{

//insert query
$encp=password_hash($p,PASSWORD_DEFAULT);
$connect=mysqli_connect('localhost','root','','web3db');
if (mysqli_connect_error()){
    echo "FAILD TO CONNECT". mysqli_connect_error();
}else{

  $vkey=md5(time().$fn);
$query="INSERT INTO `users` (`userId`, `FirstName`, `LastName`, `Email`, `Password`, `verified`, `vkey`) VALUES (NULL,'$fn', '$ln', '$e', '$encp', '0', '$vkey')"; 
$done=mysqli_query($connect,$query);
if($done){
   echo "<div class='container-fluid'>
   <div class='row' style='margin-top: 15%;text-align:center;font-weight:bold'>
       <div class='col-12'>
<p>Dear user,thank you for registering at My Recipes .<br> 
To verify your email ,please click on the link<a href='verify.php?vkey=$vkey' target='_blank'> Account verified </a>
to continue browsing the website .</p>

       </div>
<div class='col-12' style='text-align:center'>
   <img src='img/mailIcon.png'>
   </div> </div>
</div>";
}
//header("location:loggedIn.php");
}
}

mysqli_close($connect);
?>