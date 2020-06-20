<?php
$connect=mysqli_connect('localhost','root','','web3db');
if (mysqli_connect_error()){
    echo "FAILD TO CONNECT". mysqli_connect_error();
}else{
    echo "succee";
} 
?>