<?php
	//connecting to database
   $conn = mysqli_connect('localhost', 'pi', 'teame2021', 'project');

   //check connection
   if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error();
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

<div class="container">
	<div class="row">
		<div class="col-lg-2">
			<button class="customDiv" onclick="location.href='itemList.php'">
				Books
			</button>
		</div>
		<div class="col-lg-2">
			<button class="customDiv" onclick="location.href='itemList.php'">
				Vehicles
			</button>
		</div>
		<div class="col-lg-2">
			<button class="customDiv" onclick="location.href='itemList.php'">
				Electronics
			</button>
		</div>
		<div class="col-lg-2">
			<button class="customDiv" onclick="location.href='itemList.php'">
				Clothes
			</button>
		</div>
		<div class="col-lg-2">
			<button class="customDiv" onclick="location.href='itemList.php'">
				Housing
			</button>
		</div>
		<div class="col-lg-2">
			<button class="customDiv" onclick="location.href='itemList.php'">
			Misc
		</button>
		</div>
	</div>
</div>

<hr size=6>

<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="customDiv2">
				Popular Posts
			</div>
		</div>
		<div class="col-lg-6">
			<div class="customDiv2">
				Recent Posts
			</div>
		</div>
	</div>
</div>

<script>
<!-- menu button script -->
function menuFunc() {
	document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByClassName("dropdown-content");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}


</script>

</body>
</html>
