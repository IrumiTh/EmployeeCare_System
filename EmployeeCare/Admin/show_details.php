<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
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
    
    <form action="create_payslip.php" method="POST">
        <div>
            <label for="month">month:</label>
            <input type="text" id="month" name="month" required><br><br>
    
            <input type="submit" value="Show Details">
        </div>
    </form>
</body>

</html>