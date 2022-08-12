<!DOCTYPE html>
<html>
<title>Search</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>




<body>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16">Search</div>
    <div class="w3-center w3-padding-16">Vegetables</div>

    <div class="search-container">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
</div>
  
<!-- PAGE CONTENT -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="assets/img/Onion.png" alt="Onion" style="width:100%">
      <form method="POST" action="/group13/action_page.php">
        <input type="hidden" name="veg" value="1">
        <input type="submit">
      </form>
      <h3>Onion</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="assets/img/Pea.png" alt="Pea" style="width:100%">
      <form method="POST" action="/group13/action_page.php">
        <input type="hidden" name="veg" value="2">
        <input type="submit">
      </form>
      <h3>Pea</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="assets/img/Carrot.png" alt="Carrot" style="width:100%">
      <h3>Carrot</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="assets/img/Aubergine.png" alt="Aubergine" style="width:100%">
      <h3>Aubergine</h3>
      <p></p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="assets/img/Tomato.png" alt="Tomato" style="width:100%">
      <h3>Tomato</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="assets/img/Mint.png" alt="Mint" style="width:100%">
      <h3>Mint</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="assets/img/Lemon.png" alt="Lemon" style="width:100%">
      <h3>Lemon</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="assets/img/Cucumber.png" alt="Cucumber" style="width:100%">
      <h3>Cucumber</h3>
      <p></p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>

</div>

<script src="assets/js/main.js"></script>

</body>
</html>
