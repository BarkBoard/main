<?php
extract($_POST);
include("serverconnect.php");

// var_dump($_POST);
$category = $_POST["category"];

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


		<div class="login">
			<button class="loginbtn" onclick="location.href='mtumarket.php'">
			Home
			</button>
		</div>

	</div>
<hr size=6>

<div class="container">
	<div class="row">
		<form action="posting.php" method="POST">
			<div class ="row">
				<div class="col-lg-2">
					<button class="customDiv" type = "submit" name = "category" value = "Vehicles" onclick="location.href='posting.php'">
						<input type = "Submit" name = "category" value="Vehicles">
					</button>
				</div>
				<div class="col-lg-2">
					<button class="customDiv" onclick="location.href='posting.php'">
						<input type = "Submit" name = "category" value="Housing">
					</button>
				</div>
				<div class="col-lg-2">
					<button class="customDiv" onclick="location.href='posting.php'">
						<input type = "Submit" name = "category" value="School Supplies">
					</button>
				</div>
				<div class="col-lg-2">
					<button class="customDiv" onclick="location.href='posting.php'">
						<input type = "Submit" name = "category" value="Clothing">
					</button>
				</div>
				<div class="col-lg-2">
					<button class="customDiv" onclick="location.href='posting.php'">
						<input type = "Submit" name = "category" value="Electronics">
					</button>
				</div>
				<div class="col-lg-2">
					<button class="customDiv" onclick="location.href='posting.php'">
						<input type = "Submit" name = "category" value="Misc">
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
				Posts
				<hr size=1>
			   	<center>
				<?php
			
				switch ($category){
					case 'Vehicles':
						$sql = "select title, description, price, cond, year, make, model, mileage, phone
							from vehicle left outer join item using (item_id)
								left outer join user on (item.user_id = user.user_id)
							where category = 'Vehicles'
							order by views desc";

						$result = $conn->query($sql);
						
						if($result->num_rows>0) {
							echo "<table><tr>
							<th>Title</th>
							<th>Description</th>
							<th>Price</th>
							<th>Cond</th>
							<th>Year</th>
							<th>Make</th>
							<th>Model</th>
							<th>Mileage</th>
							<th>Phone</th></tr>";
							
							while($row = $result->fetch_assoc()) {
								echo "<tr>
							<td>".$row["title"]."</td>
							<td>".$row["description"]."</td>
							<td>"."$".$row["price"]."</td>
							<td>".$row["cond"]."</td>
							<td>".$row["year"]."</td>
							<td>".$row["make"]."</td>
							<td>".$row["model"]."</td>
							<td>".$row["mileage"]."</td>
							<td>".$row["phone"]."</td></tr>";
							
							
							}
							echo "</table";
						} else {
							echo "0 results";
						}
						exit;
					case 'Housing':
						$sql = "select title, description, price, cond, address, rooms, baths, start_date, end_date, phone
							from housing left outer join item using (item_id)
								left outer join user on (item.user_id = user.user_id)
							where category = 'Housing'
							order by views desc";
						$result = $conn->query($sql);

						if($result->num_rows>0) {
							echo "<table><tr>
								<th>Title</th>
								<th>Description</th>
								<th>Price</th>
								<th>Cond</th>
								<th>Address</th>
								<th>Rooms</th>
								<th>Baths</th>
							`	<th>Start_date</th>
								<th>End_date</th>
								<th>Phone</th></tr>";

							while($row = $result->fetch_assoc()) {
								echo "<tr>
								<td>".$row["title"]."</td>
								<td>".$row["description"]."</td>
								<td>"."$".$row["price"]."</td>
								<td>".$row["cond"]."</td>
								<td>".$row["address"]."</td>
								<td>".$row["rooms"]."</td>
								<td>".$row["baths"]."</td>
								<td>".$row["start_date"]."</td>
								<td>".$row["end_date"]."</td>
								<td>".$row["phone"]."</td></tr>";
							
							}
							echo "</table";
						} else {
							echo "0 results";
						}
						exit;
					case 'Clothing':
						$sql = "select title, description, price, cond, classification, gender, size, phone
							from clothing left outer join item using (item_id)
								left outer join user on (item.user_id = user.user_id)
							where category = 'Clothing'
							order by views desc";
						
						if($result->num_rows>0) {
							echo "<table><tr>
								<th>Title</th>
								<th>Description</th>
								<th>Price</th>
								<th>Cond</th>
								<th>Classification</th>
								<th>Gender</th>
								<th>Size</th>
								<th>Phone</th></tr>";
								
							while($row = $result->fetch_assoc()) {
								echo "<tr>
								<td>".$row["title"]."</td>
								<td>".$row["description"]."</td>
								<td>"."$".$row["price"]."</td>
								<td>".$row["cond"]."</td>
								<td>".$row["classification"]."</td>
								<td>".$row["gender"]."</td>
								<td>".$row["size"]."</td>
								<td>".$row["phone"]."</td></tr>";
								}
							echo "</table";
						} else {
							echo "0 results";
						}
						exit;
					case 'School Supplies':
						$sql = "select title, description, price, cond, classification, quantity, phone
								from school_sup left outer join item using (item_id)
									left outer join user on (item.user_id = user.user_id)
								where category = 'School Supplies'
								order by views desc";
						$result = $conn->query($sql);
						
						if($result->num_rows>0) {
							echo "<table><tr>
								<th>Title</th>
								<th>Description</th>
								<th>Price</th>
								<th>Cond</th>
								<th>Classification</th>
								<th>Quantity</th>
								<th>Phone</th></tr>";
							
							while($row = $result->fetch_assoc()) {
								echo "<tr>
								<td>".$row["title"]."</td>
								<td>".$row["description"]."</td>
								<td>"."$".$row["price"]."</td>
								<td>".$row["cond"]."</td>
								<td>".$row["classification"]."</td>
								<td>".$row["quantity"]."</td>
								<td>".$row["phone"]."</td></tr>";
							}
							echo "</table";
						} else {
							echo "0 results";
						}
						exit;
					case 'Electronics':
						$sql = "select title, description, price, cond, manufacturer, classification, quantity, phone
							from electronics left outer join item using (item_id)
								left outer join user on (item.user_id = user.user_id)
							where category = 'Electronics'
							order by views desc";
						$result = $conn->query($sql);
						
						if($result->num_rows>0) {

							echo "<table><tr>
								<th>Title</th>
								<th>Description</th>
								<th>Price</th>
								<th>Cond</th>
								<th>Manufacturer</th>
								<th>Classification</th>
								<th>Quantity</th>
								<th>Phone</th></tr>";
							
							while($row = $result->fetch_assoc()) {
								echo "<tr>
								<td>".$row["title"]."</td>
								<td>".$row["description"]."</td>
								<td>"."$".$row["price"]."</td>
								<td>".$row["cond"]."</td>
								<td>".$row["manufacturer"]."</td>
								<td>".$row["classification"]."</td>
								<td>".$row["quantity"]."</td>
								<td>".$row["phone"]."</td></tr>";
							}
							echo "</table";
						} else {
							echo "0 results";
						}
						exit;
					case 'Misc':
						$sql = "select title, description, price, cond, quantity, phone from misc left outer join item using (item_id) left outer join user on (item.user_id = user.user_id)
								where category = 'Misc' order by views desc";
						$result = $conn->query($sql);
						
						if($result->num_rows>0) {
							echo "<table><tr>
								<th>Title</th>
								<th>Description</th>
								<th>Price</th>
								<th>Cond</th>
								<th>Quantity</th>
								<th>Phone</th></tr>";
							
							while($row = $result->fetch_assoc()) {
								echo "<tr>
								<td>".$row["title"]."</td>
								<td>".$row["description"]."</td>
								<td>"."$".$row["price"]."</td>
								<td>".$row["cond"]."</td>
								<td>".$row["quantity"]."</td>
								<td>".$row["phone"]."</td>
								</tr>";
							}
							echo "</table";
						} else {
							echo "0 results";
						}            
						exit;     
				}
				?>
				<center>
			</div>
		</div>
	</div>
</div>

	</body>
</html>