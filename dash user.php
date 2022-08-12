<?php 
session_start();
error_reporting(0);
 $userName =$_SESSION['name'];
 $userEmail =$_SESSION['email'];
 $userPhone =$_SESSION['phone'];
 $userAddress =$_SESSION['address'];
 $userId =$_SESSION['id'];
require('dbConnect.php');
?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dash User</title>
  <link rel="stylesheet" href="css/anas.css">
  <link rel="stylesheet" href="css/all.min.css">


</head>




<body class="dash-body">


<?php include('templates/headerUser.php'); ?>

  <div class="container">
    <h1 class="dashbordH1"> User Dashboard  </h1>
    <div class="containerAll">
      <aside>
      

        <div class="dash-feedback-border">
        <h3>User Info</h3>
        <p class="txt"><?php echo "ID :". $userId; ?></p> 
        <p class="txt"><?php echo "Username :". $userName; ?></p>
        <p class="txt"><?php echo "Email :". $userEmail; ?></p>
        <p class="txt"><?php echo "Phone :". $userPhone; ?></p>
        <p class="txt"><?php echo "Address :". $userAddress; ?></p>

        </div>
        <div class="dash-user-border">
          <h3>Recent search</h3>
          <p class="txt">name : coca<br> 
            description:  drink <br>
            Price: 10 LE
          </p>
            <hr>
            <p class="txt">name : tonna<br> 
              description:  italy tonna <br>
              Price: 20 LE
            </p>
          <hr>
          <p class="txt">name : manga<br> 
            description: frsh fruit <br>
            Price: 30 LE
          </p>
        <hr>
        <p class="txt">name : banana<br> 
          description:  fresh banana <br>
          Price: 110 LE
        </p>
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
                <span>In Wallet</span>
              </div>

            </div>
            <div class="overview-item overview-item--c2">


              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>

              <div class="card-text">
                <p>6</p>
                <span>Orders</span>
              </div>

            </div>
            <div class="overview-item overview-item--c3">


              <div class="icon">
                <i class="far fa-comment"></i>
              </div>

              <div class="card-text">
                <p>4</p>
                <span>WishList</span>
              </div>

            </div>

          </div>
        </div>

        <div class="board">
          <h3>Conttrol Panel</h3>
          <div class="all-property">
            <div class="container1">
              <div class="property-card" id="card" onclick="document.location='cart.php'">

                <div class="property-image p1 ">

                </div></a>
                <div class="property-description">
                  <h5> Cart </h5>
                  <p> cointain all product user added to the cart 
                  </p>
                </div>
                <a href="#">
                  <div class="property-social-icons">
                    <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                  </div>
                </a>
              </div>

              <div class="property-card" id="card" onclick="document.location='Order History.php'">

                <div class="property-image p2">

                </div></a>
                <div class="property-description">
                  <h5> ordered History</h5>
                  <p>contain all oderrs that user ordered.
                  </p>
                </div>
                <a href="#">
                  <div class="property-social-icons">
                    <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                  </div>
                </a>
              </div>

              <div class="property-card" id="card" >

                <div class="property-image p3">

                </div></a>
                <div class="property-description">
                  <h5> settings</h5>
                  <p>all websits settings.
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
              <div class="property-card" id="card" onclick="document.location='contact Us.php'">

                <div class="property-image p4">

                </div></a>
                <div class="property-description">
                  <h5> Contact Us  </h5>
                  <p>edit all account settings .
                  </p>
                </div>
                <a href="#">
                  <div class="property-social-icons">
                    <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                  </div>
                </a>
              </div>

              <div class="property-card" id="card" onclick="document.location='Categories.php'">

                <div class="property-image p5">

                </div></a>
                <div class="property-description">
                  <h5> categories</h5>
                  <p>all Product categories in websites.
                  </p>
                </div>
                <a href="#">
                  <div class="property-social-icons">
                    <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
                  </div>
                </a>
              </div>

              <div class="property-card" id="card"  onclick="document.location='search.php'">

                <div class="property-image p7">

                </div></a>
                <div class="property-description">
                  <h5> Wish list </h5>
                  <p>Contain all product users marked as wished .
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





  <script src="jquery-3.6.0.min.js"></script>
  <script src="anasMain.js"></script>
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