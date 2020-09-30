<title>Dashboard</title>
<?php
include('connect.php');
include('header.php');
include('files.php');
include('Menu.php');
session_start();

?>
 <html>
  <head>
  <style>
  #piechart{
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
$arrayN1=array();
$q="SELECT  c.categName  FROM `items` m INNER JOIN `favoriterecipes`f on m.itemsId= f.itemsFavId INNER JOIN categories c on c.categId = m.CategorieId WHERE f.userFavId=8";
$res=mysqli_query($connect,$q);
while($rows=mysqli_fetch_assoc($res)){
$categorieName =$rows['categName'];
$userId=$_SESSION['id'];
//;
$q2="SELECT DISTINCT c.categName, count(*) as number FROM `items` m INNER JOIN `favoriterecipes`f on m.itemsId= f.itemsFavId INNER JOIN categories c on c.categId = m.CategorieId WHERE f.userFavId=$userId And c.categName ='$categorieName'";
$res2=mysqli_query($connect,$q2);
while($data=mysqli_fetch_assoc($res2)){

    array_push($arrayN1, $data["categName"]." - ".$data['number']);

}
 }

 $arrayEnsembleN1=array_unique($arrayN1);
 $array = array();
 foreach($arrayEnsembleN1 as $item) {
    $new_array=array();
    $new_array=explode("-",$item);
    
    echo "['".$new_array[0]."', ".$new_array[1]."],"; }?>
          
 
         ]);

        var options = {
            width: 400,
            height: 240,
            is3D: true,
            title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
      
    </script>
  </head>
  <body>
    <div class="col-12 mx-auto" id="piechart" style="overflow-x: hidden;" ></div>

  </body>
</html>
<?php
     array_push($array,$new_array[0],$new_array[1]);
 ?>