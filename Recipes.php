<?php
include("connect.php");
include("files.php");
include("header.php");
include("Menu.php");
session_start();
?>
<title>Recipe</title>
<div class="container-fluid" style="margin-top:10px">

<div class="row">
<div class="col-12" style="margin-top:10px;align:center">
<!-- <h1 id="nameItem"><u> Skilled Chicken and mushroom sauce </u></h1> -->
<h1 id="nameItem"></h1> 
</div>
<div class="col-12">
<img id="img" src="" style="width: 356px;border-radius: 5px;">
</div>
</div>
<div class="row">
<div class="col-12 col-lg-6">
<h2>Ingredients</h2>
<div id="lesIngredient">
</div>

</div>

<div class="col-12 col-lg-6" style="margin-top:10px;">
<h2>How to make it</h2>
<p id="HowToMakeIt">
</p>
</div>
</div>
<script>
<?php 
$id = htmlspecialchars($_GET['ItemId']);
?>
var id=<?php echo $id ?>;
console.log(id);

$(function(){
    $.ajax({
        url:"Recipes_Json.php",
        success:function(data){
            var myJson=JSON.parse(data);
           // console.log(myJson);
            for(x in myJson){
                
                if (id == myJson[x].itemsId){
                    $('#img').attr('src','img/'+myJson[x].Images);
                    $('#nameItem').text(myJson[x].Name);
                    $('#nameItem').css("text-decoration","underline");
                    var ingredients=myJson[x].ingredients.split('-');
                    for(i in ingredients){
                        $('#lesIngredient').append('<p class="specialLineHeight">- '+ingredients[i]+'</p>');
                    }
                    var HowToMakeIt=myJson[x].HowToMakeIt.split('\\');
                    console.log(HowToMakeIt);
                    var compteur=1;
                    for(i in HowToMakeIt){
                        
                        $('#HowToMakeIt').append('<h5>Step'+(compteur)+'</h5>'+HowToMakeIt[i]+'</br></br>');
                        compteur++;
                        console.log(HowToMakeIt[i]);
                    }
                    console.log(myJson[x]);
                }
            }
             
        }
    });
});

</script>
<!-------For History--------->
<?php 
$time=date("d/m/y").' '.date("h:i:sa");
$idSession=$_SESSION['id'];
$idByGet=$_GET['ItemId'];
$qCheck="SELECT * FROM `history` WHERE itemsId =$idByGet";
$resCheck=mysqli_query($connect,$qCheck);
if($resCheck){
while($row=mysqli_fetch_assoc($resCheck)){
  $record=$row['itemsId'];
  $qForDelete="DELETE FROM `history` where itemsId =$record";
  $deleted=mysqli_query($connect,$qForDelete);
  if($deleted){
    echo "deleted";
  }else{
    echo 'not deleted';
  }
}

}else{
  echo "error";
}
$qH="INSERT INTO `history` (`historyId`, `userId`, `itemsId`, `date`) VALUES (NULL, '$idSession', '$idByGet', '$time')";
$resH=mysqli_query($connect,$qH);
if($resH){
  echo "inserted";
}else{
  echo "ERROR ! not inserted";
}

?>