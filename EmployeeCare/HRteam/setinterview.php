<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();
        $applicant_id=$_GET['AppID'];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Interview_Date = $_POST['Interview_Date'];
    $Status = $_POST['Status'];
    $JobOpID = $_POST['JobOpID'];
        
    $sq1= "INSERT INTO application (InterviewDate,Status,JobOpID,AppID) values ('$Interview_Date','$Status','$JobOpID','$applicant_id')";
    if ($conn->query($sq1) === TRUE) {
        echo "Employee added successfully";
    } else {
        echo "Error adding employee: " . $conn->error;
    }
}
    

    $conn->close();

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Set Interview Information</title>
        <style>
        body {
            background-color: gray;
            font-family: Arial, sans-serif;
            height: 150vh;
            margin: 0;
            justify-content: center;
        }

        .content {
            display: flex;
            align-items: center;



        }

        .header {

            color: black;
            padding: 20px;
            text-align: center;
        }

        form {
            text-align: center;
            padding: 40px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: white;
            width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    </head>
    <body>
        <h2><center>Inteiview Information</center></h2>
        <form method="POST">
            <div class ="content">
                <lable for="Interview_Date">Interview Date:</lable>
                <input type="date" id="Interview_Date" name="Interview_Date" required><br><br>
            </div>
            <div class ="content">
                <lable for="Status">Status:</lable>
                <input type="text" id="Status" name="Status" required><br><br>
            </div>
            <div class ="content">
                <lable for="JobOpID">Job Opening ID:</lable>
                <input type="number" id="JobOpID" name="JobOpID" required><br><br>
            </div>
    
            <input type="submit" value="submit">
        </form>
    </body>
</html>

