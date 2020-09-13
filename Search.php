<title>Search</title>
<?php
include("header.php");
include("files.php");
include("connect.php");
include("Menu.php");
// $searchText=$_GET['search'];
// echo $searchText; 
?>
<style>
#searchField{
display:none;
}
</style>

<div class="container-fluid">
    <div class="row" style="margin:0px 10px">
    <?php 
        $searchText = $_GET['search'];
        $q="SELECT * FROM `items` WHERE Name LIKE '%$searchText%'";
        $res=mysqli_query($connect,$q);
        if($res){
    while($row= mysqli_fetch_assoc($res)){?>
            <div class="col-12 col-md-4 col-lg-3 mx-auto" style="max-width: 18rem;margin-top:10px;min-height:276.672px;min-width:258px;" href="Recipes.php">
                <div class="card" style="width:100%;border-radius: 10px;position:relative">
                    <a href="Recipes.php?ItemName=<?php echo $row['Name']?>&ItemId=<?php echo $row['itemsId']?>">
                        <img class="card-img-top" src="img/<?php echo $row['Images'] ?>" alt="Card image cap" style="border-radius: 10px 10px 0px 0px;">
                    </a>
                    <a href="Recipes.php?ItemName=<?php echo $row['Name']?>&ItemId=<?php echo $row['itemsId']?>" class="card-body" style="text-decoration: none;color: black;padding:10px">
                        <h6 class="card-title" style="font-size:16px;height:50px !important;width: 141px !important;"><?php echo $row['Name'] ?></h6>

                    </a>
                    <div style="position:absolute;top: 185px;left: 207px;">
                        <i id="<?php echo $row['itemsId']?>" class="fa fa-heart-o fa-2x" aria-hidden="true" style="color:#db2a2a"></i>
                    </div>
                </div>
            </div>    
<?php } } 
mysqli_free_result($res);//
mysqli_close($connect);
?>
</div>
</div>
</div>
</div>