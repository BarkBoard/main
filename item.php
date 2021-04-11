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
		<!-- menu dropdown button and menu -->
		<div class="menu">
		<button onclick="menuFunc()" class="menubtn">
			Menu
			</div>
		<div class="dropdown-content" id="myDropdown">
			<a href="itemlist.php">Books</a>
			<a href="itemlist.php">Vehicles</a>
			<a href="itemlist.php">Electronics</a>
			<a href="itemlist.php">Clothes</a>
			<a href="itemlist.php">Housing</a>
			<a href="itemlist.php">Miscellaneous</a>
		</div>

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
    <form action="loginProcess.php" method="POST" enctype="multipart/form-data">
        <h2>New Listing</h2>
        <p class="hint-text">Enter Item Details</p>
        <div class="form-group">
            <input type="text" class="form-control" name="title" placeholder="Title" required="required">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="price" min = "0.01" max = "999999.99" placeholder="Price" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description" placeholder="Description" required="required">
        </div>
        Category:
            <select name = "category">
            <option>Vehicles</option>
            <option>Housing</option>
            <option>Cloting</option>
            <option>School Supplies</option>
            <option>Electronics</option>
            <option>Miscellaneous</option>
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
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Next</button>
        </div>
    </form>

    <center>


</div>


</body>
</html>