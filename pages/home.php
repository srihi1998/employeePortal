<section id="home">
<h2>Welocome to Home Page</h2>
<h4>List of Employees<h4>
<ul class="links"> 
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

    $sql = "SELECT id, firstname, lastname FROM emp";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        //output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $name = $row["firstname"]. " " . $row["lastname"];
            echo "<li><a href='empDetails.php?id=$row[id]'>".$name."</a></li>";
        }
    } else {
        echo "There are no employees in the database."."<br>";
    }
    
    $link->close();
?>
</ul>
<h4>List of Projects<h4>
<ul class="links"> 
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

    $sql = "SELECT id, name FROM project";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        //output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<li><a href='projDetails.php?id=$row[id]'>".$row["name"]."</a></li>";
        }
    } else {
        echo "There are no employees in the database."."<br>";
    }
    
    $link->close();
?>
</ul>
</section>