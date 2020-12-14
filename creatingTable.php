<?php
$servername = "localhost";
$username = "srihi";
$password = "srihi1234";
$dbname = "employee1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table emp
$sql = "CREATE TABLE emp (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
moblieNo VARCHAR(15) NOT NULL,
dateOfBirth VARCHAR(15),
gender VARCHAR(10),
city VARCHAR(20),
hobbies VARCHAR(100)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table emp created successfully.\n";
} else {
  echo "Error creating table: " . $conn->error . "\n";
}

// sql to create table project
$sql = "CREATE TABLE project (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
description VARCHAR(100),
startDate VARCHAR(15),
endDate VARCHAR(15)
)";
  
if ($conn->query($sql) === TRUE) {
  echo "Table emp created successfully.\n";
} else {
  echo "Error creating table: " . $conn->error . "\n";
}

// sql to create table project
$sql = "CREATE TABLE emp_proj (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
empId INT,
projId INT,
FOREIGN KEY (empId) REFERENCES emp(id) ON DELETE CASCADE,
FOREIGN KEY (projId) REFERENCES project(id) ON DELETE CASCADE
)";

if ($conn->query($sql) === TRUE) {
  echo "Table emp_proj created successfully.\n";
} else {
  echo "Error creating table: " . $conn->error . "\n";
}

$conn->close();
?>