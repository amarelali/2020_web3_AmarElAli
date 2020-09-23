<title>Verification Account</title>
<?php
include("connect.php");
include('header.php');
include('files.php');?>
<style>
.formStyle,#menuBar{
  display:none;
}

</style>
<?php 
if(isset($_GET['vkey']) && $_GET['vkey'] !=""){
    $vkey=$_GET['vkey'];
    $q="SELECT verified,vkey FROM users WHERE verified = 0 AND vkey='$vkey' LIMIT 1";

    $resultSet =mysqli_query($connect,$q);
    if(mysqli_num_rows($resultSet)==1){
        $modifyVkey="UPDATE users set verified = 1 WHERE vkey='$vkey' LIMIT 1";
        $update=mysqli_query($connect,$modifyVkey);
        if($update){?>
      
            <div class="container">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-12">
                        <div style="margin: auto;padding: 10px;text-align: center;background-color: #c4d8d9;border-radius: 12px;width: 50%;">
                            Your account have been verified . you may now login.
                            <br/>
                            <a href="logIn.php">Go to logIn page</a>
                        </div>    
                    </div>
                </div>
            </div>
       <?php }else{
            echo mysqli_error() ;
        }
    }else{?>
       <div class="container">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-12">
                        <div style="margin: auto;padding: 10px;text-align: center;background-color: #c4d8d9;border-radius: 12px;width: 50%;">
                             This account invalid or already verified
                             <br/>
                            <a href="logIn.php">Go to logIn page</a>
                        </div>
                    </div>
                </div>
        </div> 
 
<?php }
}else{
    die('Something went wrong');
}
?>