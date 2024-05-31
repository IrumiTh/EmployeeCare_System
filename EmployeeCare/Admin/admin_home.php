<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        body {
            background-color: gray;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: whitesmoke;
            color: black;
            padding: 20px;
            text-align: center;
        }

        .content {
            text-align: center;
            margin-top: 20px;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        button {
            background-color: white;
            color: black;
            padding: 10px 20px;
            font-size: 18px;
            border: 2px solid black;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
        }

        button:hover {
            background-color: burlywood;
        }

        
    </style>
</head>
<body>
    <div class="header">
        <center>
        <h1>Admin</h1>
        </center>
    </div>
    <div>
        <h2>Create Payslips</h2>
        <form action="show_details.php">
        <button type='submit' name='create_payslip'>click here</button>
        </form>
    </div>
    <div>
        <h2>Previous Salary View</h2>
        <form action="salary_view.php">
        <button type='submit' name='salary_view'>click here</button>
        </form>
    </div>
    
</body>