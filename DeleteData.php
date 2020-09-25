
<?php
include("connect.php");

$id=$_GET['id'];    
echo $id ;
$qFavRemove="DELETE FROM `favoriterecipes` WHERE `itemsId` = $id";
$resultFavRemove=mysqli_query($connect,$qFavRemove);
if($resultFavRemove){
echo "console.log('item deleted to fav liste');";
}else{
echo "console.log('item doesn't deleted to fav liste');";
}
 //header('location:items.php?id='.$id);
?>