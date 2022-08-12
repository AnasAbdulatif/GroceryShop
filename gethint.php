<?php
// Array with names
$a[] = "Anas";
$a[] = "mohamed";
$a[] = "ahmed";
$a[] = "kareem";
$a[] = "ibrahim";
$a[] = "israa";
$a[] = "mai";
$a[] = "hoda";
$a[] = "norhan";
$a[] = "mayar";
$a[] = "Kitty";
$a[] = "Lina";
$a[] = "ziad";
$a[] = "belal";
$a[] = "saleh";
$a[] = "hassan";
$a[] = "adel";
$a[] = "user";
$a[] = "taha";
$a[] = "tareq";
$a[] = "ismail";
$a[] = "eman";
$a[] = "hayaa";
$a[] = "salma";
$a[] = "koky";


$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

echo $hint === "" ? "no suggestion" : $hint;
?>