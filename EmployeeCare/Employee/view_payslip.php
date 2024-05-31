<?php
    include("../config.php"); // Assuming this file contains your database connection information
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $EmpID = $_POST['EmpID'];
        $sql = "SELECT * FROM payslip WHERE EmpID=$EmpID";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>EmpID</th>
            <th>Date</th>
            
            <th>Allowance</th>
            <th>Bonus</th>
            <th>Deduction</th>
            
            

        </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["EmpID"] . "</td>
                <td>" . $row["Date"] . "</td>
                <td>" . $row["Allowance"] . "</td>         
                <td>" . $row["Bonus"] . "</td>
                <td>" . $row["Deduction"] . "</td>
                

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
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: white; 
        }

        form {
            text-align: center;
            padding: 60px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: gray;
        }
        label {
            font-size: 18px; 
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
            <input type="submit" value="view">
        </div>
    </form>
</body>

</html>