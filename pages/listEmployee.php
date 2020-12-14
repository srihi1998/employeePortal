<h2>Welocome to Employees List Page</h2>
<table>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Moblie No</th>
        <th>Date Of Birth</th>
        <th>Gender</th>
        <th>City</th>
        <th>Hobbies</th>
    </tr>
<?php
    $servername = "localhost";
    $username = "srihi";
    $password = "srihi1234";
    $dbname = "employee1";

    // Create connection
    $link = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "SELECT id, firstname, lastname, moblieNo, dateOfBirth, gender, city, hobbies FROM emp";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        //output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["firstname"]."</td>
            <td>".$row["lastname"]."</td>
            <td>".$row["moblieNo"]."</td>
            <td>".$row["dateOfBirth"]."</td>
            <td>".$row["gender"]."</td>
            <td>".$row["city"]."</td>
            <td>".$row["hobbies"]."</td>
        </tr>";
        }
    } else {
        echo "<tr><td colspan='8'>There are no employees in the database.</td></tr>";
    }
    
    $link->close();
?>
</table>