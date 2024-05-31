<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();
$sq1= "SELECT * from jobopening inner join jobrole on jobopening.JobID=jobrole.JobID inner join dept_jobrole on jobrole.JobID=dept_jobrole.JobID inner join department on dept_jobrole.DeptID=department.DeptID";
$result = $conn->query($sq1);
if ($result->num_rows > 0) {
    echo "Job Openings";
    echo "<table border='1'>
        <tr>
            <th>Job Opening ID</th>
            <th>Posted Date</th>
            <th>Deadline</th>
            <th>Title</th>
            <th>Description</th>
            <th>Department</th>
        </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["JobOpID"] . "</td>
                <td>" . $row["PostedDate"] . "</td>
                <td>" . $row["Deadline"] . "</td>
                <td>" . $row["Title"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td>" . $row["Name"] . "</td>
            </tr>";
        }
        echo "</table>";
}else {
    echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Job Opening</title>
        <style>
        
        input[type="submit"] {
            font-size: 25px; 
        }
        button:hover {
            background-color: blue;
        }
    </style>
    </head>
    <body>
    <form action="add_jobopening.php">
        <button type='submit' name='Add Job Opening'>Add Job Opening</button>

    </form>
    </body>
</html>



