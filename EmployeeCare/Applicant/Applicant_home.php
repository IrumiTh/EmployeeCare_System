<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();
$sql = "SELECT * FROM jobopening join jobrole on jobopening.JobID=jobrole.JobID;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Job Openings";
    echo "<table border='1'>
        <tr>
            <th>Posted Date</th>
            <th>Deadline</th>
            <th>Title</th>
            <th>Description</th>
        </tr>";


        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["PostedDate"] . "</td>
                <td>" . $row["Deadline"] . "</td>
                <td>" . $row["Title"] . "</td>
                <td>" . $row["Description"] . "</td>
                </tr>";
        }

        echo "</table>";
}else {
    echo "0 results";
}

$conn->close();
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
        <h1>Applicant</h1>
        </center>
    </div>
    <div>
        <h2>Apply for a job</h2>
        <form action="applicant_detail.php">
        <button type='submit' name='apply for a job'>Apply Now</button>
        </form>
    </div>
    <div>
        <h2>See For Your Interview</h2>
        <form action="see_for_interview.php">
        <button type='submit' name='See Your interview'>Click here</button>
        </form>
    </div>
    <div>
        <h2>Update your details</h2>
        <form action="see_yourdetail.php">
        <button type='submit' name='See Your Detail'>Click here</button>
        </form>
    </div>
</body>
</html>
