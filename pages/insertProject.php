<?php

$servername = "localhost";
$username = "srihi";
$password = "srihi1234";
$dbname = "employee1";

/* Attempt MySQL server connection.*/
$link = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$description = mysqli_real_escape_string($link, $_REQUEST['description']);
$startDate = mysqli_real_escape_string($link, $_REQUEST['startDate']);
$endDate = mysqli_real_escape_string($link, $_REQUEST['endDate']);

// Attempt insert query execution
if((!empty($name))&&(!empty($description))&&(!empty($startDate))&&(!empty($endDate))){
$sql = "INSERT INTO project (name, description, startDate, endDate) 
VALUES ('$name', '$description', '$startDate' , '$endDate')";
if(mysqli_query($link, $sql)){
    echo "<h2>Project added Sucessfully</h2>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
// Close connection
mysqli_close($link);
?>