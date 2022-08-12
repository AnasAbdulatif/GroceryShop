<!DOCTYPE html>
<html lang="en">





<?php
 session_start();
 require('dbConnect.php');

  error_reporting(0);
  $productName = $_GET["productName"];
  $productCategory = $_GET["productCategory"];
  $productDesc = $_GET["productDesc"];
  $productAmount = $_GET["productAmount"];
  $productExpire = $_GET["productExpire"];
  $productPrice = $_GET["productPrice"];


$sql = "INSERT INTO items (productName,productCategory,productDesc,productAmount,productExpire, productPrice)
VALUES ('$productName','$productCategory','$productDesc','$productAmount','$productExpire', '$productPrice')";



if ($conn->query($sql) === TRUE) {
  echo "Success"; 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>






<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    
    <link rel="stylesheet" href="css/anas.css">
    <link rel="stylesheet" href="css/mohamed.css?v=<?php echo time(); ?>">
  
</head>

<body>
<?php include('templates/headerEmp.php'); ?>


    <form class="form" name="formSubmit" action="Add Product.php" method="get"  onsubmit="">
        <div class="addProductContainer">

            <h1>Add Product</h1>

            <div class="formControl1">
                <label class="addProductText" for="productName">Product Name</label>
                <input id="productName" name="productName" type="text" >
                <small></small>
            </div>

            <div class="formControl9">
                <label class="addProductText" for="productPrice">Price</label>
                <input id="productPrice" name="productPrice" type="number" >
                <small></small>
            </div>

            <div class="formControl2">
                <label class="addProductText" for="productCategory">Category</label>
                <select id="productCategory" name="productCategory" type="select">
                    <option value="none"></option>
                    <option value="Vegetables">Vegetables</option>
                    <option value="Fruits">Fruits</option>
                    <option value="Drinks">Drinks</option>
                    <option value="Baked">Baked</option>
                    <option value="Tools">Tools</option>
                </select>
                <small></small>
            </div>

            <div class="formControl3">
                <label class="addProductText" for="productDesc">Description</label>
                <textarea id="productDesc" name="productDesc"></textarea>
                <small></small>
            </div>

            <div class="formControl4">
                <label class="addProductText" for="productImages">Images</label>
                <input type="file" id="productImage" name="productImage">
            </div>

            <div class="formControl5">
                <label class="addProductText" for="productAmount">Amount</label>
                <input id="productAmount" name="productAmount" type="number" > 
                <select id="productAmountNumber" name="productAmountNumber" type="select">
                    <option value="none"></option>
                    <option value="kilograms">kg</option>
                    <option value="litres">ltr</option>
                    <option value="piece">Piece/Pieces</option>
                </select>
                <small></small>
            </div>

            <div class="formControl6">
                <label class="addProductText" for="productExpire">Expiration</label>
                <input id="productExpire" name="productExpire" type="text" > 
                <select id="productExpireNumber" name="productExpireNumber" type="select">
                    <option value="none"></option>
                    <option value="day">Day</option>
                    <option value="month">Month</option>
                    <option value="year">Year</option>
                </select>
            </div>

            <div class="formControl7">
                <label class="addText" for="addButton"></label>
                <button id="Submit" name="Submit" class="submit-button" type="submit" value="submit">Add Product</button>
            </div>
        </div>
        </form>

        <div class="manageProductButton">
            <label class="manageText" for="manageButton"></label>
            <button id="manage" name="manage" class="manageButton" type="submit" onclick="document.location='Manage Product.html'">Manage Product</button>
        </div>
        
        <div class="before-footer">

        <?php include('templates/footer.php'); ?>

          </div>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/mohamedAddProductScript.js"></script>
</body>
</html>