<?php
include_once('../config/dbUtil.php');

$conn = getConnection();
$userID = $_GET['userID'];

// Use prepared statement to update the status
$sql = "UPDATE user SET Status = ? WHERE userID = ?";

if ($stmt = mysqli_prepare($conn, $sql)) {
    // Bind the parameters
    mysqli_stmt_bind_param($stmt, "si", $_POST['status'], $userID);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../../client/pages/admin/usersList.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Error preparing statement: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
