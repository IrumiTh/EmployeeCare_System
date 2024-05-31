<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();
$sql = "SELECT * FROM payslip JOIN employee ON employee.EmpID=payslip.EmpID;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>Employee First Name</th>
            <th>Employee Last Name</th>
            <th>Allowance</th>
            <th>Bonus</th>
            <th>Deduction</th>
            <th>Date</th>
        </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["Fname"] . "</td>
                <td>" . $row["Lname"] . "</td>
                <td>" . $row["Allowance"] . "</td>         
                <td>" . $row["Bonus"] . "</td>
                <td>" . $row["Deduction"] . "</td>
                <td>" . $row["Date"] . "</td>
            </tr>";
        }
    
        echo "</table>";
}else {
    echo "0 results";
}
    
$conn->close();
?>