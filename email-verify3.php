<?php
include "../config.php";
if (isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($con, $_POST['email']);

	$emailcheck = " SELECT * FROM `users` WHERE email='$email' and is_admin=0 ";

	$emQuery = mysqli_query($con, $emailcheck);
	$emCount = mysqli_num_rows($emQuery);
	$row = mysqli_fetch_array($emQuery);
	
	if ($emCount > 0) {
		
	// 	if ($row['token']=="") {
	// 	$tokenNew = bin2hex(random_bytes(50));
	// 	$Insert = "INSERT INTO users (token) VALUES ('$tokenNew') WHERE Id=$id";
	// 	$results = mysqli_query($con, $Insert);
	// }
		$token = $row['token'];
		$id = $row['Id'];
		
		$to = "$email";
		
         $subject = "ELECTRONIC BIT Password Reset";
         
       
         $message = "Hello There Customer We send this link to You Go to Link And Reset Your Password \n http://ayush.aetsmsoft.com/pages/reset-pass.php?token=$token ";

         $header = "From:jawad@aetsmsoft.com";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {?>
         	<div class="alert alert-success" style="position: absolute; width: 100%;">
		  <strong>Successfully Link sent</strong> Check Your Mail...
		</div><?php
         }else {?>
         	<div class="alert alert-danger">
		  Link could not be sent...
		</div><?php }
	}else{
         	?>
         	<div class="alert alert-danger">
		  <strong>Invalid Email Not Fount</strong>
		</div><?php
         }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>ELECTRONIC BIT - Verify email</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="loginFiles/images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginFiles/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginFiles/css/main.css">
	<!--===============================================================================================-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/app.js"></script>
	<style>
		* {
			user-select: none
		}

		.label-checkbox100::before {
			border: 2px solid #2082AD;
		}
	</style>
</head>

<body style="background-color: #FAFAFA;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30" style="transform: scale(0.7); background-color: #FFFFFF; border: 1px solid #DBDBDB;">
				<form class="login100-form validate-form" action="#" method="POST" autocomplete="off">
					<span class="login100-form-title on_homepage p-b-55">
						<img src="loginFiles/images/logo.png" class="img-fluid">
					</span>

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100 email" type="email" name="email" placeholder="Enter Your Email"  required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>
					<div class="container-login100-form-btn p-t-25">
						<button style="background-color: #47A2F2;" class="login100-form-btn" type="submit" name="submit">
							Submit
						</button>
					</div>
					<br><br><br><br>
				</form>
			</div>
		</div>
	</div>
	<!--===============================================================================================-->
	<script src="loginFiles/vendor/bootstrap/js/popper.js"></script>
	<script src="loginFiles/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginFiles/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
</body>

</html>