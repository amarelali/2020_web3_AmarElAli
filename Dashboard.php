<title>Dashboard</title>
<?php
include('connect.php');
include('header.php');
include('files.php');
include('Menu.php');
session_start();
if((time() - @$_SESSION['Created']) < 60000){

?>
 <html>
  <head>
  <style>
  #piechart , #piechartt{
    padding: 10px;
  }
  </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Month', 'Total claims'],

<?php 
$userId=$_SESSION['id'];
$arrayN1=array();
$q="SELECT  c.categName  FROM `items` m INNER JOIN `favoriterecipes`f on m.itemsId= f.itemsFavId INNER JOIN categories c on c.categId = m.CategorieId WHERE f.userFavId=$userId";
$res=mysqli_query($connect,$q);
while($rows=mysqli_fetch_assoc($res)){
$categorieName =$rows['categName'];


$q2="SELECT DISTINCT c.categName, count(*) as number FROM `items` m INNER JOIN `favoriterecipes`f on m.itemsId= f.itemsFavId INNER JOIN categories c on c.categId = m.CategorieId WHERE f.userFavId=$userId And c.categName ='$categorieName'";
$res2=mysqli_query($connect,$q2);
while($data=mysqli_fetch_assoc($res2)){

    array_push($arrayN1, $data["categName"]." - ".$data['number']);

}
 }

 $arrayEnsembleN1=array_unique($arrayN1);

 foreach($arrayEnsembleN1 as $item) {
    $new_array=array();
    $new_array=explode("-",$item);
    
    echo "['".$new_array[0]."', ".$new_array[1]."],"; }?>
          
 
         ]);

        var options = {
            width: 400,
            height: 240,
            is3D: true,
            title: 'Categories of recipes your are interested in'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
      
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Month', 'Total claims'],

<?php 
$userId=$_SESSION['id'];

$arrayN2=array();
$q="SELECT c.categName ,c.SectionId,s.Name FROM `items` m INNER JOIN `favoriterecipes`f on m.itemsId= f.itemsFavId INNER JOIN categories c on c.categId = m.CategorieId Inner Join `section` s on s.sectionId=c.SectionId WHERE f.userFavId=$userId";
$res=mysqli_query($connect,$q);
while($rows=mysqli_fetch_assoc($res)){
$section =$rows['Name'];

$q2="SELECT DISTINCT s.Name, count(*) as number FROM `items` m INNER JOIN `favoriterecipes`f on m.itemsId= f.itemsFavId Inner Join `categories` c on c.categId = m.CategorieId Inner Join `section` s on s.sectionId=c.SectionId WHERE f.userFavId=$userId And s.Name ='$section'";
$res2=mysqli_query($connect,$q2);
while($data=mysqli_fetch_assoc($res2)){

    array_push($arrayN2, $data["Name"]." - ".$data['number']);

}
 }

 $arrayEnsembleN1=array_unique($arrayN2);

 foreach($arrayEnsembleN1 as $item) {
    $new_array=array();
    $new_array=explode("-",$item);
    
    echo "['".$new_array[0]."', ".$new_array[1]."],"; }?>
          
 
         ]);

        var options = {
            width: 400,
            height: 240,
            is3D: true,
            title: 'Type of recipes your are interested in'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechartt'));

        chart.draw(data, options);
      }
      
    </script>
  </head>
  <body>
    <div class="col-12 mx-auto" id="piechart" style="overflow-x: hidden;" ></div>
    <div class="col-12 mx-auto" id="piechartt" style="overflow-x: hidden;" ></div>

  </body>
</html>
<?php 

mysqli_free_result($res);
mysqli_close($connect);
?>
<?php }else{?>
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