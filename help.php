

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





		<!-- login button -->
		<div class="login">
			<button class="loginbtn" onclick="location.href='loginPage.php'">
			Login
			</button>
		</div>





<!--image upload-->
<div class="form-group">
    <input type="file" name="pic2" placeholder="Submit a photo here!" required="required">
    <input type="submit" name="pic2Submit" class="btn btn-success btn-lg btn-block">Next</button>
</div>
<div class="form-group">
    <input type="file" name="pic2" placeholder="Submit a photo here!" required="required">
    <input type="submit" name="pic2Submit" class="btn btn-success btn-lg btn-block">Next</button>
</div>

<!--editing images userPostings.php-->\
while($row = $result->fetch_assoc()) {
    echo '<form method = "post" action= "editPosting_a.php">';
    echo '<tr>';
    echo "<td>".$row["title"]."</td><td>". "$" .$row["price"]."</td><td>".$row["category"]."</td>".$row["views"]."</td>";
    echo '<td><input type = "submit" name = "edit" value = "Edit"></td>';
    echo '</tr>';
    echo '<input type = "hidden" name = "item_id" value ="' .$row['item_id']. '">';
    echo '<input type = "hidden" name = "category" value ="' .$row['category']. '">';
    echo '</form>';

}