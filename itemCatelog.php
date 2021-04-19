<?php
include("serverconnect.php");
session_start();
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

<div class="container">
	<div class="row">
		<div class="col-lg-2">
			<button class="customDiv" onclick="location.href='itemList.php'">
				Books
                <?php$category = "School Supplies"?>
			</button>
		</div>
		<div class="col-lg-2">
			<button class="customDiv" onclick="location.href='itemList.php'">
				Vehicles
                <?php$category = "Vehicles"?>
			</button>
		</div>
		<div class="col-lg-2">
			<button class="customDiv" onclick="location.href='itemList.php'">
				Electronics
                <?php$category = "Electronics"?>
			</button>
		</div>
		<div class="col-lg-2">
			<button class="customDiv" onclick="location.href='itemList.php'">
				Clothes
                <?php$category = "Clothing"?>
			</button>
		</div>
		<div class="col-lg-2">
			<button class="customDiv" onclick="location.href='itemList.php'">
				Housing
                <?php$category = "Housing"?>
			</button>
		</div>
		<div class="col-lg-2">
			<button class="customDiv" onclick="location.href='itemList.php'">
			    Misc
                <?php$category = "Misc"?>
		    </button>
		</div>
	</div>
</div>

<hr size=6>

<div class="container-sm">
	<div class="row">
		<div class="col">
			<div class="customDiv2">
				Popular Posts
				<hr size=1>
				<?php
			
			$sql = "SELECT title, price, condition FROM item where category = 'Misc' ORDER BY item_id DESC";
			$result = $conn->query($sql);
			
			if($result->num_rows>0) {
				echo "<table><tr><th>Title</th><th>Price</th><th>Condition</th></tr>";
				
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>".$row["title"]."</td><td>".$row["price"]."</td><td>".$row["condition"]."</td></tr>";
				}
				echo "</table";
			} else {
				echo "0 results";
			}
			?>
			</div>
		</div>
	</div>
</div>


</body>
</html>