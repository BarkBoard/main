<?php
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
</head>
<body style="background-color:gray">
	<div class="header">
		MTU Marketplace

		<!-- login button -->
		<div class="login">
			<button class="loginbtn" onclick="location.href='mtumarket.php'">
			Home
			</button>
		</div>


	</div>
<hr size=6>

<link href = "loginPage.css" rel="stylesheet">
<p class = "ex1">
</p>
<center>
<div class="signup-form">
    <form action="itemProcess_a.php" method="POST" enctype="multipart/form-data">
        <h2>New Vehicle Listing</h2>
        <input type = "hidden" name = "category" value = "Vehicles">
        <p class="hint-text">Enter Vehicle Details</p>
        <div class="form-group">
            <div class = "row">
                <div class="col"><input type="text" class="form-control" name="title" placeholder="Title" required="required"></div>
                <div class="col"><input type="number" class="form-control" name="price" step = "any" min = "0.01" max = "49999.99" placeholder="Price" required="required"></div>
            </div>
        </div>
        <div class="form-group">
            <div class = "row">
                <div class="col"><input type="number" class="form-control" name="year" min = "1950" max ="2021" placeholder="Year" required="required"></div>
                <div class="col"><input type="number" class="form-control" name="mileage" min = "0" max ="500000" placeholder="Mileage" required="required"></div>
                <div class="col"><input type="text" class="form-control" name="make" placeholder="Make" required="required"></div>
                <div class="col"><input type="text" class="form-control" name="model" placeholder="Model" required="required"></div>
            </div>
        </div>
        Condition:
            <select name = "condition">
            <option>New</option>
            <option>Like New</option>
            <option>Good</option>
            <option>Fair</option>
            <option>Poor</option>
            </select> <br />
            <br/>
        <div class="form-group">
            <input type="text" class="form-control" name="description" placeholder="Description" required="required">
        </div>
        

        <div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Next</button>
        </div>
    </form>

    <center>


</div>


</body>
</html>