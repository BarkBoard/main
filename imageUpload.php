<?php
session_start();
if (!isset($_SESSION['user'])){
    header("Location: loginPage.php");
}if (!isset($_SESSION['item_id'])){
    header("Location: mtumarket.php");
}

//picture
if (isset($_POST['pic1Submit'])){
    $fileName= $_FILES['pic1']['name'];
    $fileTempName = $_FILES['pic1']['tmp_name'];
    $folder = 'itemImages/';

    move_uploaded_file($fileTempName, $folder.$fileName);

    $query = "INSERT INTO image (imageName) values ('$fileName')";
    $sql = $conn ->query($query);

    if ($sql){
        echo 'image uploaded';
    }
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
    <form action="" method="POST" enctype="multipart/form-data">
        <h2>Upload Pictures</h2>
        <p class="hint-text"> Upload up to 3 images</p>
        <div class="form-group">
            <input type="file" name="pic1" placeholder="Submit a photo here!">
            <input type="submit" name="pic1Submit"></button>
        </div>
        <?php echo '<br><br>'?>
        <div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Finish</button>
        </div>
    </form>

    <center>


</div>


</body>
</html>