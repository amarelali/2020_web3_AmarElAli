
<!-------------------------------->
<?php
include("header.php");
include("files.php");
include("connect.php");
include("Menu.php");

?>
<title>Items</title>

<div class="container-fluid">
    <div class="row" style="margin:0px 10px">
    <?php 
    $sq="SELECT * FROM `items`";
    $result=mysqli_query($connect,$sq);
    while($row= mysqli_fetch_assoc($result)){?>
            <div class="col-12 col-md-4 col-lg-3 mx-auto" style="max-width: 18rem;margin-top:10px;min-height:276.672px;min-width:258px;" href="Recipes.php">
                <div class="card" style="width:100%;border-radius: 10px;position:relative">
                    <a href="Recipes.php?ItemName=<?php echo $row['Name']?>&ItemId=<?php echo $row['Id']?>">
                        <img class="card-img-top" src="img/<?php echo $row['Images'] ?>" alt="Card image cap" style="border-radius: 10px 10px 0px 0px;">
                    </a>
                    <a href="Recipes.php?ItemName=<?php echo $row['Name']?>&ItemId=<?php echo $row['Id']?>" class="card-body" style="text-decoration: none;color: black;padding:10px">
                        <h6 class="card-title" style="font-size:16px;height:50px !important;width: 141px !important;"><?php echo $row['Name'] ?></h6>

                    </a>
                    <div style="position:absolute;top: 185px;left: 207px;">
                        <i id="<?php echo $row['Id']?>" class="fa fa-heart-o fa-2x" aria-hidden="true" style="color:#db2a2a"></i>
                    </div>
                </div>
            </div>    
<?php }
?>
</div>
</div>





</div>
</div>
<script>
$(document).ready(function(){
  $(".fa").click(function(){
   // $(this).removeClass("fa-heart-o");
   // $(this).addClass("fa-heart");
   $(this).toggleClass("fa-heart-o fa-heart");
   if($(this).hasClass("fa-heart-o")){
      console.log($(this).attr('id'));
      var id=$(this).attr('id');
   <?php
   $sq="UPDATE `items` SET `isFavorite` = '0' WHERE `items`.`Id` = 2";
    mysqli_query($connect,$sq);?>
   
  }
  if($(this).hasClass("fa-heart")){
      console.log($(this).attr('id'));
      <?php
    $sq="DELETE FROM `favoriterecipes` WHERE `itemsId` = '5'";
    mysqli_query($connect,$sq);?>
  }
  });
  
 
});
</script>