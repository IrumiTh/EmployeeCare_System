<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();
$sq1 ="SELECT * FROM applicant JOIN application on applicant.AppID=application.AppID JOIN jobopening on application.JobOpID=jobopening.JobOpID JOIN jobrole on jobopening.JobID=jobrole.JobID ";

$result = $conn->query($sq1);

if ($result->num_rows > 0) {
    echo "Previous job interviews";
    echo "<table border='1'>
        <tr>
            <th>Applicant First Name</th>
            <th>Applicant Last Name</th>
            <th>Applicant NID</th>
            <th>Applicant Contact</th>
            <th>Interview Date</th>
            <th>Status</th>
            <th>Posted Date</th>
            <th>Deadline</th>
            <th>Title</th>
            <th>Description</th>
        </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["Fname"] . "</td>
            <td>" . $row["Lname"] . "</td>
            <td>" . $row["NID"] . "</td>
            <td>" . $row["Contact"] . "</td>
            <td>" . $row["InterviewDate"] . "</td>
            <td>" . $row["Status"] . "</td>
            <td>" . $row["PostedDate"] . "</td>
            <td>" . $row["Deadline"] . "</td>
            <td>" . $row["Title"] . "</td>
            <td>" . $row["Description"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}
$conn->close();
?>            
