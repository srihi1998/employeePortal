<section id="updateEmployee">
    <h2>Welocome to Employee Update Page</h2>
    <form action="#successUpdateEmployee" method="POST">
        <fieldset>
            <legend>Employee Form</legend>
            <div class="input">
                <label for="updateEmpid">Employee Id(required) :</label>
                <input type="text" id="updateEmpid" name="updateEmpid" value="" required aria-required="true">
            </div>

            <div class="input">
                <label for="updatemoblieNo">Moblie Number (required) :</label>
                <input type="tel" id="updatemoblieNo" name="updatemoblieNo" value="" required aria-required="true" 
                pattern="\+91+\s[789][0-9]{9}+">
                <span id="contactNo-format" class="help">Example: +91 9876543210 </span>
            </div>

            <div class="submit">
                <input type="submit" value="Submit">
            </div>
        </fieldset>
    </form>
</section>

<section id="successUpdateEmployee">
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
$id = mysqli_real_escape_string($link, $_REQUEST['updateEmpid']);
$moblieNo = mysqli_real_escape_string($link, $_REQUEST['updatemoblieNo']);
 
// Attempt update query execution
if((!empty($id))&&(!empty($moblieNo))){
$sql = "UPDATE emp SET moblieNo='$moblieNo' WHERE id='$id'";

if(mysqli_query($link, $sql)){
    echo "<h2>Employee Updated Sucessfully</h2>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

// Close connection
mysqli_close($link);
?>
</section>
