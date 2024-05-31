<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $EmpID = $_POST['EmpID'];
    $ArivalTime = $_POST['ArivalTime'];
    $DepartureTime = $_POST['DepartureTime'];
    $Date = $_POST['Date'];


    $sql = "INSERT INTO attendance (EmpID,ArivalTime,DepartureTime,Date) 
                VALUES ('$EmpID','$ArivalTime','$DepartureTime','$Date')";

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
    <title>Add Employee</title>
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
    <div class="header">
        <center>
            <h1>Mark Your Attendance</h1>
        </center>
    </div>
    <form method="POST">
        <div>
            <label for="EmpID">Employee ID:</label>
            <input type="text" id="EmpID" name="EmpID" required><br><br>

            <lable for="ArivalTime">Arival Time:</lable>
            <input type="time" id="ArivalTime" name="ArivalTime" required><br><br>

            <lable for="DepartureTime">Departure Time:</lable>
            <input type="time" id="DepartureTime" name="DepartureTime" required><br><br>

            <lable for="Date">Date:</lable>
            <input type="date" id="Date" name="Date" required><br><br>


            <input type="submit" value="Add this">
        </div>
    </form>
</body>

</html>