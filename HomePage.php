<?php 
if(isset($_GET['submit'])){
  session_start(); // Start the session
  require('dbConnect.php');
  error_reporting(0);


  $username=$_GET['username1'];
  $password=$_GET['password1'];
  
  $checkCustomer=mysqli_query($conn,"SELECT * FROM customer WHERE cusName='$username' and cusPassword='$password'");
 $checkEmployee=mysqli_query($conn,"SELECT * FROM employee WHERE empName='$username' and empPassword='$password'");

if(mysqli_num_rows($checkEmployee)>0)
{
  $emp = "SELECT * FROM employee WHERE empName='$username' and empPassword='$password'";
  $result = $conn->query($emp);
  $row = $result->fetch_assoc();
  $_SESSION['loggedIn']=1;
  $_SESSION['id']=$row["empId"];
  $_SESSION['name']=$row["empName"];
  $_SESSION['email']=$row["empEmail"];
  $_SESSION['password']=$row["empPassword"];
  $_SESSION['phone']=$row["empPhone"];
  $_SESSION['address']=$row["empAddress"];      
            header('Location: dash.php');
  

echo "hi emp";

}
else if(mysqli_num_rows($checkCustomer)>0)
{
  $cus = "SELECT * FROM customer WHERE cusName='$username' and cusPassword='$password'";
  $result = $conn->query($cus);
  $row = $result->fetch_assoc();
  $_SESSION['loggedIn']=0;
  $_SESSION['id']=$row["cusId"];
  $_SESSION['name']=$row["cusName"];
  $_SESSION['email']=$row["cusEmail"];
  $_SESSION['password']=$row["cusPassword"];
  $_SESSION['phone']=$row["cusPhone"];
  $_SESSION['address']=$row["cusAddress"];      
            header('Location: dash user.php');
  
}
else 
{
    echo "username or password is wrong";
}


  
}



  ?>
<!DOCTYPE html>
<html lang = "en">
<head> 
    <meta charset = "UTF-8">
    <title>Home Page</title>
    
    
    
    <link rel="stylesheet" href="css/zyad.css">

    
    </head> 
    
    <body>
 
 
    <?php include('templates/headerLogin.php'); ?>

        <div class =LastButton>
      <button name="submit" class = "button6" type = "submit" value = "submit">Login</button>
            </div>
            </form>
      <a href= "Cart.html">
      <img src = "https://i.ibb.co/86cNZ5Z/CartLogo.png" width = "30" height="30"   >
            </a>
    </nav>

    <div class = "Block">
    <img src = "https://i.top4top.io/p_1964x84081.jpg" class = "bg">
         
     <div class="centered"><p>username <p></div>
        <div class="below">You are one click away from all of your needs.</div>
       <button type="button" class = "button" href="Categories.html">Shop Now</button>
    </div>
        
    
      
  
    <div class="slider">
        
      <div class="slides">
     
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        
       
        <div class="slide first">
          <img src="https://i.ibb.co/cXDM1Kp/Slider-1-Edited.jpg" >
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/mJCGYG0/Slider-22.jpg" >
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/CQSXP0g/Slider-33.jpg" >
        </div>
        <div class="slide">
          <img src="https://i.ibb.co/bB493SY/Slider-4-edited.jpg" >
        </div>
   
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
       
      </div>
      
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
   
    </div>

           
        
     <script type="text/javascript">
    
    </script>
   
   <link type="button" class = "button2" href="Register.html">Join Us</button>   
        
        
        
 <div class="slider2">
        
      <div class="slides2">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio5">
        <input type="radio" name="radio-btn" id="radio6">
        <input type="radio" name="radio-btn" id="radio7">
        <input type="radio" name="radio-btn" id="radio8">
        
       
        <div class="slide2 first">
          <img src="https://i.ibb.co/CvD3Z8z/Slider-5-edited.jpg" >
        </div>
        <div class="slide2">
          <img src="https://i.ibb.co/84Z4Cz1/Slider-6-edited.jpg" >
        </div>
        <div class="slide2">
          <img src="https://i.ibb.co/BKDQgVN/Slider-7-edited.jpg" >
        </div>
        <div class="slide2">
          <img src="https://i.ibb.co/wW36vCh/Slider-8-edited.jpg" >
        </div>
     
        <div class="navigation-auto2">
          <div class="auto-btn5"></div>
          <div class="auto-btn6"></div>
          <div class="auto-btn7"></div>
          <div class="auto-btn8"></div>
        </div>
   
      </div>
     
      <div class="navigation-manual2">
        <label for="radio5" class="manual-btn2"></label>
        <label for="radio6" class="manual-btn2"></label>
        <label for="radio7" class="manual-btn2"></label>
        <label for="radio8" class="manual-btn2"></label>
      </div>
  
    </div>
   

        
    <script type="text/javascript">
    
    </script>
        
        
   <div class = "rect"></div>
         <div class = "rect2"></div>
   <button type="button" class = "button2" href="Register.html">Join Us</button>
        
    <button type="button" class = "button3" onClick="Categories.html">Shop Now</button>     
     
  
        
    <script src="jquery-3.6.0.min.js"></script>
    <script src="zyad.js"></script>
        
        
  </body>
</html>
            


        
        
        
        
        
        
        
        
        
