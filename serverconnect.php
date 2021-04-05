<?php

   $conn = mysqli_connect('localhost', 'pi', 'teame2021', 'project');

   //check connection
   if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error();
   }

?>