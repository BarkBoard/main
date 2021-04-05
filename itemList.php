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
			<button class="loginbtn" onclick="location.href='loginPage.php'">
			Login
			</button>
		</div>

	</div>
	<hr size=6>
	
</body>
</html>
