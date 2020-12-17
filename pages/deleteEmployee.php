<section id="deleteEmployee">
    <h2>Welcome to Employee Delete Page</h2>
    <form action="#successDeleteEmployee" method="POST">
        <fieldset>
            <legend>Employee Form</legend>
            <div class="input">
                <label for="idEmpDelete">Employee Id (required) :</label>
                <input type="text" id="idEmpDelete" name="idEmpDelete" value="" required aria-required="true">
            </div>

            <div class="submit">
                <input type="submit" value="Delete">
            </div>
        </fieldset>
    </form>
</section>

<section id="successDeleteEmployee">
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
$id = mysqli_real_escape_string($link, $_REQUEST['idEmpDelete']);
 
// Attempt delete query execution
if(!empty($id)){
$sql = "DELETE FROM emp WHERE id='$id'";

if(mysqli_query($link, $sql)){
    echo "<h2>Employee Deleted Sucessfully</h2>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

// Close connection
mysqli_close($link);
?>
</section>
