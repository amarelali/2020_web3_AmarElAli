
<!-------------------------------->
<?php
include("header.php");
include("files.php");
include("connect.php");
include("Menu.php");

?>
<title>Items</title>
<?php $categ = $_GET["categorieName"]; ?>
<div class="container-fluid">
    <div class="row" style="margin:0px 10px">
    <?php 
    $sq="SELECT * FROM `items` i inner join `categories` c on c.categId = i.CategorieId WHERE categName='$categ'";
     $result=mysqli_query($connect,$sq);
    while($row= mysqli_fetch_assoc($result)){?>
            <div class="col-12 col-md-4 col-lg-3 mx-auto" style="max-width: 18rem;margin-top:10px;min-height:276.672px;min-width:258px;" href="Recipes.php">
                <div class="card" style="width:100%;border-radius: 10px;position:relative">
                    <a href="Recipes.php?ItemName=<?php echo $row['ItemName']?>&ItemId=<?php echo $row["itemsId"]?>">
                        <img class="card-img-top" src="img/<?php echo $row['ItemImages'] ?>" alt="Card image cap" style="border-radius: 10px 10px 0px 0px;height:171.278px !important">
                    </a>
                    <a href="Recipes.php?ItemName=<?php echo $row['ItemName']?>&ItemId=<?php echo $row['itemsId']?>" class="card-body" style="text-decoration: none;color: black;padding:10px">
                        <h6 class="card-title" style="font-size:16px;height:50px !important;width: 141px !important;"><?php echo $row['ItemName'] ?></h6>

                    </a>
                    <div style="position:absolute;top: 185px;left: 207px;">
                    
                    <form name="myForm">
                    <?php 
                    $itemId = $row["itemsId"];
                        $queryCheck="SELECT * FROM favoriterecipes WHERE itemsId = $itemId";
                        $resultCheck=mysqli_query($connect,$queryCheck);
                        if(mysqli_fetch_assoc($resultCheck)>0){
                    ?>
                        <i id="<?php echo $row['itemsId']?>" class="fa fa-heart fa-2x" aria-hidden="true" style="color:#db2a2a" data-categorie="<?php echo $categ ?>" ></i>
                    </form>
                    <?php 
                        }else{?>
                         <i id="<?php echo $row['itemsId']?>" class="fa fa-heart-o fa-2x" aria-hidden="true" style="color:#db2a2a" data-categorie="<?php echo $categ ?>" ></i>
                   <?php }
                    ?>
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

<script>
$(document).ready(function(){
    var res;
    function InsertFav(id,categ){
        document.forms['myForm'].action="InsertData.php?id="+id+"&categ="+categ;
        document.forms['myForm'].submit();
        console.log("InsertData.php?id="+id+"&categ="+categ);
        window.location.href="InsertData.php?id="+id+"&categ="+categ;
    }
    function DeleteFav(id,categ){
        document.forms['myForm'].action="DeleteData.php?id="+id+"&categ="+categ;
        document.forms['myForm'].submit();
        console.log("DeleteData.php?id="+id+"&categ="+categ);
        window.location.href="InsertData.php?id="+id+"&categ="+categ;

    }
  $('.fa').click(function(){ 
    $(this).toggleClass('fa-heart-o fa-heart');
    if($(this).hasClass('fa-heart-o')){
        var id=$(this).attr('id');
       var categ = $(this).attr('data-categorie');
       DeleteFav(id,categ);
    console.log(id+"-"+categ);

    }

    if($(this).hasClass('fa-heart')){
        var id = $(this).attr('id');
        var categ = $(this).attr('data-categorie');

        console.log(id+"-"+categ);


        InsertFav(id,categ);

  
    }
    });
    
   
  });
  </script>

