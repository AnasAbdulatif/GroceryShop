
<?php
session_start();
error_reporting(0); 
require('dbConnect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Categories</title>
    
    <link rel="stylesheet" href="css/mohamed.css">

</head>

<body>

<?php


 
 
 include('templates/headerUser.php');

  ?>


    
    <form class="form" name="formSubmit" action="product.php" method="get"  onsubmit="">

    <div class="background"></div>

    <div class="categoriesContainer">
        <h1>Product Categories</h1>
        
<
        <div class="vegetablesBox" id="box">
            <button class="vegetablesButton hover1"  name="productID" value="15"> <img src="img\vegetables.jpg"> <button class="text hover1">Vegetables</button> </button>
        </div>

        <div class="fruitsBox" id="box">
            <button class="fruitsButton hover2" name="productID" value="11"> <img src="img\fruits.jpg"> <button class="text hover2">Fruits</button> </button>
        </div>

        <div class="drinksBox"id="box">
            <button class="drinksButton hover3" name="productID" value="13"> <img src="img\drinks.jpg"> <button class="text hover3">Drinks</button> </button>
        </div>

        <div class="bakedBox"id="box">
            <button class="bakedButton hover4" name="productID" value="14"> <img src="img\baked.jpg"> <button class="text hover4">Baked</button> </button>
        </div>

        <div class="toolsBox"id="box">
            <button class="toolsButton hover5" name="productID" value="2"> <img src="img\tools.jpg" > <button class="text hover5">Tools</button> </button>
        </div>


    </div>

</form>

  
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/mohamedCategoriesScript.js"></script>
</body>
</html>