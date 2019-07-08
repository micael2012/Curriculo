<?php


$servername = "mmysql669.umbler.com";
$username = "micael";
$database = "atento";
$password = "atento2019";
//  Create a new connection to the MySQL database using PDO
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

?> 