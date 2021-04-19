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
        <h2>New Clothing Listing</h2>
        <input type = "hidden" name = "category" value = "Clothing">
        <p class="hint-text">Enter Clothing Details</p>
        <div class="form-group">
            <div class = "row">
                <div class="col"><input type="text" class="form-control" name="title" placeholder="Title" required="required"></div>
                <div class="col"><input type="number" class="form-control" name="price" step = "any" min = "0.01" max = "999.99" placeholder="Price" required="required"></div>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="classification" placeholder="Classification" required="required">
        </div>
        Gender:
            <select name = "gender">
            <option>Men</option>
            <option>Women</option>
            <option>Child</option>
            <option>N/A</option>
            </select>
        Size:
            <select name = "size">
            <option>XS</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
            <option>XXL</option>
            <option>XXXL</option>
            </select>
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