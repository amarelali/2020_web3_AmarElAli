
<?php
$connect=mysqli_connect('localhost','root','','web3db');
if (mysqli_connect_error()){
    echo "FAILD TO CONNECT". mysqli_connect_error();
}else{
    $query = "SELECT * FROM `items` ";
    $result =mysqli_query($connect,$query);
    while($rows = mysqli_fetch_assoc($result)){
    
        $myData[]= $rows;
    }
    echo json_encode($myData,JSON_FORCE_OBJECT);
} 

?>