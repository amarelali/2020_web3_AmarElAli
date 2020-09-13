<?php
session_start();
include('connect.php');
$id=$_SESSION['id'];
$cp=$_POST['currentPassword'];
$np=$_POST['newPassword'];
$rtp=$_POST['retypePassword'];
echo $cp;
echo"<br><br>";
$query = "SELECT `Password` FROM `users` WHERE `userId`='".$_SESSION['id']."'";
$result =mysqli_query($connect,$query);
while($rows = mysqli_fetch_assoc($result)){
    if($cp != ""){
    if(!password_verify($cp,$rows["Password"])){
        header("location:MyProfile.php?error=Your password was incorrect");
    }else{
        if($np != $rtp){
            header("location:MyProfile.php?error=retyping password is incorrect");
        }else{
        $encrypass=password_hash($cp,PASSWORD_DEFAULT);
        $query_modify="UPDATE `users` SET `Password`='".$encrypass."' WHERE userId = '".$_SESSION['id']."'";
        echo $query_modify;
        echo"<br><br>";
        echo $encrypass;
        mysqli_query($connect,$query_modify);
        header("location:MyProfile.php?notify=Your Password has been successfully changed.");
        }
    }
}else{
    header("location:MyProfile.php?error=Your Password was incorrectly typed.");
}
}
mysqli_free_result($result);//
mysqli_close($connect);
?>