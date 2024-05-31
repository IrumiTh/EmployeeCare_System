<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
$new_Fname = $_POST['new_Fname'];
$new_Lname = $_POST['new_Lname'];
$new_NID = $_POST['new_NID'];
$new_Contact = $_POST['new_Contact'];
$AppID = $_GET['AppID'];
$sql = "UPDATE applicant SET Fname='$new_Fname',Lname='$new_Lname',NID='$new_NID',Contact='$new_Contact' WHERE AppID = $AppID";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
}

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Applicant Information</title>
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
        <div class=content>
            <h1>Update Applicant Information</h1>
            <lable for="new_Fname">First Name:</lable>
            <input type="text" id="new_Fname" name="new_Fname" required><br><br>
            <lable for="new_Lname">Last Name:</lable>
            <input type="text" id="new_Lname" name="new_Lname" required><br><br>
            <lable for="new_NID">NID:</lable>
            <input type="text" id="new_NID" name="new_NID" required><br><br>
            <lable for="new_Contact">Contact:</lable>
            <input type="text" id="new_Contact" name="new_Contact" required><br><br>
            
            
        </div>
        <input type="submit" value="Update">
    </form>
    </body>
</html>
