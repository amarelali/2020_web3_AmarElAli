
<title>My Recipes</title>
<?php
include("files.php");
include("header.php");

?>
<style>
.formStyle,#menuBar{
  display:none;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

</style>
<div class="container" style="position:absolute;top: 21%;">
<div class="row">
            <div class="col-12 col-md-6 col-lg-4" >
              <div class="card text-center card-form" style="background-color:#8eb9ba !important;padding: 10px;">
                <div class="card-body" style="padding: 10px;">
                  <h4>Getting credentials</h4>
                  <p style="font-size:19px;">
                  write your email address to confirm
                 </p>
                 <?php if (isset($_GET['error'])) { ?>
     		            <p class="error"><?php echo $_GET['error']; ?></p>
     	           <?php } ?>
                 <form action="gettingCredentials.php" method="POST" ><!--onsubmit="return checkForm()"-->
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-md" name="myEmail" placeholder="Email"  required/>
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
 
