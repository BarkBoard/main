<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		MTU Marketplace
	</title>
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

<div class="main-title">
	<h2>Categories</h2>
</div

</body>
</html>
