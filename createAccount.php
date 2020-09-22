<?php
$fn=$_POST["firstName"];
$ln=$_POST["lastName"];
$e=$_POST["email"];
$p=$_POST["password"];
$rep=$_POST["repassword"];


if(empty($fn) || empty($fn) || empty($fn) || empty($fn) || $p != $rep ){
    header("location:logIn.php");
}else{

//insert query
$encp=password_hash($p,PASSWORD_DEFAULT);
$connect=mysqli_connect('localhost','root','','web3db');
if (mysqli_connect_error()){
    echo "FAILD TO CONNECT". mysqli_connect_error();
}else{
$query="INSERT INTO `users` (`userId`, `FirstName`, `LastName`, `Email`, `Password`) VALUES (NULL,'$fn', '$ln', '$e', '$encp')";
mysqli_query($connect,$query);
header("location:loggedIn.php");
}
}

mysqli_close($connect);
?>