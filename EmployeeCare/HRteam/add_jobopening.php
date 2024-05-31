<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Job Opening</title>
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
        <h1>Add Job Opening</h1>
        <form method="POST">
            <div>
                <label for="PostedDate">Posted Date:</label>
                <input type="date" id="PostedDate" name="PostedDate" required><br><br>

                <label for="Deadline">Deadline:</label>
                <input type="date" id="Deadline" name="Deadline" required><br><br>

                <label for="Title">Title:</label>
                <input type="text" id="Title" name="Title" required><br><br>

                <label for="Description">Description:</label>
                <input type="text" id="Description" name="Description" required><br><br>

                <label for="Department">Department:</label>
                <input type="text" id="Department" name="Department" required><br><br>
                <input type="submit" value ="Add this job opening">
            </div>
        </form>
    </body>  
            
</html>

<?php
    include("../config.php"); // Assuming this file contains your database connection information
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $PostedDate=$_POST['PostedDate'];
    $Deadline=$_POST['Deadline'];
    $Title=$_POST['Title'];
    $Description=$_POST['Description'];
    $Department=$_POST['Department'];
    

    $sql = "SELECT JobID FROM jobrole WHERE Title='$Title' AND Description='$Description'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $jobid = $row["JobID"];
    } else {
        $jobid = null; // JobID not found
    }


    $sq2 = "INSERT INTO jobopening (PostedDate,Deadline,JobID) values ('$PostedDate','$Deadline','$jobid')";
    if ($conn->query($sq2) === TRUE) {
        echo "Employee added successfully";
    } else {
        echo "Error adding employee: " . $conn->error;
    }
    
    $conn->close();
}
    ?>



