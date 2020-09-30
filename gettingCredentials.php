<?php
include("header.php");
include('files.php');
include('connect.php');

if(isset($_POST['myEmail'])){
    $myEmail= $_POST['myEmail'];
    echo $myEmail;
    $array = array();
    $q="SELECT * FROM `users`";
    $res=mysqli_query($connect,$q);
    while($data = mysqli_fetch_assoc($res)){
        
        array_push($array,$data['Email']);
    }
    print_r($array);
    if (in_array($myEmail,$array)){
        header("location:changePassword.php?email=".$myEmail);
    }else{
        header("location:ForgetPassword.php?error= email not found");

    }
}
mysqli_free_result($res);
mysqli_close($connect);
?>

