<?php

 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "option_travel";


$sSQL= 'SET CHARACTER SET utf8'; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


mysqli_query($conn, "SET CHARSET utf8;");   
mysqli_query($conn, "SET NAMES utf8;"); 


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$db= mysqli_select_db($conn,$dbname) or die("Couldn't select my database");


  
?>