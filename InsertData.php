<?php
include('connect.php');
session_start();
$id=$_GET['id'];
$userId=$_SESSION['id'];
$categ = $_GET['categ'];
$from=$_GET['fromPage']; 
$textSearched=$_GET['searchtxt'];

echo $id ." ".$userId." ".$categ." ".$from;
$myQuery="INSERT INTO `favoriterecipes` (`id`, `itemsFavId`, `userFavId`) VALUES (NULL, '$id', '$userId')";
echo $myQuery;

$resultFavAdd=mysqli_query($connect,$myQuery);
if($resultFavAdd){
echo "console.log('item insert to fav liste');";
}else{
echo "console.log('item doesn't insert to fav liste');";
}
 if($from == "Items"){

    header('location:Items.php?categorieName='.$categ);

}else if($from =="history"){
    header('location:LastRecipesChecked.php');
}else if($from =="Search"){
    header('location:Search.php?search='.$textSearched);
}
 ?>