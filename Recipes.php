<?php
include("connect.php");
include("files.php");
include("header.php");
?>
<div class="container-fluid" style="margin-top:10px">

<div class="row">
<div class="col-12" style="margin-top:10px;align:center">
<h1><u> Skilled Chicken and mushroom sauce </u></h1>
</div>
<div class="col-12">
<img src="img/SkilledChicken.jpg" style="width: 356px;border-radius: 5px;">
</div>
</div>
<div class="row">
<div class="col-12 col-lg-6">
<h2>Ingredients</h2>

<p class="specialLineHeight">- 1 kilo chicken breast </p>
<p class="specialLineHeight">- 1 kilo chicken breast </p>
<p class="specialLineHeight">- 1 kilo chicken breast </p>
<p class="specialLineHeight">- 1 kilo chicken breast </p>
<p class="specialLineHeight">- 1 kilo chicken breast </p>
<p class="specialLineHeight">- 1 kilo chicken breast </p>

</div>

<div class="col-12 col-lg-6" style="margin-top:10px;">
<h2>How to make it</h2>
<p>

<h5>Step1</h5></br>
Leave the chicken slices at room temperature for 10 minutes (while collecting and preparing the remaining ingredients). In a shallow dish, whisk flour, 1/4 teaspoon salt and 1/4 teaspoon pepper. Heat olive oil in a 12-inch skillet over medium heat.
<h5>Step2</h5></br>
Pour both sides of each piece of chicken into the flour mixture, then put in hot oil in a skillet. Cook until golden brown, about 5 minutes.</br>
</br>
<h5>Step3</h5></br>
Stir the chicken and cook on the opposite side, until golden brown in the bottom 6 minutes.
While the chicken is tender, melt the butter in a separate skillet over medium heat, then add the mushrooms and garlic and saute until mushrooms start to soften, about 3 minutes.
</br></br>
<h5>Step4</h5></br>
Once the chicken has been cooked and removed from the pan, leave the pan over medium heat and pour 1 quarter cup of chicken broth into (chicken pan), with brown bites removed from the bottom.
</br></br>
<h5>Step5</h5></br>
Add the mushroom mixture to the broth in the pan, as well as oregano. Boil the mixture, then reduce it to a medium medium and leave it on low heat until it becomes homogeneous and becomes more dense about half, about 4 - 5 minutes.
</br></br>
<h5>Step6</h5></br>
Whisk together the remaining 1 tablespoon chicken broth with cornstarch. Pour the chicken broth mixture into the pan and simmer to boil gently, while whisking constantly for one minute.
</br></br>
<h5>Step7</h5></br>
Add the parmesan and cream and season with pepper to taste and a pinch of salt if necessary, then bring the chicken back to the pan. Garnish with parsley and serve warm mix with sauce . <!--- </div>
- - - -->
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
            console.log(myJson);
            for(x in myJson){
                
                if (id == myJson[x].Id){
                    console.log(myJson[x]);
                }
            }
             
        }
    });
});
</script>