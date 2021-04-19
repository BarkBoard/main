<?php

session_start();
if (!isset($_SESSION['user'])){
    echo "You weren't logged in<br>";
	header('Refresh: 1; mtumarket.php');
	exit;
}

echo "Logout Successful";
session_destroy();
header('Refresh: 1; mtumarket.php');

?>