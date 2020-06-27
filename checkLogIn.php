<?php
    include "connect.php";
    include "files.php";
$e=$_POST["email"];
$p=$_POST["password"];
//table users
$q="SELECT * FROM `users` WHERE `email` = '".$e ."'";

echo $q;

$res=mysqli_query($connect,$q);
if(mysqli_num_rows($res)>0){//hyda l kaza email iza majbur b email we7d majbura httu ==1
 //exist   
$row=mysqli_fetch_assoc($res);
if(password_verify($p,$row["Password"])){
    session_start();

    $_SESSION['id']=$row['Id'];
    $_SESSION['name']=$row['FirstName']." ".$row['LastName'];
    $_SESSION['email']=$row['Email'];
    $_SESSION['password']=$row['Password'];


    header("location:loggedIn.php");
}else{
    ?>

<?php 
}
}else{
    header("location:createAccountDesign.php");
}
mysqli_free_result($res);
mysqli_close($connect);
?> 