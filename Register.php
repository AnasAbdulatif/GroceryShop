<?php
session_start();
error_reporting(0);
  $cusName = $_GET["cusName"];
  $cusEmail = $_GET["cusEmail"];
  $cusPassword = $_GET["cusPassword"];
  $cusPhone = $_GET["cusPhone"];
  $cusAddress = $_GET["cusAddress"];
  $cusGender = $_GET["cusGender"];
  
require('dbConnect.php');
$sql = "INSERT INTO customer (cusName,cusEmail,cusPassword,cusPhone,cusAddress,cusGender)
VALUES ('$cusName','$cusEmail','$cusPassword','$cusPhone','$cusAddress','$cusGender')";

if ($conn->query($sql) === TRUE) {
  echo ""; 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
////////////////////////validate/////////////

if(isset($_GET['Submit'])){


if(empty($cusName)){
  echo "<script type='text/javascript'>alert('u have to enter name');</script>";
}
else{
  if(!preg_match('/^[a-zA-Z\s]+$/',$cusName))
  echo "<script type='text/javascript'>alert('name shoudnt have spaces or unauthorized characters');</script>";


}
if(empty($cusEmail)){
  echo "<script type='text/javascript'>alert('u have to enter an email');</script>";
}
else{ 
if(!filter_var($cusEmail,FILTER_VALIDATE_EMAIL))
echo "<script type='text/javascript'>alert(' email is not valid');</script>";

}
if(empty($cusPassword)){
  echo "<script type='text/javascript'>alert('u have to enter a password');</script>";
}
else{
  if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/',$cusPassword))
  echo "<script type='text/javascript'>alert(' password should meet the requierments');</script>";

}
if(empty($cusPhone)){
  echo "<script type='text/javascript'>alert('u have to enter a phone');</script>";
}
else{
  if (!ctype_digit($cusPhone))
  echo "<script type='text/javascript'>alert('phone number should be numbers only');</script>";

}
if(empty($cusAddress)){
  echo "<script type='text/javascript'>alert('u have to enter an address');</script>";
}
if(empty($cusGender)){
  echo "<script type='text/javascript'>alert('u have to enter a gender');</script>";
}

header('Location: HomePage.php');

}
////////////////////////validate/////////////

$conn->close();

?>
<!DOCTYPE html>
<html>

<head>

  <link rel="icon" href="ico.jpg" type="image/gif" sizes="128x128">
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="css/anas.css">


</head>

<body 
style="background-image: url(img/backgroundreg.jpg);
background-position: center center;
background-size: cover;
height: 100vh;
background-repeat: no-repeat;">

<?php include('templates/headerUser.php'); ?>

  <form class="form" name="formSubmit" action="Register.php" method="get"  onsubmit="return bigCheck();">
    

  
    <script>
  
    </script>
    


    <div class="containerL">




      <div class="sign-in">
        




          <!-- Form Name -->

          <h3>Sign Up</h3>

          <!-- Text input-->
          <div class="form-group">
            <label class="reg-text" for="Name">Name</label>
            <div class="reg-box">
            <p>Suggestions: <span id="txtHint"></span></p>

              <input id="Name" name="cusName" type="text" placeholder="Name" class="form-control-input" onclick="showHint(this.value)" onkeyup="showHint(this.value)" >

            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="reg-text" for="Email">Email</label>
            <div class="reg-box">
              <input id="Email" name="cusEmail" type="email" placeholder="Email" class="form-control-input" >

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="reg-text" for="phone">Phone Number</label>
            <div class="reg-box">
              <input id="phone" name="cusPhone" type="number" placeholder="01060072052" class="form-control-input"
                >

            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="reg-text" for="Password">Password </label>
            <div class="reg-box">
              <input id="password" name="cusPassword" type="password" 
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                placeholder="**********" class="form-control-input">

            </div>
          </div>
          <div id="message">

            <p id="strong" class="invalid">Password requirments</p>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="reg-text" for="repassword">re-Password </label>
            <div class="reg-box">
              <input id="repassword" name="repassword" type="password" onclick="checkPasswordMatchjs()"  onkeyup="checkPasswordMatchjs()" 
                placeholder="********" class="form-control-input" >

            </div>
          </div>

          <div id="remessage">

            <p id="same" class="invalid">Password matched</p>
          </div>
          <!-- Button Drop Down -->
          <div class="form-group">
            <label class="reg-text" for="Address">Address</label>

            <div class="input-group">

              <div class="reg-box">
                <div class="custom-select" style="width:200px;">
                  <div class="box">
                    <select name ="cusAddress">
                      <option  value="" selected disabled hidden>select a city</option>

                      <option value="alshrouk" > alshrouk</option>
                      <option value="nasr city">nasr city</option>
                      <option value="madity">madity</option>

                    </select>
                  </div>
                </div>


                </button>


              </div>
            </div>


            <!-- Multiple Radios -->
            <div class="form-group">
              <label class="reg-text" for="Gender">Gender</label>
              <div class="gender-space"></div>

              <div class="radio">

                <label for="male">
                  <input type="radio" name="cusGender" id="gender" value="Male" checked="checked">
                  Male
                </label>


                <label for="Female">
                  <input type="radio" name="cusGender" id="gender" value="Female">
                  Female
                </label>
              </div>


              <div class="gender-space"></div>
              <!-- Multiple Checkboxes (inline) -->
              <div class="">
                <label class="reg-text" for="Agree"></label>

                <label class="checkbox-inline" for="Agree-0">
                  <input type="checkbox" name="checkboxx"  id="Agree-0"
                    value="Agree">
                  Agree terms &amp; conditions
                </label>

              </div>
            </div>

            <!-- Button -->
            <div class="">
              <label class="reg-text" for="Submit"></label>

              <button id="Submit" name="Submit" class="submit-button" type="submit" value="submit">Submit</button>
            </div>
          </div>


  </form>

  
  <script src="jquery-3.6.0.min.js"></script>
  <script src="js/anasMain.js"></script>



</body>


</html>
