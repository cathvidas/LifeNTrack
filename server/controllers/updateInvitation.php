<?php
include_once("../config/dbUtil.php");
$conn = getConnection();

$invitationID = $_GET['id'];
$inviteStatus = $_GET['status'];

// echo $inviteStatus;
$sql = "UPDATE invitation SET invitationStatus=? WHERE invitationID=?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "si", $inviteStatus, $invitationID);

    if (mysqli_stmt_execute($stmt)) {
        header('Location: ../../client/pages/user/events.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error preparing statement: " . mysqli_error($conn);
}

closeConnection($conn);
?>
