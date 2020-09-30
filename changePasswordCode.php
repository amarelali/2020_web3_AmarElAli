<?php 
include("connect.php");
$email= $_GET['email'];


if(isset($_POST['myPass'])){
   $myPass= $_POST['myPass'];
   $encryptPass=password_hash($myPass,PASSWORD_DEFAULT);

   $q="UPDATE `users` SET `Password`='".$encryptPass."' WHERE Email = '$email'";
   echo $q;
   $res=mysqli_query($connect,$q);
   if($res){
       header("location:logIn.php?notify= You can log in with your new password ");
    }else{
        header("location:logIn.php?error= Something was Wrong,password doesn't change ");
   }

}

mysqli_free_result($res);
mysqli_close($connect);
?>