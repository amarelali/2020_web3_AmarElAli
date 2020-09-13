<?php
    include "connect.php";
    include "files.php";
    if (isset($_POST['email']) && isset($_POST['password'])) {

        function validate($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
    
        $email = validate($_POST['email']);
        $pass = validate($_POST['password']);
        if(empty($email) && empty($pass) ){
            header("Location: logIn.php?error=Email and Password is required");
        }else if (empty($email)) {
            header("Location: logIn.php?error=Email is required");
            exit();
        }else if(empty($pass)){
            header("Location: logIn.php?error=Password is required");
            exit();
        }else{
//table users
$q="SELECT * FROM `users` WHERE `email` = '".$email ."'";

echo $q;

$res=mysqli_query($connect,$q);
if(mysqli_num_rows($res)>0){//hyda l kaza email iza majbur b email we7d majbura httu ==1
 //exist   
$row=mysqli_fetch_assoc($res);
if(password_verify($pass,$row["Password"])){
    session_start();

    $_SESSION['id']=$row['userId'];
    $_SESSION['name']=$row['FirstName']." ".$row['LastName'];
    $_SESSION['email']=$row['Email'];
    $_SESSION['password']=$row['Password'];


    header("location:loggedIn.php");
}else{
    header("location:logIn.php?error= incorrect password.");

    ?>

<?php 
}
}else{
    header("location:logIn.php?error= account not found, you should create one.");
}
        }
    }
mysqli_free_result($res);//
mysqli_close($connect);
?> 