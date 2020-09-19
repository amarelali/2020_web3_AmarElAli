<?php
Include("connect.php");
Include("files.php");
include("header.php");
?>
<title>Healthy Recipes</title>
<style>
a ,a:hover{
    text-decoration:none;
    height:100px;
}
</style>
<div class="container-fluid" >
    <div class="row" style="overflow-x: hidden;">     
          <form id="search" method='post' action='Items.php' style="margin:auto"><div class='row' style='height:100%'>
          
          <?php     
        $sql = "SELECT categName FROM `categories` WHERE `SectionId`=2";
        $result = mysqli_query($connect, $sql); 
        while ($row = mysqli_fetch_assoc($result)) { 
           ?>
     <a href="Items.php?categorieName=<?php echo $row['categName'] ?>"  class="col-10 col-md-3" 
     style="position:relative;margin:30px;color: #f8f9fa;border-radius: 34px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: #9ab8b7;" >
     <span style="position:absolute;top: 30px;left: 60px;font-size: 24px;font-weight: 500;"><?php echo $row['categName'] ?></span> </a>

       <?php    
        } 
        mysqli_free_result($result);//
        mysqli_close($connect);
        ?>
     </div>
    </form>
</div>