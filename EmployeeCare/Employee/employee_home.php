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
    <title>HR Team Portal</title>
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
        <h1>Employee</h1>
        </center>
    </div>
    <div>
        <h2>Attendance Details</h2>
        <form action="attendance_detail.php">
        <button type='submit' name='Attendance Details'>Mark attendance</button>
        </form>
    </div>
    <div>
        <h2>Employee Details</h2>
        <form action="view_employee.php">
        <button type='submit' name='view employee detail'>View your details</button>
        </form>
    </div>
    <div>
        <h2>Apply For Leaves</h2>
        <form action="apply_leave.php">
        <button type='submit' name='Apply leave'>apply</button>
        </form>
    </div>
    <div>
        <h2>View Payslip</h2>
        <form action="view_payslip.php">
        <button type='submit'name='View Payslip'> click here</button>
        </form>
    </div>
    
</body>