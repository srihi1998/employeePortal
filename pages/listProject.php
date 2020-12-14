<h2>Welocome to Projects List Page</h2>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Start Date</th>
        <th>End Date</th>
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

    $sql = "SELECT id, name, description, startDate, endDate FROM project";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        //output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["name"]."</td>
            <td>".$row["description"]."</td>
            <td>".$row["startDate"]."</td>
            <td>".$row["endDate"]."</td>
        </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>There are no projects in the database.</td></tr>";
    }
    
    $link->close();
?>
</table>