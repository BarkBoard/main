<?php
session_start();
if (isset($_SESSION['user'])){
    echo 'You are already logged in';
	header('Refresh: 1; mtumarket.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		MTU Marketplace
	</title>
	<link href="bootstrap.css" rel="stylesheet">
	<link href="mtumarket.css" rel="stylesheet">
</head>
<body style="background-color:gray">
	<div class="header">
		MTU Marketplace
		<!-- login button -->
		<div class="login">
			<button class="loginbtn" onclick="location.href='mtumarket.php'">
			Home
			</button>
		</div>


	</div>
<hr size=6>

<!-- registration field -->
<link href = "loginPage.css" rel="stylesheet">
<p class = "ex1">
</p>
<center>
<div class="signup-form">
    <form action="register_a.php" method="POST" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="email" placeholder="Email Address" required="required"></div>
				<div class="col"><input type="tel" class="form-control" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone Number (###-###-####)" required="required"></div>
			</div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="loginPage.php">Sign in</a></div>
    </form>

	<center>
	
</div>

</body>
</html>