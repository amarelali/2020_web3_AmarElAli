<?php 
include("header.php");
include('files.php');
$email= $_GET['email'];
?>
<style>
.formStyle,#menuBar{
  display:none;
}
</style>

<div class="container" style="position:absolute;top: 21%;">
<div class="row">
            <div class="col-12 col-md-6 col-lg-4" >
              <div class="card text-center card-form" style="background-color:#8eb9ba !important;padding: 10px;">
                <div class="card-body" style="padding: 10px;">
                  <p style="font-size:19px;float: left;">
                  write your new Password
                 </p>
                 
                 <form action="changePasswordCode.php?email=<?php echo $email ?>" method="POST" ><!--onsubmit="return checkForm()"-->
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-md" name="myPass" placeholder="new password"  required/>
                    </div>
                    
                    <input type="submit" value="send credentials" class="btn btn-outline-light btn-block btn-md" >

                  </form>
                </div>
              </div>
              

            </div>
            </div>
        </div>
 
    </div>


</div> 