<?php
session_start();
include_once("../config/dbUtil.php");
$conn = getConnection();

// // Assuming you have sanitized and validated the input
$userID = $_SESSION['id'];

// Use a prepared statement to update the record
$updatesql = "UPDATE notification SET notifStatus=? WHERE notifReceiverID=?";
$stmt = mysqli_prepare($conn, $updatesql);
$notifStatus = 'seen';

if ($stmt) {
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "si", $notifStatus, $userID);

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
