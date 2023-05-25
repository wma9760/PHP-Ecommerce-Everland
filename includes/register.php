<!-- backend for register -->

<?php
include "../config.php";

function generateRandomString($length = 25) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
//usage 
$myRandomString = generateRandomString(5);


if (isset($_POST['signup'])) {
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pass = $myRandomString;
	$token = bin2hex(random_bytes(50));
	$emailcheck = "SELECT * FROM users WHERE email='$email'";
	$emQuery = mysqli_query($con, $emailcheck);
	$emCount = mysqli_num_rows($emQuery);
	if ($emCount > 0) {
?>
		<div class="alert alert-danger" role="alert">
			Email You Enter is Already Exists
		</div>
		<?php
	} else {
		$insertquery = "INSERT INTO users(username, email, password, token) VALUES('$username', '$email','$pass','$token')";
		$query = mysqli_query($con, $insertquery);
		if ($query) {
			$_SESSION['success'] = "Successfully Register Password is sent to your email address";
			header('location: ../login.php');
			  
		} else {
		?>
			<div class="alert alert-danger" role="alert">
				Not Successfully Register
			</div>
<?php  }
	}
}
?><!-- backend end -->