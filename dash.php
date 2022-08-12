<?php session_start();
error_reporting(0);

 $userName =$_SESSION['name'];
 $userEmail =$_SESSION['email'];
 $userPhone =$_SESSION['phone'];
 $userAddress =$_SESSION['address'];
 $userId =$_SESSION['id'];
require('dbConnect.php');
$retrieveFeedback = "SELECT * FROM contact WHERE contactId='1'";
$result = $conn->query($retrieveFeedback);
$row = $result->fetch_assoc();
$n1 = $row["Name"];
$m1 = $row["Message"];
//////////////
$retrieveFeedback = "SELECT * FROM contact WHERE contactId='2'";
$result = $conn->query($retrieveFeedback);
$row = $result->fetch_assoc();
$n2 = $row["Name"];
$m2 = $row["Message"];
////////////
$retrieveFeedback = "SELECT * FROM contact WHERE contactId='3'";
$result = $conn->query($retrieveFeedback);
$row = $result->fetch_assoc();
$n3 = $row["Name"];
$m3 = $row["Message"];
////////////
$retrieveFeedback = "SELECT * FROM contact WHERE contactId='4'";
$result = $conn->query($retrieveFeedback);
$row = $result->fetch_assoc();
$n4 = $row["Name"];
$m4 = $row["Message"];
?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="css/anas.css">
  <link rel="stylesheet" href="css/all.min.css">

</head>




<body class="dash-body">
<?php include('templates/headerEmp.php'); ?>




  <div class="container">
    <h1 class="dashbordH1"> Admin Dashboard  </h1>
    <div class="containerAll">
      <aside>
        <div class="dash-feedback-border">
        <h3>Employee Info</h3>
        <p class="txt"><?php echo "ID :". $userId; ?></p> 
        <p class="txt"><?php echo "Username :". $userName; ?></p>
        <p class="txt"><?php echo "Email :". $userEmail; ?></p>
        <p class="txt"><?php echo "Phone :". $userPhone; ?></p>
        <p class="txt"><?php echo "Address :". $userAddress; ?></p>
        </div>
        <div class="dash-user-border">
          <h3>Feedback</h3>
          <p  class="txt"><?php echo "Username:". $n1  ?> </p>
          <p  class="txt"><?php echo "comment:" . $m1   ?> </p>

          <hr>
          <p  class="txt"><?php echo "Username:". $n2  ?> </p>
          <p  class="txt"><?php echo "comment:" . $m2   ?> </p>
          <hr>
          <p  class="txt"><?php echo "Username:". $n3  ?> </p>
          <p  class="txt"><?php echo "comment:" . $m3   ?> </p>
          <hr>
          <p  class="txt"><?php echo "Username:". $n4  ?> </p>
          <p  class="txt"><?php echo "comment:" . $m4   ?> </p>
          <hr>
        </div>

      </aside>




      <div class="matching">
        <div class="stats-over">
          <h3>Stats</h3>

          <div class="items-over-view">
            <div class="overview-item overview-item--c1 ">


              <div class="icon">

                <i class="fas fa-dollar-sign"></i>
              </div>

              <div class="card-text">
                <p>2076</p>
                <span>Earned dollar</span>
              </div>

            </div>
            <div class="overview-item overview-item--c2">


              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>

              <div class="card-text">
                <p>500</p>
                <span>Items solid</span>
              </div>

            </div>
            <div class="overview-item overview-item--c3">


              <div class="icon">
                <i class="far fa-comment"></i>
              </div>

              <div class="card-text">
                <p>4</p>
                <span>Feedback</span>
              </div>

            </div>

          </div>
        </div>

        <div class="board">
          <h3>Conttrol Panel</h3>
          <div class="all-property">
            <div class="container1">
              <div class="property-card" id="card" onclick="document.location='Add Product.php'">

                <div class="property-image p1 "  >

                </div></a>
                <div class="property-description">
                  <h5> Add Product </h5>
                  <p>admin add products to website
                  </p>
                </div>
                <a >
                  <div class="property-social-icons">
                    <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                  </div>
                </a>
              </div>

              <div class="property-card" id="card" onclick="document.location='contactUs.php'" >

                <div class="property-image p2">

                </div></a>
                <div class="property-description">
                  <h5> contact Us </h5>
                  <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.
                  </p>
                </div>
                <a href="#">
                  <div class="property-social-icons">
                    <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                  </div>
                </a>
              </div>

              <div class="property-card" id="card">

                <div class="property-image p3">

                </div></a>
                <div class="property-description">
                  <h5> settings </h5>
                  <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.
                  </p>
                </div>
                <a href="#">
                  <div class="property-social-icons">
                    <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                  </div>
                </a>
              </div>
            </div>

            <div class="container2">
              <div class="property-card" id="card" onclick="document.location='dash.php'">

                <div class="property-image p4">

                </div></a>
                <div class="property-description">
                  <h5> Dashboard </h5>
                  <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.
                  </p>
                </div>
                <a href="#">
                  <div class="property-social-icons">
                    <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                  </div>
                </a>
              </div>

              <div class="property-card" id="card" onclick="document.location='Manage Product.php'">

                <div class="property-image p5">

                </div></a>
                <div class="property-description">
                  <h5> Manage Product </h5>
                  <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.
                  </p>
                </div>
                <a href="#">
                  <div class="property-social-icons">
                    <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                  </div>
                </a>
              </div>

              <div class="property-card" id="card" onclick="document.location='Register.php'">

                <div class="property-image p6">

                </div></a>
                <div class="property-description">
                  <h5> Create account </h5>
                  <p>Lorem Ipsum Dipsum hortata. Mixcall Horcho. Mixwell Chingo. More Bingo. Lorem Ipum doth be hard.
                  </p>
                </div>
                <a href="#">
                  <div class="property-social-icons">
                    <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="before-footer">

  <?php include('templates/footer.php'); ?>

    </div>
    <div class="clearfix"></div>
  </div>





  <script src="jquery-3.6.0.min.js"></script>
  <script src="anasmain.js"></script>
  <script>

    $(".property-card").hover(function () {

      $(this).css({ borderColor: '#91D903' });
    

    }, function () {
      $(this).css({ borderColor: '#1D4354' });

  

    });

  </script>
  <script>
    let mainNav = $("#mainNav").offset().top;

    $(window).scroll(function () {
      let wScroll = $(window).scrollTop();


      if (wScroll > mainNav) {
        
        $("#bottunUp").fadeIn(500);
      }
      else {
        
        $("#bottunUp").fadeOut(500);
      }
    }
    )
    $("#bottunUp").click(function () {
      $("html,body").animate({ scrollTop: 0 }, 1000)
    });
  </script>

</body>