<?php
    include("../config.php"); // Assuming this file contains your database connection information
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $EmpID = $_POST['EmpID'];
        $StartDate = $_POST['StartDate'];
        $EndDate = $_POST['EndDate'];
        $Type = $_POST['Type'];
        

        $sql = "INSERT INTO leave_request (EmpID,StartDate,EndDate,Type) 
                VALUES ('$EmpID','$StartDate','$EndDate','$Type')";

        if ($conn->query($sql) === TRUE) {
            echo "Added successfully";
        } else {
            echo "Error adding Attendance: " . $conn->error;
        }

        $conn->close();
    }
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Leaves</title>
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

            <label for="StartDate">Leave start date:</label>
            <input type="date" id="StartDate" name="StartDate" required><br><br>

            <label for="EndDate">Leave end date:</label>
            <input type="date" id="EndDate" name="EndDate" required><br><br>

            <label for="Type">Leave Type:</label>
            <input type="text" id="Type" name="Type" required><br><br>
            <input type="submit" value="apply">
        </div>
    </form>
</body>

</html>
