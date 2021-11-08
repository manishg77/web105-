<?php

$servername ="localhost";
$username = "allincyc_chargify";  
$password = "o(xr!m7H8v}=";
$databasename="allincyc_chargify";
$conn = new mysqli($servername, $username, $password,$databasename);
// Create connection
$conn =new mysqli($servername, $username, $password,$databasename);

// Check connection
if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}else{
//echo "connection established";	
}	
?>