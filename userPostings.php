<?php
	//connecting to database
   $conn = mysqli_connect('localhost', 'pi', 'teame2021', 'project');

   //check connection
   if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error();
   }

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
		<div class="col-lg-6">
			<div class="customDiv2">
				My Posts
				<hr size=5>
				<?php 
			$userid = 1008;

			$sql = "SELECT title, price, category, views FROM item where user_id = $userid group by category order by item_id desc limit 10";
			$result = $conn->query($sql);
			
			if($result->num_rows>0) {
				echo "<table><tr><th>Title</th><th>Price</th><th>Category</th><th>Views</th></tr>";
				
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>".$row["title"]."</td><td>".$row["price"]."</td><td>".$row["category"]."</td><td>".$row["views"]."</td></tr>";
				}
				echo "</table";
			} else {
				echo "0 results";
			}
			?>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="customDiv2">
				My Account
                <hr size=5>
				<?php 
			$userid = 1008;

			$sql = "SELECT first_name, last_name, email, phone FROM user where user_id = $userid";
			$result = $conn->query($sql);
            $first_name = $result -> fetch_assoc()['first_name'];
            $last_name = $result -> fetch_assoc()['last_name'];
            $email = $result -> fetch_assoc()['email'];
            $phone = $result -> fetch_assoc()['phone'];
			
            echo $first_name;
            echo " ";
            echo $last_name;
            echo "<br>";
            echo "Email: ";
            echo $email;
            echo "<br>";
            echo "Phone: ";
            echo $phone;

			?>
			</div>
		</div>
	</div>
</div>




</body>
</html>