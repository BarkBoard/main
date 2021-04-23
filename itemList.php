<?php
extract($_POST);
include("serverconnect.php");

$category = $_POST('category');
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

<div class="container-sm">
	<div class="row">
		<div class="col">
			<div class="customDiv2">
				Posts
				<hr size=1>
				<?php 
			
				switch ($category){
					case 'Vehicles':
						$sql = "SELECT title, price, category FROM item ORDER BY views DESC LIMIT 10";
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
					case 'Housing':
						
					case 'Clothing':
						
					case 'School Supplies':
						
					case 'Electronics':
						
					case 'Misc':
						                  
				}
				?>
			</div>
		</div>
	</div>
</div>

</html>
