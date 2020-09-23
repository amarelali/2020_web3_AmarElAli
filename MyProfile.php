<title>My Profile</title>
<?php
session_start();
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
if((time() - @$_SESSION['Created']) < 60000){
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
                        <input type="text" class="form-control form-control-sm" name="name" value="<?php echo $_SESSION['name'] ?>" readonly/>
                      </div>
                      <div class="form-group margin">
                      <span style="float:left">Email:</span>
                        <input type="email" class="form-control form-control-sm"  name="email" value="<?php echo $_SESSION['email'] ?>" readonly/>
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
<?php
}else{?>

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