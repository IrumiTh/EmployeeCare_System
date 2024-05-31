<?php
    include("../config.php"); // Assuming this file contains your database connection information
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Qualification = $_POST['qualification'];
        $AppID = isset($_POST['AppID']) ? intval($_POST['AppID']) : 0;
        $sql = "INSERT INTO qualification (AppID,Qualification) 
        VALUES ('$AppID','$Qualification')";

if ($conn->query($sql) === TRUE) {
    echo "This added successfully";
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
    <title>Add Employee</title>
    <style>
        body {
            background-color: white;
            font-size: large; 

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
    <h3>Qualifications</h3>
    <form method="POST">
        <div class="content">
            <input type="hidden" name="AppID" value="<?php echo isset($_GET['AppID']) ? htmlspecialchars($_GET['AppID']) : ''; ?>">
            <input type="text" id="qualification" name="qualification" required>
            <button type='submit' name='applicant qualifi'>add this qualification</button>
        </div>
    </form>
</body>

</html>

