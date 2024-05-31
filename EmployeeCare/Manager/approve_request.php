<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
$MngID = $_POST['MngID'];
$stmt = $conn->prepare("SELECT * FROM employee JOIN leave_request ON leave_request.EmpID=employee.EmpID WHERE ManagerID=? AND Approved IS NULL");
    $stmt->bind_param("s", $MngID);
    $stmt->execute();

    $result = $stmt->get_result();
    
if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Type</th>
            <th>Approve Leave</th>
            
            </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["EmpID"] . "</td>
                <td>" . $row["Fname"] . "</td>
                <td>" . $row["Lname"] . "</td>         
                <td>" . $row["StartDate"] . "</td>
                <td>" . $row["EndDate"] . "</td>
                <td>" . $row["Type"] . "</td>
                <td style='text-align: center;'>
                    <a href='approved.php?LeaveID=$row[LeaveID]'>Approve</a>
                </td>
            </tr>";
        }
    
    echo "</table>";
    }else {
        echo "0 results";
    }
    
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>leave request</title>
        <style>
        body {
            background-color: white; 
        }

        form {
            text-align: left;
            padding: 60px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: gray;
        }
        label {
            font-size: 24px; 
        }

        input {
            font-size: 16px;
        }

        input[type="submit"] {
            font-size: 18px; 
        }
    </style>
    </head>
    <body>
    <form method="POST">
        <div class=content>
        <lable for="MngID">Enter Manager ID:</lable>
        <input type="text" id="MngID" name="MngID" required><br><br>
        
        <input type="submit" value="view">
        </div>

    </form>
    </body>
</html>



