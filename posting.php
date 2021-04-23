
<?php
extract($_POST);
include("serverconnect.php");

$category = $_POST('category');
?>

<div class="container-sm">
	<div class="row">
		<div class="col">
			<div class="customDiv2">
				Posts
				<hr size=1>
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
							<td>".$row["price"]."</td>
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
					case 'Housing':
						$sql = "select title, description, price, cond, address, rooms, baths, start_date, end_date, phone
from housing left outer join item using (item_id)
	left outer join user on (item.user_id = user.user_id)
where category = 'Housing'
order by views desc";$result = $conn->query($sql);
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
								<td>".$row["price"]."</td>
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
					case 'Clothing':
						$sql = "select title, description, price, cond, classification, gender, size, phone
from clothing left outer join item using (item_id)
	left outer join user on (item.user_id = user.user_id)
where category = 'Clothing'
order by views desc";$result = $conn->query($sql);
						$result = $conn->query($sql);
						
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
								<td>".$row["price"]."</td>
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
					case 'School Supplies':
						$sql = "select title, description, price, cond, classification, quantity, phone
from school_sup left outer join item using (item_id)
	left outer join user on (item.user_id = user.user_id)
where category = 'School Supplies'
order by views desc";$result = $conn->query($sql);
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
								<td>".$row["price"]."</td>
								<td>".$row["cond"]."</td>
								<td>".$row["classification"]."</td>
								<td>".$row["quantity"]."</td>
								<td>".$row["phone"]."</td></tr>";
							}
							echo "</table";
						} else {
							echo "0 results";
						}
					case 'Electronics':
						$sql = "select title, description, price, cond, manufacturer, classification, quantity, phone
from electronics left outer join item using (item_id)
	left outer join user on (item.user_id = user.user_id)
where category = 'Electronics'
order by views desc";$result = $conn->query($sql);
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
								<td>".$row["price"]."</td>
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
					case 'Misc':
						$sql = "select title, description, price, cond, quantity, phone from misc left outer join item using (item_id) left outer join user on (item.user_id = user.user_id)
where category = 'Misc' order by views desc";$result = $conn->query($sql);
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
								<td>".$row["price"]."</td>
								<td>".$row["cond"]."</td>
								<td>".$row["quantity"]."</td>
								<td>".$row["phone"]."</td>
								</tr>";
							}
							echo "</table";
						} else {
							echo "0 results";
						}                 
				}
				?>
			</div>
		</div>
	</div>