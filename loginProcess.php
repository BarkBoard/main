<?php
session_start();
extract($_POST);
include("serverconnect.php");


$passen = md5($pass);
$sql=mysqli_query($conn,"SELECT * FROM user where email='$email' and password='$passen'");
$row  = mysqli_fetch_array($sql);
if(is_array($row))
{
    $_SESSION["ID"] = $row['user_id'];
    $_SESSION["Email"]=$row['email'];
    $_SESSION["First_Name"]=$row['first_name'];
    $_SESSION["Last_Name"]=$row['last_name']; 
    $_SESSION["loggedin"] = true;


    header("Location: mtumarket.php");
    
}
else
{
    echo "Invalid Email ID/Password";
    echo "<br>Forwarding you to login page in 5 seconds";
    sleep(50);
    header("Location: loginPage.php");
}

?>