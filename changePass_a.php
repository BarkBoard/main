<?php
session_start();

echo "<br>";
echo "<br>";


extract($_POST);
include("serverconnect.php");


//encrypting original Password
$passen = md5($origPass);

//getting userId from session
$user_id = $_SESSION['user'];


$query= "SELECT password FROM user where user_id = $user_id and password='$passen'";
$sql = mysqli_query($conn, $query) or die("Could not Perform the First Query");
if (mysqli_num_rows($sql) == 0){
    echo "Original Password Doesn't Match Our Records!<br>";
    echo "Redirecting in (3) seconds";
    header('Refresh: 3; changePass.php');
    exit();
}

//checking if new password inputs match
if (strcmp($newPass,$newPass1) !== 0){
    echo "New Passwords Don't Match!<br>";
    echo "Redirecting in (3) seconds";
    header('Refresh: 3; changePass.php');
    exit();
}

//encrypting new password
$passen = md5($newPass);

//updating password in database
$query = "update user set password = '$passen' where user_id = $user_id";
$sql = mysqli_query($conn, $query) or die("Could not Perform the Second Query");

//success message
echo "Password Successfully Changed!<br>";
echo "Redirecting to Home Page in (1) seconds";
header('Refresh: 1; mtumarket.php');

?>