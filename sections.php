<?php
Include("connect.php");
Include("files.php");
include("header.php");
include("Menu.php");
?>
<title>Global Recipes</title>
<style>
a ,a:hover{
    text-decoration:none;
    height:100px;
    color:white;
}
</style>
<?php $section = $_GET['sectionId']?>
<div class="container-fluid" >
    <div id="categ" class="row" style="overflow-x: hidden;">   
          
    </div>
</div>



<script>
<?php 
$id = htmlspecialchars($_GET['sectionId']);
?>
var id=<?php echo $id ?>;
console.log(id);

$(function(){
    $.ajax({
        url:"sections_Json.php",
        success:function(data){
            var myJson=JSON.parse(data);
            console.log("my json : \n"+myJson);
            for(x in myJson){
                
                if (id == myJson[x].SectionId){
                    $('#categ').append('<div  class="col-12 col-md-5 col-lg-4 mx-auto" style="padding:20px"><div style="color: #f8f9fa;text-align: center;border-radius: 11px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: #9ab8b7;padding: 36px;height: 116px;font-size: 25px;"><a href="Items.php?categorieName='+myJson[x].categName+'" > '+ myJson[x].categName +'</a> </div></div>');
                   
                }
            }
             
        }
    });
});

</script>