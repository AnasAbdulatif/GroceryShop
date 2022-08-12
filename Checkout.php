   
<?php
  session_start();
 error_reporting(0);
 require('dbConnect.php');  

 
// Checking if an input is recieved
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    // Check if that all the fields are not empty expect for Promo Code as it's not obligatory
    // and save an error message if an empty field was enterted anywhere
    
    if (empty($_POST["Name"])) {
    $nameError = "Please enter your name";
  } else {
    $Name = validate_input($_POST["Name"]);
        // Not allowing anything but letters in the name
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameError = "Please enter your name correctly";
  }
    
    
  if (empty($_POST["email"])) {
    $emailError = "Please enter your E-mail";
  } else {
    $email = validate_input($_POST["email"]);
    
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Please enter a valid email";
      
      
  }
  }
    if (empty($_POST["Address"])) {
    $addressError = "Please enter your Address";
  } else {
    $Address = validate_input($_POST["Address"]);
  }
    
    if (empty($_POST["City"])) {
    $cityError = "Please enter your City";
  } else {
    $City = validate_input($_POST["City"]);
  }
    
    
     if (empty($_POST["Zip"])) {
    $zipError = "Please enter your Zip";
  } else {
    $Zip = validate_input($_POST["Zip"]);
  }
     
      if (empty($_POST["CardNumber"])) {
    $cardNumError = "Please enter your card number";
  } else {
    $CardNumber = validate_input($_POST["CardNumber"]);
  }
    
 
    
       if (empty($_POST["ExpDate"])) {
    $expError = "Please enter your card expiration date";
  } else {
    $ExpDate = validate_input($_POST["ExpDate"]);
  }
    
          if (empty($_POST["CVV"])) {
    $cvvError = "Please enter your card CVV ";
  } else {
    $CVV = validate_input($_POST["CVV"]);
  }
    
     $PromoCode = validate_input($_POST["PromoCode"]);  // This one can be empty as it's not obligatory
    

}
}
 // Form validation using php
function validate_input($input) {
    
    // cut out spaces , tabs , backslashes and more unaccepted charachters
    // avoiding special charachters like html tags and more
  $input = trim($input);  
  $input = stripslashes($input); 
  $input = htmlspecialchars($input); 
  return $input;
}

// Making sure that the recieved fields are not empty
 






        $payment_insert = "INSERT INTO checkout (nameOnCard, customerEmail, Address, City, ZIP, cardNumber , expDate , CVV , PromoCode )
        VALUES ('$Name','$email','$Address','$City','$Zip','$CardNumber' , '$ExpDate' , '$CVV' , '$PromoCode' )";
        
    if ($conn->query($payment_insert) === TRUE) {
 
} else {
  echo "Error: " . $payment_insert . "<br>" . $conn->error;
}



?>



<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="css/anas.css">
<link rel="stylesheet" href="css/zyad.css">
    
    
     <!-- This link is only to include the cards accepted icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
    
    
<body>
 
<?php include('templates/headerUser.php'); ?>
    
<br>
<br>
<br>
 
    <div class = "SecureCheck2">
        <br>
         
     <img src = "https://i.ibb.co/MSP5JpL/Nice-Png-golden-frieza-png-1961099.png" width = "250" height = "90" >
        </div> 
<div class = "container"> 


<form name ="Check" method="POST"  action="Checkout.php" onsubmit = "">

    <center><div class = "CheckoutZ"><h3>Checkout</h3> <img src = "https://i.ibb.co/HNc5K0v/payment-method.png" width = "50" height="50"></div> </center>
    
   
    
        <br>
   <b><h2>Billing Address</h2></b>
<br>
  <label for="Name On Card">Name On Card</label><br>
  <input type="text" id="Name" name="Name" placeholder = "Your Name" ><br>
    <span class="error">* <?php echo $nameError;?></span>
    
  <label for="Email">Email</label><br>
  <input type="email" id="email" name="email" placeholder="Your Email" required><br>
     <span class="error">* <?php echo $emailError;?></span>
    
    <label for="Address">Address</label><br>
  <input type="text" id="Address" name="Address" placeholder="Your Address" required><br> 
     <span class="error">* <?php echo $addressError;?></span>
    
   <label for="City">City</label><br>
  <input type="text" id="City" name="City" placeholder="Your City" required ><br>  
     <span class="error">* <?php echo $cityError;?></span>
    
    
    <label for="Zip">Zip</label><br>
  <input type="number"  id="Zip" name="Zip" placeholder="Your Zip code " required><br>
     <span class="error">* <?php echo $zipError;?></span>
    
    
    <b><h2>Payment Info</h2></b>
    <br>
     <label for="CardNumber">CardNumber</label><br>
  <input type="number" id="CardNumber" name="CardNumber" placeholder="Your Credit Card Number"  ><br>
    
    
   
    
    <label for="Exp Date">Exp Date</label><br>
  <input type="text" id="Exp Date" name="ExpDate" placeholder="Your Card Expiration Date" required ><br> 
    <span class="error">* <?php echo $expError;?></span>
    <label for="CVV">CVV</label><br>
  <input type="number" id="CVV" name="CVV" placeholder="Your Card CVV"  ><br> 
    <span class="error">* <?php echo $cvvError;?></span>
    
     <label for="Promo Code">Promo Code (optional)</label><br>
    <input type="text" id="Promo Code" name="PromoCode" placeholder="If you have one"><br> 
    
<label for="Use later">Save this billing info for future use</label>
  <input type="checkbox" id="Use later" name="Use later" value="Use later required ">  
    <br>
    <br>
    <label for="fname">Accepted Cards</label>
    
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
    <br>
    <br>
   <button type="submit" value="Pay" class ="button4">Pay</button> 
 

</form>

</div>
    <br>
    <br>
    <br>
    
    <div class="before-footer">
    <?php include('templates/footer.php'); ?>

</body>
</html>