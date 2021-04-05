

<label for="uname"><b style="color:#e6e600;">Username: </b></label>

<input type="text" placeholder="Enter Username" name="uname" required>
    <br>

<label for="psw"><b style="color:#e6e600;">Password: </b></label>
<input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <center>
<div class="button" onclick="location.href='mtumarket.php'">Login</div>
    <br>




    $sql=mysqli_query($conn,"SELECT * FROM user where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit();
}
else(isset($_POST['save']))
{

    $query="INSERT INTO user (first_name, last_name, email, password, phone) VALUES ('$first_name', '$last_name', '$email', 'md5($pass)', '$phone')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
    header ("Location: login.php?status=success");

    <div class="text-center">Account Created <a href="mtumarket.php">HOME</a></div>
    
    mysqli_close($conn);
}



$sql=mysqli_query($conn,"SELECT * FROM user where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit();
}
else())
{

    $query="INSERT INTO user (first_name, last_name, email, password, phone) VALUES ('$first_name', '$last_name', '$email', 'md5($pass)', '$phone')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
    header ("Location: login.php?status=success");

    <div class="text-center">Account Created <a href="mtumarket.php">HOME</a></div>
    
    mysqli_close($conn);



?>




<?php
extract($_POST);
if ($pass !== $cpass){

    <div class="text-center">Passwords Must Match <a href="register.php">TRY AGAIN</a></div>
}

include("serverconnect.php");
$sql=mysqli_query($conn,"SELECT * FROM user where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    <div class="text-center">An Account With This Email Already Exists <a href="register.php">TRY AGAIN</a></div>
}
else
{
    $passen = md5($pass);

    //having trouble getting phone number in
    $query="INSERT INTO user(first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$passen')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");

    <div class="text-center">Account Creation Successful <a href="mtumarket.php">HOME</a></div>

    header ("Location: loginPage.php?status=success");
    exit;
}

?>
