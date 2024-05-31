<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();
$sql = "SELECT * FROM application  JOIN applicant ON application.AppID=applicant.AppID;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>Applicant First Name</th>
            <th>Applicant Last Name</th>
            <th>NID</th>
            <th>InterviewDate</th>
        </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["Fname"] . "</td>
                <td>" . $row["Lname"] . "</td>         
                <td>" . $row["NID"] . "</td>
                <td>" . $row["InterviewDate"] . "</td>
                
                

            </tr>";
        }

        echo "</table>";
}else {
    echo "0 results";
}

$conn->close();
?>