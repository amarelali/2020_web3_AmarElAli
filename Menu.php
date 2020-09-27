<style>
.menu a ,.menu a:hover{
    text-decoration:none;
    color:black;
    /*height:0px;*/
    height:57px;
}
.up-arrow {
  width: 100px;
  height: 100px;
  position: relative;
  overflow: hidden;
  box-shadow: 0px 3px 10px -17px rgba(0, 0, 0, 0.5);
}
.up-arrow:after {
  content: "";
  position: absolute;
  width: 20px;
  height: 20px;
  background: white;
  transform: rotate(45deg);
  top: 91px;
  left: 25px;
  box-shadow: 2px 1px 10px -2px rgba(0, 0, 0, 0.5)
}
.butns{
  height:57px;
}
</style>

<div class="container-fluid" id="popUp" style="position: absolute;top: -47px;max-width: 200px;max-height:227px;left: 4px;display:none;z-index:1000" >
<div class="row" id="#arrow">
<div class="up-arrow">
</div>
</div>
<div class="row menu" style="background-color:white;max-width:200px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 9px;">

<a href="loggedIn.php"class="col-md-12 butns" style="margin-top:1rem;color:#8abab9;"><!---->
<i class="fa fa-home fa-lg" aria-hidden="true" style="margin-right:4px"></i> Home
<hr>
</a>
<a href="MyProfile.php" class="col-md-12 butns" style="color:#8abab9;">
<i class="fa fa-user fa-lg" aria-hidden="true" style="margin-right:4px"></i>  My Profile
<hr>
</a>
<a href="LastRecipesChecked.php" class="col-md-12 butns" style="color:#8abab9;">
<i class="fa fa-history fa-lg" aria-hidden="true" style="margin-right:4px"></i> History
<hr>
</a>
<a href="yourFavorite.php" class="col-md-12 butns" style="color:#8abab9;">
<i class="fa fa-heart fa-lg" aria-hidden="true" style="margin-right:4px"></i>Your Favorite
<hr>
</a>
<a href="Dashboard.php" class="col-md-12 butns" style="color:#8abab9;">
<i class="fa fa-dashboard fa-lg" aria-hidden="true" style="margin-right:4px"></i>Dashboard
<hr>
</a>
<a href="LogOut.php" class="col-md-12 butns" style="color:#8abab9;"><!---->
<i class="fa fa-sign-out fa-lg" aria-hidden="true" style="margin-right:4px"></i>Log Out
</a>

</div>
</div>
<script>
$('#menuBar').click(function(){
$("#popUp").show();
});

$(document).on('click', function (event) {
if (event.target.closest('#menuBar') || event.target.closest('#popUp') ) { return; }
$("#popUp").hide();
});
</script>