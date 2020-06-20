<?php
$fn=$_POST["firstName"];
$ln=$_POST["lastName"];
$e=$_POST["email"];
$p=$_POST["password"];
$rep=$_POST["repassword"];


if(empty($fn) || empty($fn) || empty($fn) || empty($fn) || $p != $rep ){
    header("location:logIn.html");
}else{

//insert query
$encp=password_hash($p,PASSWORD_DEFAULT);
$db=mysqli_connect('localhost','root','','web3db');
if (mysqli_connect_error()){
    echo "FAILD TO CONNECT". mysqli_connect_error();
}else{
$query="INSERT INTO `users` (`Id`, `FirstName`, `LastName`, `Email`, `Password`) VALUES (NULL,'$fn', '$ln', '$e', '$encp')";
mysqli_query($db,$query);
}
mysqli_close();

}
?>