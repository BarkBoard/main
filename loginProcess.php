<?php
session_start();
extract($_POST);
include("serverconnect.php");

//encrypting password
$passen = md5($pass);

//query
$sql=mysqli_query($conn,"SELECT * FROM user where email='$email' and password='$passen'");
$row  = mysqli_fetch_array($sql);
if(is_array($row))
{
    $_SESSION['user'] = $row['user_id'];
    $_SESSION['email']=$row['email'];
    $_SESSION['first_name']=$row['first_name'];
    $_SESSION['last_name']=$row['last_name'];
    $_SESSION['phone']=$row['phone'];

    echo "<br>Login Successful!<br>";
    header('Refresh: 1; mtumarket.php');
    exit();
    
}
else
{
    echo "Username or Password Incorrect!<br>";
    echo "Redirecting in (1) seconds";
    header('Refresh: 1; loginPage.php');
    exit();
}

?>