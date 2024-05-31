<?php
include("../config.php");

if (isset($_GET['LeaveID'])) {
    $LeaveID = $_GET['LeaveID'];

    
    $sql_update = "UPDATE leave_request SET Approved = 1 WHERE LeaveID = $LeaveID";

    if ($conn->query($sql_update) === TRUE) {
        echo "Leave approved successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Employee ID not provided";
}

$conn->close();
?>
