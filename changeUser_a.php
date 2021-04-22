<?php
session_start();

echo "<br>";
echo "<br>";

extract($_POST);
include("serverconnect.php");

//getting userId from session
$user_id = $_SESSION['user'];

//setting variables from post...may be null
$origPass = $_POST['origPass'];
$newPass = $_POST['newPass'];
$newPass1 = $_POST['newPass1'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];


//passwords
if ((strcmp($origPass,'') !== 0) && (strcmp($newPass,'') !== 0) && (strcmp($newPass1,'') !== 0) ){
    //encrypting original Password
    $passen = md5($origPass);

    //recieve original password
    $query= "SELECT password FROM user where user_id = $user_id and password='$passen'";
    $sql = mysqli_query($conn, $query) or die("Could not Perform the Password Recieve Query");
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
    $sql = mysqli_query($conn, $query) or die("Could not Perform the Password Update Query");

    //success message
    echo "Password Successfully Changed!<br>";
}


if ((strcmp($first_name,'') !== 0)){
    $query= "UPDATE user SET first_name = '$first_name' where user_id = $user_id";
    $sql = mysqli_query($conn, $query) or die("Could not Perform the First Name Update Query");
    
    $_SESSION['first_name'] = $first_name;

    //success message
    echo "First Name Successfully Changed!<br>";
}
if ((strcmp($last_name,'') !== 0)){
    $query= "UPDATE user SET last_name = '$last_name' where user_id = $user_id";
    $sql = mysqli_query($conn, $query) or die("Could not Perform the Last Name Update Query");
    
    $_SESSION['last_name'] = $last_name;
    //success message
    echo "Last Name Successfully Changed!<br>";
}
if ((strcmp($email,'') !== 0)){
    $query= "UPDATE user SET email = '$email' where user_id = $user_id";
    $sql = mysqli_query($conn, $query) or die("Could not Perform the Email Update Query");
    
    $_SESSION['email'] = $email;

    //success message
    echo "Email Address Successfully Changed!<br>";
}
if ((strcmp($phone,'') !== 0)){
    $query= "UPDATE user SET phone = '$email' where user_id = $user_id";
    $sql = mysqli_query($conn, $query) or die("Could not Perform the Phone Number Update Query");
    
    $_SESSION['phone'] = $phone;

    //success message
    echo "Phone Number Successfully Changed!<br>";
}

echo "Redirecting to User Page in (3) seconds";
header('Refresh: 3; userPostings.php');

?>