<?php
    include("../config.php"); // Assuming this file contains your database connection information
    session_start();

$sql = "SELECT * FROM jobrole;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>JobID</th>
            <th>Title</th>
        </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["JobID"] . "</td>
                <td>" . $row["Title"] . "</td>
            </tr>";
        }

        echo "</table>";
}else {
    echo "0 results";
}

$sql = "SELECT * FROM department;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>DeptID</th>
            <th>Name</th>
        </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["DeptID"] . "</td>
                <td>" . $row["Name"] . "</td>
            </tr>";
        }

        echo "</table>";
}else {
    echo "0 results";
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $Gender = $_POST['Gender'];
        $DOB = $_POST['DOB'];
        $Email = $_POST['Email'];
        $Address = $_POST['Address'];
        $ManagerID = $_POST['ManagerID'];
        $DeptID = $_POST['DeptID'];
        $BasicSalary = $_POST['BasicSalary'];
        $JobID = $_POST['JobID'];
        $JoinedDate=$_POST['JoinedDate'];


        $sql = "INSERT INTO employee (Fname,Lname,Gender,DOB,Email,Address,ManagerID,BasicSalary) 
                VALUES ('$Fname','$Lname','$Gender','$DOB','$Email','$Address','$ManagerID','$BasicSalary')";
        if ($conn->query($sql) === TRUE) {
            $EmpID = $conn->insert_id;
            $sq2 = "INSERT INTO employee_worksin (DeptID,EmpID,JobID,JoinedDate)
                VALUES ('$DeptID','$EmpID','$JobID','$JoinedDate') ";

        if ($conn->query($sq2) === TRUE) {
            echo "Employee added successfully";
        } else {
            echo "Error adding employee: " . $conn->error;
        }
    } else {
        echo "Error adding employee: " . $conn->error;
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
    <h1>Add Employee</h1>
    <form method="POST">
        <div>
            <label for="Fname">Employee First Name:</label>
            <input type="text" id="Fname" name="Fname" required><br><br>

            <lable for="Lname">Employee Last Name:</lable>
            <input type="text" id="Lname" name="Lname" required><br><br>

            <lable for="Gender">Gender:</lable>
            <input type="text" id="Gender" name="Gender" maxlength="1" required><br><br>

            <lable for="DOB">DOB:</lable>
            <input type="date" id="DOB" name="DOB" required><br><br>

            <lable for="Email">Email:</lable>
            <input type="text" id="Email" name="Email" required><br><br>

            <lable for="Address">Address:</lable>
            <input type="text" id="Address" name="Address" required><br><br>

            <lable for="ManagerID">ManagerID:</lable>
            <input type="number" id="ManagerID" name="ManagerID" required><br><br>
            
            <lable for="DeptID">DeptID:</lable>
            <input type="number" id="DeptID" name="DeptID" required><br><br>
            
            <lable for="JobID">Job ID:</lable>
            <input type="number" id="JobID" name="JobID" required><br><br>
            
            <lable for="JoinedDate">Joined Date:</lable>
            <input type="date" id="JoinedDate" name="JoinedDate" required><br><br>



            <lable for="BasicSalary">Basic Salary:</lable>
            <input type="number" id="BasicSalary" name="BasicSalary" required><br><br>
            <input type="submit" value="Add Employee">
        </div>
    </form>
</body>

</html>