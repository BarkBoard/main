<?php

   $conn = mysqli_connect('localhost', 'pi', 'teame2021', 'project');

   //check connection
   if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error();
   }else{
      echo 'Connection successful';
   }

?>

<!DOCTYPE html>
<html>
   <?php include('templates/header.php'); ?>
   <?php include('templates/footer.php'); ?>
</html>