<?php

$conn = new mysqli('localhost','web','Sunbeam@123','user_credentials');
session_start();
//Connection - Check
if ($conn->connect_error){
        die("Connetion Failed". $conn->connect_error);
}

//Success
//echo "CONNECTION WORKING";
//echo $_SESSION['user'];
?>

