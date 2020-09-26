
<?php
$connect=mysqli_connect('localhost','root','','web3db');
if (mysqli_connect_error()){
    echo "FAILD TO CONNECT". mysqli_connect_error();
}else{
    $query = "SELECT * FROM `items` ";
    $resultJson =mysqli_query($connect,$query);
    while($rows = mysqli_fetch_assoc($resultJson)){
        
        $myData[]= $rows;
        //print_r($myData);
    }
     echo json_encode($myData,JSON_FORCE_OBJECT);
} 

?>