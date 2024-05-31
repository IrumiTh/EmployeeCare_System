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
            padding: 10px 10px;
            font-size: 15px;
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
        <h1>HR Team Portal</h1>
        </center>
    </div>
    <div >
        <h2>Employee Details</h2>
        <form action="employee_detail.php">
        <button type='submit' name='View Employee Details'>View Employee Details</button>
        </form>
    </div>
    <div>
        <h2>Add Employee</h2>
        <form action="add_employee.php">
        <button type='submit' name='Go to Add employee'>Go to Add employee</button>
        </form>
    </div>
    <div>
        <h2>Create Job Opening</h2>
        <form action="create_jobopening.php">
        <button type='submit' name='Create Job Opening'>Create Job Openings</button>
        </form>
    </div>
    <div>
        <h2>Applicant Details</h2>
        <form action="applicant_detail.php">
        <button type='submit'name='All Aplicant Details'> All Applicant Details</button>
        </form>
    </div>
    <div>
    <h2>Previous Applications</h2>
    <form action="application_detail.php">
    <button type='submit'name='Previous Applications'>Previous Application Details</button>
    </form>
</div>
</body>