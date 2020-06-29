<?php
include("header.php");
include("files.php");
include("connect.php");
?>
<?php 
$sql = "SELECT * FROM items";
$result = mysqli_query($connect, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";
echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
    }
    echo "</tr>";
}
echo "</table>";
?>
<div class="container-fluid">   
    <div class="row" style="margin:0px 10px">
    <div class="col-12 col-md-4 col-lg-3 mx-auto" style="max-width: 18rem;margin-top:10px;" href="index1.php">
            <div class="card" style="width:100%;border-radius: 10px;position:relative">
                    <a href="index1.php" target="_blank">
                        <img class="card-img-top" src="img/SkilledChicken.jpg" alt="Card image cap" style="border-radius: 10px 10px 0px 0px;">
                    </a>
                    <a href="index1.php" class="card-body" style="text-decoration: none;color: black;" target="_blank">
                        <!-- <a  href="index1.php"> -->
                            <h6 class="card-title" style="font-size:16px;">Skilled chicken with mushroom sauce</h6>
                        <!-- </a> -->
                        
                    </a>
                    <div style="position:absolute;top: 292px;left: 173px;">
                        <i class="fa fa-heart-o fa-2x" aria-hidden="true" style="color:#db2a2a"></i>
                    </div>
            </div>
        </div>
    </div>
</div>
