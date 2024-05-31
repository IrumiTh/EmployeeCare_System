<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmployeeCare</title>
    <style>
        body {
            background-color: gray;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 30px;
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
            padding: 30px 60px;
            font-size: 18px;
            border: 2px solid black;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        .icon-text-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .icon {
            width: 50px; /* Adjust the icon size as needed */
            height: 50px; /* Adjust the icon size as needed */
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <center>
            <h1>Employee Care_HR</h1>
        </center>
    </div>
    <br><br><br>
    <div class="content">
        <div class="button-container">
            <form action="Employee\employee_home.php">
                <button type='submit' name='employee'>
                    <div class="icon-text-container">
                        <img src="employee.jpg" alt="Employee Icon" class="icon">
                        <span>EMPLOYEE</span>
                    </div>
                </button>
            </form>

            <form action="Manager\manager_home.php">
                <button type='submit' name='manager'>
                    <div class="icon-text-container">
                        <img src="manager.png" alt="manager Icon" class="icon">
                        <span>Manager</span>
                    </div>
                </button>
            </form>

            <form action="HRteam/HRhome.php">
                <button type='submit' name='hr'>
                    <div class="icon-text-container">
                        <img src="hrteam.png" alt="hrteam Icon" class="icon">
                        <span>HR TEAM</span>
                    </div>
                </button>
            </form>

            <form action="Applicant/Applicant_home.php">
                <button type='submit' name='applicant'>
                    <div class="icon-text-container">
                        <img src="applicant.png" alt="applicant Icon" class="icon">
                        <span>APPLICANT</span>
                    </div>
                </button>
            </form>

            <form action="Admin/admin_home.php">
                <button type='submit' name='admin'>
                    <div class="icon-text-container">
                        <img src="admin.png" alt="admin Icon" class="icon">
                        <span>ADMIN</span>
                    </div>
                </button>
            </form>
        </div>
    </div>
</body>
</html>
