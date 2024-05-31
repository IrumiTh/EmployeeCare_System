<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();
$sql = "SELECT applicant.Fname, applicant.Lname, applicant.NID, qualification.Qualification,applicant.AppID
        FROM applicant
        JOIN qualification ON applicant.AppID = qualification.AppID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Applicant Details";
    echo "<table border='1'>
    
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>NID</th>
            <th>Qualifications</th>
            <th>Set Interview</th>
        </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["Fname"] . "</td>
                <td>" . $row["Lname"] . "</td>
                <td>" . $row["NID"] . "</td>
                <td>" . $row["Qualification"] . "</td>
                <td>
                    <a href='setinterview.php?AppID=$row[AppID]'>Click_here</a>
                </td>
                </tr>";
        }
        echo "</table>";
} else {
    echo "No results found.";
}
$conn->close();
?>            
                


