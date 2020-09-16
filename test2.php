<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "LabourChauraha");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM labourers";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Aadhar</th>";
                echo "<th>Location</th>";
				echo "<th>Phone</th>";
                echo "<th>Start Date</th>";
                echo "<th>End Date</th>";
				echo "<th>Skills</th>";
				echo "<th>Pay</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['aadhar'] . "</td>";
                echo "<td>" . $row['location'] . "</td>"; 
				echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['sdate'] . "</td>";
                echo "<td>" . $row['edate'] . "</td>";
                echo "<td>" . $row['skills'] . "</td>";
                echo "<td>" . $row['money'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
