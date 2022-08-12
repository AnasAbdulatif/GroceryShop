<?php

$host= '127.0.0.1';
$user='root';
$pass='';
$db='contact_us1';

$con=mysqli_connect($host,$user,$pass,$db);


if($con){
echo "<h2>" . "Connected !" . "</h2>";
}

$fullName ="Hossam";
$email = "asdna ";
$phone = "asdasd";
$messg ="asdasdasd";

$sql= "insert into contact (name,email,phone,message) values ('".$fullName."','".$email."','".$phone."','".$messg."');";

echo $sql ;

$query=mysqli_query($con,$sql);

echo $query;

if($query)
	echo'data inserted successfuly'

?> 