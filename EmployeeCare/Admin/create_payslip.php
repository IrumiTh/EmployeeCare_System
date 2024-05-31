<?php
    include("../config.php"); // Assuming this file contains your database connection information
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $month = $_POST['month'];
        echo "Attendance record of a month";
        
        $sql = "SELECT EmpID, COUNT(ArivalTime) AS noofattendance  FROM attendance WHERE MONTH(Date) = $month GROUP BY(EmpID)";
        $result_attendance = $conn->query($sql);
        
        if ($result_attendance->num_rows > 0) {
            echo "<table border='1'>
                <tr>
                    <th>Empid</th>
                    <th>No of Attendance</th>

                </tr>";

        while($row = $result_attendance->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["EmpID"] . "</td>
                <td>" . $row["noofattendance"] . "</td>

            </tr>";
        }

        echo "</table>";
    } else {
        echo "No attendance record for the selected month.";
    }
    
    
    $sq2 = "SELECT EmpID, COUNT(LeaveID) AS noofleaves  FROM leave_request WHERE MONTH(StartDate) = $month GROUP BY(EmpID)";
    $result_leaves = $conn->query($sq2);
    
    if ($result_leaves->num_rows > 0) {
        echo "<br>Leaves record of a month";
        echo "<table border='1'>
            <tr>
                <th>Empid</th>
                <th>No of leaves</th>

            </tr>";

        while($row = $result_leaves->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["EmpID"] . "</td>
                <td>" . $row["noofleaves"] . "</td>

            </tr>";
        }
        echo "</table>";
    } else {
        echo "<br><br>No leaves record for the selected month.";
    }
}


    
echo"<br><br>";

    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
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
    
    <form method="GET" >
        <div>
            <label for="EmpID">Empoyee ID:</label>
            <input type="text" id="EmpID" name="EmpID" required><br><br>

            <label for="Date">Date:</label>
            <input type="date" id="Date" name="Date" required><br><br>

            
            <label for="Allowance">Allowance:</label>
            <input type="text" id="Allowance" name="Allowance" required><br><br>
            
            <label for="Bonus">Bonus:</label>
            <input type="text" id="Bonus" name="Bonus" required><br><br>
            
            <label for="Deduction">Deduction:</label>
            <input type="text" id="Deduction" name="Deduction" required><br><br>
            
            <input type="submit" value="create">
            
        </div>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $EmpID = $_GET['EmpID'];
            $Date=$_GET['Date'];
            $Allowance = $_GET['Allowance'];
            $Bonus = $_GET['Bonus'];
            $Deduction = $_GET['Deduction'];
        
            $Total = $Allowance + $Bonus - $Deduction;
        
        
            $sql = "INSERT INTO payslip(Date,Allowance,Bonus,EmpID,Deduction)
                    VALUES ('$Date','$Allowance','$Bonus','$EmpID','$Deduction')";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
            echo "<br><br>Total Salary: $Total";
            $conn->close();
            }
    ?>
</body>

</html>

