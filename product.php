<?php
 session_start();
 error_reporting(0);
 $userId =$_SESSION['id'];

 $userAddress =$_SESSION['address'];
$producti=$_GET['productID'];
require('dbConnect.php');


$retrieveProduct = "SELECT * FROM items WHERE productID='$producti'";
$result = $conn->query($retrieveProduct);
$row = $result->fetch_assoc();
$p0 = $row["productID"];
$p1 = $row["productCategory"];
$p2 = $row["productDesc"];
$p3 = $row["productAmount"];
$p4 = $row["productExpire"];
$p5 = $row["productPrice"];
$p6 = $row["productName"];


$sqll = "INSERT INTO cart (productID,clientID) VALUES ('$producti','3')";



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/anas.css">
  
</head>

<body>
<?php include('templates/header.php'); ?>


  <section class="product">
    <div class="containerr">
      <div class="flex">
        <div class="all_product">
          <div class="main">
            <div class="photo">
              <img src="img/not.jpg" alt="photo">
            </div>
            <div class="descraption_product">

              <h1><?php echo '<span style="font-size: 25pt ">' . $p6 . '</span>'; ?></h1>
              <div class="decs1">
              <p><span>Category:</span> <?php echo '<span style="font-size: 12pt ">' . $p1 . '</span>'; ?> </p>
              <p><span>description:</span> <?php echo '<span style="font-size: 12pt ">' . $p2 . '</span>'; ?> </p>
                <div class="rateflex">
                  <label for="rate">rate :</label>
                  <div class="stars" id="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>

              <div class="decs2">
                <h2> price :<?php echo  $p5 ?></h2>
                <p>EGP 390</p>
                <span>+ shipping from EGP 11 to 6th of October</span>
              </div>
              <div class="decs3">

              </div>
            </div>
          </div>
          

        </div>


        <aside>

          <div class="dec_one">
            <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ship to <span><?php echo $userAddress ?></span> </h4>
            <br><br>

            <h4><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order before 11 PM</h5>
           
          </div>
<br>
          <h4> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Only <?php echo $p3 ?> left in stock! </h4>
          <br><br><br>
          <h5> &nbsp;&nbsp;&nbsp;&nbsp; free shiping on friday.</h4>
          <br><br>
          <form class="form" name="productSubmit" action="cart.php" method="get"  onsubmit="">

          <button class="submit-button" type="Submit" id="Submit" name="productID"  value= "<?php echo $producti;?>">ADD TO CART</button>
        </form>
        </aside>
      </div>

    </div>
    <div class="our_product py-5">
      <div class="container ">
        <div class="items position-relative">
          <img class="w-100" src="img/mango1.jpeg" alt="">

        </div>



        <div class="items position-relative">
          <img class="w-100" src="img/mango2.jpeg" alt="">




        </div>


        <div class="items position-relative">
          <img class="w-100" src="img/mango3.jpeg" alt="">



        </div>


        <div class="items position-relative">
          <img class="w-100" src="img/mango4.jpeg" alt="">



        </div>


        <div class="items position-relative">
          <img class="w-100" src="img/mango5.jpeg" alt="">



        </div>


        <div class="items position-relative">
          <img class="w-100" src="img/mango6.jpeg" alt="">



        </div>

        <div class="clrfix"></div>

      </div>

      <div id="lightBoxContainer" class=" justify-content-center align-items-center">
        <div id="lightBoxIitem" class="d-flex  align-items-center justify-content-between position-relative">
          <i id="prev" class="fas fa-chevron-left"></i>
          <i id="close" class="fas fa-times"></i>
          <i id="next" class="fas fa-chevron-right"></i>
        </div>
      </div>
    </div>
  </section>

  
  <div class="before-footer">
  <?php include('templates/footer.php'); ?>
</div>
</body>

</html>