<?php
session_start();

echo "<br>";
echo "<br>";

extract($_POST);

//checking password comfirms
if ($pass !== $cpass){
    //fix this
    echo "Passwords Must Match";
    echo "Redirecting in (2) seconds";
    header("Refresh: 2; register.php");
    exit();
}

include("serverconnect.php");
$sql=mysqli_query($conn,"SELECT * FROM user where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "An Account With This Email Address Already Exists<br>";
    echo "Redirecting To Login Page in (2) seconds";
    header("Refresh: 2; loginPage.php");
	exit();
}
else
{
    $passen = md5($pass);

    $query="INSERT INTO user(first_name, last_name, email, password, phone) VALUES ('$first_name', '$last_name', '$email', '$passen', '$phone')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the First Query");

    $query="Select user_id from user where email = '$email'";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Second Query");
    
    $user_id = $sql -> fetch_assoc()['user_id'];

    $_SESSION['user'] = $user_id;
    $_SESSION['email']=$email;
    $_SESSION['first_name']=$first_name;
    $_SESSION['last_name']=$last_name;

    echo $_SESSION['user'];

    echo "<br>Registration Successful!<br>";
    echo "Weclcome '$first_name'!<br>";
    header('Refresh: 1; mtumarket.php');
    exit();
}

?>
