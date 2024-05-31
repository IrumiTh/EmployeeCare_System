<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();
$sql = "SELECT * FROM employee JOIN employee_worksin ON employee.EmpID=employee_worksin.EmpID JOIN department ON department.DeptID=employee_worksin.DeptID JOIN jobrole ON jobrole.JobID=employee_worksin.JobID ;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<br><br>";
    echo "Employee Details";
    echo "<table border='1'>
        <tr>
            <th>Employee ID</th>
            <th>Employee First Name</th>
            <th>Employee Last Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Address</th>
            <th>ManagerID</th>
            <th>Basic Salary</th>
            <th>Department</th>
            <th>Job Title</th>
            <th>Delete Employee</th>
            <th>Update Details</th>

        </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["EmpID"] . "</td>
                <td>" . $row["Fname"] . "</td>
                <td>" . $row["Lname"] . "</td>         
                <td>" . $row["Gender"] . "</td>
                <td>" . $row["DOB"] . "</td>
                <td>" . $row["Email"] . "</td>
                <td>" . $row["Address"] . "</td>
                <td>" . $row["ManagerID"] . "</td>
                <td>" . $row["BasicSalary"] . "</td>
                <td>" . $row["Name"] . "</td>
                <td>" . $row["Title"] . "</td>
                <td style='text-align: center;'>
                    <a href='delete.php?EmpID=$row[EmpID]'>Delete Employee</a>
                </td>
                <td style='text-align: center;'>
                    <a href='update.php?employee_id=$row[EmpID]'>Update Employee</a>
                </td>

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
    <title>Add Employee</title>
    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            height: 150vh;
            margin: 0;
            justify-content: center;
            font-size:15px ;
        }
        
    </style>
</head>
</html>