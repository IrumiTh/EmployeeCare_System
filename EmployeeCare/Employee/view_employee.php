<?php
    include("../config.php"); // Assuming this file contains your database connection information
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $EmpID = $_POST['EmpID'];
        $sql = "SELECT * FROM employee WHERE EmpID=$EmpID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Address</th>
            <th>Basic Salary</th>
            <th>Update</th>
            
            
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
                <td>" . $row["BasicSalary"] . "</td>
                <td style='text-align: center;'>
                    <a href='update_employee.php?EmpID=$row[EmpID]'>update</a>
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
    <title>Employee</title>
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
        <div>
            <label for="EmpID">Employee ID:</label>
            <input type="text" id="EmpID" name="EmpID" required><br><br>
            <input type="submit" value="Show Details">
        </div>
    </form>
</body>

</html>
