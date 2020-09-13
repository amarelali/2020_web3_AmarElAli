<title>My Profile</title>
<?php
include("header.php");
include("files.php");
include("connect.php");
include("Menu.php");
?>
<style>
.margin{
    margin-bottom: 5px;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 10px auto;
   font-size: 11px;
}
.notify{
    background-color: #def0d8;
    color: #769671;
    padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 10px auto;
   font-size: 11px;
}
</style>
<?php
session_start();
$id=$_SESSION['id'];
$query = "SELECT * FROM `users` WHERE `userId`='".$_SESSION['id']."'";
$result =mysqli_query($connect,$query);
while($rows = mysqli_fetch_assoc($result)){
    $FN= $rows['FirstName']." ".$rows['LastName'];
    $e= $rows['Email'];
}
?>
<div class="container " style="position:absolute;top: 13%;">
    <div class="row">
              <div class="col-md-5 m-auto" style="max-width:340px !important;">
                <div class="card text-center card-form" style="background-color:#8eb9ba  !important;">
                  <div class="card-body" style="padding-bottom: 0px;">
                    <h5>My Profile </h4>
                    <?php if (isset($_GET['error'])) { ?>
     		             <p class="error"><?php echo $_GET['error']; ?></p>
     	             <?php } ?>
                      <?php if (isset($_GET['notify'])) { ?>
     		             <p class="notify"><?php echo $_GET['notify']; ?></p>
     	             <?php } ?>
                    <form method="post" action="passwordModified.php">
                      <div class="form-group margin">
                      <span style="float:left">Full Name:</span>
                        <input type="text" class="form-control form-control-sm" name="" value="<?php echo $FN ?>" readonly/>
                      </div>
                      <div class="form-group margin">
                      <span style="float:left">Email:</span>
                        <input type="email" class="form-control form-control-sm"  name="email" value="<?php echo $e ?>" readonly/>
                      </div>
                      <div class="form-group margin">
                      <span style="float:left">Current Password:</span>
                        <input type="password" class="form-control form-control-sm"  name="currentPassword" />
                      </div>
                      <div class="form-group margin">
                      <span style="float:left">New Password:</span>
                        <input type="password" class="form-control form-control-sm"  name="newPassword" />
                      </div>
                      <div class="form-group margin">
                      <span style="float:left">Retype new password:</span>
                        <input type="password" class="form-control form-control-sm" name="retypePassword"  />
                      </div>
                      <input type="submit" value="Click to modify" class="btn btn-outline-light btn-block btn-sm" style="height: 28px !important;" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
