<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact US</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>


	<div class="container-contact">
		<div class="contact-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact">
			<div class="contact-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact-form-title-1">
					Contact Us
				</span>

				<span class="contact-form-title-2">
					Feel free to drop us a line below!
				</span>
			</div>
			<?php
					if(isset($_POST['submit'])){ // Check if submit button presed from the user
						$host= '127.0.0.1';
						$user='root';
						$pass='';
						$db='contact_us1';
						$con=mysqli_connect($host,$user,$pass,$db);
						if($con){
							if(!empty($_POST['name']) && !empty($_POST['email'])){
								$sql= "insert into contact (name,email,phone,message) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['message']."');";	
								$query=mysqli_query($con,$sql);
								if($query){
								echo "<div>"."Thank you! We Will Contcat You Soon ."."</div>";
								}
							}else{
								echo "Please fill your infornamtion!";
							}
							
						}
					}
				?>
			<form class="contact-form validate-form" method="POST">
				<div class="wrap-input validate-input" data-validate="Name is required">
					<span class="label-input">Full Name:</span>
					<input class="input" type="text" name="name" placeholder="Enter full name">
					<span class="focus-input"></span>
				</div>

				<div class="wrap-input validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input">Email:</span>
					<input class="input" type="text" name="email" placeholder="Enter email addess">
					<span class="focus-input"></span>

				</div>

				<div class="wrap-input validate-input" data-validate="Phone is required">
					<span class="label-input">Phone:</span>
					<input class="input" type="text" name="phone" placeholder="Enter phone number">
					<span class="focus-input"></span>
				</div>

				<div class="wrap-input validate-input" data-validate = "Message is required">
					<span class="label-input">Message:</span>
					<textarea class="input" name="message" placeholder="Your Comment..."></textarea>
					<span class="focus-input"></span>
				</div>

				<div class="container-contact-form-btn">
					<button class="contact-form-btn" name="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				<div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/map-custom.js"></script>
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>

