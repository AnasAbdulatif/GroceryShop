
<!DOCTYPE html>
<html lang="en">

<?php

session_start();
require('dbConnect.php');
error_reporting(0);
//retrieving
$producti=$_GET['productID'];
$retrieveProduct = "SELECT * FROM items WHERE productID='$producti'";
$result = $conn->query($retrieveProduct);
$row = $result->fetch_assoc();

$p0 = $row["productID"];
$p1 = $row["productCategory"];
$p2 = $row["productDesc"];
$p3 = $row["productAmount"];
$p4 = $row["productExpire"];
$p5 = $row["productPrice"];

//deleting

$deleteProduct="DELETE FROM items WHERE productID='$producti'";
$result2=mysqli_query($conn,$deleteProduct);

//updating
//$sqlll="UPDATE items SET productPrice ='$_POST[productPriceEdit]'  WHERE productID='$producti'";  $results=mysqli_query($conn,$sqlll);

?>



<head>
    <meta charset="UTF-8">
    <title>Manage Product</title>
    <link rel="stylesheet" href="css/anas.css">
    <link rel="stylesheet" href="css/mohamed.css?v=<?php echo time(); ?>">
</head>

<body>
<?php include('templates/headerEmp.php'); ?>


    
    <form id="form" class="form" action="Manage Product.php" method="GET">
        <div class="addProductContainer">

            <h1>Manage Product</h1>
          

            <div class="formControl9">
                <label class="addProductText" for="productPrice">Price</label>
                <input id="productPrice" name="productPrice" type="number" value="<?php echo $p5; ?>">
                <small></small>
            </div>

            <div class="formControl91">
                <label class="addProductText" for="productPriceEdit">Edit</label>
                <input id="productPriceEdit" name="productPriceEdit">
                <small></small>
            </div>

            <div class="formControl2">
                <label class="addProductText" for="productCategory">Category</label>
                <select id="productCategory" name="productCategory" type="select" value="<?php echo $p1; ?>">
                    <option value="none"></option>
                    <option value="Vegetables">Vegetables</option>
                    <option value="Fruits">Fruits</option>
                    <option value="Drinks">Drinks</option>
                    <option value="Baked">Baked</option>
                    <option value="Tools">Tools</option>
                </select>
            </div>

            <div class="formControl3">
                <label class="addProductText" for="productDesc">Description</label>
                <textarea id="productDesc" name="productDesc"><?php echo $p2;?></textarea>
                <div id="error" class="error"></div>
            </div>

            <div class="formControl31">
                <label class="addProductText" for="productDescEdit">Edit</label>
                <textarea id="productDescEdit" name="productDescEdit"></textarea>
                <div id="error" class="error"></div>
            </div>

            <div class="formControl4">
                <label class="addProductText" for="productImages">Images</label>
                <input type="file" id="productImage" name="productImage">
            </div>

            <div class="formControl5">
                <label class="addProductText" for="productAmount">Amount</label>
                <input id="productAmount" name="productAmount" type="number" value="<?php echo $p3; ?>"> 
                <select id="productAmountNumber" name="productAmountNumber" type="select">
                    <option value="none"></option>
                    <option value="kilograms">kg</option>
                    <option value="litres">ltr</option>
                    <option value="piece">Piece/Pieces</option>
                </select>
            </div>

            <div class="formControl51">
                <label class="addProductText" for="productAmountEdit">Edit</label>
                <input id="productAmountEdit" name="productAmountEdit" type="number"> 
            </div>

            <div class="formControl6">
                <label class="addProductText" for="productExpire">Expiration</label>
                <input id="productExpire" name="productExpire" type="number" value="<?php echo $p4; ?>"> 
                <select id="productExpireNumber" name="productExpireNumber" type="select">
                    <option value="none"></option>
                    <option value="day">Day</option>
                    <option value="month">Month</option>
                    <option value="year">Year</option>
                </select>
            </div>

            <div class="formControl61">
                <label class="addProductText" for="productExpireEdit">Edit</label>
                <input id="productExpireEdit" name="productExpireEdit" type="number"> 
            </div>
            
            </div>

        
        </form>

        <form id="idform" class="idform" action="Manage Product.php" method="get" onsubmit="">
            <div class="formControl11">
                <label class="addProductText" for="productID">Product ID</label>
                <input id="productID" name="productID" type="number" value="<?php echo $p0; ?>">
                <div id="error" class="error"></div>
            </div>

            <div class="formControl1Button">
            <label class="checkText" for="checkButton"></label>
            <button id="check" name="submit" class="checkButton onclick" type="submit" value="submit">Check ID</button>
        </div>
    </form>

    <form id="updateform" class="updateform" action="Manage Product.php" method="POST" onsubmit="">
    <div class="formControl7">
                <label class="updateText" for="updateButton"></label>
                <button id="update" name="update" class="updateButton" type="submit" value="Update">Update Product</button>
            </div>
    </form>     



    <form id="deleteForm" class="deleteForm" action="Manage Product.php" method="get" onsubmit="">
    <div class="formControl8">
                <label class="deleteText" for="deleteButton"></label>
                <button id="delete" name="delete" class="deleteButton" type="submit" value="Delete">Delete Product</button>
            </div>
    </form>

        <div class="addProductButton">
            <label class="addText" for="addButton"></label>
            <button id="add" name="add" class="addButton" type="submit" onclick="document.location='Add Product.html'">Add Product</button>
        </div>

        
  <div class="before-footer">

  <?php include('templates/footer.php'); ?>
<div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/mohamedManageProductScript.js"></script>
</body>
</html>



