<?php

$conn = new mysqli("localhost","anos", "anos","grocery");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>