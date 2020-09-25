<?php
include('connect.php');
session_start();
$id=$_GET['id'];
$userId=$_SESSION['id'];
$myQuery="INSERT INTO `favoriterecipes` (`id`, `itemsId`, `userId`) VALUES (NULL, '$id', '$userId')";
$resultFavAdd=mysqli_query($connect,$myQuery);
if($resultFavAdd){
echo "console.log('item insert to fav liste');";
}else{
echo "console.log('item doesn't insert to fav liste');";
}
 //header('location:items.php?id='.$id);

?>