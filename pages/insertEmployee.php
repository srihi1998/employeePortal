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
$firstName = mysqli_real_escape_string($link, $_REQUEST['firstName']);
$lastName = mysqli_real_escape_string($link, $_REQUEST['lastName']);
$moblieNo = mysqli_real_escape_string($link, $_REQUEST['moblieNo']);
$dateOfBirth = mysqli_real_escape_string($link, $_REQUEST['dateOfBirth']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$hobby = "";

foreach($_POST['hobby'] as $item){
    //query to delete where item = $item
    if (!empty ($item)){
        $hobby .= $item . " ";
    }
}
 
// Attempt insert query execution
if((!empty($firstName))&&(!empty($lastName))&&(!empty($moblieNo))&&(!empty($dateOfBirth))){
$sql = "INSERT INTO emp (firstname, lastname, moblieNo, dateOfBirth, gender, city, hobbies) 
VALUES ('$firstName', '$lastName', '$moblieNo' , '$dateOfBirth' , '$gender' , '$city' , '$hobby')";
if(mysqli_query($link, $sql)){
    echo "<h2>Employee added Sucessfully</h2>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

// Close connection
mysqli_close($link);
?>