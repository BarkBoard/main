<?php


extract($_POST);
if ($pass !== $cpass){
    //fix this
    echo "Passwords Must Match";
    header("Location: register.php");
}

include("serverconnect.php");
$sql=mysqli_query($conn,"SELECT * FROM user where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    //fix this
    echo "Email Id Already Exists";
    header("Location: loginPage.php");
	exit;
}
else
{
    $passen = md5($pass);

    //having trouble getting phoen number in
    $query="INSERT INTO user(first_name, last_name, email, password, phone) VALUES ('$first_name', '$last_name', '$email', '$passen', '$phone')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");

    echo "Account creation successful";

    //fix this
    header ("Location: loginPage.php?status=success");
    header ("Location: mtumarket.php");
    exit;
}

?>
