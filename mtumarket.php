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
			<a href="#">Link 1</a>
			<a href="#">Link 2</a>
			<a href="#">Link 3</a>
			<a href="#">Link 4</a>
			<a href="#">Link 5</a>
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

window.onclick = function(event) {
	if(!event.target.matches('.menubtn')) {
		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if(openDropdown.classList.contains('show')){
				openDropdown.classList.remove('show');
			}
		}
	}
}
</script>

</body>
</html>
