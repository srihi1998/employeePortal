<section id="deleteProject">
    <h2>Welcome to Project Delete Page</h2>
    <form action="#successDeleteProject" method="POST">
        <fieldset>
            <legend>Project Form</legend>
            <div class="input">
                <label for="idProjDelete">Project Id(required) :</label>
                <input type="text" id="idProjDelete" name="idProjDelete" value="" required aria-required="true">
            </div>

            <div class="submit">
                <input type="submit" value="Delete">
            </div>
        </fieldset>
    </form>
</section>

<section id="successDeleteProject">
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
$id = mysqli_real_escape_string($link, $_REQUEST['idProjDelete']);
 
// Attempt delete query execution
if(!empty($id)){
$sql = "DELETE FROM project WHERE id='$id'";

if(mysqli_query($link, $sql)){
    echo "<h2>Project Deleted Sucessfully</h2>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

// Close connection
mysqli_close($link);
?>
</section>
