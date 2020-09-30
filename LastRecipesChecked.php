<title>History</title>
<?php 
include("header.php");
include("files.php");
include("connect.php");
include("Menu.php");
session_start(); 


if((time() - @$_SESSION['Created']) < 60000){
?>

<div class="container-fluid">
    <div class="row" style="margin:0px 10px">
    <?php 
    $sessionId=$_SESSION['id'];
    $q="SELECT DISTINCT c.categName, i.itemsId , i.ItemName , i.ItemImages , h.date ,h.historyId , s.Name FROM items i Inner JOIN history h on i.itemsId=h.itemsId Inner Join categories c on c.categId = i.CategorieId Inner JOIN `section` s on s.SectionId = c.SectionId WHERE userId=$sessionId ORDER BY h.historyId DESC limit 12 ";
    $res=mysqli_query($connect,$q);
    if( mysqli_num_rows($res) >0){

    while($row=mysqli_fetch_assoc($res)){
        $categ= $row['categName'];?>
    
            <div class="col-12 col-md-4 col-lg-3 mx-auto" style="max-width: 18rem;margin-top:10px;min-height:276.672px;min-width:258px;" href="Recipes.php">
                <div style="text-align: center;"><?php echo $row['date'] ?></div>
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
                        $queryCheck="SELECT * FROM favoriterecipes WHERE itemsFavId = $itemId";
                        $resultCheck=mysqli_query($connect,$queryCheck);
                        if(mysqli_fetch_assoc($resultCheck)>0){
                    ?>
                        <i id="<?php echo $row['itemsId']?>" class="fa fa-heart fa-2x heart" aria-hidden="true" style="color:#db2a2a" data-categorie="<?php echo $categ ?>" ></i>
                    <?php 
                        }else{?>
                         <i id="<?php echo $row['itemsId']?>" class="fa fa-heart-o fa-2x heart" aria-hidden="true" style="color:#db2a2a" data-categorie="<?php echo $categ ?>" ></i>
                   <?php }
                    ?>
                    </form>
                    
                    </div>
                    <div class="row" style="padding: 7px;height:56.25px !important;">
                        <div class="col-6" style="color: #8dbbba;"><?php echo $categ ?> </div>
                        <div class="col-6" style="color: #6c757d;padding: 0px;"><?php echo $row['Name']; ?> </div>
                    </div>
                </div>
            </div>    
<?php } 
    }else{?>
        <div class="container">
            <div class="row" style="margin-top: 30px;">
               <div class="col-12">
                   <div style="margin: auto;padding: 10px;text-align: center;background-color: #c4d8d9;border-radius: 12px;width: 50%;">
                         You don't browse any item yet
                        <br/>
                       <a href="loggedIn.php">Go to Home page</a>
                    </div>
                </div>
            </div>
        </div>

  <?php   }
mysqli_free_result($res);
mysqli_close($connect);

}else{?>
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
</div>
</div>





</div>
</div>
<script>
$(document).ready(function(){
    var res;
    function InsertFav(id,categ){
        document.forms['myForm'].action="InsertData.php?id="+id+"&categ="+categ+"&fromPage=history";
        document.forms['myForm'].submit();

        window.location.href="InsertData.php?id="+id+"&categ="+categ+"&fromPage=history";
    }
    function DeleteFav(id,categ){
        document.forms['myForm'].action="DeleteData.php?id="+id+"&categ="+categ+"&fromPage=history";
        document.forms['myForm'].submit();
        console.log("DeleteData.php?id="+id+"&categ="+categ);
        window.location.href="DeleteData.php?id="+id+"&categ="+categ+"&fromPage=history";

    }
  $('.heart').click(function(){ 
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