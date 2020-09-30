<title>My Favorite</title>
<?php
include("header.php");
include("files.php");
include("connect.php");
include("Menu.php");
session_start();
$userId=$_SESSION['id'];

if((time() - @$_SESSION['Created']) < 60000){?>

<div class="container-fluid">
    <div class="row" style="margin:0px 10px">
    <?php 
    $sq="SELECT * FROM `items` m INNER JOIN `favoriterecipes`f on m.itemsId= f.itemsFavId INNER JOIN categories c on c.categId = m.CategorieId  Inner JOIN `section` s on s.SectionId = c.SectionId WHERE f.userFavId=$userId";
     $result=mysqli_query($connect,$sq);
    while($row= mysqli_fetch_assoc($result)){
      $categ = $row['categName'];?>
            <div class="col-12 col-md-4 col-lg-3 mx-auto " id="item<?php echo $row["itemsId"]?>" style="max-width: 18rem;margin-top:10px;min-height:276.672px;min-width:258px;" href="Recipes.php">
                <div class="card" style="width:100%;border-radius: 10px;position:relative">
                    <a href="Recipes.php?ItemName=<?php echo $row['ItemName']?>&ItemId=<?php echo $row["itemsId"]?>">
                        <img class="card-img-top" src="img/<?php echo $row['ItemImages'] ?>" alt="Card image cap" style="border-radius: 10px 10px 0px 0px;height:171.278px !important">
                    </a>
                    <a href="Recipes.php?ItemName=<?php echo $row['ItemName']?>&ItemId=<?php echo $row['itemsId']?>" class="card-body" style="text-decoration: none;color: black;padding:10px">
                        <h6 class="card-title" style="font-size:16px;height:50px !important;width: 141px !important;"><?php echo $row['ItemName'] ?></h6>

                    </a>
                    <div style="position:absolute;top: 185px;left: 207px;">
                    
                    <form name="myFav">
                        <i id="<?php echo $row['itemsId']?>" class="fa fa-heart fa-2x heart" aria-hidden="true" style="color:#db2a2a" data-categorie="<?php echo $categ ?>" ></i>
                    </form>
                    </div>
                    <div class="row" style="padding: 7px;height:56.25px !important;">
                        <div class="col-6" style="color: #8dbbba;"><?php echo $categ ?> </div>
                        <div class="col-6" style="color: #6c757d;padding: 0px;"><?php echo $row['Name']; ?> </div>
                    </div>
                </div>
            </div>    
<?php }
mysqli_free_result($result);//
mysqli_close($connect);
?>
</div>
</div>





</div>
</div>



<?php }else{?>
<style>
.formStyle,#menuBar{
  display:none;
}

</style>
<div class="container">
<div class="row" style="margin-top: 30px;">
<div class="col-12">
<div style="margin: auto;padding: 10px;text-align: center;background-color: #c4d8d9;border-radius: 12px;width: 50%;">
 Make sure you are login or Create your account if it's the first time 
 <br/>
 <a href="logIn.php">Go to logIn page</a>
 </div>
 </div>
 </div>
 </div>

<?php } ?>

<script>
$(document).ready(function(){
    var res;

    function DeleteFav(id,categ){
        document.forms['myFav'].action="DeleteData.php?id="+id+"&categ="+categ+"&fromPage=YourFavorite";
        document.forms['myFav'].submit();
        console.log("DeleteData.php?id="+id+"&categ="+categ);
        window.location.href="DeleteData.php?id="+id+"&categ="+categ+"&fromPage=YourFavorite";

    }

  $('.heart').click(function(){ 
    $(this).toggleClass('fa-heart-o fa-heart');

    // if($(this).hasClass('fa-heart-o')){
    //    var id=$(this).attr('id');
    //    $('#item'+id).hide();
    //    DeleteFav(id);
    //  }
     if($(this).hasClass('fa-heart-o')){
        var id=$(this).attr('id');
       var categ = $(this).attr('data-categorie');
       $('#item'+id).hide();
       DeleteFav(id,categ);
    console.log(id+"-"+categ);

    }
    
   
  });
});
</script>