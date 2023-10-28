<?php
include_once("../config/dbUtil.php");
$conn = getConnection();

// Assuming you have sanitized and validated the input
$eventID = $_GET['event'];
$remarks = $_POST['remark'];
// Use a prepared statement to update the record
$sql = "UPDATE activity SET remarks=? WHERE activityID=?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "si", $remarks, $eventID);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        header('Location: ../../client/pages/user/events.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Error preparing statement: " . mysqli_error($conn);
}

// Close the database connection
closeConnection($conn);
