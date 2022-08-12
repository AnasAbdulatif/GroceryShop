
<html>
 

<!DOCTYPE html>

<head>

        <link rel="stylesheet" href="css/anas.css">
<link rel="stylesheet" href="css/zyad.css">


   
</head>
    
    
<body>
       
        <?php include('templates/headerUser.php'); ?>

   
<div class = "container"> 
 <center><h1>Shopping Cart<img src = "https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG38.png" width = "40" height="40"   ></h1></center>

 
    
        <center>
            
        <table>
            <tr>
<th>product ID</th>
<th>product price</th><br>
    </tr>
    <?php
            
            
            // Connecting to Database
      require('dbConnect.php'); 
      session_start();
     error_reporting(0);
    // Variables to use
    $customerName = $_SESSION['name'];
    $customerID = $_SESSION['id'];   
    $producti=$_GET['productID'];
    $total = 0.0 ;
    // Getting the name of the logged user and print it
    echo "Here is your cart " . $customerName . "<br>";
  
     echo "<br>";
            
     

            
    
    // Calculate the total amount of the items in the cart 
    $cost_sql = "SELECT SUM(productPrice) from product , cart WHERE customerID = $customerID  and items.productID=cart.productID ";
    $resultt = $conn-> query($cost_sql);

    $total = $cost_sql ;
    $totall=$resultt;
        


            
            
            
            
            
            
                        // query to retrieve cart products

           $sql = "SELECT productID,productName,productPrice from cart and items WHERE customerID = $customerID and items.productID=cart.productID ";

    $result = $conn-> query($sql);
    
            // print all the variables in the table
    if($result-> num_rows > 0) {
        while($row = $result -> fetch_assoc())
        {
            // printing product ID and Price
         echo "<tr><td>". $row["productID"] . "</td><td>" . $row["productPrice"] . "</td></tr> <br>"; 
        }
        echo "</table>";
    }
    
    else{
        // If the table had no content 
        echo" You did not add anything to your cart";
        echo "<br>";
          echo "<br>";
    }
        
            
            
            
            function deleteFunction()
    {
    $del = mysqli_query($customerID,"delete from tblemp where id = '$customerID'"); // delete cart items for the current user if
                                                                                    // clear cart button is clicked
    }
   
 



    ?> 
            
            

  

    
            </table></center>
    
    <br>
    
    <button type="button" class = "button5">Shop Now</button>
    <a href = "Checkout.php"><button type="button" onclick = "passvalue()" class = "button5">Proceed to Checkout</button></a>
     <button type="button" class = "button5" onclick="deleteFunction()">Clear Cart</button>
   
    
    
 
    
</div>
    <br>
    <br>
    <br>
    
    <div class="before-footer">
    <?php include('templates/footer.php'); ?>
    </div>
</body>
</html>
