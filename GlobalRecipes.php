<?php
Include("connect.php");
Include("files.php");
include("header.php");
include("Menu.php");
?>
<title>Global Recipes</title>
<style>
a ,a:hover{
    text-decoration:none;
    height:100px;
    color:white;
}
</style>
<div class="container-fluid" >
    <div class="row" style="overflow-x: hidden;">   
          <!-- <form id="search" method='post' action='Items.php?categorieName=<?php echo $row['categName'] ?>' style="margin:auto"> -->
          <?php     
        $sql = "SELECT categName FROM `categories` WHERE `SectionId`=1";
        $result = mysqli_query($connect, $sql); 
        while ($row = mysqli_fetch_assoc($result)) { 
            ?>
            
           <div class="col-12 col-md-5 col-lg-4 mx-auto" style="padding:20px">
           <div style="color: #f8f9fa;text-align: center;border-radius: 11px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: #9ab8b7;padding: 36px;height: 116px;font-size: 25px;">
                <a href="Items.php?categorieName=<?php echo $row['categName'] ?>" > <?php echo $row['categName'] ?> </a>
                </div>
           </div>
        
       <?php   }   
        mysqli_free_result($result);//
        mysqli_close($connect); ?>  
          <!-- </form> -->
    </div>
</div>


