<?php
$servername = "localhost";
$username = "root";
$password = "******";
$database = "emiGas";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$query = mysqli_query($conn, "INSERT INTO Cliente (Cedula) VALUES ('$ced')");
if($query)
{
	echo "Funciona";
}


?> 