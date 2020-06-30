
<!-------------------------------->
<?php
include("header.php");
include("files.php");
include("connect.php");
?>
<div class="container-fluid">
    <div class="row" style="margin:0px 10px">
    <?php 
    $sq="SELECT * FROM `items`";
    $result=mysqli_query($connect,$sq);
    while($row= mysqli_fetch_assoc($result)){?>
        <form id="search" method='post' action='Recipes.php?ItemName=<?php echo $row['Name'] ?>' style="margin:auto">
            <div class="col-12 col-md-4 col-lg-3 mx-auto" style="max-width: 18rem;margin-top:10px;min-height:276.672px;min-width:258px;" href="Recipes.php">
                <div class="card" style="width:100%;border-radius: 10px;position:relative">
                    <a href="Recipes.php" target="_blank">
                        <img class="card-img-top" src="img/<?php echo $row['Images'] ?>" alt="Card image cap" style="max-height:171.266px;border-radius: 10px 10px 0px 0px;">
                    </a>
                    <a href="Recipes.php" class="card-body" style="text-decoration: none;color: black;padding:10px" target="_blank">
<!-- <a href="index1.php"> -->
                        <h6 class="card-title" style="font-size:16px;height:50px !important;width: 141px !important;"><?php echo $row['Name'] ?></h6>
<!-- </a> -->

                    </a>
                    <div style="position:absolute;top: 185px;left: 207px;">
                        <i class="fa fa-heart-o fa-2x" aria-hidden="true" style="color:#db2a2a"></i>
                    </div>
                </div>
            </div>    
</form>
<?php }
?>
</div>
</div>





</div>
</div>