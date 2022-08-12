<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  require('dbConnect.php');
  $retrieveProduct = "SELECT * FROM items WHERE productID='$id'";
$result = $conn->query($retrieveProduct);
$row = $result->fetch_assoc();

 
  header("Content-type: image/jpeg");
  echo $row['productImg'];
?>