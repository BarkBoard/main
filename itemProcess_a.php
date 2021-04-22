<?php
//do not edit any of this without telling me pls~Tyler B.
session_start();

echo "<br>";
echo "<br>";

extract($_POST);
include("serverconnect.php");

//getting userid from session
$user_id = $_SESSION['user'];


//checking to see if user already posted somethign with same title
$query = "SELECT title from item where title = '$title' and user_id = $user_id";
$sql=mysqli_query($conn,$query)or die("Could Not Perform the First Query");
if (mysqli_num_rows($sql) > 0){
    echo "You already have a posting with this title!<br>";
    switch ($category){
        case 'Vehicles':
            echo "Redirecting to vehicle listing page in (2) seconds";
            header('Refresh: 2; itemVehicle.php');
            exit;
        case 'Housing':
            echo "Redirecting to housing listing page in (2) seconds";
            header('Refresh: 2; itemHousing.php');
            exit;
        case 'Clothing':
            echo "Redirecting to clothing listing page in (2) seconds";
            header('Refresh: 2; itemClothing.php');
            exit;
        case 'School Supplies':
            echo "Redirecting to school supply listing page in (2) seconds";
            header('Refresh: 2; itemSchool.php');
            exit;
        case 'Electronics':
            echo "Redirecting to electronics listing page in (2) seconds";
            header('Refresh: 2; itemElectronics.php');
            exit;
        case 'Misc':
            echo "Redirecting to miscellaneous listing page in (2) seconds";
            header('Refresh: 2; itemMisc.php');        
            exit;                   
    }
}

//inserting into item table
$query = "INSERT INTO item(user_id, title, price, cond, description, category, views) VALUES ($user_id, '$title', $price, '$condition', '$description', '$category', 0)";
$sql=mysqli_query($conn,$query)or die("Could Not Perform the First Query");

//getting new item_id from item table
$query = "SELECT item_id FROM item WHERE title = '$title' AND user_id = $user_id";
$result = $conn ->query($query);

$item_id = $result -> fetch_assoc()['item_id'];


//inserting data in respectable tables

if (strcmp($category,'Vehicles') == 0){
    $query = "INSERT INTO vehicle(item_id, year, make, model, mileage) VALUES ($item_id, $year, '$make', '$model', $mileage)";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Third Query");
    //works

}elseif (strcmp($category,'Housing') == 0){
    $query = "INSERT INTO housing(item_id, address, rooms, baths, start_date, end_date) VALUES ($item_id, '$address', $rooms, $baths, '$start_date', '$end_date')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Third Query");
    //works

}elseif (strcmp($category,'Clothing') == 0){
    $query = "INSERT INTO clothing(item_id, classification, gender, size) VALUES ($item_id, '$classification', '$gender', '$size')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Third Query");
    //works

}elseif (strcmp($category,'School Supplies') == 0){
    $query = "INSERT INTO school_sup(item_id, classification, quantity) VALUES ($item_id, '$classification', $quantity)";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Third Query");
    //works

}elseif (strcmp($category,'Electronics') == 0){
    $query = "INSERT INTO electronics(item_id, manufacturer, quantity, classification) VALUES ($item_id, '$manufacturer', $quantity, '$classification')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Third Query");
    //works

}elseif (strcmp($category,'Misc') == 0){
    $query = "INSERT INTO misc(item_id, quantity) VALUES ($item_id, $quantity)";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Third Query");
    //works

}

echo "Post Successful!<br>";
echo "Redirecting to home page in (1) seconds";
header('Refresh: 1; mtumarket.php');
exit;


?>