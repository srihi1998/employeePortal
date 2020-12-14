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
$empId = mysqli_real_escape_string($link, $_REQUEST['empId']);
$projId = mysqli_real_escape_string($link, $_REQUEST['projId']);
 
// Attempt insert query execution
if((!empty($empId))&&(!empty($projId))){
$sql = "INSERT INTO emp_proj (empId, projId) 
VALUES ('$empId', '$projId')";

if(mysqli_query($link, $sql)){
    echo "<h2>Details added Sucessfully</h2>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

// Close connection
mysqli_close($link);
?>