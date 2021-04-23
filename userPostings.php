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
					echo '<a href="mtumarket.php">Home</a><br>';
					echo '<a href="loginPage.php">Log In</a><br>';
					echo '<a href="register.php">Register</a>';
			   }else {
					echo '<a href="mtumarket.php">Home</a><br>';
				   echo '<a href="changePass.php">Change Password</a><br>';
				   echo '<a href="stop_session.php">Log Out</a>';
			   }
			?>
			</div>
		</div>

	</div>
<hr size=6>

<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="customDiv2">
				My Posts
				<hr size=5>
				<center>
				<?php 
				$userid = $_SESSION['user'];

				$sql = "SELECT item_id, title, price, category, cond FROM item where user_id = $userid group by category order by item_id";
				$result = $conn->query($sql);
				
				if($result->num_rows>0) {
					echo "<table><tr><th>Item ID<th>Title</th><th>Price</th><th>Category</th><th>Condition</th></tr>";
					
					while($row = $result->fetch_assoc()) {
						echo '<form action="deletePost_a.php" method="POST">';
						echo "<tr><td>".$row["item_id"]."</td><td>".$row["title"]."</td><td>". "$" .$row["price"]."</td><td>".$row["category"]."</td><td>".$row["cond"]."</td>";
						$category = $row["category"];
						$item_id = $row["item_id"];
						echo '<td><input type = "submit" name = "edit" value = "Delete"></td>';
						echo '<input type = "hidden" name = "category" value = '. $category. '>';
						echo '<input type = "hidden" name = "item_id" value = '. $item_id. '>';
    					echo "</tr>";
						
						echo "</form>";
					}

					echo "</table";
				} else {
					echo "0 results";
				}
				?>
				<center>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="customDiv2">
				My Account
                <hr size=5>
				<?php

				echo 'Name: ' . "\t" . $_SESSION['first_name'] . " " . $_SESSION['last_name']. '<br>';
				echo 'Email: ' . "\t" . $_SESSION['email'] . '<br>';
				echo 'Phone Number: ' . "\t" . $_SESSION['phone'] . '<br>';
				echo 'User ID: ' . "\t" . $_SESSION['user'] . '<br>';
				echo '<a href="changeUser.php">Change User Settings</a><br>';
				echo '<a href="stop_session.php">Log Out</a><br>';
				

			?>
			</div>
		</div>
	</div>
</div>




</body>
</html>