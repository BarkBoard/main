<?php
// if (!$_SESSION["loggedin"]){
//     header("LOCATION: loginPage.php");
//     return;
// }
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
        <h2>New House/Apartment Listing</h2>
        <input type = "hidden" name = "category" value = "Housing">
        <p class="hint-text">Enter Housing Details</p>
        <div class="form-group">
            <div class = "row">
                <div class="col"><input type="text" class="form-control" name="title" placeholder="Title" required="required"></div>
                <div class="col"><input type="number" class="form-control" name="price" step = "any" min = "0.01" max = "1999.99" placeholder="Price/Month" required="required"></div>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Address" required="required">
        </div>
        <div class="form-group">
            <div class = "row">
                <div class="col"><input type="number" class="form-control" name="rooms" min = "1" placeholder="Rooms Available" required="required"></div>
                <div class="col"><input type="number" class="form-control" name="baths" min = "1" step = "0.5" placeholder="Baths" required="required"></div>
            </div>
        </div>
        <div class="form-group">
            <div class = "row">
                <div class="col"><input type="date" class="form-control" name="start_date" min = "2021-04-01" max = "2025-01-01" placeholder="Start Date" required="required"></div>
                <div class="col"><input type="date" class="form-control" name="end_date" min = "2021-04-01" max = "2025-01-01" placeholder="End Date" required="required"></div>
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