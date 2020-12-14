<h2>Welocome to Project - Employee List Page</h2>
<table>
    <tr>
        <th>Project Id</th>
        <th>Project Name</th>
        <th>Employee Id</th>
        <th>Employee Name</th>
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

    $sql = "SELECT emp_proj.projId, project.name, emp_proj.empId, emp.firstname, emp.lastname  
        FROM ((emp_proj
        INNER JOIN project ON emp_proj.projId = project.id)
        INNER JOIN emp ON emp_proj.empId = emp.id)";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        //output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>".$row["projId"]."</td>
            <td>".$row["name"]."</td>
            <td>".$row["empId"]."</td>
            <td>".$row["firstname"]." ".$row["lastname"] ."</td>
        </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>There are no Project - Employee relations in the database.</td></tr>";
    }
    
    $link->close();
?>
</table>