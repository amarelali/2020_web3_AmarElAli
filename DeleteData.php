
<?php
include("connect.php");

$id=$_GET['id'];  
$from=$_GET['fromPage']; 
echo $from;

$categ=$_GET['categ'];
echo $categ;

echo $id ;
$qFavRemove="DELETE FROM `favoriterecipes` WHERE `itemsFavId` = $id";
$resultFavRemove=mysqli_query($connect,$qFavRemove);
if($resultFavRemove){
echo "console.log('item deleted to fav liste');";
}else{
echo "console.log('item doesn't deleted to fav liste');";
}
if($from == "YourFavorite"){
    header('location:YourFavorite.php');
}else if($from == "Items"){

    header('location:Items.php?categorieName='.$categ);

}else if($from =="history"){
    header('location:LastRecipesChecked.php');
}
?>