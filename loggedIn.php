<?php
session_start();
if(isset($_SESSION['name'])){
echo ("<script>console.log('Bonjour ".$_SESSION['name']." id " .$_SESSION['id']."' );</script>");
}else{
    echo ("<script>console.log('Erreur' );</script>");
    header("Location:LogIn.php");
}
?>
<html>

<head>
<title>My Recipes</title>
<script src="js/Login.js"></script>
<?php 
    include("files.php");
?>
<link rel="stylesheet" type="text/css" href="css/loggedIn.css" />
</head>

<body>
<?php
include("header.php");
include("Menu.php");
include('connect.php');
?>


<!-- -->
<div class="container">
    <div class="row" style="height:90vh">
        <div class="col-12" style="height:100%">
             <div class="row" style="height:100%">
             <?php 
                $query="SELECT * FROM `Section`";
                $result = mysqli_query($connect,$query);
                while($row = mysqli_fetch_assoc($result)){?>
 
                    <a  href="sections.php?sectionId=<?php echo $row['sectionId'] ?>" class="col-10 col-md-4 mx-auto categories" style="color: #f8f9fa;height: 20%;border-radius: 34px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);position: relative;margin-top: 10%;background-image: url('img/<?php echo $row['imgSection']?>');background-repeat: no-repeat;background-size: cover;" >
                       <span style="font-weight: bold;position: absolute;top: 25%;text-shadow: 5px 2px 4px black;"><?php echo $row['Name'] ?></span><!--left: 14%;-->
                    </a> 

               <?php }

             ?>
              
            </div> 
        </div>
    </div>
</div>

<!-------->

<!-------->
</body>



</html>
