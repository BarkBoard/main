<?php
include("serverconnect.php");
session_start(); //session works	
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
			Post A New Item Listing
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
			<!-- displaying name if logged in -->
   			<?php 
			   if (isset($_SESSION['user'])){
					echo($_SESSION['first_name']);
					echo " "; 
					echo($_SESSION['last_name']);
			   }else {
				   echo "Profile";
			   }
			?>
			<div class="dropdown-content-profile" id="profileDropdown">
			<li><hr class="dropdown-divider" /></li>
			<?php
				if (!isset($_SESSION['user'])){
					echo '<a href="mtumarket.php">Home</a>';
					echo '<a href="loginPage.php">Log In</a><br>';
					echo '<a href="register.php">Register</a>';
			   }else {
				   echo '<a href="changePass.php">Change Password</a><br>';
				   echo '<a href="stop_session.php">Log Out</a><br>';
				   echo '<a href="userPostings.php">My Profile</a>';
			   }
			?>
			</div>
		</div>

	</div>
<hr size=6>

<div class="container">
	<div class="row">
		<form action="posting.php" method="POST">
			<div class ="row">
				<div class="col-lg-2">
					<button class="customDiv" onclick="location.href='posting.php'">
						Vehicles
						<input type = "hidden" name = "category" value = "Vehicles">
					</button>
				</div>
				<div class="col-lg-2">
					<button class="customDiv" onclick="location.href='posting.php'">
						Housing
						<input type = "hidden" name = "category" value = "Housing">
					</button>
				</div>
				<div class="col-lg-2">
					<button class="customDiv" onclick="location.href='posting.php'">
						Books
						<input type = "hidden" name = "category" value = "School Supplies">
					</button>
				</div>
				<div class="col-lg-2">
					<button class="customDiv" onclick="location.href='posting.php'">
						Clothes
						<input type = "hidden" name = "category" value = "Clothing">
					</button>
				</div>
				<div class="col-lg-2">
					<button class="customDiv" onclick="location.href='posting.php'">
						Electronics
						<input type = "hidden" name = "category" value = "Electronics">
					</button>
				</div>
				<div class="col-lg-2">
					<button class="customDiv" onclick="location.href='posting.php'">
					Misc
					<input type = "hidden" name = "category" value = "Misc">
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

<hr size=6>

<div class="container-sm">
	<div class="row">
		<div class="col">
			<div class="customDiv2">
				Recent Posts
				<hr size = 1>
				<center>
				<?php
					$sql = "SELECT title, price, category FROM item ORDER BY item_id DESC LIMIT 10";
					$result = $conn->query($sql);
					
					if($result->num_rows>0) {
						echo "<table><tr><th>Title</th><th>Price</th><th>Category</th></tr>";
						
						while($row = $result->fetch_assoc()) {
							echo "<tr><td>".$row["title"]."</td><td>".$row["price"]."</td><td>".$row["category"]."</td></tr>";
						}
						echo "</table";
					} else {
						echo "0 results";
					}
					?>
				</center>
			</div>
		</div>
	</div>
</div>


</body>
</html>
