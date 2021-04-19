<?php
//goes to login page if not signed in
session_start();
if (!isset($_SESSION['user'])){
    header("Location: loginPage.php");
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
	<script src="mtumarket.js"></script>
</head>

<body style="background-color:gray">
	<div class="header">
		MTU Marketplace
		<!-- menu dropdown button and menu -->
		<div class="menu">
		<button onclick="menuFunc()" class="menubtn">
			Menu
		</div>
		<div class="dropdown-content" id="myDropdown">
			<a style="font-size:14px">
				<div class="input-group mt-2 mx-2">
					<div class="form-outline">
						<input type="search" id="myInput" class="form-control-dropdown" onkeyup="FilterFunction()" />
						<label class="form-label" for="form1"></label>
						</div>
					<button type="button" class="btn btn-primary" style="background-color:gray">
    				<i class="fas fa-search">Search</i>
  				</button>
				</div>
			</a>
			<li><hr class="dropdown-divider" /></li>
			<a href="itemVehicle.php">Vehicles</a>
			<a href="itemHousing.php">Housing</a>
			<a href="itemClothing.php">Clothes</a>
			<a href="itemSchool.php">Books</a>
			<a href="itemElectronics.php">Electronics</a>
			<a href="itemMisc.php">Miscellaneous</a>
		</div>


   		<!-- login dropdown button and menu (needs fixing) -->
		<div class="login">
		<button onclick="profileFunc()" class="menubtn">
   			Profile
			<div class="dropdown-content-profile" id="profileDropdown">
			<li><hr class="dropdown-divider" /></li>
			<a href="loginPage.php">Log In</a>
			<a href="register.php">Register</a>
			</div>
		</div>

	</div>
<hr size=6>

<link href = "loginPage.css" rel="stylesheet">
<p class = "ex1">
</p>
<center>
<div class="signup-form">
    <form action="changePass_a.php" method="POST" enctype="multipart/form-data">
        <h2>Change Password</h2>
        <p class="hint-text">Change Password for (enter name here)</p>
		<div class="form-group">
            <input type="password" class="form-control" name="origPass" placeholder="Current Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="newPass" placeholder="New Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="newPass1" placeholder="Confirm New Password" required="required">
        </div>

        <div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Save</button>
        </div>
    </form>

    <center>


</div>


</body>
</html>