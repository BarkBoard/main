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
			<a href="itemlist.php">Books</a>
			<a href="itemlist.php">Vehicles</a>
			<a href="itemlist.php">Electronics</a>
			<a href="itemlist.php">Clothes</a>
			<a href="itemlist.php">Housing</a>
			<a href="itemlist.php">Miscellaneous</a>
		</div>

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

    <label>
      <input type="checkbox" checked="checked" name="remember"><b style="color:#e6e600;"> Remember me </b>
    </label>
	</center>
</div>

<!-- Possible forgot password button-->
<center>
  <div class="signup-form2" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>

</center>


</body>
</html>
