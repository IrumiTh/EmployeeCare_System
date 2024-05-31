<?php
    include("../config.php"); // Assuming this file contains your database connection information
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $NID = $_POST['NID'];
        $Contact = $_POST['Contact'];
    

        $sql = "INSERT INTO applicant (Fname,Lname,NID,Contact) 
                VALUES ('$Fname','$Lname','$NID','$Contact')";

        if ($conn->query($sql) === TRUE) {
            $lastInsertedId = $conn->insert_id;
            echo"You added successfully";
            echo"Your Appcant ID=$lastInsertedId";
            echo "<a href='applicant_qualifi.php?AppID=$lastInsertedId'>Add qualification</a>";
        
        } else {
            echo "Error adding applicant: " . $conn->error;
        }

        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Applicant</title>
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
        }
    </style>
</head>

<body>
    <h1>Add Applicant</h1>
    <form method="POST">
        <div>
            <label for="Fname">Applicant First Name:</label>
            <input type="text" id="Fname" name="Fname" required><br><br>

            <lable for="Lname">Applicant Last Name:</lable>
            <input type="text" id="Lname" name="Lname" required><br><br>

            <lable for="NID">Applicant NID:</lable>
            <input type="text" id="NID" name="NID" required><br><br>

            <lable for="Contact">Applicant Contact:</lable>
            <input type="text" id="Contact" name="Contact" required><br><br>

            <button type='submit' name='applicant qualifi'>add details</button>
            
        </div>
    </form>
</body>

</html>