<?php
$servername = "localhost";
$username = "srihi";
$password = "srihi1234";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE employee1";
if ($conn->query($sql) === TRUE) {
  echo "employee Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
