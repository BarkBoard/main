<?php
//edit posts
if (isset($_POST['item_id'])){
	$_SESSION['item_id']= $_POST['item_id'];
	$_SESSION['category']= $_POST['category'];

	if (strcmp($category,'Vehicles') == 0){
		header('Location: itemVehicleEdit.php');
        exit;
	}elseif (strcmp($category,'Housing') == 0){
		header('Location: itemHousingEdit.php');
        exit;
	}elseif (strcmp($category,'Clothing') == 0){
		header('Location: itemClothingEdit.php');
        exit;

	}elseif (strcmp($category,'School Supplies') == 0){
		header('Location: itemSchoolEdit.php');
        exit;

	}elseif (strcmp($category,'Electronics') == 0){
		header('Location: itemElectronicsEdit.php');
        exit;

	}elseif (strcmp($category,'Misc') == 0){
		header('Location: itemMiscEdit.php');
        exit;

	}
}

?>