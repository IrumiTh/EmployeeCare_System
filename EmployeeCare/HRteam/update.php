<?php
include("../config.php"); // Assuming this file contains your database connection information
session_start();

// Check if employee_id is provided in the URL
if (isset($_GET['employee_id'])) {
    $employee_id = $_GET['employee_id'];

    // Fetch existing data based on employee_id
    $sql_select = "SELECT * FROM employee WHERE EmpID = $employee_id";
    $result = $conn->query($sql_select);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $existing_Fname = $row['Fname'];
        $existing_Lname = $row['Lname'];
        $existing_Gender = $row['Gender'];
        $existing_DOB = $row['DOB'];
        $existing_Email = $row['Email'];
        $existing_Address = $row['Address'];
        $existing_ManagerID = $row['ManagerID'];
        $existing_salary = $row['BasicSalary'];
    } else {
        echo "Employee not found";
        exit;
    }
} else {
    echo "Employee ID not provided";
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$new_Fname = $_POST['new_Fname'];
$new_Lname = $_POST['new_Lname'];
$new_Gender = $_POST['new_Gender'];
$new_DOB = $_POST['new_DOB'];
$new_Email = $_POST['new_Email'];
$new_Address = $_POST['new_Address'];
$new_ManagerID = $_POST['new_ManagerID'];
$new_salary = $_POST['new_salary'];
// $employee_id = $_GET['employee_id'];
$sql = "UPDATE employee SET Fname='$new_Fname',Lname='$new_Lname',Gender='$new_Gender',DOB='$new_DOB',Email='$new_Email',Address='$new_Address',ManagerID='$new_ManagerID', BasicSalary='$new_salary' WHERE EmpID = $employee_id";

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
            <h1>Update Employee Information</h1>
            <lable for="new_Fname">First Name:</lable>
            <input type="text" id="new_Fname" name="new_Fname" value="<?php echo $existing_Fname; ?>" required><br><br>
            <lable for="new_Lname">Last Name:</lable>
            <input type="text" id="new_Lname" name="new_Lname" value="<?php echo $existing_Lname; ?>" required><br><br>
            <lable for="new_Gender">Gender:</lable>
            <input type="text" id="new_Gender" name="new_Gender" value="<?php echo $existing_Gender; ?>" maxlength="1" required><br><br>
            <lable for="new_DOB">DOB:</lable>
            <input type="date" id="new_DOB" name="new_DOB" value="<?php echo $existing_DOB; ?>" required><br><br>
            <lable for="new_Email">Email:</lable>
            <input type="text" id="new_Email" name="new_Email" value="<?php echo $existing_Email; ?>" required><br><br>
            <lable for="new_Address">Address:</lable> 
            <input type="text" id="new_Address"name="new_Address" value="<?php echo $existing_Address; ?>" required><br><br>
            <lable for="new_ManagerID">ManagerID:</lable>
            <input type="number" id="new_ManagerID"name="new_ManagerID" value="<?php echo $existing_ManagerID; ?>" required><br><br>
            <lable for="new_BasicSalary">Basic Salary:</lable>
            <input type="number" id="new_salary"name="new_salary" value="<?php echo $existing_salary; ?>" required><br><br>
        </div>
        <input type="submit" value="Update">
    </form>
    </body>
</html>
