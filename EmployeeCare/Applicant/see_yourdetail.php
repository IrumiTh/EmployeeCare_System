<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
$AppID = $_POST['AppID'];
$sql = "SELECT * FROM applicant where AppID=$AppID;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>Applicant First Name</th>
            <th>Applicant Last Name</th>
            <th>NID</th>
            <th>Contact</th>
            <th>Update Details</th>
            </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["Fname"] . "</td>
                <td>" . $row["Lname"] . "</td>         
                <td>" . $row["NID"] . "</td>
                <td>" . $row["Contact"] . "</td>
                <td style='text-align: center;'>
                <a href='update.php?AppID=$row[AppID]'>Update</a>
                </td>
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
        <title>Update Employee Information</title>
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
            font-size: 24px; 
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
        <lable for="AppID">Enter Applicant ID:</lable>
        <input type="text" id="AppID" name="AppID" required><br><br>
        
        <input type="submit" value="see details">
        </div>

    </form>
    </body>
</html>



