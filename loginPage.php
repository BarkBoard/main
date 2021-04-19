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
	<link href="mtumarket.css" rel="stylesheet">
	<link href="bootstrap.css" rel="stylesheet">
	<script src="mtumarket.js"></script>
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

<!-- login username and password field -->
<link href="loginPage.css" rel="stylesheet">
<p class="ex1">
</p>
<center>
<div class="signup-form">
	<form action="loginProcess.php" method="post" enctype="multipart/form-data">
		<h2>Login</h2>
		<p class="hint-text">Enter Login Details</p>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
        <div class="text-center">Don't have an account? <a href="register.php">Register Here</a></div>
    </form>

	</center>
</div>


</body>
</html>
