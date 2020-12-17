<section id="updateProject">
    <h2>Welcome to Project Update Page</h2>
    <form action="#successUpdateProject" method="POST">
        <fieldset>
            <legend>Project Form</legend>
            <div class="input">
                <label for="updateProjid">Project Id(required) :</label>
                <input type="text" id="updateProjid" name="updateProjid" value="" required aria-required="true">
            </div>

            <div class="input">
                <label for="updateStartDate">Start Date (required) :</label>
                <input type="date" id="updateStartDate" name="updateStartDate" required aria-required="true">
            </div>

            <div class="input">
                <label for="updateEndDate">End Date (required) :</label>
                <input type="date" id="updateEndDate" name="updateEndDate" required aria-required="true">
            </div>


            <div class="submit">
                <input type="submit" value="Submit">
            </div>
        </fieldset>
    </form>
</section>

<section id="successUpdateProject">
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
$id = mysqli_real_escape_string($link, $_REQUEST['updateProjid']);
$startDate = mysqli_real_escape_string($link, $_REQUEST['updateStartDate']);
$endDate = mysqli_real_escape_string($link, $_REQUEST['updateEndDate']);
 
// Attempt update query execution
if((!empty($id))&&(!empty($startDate))&&(!empty($endDate))){
$sql = "UPDATE project SET startDate='$startDate' , endDate='$endDate' WHERE id='$id'";

if(mysqli_query($link, $sql)){
    echo "<h2>Project Updated Sucessfully</h2>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

// Close connection
mysqli_close($link);
?>
</section>
