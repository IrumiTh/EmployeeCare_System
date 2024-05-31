<?php
include("../config.php"); // Assuming this file contains your database connection information
// session_start();

$employee_id = $_GET['EmpID'];

$sql = "DELETE FROM employee WHERE EmpID = $employee_id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
