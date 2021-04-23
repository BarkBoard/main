<?php
include("serverconnect.php");
session_start();
if (!isset($_SESSION['user'])){
    header("Location: loginPage.php");
}

extract($_POST);
$category = $_POST['category'];
$item_id = $_POST['item_id'];

echo '<br><br>';

$sql = "delete from item where item_id = $item_id";
$result = $conn->query($sql) or die ("could not perform the first query");


if (strcmp($category,'Vehicles') == 0){
    $sql = "delete from vehicle where item_id = $item_id";
    $result = $conn->query($sql) or die ("could not perform the second query"); 
    //works

}elseif (strcmp($category,'Housing') == 0){
    $sql = "delete from housing where item_id = $item_id";
    $result = $conn->query($sql) or die ("could not perform the second query"); 
    //works

}elseif (strcmp($category,'Clothing') == 0){
    $sql = "delete from clothing where item_id = $item_id";
    $result = $conn->query($sql) or die ("could not perform the second query"); 
    //works

}elseif (strcmp($category,'School Supplies') == 0){
    $sql = "delete from school_sup where item_id = $item_id";
    $result = $conn->query($sql) or die ("could not perform the second query"); 
    //works

}elseif (strcmp($category,'Electronics') == 0){
    $sql = "delete from electronics where item_id = $item_id";
    $result = $conn->query($sql) or die ("could not perform the second query"); 
    //works

}elseif (strcmp($category,'Misc') == 0){
    $sql = "delete from misc where item_id = $item_id";
    $result = $conn->query($sql) or die ("could not perform the second query"); 
    //works

}

echo "Post Deletion Successful!<br>";
echo "Redirecting to User Page in (1) seconds";
header('Refresh: 1; userPostings.php');
exit;


?>