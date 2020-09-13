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
    <?php     
        $sql = "SELECT Name FROM `categories` WHERE `SectionId`=1";
        $result = mysqli_query($connect, $sql); 
        while ($row = mysqli_fetch_assoc($result)) { 
            foreach ($row as $field => $value) { ?>    
          <form id="search" method='post' action='Items.php?categorieName=<?php echo $value ?>' style="margin:auto"><div class='row' style='height:100%'>
            <?php }
            }
            ?>
          <?php     
        $sql = "SELECT Name FROM `categories` WHERE `SectionId`=2";
        $result = mysqli_query($connect, $sql); 
        while ($row = mysqli_fetch_assoc($result)) { 
            foreach ($row as $field => $value) { ?>
     <a href="#" onclick="document.getElementById('search').submit();"  class="col-10 col-md-3" 
     style="position:relative;margin:30px;color: #f8f9fa;border-radius: 34px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: #9ab8b7;" >
     <span style="position:absolute;top: 30px;left: 60px;font-size: 24px;font-weight: 500;"><?php echo $value ?></span> </a>

       <?php   }   
        } 
        mysqli_free_result($result);//
        mysqli_close($connect);
        ?>
     </div>
    </form>
</div>